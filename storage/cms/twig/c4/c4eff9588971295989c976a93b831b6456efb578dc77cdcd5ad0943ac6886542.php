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

/* C:\laragon\www\backap21.01.service/themes/services/partials/pricelist.htm */
class __TwigTemplate_b537e75aa25a456c6a7f928d4368232175888976dded1f36edc6d052ae28e622 extends \Twig\Template
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
        $tags = array("for" => 2, "set" => 4);
        $filters = array("escape" => 1, "raw" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["current_category"] ?? null), "items", [], "any", false, false, true, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["pricelist"]) {
            // line 3
            echo "<h2><a href=\"/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["current_category"] ?? null), "slug", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pricelist"], "slug", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["pricelist"], "title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "</a></h2>
";
            // line 4
            $context["pricelist_data"] = twig_get_attribute($this->env, $this->source, ($context["json"] ?? null), "decode", [0 => twig_get_attribute($this->env, $this->source, $context["pricelist"], "data", [], "any", false, false, true, 4)], "method", false, false, true, 4);
            // line 5
            echo "<table class=\"pricelist-table\">
\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pricelist_data"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 7
                echo "\t";
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 7) == 5)) ? ("<tr class=\"pricelist-more\"><td colspan=\"3\"><a href=\"javascript:void(0);\">Показать еще</a></td></tr>") : (""));
                echo "
\t<tr class=\"pricelist-row";
                // line 8
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 8) > 4)) ? (" hidden") : (""));
                echo "\">
\t\t<td class=\"pricelist-title\"><div>";
                // line 9
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 9), 9, $this->source);
                echo "</div><span></span></td>
\t\t<td class=\"pricelist-price text-nowrap\">";
                // line 10
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["format"] ?? null), "price", [0 => twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, true, 10)], "method", false, false, true, 10), 10, $this->source);
                echo "</td>
\t\t<td class=\"pricelist-measure text-nowrap\">";
                // line 11
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "measure", [], "any", false, false, true, 11), 11, $this->source);
                echo "</td>
\t\t<td><button class=\"pricelist-order-btn\">заказать</button></td>
\t</tr>
\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</table>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pricelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/partials/pricelist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 15,  119 => 11,  115 => 10,  111 => 9,  107 => 8,  102 => 7,  85 => 6,  82 => 5,  80 => 4,  71 => 3,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ current_category.title }}</h1>
{% for pricelist in current_category.items %}
<h2><a href=\"/{{ current_category.slug }}/{{ pricelist.slug }}\">{{ pricelist.title }}</a></h2>
{% set pricelist_data = json.decode(pricelist.data) %}
<table class=\"pricelist-table\">
\t{% for row in pricelist_data %}
\t{{ loop.index == 5 ? '<tr class=\"pricelist-more\"><td colspan=\"3\"><a href=\"javascript:void(0);\">Показать еще</a></td></tr>' }}
\t<tr class=\"pricelist-row{{ loop.index > 4 ? ' hidden'}}\">
\t\t<td class=\"pricelist-title\"><div>{{ row.title | raw }}</div><span></span></td>
\t\t<td class=\"pricelist-price text-nowrap\">{{ format.price(row.price) | raw }}</td>
\t\t<td class=\"pricelist-measure text-nowrap\">{{ row.measure | raw }}</td>
\t\t<td><button class=\"pricelist-order-btn\">заказать</button></td>
\t</tr>
\t{% endfor %}
</table>

{% endfor %}", "C:\\laragon\\www\\backap21.01.service/themes/services/partials/pricelist.htm", "");
    }
}
