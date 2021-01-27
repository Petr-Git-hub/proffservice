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

/* C:\laragon\www\backap21.01.service/themes/services/pages/faq.htm */
class __TwigTemplate_61706ddad33b4d698a1c9aa730173ee855de790aa03985897ccf2e1d96c2618f extends \Twig\Template
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
        echo "<div class=\"container\">
   <div class=\"row\">
      <div class=\"col-sm-12\">
         <div class=\"faq-title\">
            <h1 class=\"fs62\">Вопросы и ответы</h1>
         </div>

         <div class=\"accordion\" id=\"faq\">
            <div class=\"acrdCard\">
               <div class=\"acrdCard-header\" id=\"headfaq1\">
                  <div class=\"collapsed question\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"false\"
                     aria-controls=\"faq1\">
                     <span class=\"question-icon\">
                        <i class=\"fa fa-plus\"></i>
                        <i class=\"fa fa-minus\"></i>
                     </span>
                     <h6>ОСНАЩЕНЫ ЛИ ВАШИ МАСТЕРА ПРОФЕССИОНАЛЬНЫМ ИНСТРУМЕНТОМ?</h6>
                  </div>
               </div>
               <div id=\"faq1\" class=\"collapse\" aria-labelledby=\"headfaq1\" data-parent=\"#faq\">
                  <div class=\"acrdCard-body\">
                     Естественно, мы заботимся о наличии у специалистов профессионального инструмента и оборудования,
                     позволяющего решить
                     задачу любой сложности. Поэтому наши сотрудники выезжают на объект полностью укомплектованные
                     инструментом.
                  </div>
               </div>
            </div>
            <div class=\"acrdCard\">
               <div class=\"acrdCard-header\" id=\"headfaq2\">
                  <div class=\"collapsed question\" data-toggle=\"collapse\" data-target=\"#faq2\" aria-expanded=\"false\"
                     aria-controls=\"faq2\">
                     <span class=\"question-icon\">
                        <i class=\"fa fa-plus\"></i>
                        <i class=\"fa fa-minus\"></i>
                     </span>
                     <h6>ОСНАЩЕНЫ ЛИ ВАШИ МАСТЕРА ПРОФЕССИОНАЛЬНЫМ ИНСТРУМЕНТОМ?</h6>
                  </div>
               </div>
               <div id=\"faq2\" class=\"collapse\" aria-labelledby=\"headfaq2\" data-parent=\"#faq\">
                  <div class=\"acrdCard-body\">
                     Естественно, мы заботимся о наличии у специалистов профессионального инструмента и оборудования,
                     позволяющего решить
                     задачу любой сложности. Поэтому наши сотрудники выезжают на объект полностью укомплектованные
                     инструментом.
                  </div>
               </div>
            </div>
            <div class=\"acrdCard\">
               <div class=\"acrdCard-header\" id=\"headfaq3\">
                  <div class=\"collapsed question\" data-toggle=\"collapse\" data-target=\"#faq3\" aria-expanded=\"false\"
                     aria-controls=\"faq3\">
                     <span class=\"question-icon\">
                        <i class=\"fa fa-plus\"></i>
                        <i class=\"fa fa-minus\"></i>
                     </span>
                     <h6>ОСНАЩЕНЫ ЛИ ВАШИ МАСТЕРА ПРОФЕССИОНАЛЬНЫМ ИНСТРУМЕНТОМ?</h6>
                  </div>
               </div>
               <div id=\"faq3\" class=\"collapse\" aria-labelledby=\"headfaq3\" data-parent=\"#faq\">
                  <div class=\"acrdCard-body\">
                     Естественно, мы заботимся о наличии у специалистов профессионального инструмента и оборудования,
                     позволяющего решить
                     задачу любой сложности. Поэтому наши сотрудники выезжают на объект полностью укомплектованные
                     инструментом.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/pages/faq.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
   <div class=\"row\">
      <div class=\"col-sm-12\">
         <div class=\"faq-title\">
            <h1 class=\"fs62\">Вопросы и ответы</h1>
         </div>

         <div class=\"accordion\" id=\"faq\">
            <div class=\"acrdCard\">
               <div class=\"acrdCard-header\" id=\"headfaq1\">
                  <div class=\"collapsed question\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"false\"
                     aria-controls=\"faq1\">
                     <span class=\"question-icon\">
                        <i class=\"fa fa-plus\"></i>
                        <i class=\"fa fa-minus\"></i>
                     </span>
                     <h6>ОСНАЩЕНЫ ЛИ ВАШИ МАСТЕРА ПРОФЕССИОНАЛЬНЫМ ИНСТРУМЕНТОМ?</h6>
                  </div>
               </div>
               <div id=\"faq1\" class=\"collapse\" aria-labelledby=\"headfaq1\" data-parent=\"#faq\">
                  <div class=\"acrdCard-body\">
                     Естественно, мы заботимся о наличии у специалистов профессионального инструмента и оборудования,
                     позволяющего решить
                     задачу любой сложности. Поэтому наши сотрудники выезжают на объект полностью укомплектованные
                     инструментом.
                  </div>
               </div>
            </div>
            <div class=\"acrdCard\">
               <div class=\"acrdCard-header\" id=\"headfaq2\">
                  <div class=\"collapsed question\" data-toggle=\"collapse\" data-target=\"#faq2\" aria-expanded=\"false\"
                     aria-controls=\"faq2\">
                     <span class=\"question-icon\">
                        <i class=\"fa fa-plus\"></i>
                        <i class=\"fa fa-minus\"></i>
                     </span>
                     <h6>ОСНАЩЕНЫ ЛИ ВАШИ МАСТЕРА ПРОФЕССИОНАЛЬНЫМ ИНСТРУМЕНТОМ?</h6>
                  </div>
               </div>
               <div id=\"faq2\" class=\"collapse\" aria-labelledby=\"headfaq2\" data-parent=\"#faq\">
                  <div class=\"acrdCard-body\">
                     Естественно, мы заботимся о наличии у специалистов профессионального инструмента и оборудования,
                     позволяющего решить
                     задачу любой сложности. Поэтому наши сотрудники выезжают на объект полностью укомплектованные
                     инструментом.
                  </div>
               </div>
            </div>
            <div class=\"acrdCard\">
               <div class=\"acrdCard-header\" id=\"headfaq3\">
                  <div class=\"collapsed question\" data-toggle=\"collapse\" data-target=\"#faq3\" aria-expanded=\"false\"
                     aria-controls=\"faq3\">
                     <span class=\"question-icon\">
                        <i class=\"fa fa-plus\"></i>
                        <i class=\"fa fa-minus\"></i>
                     </span>
                     <h6>ОСНАЩЕНЫ ЛИ ВАШИ МАСТЕРА ПРОФЕССИОНАЛЬНЫМ ИНСТРУМЕНТОМ?</h6>
                  </div>
               </div>
               <div id=\"faq3\" class=\"collapse\" aria-labelledby=\"headfaq3\" data-parent=\"#faq\">
                  <div class=\"acrdCard-body\">
                     Естественно, мы заботимся о наличии у специалистов профессионального инструмента и оборудования,
                     позволяющего решить
                     задачу любой сложности. Поэтому наши сотрудники выезжают на объект полностью укомплектованные
                     инструментом.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>", "C:\\laragon\\www\\backap21.01.service/themes/services/pages/faq.htm", "");
    }
}
