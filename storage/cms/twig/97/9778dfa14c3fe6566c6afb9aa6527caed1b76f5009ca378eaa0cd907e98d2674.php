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

/* C:\laragon\www\backap21.01.service/themes/services/partials/footer.htm */
class __TwigTemplate_2fa9cac7217fd62cec410ae1779a8c3469ab0cd778c2a1eaf6bb286d351d2bbc extends \Twig\Template
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
        $tags = array("for" => 10);
        $filters = array("escape" => 11);
        $functions = array("url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
        echo "<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-12 text-center\">
\t\t\t\t<a class=\"logo\" href=\"";
        // line 5
        echo url("/");
        echo "\">PROFFSERVICE<span class=\"logo-subtitle mt-1\">сервис проффесиональных услуг</span></a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-4 col-sm-4\">
\t\t\t\t<div class=\"footer-menu-title\">Компания</div>
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenuLeft"] ?? null), "menuItems", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t\t<!-- <li><a href=\"#\">О нас</a></li>
\t\t\t\t\t<li><a href=\"#\">Вакансии</a></li>
\t\t\t\t\t<li><a href=\"#\">Все услуги</a></li>
\t\t\t\t\t<li><a href=\"#\">Наши контакты</a></li> -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-4 col-sm-4\">
\t\t\t\t<div class=\"footer-menu-title\">Магазинам</div>
\t\t\t<ul class=\"footer-menu\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenuCenter"] ?? null), "menuItems", [], "any", false, false, true, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t<!-- <li><a href=\"#\">Гарантии</a></li>
\t\t\t\t\t<li><a href=\"#\">Вопросы и ответы</a></li>
\t\t\t\t\t<li><a href=\"#\">Публичная оферта</a></li>
\t\t\t\t\t<li><a href=\"#\">Конфиденциальность</a></li> -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-4 col-sm-4\">
\t\t\t\t<div class=\"footer-menu-title\">Для бизнеса</div>
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenuRight"] ?? null), "menuItems", [], "any", false, false, true, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t<!-- <li><a href=\"#\">Магазинам</a></li> -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-12 col-sm-12 flex-mob\">
\t\t\t\t<button class=\"footer-support-btn\" data-toggle=\"modal\" data-target=\"#support\">Служба поддержки</button>
\t\t\t\t<div class=\"nav-item phones\">
\t\t\t\t\t<a class=\"tel\" href=\"tel:89297453101\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (929) 745-31-01</span></a>
\t\t\t\t\t<a class=\"tel\" href=\"tel:88342306055\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (8342)
\t\t\t\t\t\t\t30-60-55</span></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"footer-social\">\t\t\t\t\t
\t\t\t\t\t<li><a class=\"ic vk\" href=\"#\"><i class=\"fa fa-vk\"></i></a></li>
\t\t\t\t\t<li><a class=\"ic whatsapp\" href=\"#\"><i class=\"fa fa-whatsapp\"></i></a></li>
\t\t\t\t\t<li><a class=\"ic telegram\" href=\"#\"><i class=\"fa fa-paper-plane\"></i></i></a></li>
\t\t\t\t\t<li><a class=\"ic instagram\" href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-copyright text-center\">&copy; 2020 &laquo;PROFFSERVICE&raquo;. Все права защищены.</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  132 => 35,  128 => 34,  117 => 25,  106 => 23,  102 => 22,  91 => 13,  80 => 11,  76 => 10,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-12 text-center\">
\t\t\t\t<a class=\"logo\" href=\"{{ url('/') }}\">PROFFSERVICE<span class=\"logo-subtitle mt-1\">сервис проффесиональных услуг</span></a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-4 col-sm-4\">
\t\t\t\t<div class=\"footer-menu-title\">Компания</div>
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t{% for item in footerMenuLeft.menuItems %}
\t\t\t\t\t<li><a href=\"{{ item.url }}\">{{ item.title }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<!-- <li><a href=\"#\">О нас</a></li>
\t\t\t\t\t<li><a href=\"#\">Вакансии</a></li>
\t\t\t\t\t<li><a href=\"#\">Все услуги</a></li>
\t\t\t\t\t<li><a href=\"#\">Наши контакты</a></li> -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-4 col-sm-4\">
\t\t\t\t<div class=\"footer-menu-title\">Магазинам</div>
\t\t\t<ul class=\"footer-menu\">
\t\t\t\t{% for item in footerMenuCenter.menuItems %}
\t\t\t\t<li><a href=\"{{ item.url }}\">{{ item.title }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t\t\t<!-- <li><a href=\"#\">Гарантии</a></li>
\t\t\t\t\t<li><a href=\"#\">Вопросы и ответы</a></li>
\t\t\t\t\t<li><a href=\"#\">Публичная оферта</a></li>
\t\t\t\t\t<li><a href=\"#\">Конфиденциальность</a></li> -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-4 col-sm-4\">
\t\t\t\t<div class=\"footer-menu-title\">Для бизнеса</div>
\t\t\t\t<ul class=\"footer-menu\">
\t\t\t\t\t{% for item in footerMenuRight.menuItems %}
\t\t\t\t\t<li><a href=\"{{ item.url }}\">{{ item.title }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<!-- <li><a href=\"#\">Магазинам</a></li> -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-12 col-sm-12 flex-mob\">
\t\t\t\t<button class=\"footer-support-btn\" data-toggle=\"modal\" data-target=\"#support\">Служба поддержки</button>
\t\t\t\t<div class=\"nav-item phones\">
\t\t\t\t\t<a class=\"tel\" href=\"tel:89297453101\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (929) 745-31-01</span></a>
\t\t\t\t\t<a class=\"tel\" href=\"tel:88342306055\"><i class=\"fa fa-phone-square mr-2\"></i><span>8 (8342)
\t\t\t\t\t\t\t30-60-55</span></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"footer-social\">\t\t\t\t\t
\t\t\t\t\t<li><a class=\"ic vk\" href=\"#\"><i class=\"fa fa-vk\"></i></a></li>
\t\t\t\t\t<li><a class=\"ic whatsapp\" href=\"#\"><i class=\"fa fa-whatsapp\"></i></a></li>
\t\t\t\t\t<li><a class=\"ic telegram\" href=\"#\"><i class=\"fa fa-paper-plane\"></i></i></a></li>
\t\t\t\t\t<li><a class=\"ic instagram\" href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-copyright text-center\">&copy; 2020 &laquo;PROFFSERVICE&raquo;. Все права защищены.</div>
\t</div>
</footer>", "C:\\laragon\\www\\backap21.01.service/themes/services/partials/footer.htm", "");
    }
}
