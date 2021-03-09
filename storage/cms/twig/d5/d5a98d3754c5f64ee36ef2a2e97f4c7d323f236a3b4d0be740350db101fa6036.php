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

/* D:\GitHub\swb.loc/themes/swb/partials/about.htm */
class __TwigTemplate_e65e9d56755aae0e1dc70f98c722f7a9d3ad6edadda274f14c9027e6206ccdab extends \Twig\Template
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
        $filters = array("theme" => 3, "escape" => 18, "raw" => 34, "replace" => 34);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['theme', 'escape', 'raw', 'replace'],
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
        $context["about"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["aboutList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        echo "<div class=\"parallax background-tree\" id=\"Paralax__img_about\">
    <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/aboutLight.png");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/aboutLight.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/abouts.png");
        echo "\" alt=\"\" />
</div>
<div class=\"about__draw\">
    <div class=\"ad__wrap\">
        <div class=\"adw__block abw__draw\">
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "title_1", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</p>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "title_2", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</span>
        </div>
        <div class=\"adw__count\">
            <div class=\"adw__block adw__counts\">
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "left_digit", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</p>
                <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "label_left", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "</span>
            </div>
            <span class=\"adw__count__middle\">";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "between", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "</span>
            <div class=\"adw__block adw__month\">
                <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "right_digit", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</p>
                <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "label_right", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"adw__block adw__live\">
            <p>";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "location_1", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</p>
            <span>";
        // line 34
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "location_2", [], "any", false, false, true, 34), 34, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</span>
        </div>
    </div>
    <div class=\"ad__draw__right\">
        <div class=\"adr_wrap\">
            <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "duration", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
            <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["about"] ?? null), "text_duration", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 40,  163 => 39,  155 => 34,  151 => 33,  144 => 29,  140 => 28,  135 => 26,  130 => 24,  126 => 23,  119 => 19,  115 => 18,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  71 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set about = aboutList.records[0] %}
<div class=\"parallax background-tree\" id=\"Paralax__img_about\">
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/aboutLight.png'|theme }}\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/aboutLight.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/abouts.png'|theme }}\" alt=\"\" />
</div>
<div class=\"about__draw\">
    <div class=\"ad__wrap\">
        <div class=\"adw__block abw__draw\">
            <p>{{ about.title_1 }}</p>
            <span>{{ about.title_2 }}</span>
        </div>
        <div class=\"adw__count\">
            <div class=\"adw__block adw__counts\">
                <p>{{ about.left_digit }}</p>
                <span>{{ about.label_left }}</span>
            </div>
            <span class=\"adw__count__middle\">{{ about.between }}</span>
            <div class=\"adw__block adw__month\">
                <p>{{ about.right_digit }}</p>
                <span>{{ about.label_right }}</span>
            </div>
        </div>
        <div class=\"adw__block adw__live\">
            <p>{{ about.location_1 }}</p>
            <span>{{ about.location_2|replace({'<p>':'','</p>':''})|raw }}</span>
        </div>
    </div>
    <div class=\"ad__draw__right\">
        <div class=\"adr_wrap\">
            <p>{{ about.duration }}</p>
            <span>{{ about.text_duration }}</span>
        </div>
    </div>
</div>", "D:\\GitHub\\swb.loc/themes/swb/partials/about.htm", "");
    }
}
