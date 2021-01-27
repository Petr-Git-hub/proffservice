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

/* C:\laragon\www\backap21.01.service/themes/services/partials/modal.htm */
class __TwigTemplate_cc9d277c3eab65f3709f2c23f518eda3e1797b06479de5a8ade6be2e967b961f extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"modal fade nocolors in\" id=\"appl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
   aria-hidden=\"true\">
   <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: 400px; width: 100%;\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"modal-close fa fa-times\" data-dismiss=\"modal\"></button>
            <h6>ОСТАВЬЕТЕ ЗАЯВКУ И МЫ ВАМ ПЕРЕЗВОНИМ В ТЕЧЕНИИ 15 МИН</h6>
         </div>
         <div class=\"modal-body\">
            <form class=\"form text-top\">
               <input id=\"name\" type=\"text\" class=\"form-control text\" placeholder=\"Имя\" required>
               <input id=\"emain\" type=\"text\" class=\"form-control text\" placeholder=\"Телефон\" required>
               <div class=\"button-wrapper\">
                  <button class=\"btn form-btn\" type=\"submit\">Отправить заявку</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade nocolors in\" id=\"support\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
   aria-hidden=\"true\">
   <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: 400px; width: 100%;\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"modal-close fa fa-times\" data-dismiss=\"modal\"></button>
            <h5>Служба поддержки</h5>
         </div>
         <div class=\"modal-body\">
            <form class=\"form text-top\">
               <input id=\"name\" type=\"text\" class=\"form-control text\" placeholder=\"Имя *\">
               <input id=\"emain\" type=\"text\" class=\"form-control text\" placeholder=\"Телефон *\">
               <select class=\"form-control\">
                  <option>Причина обращения *</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
               <textarea class=\"form-control\" placeholder=\"Опишите причину обращения *\"></textarea>
               <div class=\"button-wrapper\">
                  <button class=\"btn form-btn\" type=\"submit\">Отправить сообщение!</button>
                  <a href=\"#\" class=\"link\">Политика конфиденциальности</a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/partials/modal.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade nocolors in\" id=\"appl\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
   aria-hidden=\"true\">
   <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: 400px; width: 100%;\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"modal-close fa fa-times\" data-dismiss=\"modal\"></button>
            <h6>ОСТАВЬЕТЕ ЗАЯВКУ И МЫ ВАМ ПЕРЕЗВОНИМ В ТЕЧЕНИИ 15 МИН</h6>
         </div>
         <div class=\"modal-body\">
            <form class=\"form text-top\">
               <input id=\"name\" type=\"text\" class=\"form-control text\" placeholder=\"Имя\" required>
               <input id=\"emain\" type=\"text\" class=\"form-control text\" placeholder=\"Телефон\" required>
               <div class=\"button-wrapper\">
                  <button class=\"btn form-btn\" type=\"submit\">Отправить заявку</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<div class=\"modal fade nocolors in\" id=\"support\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
   aria-hidden=\"true\">
   <div class=\"modal-dialog modal-dialog-centered\" style=\"max-width: 400px; width: 100%;\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"modal-close fa fa-times\" data-dismiss=\"modal\"></button>
            <h5>Служба поддержки</h5>
         </div>
         <div class=\"modal-body\">
            <form class=\"form text-top\">
               <input id=\"name\" type=\"text\" class=\"form-control text\" placeholder=\"Имя *\">
               <input id=\"emain\" type=\"text\" class=\"form-control text\" placeholder=\"Телефон *\">
               <select class=\"form-control\">
                  <option>Причина обращения *</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
               <textarea class=\"form-control\" placeholder=\"Опишите причину обращения *\"></textarea>
               <div class=\"button-wrapper\">
                  <button class=\"btn form-btn\" type=\"submit\">Отправить сообщение!</button>
                  <a href=\"#\" class=\"link\">Политика конфиденциальности</a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>", "C:\\laragon\\www\\backap21.01.service/themes/services/partials/modal.htm", "");
    }
}
