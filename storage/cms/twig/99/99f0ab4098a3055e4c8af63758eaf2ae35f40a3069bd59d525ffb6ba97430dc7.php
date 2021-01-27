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

/* C:\laragon\www\backap21.01.service/themes/services/pages/index.htm */
class __TwigTemplate_a980453960756ac858bbee1cf55809c70dcd7feab3f022fe0ef178fff0125bbf extends \Twig\Template
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
        $tags = array("for" => 20, "partial" => 37);
        $filters = array("escape" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['escape'],
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
   <div class=\"row\">

      <div class=\"col-sm-12\">
         <div class=\"title-center\">
            <h1>Сервис профессиональных услуг</h1>
            <div class=\"subtitle\">Больше не нужно обращаться в разные фирмы что бы сделать все что нужно!</div>
         </div>
         <form action=\"#\">
            <div class=\"search\">
               <!-- <div class=\"inp-placeholder\" id=\"placeholder\"></div> -->
               <input class=\"mr-sm-2\" type=\"search\" placeholder=\"Найти услуги\">
               <button type=\"submit\" class=\"search-button\">
                  <i class=\"fa fa-search\"></i>
               </button>
            </div>
         </form>
      </div>

      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "      <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
         <div class=\"service\">
            <ul class=\"service-ul\">
               <li class=\"service-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</li>
               ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "items", [], "any", false, false, true, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "                  <li><a href=\"/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\" class=\"service-link\">
                       ";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
                     </a></li>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
            </ul>
            <div class=\"service-last\"><a href=\"/";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\" class=\"service-link\">Все услуги</a></div>
         </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
      <!-- ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pricelist.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " -->

   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  130 => 36,  120 => 32,  116 => 30,  107 => 27,  100 => 26,  96 => 25,  92 => 24,  87 => 21,  83 => 20,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
   <div class=\"row\">

      <div class=\"col-sm-12\">
         <div class=\"title-center\">
            <h1>Сервис профессиональных услуг</h1>
            <div class=\"subtitle\">Больше не нужно обращаться в разные фирмы что бы сделать все что нужно!</div>
         </div>
         <form action=\"#\">
            <div class=\"search\">
               <!-- <div class=\"inp-placeholder\" id=\"placeholder\"></div> -->
               <input class=\"mr-sm-2\" type=\"search\" placeholder=\"Найти услуги\">
               <button type=\"submit\" class=\"search-button\">
                  <i class=\"fa fa-search\"></i>
               </button>
            </div>
         </form>
      </div>

      {% for category in categories %}
      <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
         <div class=\"service\">
            <ul class=\"service-ul\">
               <li class=\"service-title\">{{ category.title }}</li>
               {% for item in category.items %}
                  <li><a href=\"/{{ category.slug }}/{{ item.slug }}\" class=\"service-link\">
                       {{ item.title }}
                     </a></li>
               {% endfor %}

            </ul>
            <div class=\"service-last\"><a href=\"/{{ category.slug }}\" class=\"service-link\">Все услуги</a></div>
         </div>
      </div>
      {% endfor %}

      <!-- {% partial 'pricelist.htm' %} -->

   </div>
</div>", "C:\\laragon\\www\\backap21.01.service/themes/services/pages/index.htm", "");
    }
}
