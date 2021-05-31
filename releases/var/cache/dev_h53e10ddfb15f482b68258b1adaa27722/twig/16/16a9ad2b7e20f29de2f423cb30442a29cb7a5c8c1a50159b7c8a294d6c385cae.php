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

/* @Framework/swagger.html.twig */
class __TwigTemplate_6dc8f9f86c2a108267e1b07500ffd63a8d0be0ac2d7a7040d675ce444f1a176e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Framework/swagger.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Framework/swagger.html.twig"));

        // line 1
        echo "<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Swagger UI</title>
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/framework/swagger-ui.css"), "html", null, true);
        echo "\" >
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/framework/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\" />
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/framework/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\" />
  <style>
    html
    {
      box-sizing: border-box;
      overflow: -moz-scrollbars-vertical;
      overflow-y: scroll;
    }

    *,
    *:before,
    *:after
    {
      box-sizing: inherit;
    }

    body
    {
      margin:0;
      background: #fafafa;
    }
  </style>
  <style>.swagger-ui .topbar { display: none !important; }</style>
</head>

<body>
<div id=\"swagger-ui\"></div>

<script nonce=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/framework/swagger-ui-bundle.js"), "html", null, true);
        echo "\"> </script>
<script nonce=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/framework/swagger-ui-standalone-preset.js"), "html", null, true);
        echo "\"> </script>
<script nonce=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" >
    window.onload = function() {

        // Build a system
        const ui = SwaggerUIBundle({
            url: \"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(($context["schemaUrl"] ?? null), ["version" => ($context["apiVersion"] ?? null)]), "html", null, true);
        echo "\",
            dom_id: '#swagger-ui',
            deepLinking: true,
            displayOperationId: true,
            docExpansion: 'list',
            defaultModelsExpandDepth: -1,
            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset,
            ],
            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],
            layout: \"StandaloneLayout\",
            showCommonExtensions: true
        });

        window.ui = ui
    }
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/swagger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  103 => 40,  97 => 39,  91 => 38,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <title>Swagger UI</title>
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/framework/swagger-ui.css') }}\" >
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('bundles/framework/favicon-32x32.png') }}\" sizes=\"32x32\" />
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('bundles/framework/favicon-16x16.png') }}\" sizes=\"16x16\" />
  <style>
    html
    {
      box-sizing: border-box;
      overflow: -moz-scrollbars-vertical;
      overflow-y: scroll;
    }

    *,
    *:before,
    *:after
    {
      box-sizing: inherit;
    }

    body
    {
      margin:0;
      background: #fafafa;
    }
  </style>
  <style>.swagger-ui .topbar { display: none !important; }</style>
</head>

<body>
<div id=\"swagger-ui\"></div>

<script nonce=\"{{ cspNonce }}\" src=\"{{ asset('bundles/framework/swagger-ui-bundle.js') }}\"> </script>
<script nonce=\"{{ cspNonce }}\" src=\"{{ asset('bundles/framework/swagger-ui-standalone-preset.js') }}\"> </script>
<script nonce=\"{{ cspNonce }}\" >
    window.onload = function() {

        // Build a system
        const ui = SwaggerUIBundle({
            url: \"{{ url(schemaUrl, {'version': apiVersion}) }}\",
            dom_id: '#swagger-ui',
            deepLinking: true,
            displayOperationId: true,
            docExpansion: 'list',
            defaultModelsExpandDepth: -1,
            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset,
            ],
            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],
            layout: \"StandaloneLayout\",
            showCommonExtensions: true
        });

        window.ui = ui
    }
</script>
</body>
</html>
", "@Framework/swagger.html.twig", "/var/www/html/vendor/shopware/core/Framework/Resources/views/swagger.html.twig");
    }
}
