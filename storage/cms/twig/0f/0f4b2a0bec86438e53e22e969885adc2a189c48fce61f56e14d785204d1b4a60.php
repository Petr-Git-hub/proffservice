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

/* C:\laragon\www\backap21.01.service/themes/services/pages/yr.htm */
class __TwigTemplate_707a892290d500e47339dbeb680a91522c1ef06c2cbf0be29ce13c7be36cedbe extends \Twig\Template
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
        $tags = array("component" => 4);
        $filters = array("theme" => 36);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['theme'],
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
   <div class=\"forbusiness-wrap\">
      <div class=\"forbusiness\">
         <h6 class=\"fs22\">";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "Обслуживание юридических лиц</h6>
         <div class=\"forbusiness-text\">
            <p>Услуги квалифицированных мастеров предоставляются для малого и среднего бизнеса, а также государственных
               и
               бюджетных учреждений: производственных предприятий, офисов, ресторанов, кафе, магазинов, салонов красоты.
               Обслуживаем склады и прочие нежилые помещения.
            </p>
         </div>
         <ul class=\"forbusiness-ul\">
            <li>Все мастера работают по договору подряда, поэтому несут финансовую ответственность за предоставленные
               услуги.
            </li>
            <li>Мастера-профессионалы Саранска работают по ценам нашего сервиса, а не по своим завышенным.</li>
            <li>Стоимость работ согласовывается на этапе диагностики, без согласования работы не начнутся.</li>
            <li>Унас много мастеров, поэтому мы можем решить проблему клиента в течение 2-3 часов или когда ему
               удобно.
            </li>
         </ul>

         <div class=\"forbusiness-ulimg\">
            <div class=\"forbusiness-title\">Мы обслуживаем:</div>
            <ul class=\"service-ul\">
               <li class=\"service-title\">ТЦ</li>
               <li class=\"service-title\">Киоски</li>
               <li class=\"service-title\">Склады</li>
               <li class=\"service-title\">Магазины</li>
               <li class=\"service-title\">Торговые помещения</li>
               <li class=\"service-title\">Офисные помещения</li>
               <li class=\"service-title\">Крупные предприятия</li>
               <li class=\"service-title\">и многое другое...</li>
            </ul>

            <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/c79c99ae579edcf6fb1d2231563861c8.png");
        echo "\" alt=\"\">
         </div>


         <p>Мы готовы сотрудничать с управляющими компаниями, ТСЖ на индивидуальных условиях по проведению
            сантехнических,
            электромонтажных, ремонтных работ в многоквартирных жилых домах.</p>

         <p>Оплата работ осуществляется по безналичному расчету. Перед началом работ мы заключаем договор, составляем
            детальную
            смету на работы и материалы. Предоставляем все необходимые документы для бухгалтерии: счет-фактуры, акты
            выполненных
            работ.</p>
      </div>


      <div class=\"forbusiness\">
         <h6 class=\"fs22\">Что Вы получаете работая с нами:</h6>

         <ul class=\"forbusiness-ul\">
            <li>Экономия денег - вам не нужно держать в штате на окладе электрика, сантехника, плотника.</li>
            <li>Быстрое реагирование на вашу заявку - ваши заказы (проблемы) решаются максимально быстро в приоритетном
               режиме.</li>
            <li>Выгодные условия - для юр. лицу нас есть скидка от стоимости услуг, указанной в прайсе.</li>
            <li>Гарантия на работы - от 1 месяца до 1 года.</li>
            <li>Для работы с вами выделяется отдельный менеджер, качество работы которого регламентируется нашим уставом
               и нормами
               законов.</li>
            <li>Только проверенные, опытные, трезвые мастера.</li>
         </ul>

         <div class=\"forbusiness-text\">
            <p>Иногда случается так, что специалист который у вас работает или которого вы нашли по объявлению, не
               совсем
               соответствует
               вашим требованиям, требуемой работе или необходимым навыкам, за счет чего, решение вашей проблемы
               затягивается на
               длительное время, что напрямую влияет на скорость вашей работы. В любой момент Ваш специалист может не
               выйти
               на работу
               по ряду некоторых причин: заболел; запил; семейные проблемы; сломалась машина; вышел из строя телефон;
               нет
               необходимых
               инструментов и много другое. Наш сервис предлагает заключить Вашей организации договор на абонентское
               обслуживание и
               профилактику вашего оборудования, помещения для устранения всех необходимых погрешностей на раннем этапе
               сложности. Вы
               можете не заключать договор на абонентское обслуживание, если знаете что ваши вызовы специалиста
               единичные,
               наш мастер
               так же приедет к вам для устранения неисправностей. Работая с нами, у Вас не возникнет проблем с поиском
               нужного
               специалиста, Вам останется только позвонить в наш кол-центр и оператор примет вашу заявку для передачи
               нужному
               специалисту.</p>
         </div>
         <div class=\"forbusiness-ulimg\">
            <div class=\"forbusiness-title\">У нас можно заказать профессиональных:</div>
            <ul class=\"service-ul\">
               <li class=\"service-title\">ТЦ</li>
               <li class=\"service-title\">Киоски</li>
               <li class=\"service-title\">Склады</li>
               <li class=\"service-title\">Магазины</li>
               <li class=\"service-title\">Торговые помещения</li>
               <li class=\"service-title\">Офисные помещения</li>
               <li class=\"service-title\">Крупные предприятия</li>
               <li class=\"service-title\">и многое другое...</li>
            </ul>


            <img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/img/c79c99ae579edcf6fb1d2231563861c8.png");
        echo "\" alt=\"\">
         </div>
         <p>Наши специалисты имеют необходимые допуски для работы под напряжением или с газовым оборудованием. Они
            придерживаются
            всех действующих строительных норм и правил безопасности.</p>
      </div>


      <h6 class=\"fs22\">Преимущества компании «<span>PROFF</span>SERVICE»</h6>
      <div>Мы предлагаем своим клиентам:</div>
      <ul>
         <li>Высокое качество сервиса;</li>
         <li>Доступные расценки на все виды услуг;</li>
         <li>Бесплатный выезд мастера на вызов с полным комплектом профессионального инструмента в течение часа;</li>
         <li>Полную безопасность. Специалист приступает к работам только после подписания официального договора. Мы
            сотрудничаем, как
            с частными лицами, так и предприятиями;</li>
         <li>Быстрое решение поставленной задачи. Выполнение сложных работ потребует от 1 рабочего дня. Более легкие
            поломки мы
            устраняем буквально за час;</li>
         <li>Годовую гарантию на оказанные услуги;</li>
         <li>Скидки до 10% для постоянных клиентов.</li>
      </ul>
      <p>Не нужно тратить время и усилия на то, с чем наш мастер справится в считанные часы при минимальных расходах
         с
         вашей
         стороны. Звоните, делайте заказ и оплачивайте услугу любым удобным для вас способом (перечислением средств
         на
         банковскую
         карту или расчетный счет предприятия, либо путем передачи наличных непосредственно сотруднику нашей компании
         в
         руки
         после составления сметы).</p>
      <p>Мы очень тщательно отбираем наших мастеров, по таким критериям как: квалификация, опыт работы, стаж работы,
         дополнительные навыки, вредные привычки и тд., так как считаем что хороший сервис должен обладать высоким
         профессионализмом и логистикой.</p>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\backap21.01.service/themes/services/pages/yr.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 106,  104 => 36,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
   <div class=\"forbusiness-wrap\">
      <div class=\"forbusiness\">
         <h6 class=\"fs22\">{% component 'contenteditor' %}Обслуживание юридических лиц</h6>
         <div class=\"forbusiness-text\">
            <p>Услуги квалифицированных мастеров предоставляются для малого и среднего бизнеса, а также государственных
               и
               бюджетных учреждений: производственных предприятий, офисов, ресторанов, кафе, магазинов, салонов красоты.
               Обслуживаем склады и прочие нежилые помещения.
            </p>
         </div>
         <ul class=\"forbusiness-ul\">
            <li>Все мастера работают по договору подряда, поэтому несут финансовую ответственность за предоставленные
               услуги.
            </li>
            <li>Мастера-профессионалы Саранска работают по ценам нашего сервиса, а не по своим завышенным.</li>
            <li>Стоимость работ согласовывается на этапе диагностики, без согласования работы не начнутся.</li>
            <li>Унас много мастеров, поэтому мы можем решить проблему клиента в течение 2-3 часов или когда ему
               удобно.
            </li>
         </ul>

         <div class=\"forbusiness-ulimg\">
            <div class=\"forbusiness-title\">Мы обслуживаем:</div>
            <ul class=\"service-ul\">
               <li class=\"service-title\">ТЦ</li>
               <li class=\"service-title\">Киоски</li>
               <li class=\"service-title\">Склады</li>
               <li class=\"service-title\">Магазины</li>
               <li class=\"service-title\">Торговые помещения</li>
               <li class=\"service-title\">Офисные помещения</li>
               <li class=\"service-title\">Крупные предприятия</li>
               <li class=\"service-title\">и многое другое...</li>
            </ul>

            <img src=\"{{ 'assets/img/c79c99ae579edcf6fb1d2231563861c8.png' | theme }}\" alt=\"\">
         </div>


         <p>Мы готовы сотрудничать с управляющими компаниями, ТСЖ на индивидуальных условиях по проведению
            сантехнических,
            электромонтажных, ремонтных работ в многоквартирных жилых домах.</p>

         <p>Оплата работ осуществляется по безналичному расчету. Перед началом работ мы заключаем договор, составляем
            детальную
            смету на работы и материалы. Предоставляем все необходимые документы для бухгалтерии: счет-фактуры, акты
            выполненных
            работ.</p>
      </div>


      <div class=\"forbusiness\">
         <h6 class=\"fs22\">Что Вы получаете работая с нами:</h6>

         <ul class=\"forbusiness-ul\">
            <li>Экономия денег - вам не нужно держать в штате на окладе электрика, сантехника, плотника.</li>
            <li>Быстрое реагирование на вашу заявку - ваши заказы (проблемы) решаются максимально быстро в приоритетном
               режиме.</li>
            <li>Выгодные условия - для юр. лицу нас есть скидка от стоимости услуг, указанной в прайсе.</li>
            <li>Гарантия на работы - от 1 месяца до 1 года.</li>
            <li>Для работы с вами выделяется отдельный менеджер, качество работы которого регламентируется нашим уставом
               и нормами
               законов.</li>
            <li>Только проверенные, опытные, трезвые мастера.</li>
         </ul>

         <div class=\"forbusiness-text\">
            <p>Иногда случается так, что специалист который у вас работает или которого вы нашли по объявлению, не
               совсем
               соответствует
               вашим требованиям, требуемой работе или необходимым навыкам, за счет чего, решение вашей проблемы
               затягивается на
               длительное время, что напрямую влияет на скорость вашей работы. В любой момент Ваш специалист может не
               выйти
               на работу
               по ряду некоторых причин: заболел; запил; семейные проблемы; сломалась машина; вышел из строя телефон;
               нет
               необходимых
               инструментов и много другое. Наш сервис предлагает заключить Вашей организации договор на абонентское
               обслуживание и
               профилактику вашего оборудования, помещения для устранения всех необходимых погрешностей на раннем этапе
               сложности. Вы
               можете не заключать договор на абонентское обслуживание, если знаете что ваши вызовы специалиста
               единичные,
               наш мастер
               так же приедет к вам для устранения неисправностей. Работая с нами, у Вас не возникнет проблем с поиском
               нужного
               специалиста, Вам останется только позвонить в наш кол-центр и оператор примет вашу заявку для передачи
               нужному
               специалисту.</p>
         </div>
         <div class=\"forbusiness-ulimg\">
            <div class=\"forbusiness-title\">У нас можно заказать профессиональных:</div>
            <ul class=\"service-ul\">
               <li class=\"service-title\">ТЦ</li>
               <li class=\"service-title\">Киоски</li>
               <li class=\"service-title\">Склады</li>
               <li class=\"service-title\">Магазины</li>
               <li class=\"service-title\">Торговые помещения</li>
               <li class=\"service-title\">Офисные помещения</li>
               <li class=\"service-title\">Крупные предприятия</li>
               <li class=\"service-title\">и многое другое...</li>
            </ul>


            <img src=\"{{ '/assets/img/c79c99ae579edcf6fb1d2231563861c8.png' | theme }}\" alt=\"\">
         </div>
         <p>Наши специалисты имеют необходимые допуски для работы под напряжением или с газовым оборудованием. Они
            придерживаются
            всех действующих строительных норм и правил безопасности.</p>
      </div>


      <h6 class=\"fs22\">Преимущества компании «<span>PROFF</span>SERVICE»</h6>
      <div>Мы предлагаем своим клиентам:</div>
      <ul>
         <li>Высокое качество сервиса;</li>
         <li>Доступные расценки на все виды услуг;</li>
         <li>Бесплатный выезд мастера на вызов с полным комплектом профессионального инструмента в течение часа;</li>
         <li>Полную безопасность. Специалист приступает к работам только после подписания официального договора. Мы
            сотрудничаем, как
            с частными лицами, так и предприятиями;</li>
         <li>Быстрое решение поставленной задачи. Выполнение сложных работ потребует от 1 рабочего дня. Более легкие
            поломки мы
            устраняем буквально за час;</li>
         <li>Годовую гарантию на оказанные услуги;</li>
         <li>Скидки до 10% для постоянных клиентов.</li>
      </ul>
      <p>Не нужно тратить время и усилия на то, с чем наш мастер справится в считанные часы при минимальных расходах
         с
         вашей
         стороны. Звоните, делайте заказ и оплачивайте услугу любым удобным для вас способом (перечислением средств
         на
         банковскую
         карту или расчетный счет предприятия, либо путем передачи наличных непосредственно сотруднику нашей компании
         в
         руки
         после составления сметы).</p>
      <p>Мы очень тщательно отбираем наших мастеров, по таким критериям как: квалификация, опыт работы, стаж работы,
         дополнительные навыки, вредные привычки и тд., так как считаем что хороший сервис должен обладать высоким
         профессионализмом и логистикой.</p>
   </div>
</div>", "C:\\laragon\\www\\backap21.01.service/themes/services/pages/yr.htm", "");
    }
}
