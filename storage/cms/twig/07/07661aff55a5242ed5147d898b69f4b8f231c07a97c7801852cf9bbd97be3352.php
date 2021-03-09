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

/* D:\GitHub\swb.loc/themes/swb/partials/prize.htm */
class __TwigTemplate_046270202c175b658273f3c43412fdff0dd209dd5bf66836d50cc58978966584 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 5, "if" => 6);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $context["gifts"] = twig_get_attribute($this->env, $this->source, ($context["giftsList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"prize__wrap\">
    <div class=\"slider partnersPrizeSlider\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gifts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gift"]) {
            // line 6
            echo "            ";
            if ((($context["activeLocale"] ?? null) == "ru")) {
                // line 7
                echo "                <div><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gift"], "logo_gift_ru", [], "any", false, false, true, 7), "path", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\" alt=\"\" /></div>
            ";
            } elseif ((            // line 8
($context["activeLocale"] ?? null) == "en")) {
                // line 9
                echo "                <div><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gift"], "logo_gift_en", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" alt=\"\" /></div>
            ";
            }
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
    <div class=\"partnersSliderArrow\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/partials/prize.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  89 => 11,  83 => 9,  81 => 8,  76 => 7,  73 => 6,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set gifts = giftsList.records %}

<div class=\"prize__wrap\">
    <div class=\"slider partnersPrizeSlider\">
        {% for gift in gifts %}
            {% if activeLocale == 'ru' %}
                <div><img src=\"{{ gift.logo_gift_ru.path }}\" alt=\"\" /></div>
            {% elseif activeLocale == 'en' %}
                <div><img src=\"{{ gift.logo_gift_en.path }}\" alt=\"\" /></div>
            {% endif %}
        {% endfor %}
    </div>
    <div class=\"partnersSliderArrow\"></div>
</div>", "D:\\GitHub\\swb.loc/themes/swb/partials/prize.htm", "");
    }
}
