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

/* C:\laragon\www\backap21.01.service/themes/services/pages/item.htm */
class __TwigTemplate_cad8dc12198c362dcf3b6b20555e6668f5ab9d515f5aa79b87d80c342b91f016 extends \Twig\Template
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
        $tags = array("partial" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
        echo "<div class=\"container\">
\t<div class=\"row\" style=\"flex-wrap: nowrap;\">
\t\t<div class=\"col\">
\t\t\t<div class=\"categories\">
\t\t\t\t";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"pricelist\">
\t\t\t\t";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pricelist-item.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/pages/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 11,  78 => 10,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
\t<div class=\"row\" style=\"flex-wrap: nowrap;\">
\t\t<div class=\"col\">
\t\t\t<div class=\"categories\">
\t\t\t\t{% partial 'services.htm' %}
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"pricelist\">
\t\t\t\t{% partial 'pricelist-item.htm' %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\laragon\\www\\backap21.01.service/themes/services/pages/item.htm", "");
    }
}
