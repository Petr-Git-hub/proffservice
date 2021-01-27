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

/* C:\laragon\www\backap21.01.service/themes/services/layouts/main.htm */
class __TwigTemplate_c2bfcb3dea455d758c4b8bc617abea49e46ae0b8155f9c68cd32b1507df3bfb2 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 16, "partial" => 19, "page" => 19, "framework" => 26);
        $filters = array("escape" => 8, "theme" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework'],
                ['escape', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<title>";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</title>
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.png");
        echo "\" />
\t<meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "meta_description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
\t<link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/font-awesome.min.css", 1 => "assets/fonts/fonts.css", 2 => "assets/css/vendor.css", 3 => "assets/css/style.css"]);
        // line 16
        echo "\" rel=\"stylesheet\"> ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "</head>

<body> ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " <section id=\"page\" class=\"container\">";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "</section> ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "\t<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.min.js", 1 => "assets/js/typeit.min.js", 2 => "assets/js/jquery.autocomplete.min.js", 3 => "assets/js/script.min.js"]);
        // line 25
        echo "\"></script>
\t";
        // line 26
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 27
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  115 => 26,  112 => 25,  109 => 21,  104 => 20,  94 => 19,  90 => 17,  86 => 16,  84 => 12,  79 => 10,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<title>{{ this.page.title }}</title>
\t<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/favicon.png' | theme }}\" />
\t<meta name=\"description\" content=\"{{ this.page.meta_description}}\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
\t<link href=\"{{ [
\t\t'assets/css/font-awesome.min.css',
\t\t'assets/fonts/fonts.css',
\t\t'assets/css/vendor.css',
\t\t'assets/css/style.css']|theme }}\" rel=\"stylesheet\"> {% styles %}
</head>

<body> {% partial 'header.htm' %} <section id=\"page\" class=\"container\">{% page %}</section> {% partial 'footer.htm' %}
\t{% partial 'modal.htm' %}
\t<script src=\"{{ [
\t\t'assets/js/jquery.min.js',
\t\t'assets/js/typeit.min.js',
\t\t'assets/js/jquery.autocomplete.min.js',
\t\t'assets/js/script.min.js']|theme }}\"></script>
\t{% framework %}
</body>

</html>", "C:\\laragon\\www\\backap21.01.service/themes/services/layouts/main.htm", "");
    }
}
