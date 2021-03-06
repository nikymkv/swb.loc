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

/* D:\GitHub\swb.loc/themes/swb/pages/home.htm */
class __TwigTemplate_d30ea4ad0e3fe9198d722d676bee53f1309a133f4cc0d5c5dc2976789147fc96 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 29, "partial" => 88);
        $filters = array("theme" => 6, "escape" => 24, "raw" => 50, "replace" => 50);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
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
        $context["condition"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["conditionList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["mainInfo"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["mainInfoList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        $context["partners"] = twig_get_attribute($this->env, $this->source, ($context["partnersList"] ?? null), "records", [], "any", false, false, true, 3);
        // line 4
        echo "<section class=\"condition\">
<div class=\"parallax background-tree\" id=\"Paralax__img_condition\">
    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title_light.png");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title_light.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
</div>

<div class=\"condition__wrap\">
    <div class=\"cw__title\">
        <p>
            проект проводится в <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "location", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\">instagram</a>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "location", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "\" class=\"instHref\" target=\"_blanc\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_inst_title.svg");
        echo "\" alt=\"\"/></a>
        </p>
    </div>
    <div class=\"cw__content__img\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "gallery", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 30
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" alt=\"\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    <div class=\"cw__content__img__mobil\">
        <div class=\"slider condition_mobil\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "gallery_mobile", [], "any", false, false, true, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 36
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\" alt=\"\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
    </div>
    <div class=\"cw__rule\">
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "rules", [], "any", false, false, true, 41), "path", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><span>ознакомьтесь</span>
            <p>с общими правилами проекта</p>
        </a>
    </div>
    <div class=\"cw__whoInterested\">
        <p class=\"cww__title\">кому это интересно</p>
        <div class=\"cww__block__wrap\">
            <div class=\"cww__block\">
                <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_title1", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</p>
                <span>";
        // line 50
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_desc1", [], "any", false, false, true, 50), 50, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</span>

            </div>
            <div class=\"cww__block cww__blockBlue\">
                <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_title2", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</p>
                <span>";
        // line 55
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_desc2", [], "any", false, false, true, 55), 55, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</span>
            </div>
        </div>
    </div>
</div>

<div class=\"parallax ParalaxConditionBottom background-tree\" id=\"Paralax__img_condition_bottom\">
    <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners__light.png");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners__light.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
</div>
</section>

<section class=\"partners\">
    <div class=\"slider partnersSlider\">
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 81
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "logo_partner", [], "any", false, false, true, 81), "path", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </div>
    <div class=\"partnersSliderArrow\"></div>
</section>

<section class=\"about\">
    ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "</section>

<div class=\"title\">
    <div class=\"title__wrap\">
        <span>призы от</span>
        <p>партнеров</p>
    </div>
</div>

<section class=\"prize\">
    ";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("prize"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 100
        echo "</section>
<section class=\"winner ";
        // line 101
        (((twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "block_winners", [], "any", false, false, true, 101) == 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "block_class", [], "any", false, false, true, 101), "html", null, true))) : (print ("")));
        echo "\">
    <div class=\"title\">
        <div class=\"title__wrap\">
            <span>победители</span>
            <p>розыгрыша</p>
        </div>
    </div>
    ";
        // line 108
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("winners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 109
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 109,  326 => 108,  316 => 101,  313 => 100,  309 => 99,  297 => 89,  293 => 88,  286 => 83,  275 => 81,  271 => 80,  262 => 74,  258 => 73,  254 => 72,  250 => 71,  246 => 70,  242 => 69,  238 => 68,  234 => 67,  230 => 66,  226 => 65,  222 => 64,  218 => 63,  214 => 62,  204 => 55,  200 => 54,  193 => 50,  189 => 49,  178 => 41,  173 => 38,  164 => 36,  160 => 35,  155 => 32,  146 => 30,  142 => 29,  133 => 25,  129 => 24,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  104 => 14,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set condition = conditionList.records[0] %}
{% set mainInfo = mainInfoList.records[0] %}
{% set partners = partnersList.records %}
<section class=\"condition\">
<div class=\"parallax background-tree\" id=\"Paralax__img_condition\">
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title_light.png'|theme }}\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title_light.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/condition_title.png'|theme }}\" alt=\"\" />
</div>

<div class=\"condition__wrap\">
    <div class=\"cw__title\">
        <p>
            проект проводится в <a href=\"{{ condition.location }}\">instagram</a>
            <a href=\"{{ condition.location }}\" class=\"instHref\" target=\"_blanc\"><img src=\"{{ 'assets/img/condition_inst_title.svg'|theme }}\" alt=\"\"/></a>
        </p>
    </div>
    <div class=\"cw__content__img\">
        {% for img in condition.gallery %}
            <img src=\"{{ img.path }}\" alt=\"\" />
        {% endfor %}
    </div>
    <div class=\"cw__content__img__mobil\">
        <div class=\"slider condition_mobil\">
            {% for img in condition.gallery_mobile %}
            <img src=\"{{ img.path }}\" alt=\"\" />
        {% endfor %}
        </div>
    </div>
    <div class=\"cw__rule\">
        <a href=\"{{ condition.rules.path }}\" target=\"_blank\"><span>ознакомьтесь</span>
            <p>с общими правилами проекта</p>
        </a>
    </div>
    <div class=\"cw__whoInterested\">
        <p class=\"cww__title\">кому это интересно</p>
        <div class=\"cww__block__wrap\">
            <div class=\"cww__block\">
                <p>{{ mainInfo.interesting_title1 }}</p>
                <span>{{ mainInfo.interesting_desc1|replace({'<p>':'','</p>':''})|raw }}</span>

            </div>
            <div class=\"cww__block cww__blockBlue\">
                <p>{{ mainInfo.interesting_title2 }}</p>
                <span>{{ mainInfo.interesting_desc2|replace({'<p>':'','</p>':''})|raw }}</span>
            </div>
        </div>
    </div>
</div>

<div class=\"parallax ParalaxConditionBottom background-tree\" id=\"Paralax__img_condition_bottom\">
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners__light.png'|theme }}\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners__light.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
    <img src=\"{{ 'assets/img/partners.png'|theme }}\" alt=\"\" />
</div>
</section>

<section class=\"partners\">
    <div class=\"slider partnersSlider\">
        {% for p in partners %}
            <a href=\"{{ p.url }}\"><img src=\"{{ p.logo_partner.path }}\" alt=\"\" /></a>
        {% endfor %}
    </div>
    <div class=\"partnersSliderArrow\"></div>
</section>

<section class=\"about\">
    {% partial 'about' %}
</section>

<div class=\"title\">
    <div class=\"title__wrap\">
        <span>призы от</span>
        <p>партнеров</p>
    </div>
</div>

<section class=\"prize\">
    {% partial 'prize' %}
</section>
<section class=\"winner {{ (mainInfo.block_winners) == (0) ? mainInfo.block_class : '' }}\">
    <div class=\"title\">
        <div class=\"title__wrap\">
            <span>победители</span>
            <p>розыгрыша</p>
        </div>
    </div>
    {% partial 'winners' %}
</section>", "D:\\GitHub\\swb.loc/themes/swb/pages/home.htm", "");
    }
}
