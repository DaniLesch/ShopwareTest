<?php declare(strict_types=1);

namespace Test\Controller;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Checkout\Customer\CustomerEntity;
use Shopware\Core\Content\Product\Aggregate\ProductVisibility\ProductVisibilityDefinition;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Shopware\Core\Framework\Test\TestCaseBase\KernelLifecycleManager;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Storefront\Framework\Routing\StorefrontResponse;
use Shopware\Storefront\Page\Product\Review\ReviewLoaderResult;
use Shopware\Storefront\Test\Controller\StorefrontControllerTestBehaviour;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;

class ProductControllerTest extends TestCase
{
    use IntegrationTestBehaviour;
    use StorefrontControllerTestBehaviour;

    public function testForwardFromSaveReviewToLoadReviews(): void
    {
        $productId = $this->createProduct();

        $this->login();

        $response = $this->request(
            'POST',
            '/product/' . $productId . '/rating',
            $this->tokenize('frontend.detail.review.save', [
                'forwardTo' => 'frontend.product.reviews',
                'points' => 5,
                'title' => 'Test',
                'content' => 'Test content',
            ])
        );

        static::assertInstanceOf(StorefrontResponse::class, $response);
        static::assertSame(200, $response->getStatusCode());
        static::assertInstanceOf(ReviewLoaderResult::class, $response->getData()['reviews']);
    }

    private function createProduct(array $config = []): string
    {
        $id = Uuid::randomHex();

        $product = [
            'id' => $id,
            'productNumber' => $id,
            'stock' => 5,
            'name' => 'Test',
            'isCloseout' => true,
            'price' => [['currencyId' => Defaults::CURRENCY, 'gross' => 10, 'net' => 9, 'linked' => false]],
            'tax' => ['id' => Uuid::randomHex(), 'name' => 'test', 'taxRate' => 19],
            'manufacturer' => ['name' => 'test'],
            'visibilities' => [
                [
                    'salesChannelId' => Defaults::SALES_CHANNEL,
                    'visibility' => ProductVisibilityDefinition::VISIBILITY_ALL,
                ],
            ],
        ];

        $product = array_replace_recursive($product, $config);

        $repository = $this->getContainer()->get('product.repository');

        $repository->create([$product], Context::createDefaultContext());

        return $id;
    }

    private function createCustomer(): CustomerEntity
    {
        $customerId = Uuid::randomHex();
        $addressId = Uuid::randomHex();

        $data = [
            [
                'id' => $customerId,
                'salesChannelId' => Defaults::SALES_CHANNEL,
                'defaultShippingAddress' => [
                    'id' => $addressId,
                    'firstName' => 'Max',
                    'lastName' => 'Mustermann',
                    'street' => 'Musterstra??e 1',
                    'city' => 'Sch??ppingen',
                    'zipcode' => '12345',
                    'salutationId' => $this->getValidSalutationId(),
                    'countryId' => $this->getValidCountryId(),
                ],
                'defaultBillingAddressId' => $addressId,
                'defaultPaymentMethodId' => $this->getValidPaymentMethodId(),
                'groupId' => Defaults::FALLBACK_CUSTOMER_GROUP,
                'email' => 'testuser@example.com',
                'password' => 'test',
                'firstName' => 'Max',
                'lastName' => 'Mustermann',
                'salutationId' => $this->getValidSalutationId(),
                'customerNumber' => '12345',
            ],
        ];

        $repo = $this->getContainer()->get('customer.repository');

        $repo->create($data, Context::createDefaultContext());

        return $repo->search(new Criteria([$customerId]), Context::createDefaultContext())->first();
    }

    private function login(): KernelBrowser
    {
        $customer = $this->createCustomer();

        $browser = KernelLifecycleManager::createBrowser($this->getKernel());
        $browser->request(
            'POST',
            $_SERVER['APP_URL'] . '/account/login',
            $this->tokenize('frontend.account.login', [
                'username' => $customer->getEmail(),
                'password' => 'test',
            ])
        );
        $response = $browser->getResponse();
        static::assertSame(200, $response->getStatusCode(), $response->getContent());

        $browser->request('GET', '/');
        /** @var StorefrontResponse $response */
        $response = $browser->getResponse();
        static::assertNotNull($response->getContext()->getCustomer());

        return $browser;
    }
}
