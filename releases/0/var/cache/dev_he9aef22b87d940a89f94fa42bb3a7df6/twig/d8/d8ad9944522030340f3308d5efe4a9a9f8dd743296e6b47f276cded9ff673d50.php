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

/* @Storefront/storefront/page/product-detail/buy-widget.html.twig */
class __TwigTemplate_11b15f270acaa1fa57da94af9333f4e37a9627491ad7049216f8dac5004f0285 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_inner' => [$this, 'block_page_product_detail_buy_inner'],
            'page_product_detail_rich_snippets' => [$this, 'block_page_product_detail_rich_snippets'],
            'page_product_detail_rich_snippets_brand' => [$this, 'block_page_product_detail_rich_snippets_brand'],
            'page_product_detail_rich_snippets_gtin13' => [$this, 'block_page_product_detail_rich_snippets_gtin13'],
            'page_product_detail_rich_snippets_mpn' => [$this, 'block_page_product_detail_rich_snippets_mpn'],
            'page_product_detail_rich_snippets_weight' => [$this, 'block_page_product_detail_rich_snippets_weight'],
            'page_product_detail_rich_snippets_height' => [$this, 'block_page_product_detail_rich_snippets_height'],
            'page_product_detail_rich_snippets_width' => [$this, 'block_page_product_detail_rich_snippets_width'],
            'page_product_detail_rich_snippets_depth' => [$this, 'block_page_product_detail_rich_snippets_depth'],
            'page_product_detail_rich_snippets_release_date' => [$this, 'block_page_product_detail_rich_snippets_release_date'],
            'page_product_detail_not_available' => [$this, 'block_page_product_detail_not_available'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_data' => [$this, 'block_page_product_detail_data'],
            'page_product_detail_data_rich_snippet_url' => [$this, 'block_page_product_detail_data_rich_snippet_url'],
            'page_product_detail_data_rich_snippet_price_range' => [$this, 'block_page_product_detail_data_rich_snippet_price_range'],
            'page_product_detail_data_rich_snippet_price_currency' => [$this, 'block_page_product_detail_data_rich_snippet_price_currency'],
            'page_product_detail_price' => [$this, 'block_page_product_detail_price'],
            'page_product_detail_tax' => [$this, 'block_page_product_detail_tax'],
            'page_product_detail_tax_link' => [$this, 'block_page_product_detail_tax_link'],
            'page_product_detail_reviews' => [$this, 'block_page_product_detail_reviews'],
            'page_product_detail_delivery_informations' => [$this, 'block_page_product_detail_delivery_informations'],
            'page_product_detail_configurator_include' => [$this, 'block_page_product_detail_configurator_include'],
            'page_product_detail_buy_form' => [$this, 'block_page_product_detail_buy_form'],
            'page_product_detail_wishlist' => [$this, 'block_page_product_detail_wishlist'],
            'page_product_detail_ordernumber_container' => [$this, 'block_page_product_detail_ordernumber_container'],
            'page_product_detail_ordernumber_label' => [$this, 'block_page_product_detail_ordernumber_label'],
            'page_product_detail_ordernumber' => [$this, 'block_page_product_detail_ordernumber'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_buy_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_buy_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        // line 2
        echo "    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_rich_snippets', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('page_product_detail_not_available', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 175
        echo "
        ";
        // line 176
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 177
            echo "            ";
            $this->displayBlock('page_product_detail_wishlist', $context, $blocks);
            // line 184
            echo "        ";
        }
        // line 185
        echo "
        ";
        // line 186
        $this->displayBlock('page_product_detail_ordernumber_container', $context, $blocks);
        // line 206
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        // line 4
        echo "            ";
        $this->displayBlock('page_product_detail_rich_snippets_brand', $context, $blocks);
        // line 10
        echo "
            ";
        // line 11
        $this->displayBlock('page_product_detail_rich_snippets_gtin13', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_product_detail_rich_snippets_mpn', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('page_product_detail_rich_snippets_weight', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('page_product_detail_rich_snippets_height', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('page_product_detail_rich_snippets_width', $context, $blocks);
        // line 43
        echo "
            ";
        // line 44
        $this->displayBlock('page_product_detail_rich_snippets_depth', $context, $blocks);
        // line 50
        echo "
            ";
        // line 51
        $this->displayBlock('page_product_detail_rich_snippets_release_date', $context, $blocks);
        // line 55
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_product_detail_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        // line 5
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5), "manufacturer", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <meta itemprop=\"brand\"
                          content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "manufacturer", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
                ";
        }
        // line 9
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_page_product_detail_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        // line 12
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 12), "ean", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <meta itemprop=\"gtin13\"
                          content=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "ean", [], "any", false, false, false, 14), "html", null, true);
            echo "\"/>
                ";
        }
        // line 16
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_page_product_detail_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        // line 19
        echo "                <meta itemprop=\"mpn\"
                      content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "productNumber", [], "any", false, false, false, 20), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_page_product_detail_rich_snippets_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    <meta itemprop=\"weight\"
                          content=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 26), "weight", [], "any", false, false, false, 26), "html", null, true);
            echo " kg\"/>
                ";
        }
        // line 28
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_page_product_detail_rich_snippets_height($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        // line 31
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "height", [], "any", false, false, false, 31)) {
            // line 32
            echo "                    <meta itemprop=\"height\"
                          content=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 33), "height", [], "any", false, false, false, 33), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 35
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_page_product_detail_rich_snippets_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        // line 38
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 38), "width", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <meta itemprop=\"width\"
                          content=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 40), "width", [], "any", false, false, false, 40), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 42
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_page_product_detail_rich_snippets_depth($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        // line 45
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 45), "length", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <meta itemprop=\"depth\"
                          content=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "length", [], "any", false, false, false, 47), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 49
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_page_product_detail_rich_snippets_release_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        // line 52
        echo "                <meta itemprop=\"releaseDate\"
                      content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 53), "releaseDate", [], "any", false, false, false, 53), "medium", "Y-MM-dd", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "locale", [], "any", false, false, false, 53)), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_page_product_detail_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        // line 58
        echo "            ";
        // line 59
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 62
        echo "            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"";
        // line 64
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 64), "calculatedPrices", [], "any", false, false, false, 64)), 1))) {
            echo "http://schema.org/AggregateOffer";
        } else {
            echo "http://schema.org/Offer";
        }
        echo "\">
                ";
        // line 65
        $this->displayBlock('page_product_detail_data', $context, $blocks);
        // line 157
        echo "
                ";
        // line 158
        $this->displayBlock('page_product_detail_configurator_include', $context, $blocks);
        // line 165
        echo "
                ";
        // line 166
        $this->displayBlock('page_product_detail_buy_form', $context, $blocks);
        // line 173
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_page_product_detail_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        // line 66
        echo "                    ";
        $this->displayBlock('page_product_detail_data_rich_snippet_url', $context, $blocks);
        // line 70
        echo "
                    ";
        // line 71
        $this->displayBlock('page_product_detail_data_rich_snippet_price_range', $context, $blocks);
        // line 90
        echo "
                    ";
        // line 91
        $this->displayBlock('page_product_detail_data_rich_snippet_price_currency', $context, $blocks);
        // line 95
        echo "
                    ";
        // line 96
        $this->displayBlock('page_product_detail_price', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('page_product_detail_tax', $context, $blocks);
        // line 123
        echo "
                    ";
        // line 124
        $context["remoteClickOptions"] = ["selector" => "#review-tab", "scrollToElement" => true];
        // line 128
        echo "
                    ";
        // line 129
        $this->displayBlock('page_product_detail_reviews', $context, $blocks);
        // line 150
        echo "
                    ";
        // line 151
        $this->displayBlock('page_product_detail_delivery_informations', $context, $blocks);
        // line 156
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_page_product_detail_data_rich_snippet_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        // line 67
        echo "                        <meta itemprop=\"url\"
                              content=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_page_product_detail_data_rich_snippet_price_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        // line 72
        echo "                        ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 72), "calculatedPrices", [], "any", false, false, false, 72)), 1))) {
            // line 73
            echo "                            ";
            $context["lowestPrice"] = false;
            // line 74
            echo "                            ";
            $context["highestPrice"] = false;
            // line 75
            echo "
                            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 76), "calculatedPrices", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 77
                echo "                                ";
                if (( !($context["lowestPrice"] ?? null) || (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 77), ($context["lowestPrice"] ?? null))))) {
                    // line 78
                    echo "                                    ";
                    $context["lowestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 78);
                    // line 79
                    echo "                                ";
                }
                // line 80
                echo "                                ";
                if (( !($context["highestPrice"] ?? null) || (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 80), ($context["highestPrice"] ?? null))))) {
                    // line 81
                    echo "                                    ";
                    $context["highestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 81);
                    // line 82
                    echo "                                ";
                }
                // line 83
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
                            <meta itemprop=\"lowPrice\" content=\"";
            // line 85
            echo twig_escape_filter($this->env, ($context["lowestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"highPrice\" content=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["highestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"offerCount\" content=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 87), "calculatedPrices", [], "any", false, false, false, 87)), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 89
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_page_product_detail_data_rich_snippet_price_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        // line 92
        echo "                        <meta itemprop=\"priceCurrency\"
                              content=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 93), "translated", [], "any", false, false, false, 93), "shortName", [], "any", false, false, false, 93), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_page_product_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        // line 97
        echo "                        <div class=\"product-detail-price-container\">
                            ";
        // line 98
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 98)->display($context);
        // line 99
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_page_product_detail_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        // line 103
        echo "                        <div class=\"product-detail-tax-container\">
                            ";
        // line 104
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 104), "gross"))) {
            // line 105
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            // line 106
            echo "                            ";
        } else {
            // line 107
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            // line 108
            echo "                            ";
        }
        // line 109
        echo "
                            <p class=\"product-detail-tax\">
                                ";
        // line 111
        $this->displayBlock('page_product_detail_tax_link', $context, $blocks);
        // line 120
        echo "                            </p>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_page_product_detail_tax_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        // line 112
        echo "                                    <a class=\"product-detail-tax-link\"
                                       href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "\"
                                       data-toggle=\"modal\"
                                       data-url=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")]), "html", null, true);
        echo "\">
                                        ";
        // line 117
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "
                                    </a>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_page_product_detail_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        // line 130
        echo "                        ";
        if ((((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 130), "ratingAverage", [], "any", false, false, false, 130), 0)) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 130), "totalReviews", [], "any", false, false, false, 130), 0))) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview"))) {
            // line 131
            echo "                            <div class=\"product-detail-reviews\">

                                ";
            // line 133
            $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 133)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 134
($context["page"] ?? null), "product", [], "any", false, false, false, 134), "ratingAverage", [], "any", false, false, false, 134), "style" => "text-primary"]));
            // line 137
            echo "                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='";
            // line 141
            echo twig_escape_filter($this->env, json_encode(($context["remoteClickOptions"] ?? null)), "html", null, true);
            echo "'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 144), "totalReviews", [], "any", false, false, false, 144), "html", null, true);
            echo "
                                    ";
            // line 145
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLinkText", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 145), "totalReviews", [], "any", false, false, false, 145)]));
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 149
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_page_product_detail_delivery_informations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        // line 152
        echo "                        <div class=\"product-detail-delivery-information\">
                            ";
        // line 153
        $this->loadTemplate("@Storefront/storefront/component/delivery-information.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 153)->display($context);
        // line 154
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_page_product_detail_configurator_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        // line 159
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 159), "parentId", [], "any", false, false, false, 159) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 159)), 0)))) {
            // line 160
            echo "                        <div class=\"product-detail-configurator-container\">
                            ";
            // line 161
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 161)->display($context);
            // line 162
            echo "                        </div>
                    ";
        }
        // line 164
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_page_product_detail_buy_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        // line 167
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 167), "active", [], "any", false, false, false, 167)) {
            // line 168
            echo "                        <div class=\"product-detail-form-container\">
                            ";
            // line 169
            $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 169)->display($context);
            // line 170
            echo "                        </div>
                    ";
        }
        // line 172
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_page_product_detail_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_wishlist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_wishlist"));

        // line 178
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 178)->display(twig_array_merge($context, ["showText" => true, "size" => "md", "productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 181
($context["page"] ?? null), "product", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181)]));
        // line 183
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_page_product_detail_ordernumber_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        // line 187
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 187), "productNumber", [], "any", false, false, false, 187)) {
            // line 188
            echo "                <div class=\"product-detail-ordernumber-container\">
                    ";
            // line 189
            $this->displayBlock('page_product_detail_ordernumber_label', $context, $blocks);
            // line 194
            echo "
                    ";
            // line 195
            $this->displayBlock('page_product_detail_ordernumber', $context, $blocks);
            // line 203
            echo "                </div>
            ";
        }
        // line 205
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_page_product_detail_ordernumber_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        // line 190
        echo "                        <span class=\"product-detail-ordernumber-label\">
                            ";
        // line 191
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.productNumberLabel"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_page_product_detail_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        // line 196
        echo "                        <meta itemprop=\"productID\"
                              content=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197), "html", null, true);
        echo "\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            ";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 200), "productNumber", [], "any", false, false, false, 200), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1035 => 200,  1029 => 197,  1026 => 196,  1016 => 195,  1003 => 191,  1000 => 190,  990 => 189,  980 => 205,  976 => 203,  974 => 195,  971 => 194,  969 => 189,  966 => 188,  963 => 187,  953 => 186,  943 => 183,  941 => 181,  939 => 178,  929 => 177,  919 => 172,  915 => 170,  913 => 169,  910 => 168,  907 => 167,  897 => 166,  887 => 164,  883 => 162,  881 => 161,  878 => 160,  875 => 159,  865 => 158,  854 => 154,  852 => 153,  849 => 152,  839 => 151,  829 => 149,  822 => 145,  818 => 144,  812 => 141,  806 => 137,  804 => 134,  803 => 133,  799 => 131,  796 => 130,  786 => 129,  773 => 117,  769 => 116,  764 => 114,  760 => 113,  757 => 112,  747 => 111,  735 => 120,  733 => 111,  729 => 109,  726 => 108,  723 => 107,  720 => 106,  717 => 105,  715 => 104,  712 => 103,  702 => 102,  691 => 99,  689 => 98,  686 => 97,  676 => 96,  664 => 93,  661 => 92,  651 => 91,  641 => 89,  636 => 87,  632 => 86,  628 => 85,  625 => 84,  619 => 83,  616 => 82,  613 => 81,  610 => 80,  607 => 79,  604 => 78,  601 => 77,  597 => 76,  594 => 75,  591 => 74,  588 => 73,  585 => 72,  575 => 71,  563 => 68,  560 => 67,  550 => 66,  540 => 156,  538 => 151,  535 => 150,  533 => 129,  530 => 128,  528 => 124,  525 => 123,  523 => 102,  520 => 101,  518 => 96,  515 => 95,  513 => 91,  510 => 90,  508 => 71,  505 => 70,  502 => 66,  492 => 65,  481 => 173,  479 => 166,  476 => 165,  474 => 158,  471 => 157,  469 => 65,  461 => 64,  457 => 62,  447 => 61,  437 => 59,  435 => 58,  425 => 57,  413 => 53,  410 => 52,  400 => 51,  390 => 49,  385 => 47,  382 => 46,  379 => 45,  369 => 44,  359 => 42,  354 => 40,  351 => 39,  348 => 38,  338 => 37,  328 => 35,  323 => 33,  320 => 32,  317 => 31,  307 => 30,  297 => 28,  292 => 26,  289 => 25,  286 => 24,  276 => 23,  264 => 20,  261 => 19,  251 => 18,  241 => 16,  236 => 14,  233 => 13,  230 => 12,  220 => 11,  210 => 9,  205 => 7,  202 => 6,  199 => 5,  189 => 4,  179 => 55,  177 => 51,  174 => 50,  172 => 44,  169 => 43,  167 => 37,  164 => 36,  162 => 30,  159 => 29,  157 => 23,  154 => 22,  152 => 18,  149 => 17,  147 => 11,  144 => 10,  141 => 4,  131 => 3,  120 => 206,  118 => 186,  115 => 185,  112 => 184,  109 => 177,  107 => 176,  104 => 175,  102 => 61,  99 => 60,  97 => 57,  94 => 56,  92 => 3,  89 => 2,  70 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_buy_inner %}
    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        {% block page_product_detail_rich_snippets %}
            {% block page_product_detail_rich_snippets_brand %}
                {% if page.product.manufacturer %}
                    <meta itemprop=\"brand\"
                          content=\"{{ page.product.manufacturer.translated.name }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_gtin13 %}
                {% if page.product.ean %}
                    <meta itemprop=\"gtin13\"
                          content=\"{{ page.product.ean }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_mpn %}
                <meta itemprop=\"mpn\"
                      content=\"{{ page.product.productNumber }}\"/>
            {% endblock %}

            {% block page_product_detail_rich_snippets_weight %}
                {% if page.product.weight %}
                    <meta itemprop=\"weight\"
                          content=\"{{ page.product.weight }} kg\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_height %}
                {% if page.product.height %}
                    <meta itemprop=\"height\"
                          content=\"{{ page.product.height }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_width %}
                {% if page.product.width %}
                    <meta itemprop=\"width\"
                          content=\"{{ page.product.width }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_depth %}
                {% if page.product.length %}
                    <meta itemprop=\"depth\"
                          content=\"{{ page.product.length }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_release_date %}
                <meta itemprop=\"releaseDate\"
                      content=\"{{ page.product.releaseDate|format_date(pattern=\"Y-MM-dd\", locale=app.request.locale) }}\"/>
            {% endblock %}
        {% endblock %}

        {% block page_product_detail_not_available %}
            {#TODO: NEXT-2784 - product not available message#}
        {% endblock %}

        {% block page_product_detail_buy_container %}
            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"{% if page.product.calculatedPrices|length > 1 %}http://schema.org/AggregateOffer{% else %}http://schema.org/Offer{% endif %}\">
                {% block page_product_detail_data %}
                    {% block page_product_detail_data_rich_snippet_url %}
                        <meta itemprop=\"url\"
                              content=\"{{ seoUrl('frontend.detail.page', { productId: page.product.id }) }}\"/>
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_range %}
                        {% if page.product.calculatedPrices|length > 1 %}
                            {% set lowestPrice = false %}
                            {% set highestPrice = false %}

                            {% for price in page.product.calculatedPrices %}
                                {% if not lowestPrice or price.unitPrice < lowestPrice %}
                                    {% set lowestPrice = price.unitPrice %}
                                {% endif %}
                                {% if not highestPrice or price.unitPrice > highestPrice %}
                                    {% set highestPrice = price.unitPrice %}
                                {% endif %}
                            {% endfor %}

                            <meta itemprop=\"lowPrice\" content=\"{{ lowestPrice }}\"/>
                            <meta itemprop=\"highPrice\" content=\"{{ highestPrice }}\"/>
                            <meta itemprop=\"offerCount\" content=\"{{ page.product.calculatedPrices|length }}\"/>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_currency %}
                        <meta itemprop=\"priceCurrency\"
                              content=\"{{ context.currency.translated.shortName }}\"/>
                    {% endblock %}

                    {% block page_product_detail_price %}
                        <div class=\"product-detail-price-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-price.html.twig' %}
                        </div>
                    {% endblock %}

                    {% block page_product_detail_tax %}
                        <div class=\"product-detail-tax-container\">
                            {% if context.taxState == \"gross\" %}
                                {% set taxText = \"general.grossTaxInformation\"|trans|sw_sanitize %}
                            {% else %}
                                {% set taxText = \"general.netTaxInformation\"|trans|sw_sanitize %}
                            {% endif %}

                            <p class=\"product-detail-tax\">
                                {% block page_product_detail_tax_link %}
                                    <a class=\"product-detail-tax-link\"
                                       href=\"{{ path('frontend.cms.page',{ id: config('core.basicInformation.shippingPaymentInfoPage') }) }}\"
                                       title=\"{{ taxText }}\"
                                       data-toggle=\"modal\"
                                       data-url=\"{{ path('frontend.cms.page',{ id: config('core.basicInformation.shippingPaymentInfoPage') }) }}\">
                                        {{ taxText }}
                                    </a>
                                {% endblock %}
                            </p>
                        </div>
                    {% endblock %}

                    {% set remoteClickOptions = {
                        selector: \"#review-tab\",
                        scrollToElement: true
                    } %}

                    {% block page_product_detail_reviews %}
                        {% if page.product.ratingAverage > 0 and page.reviews.totalReviews > 0 and config('core.listing.showReview') %}
                            <div class=\"product-detail-reviews\">

                                {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                    points: page.product.ratingAverage,
                                    style: 'text-primary'
                                } %}
                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='{{ remoteClickOptions|json_encode }}'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    {{ page.reviews.totalReviews }}
                                    {{ \"detail.reviewLinkText\"|trans({'%count%': page.reviews.totalReviews})|sw_sanitize }}
                                </a>
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_delivery_informations %}
                        <div class=\"product-detail-delivery-information\">
                            {% sw_include '@Storefront/storefront/component/delivery-information.html.twig' %}
                        </div>
                    {% endblock %}
                {% endblock %}

                {% block page_product_detail_configurator_include %}
                    {% if page.product.parentId and page.configuratorSettings|length > 0 %}
                        <div class=\"product-detail-configurator-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/configurator.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_product_detail_buy_form %}
                    {% if page.product.active %}
                        <div class=\"product-detail-form-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-form.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}

        {% if config('core.cart.wishlistEnabled') %}
            {% block page_product_detail_wishlist %}
                {% sw_include '@Storefront/storefront/component/product/card/wishlist.html.twig' with {
                    showText: true,
                    size: 'md',
                    productId: page.product.id
                } %}
            {% endblock %}
        {% endif %}

        {% block page_product_detail_ordernumber_container %}
            {% if page.product.productNumber %}
                <div class=\"product-detail-ordernumber-container\">
                    {% block page_product_detail_ordernumber_label %}
                        <span class=\"product-detail-ordernumber-label\">
                            {{ \"detail.productNumberLabel\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_ordernumber %}
                        <meta itemprop=\"productID\"
                              content=\"{{ page.product.id }}\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            {{ page.product.productNumber }}
                        </span>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget.html.twig");
    }
}
