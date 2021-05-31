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

/* @Storefront/storefront/page/product-detail/meta.html.twig */
class __TwigTemplate_5c6c3c6a591909455e6a742278cbb82db6f3688fada4a048c315d8bf711ed521 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/meta.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/page/product-detail/meta.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        // line 4
        echo "    <meta property=\"og:type\"
          content=\"product\"/>
    <meta property=\"og:site_name\"
          content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
        echo "\"/>
    <meta property=\"og:url\"
          content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"/>
    <meta property=\"og:title\"
          content=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>

    <meta property=\"og:description\"
          content=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\"
          content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 16), "cover", [], "any", false, false, false, 16), "media", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/>

    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 18), "manufacturer", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <meta property=\"product:brand\"
              content=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "manufacturer", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\"/>
    ";
        }
        // line 22
        echo "    <meta property=\"product:price\"
          content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "calculatedPrice", [], "any", false, false, false, 23), "unitPrice", [], "any", false, false, false, 23)), "html", null, true);
        echo "\"/>
    <meta property=\"product:product_link\"
          content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\"/>

    <meta name=\"twitter:card\"
          content=\"product\"/>
    <meta name=\"twitter:site\"
          content=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:title\"
          content=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:description\"
          content=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"twitter:image\"
          content=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 36), "cover", [], "any", false, false, false, 36), "media", [], "any", false, false, false, 36), "url", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "translated", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "variation", [], "any", false, false, false, 39)) {
            echo " - ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "variation", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 39), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 39), "html", null, true);
                if ((0 !== twig_compare(twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "variation", [], "any", false, false, false, 39)), $context["variation"]))) {
                    echo " | ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        // line 42
        echo "    ";
        $context["canonicalUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42);
        // line 43
        echo "
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 44), "canonicalProductId", [], "any", false, false, false, 44)) {
            // line 45
            echo "        ";
            $context["canonicalUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 45), "canonicalProductId", [], "any", false, false, false, 45);
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    <link rel=\"canonical\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["canonicalUrl"] ?? null)]), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 48,  213 => 47,  210 => 46,  207 => 45,  205 => 44,  202 => 43,  199 => 42,  189 => 41,  154 => 39,  142 => 36,  137 => 34,  132 => 32,  127 => 30,  119 => 25,  114 => 23,  111 => 22,  106 => 20,  103 => 19,  101 => 18,  96 => 16,  91 => 14,  85 => 11,  80 => 9,  75 => 7,  70 => 4,  60 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/meta.html.twig' %}

{% block layout_head_meta_tags_opengraph %}
    <meta property=\"og:type\"
          content=\"product\"/>
    <meta property=\"og:site_name\"
          content=\"{{ config('core.basicInformation.shopName') }}\"/>
    <meta property=\"og:url\"
          content=\"{{ seoUrl('frontend.detail.page', { productId: page.product.id }) }}\"/>
    <meta property=\"og:title\"
          content=\"{{ metaTitle }}\"/>

    <meta property=\"og:description\"
          content=\"{{ metaDescription }}\"/>
    <meta property=\"og:image\"
          content=\"{{ page.product.cover.media.url }}\"/>

    {% if page.product.manufacturer %}
        <meta property=\"product:brand\"
              content=\"{{ page.product.manufacturer.translated.name }}\"/>
    {% endif %}
    <meta property=\"product:price\"
          content=\"{{ page.product.calculatedPrice.unitPrice|currency }}\"/>
    <meta property=\"product:product_link\"
          content=\"{{ seoUrl('frontend.detail.page', { productId: page.product.id }) }}\"/>

    <meta name=\"twitter:card\"
          content=\"product\"/>
    <meta name=\"twitter:site\"
          content=\"{{ config('core.basicInformation.shopName') }}\"/>
    <meta name=\"twitter:title\"
          content=\"{{ metaTitle }}\"/>
    <meta name=\"twitter:description\"
          content=\"{{ metaDescription }}\"/>
    <meta name=\"twitter:image\"
          content=\"{{ page.product.cover.media.url }}\"/>
{% endblock %}

{% block layout_head_title_inner %}{{ page.product.translated.name }}{% if page.product.variation %} - {% for variation in page.product.variation %}{{ variation.group }}: {{ variation.option }}{% if page.product.variation|last != variation %}{{ \" | \" }}{% endif %}{% endfor %}{% endif %}{% endblock %}

{% block layout_head_canonical %}
    {% set canonicalUrl = page.product.id %}

    {% if page.product.canonicalProductId %}
        {% set canonicalUrl = page.product.canonicalProductId %}
    {% endif %}

    <link rel=\"canonical\" href=\"{{ seoUrl('frontend.detail.page', { productId: canonicalUrl }) }}\" />
{% endblock %}
", "@Storefront/storefront/page/product-detail/meta.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/meta.html.twig");
    }
}
