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

/* D:\GitHub\swb.loc/themes/swb/partials/site/header.htm */
class __TwigTemplate_496e5bcbe0dc075f7541480aeea763982db47a51a9d6e4b0144fe23e7d1f70f2 extends \Twig\Template
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
        $tags = array("set" => 1);
        $filters = array("theme" => 3, "escape" => 29, "raw" => 35);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['theme', 'escape', 'raw'],
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
        $context["mainInfo"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["mainInfoList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        echo "<div class=\"parallax background-tree\" id=\"Paralax__img\">
  <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
</div>
<div class=\"header_mobil\">
  <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb.svg");
        echo "\" alt=\"\" />
  <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/navImg.svg");
        echo "\" alt=\"\" class=\"navImg\" />
</div>
<div class=\"main\">
  <div class=\"main__text\">
    <div class=\"mt__title\">
      <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "quote", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"mt__autor\">
      <p>-";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "quote_author", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"mt__text\">
        ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "description", [], "any", false, false, true, 35), 35, $this->source);
        echo "
    </div>
    <div class=\"mt__button\">
      <div class=\"mtb__wrap\">
        <label>";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "title_btn", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</label>
      </div>
    </div>
    
  </div>

</div>
<img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/main_bg.png");
        echo "\" class=\"mainBG\" alt=\"\" />
<div class=\"mobilBottomLine\"></div>
<div class=\"mobilNav\">
  <ul>
    <li class=\"conditionNav\"><p>условия</p></li>
    <li class=\"partnersNav\"><p>о партнерах</p></li>
    <li class=\"aboutNav\"><p>о проекте</p></li>
    <li class=\"winnerNav\"><p>победители</p></li>
    <li class=\"feedbackNav\"><p class=\"navWhite\">связаться с нами</p></li>
    <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mobilCross.svg");
        echo "\" alt=\"\" class=\"navCross\" />
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  182 => 46,  172 => 39,  165 => 35,  159 => 32,  153 => 29,  145 => 24,  141 => 23,  135 => 20,  131 => 19,  127 => 18,  123 => 17,  119 => 16,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  71 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mainInfo = mainInfoList.records[0] %}
<div class=\"parallax background-tree\" id=\"Paralax__img\">
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
</div>
<div class=\"header_mobil\">
  <img src=\"{{ 'assets/img/swb.svg'|theme }}\" alt=\"\" />
  <img src=\"{{ 'assets/img/navImg.svg'|theme }}\" alt=\"\" class=\"navImg\" />
</div>
<div class=\"main\">
  <div class=\"main__text\">
    <div class=\"mt__title\">
      <p>{{ mainInfo.quote }}</p>
    </div>
    <div class=\"mt__autor\">
      <p>-{{ mainInfo.quote_author }}</p>
    </div>
    <div class=\"mt__text\">
        {{ mainInfo.description|raw }}
    </div>
    <div class=\"mt__button\">
      <div class=\"mtb__wrap\">
        <label>{{mainInfo.title_btn}}</label>
      </div>
    </div>
    
  </div>

</div>
<img src=\"{{ 'assets/img/main_bg.png'|theme }}\" class=\"mainBG\" alt=\"\" />
<div class=\"mobilBottomLine\"></div>
<div class=\"mobilNav\">
  <ul>
    <li class=\"conditionNav\"><p>условия</p></li>
    <li class=\"partnersNav\"><p>о партнерах</p></li>
    <li class=\"aboutNav\"><p>о проекте</p></li>
    <li class=\"winnerNav\"><p>победители</p></li>
    <li class=\"feedbackNav\"><p class=\"navWhite\">связаться с нами</p></li>
    <img src=\"{{ 'assets/img/mobilCross.svg'|theme }}\" alt=\"\" class=\"navCross\" />
  </ul>
</div>", "D:\\GitHub\\swb.loc/themes/swb/partials/site/header.htm", "");
    }
}
