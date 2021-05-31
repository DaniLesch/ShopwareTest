<?php declare(strict_types=1);

namespace SwagExample\Storefront\Controller;

use FontLib\Table\Type\name;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\NotFilter;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"storefront"})
 */
class SwaggerificController extends StorefrontController
{
    /**
     * @var EntityRepositoryInterface
     */
    private  $productRepo;

    public function __construct(
        EntityRepositoryInterface $productRepo
    )
    {
        $this->productRepo = $productRepo;
    }

    /**
     * @Route("/example", name="frontend.example.example", methods={"GET"})
     */
    public function showExample(): Response
    {
        $criteria = new Criteria();
        $products = $this->productRepo->search($criteria, Context::createDefaultContext());
        return $this->renderStorefront('@SwagExample/storefront/page/example.html.twig', [
            'products'=>$products
        ]);
    }
}