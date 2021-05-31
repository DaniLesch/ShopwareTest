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

/* @Storefront/storefront/page/product-detail/review/review-widget.html.twig */
class __TwigTemplate_0f2425fb0673c82b136084725f26b48d317f98652af326ba480c09ae65a632e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_widget' => [$this, 'block_page_product_detail_review_widget'],
            'page_product_detail_review_info_container' => [$this, 'block_page_product_detail_review_info_container'],
            'page_product_detail_review_info' => [$this, 'block_page_product_detail_review_info'],
            'page_product_detail_review_title' => [$this, 'block_page_product_detail_review_title'],
            'page_product_detail_review_overview' => [$this, 'block_page_product_detail_review_overview'],
            'page_product_detail_review_filter' => [$this, 'block_page_product_detail_review_filter'],
            'page_product_detail_review_filter_csrf' => [$this, 'block_page_product_detail_review_filter_csrf'],
            'page_product_detail_review_filter_box' => [$this, 'block_page_product_detail_review_filter_box'],
            'page_product_detail_review_filter_checkbox' => [$this, 'block_page_product_detail_review_filter_checkbox'],
            'page_product_detail_review_filter_checkbox_input' => [$this, 'block_page_product_detail_review_filter_checkbox_input'],
            'page_product_detail_review_filter_checkbox_label' => [$this, 'block_page_product_detail_review_filter_checkbox_label'],
            'page_product_detail_review_filter_progressbar' => [$this, 'block_page_product_detail_review_filter_progressbar'],
            'page_product_detail_review_filter_share' => [$this, 'block_page_product_detail_review_filter_share'],
            'page_product_detail_review_filter_divider' => [$this, 'block_page_product_detail_review_filter_divider'],
            'page_product_detail_review_form_teaser' => [$this, 'block_page_product_detail_review_form_teaser'],
            'page_product_detail_review_form_teaser_header' => [$this, 'block_page_product_detail_review_form_teaser_header'],
            'page_product_detail_review_form_teaser_text' => [$this, 'block_page_product_detail_review_form_teaser_text'],
            'page_product_detail_review_form_teaser_button' => [$this, 'block_page_product_detail_review_form_teaser_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_review_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget"));

        // line 2
        echo "    <div class=\"sticky-top product-detail-review-widget\">

        ";
        // line 4
        $this->displayBlock('page_product_detail_review_info_container', $context, $blocks);
        // line 140
        echo "
        ";
        // line 141
        $this->displayBlock('page_product_detail_review_form_teaser', $context, $blocks);
        // line 185
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_product_detail_review_info_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info_container"));

        // line 5
        echo "            ";
        $this->displayBlock('page_product_detail_review_info', $context, $blocks);
        // line 40
        echo "
            ";
        // line 41
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 42
            echo "                <hr>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-container"], "submitOnChange" => true];
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('page_product_detail_review_filter', $context, $blocks);
        // line 139
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_product_detail_review_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info"));

        // line 6
        echo "                <div class=\"product-detail-review-info js-review-info\">

                    ";
        // line 8
        $this->displayBlock('page_product_detail_review_title', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 14
        $this->displayBlock('page_product_detail_review_overview', $context, $blocks);
        // line 38
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_page_product_detail_review_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_title"));

        // line 9
        echo "                        <p class=\"product-detail-review-title h5\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTitle", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 10), "%total%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "totalReviews", [], "any", false, false, false, 10)]));
        echo "
                        </p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_product_detail_review_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_overview"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_overview"));

        // line 15
        echo "                        <div class=\"product-detail-review-rating\"
                            ";
        // line 16
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 17
            echo "                                itemprop=\"aggregateRating\" itemscope itemtype=\"https://schema.org/AggregateRating\"
                            ";
        }
        // line 18
        echo ">

                            ";
        // line 20
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 21
            echo "                                <meta itemprop=\"bestRating\" content=\"5\">
                                <meta itemprop=\"ratingCount\" content=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["productReviewCount"] ?? null), "html", null, true);
            echo "\">
                                <meta itemprop=\"ratingValue\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
            echo "\">
                            ";
        }
        // line 25
        echo "
                            ";
        // line 26
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", 26)->display(twig_array_merge($context, ["points" =>         // line 27
($context["productAvgRating"] ?? null), "style" => "text-primary"]));
        // line 30
        echo "
                            ";
        // line 31
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 32
            echo "                                <p class=\"h6\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
            echo " ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRate"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 33), "maxPoints", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRateElements"), "html", null, true);
            echo "
                                </p>
                            ";
        }
        // line 36
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_page_product_detail_review_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter"));

        // line 51
        echo "                ";
        if ((1 === twig_compare(($context["productReviewCount"] ?? null), 0))) {
            // line 52
            echo "                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
                              action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 54), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"
                              method=\"post\"
                              data-form-ajax-submit=\"true\"
                              data-form-ajax-submit-options='";
            // line 57
            echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
            echo "'>

                            ";
            // line 59
            $this->displayBlock('page_product_detail_review_filter_csrf', $context, $blocks);
            // line 62
            echo "
                            ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "limit"], "method", false, false, false, 63)) {
                // line 64
                echo "                                <input type=\"hidden\" name=\"limit\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "get", [0 => "limit"], "method", false, false, false, 64), "html", null, true);
                echo "\">
                            ";
            }
            // line 66
            echo "
                            ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "get", [0 => "language"], "method", false, false, false, 67)) {
                // line 68
                echo "                                <input type=\"hidden\" name=\"language\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "get", [0 => "language"], "method", false, false, false, 68), "html", null, true);
                echo "\">
                            ";
            }
            // line 70
            echo "
                            ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "get", [0 => "sort"], "method", false, false, false, 71)) {
                // line 72
                echo "                                <input type=\"hidden\" name=\"sort\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "get", [0 => "sort"], "method", false, false, false, 72), "html", null, true);
                echo "\">
                            ";
            }
            // line 74
            echo "
                            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 75), "matrix", [], "any", false, false, false, 75));
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
            foreach ($context['_seq'] as $context["_key"] => $context["matrix"]) {
                // line 76
                echo "                                ";
                $this->displayBlock('page_product_detail_review_filter_box', $context, $blocks);
                // line 130
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                        </form>
                    </div>

                    ";
            // line 134
            $this->displayBlock('page_product_detail_review_filter_divider', $context, $blocks);
            // line 137
            echo "                ";
        }
        // line 138
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_page_product_detail_review_filter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_csrf"));

        // line 60
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_page_product_detail_review_filter_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_box"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_box"));

        // line 77
        echo "                                    <div class=\"row product-detail-review-filter\">

                                        ";
        // line 79
        $this->displayBlock('page_product_detail_review_filter_checkbox', $context, $blocks);
        // line 109
        echo "
                                        ";
        // line 110
        $this->displayBlock('page_product_detail_review_filter_progressbar', $context, $blocks);
        // line 122
        echo "
                                        ";
        // line 123
        $this->displayBlock('page_product_detail_review_filter_share', $context, $blocks);
        // line 128
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_page_product_detail_review_filter_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox"));

        // line 80
        echo "                                            <div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
                                                <div class=\"custom-control custom-checkbox\">

                                                    ";
        // line 83
        $this->displayBlock('page_product_detail_review_filter_checkbox_input', $context, $blocks);
        // line 98
        echo "
                                                    ";
        // line 99
        $this->displayBlock('page_product_detail_review_filter_checkbox_label', $context, $blocks);
        // line 106
        echo "                                                </div>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_page_product_detail_review_filter_checkbox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_input"));

        // line 84
        echo "                                                        <input type=\"checkbox\"
                                                               class=\"custom-control-input\"
                                                               id=\"reviewRating";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 86), "html", null, true);
        echo "\"
                                                               name=\"points[]\"
                                                            ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "get", [0 => "points"], "method", false, false, false, 88)) {
            // line 89
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "get", [0 => "points"], "method", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 90
                echo "                                                                    ";
                if ((0 === twig_compare($context["points"], twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 90)))) {
                    // line 91
                    echo "                                                                        checked=\"checked\"
                                                                    ";
                }
                // line 93
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                                            ";
        }
        // line 95
        echo "                                                               value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 95), "html", null, true);
        echo "\"
                                                            ";
        // line 96
        if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 96), 1))) {
            echo "disabled";
        }
        echo ">
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_page_product_detail_review_filter_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_label"));

        // line 100
        echo "                                                        <label class=\"custom-control-label text-nowrap\"
                                                               for=\"reviewRating";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 101), "html", null, true);
        echo "\">
                                                            <small>";
        // line 102
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("detail.review" . twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 102)) . "PointRatingText")));
        echo "
                                                                (";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 103), "html", null, true);
        echo ")</small>
                                                        </label>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_page_product_detail_review_filter_progressbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_progressbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_progressbar"));

        // line 111
        echo "                                            <div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
                                                <div class=\"progress product-detail-review-progressbar-container\">
                                                    <div class=\"progress-bar product-detail-review-progressbar-bar\"
                                                         role=\"progressbar\"
                                                         style=\"width: ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 115), "html", null, true);
        echo "%;\"
                                                         aria-valuenow=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 116), "html", null, true);
        echo "\"
                                                         aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_page_product_detail_review_filter_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_share"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_share"));

        // line 124
        echo "                                            <div class=\"col-12 col-md-3 product-detail-review-share\">
                                                <p><small>";
        // line 125
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 125)), "html", null, true);
        echo "%</small></p>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_page_product_detail_review_filter_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_divider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_divider"));

        // line 135
        echo "                        <hr/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_page_product_detail_review_form_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser"));

        // line 142
        echo "            <div class=\"product-detail-review-teaser js-review-teaser\">

                ";
        // line 144
        $this->displayBlock('page_product_detail_review_form_teaser_header', $context, $blocks);
        // line 153
        echo "
                ";
        // line 154
        $this->displayBlock('page_product_detail_review_form_teaser_text', $context, $blocks);
        // line 163
        echo "
                ";
        // line 164
        $this->displayBlock('page_product_detail_review_form_teaser_button', $context, $blocks);
        // line 183
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_page_product_detail_review_form_teaser_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_header"));

        // line 145
        echo "                    <p class=\"h4\">
                        ";
        // line 146
        if ( !twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 146)) {
            // line 147
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserTitle"));
            echo "
                        ";
        } else {
            // line 149
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserTitle"));
            echo "
                        ";
        }
        // line 151
        echo "                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_page_product_detail_review_form_teaser_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_text"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_text"));

        // line 155
        echo "                    <p>
                        ";
        // line 156
        if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customerReview", [], "any", false, false, false, 156)) {
            // line 157
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserText"));
            echo "
                        ";
        } else {
            // line 159
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserText"));
            echo "
                        ";
        }
        // line 161
        echo "                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_page_product_detail_review_form_teaser_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_button"));

        // line 165
        echo "                    <button class=\"btn btn-primary product-detail-review-teaser-btn\"
                            type=\"button\"
                            data-toggle=\"collapse\"
                            data-target=\".multi-collapse\"
                            aria-expanded=\"false\"
                            aria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t";
        // line 172
        if ( !twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 172)) {
            // line 173
            echo "                                ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButton"));
            echo "
                            ";
        } else {
            // line 175
            echo "                                ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserButton"));
            echo "
                            ";
        }
        // line 177
        echo "\t\t\t\t\t\t</span>
                        <span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t";
        // line 179
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButtonHide"));
        echo "
\t\t\t\t\t\t</span>
                    </button>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  818 => 179,  814 => 177,  808 => 175,  802 => 173,  800 => 172,  791 => 165,  781 => 164,  770 => 161,  764 => 159,  758 => 157,  756 => 156,  753 => 155,  743 => 154,  732 => 151,  726 => 149,  720 => 147,  718 => 146,  715 => 145,  705 => 144,  694 => 183,  692 => 164,  689 => 163,  687 => 154,  684 => 153,  682 => 144,  678 => 142,  668 => 141,  657 => 135,  647 => 134,  634 => 125,  631 => 124,  621 => 123,  605 => 116,  601 => 115,  595 => 111,  585 => 110,  572 => 103,  568 => 102,  564 => 101,  561 => 100,  551 => 99,  537 => 96,  532 => 95,  529 => 94,  523 => 93,  519 => 91,  516 => 90,  511 => 89,  509 => 88,  504 => 86,  500 => 84,  490 => 83,  478 => 106,  476 => 99,  473 => 98,  471 => 83,  466 => 80,  456 => 79,  445 => 128,  443 => 123,  440 => 122,  438 => 110,  435 => 109,  433 => 79,  429 => 77,  419 => 76,  406 => 60,  396 => 59,  386 => 138,  383 => 137,  381 => 134,  376 => 131,  362 => 130,  359 => 76,  342 => 75,  339 => 74,  333 => 72,  331 => 71,  328 => 70,  322 => 68,  320 => 67,  317 => 66,  311 => 64,  309 => 63,  306 => 62,  304 => 59,  299 => 57,  293 => 54,  289 => 52,  286 => 51,  276 => 50,  265 => 36,  253 => 33,  250 => 32,  248 => 31,  245 => 30,  243 => 27,  242 => 26,  239 => 25,  234 => 23,  230 => 22,  227 => 21,  225 => 20,  221 => 18,  217 => 17,  215 => 16,  212 => 15,  202 => 14,  189 => 10,  186 => 9,  176 => 8,  165 => 38,  163 => 14,  160 => 13,  158 => 8,  154 => 6,  144 => 5,  134 => 139,  132 => 50,  129 => 49,  127 => 45,  124 => 44,  120 => 42,  118 => 41,  115 => 40,  112 => 5,  102 => 4,  91 => 185,  89 => 141,  86 => 140,  84 => 4,  80 => 2,  61 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_review_widget %}
    <div class=\"sticky-top product-detail-review-widget\">

        {% block page_product_detail_review_info_container %}
            {% block page_product_detail_review_info %}
                <div class=\"product-detail-review-info js-review-info\">

                    {% block page_product_detail_review_title %}
                        <p class=\"product-detail-review-title h5\">
                            {{ \"detail.reviewTitle\"|trans({'%count%': reviews.total, '%total%':reviews.totalReviews })|sw_sanitize }}
                        </p>
                    {% endblock %}

                    {% block page_product_detail_review_overview %}
                        <div class=\"product-detail-review-rating\"
                            {% if productReviewCount > 0 %}
                                itemprop=\"aggregateRating\" itemscope itemtype=\"https://schema.org/AggregateRating\"
                            {% endif %}>

                            {% if productReviewCount > 0 %}
                                <meta itemprop=\"bestRating\" content=\"5\">
                                <meta itemprop=\"ratingCount\" content=\"{{ productReviewCount }}\">
                                <meta itemprop=\"ratingValue\" content=\"{{ productAvgRating }}\">
                            {% endif %}

                            {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                points: productAvgRating,
                                style: 'text-primary'
                            } %}

                            {% if productReviewCount > 0 %}
                                <p class=\"h6\">
                                    {{ productAvgRating }} {{ \"detail.reviewAvgRate\"|trans|sw_sanitize }} {{ reviews.matrix.maxPoints }} {{ \"detail.reviewAvgRateElements\"|trans }}
                                </p>
                            {% endif %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% if productReviewCount > 0 %}
                <hr>
            {% endif %}

            {% set formAjaxSubmitOptions = {
                replaceSelectors: [\".js-review-container\"],
                submitOnChange: true
            } %}

            {% block page_product_detail_review_filter %}
                {% if productReviewCount > 0 %}
                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
                              action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
                              method=\"post\"
                              data-form-ajax-submit=\"true\"
                              data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                            {% block page_product_detail_review_filter_csrf %}
                                {{ sw_csrf('frontend.product.reviews') }}
                            {% endblock %}

                            {% if app.request.get('limit') %}
                                <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                            {% endif %}

                            {% if app.request.get('language') %}
                                <input type=\"hidden\" name=\"language\" value=\"{{ app.request.get('language') }}\">
                            {% endif %}

                            {% if app.request.get('sort') %}
                                <input type=\"hidden\" name=\"sort\" value=\"{{ app.request.get('sort') }}\">
                            {% endif %}

                            {% for matrix in reviews.matrix.matrix %}
                                {% block page_product_detail_review_filter_box %}
                                    <div class=\"row product-detail-review-filter\">

                                        {% block page_product_detail_review_filter_checkbox %}
                                            <div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
                                                <div class=\"custom-control custom-checkbox\">

                                                    {% block page_product_detail_review_filter_checkbox_input %}
                                                        <input type=\"checkbox\"
                                                               class=\"custom-control-input\"
                                                               id=\"reviewRating{{ matrix.points }}\"
                                                               name=\"points[]\"
                                                            {% if app.request.get('points') %}
                                                                {% for points in app.request.get('points') %}
                                                                    {% if points == matrix.points %}
                                                                        checked=\"checked\"
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                               value=\"{{ matrix.points }}\"
                                                            {% if matrix.count < 1 %}disabled{% endif %}>
                                                    {% endblock %}

                                                    {% block page_product_detail_review_filter_checkbox_label %}
                                                        <label class=\"custom-control-label text-nowrap\"
                                                               for=\"reviewRating{{ matrix.points }}\">
                                                            <small>{{ \"detail.review#{matrix.points}PointRatingText\"|trans|sw_sanitize }}
                                                                ({{ matrix.count }})</small>
                                                        </label>
                                                    {% endblock %}
                                                </div>
                                            </div>
                                        {% endblock %}

                                        {% block page_product_detail_review_filter_progressbar %}
                                            <div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
                                                <div class=\"progress product-detail-review-progressbar-container\">
                                                    <div class=\"progress-bar product-detail-review-progressbar-bar\"
                                                         role=\"progressbar\"
                                                         style=\"width: {{ matrix.percent }}%;\"
                                                         aria-valuenow=\"{{ matrix.percent }}\"
                                                         aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        {% endblock %}

                                        {% block page_product_detail_review_filter_share %}
                                            <div class=\"col-12 col-md-3 product-detail-review-share\">
                                                <p><small>{{ matrix.percent|round }}%</small></p>
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            {% endfor %}
                        </form>
                    </div>

                    {% block page_product_detail_review_filter_divider %}
                        <hr/>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}

        {% block page_product_detail_review_form_teaser %}
            <div class=\"product-detail-review-teaser js-review-teaser\">

                {% block page_product_detail_review_form_teaser_header %}
                    <p class=\"h4\">
                        {% if not reviews.customerReview %}
                            {{ \"detail.reviewTeaserTitle\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"detail.reviewExistsTeaserTitle\"|trans|sw_sanitize }}
                        {% endif %}
                    </p>
                {% endblock %}

                {% block page_product_detail_review_form_teaser_text %}
                    <p>
                        {% if not page.customerReview %}
                            {{ \"detail.reviewTeaserText\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"detail.reviewExistsTeaserText\"|trans|sw_sanitize }}
                        {% endif %}
                    </p>
                {% endblock %}

                {% block page_product_detail_review_form_teaser_button %}
                    <button class=\"btn btn-primary product-detail-review-teaser-btn\"
                            type=\"button\"
                            data-toggle=\"collapse\"
                            data-target=\".multi-collapse\"
                            aria-expanded=\"false\"
                            aria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t{% if not reviews.customerReview %}
                                {{ \"detail.reviewTeaserButton\"|trans|sw_sanitize }}
                            {% else %}
                                {{ \"detail.reviewExistsTeaserButton\"|trans|sw_sanitize }}
                            {% endif %}
\t\t\t\t\t\t</span>
                        <span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t{{ \"detail.reviewTeaserButtonHide\"|trans|sw_sanitize }}
\t\t\t\t\t\t</span>
                    </button>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-widget.html.twig");
    }
}
