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

/* D:\GitHub\swb.loc/themes/swb/partials/winners.htm */
class __TwigTemplate_a7382ce5df829c55ed4cdc88e5d4730e5831a5e165ca35c2d829f7e15f99a65f extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 4);
        $filters = array("escape" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
        $context["winners"] = twig_get_attribute($this->env, $this->source, ($context["winnersList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<div class=\"winner__wrap\">
    <div class=\"slier winnerSlider\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["winners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 5
            echo "        <div>
            <div class=\"winnerBlock\">
                <div class=\"winnerBlock__wrap\">
                    <div class=\"wbw_inst\"><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["w"], "url_winner", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["w"], "nickname", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</a></div>
                    <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["w"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["w"], "by_url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["w"], "by_give", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
    <div class=\"partnersSliderArrow\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/partials/winners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 15,  87 => 10,  83 => 9,  77 => 8,  72 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set winners = winnersList.records %}
<div class=\"winner__wrap\">
    <div class=\"slier winnerSlider\">
        {% for w in winners %}
        <div>
            <div class=\"winnerBlock\">
                <div class=\"winnerBlock__wrap\">
                    <div class=\"wbw_inst\"><a href=\"{{ w.url_winner }}\">{{ w.nickname }}</a></div>
                    <p>{{ w.title }}</p>
                    <a href=\"{{ w.by_url }}\">{{ w.by_give }}</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    <div class=\"partnersSliderArrow\"></div>
</div>", "D:\\GitHub\\swb.loc/themes/swb/partials/winners.htm", "");
    }
}
