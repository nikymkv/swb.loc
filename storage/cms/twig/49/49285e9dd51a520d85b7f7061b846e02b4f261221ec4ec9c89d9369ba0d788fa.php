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

/* D:\GitHub\swb.loc/themes/swb/partials/site/footer.htm */
class __TwigTemplate_3a702bf9011212e0c838279baec647170b83b1fa188f4b3f5be2298cbb691be3 extends \Twig\Template
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
        $filters = array("theme" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"parallax background-tree\" id=\"Paralax__img__feedback\">
        <img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb.svg");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
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
    <div class=\"feedback__wrap\">
        <div class=\"fw__title\">
            <p>связаться с нами</p>
        </div>
        <div class=\"fw__sn\">
            <a href=\"#\"><img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/vk.svg");
        echo "\" alt=\"\" /></a>
            <a href=\"#\"><img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/inst.svg");
        echo "\" alt=\"\" /></a>
        </div>
        <form action=\"\">
            <div class=\"input__wrpBG\">
                <input type=\"text\" placeholder=\"Имя\" />
            </div>

            <div class=\"input__wrpBG\">
                <input type=\"email\" placeholder=\"Ваша электронная почта\" />
            </div>

            <div class=\"input__wrpBG\">
                <input type=\"phone\" placeholder=\"Ваш номер телефона\" />
            </div>

            <div class=\"input__wrpBG\">
                <button id=\"select\" name=\"select\">Участник</button>
                <div class=\"ulSeectWrap\">
                    <ul id=\"optins\">
                        <li>Участник</li>
                        <li>Партнер</li>
                    </ul>
                </div>
            </div>

            <div class=\"submit\">
                <input type=\"submit\" value=\"отправить\" />
            </div>
        </form>
    </div>
    <div class=\"copyWrite\">
        <p>
            © 2021 <a href=\"https://itd.company/\" target=\"_blank\">ITD Company</a>.
            All rights reserved
        </p>
    </div>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 28,  147 => 27,  137 => 20,  133 => 19,  129 => 18,  125 => 17,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  89 => 8,  85 => 7,  81 => 6,  77 => 5,  73 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"parallax background-tree\" id=\"Paralax__img__feedback\">
        <img src=\"{{ 'assets/img/swb_uncolor.svg'|theme }}\" alt=\"\" />
        <img src=\"{{ 'assets/img/swb.svg'|theme }}\" alt=\"\" class=\"paraxImgMobil\" />
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
    <div class=\"feedback__wrap\">
        <div class=\"fw__title\">
            <p>связаться с нами</p>
        </div>
        <div class=\"fw__sn\">
            <a href=\"#\"><img src=\"{{ 'assets/img/vk.svg'|theme }}\" alt=\"\" /></a>
            <a href=\"#\"><img src=\"{{ 'assets/img/inst.svg'|theme }}\" alt=\"\" /></a>
        </div>
        <form action=\"\">
            <div class=\"input__wrpBG\">
                <input type=\"text\" placeholder=\"Имя\" />
            </div>

            <div class=\"input__wrpBG\">
                <input type=\"email\" placeholder=\"Ваша электронная почта\" />
            </div>

            <div class=\"input__wrpBG\">
                <input type=\"phone\" placeholder=\"Ваш номер телефона\" />
            </div>

            <div class=\"input__wrpBG\">
                <button id=\"select\" name=\"select\">Участник</button>
                <div class=\"ulSeectWrap\">
                    <ul id=\"optins\">
                        <li>Участник</li>
                        <li>Партнер</li>
                    </ul>
                </div>
            </div>

            <div class=\"submit\">
                <input type=\"submit\" value=\"отправить\" />
            </div>
        </form>
    </div>
    <div class=\"copyWrite\">
        <p>
            © 2021 <a href=\"https://itd.company/\" target=\"_blank\">ITD Company</a>.
            All rights reserved
        </p>
    </div>", "D:\\GitHub\\swb.loc/themes/swb/partials/site/footer.htm", "");
    }
}
