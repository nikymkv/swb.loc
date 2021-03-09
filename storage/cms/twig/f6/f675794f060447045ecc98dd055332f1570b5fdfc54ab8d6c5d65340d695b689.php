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

/* D:\GitHub\swb.loc/themes/swb/layouts/default.htm */
class __TwigTemplate_99269f7a79d33de8d8c52c7fc8eccb16ebd0a0efe6e4e8bb2e3cd9eeafa202b8 extends \Twig\Template
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
        $tags = array("set" => 1, "styles" => 16, "partial" => 20, "page" => 23, "for" => 52, "framework" => 210, "scripts" => 211);
        $filters = array("theme" => 10, "escape" => 49);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'styles', 'partial', 'page', 'for', 'framework', 'scripts'],
                ['theme', 'escape'],
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
        $context["socials"] = twig_get_attribute($this->env, $this->source, ($context["socialList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["mainInfo"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["mainInfoList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>SWB</title>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/ctyle.css");
        echo "\" />
    <link
      rel=\"stylesheet\"
      type=\"text/css\"
      href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"
    />
    ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "  </head>
  <body>
    <section class=\"header\">
      ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "    </section>

      ";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "
    <section class=\"feedback\">
      <div class=\"parallax background-tree\" id=\"Paralax__img__feedback\">
        <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb.svg");
        echo "\" alt=\"\" class=\"paraxImgMobil\" />
        <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
        <img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/swb_uncolor.svg");
        echo "\" alt=\"\" />
      </div>
      <div class=\"feedback__wrap\">
        <div class=\"fw__title\">
          <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "feedback_title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"fw__sn\">
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 53
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "logo_social", [], "any", false, false, true, 53), "path", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\" alt=\"\" /></a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
        <form data-request=\"onSend\">
    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"name\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_name", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"email\" name=\"email\" placeholder=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_email", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"phone\" name=\"phone\" placeholder=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_phone", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"select\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_participant", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\" id=\"select\" readonly>
      <div class=\"ulSeectWrap\">
        <ul id=\"optins\">
          <li>";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_participant", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "</li>
          <li>";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_partner", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</li>  
        </ul>
      </div>
    </div>

    <div class=\"submit\">
      <input type=\"submit\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "form_btn", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "\" class=\"submitForm\"/>
    </div>
  </form>
      </div>
      <div class=\"copyWrite\">
        <p>
          © 2021 <a href=\"https://itd.company/\" target=\"_blank\">ITD Company</a>.
          All rights reserved
        </p>
      </div>
    </section>

    <div class=\"scrollUP\">
      <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/arrUP.svg");
        echo "\" alt=\"\" />
    </div>

    <div class=\"scrollBar\"></div>

    <script src=\"https://code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script
      type=\"text/javascript\"
      src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"
    ></script>
    <script>
      \$(\".partnersSlider\").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrow: true,
        dots: false,
        draggable: false,
        rows: 2,
        swipe: false,
        prevArrow:
          \"<button id='prev' type='button' class='btn btnPrev'><img src='";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partnersArrLeft.svg");
        echo "' alt=''></button>\",
        nextArrow:
          \"<button id='next' type='button' class='btn btnNext'><img src='";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partnersArrRight.svg");
        echo "' alt=''></button>\",
        responsive: [
          {
            breakpoint: 920,
            settings: {
              arrow: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              draggable: true,
            },
          },
        ],
      });
    </script>
    <script>
      \$(\".partnersPrizeSlider\").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrow: true,
        dots: false,
        draggable: false,
        rows: 1,
        swipe: false,
        prevArrow:
          \"<button id='prev' type='button' class='btn btnPrev'><img src='";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partnersArrLeft.svg");
        echo "' alt=''></button>\",
        nextArrow:
          \"<button id='next' type='button' class='btn btnNext'><img src='";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partnersArrRight.svg");
        echo "' alt=''></button>\",

        responsive: [
          {
            breakpoint: 920,
            settings: {
              arrow: false,
              slidesToShow: 1.5,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              draggable: true,
              swipe: true,
              arrow: false,
              infinite: true,
            },
          },
        ],
      });
    </script>
    <script>
      \$(\".winnerSlider\").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrow: true,
        dots: false,
        draggable: false,
        rows: 2,
        swipe: false,
        prevArrow:
          \"<button id='prev' type='button' class='btn btnPrev'><img src='";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partnersArrLeft.svg");
        echo "' alt=''></button>\",

        nextArrow:
          \"<button id='next' type='button' class='btn btnNext'><img src='";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/partnersArrRight.svg");
        echo "' alt=''></button>\",
        responsive: [
          {
            breakpoint: 920,
            settings: {
              arrow: false,
              slidesToShow: 1.4,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              arrow: false,
              draggable: true,
              swipe: true,
            },
          },
        ],
      });
    </script>
    <script>
      \$(\".condition_mobil\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrow: false,
        dots: true,
        draggable: false,
        rows: 1,
        swipe: true,
      });
    </script>
    <script src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
    ";
        // line 210
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 211
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 212
        echo "
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/themes/swb/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 212,  420 => 211,  409 => 210,  405 => 209,  372 => 179,  366 => 176,  332 => 145,  327 => 143,  297 => 116,  292 => 114,  268 => 93,  252 => 80,  243 => 74,  239 => 73,  233 => 70,  226 => 66,  219 => 62,  212 => 58,  207 => 55,  196 => 53,  192 => 52,  186 => 49,  179 => 45,  175 => 44,  171 => 43,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  102 => 24,  100 => 23,  96 => 21,  92 => 20,  87 => 17,  84 => 16,  75 => 10,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set socials = socialList.records %}
{% set mainInfo = mainInfoList.records[0] %}
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>SWB</title>
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/ctyle.css'|theme }}\" />
    <link
      rel=\"stylesheet\"
      type=\"text/css\"
      href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"
    />
    {% styles %}
  </head>
  <body>
    <section class=\"header\">
      {% partial 'site/header' %}
    </section>

      {% page %}

    <section class=\"feedback\">
      <div class=\"parallax background-tree\" id=\"Paralax__img__feedback\">
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
          <p>{{ mainInfo.feedback_title }}</p>
        </div>
        <div class=\"fw__sn\">
          {% for s in socials %}
            <a href=\"{{ s.url }}\"><img src=\"{{ s.logo_social.path }}\" alt=\"\" /></a>
          {% endfor %}
        </div>
        <form data-request=\"onSend\">
    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"name\" placeholder=\"{{ mainInfo.form_name }}\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"email\" name=\"email\" placeholder=\"{{ mainInfo.form_email }}\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"phone\" name=\"phone\" placeholder=\"{{ mainInfo.form_phone }}\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"select\" value=\"{{ mainInfo.form_participant }}\" id=\"select\" readonly>
      <div class=\"ulSeectWrap\">
        <ul id=\"optins\">
          <li>{{ mainInfo.form_participant }}</li>
          <li>{{ mainInfo.form_partner }}</li>  
        </ul>
      </div>
    </div>

    <div class=\"submit\">
      <input type=\"submit\" value=\"{{ mainInfo.form_btn }}\" class=\"submitForm\"/>
    </div>
  </form>
      </div>
      <div class=\"copyWrite\">
        <p>
          © 2021 <a href=\"https://itd.company/\" target=\"_blank\">ITD Company</a>.
          All rights reserved
        </p>
      </div>
    </section>

    <div class=\"scrollUP\">
      <img src=\"{{ 'assets/img/arrUP.svg'|theme }}\" alt=\"\" />
    </div>

    <div class=\"scrollBar\"></div>

    <script src=\"https://code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script
      type=\"text/javascript\"
      src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"
    ></script>
    <script>
      \$(\".partnersSlider\").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrow: true,
        dots: false,
        draggable: false,
        rows: 2,
        swipe: false,
        prevArrow:
          \"<button id='prev' type='button' class='btn btnPrev'><img src='{{ 'assets/img/partnersArrLeft.svg'|theme }}' alt=''></button>\",
        nextArrow:
          \"<button id='next' type='button' class='btn btnNext'><img src='{{ 'assets/img/partnersArrRight.svg'|theme }}' alt=''></button>\",
        responsive: [
          {
            breakpoint: 920,
            settings: {
              arrow: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              draggable: true,
            },
          },
        ],
      });
    </script>
    <script>
      \$(\".partnersPrizeSlider\").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrow: true,
        dots: false,
        draggable: false,
        rows: 1,
        swipe: false,
        prevArrow:
          \"<button id='prev' type='button' class='btn btnPrev'><img src='{{ 'assets/img/partnersArrLeft.svg'|theme }}' alt=''></button>\",
        nextArrow:
          \"<button id='next' type='button' class='btn btnNext'><img src='{{ 'assets/img/partnersArrRight.svg'|theme }}' alt=''></button>\",

        responsive: [
          {
            breakpoint: 920,
            settings: {
              arrow: false,
              slidesToShow: 1.5,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              draggable: true,
              swipe: true,
              arrow: false,
              infinite: true,
            },
          },
        ],
      });
    </script>
    <script>
      \$(\".winnerSlider\").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrow: true,
        dots: false,
        draggable: false,
        rows: 2,
        swipe: false,
        prevArrow:
          \"<button id='prev' type='button' class='btn btnPrev'><img src='{{ 'assets/img/partnersArrLeft.svg'|theme }}' alt=''></button>\",

        nextArrow:
          \"<button id='next' type='button' class='btn btnNext'><img src='{{ 'assets/img/partnersArrRight.svg'|theme }}' alt=''></button>\",
        responsive: [
          {
            breakpoint: 920,
            settings: {
              arrow: false,
              slidesToShow: 1.4,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              arrow: false,
              draggable: true,
              swipe: true,
            },
          },
        ],
      });
    </script>
    <script>
      \$(\".condition_mobil\").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrow: false,
        dots: true,
        draggable: false,
        rows: 1,
        swipe: true,
      });
    </script>
    <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

  </body>
</html>", "D:\\GitHub\\swb.loc/themes/swb/layouts/default.htm", "");
    }
}
