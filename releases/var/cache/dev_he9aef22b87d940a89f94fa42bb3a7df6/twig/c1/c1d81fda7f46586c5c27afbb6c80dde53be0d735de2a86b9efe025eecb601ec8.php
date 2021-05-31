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

/* @Storefront/storefront/page/product-detail/tabs.html.twig */
class __TwigTemplate_11cadb1671f56e980b19bb1b807cd7d5b8c1963f26049b4bfb921eb02708bb26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_tabs_inner' => [$this, 'block_page_product_detail_tabs_inner'],
            'page_product_detail_tabs_navigation' => [$this, 'block_page_product_detail_tabs_navigation'],
            'page_product_detail_tabs_navigation_container' => [$this, 'block_page_product_detail_tabs_navigation_container'],
            'page_product_detail_tabs_navigation_description' => [$this, 'block_page_product_detail_tabs_navigation_description'],
            'page_product_detail_tabs_navigation_review' => [$this, 'block_page_product_detail_tabs_navigation_review'],
            'page_product_detail_tabs_content' => [$this, 'block_page_product_detail_tabs_content'],
            'page_product_detail_tabs_content_container' => [$this, 'block_page_product_detail_tabs_content_container'],
            'page_product_detail_tabs_content_description' => [$this, 'block_page_product_detail_tabs_content_description'],
            'page_product_detail_tabs_content_review' => [$this, 'block_page_product_detail_tabs_content_review'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/tabs.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_tabs_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_tabs_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_inner"));

        // line 2
        echo "    <div class=\"card card-tabs\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_tabs_navigation', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('page_product_detail_tabs_content', $context, $blocks);
        // line 90
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_page_product_detail_tabs_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation"));

        // line 4
        echo "            <div class=\"card-header product-detail-tab-navigation\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_tabs_navigation_container', $context, $blocks);
        // line 60
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_product_detail_tabs_navigation_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_container"));

        // line 6
        echo "                    <ul class=\"nav nav-tabs product-detail-tab-navigation-list\"
                        id=\"product-detail-tabs\"
                        role=\"tablist\">
                        ";
        // line 9
        $this->displayBlock('page_product_detail_tabs_navigation_description', $context, $blocks);
        // line 39
        echo "                        ";
        $this->displayBlock('page_product_detail_tabs_navigation_review', $context, $blocks);
        // line 58
        echo "                    </ul>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_page_product_detail_tabs_navigation_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_description"));

        // line 10
        echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 11
        if (((0 !== twig_compare(($context["ratingSuccess"] ?? null), 1)) && (0 !== twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
            echo "active";
        }
        echo " product-detail-tab-navigation-link\"
                                   id=\"description-tab\"
                                   data-toggle=\"tab\"
                                   data-offcanvas-tabs=\"true\"
                                   href=\"#description-tab-pane\"
                                   role=\"tab\"
                                   aria-controls=\"description-tab-pane\"
                                   aria-selected=\"true\">
                                    <span>";
        // line 19
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsDescription"));
        echo "</span>
                                    <span class=\"product-detail-tab-navigation-icon\">
                                        ";
        // line 21
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/tabs.html.twig", 21);
        })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
        // line 22
        echo "                                    </span>
                                    ";
        // line 23
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "translated", [], "any", false, false, false, 23), "description", [], "any", false, false, false, 23)), 0))) {
            // line 24
            echo "                                        <span class=\"product-detail-tab-preview\">
                                            ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "translated", [], "any", false, false, false, 25), "description", [], "any", false, false, false, 25)))), "truncate", [0 => 125, 1 => "…"], "method", false, false, false, 25), "html", null, true);
            echo "

                                            ";
            // line 31
            echo "                                            ";
            if ((0 <= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "description", [], "any", false, false, false, 31)), 126))) {
                // line 32
                echo "                                                <span class=\"product-detail-tab-preview-more\">";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsPreviewMore"));
                echo "</span>
                                            ";
            }
            // line 34
            echo "                                        </span>
                                    ";
        }
        // line 36
        echo "                                </a>
                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_page_product_detail_tabs_navigation_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_review"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_navigation_review"));

        // line 40
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview")) {
            // line 41
            echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link ";
            // line 42
            if (((0 === twig_compare(($context["ratingSuccess"] ?? null), 1)) || (0 === twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
                echo "active";
            }
            echo " product-detail-tab-navigation-link\"
                                       id=\"review-tab\"
                                       data-toggle=\"tab\"
                                       data-offcanvas-tabs=\"true\"
                                       href=\"#review-tab-pane\"
                                       role=\"tab\"
                                       aria-controls=\"review-tab-pane\"
                                       aria-selected=\"true\">
                                        ";
            // line 50
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.tabsReview"));
            echo "
                                        <span class=\"product-detail-tab-navigation-icon\">
                                            ";
            // line 52
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/tabs.html.twig", 52);
            })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
            // line 53
            echo "                                        </span>
                                    </a>
                                </li>
                            ";
        }
        // line 57
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_page_product_detail_tabs_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content"));

        // line 64
        echo "            <div class=\"product-detail-tabs-content card-body\">
                ";
        // line 65
        $this->displayBlock('page_product_detail_tabs_content_container', $context, $blocks);
        // line 88
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_page_product_detail_tabs_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_container"));

        // line 66
        echo "                    <div class=\"tab-content\">
                        ";
        // line 67
        $this->displayBlock('page_product_detail_tabs_content_description', $context, $blocks);
        // line 75
        echo "
                        ";
        // line 76
        $this->displayBlock('page_product_detail_tabs_content_review', $context, $blocks);
        // line 86
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_page_product_detail_tabs_content_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_description"));

        // line 68
        echo "                            <div class=\"tab-pane fade show ";
        if (((0 !== twig_compare(($context["ratingSuccess"] ?? null), 1)) && (0 !== twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
            echo "active";
        }
        echo "\"
                                 id=\"description-tab-pane\"
                                 role=\"tabpanel\"
                                 aria-labelledby=\"description-tab\">
                                ";
        // line 72
        $this->loadTemplate("@Storefront/storefront/page/product-detail/description.html.twig", "@Storefront/storefront/page/product-detail/tabs.html.twig", 72)->display($context);
        // line 73
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_page_product_detail_tabs_content_review($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_review"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs_content_review"));

        // line 77
        echo "                            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.listing.showReview")) {
            // line 78
            echo "                                <div class=\"tab-pane fade show ";
            if (((0 === twig_compare(($context["ratingSuccess"] ?? null), 1)) || (0 === twig_compare(($context["ratingSuccess"] ?? null),  -1)))) {
                echo "active";
            }
            echo "\"
                                     id=\"review-tab-pane\"
                                     role=\"tabpanel\"
                                     aria-labelledby=\"review-tab\">
                                    ";
            // line 82
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review.html.twig", "@Storefront/storefront/page/product-detail/tabs.html.twig", 82)->display(twig_array_merge($context, ["reviews" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 82)]));
            // line 83
            echo "                                </div>
                            ";
        }
        // line 85
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  403 => 85,  399 => 83,  397 => 82,  387 => 78,  384 => 77,  374 => 76,  363 => 73,  361 => 72,  351 => 68,  341 => 67,  330 => 86,  328 => 76,  325 => 75,  323 => 67,  320 => 66,  310 => 65,  299 => 88,  297 => 65,  294 => 64,  284 => 63,  274 => 57,  268 => 53,  260 => 52,  255 => 50,  242 => 42,  239 => 41,  236 => 40,  226 => 39,  214 => 36,  210 => 34,  204 => 32,  201 => 31,  196 => 25,  193 => 24,  191 => 23,  188 => 22,  180 => 21,  175 => 19,  162 => 11,  159 => 10,  149 => 9,  138 => 58,  135 => 39,  133 => 9,  128 => 6,  118 => 5,  107 => 60,  105 => 5,  102 => 4,  92 => 3,  81 => 90,  79 => 63,  76 => 62,  74 => 3,  71 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_tabs_inner %}
    <div class=\"card card-tabs\">
        {% block page_product_detail_tabs_navigation %}
            <div class=\"card-header product-detail-tab-navigation\">
                {% block page_product_detail_tabs_navigation_container %}
                    <ul class=\"nav nav-tabs product-detail-tab-navigation-list\"
                        id=\"product-detail-tabs\"
                        role=\"tablist\">
                        {% block page_product_detail_tabs_navigation_description %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if (ratingSuccess != 1) and (ratingSuccess != -1) %}active{% endif %} product-detail-tab-navigation-link\"
                                   id=\"description-tab\"
                                   data-toggle=\"tab\"
                                   data-offcanvas-tabs=\"true\"
                                   href=\"#description-tab-pane\"
                                   role=\"tab\"
                                   aria-controls=\"description-tab-pane\"
                                   aria-selected=\"true\">
                                    <span>{{ \"detail.tabsDescription\"|trans|sw_sanitize }}</span>
                                    <span class=\"product-detail-tab-navigation-icon\">
                                        {% sw_icon 'arrow-medium-right' style {'pack':'solid'} %}
                                    </span>
                                    {% if page.product.translated.description|length > 0 %}
                                        <span class=\"product-detail-tab-preview\">
                                            {{ page.product.translated.description|raw|striptags|sw_sanitize|u.truncate(125, '…') }}

                                            {# truncate always cuts down the length to 125 characters.
                                               So it will only shorten the string if it exceeds 125 chars.
                                               Therefor, only show the button when the length of the text is
                                               greater or equal then 126 characters. #}
                                            {% if page.product.translated.description|length >= 126 %}
                                                <span class=\"product-detail-tab-preview-more\">{{ \"detail.tabsPreviewMore\"|trans|sw_sanitize }}</span>
                                            {% endif %}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endblock %}
                        {% block page_product_detail_tabs_navigation_review %}
                            {% if config('core.listing.showReview') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link {% if (ratingSuccess == 1) or (ratingSuccess == -1) %}active{% endif %} product-detail-tab-navigation-link\"
                                       id=\"review-tab\"
                                       data-toggle=\"tab\"
                                       data-offcanvas-tabs=\"true\"
                                       href=\"#review-tab-pane\"
                                       role=\"tab\"
                                       aria-controls=\"review-tab-pane\"
                                       aria-selected=\"true\">
                                        {{ \"detail.tabsReview\"|trans|sw_sanitize }}
                                        <span class=\"product-detail-tab-navigation-icon\">
                                            {% sw_icon 'arrow-medium-right' style {'pack':'solid'} %}
                                        </span>
                                    </a>
                                </li>
                            {% endif %}
                        {% endblock %}
                    </ul>
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_product_detail_tabs_content %}
            <div class=\"product-detail-tabs-content card-body\">
                {% block page_product_detail_tabs_content_container %}
                    <div class=\"tab-content\">
                        {% block page_product_detail_tabs_content_description %}
                            <div class=\"tab-pane fade show {% if (ratingSuccess != 1) and (ratingSuccess != -1) %}active{% endif %}\"
                                 id=\"description-tab-pane\"
                                 role=\"tabpanel\"
                                 aria-labelledby=\"description-tab\">
                                {% sw_include '@Storefront/storefront/page/product-detail/description.html.twig' %}
                            </div>
                        {% endblock %}

                        {% block page_product_detail_tabs_content_review %}
                            {% if config('core.listing.showReview') %}
                                <div class=\"tab-pane fade show {% if (ratingSuccess == 1) or (ratingSuccess == -1) %}active{% endif %}\"
                                     id=\"review-tab-pane\"
                                     role=\"tabpanel\"
                                     aria-labelledby=\"review-tab\">
                                    {% sw_include '@Storefront/storefront/page/product-detail/review/review.html.twig' with {'reviews': page.reviews} %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/tabs.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/tabs.html.twig");
    }
}
