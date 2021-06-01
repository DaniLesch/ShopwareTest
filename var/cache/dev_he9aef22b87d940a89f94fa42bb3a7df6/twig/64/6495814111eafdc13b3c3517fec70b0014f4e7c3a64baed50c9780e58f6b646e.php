<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/page/product-detail/buy-widget-price.html.twig */
class __TwigTemplate_db96af08e1dd006d6447f1eaf249acc7128f6eb7cc4661d4cdaa4c6a2275f19d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_price_inner' => [$this, 'block_page_product_detail_price_inner'],
            'page_product_detail_price_block' => [$this, 'block_page_product_detail_price_block'],
            'page_product_detail_price_block_table' => [$this, 'block_page_product_detail_price_block_table'],
            'page_product_detail_price_block_table_head' => [$this, 'block_page_product_detail_price_block_table_head'],
            'page_product_detail_price_block_table_head_inner' => [$this, 'block_page_product_detail_price_block_table_head_inner'],
            'page_product_detail_price_block_table_body' => [$this, 'block_page_product_detail_price_block_table_body'],
            'page_product_detail_price_block_table_body_inner' => [$this, 'block_page_product_detail_price_block_table_body_inner'],
            'page_product_detail_price_block_table_body_row' => [$this, 'block_page_product_detail_price_block_table_body_row'],
            'page_product_detail_price_block_table_body_cell_quantity' => [$this, 'block_page_product_detail_price_block_table_body_cell_quantity'],
            'page_product_detail_price_block_table_body_cell_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_price'],
            'page_product_detail_price_block_table_body_cell_reference_price' => [$this, 'block_page_product_detail_price_block_table_body_cell_reference_price'],
            'page_product_detail_price_content' => [$this, 'block_page_product_detail_price_content'],
            'page_product_detail_was_price' => [$this, 'block_page_product_detail_was_price'],
            'page_product_detail_was_price_badge' => [$this, 'block_page_product_detail_was_price_badge'],
            'page_product_detail_was_price_wrapper' => [$this, 'block_page_product_detail_was_price_wrapper'],
            'page_product_detail_price_unit' => [$this, 'block_page_product_detail_price_unit'],
            'page_product_detail_price_unit_label' => [$this, 'block_page_product_detail_price_unit_label'],
            'page_product_detail_price_unit_content' => [$this, 'block_page_product_detail_price_unit_content'],
            'page_product_detail_price_unit_reference_content' => [$this, 'block_page_product_detail_price_unit_reference_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_price_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_inner"));

        // line 2
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 2), "calculatedPrices", [], "any", false, false, false, 2)), 1))) {
            // line 3
            echo "        ";
            $this->displayBlock('page_product_detail_price_block', $context, $blocks);
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        ";
            $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 79), "calculatedPrice", [], "any", false, false, false, 79);
            // line 80
            echo "
        ";
            // line 81
            if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 81), "calculatedPrices", [], "any", false, false, false, 81)), 1))) {
                // line 82
                echo "            ";
                $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 82), "calculatedPrices", [], "any", false, false, false, 82), "first", [], "any", false, false, false, 82);
                // line 83
                echo "        ";
            }
            // line 84
            echo "
        <meta itemprop=\"price\"
              content=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 86), "html", null, true);
            echo "\">

        ";
            // line 88
            $this->displayBlock('page_product_detail_price_content', $context, $blocks);
            // line 121
            echo "
        ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 122), "purchaseUnit", [], "any", false, false, false, 122)) {
                // line 123
                echo "            ";
                $this->displayBlock('page_product_detail_price_unit', $context, $blocks);
                // line 146
                echo "        ";
            }
            // line 147
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_price_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block"));

        // line 4
        echo "            <div class=\"product-block-prices\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_price_block_table', $context, $blocks);
        // line 76
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_product_detail_price_block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table"));

        // line 6
        echo "                    <table class=\"table product-block-prices-grid\">
                        ";
        // line 7
        $this->displayBlock('page_product_detail_price_block_table_head', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('page_product_detail_price_block_table_body', $context, $blocks);
        // line 74
        echo "                    </table>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_page_product_detail_price_block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head"));

        // line 8
        echo "                            <thead class=\"product-block-prices-head\">
                                ";
        // line 9
        $this->displayBlock('page_product_detail_price_block_table_head_inner', $context, $blocks);
        // line 24
        echo "                            </thead>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_product_detail_price_block_table_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_head_inner"));

        // line 10
        echo "                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 12
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnQuantity"));
        echo "
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            ";
        // line 15
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnPrice"));
        echo "
                                        </th>
                                        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 17), "calculatedPrice", [], "any", false, false, false, 17), "referencePrice", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                ";
            // line 19
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.dataColumnReferencePrice"));
            echo "
                                            </th>
                                        ";
        }
        // line 22
        echo "                                    </tr>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_page_product_detail_price_block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body"));

        // line 28
        echo "                            <tbody class=\"product-block-prices-body\">
                                ";
        // line 29
        $this->displayBlock('page_product_detail_price_block_table_body_inner', $context, $blocks);
        // line 72
        echo "                            </tbody>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_page_product_detail_price_block_table_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_inner"));

        // line 30
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 30), "calculatedPrices", [], "any", false, false, false, 30));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 31
            echo "                                        ";
            $this->displayBlock('page_product_detail_price_block_table_body_row', $context, $blocks);
            // line 70
            echo "                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_page_product_detail_price_block_table_body_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_row"));

        // line 32
        echo "                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                ";
        // line 36
        $this->displayBlock('page_product_detail_price_block_table_body_cell_quantity', $context, $blocks);
        // line 52
        echo "
                                                ";
        // line 53
        $this->displayBlock('page_product_detail_price_block_table_body_cell_price', $context, $blocks);
        // line 60
        echo "
                                                ";
        // line 61
        $this->displayBlock('page_product_detail_price_block_table_body_cell_reference_price', $context, $blocks);
        // line 68
        echo "                                            </tr>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_page_product_detail_price_block_table_body_cell_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_quantity"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_quantity"));

        // line 37
        echo "                                                    <th scope=\"row\" class=\"product-block-prices-cell product-block-prices-cell-thin\">
                                                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "activeCurrency", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        echo "\" />
                                                        <meta itemprop=\"price\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 39), "html", null, true);
        echo "\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoFrom"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>

                                                        ";
        } else {
            // line 47
            echo "                                                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceDataInfoUntil"));
            echo "
                                                            <span class=\"product-block-prices-quantity\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
                                                        ";
        }
        // line 50
        echo "                                                    </th>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_page_product_detail_price_block_table_body_cell_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_price"));

        // line 54
        echo "                                                    <td class=\"product-block-prices-cell\">
                                                        ";
        // line 55
        $this->loadTemplate("@Storefront/storefront/component/product/block-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", 55)->display(twig_to_array(["price" =>         // line 56
($context["price"] ?? null)]));
        // line 58
        echo "                                                    </td>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_page_product_detail_price_block_table_body_cell_reference_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_reference_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_block_table_body_cell_reference_price"));

        // line 62
        echo "                                                    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 62))) {
            // line 63
            echo "                                                        <td class=\"product-block-prices-cell product-block-prices-cell-thin\">
                                                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 64), "price", [], "any", false, false, false, 64)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 64), "referenceUnit", [], "any", false, false, false, 64), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 64), "unitName", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                                        </td>
                                                    ";
        }
        // line 67
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_page_product_detail_price_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_content"));

        // line 89
        echo "            ";
        $context["listPrice"] = twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "listPrice", [], "any", false, false, false, 89);
        // line 90
        echo "
            <p class=\"product-detail-price";
        // line 91
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 91), 0))) {
            echo " with-list-price";
        }
        echo "\">
                ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "unitPrice", [], "any", false, false, false, 92)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
            </p>

            ";
        // line 95
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 95), 0))) {
            // line 96
            echo "                ";
            $this->displayBlock('page_product_detail_was_price', $context, $blocks);
            // line 119
            echo "            ";
        }
        // line 120
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_page_product_detail_was_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price"));

        // line 97
        echo "
                    ";
        // line 98
        $this->displayBlock('page_product_detail_was_price_badge', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $context["afterListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), 0));
        // line 103
        echo "                    ";
        $context["beforeListPriceSnippetExists"] = (1 === twig_compare(twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), 0));
        // line 104
        echo "
                    ";
        // line 105
        $this->displayBlock('page_product_detail_was_price_wrapper', $context, $blocks);
        // line 118
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_page_product_detail_was_price_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_badge"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_badge"));

        // line 99
        echo "                        <span class=\"list-price-badge\">&#37;</span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_page_product_detail_was_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_was_price_wrapper"));

        // line 106
        echo "                        <span class=\"product-detail-list-price-wrapper\">
                            ";
        // line 107
        if (($context["beforeListPriceSnippetExists"] ?? null)) {
            echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), "html", null, true);
        }
        // line 108
        echo "
                            <span";
        // line 109
        if ( !(($context["afterListPriceSnippetExists"] ?? null) || ($context["beforeListPriceSnippetExists"] ?? null))) {
            echo " class=\"list-price-price\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 109)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "</span>

                            ";
        // line 111
        if (($context["afterListPriceSnippetExists"] ?? null)) {
            // line 112
            echo "                                ";
            echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), "html", null, true);
            echo "
                            ";
        }
        // line 114
        echo "
                            <span class=\"list-price-percentage\">";
        // line 115
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.listPricePercentage", ["%price%" => twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 115)]));
        echo "</span>
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_page_product_detail_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit"));

        // line 124
        echo "                <div class=\"product-detail-price-unit\">
                    ";
        // line 125
        $this->displayBlock('page_product_detail_price_unit_label', $context, $blocks);
        // line 130
        echo "
                    ";
        // line 131
        $this->displayBlock('page_product_detail_price_unit_content', $context, $blocks);
        // line 136
        echo "
                    ";
        // line 137
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 137))) {
            // line 138
            echo "                        ";
            $this->displayBlock('page_product_detail_price_unit_reference_content', $context, $blocks);
            // line 143
            echo "                    ";
        }
        // line 144
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_page_product_detail_price_unit_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_label"));

        // line 126
        echo "                        <span class=\"price-unit-label\">
                            ";
        // line 127
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.priceUnitName"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_page_product_detail_price_unit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_content"));

        // line 132
        echo "                        <span class=\"price-unit-content\">
                            ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 133), "purchaseUnit", [], "any", false, false, false, 133), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 133), "unit", [], "any", false, false, false, 133), "name", [], "any", false, false, false, 133), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_page_product_detail_price_unit_reference_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_reference_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price_unit_reference_content"));

        // line 139
        echo "                            <span class=\"price-unit-reference-content\">
                                (";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 140), "price", [], "any", false, false, false, 140)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 140), "referenceUnit", [], "any", false, false, false, 140), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 140), "unitName", [], "any", false, false, false, 140), "html", null, true);
        echo ")
                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  777 => 140,  774 => 139,  764 => 138,  749 => 133,  746 => 132,  736 => 131,  723 => 127,  720 => 126,  710 => 125,  699 => 144,  696 => 143,  693 => 138,  691 => 137,  688 => 136,  686 => 131,  683 => 130,  681 => 125,  678 => 124,  668 => 123,  655 => 115,  652 => 114,  646 => 112,  644 => 111,  634 => 109,  631 => 108,  627 => 107,  624 => 106,  614 => 105,  603 => 99,  593 => 98,  583 => 118,  581 => 105,  578 => 104,  575 => 103,  573 => 102,  570 => 101,  568 => 98,  565 => 97,  555 => 96,  545 => 120,  542 => 119,  539 => 96,  537 => 95,  530 => 92,  524 => 91,  521 => 90,  518 => 89,  508 => 88,  498 => 67,  487 => 64,  484 => 63,  481 => 62,  471 => 61,  460 => 58,  458 => 56,  457 => 55,  454 => 54,  444 => 53,  433 => 50,  428 => 48,  423 => 47,  417 => 44,  412 => 43,  410 => 42,  404 => 39,  400 => 38,  397 => 37,  387 => 36,  376 => 68,  374 => 61,  371 => 60,  369 => 53,  366 => 52,  364 => 36,  358 => 32,  348 => 31,  338 => 71,  324 => 70,  321 => 31,  303 => 30,  293 => 29,  282 => 72,  280 => 29,  277 => 28,  267 => 27,  256 => 22,  250 => 19,  247 => 18,  245 => 17,  240 => 15,  234 => 12,  230 => 10,  220 => 9,  209 => 24,  207 => 9,  204 => 8,  194 => 7,  183 => 74,  181 => 27,  178 => 26,  176 => 7,  173 => 6,  163 => 5,  152 => 76,  150 => 5,  147 => 4,  137 => 3,  126 => 147,  123 => 146,  120 => 123,  118 => 122,  115 => 121,  113 => 88,  108 => 86,  104 => 84,  101 => 83,  98 => 82,  96 => 81,  93 => 80,  90 => 79,  87 => 78,  84 => 3,  81 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_price_inner %}
    {% if page.product.calculatedPrices|length > 1 %}
        {% block page_product_detail_price_block %}
            <div class=\"product-block-prices\">
                {% block page_product_detail_price_block_table %}
                    <table class=\"table product-block-prices-grid\">
                        {% block page_product_detail_price_block_table_head %}
                            <thead class=\"product-block-prices-head\">
                                {% block page_product_detail_price_block_table_head_inner %}
                                    <tr class=\"product-block-prices-row\">
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            {{ \"detail.dataColumnQuantity\"|trans|sw_sanitize }}
                                        </th>
                                        <th scope=\"col\" class=\"product-block-prices-cell\">
                                            {{ \"detail.dataColumnPrice\"|trans|sw_sanitize }}
                                        </th>
                                        {% if page.product.calculatedPrice.referencePrice %}
                                            <th scope=\"col\" class=\"product-block-prices-cell\">
                                                {{ \"detail.dataColumnReferencePrice\"|trans|sw_sanitize }}
                                            </th>
                                        {% endif %}
                                    </tr>
                                {% endblock %}
                            </thead>
                        {% endblock %}

                        {% block page_product_detail_price_block_table_body %}
                            <tbody class=\"product-block-prices-body\">
                                {% block page_product_detail_price_block_table_body_inner %}
                                    {% for price in page.product.calculatedPrices %}
                                        {% block page_product_detail_price_block_table_body_row %}
                                            <tr class=\"product-block-prices-row\"
                                                itemprop=\"offers\" itemscope
                                                itemtype=\"https://schema.org/Offer\">

                                                {% block page_product_detail_price_block_table_body_cell_quantity %}
                                                    <th scope=\"row\" class=\"product-block-prices-cell product-block-prices-cell-thin\">
                                                        <meta itemprop=\"priceCurrency\" content=\"{{ page.header.activeCurrency.id }}\" />
                                                        <meta itemprop=\"price\" content=\"{{ price.unitPrice }}\" />
                                                        <link itemprop=\"availability\" href=\"https://schema.org/InStock\" />

                                                        {% if loop.last %}
                                                            {{ \"detail.priceDataInfoFrom\"|trans|sw_sanitize }}
                                                            <span class=\"product-block-prices-quantity\">{{ price.quantity }}</span>

                                                        {% else %}
                                                            {{ \"detail.priceDataInfoUntil\"|trans|sw_sanitize }}
                                                            <span class=\"product-block-prices-quantity\">{{ price.quantity }}</span>
                                                        {% endif %}
                                                    </th>
                                                {% endblock %}

                                                {% block page_product_detail_price_block_table_body_cell_price %}
                                                    <td class=\"product-block-prices-cell\">
                                                        {% sw_include '@Storefront/storefront/component/product/block-price.html.twig' with {
                                                            price: price
                                                        } only %}
                                                    </td>
                                                {% endblock %}

                                                {% block page_product_detail_price_block_table_body_cell_reference_price %}
                                                    {% if price.referencePrice is not null %}
                                                        <td class=\"product-block-prices-cell product-block-prices-cell-thin\">
                                                            {{ price.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ price.referencePrice.referenceUnit }} {{ price.referencePrice.unitName }}
                                                        </td>
                                                    {% endif %}
                                                {% endblock %}
                                            </tr>
                                        {% endblock %}
                                    {% endfor %}
                                {% endblock %}
                            </tbody>
                        {% endblock %}
                    </table>
                {% endblock %}
            </div>
        {% endblock %}
    {% else %}
        {% set price = page.product.calculatedPrice %}

        {% if page.product.calculatedPrices|length == 1 %}
            {% set price = page.product.calculatedPrices.first %}
        {% endif %}

        <meta itemprop=\"price\"
              content=\"{{ price.unitPrice }}\">

        {% block page_product_detail_price_content %}
            {% set listPrice = price.listPrice %}

            <p class=\"product-detail-price{% if listPrice.percentage > 0 %} with-list-price{% endif %}\">
                {{ price.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
            </p>

            {% if listPrice.percentage > 0 %}
                {% block page_product_detail_was_price %}

                    {% block page_product_detail_was_price_badge %}
                        <span class=\"list-price-badge\">&#37;</span>
                    {% endblock %}

                    {% set afterListPriceSnippetExists = \"listing.afterListPrice\"|trans|length > 0 %}
                    {% set beforeListPriceSnippetExists = \"listing.beforeListPrice\"|trans|length > 0 %}

                    {% block page_product_detail_was_price_wrapper %}
                        <span class=\"product-detail-list-price-wrapper\">
                            {% if beforeListPriceSnippetExists %}{{\"listing.beforeListPrice\"|trans|trim}}{% endif %}

                            <span{% if not (afterListPriceSnippetExists or beforeListPriceSnippetExists) %} class=\"list-price-price\"{% endif %}>{{ listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }}</span>

                            {% if afterListPriceSnippetExists %}
                                {{\"listing.afterListPrice\"|trans|trim}}
                            {% endif %}

                            <span class=\"list-price-percentage\">{{ \"detail.listPricePercentage\"|trans({'%price%': listPrice.percentage })|sw_sanitize }}</span>
                        </span>
                    {% endblock %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% if page.product.purchaseUnit %}
            {% block page_product_detail_price_unit %}
                <div class=\"product-detail-price-unit\">
                    {% block page_product_detail_price_unit_label %}
                        <span class=\"price-unit-label\">
                            {{ \"detail.priceUnitName\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_price_unit_content %}
                        <span class=\"price-unit-content\">
                            {{ page.product.purchaseUnit }} {{ page.product.unit.name }}
                        </span>
                    {% endblock %}

                    {% if price.referencePrice is not null %}
                        {% block page_product_detail_price_unit_reference_content %}
                            <span class=\"price-unit-reference-content\">
                                ({{ price.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ price.referencePrice.referenceUnit }} {{ price.referencePrice.unitName }})
                            </span>
                        {% endblock %}
                    {% endif %}
                </div>
            {% endblock %}
        {% endif %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-price.html.twig");
    }
}
