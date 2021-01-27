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

/* C:\laragon\www\backap21.01.service/themes/services/partials/pricelist-item.htm */
class __TwigTemplate_695f5d4801d469faa4877ccde21214cbc095b222e73a4a5190ca736b69ab4149 extends \Twig\Template
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
        $tags = array("set" => 3, "for" => 5);
        $filters = array("escape" => 1, "raw" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw'],
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["current_category"] ?? null), "title", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "</h1>
<h2><a href=\"/";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["current_category"] ?? null), "slug", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["current_item"] ?? null), "slug", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["current_item"] ?? null), "title", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "</a></h2>
";
        // line 3
        $context["pricelist_data"] = twig_get_attribute($this->env, $this->source, ($context["json"] ?? null), "decode", [0 => twig_get_attribute($this->env, $this->source, ($context["current_item"] ?? null), "data", [], "any", false, false, true, 3)], "method", false, false, true, 3);
        // line 4
        echo "<table class=\"pricelist-table\">
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pricelist_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "\t<tr class=\"pricelist-row\">
\t\t<td class=\"pricelist-title\"><div>";
            // line 7
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 7), 7, $this->source);
            echo "</div><span></span></td>
\t\t<td class=\"pricelist-price text-nowrap\">";
            // line 8
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["format"] ?? null), "price", [0 => twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 8)], "method", false, false, true, 8), 8, $this->source);
            echo "</td>
\t\t<td class=\"pricelist-measure text-nowrap\">";
            // line 9
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "measure", [], "any", false, false, true, 9), 9, $this->source);
            echo "</td>
\t\t<td><button class=\"pricelist-order-btn\">заказать</button></td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/partials/pricelist-item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 13,  95 => 9,  91 => 8,  87 => 7,  84 => 6,  80 => 5,  77 => 4,  75 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ current_category.title }}</h1>
<h2><a href=\"/{{ current_category.slug }}/{{ current_item.slug }}\">{{ current_item.title }}</a></h2>
{% set pricelist_data = json.decode(current_item.data) %}
<table class=\"pricelist-table\">
\t{% for row in pricelist_data %}
\t<tr class=\"pricelist-row\">
\t\t<td class=\"pricelist-title\"><div>{{ row.title | raw }}</div><span></span></td>
\t\t<td class=\"pricelist-price text-nowrap\">{{ format.price(row.price) | raw }}</td>
\t\t<td class=\"pricelist-measure text-nowrap\">{{ row.measure | raw }}</td>
\t\t<td><button class=\"pricelist-order-btn\">заказать</button></td>
\t</tr>
\t{% endfor %}
</table>", "C:\\laragon\\www\\backap21.01.service/themes/services/partials/pricelist-item.htm", "");
    }
}
