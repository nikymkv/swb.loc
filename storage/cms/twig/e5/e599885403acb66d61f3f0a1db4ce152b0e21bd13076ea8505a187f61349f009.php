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
        $tags = array("set" => 1, "component" => 5, "if" => 7, "for" => 39, "partial" => 100);
        $filters = array("theme" => 16, "raw" => 34, "replace" => 34, "escape" => 35);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'if', 'for', 'partial'],
                ['theme', 'raw', 'replace', 'escape'],
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
        echo "
<section class=\"condition\">";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "
";
        // line 7
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 8
            echo "    ";
            $context["gallery"] = twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "gallery_ru", [], "any", false, false, true, 8);
            // line 9
            echo "    ";
            $context["gallery_mobile"] = twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "gallery_mobile_ru", [], "any", false, false, true, 9);
        } elseif ((        // line 10
($context["activeLocale"] ?? null) == "en")) {
            // line 11
            echo "    ";
            $context["gallery"] = twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "gallery_en", [], "any", false, false, true, 11);
            // line 12
            echo "    ";
            $context["gallery_mobile"] = twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "gallery_mobile_en", [], "any", false, false, true, 12);
        }
        // line 14
        echo "
<div class=\"parallax background-tree\" id=\"Paralax__img_condition\">
    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title_light.png");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title_light.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_title.png");
        echo "\" alt=\"\" />
</div>

<div class=\"condition__wrap\">
    <div class=\"cw__title\">
        <p>
            ";
        // line 34
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "location", [], "any", false, false, true, 34), 34, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "location", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" class=\"instHref\" target=\"_blanc\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/condition_inst_title.svg");
        echo "\" alt=\"\"/></a>
        </p>
    </div>
    <div class=\"cw__content__img\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 40
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" alt=\"\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
    <div class=\"cw__content__img__mobil\">
        <div class=\"slider condition_mobil\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery_mobile"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 46
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" alt=\"\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>
    <div class=\"cw__rule\">
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "rules_ru", [], "any", false, false, true, 51), "path", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["condition"] ?? null), "title_document", [], "any", false, false, true, 51), 51, $this->source);
        echo "</a>
    </div>
    <div class=\"cw__whoInterested\">
        <p class=\"cww__title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "main_title_interest", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "</p>
        <div class=\"cww__block__wrap\">
            <div class=\"cww__block\">
                <p>";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_title1", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</p>
                <span>";
        // line 58
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_desc1", [], "any", false, false, true, 58), 58, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</span>

            </div>
            <div class=\"cww__block cww__blockBlue\">
                <p>";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_title2", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</p>
                <span>";
        // line 63
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "interesting_desc2", [], "any", false, false, true, 63), 63, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</span>
            </div>
        </div>
    </div>
</div>

<div class=\"parallax ParalaxConditionBottom background-tree\" id=\"Paralax__img_condition_bottom\">
    <img src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners__light.png");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
    <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners__light.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
    <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partners.png");
        echo "\" alt=\"\" />
</div>
</section>

<section class=\"partners\">
    <div class=\"slider partnersSlider\">
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 89
            echo "            ";
            if ((($context["activeLocale"] ?? null) == "ru")) {
                // line 90
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "logo_partner_ru", [], "any", false, false, true, 90), "path", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "\" alt=\"\" /></a>
            ";
            } elseif ((            // line 91
($context["activeLocale"] ?? null) == "en")) {
                // line 92
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "logo_partner_en", [], "any", false, false, true, 92), "path", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\" alt=\"\" /></a>
            ";
            }
            // line 94
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </div>
    <div class=\"partnersSliderArrow\"></div>
</section>

<section class=\"about\">
    ";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "</section>

<div class=\"title\">
    <div class=\"title__wrap\">
        <span>";
        // line 105
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "pr_title_1", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "</span>
        <p>";
        // line 106
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "pr_title_2", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "</p>
    </div>
</div>

<section class=\"prize\">
    ";
        // line 111
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("prize"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 112
        echo "</section>
<section class=\"winner ";
        // line 113
        (((twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "block_winners", [], "any", false, false, true, 113) == 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "block_class", [], "any", false, false, true, 113), "html", null, true))) : (print ("")));
        echo "\">
    <div class=\"title\">
        <div class=\"title__wrap\">
            <span>";
        // line 116
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "w_title_1", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "</span>
            <p>";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "w_title_2", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "</p>
        </div>
    </div>
    ";
        // line 120
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("winners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 121
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
        return array (  390 => 121,  386 => 120,  380 => 117,  376 => 116,  370 => 113,  367 => 112,  363 => 111,  355 => 106,  351 => 105,  345 => 101,  341 => 100,  334 => 95,  328 => 94,  320 => 92,  318 => 91,  311 => 90,  308 => 89,  304 => 88,  295 => 82,  291 => 81,  287 => 80,  283 => 79,  279 => 78,  275 => 77,  271 => 76,  267 => 75,  263 => 74,  259 => 73,  255 => 72,  251 => 71,  247 => 70,  237 => 63,  233 => 62,  226 => 58,  222 => 57,  216 => 54,  208 => 51,  203 => 48,  194 => 46,  190 => 45,  185 => 42,  176 => 40,  172 => 39,  163 => 35,  159 => 34,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 14,  94 => 12,  91 => 11,  89 => 10,  86 => 9,  83 => 8,  81 => 7,  78 => 6,  71 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set condition = conditionList.records[0] %}
{% set mainInfo = mainInfoList.records[0] %}
{% set partners = partnersList.records %}

<section class=\"condition\">{% component 'localePicker' %}{% component 'localePicker2' %}

{% if activeLocale == 'ru' %}
    {% set gallery = condition.gallery_ru %}
    {% set gallery_mobile = condition.gallery_mobile_ru %}
{% elseif activeLocale == 'en' %}
    {% set gallery = condition.gallery_en %}
    {% set gallery_mobile = condition.gallery_mobile_en %}
{% endif %}

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
            {{ condition.location|replace({'<p>':'','</p>':''})|raw }}
            <a href=\"{{ condition.location }}\" class=\"instHref\" target=\"_blanc\"><img src=\"{{ 'assets/img/condition_inst_title.svg'|theme }}\" alt=\"\"/></a>
        </p>
    </div>
    <div class=\"cw__content__img\">
        {% for img in gallery %}
            <img src=\"{{ img.path }}\" alt=\"\" />
        {% endfor %}
    </div>
    <div class=\"cw__content__img__mobil\">
        <div class=\"slider condition_mobil\">
            {% for img in gallery_mobile %}
                <img src=\"{{ img.path }}\" alt=\"\" />
            {% endfor %}
        </div>
    </div>
    <div class=\"cw__rule\">
        <a href=\"{{ condition.rules_ru.path }}\" target=\"_blank\">{{ condition.title_document|raw }}</a>
    </div>
    <div class=\"cw__whoInterested\">
        <p class=\"cww__title\">{{ mainInfo.main_title_interest }}</p>
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
            {% if activeLocale == 'ru' %}
                <a href=\"{{ p.url }}\"><img src=\"{{ p.logo_partner_ru.path }}\" alt=\"\" /></a>
            {% elseif activeLocale == 'en' %}
                <a href=\"{{ p.url }}\"><img src=\"{{ p.logo_partner_en.path }}\" alt=\"\" /></a>
            {% endif %}
        {% endfor %}
    </div>
    <div class=\"partnersSliderArrow\"></div>
</section>

<section class=\"about\">
    {% partial 'about' %}
</section>

<div class=\"title\">
    <div class=\"title__wrap\">
        <span>{{ mainInfo.pr_title_1 }}</span>
        <p>{{ mainInfo.pr_title_2 }}</p>
    </div>
</div>

<section class=\"prize\">
    {% partial 'prize' %}
</section>
<section class=\"winner {{ (mainInfo.block_winners) == (0) ? mainInfo.block_class : '' }}\">
    <div class=\"title\">
        <div class=\"title__wrap\">
            <span>{{ mainInfo.w_title_1 }}</span>
            <p>{{ mainInfo.w_title_2 }}</p>
        </div>
    </div>
    {% partial 'winners' %}
</section>", "D:\\GitHub\\swb.loc/themes/swb/pages/home.htm", "");
    }
}
