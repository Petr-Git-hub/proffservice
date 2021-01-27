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

/* C:\laragon\www\backap21.01.service/themes/services/partials/header.htm */
class __TwigTemplate_15edd17a2d65001359a3f109fe09426c296a0444a817cd700ef59802c523a1ba extends \Twig\Template
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
        $tags = array("if" => 2, "for" => 26, "component" => 30);
        $filters = array("escape" => 27, "lower" => 30);
        $functions = array("url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'component'],
                ['escape', 'lower'],
                ['url']
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
        echo "<!-- если страница index.htm то к header добавить class index  -->
<header ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "id", [], "any", false, false, true, 2) == "index")) {
            echo "class=\"index\" ";
        }
        echo ">
\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t<div class=\"container\">
\t\t\t<a class=\"logo\" href=\"";
        // line 5
        echo url("/");
        echo "\">PROFFSERVICE
\t\t\t\t<span class=\"logo-subtitle pt-1\">сервис проффесиональных услуг</span>
\t\t\t</a>

\t\t\t<form action=\"#\" class=\"navbar-form indexNone\">
\t\t\t\t<div class=\"city\">
\t\t\t\t\t<a class=\"city-link\" href=\"#\"><i class=\"fa fa-dot-circle-o mr-2\"></i><span>Саранск</span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-search \">
\t\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t\t<input id=\"header-search\" type=\"search\" placeholder=\"Найти услуги\" autocomplete=\"off\"><button
\t\t\t\t\t\t\ttype=\"button\" class=\"search-button ico-search-button\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<button class=\"hamburger hamburger--spin\" type=\"button\">
\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t</span>
\t\t\t</button>
\t\t\t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t\t\t\t<li class=\"addIndex\"><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" class=\"nav-link\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</ul>
\t\t\t<!-- ";
        // line 30
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['selected_item'] = twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "title", [], "any", false, false, true, 30))        ;
        $context['__cms_component_params']['before_url_item_label'] = "<a href=%1\$s
\t\t\t\tclass=nav-link>"        ;
        $context['__cms_component_params']['after_url_item_label'] = "</a>"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("header_menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo " -->
\t\t\t<!--     <ul class=\"nav navbar-nav navbar-right \">
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"";
        // line 33
        echo url("/category");
        echo "\">Все услуги</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">Вакансии</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">Контакты</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">Партнерская программа</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">О нас</a></li>
\t\t</ul> -->

\t\t\t<div class=\"vcard\">
\t\t\t\t<div class=\"indexNone workhours opening-hours\">с 9:00 до 20:00</div>
\t\t\t\t<div class=\"nav-item phones\">
\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" data-target=\"#appl\" class=\"addIndex btn\">Оставить
\t\t\t\t\t\tзаявку</button>
\t\t\t\t\t<a class=\"tel\" href=\"tel:89297453101\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (929)
\t\t\t\t\t\t\t745-31-01</span></a>
\t\t\t\t\t<a class=\"tel\" href=\"tel:88342306055\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (8342)
\t\t\t\t\t\t\t30-60-55</span></a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</nav>
\t
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  123 => 31,  115 => 30,  112 => 29,  101 => 27,  97 => 26,  73 => 5,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- если страница index.htm то к header добавить class index  -->
<header {% if this.page.id=='index' %}class=\"index\" {% endif %}>
\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t<div class=\"container\">
\t\t\t<a class=\"logo\" href=\"{{ url('/') }}\">PROFFSERVICE
\t\t\t\t<span class=\"logo-subtitle pt-1\">сервис проффесиональных услуг</span>
\t\t\t</a>

\t\t\t<form action=\"#\" class=\"navbar-form indexNone\">
\t\t\t\t<div class=\"city\">
\t\t\t\t\t<a class=\"city-link\" href=\"#\"><i class=\"fa fa-dot-circle-o mr-2\"></i><span>Саранск</span></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-search \">
\t\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t\t<input id=\"header-search\" type=\"search\" placeholder=\"Найти услуги\" autocomplete=\"off\"><button
\t\t\t\t\t\t\ttype=\"button\" class=\"search-button ico-search-button\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<button class=\"hamburger hamburger--spin\" type=\"button\">
\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t</span>
\t\t\t</button>
\t\t\t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t{% for item in staticMenu.menuItems %}
\t\t\t\t<li class=\"addIndex\"><a href=\"{{ item.url }}\" class=\"nav-link\">{{ item.title }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<!-- {% component \"header_menu\" selected_item=this.page.title|lower before_url_item_label=\"<a href=%1\$s
\t\t\t\tclass=nav-link>\" after_url_item_label=\"</a>\" %} -->
\t\t\t<!--     <ul class=\"nav navbar-nav navbar-right \">
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"{{ url('/category') }}\">Все услуги</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">Вакансии</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">Контакты</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">Партнерская программа</a></li>
\t\t    <li class=\"addIndex\"><a class=\"nav-link\" href=\"#\">О нас</a></li>
\t\t</ul> -->

\t\t\t<div class=\"vcard\">
\t\t\t\t<div class=\"indexNone workhours opening-hours\">с 9:00 до 20:00</div>
\t\t\t\t<div class=\"nav-item phones\">
\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" data-target=\"#appl\" class=\"addIndex btn\">Оставить
\t\t\t\t\t\tзаявку</button>
\t\t\t\t\t<a class=\"tel\" href=\"tel:89297453101\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (929)
\t\t\t\t\t\t\t745-31-01</span></a>
\t\t\t\t\t<a class=\"tel\" href=\"tel:88342306055\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (8342)
\t\t\t\t\t\t\t30-60-55</span></a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</nav>
\t
</header>", "C:\\laragon\\www\\backap21.01.service/themes/services/partials/header.htm", "");
    }
}
