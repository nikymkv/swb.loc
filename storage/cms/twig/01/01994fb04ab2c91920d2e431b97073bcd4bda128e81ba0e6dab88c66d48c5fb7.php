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

/* D:\GitHub\swb.loc/plugins/swb/feedback/components/feedbackform/default.htm */
class __TwigTemplate_f47ab464078524819717a0ddc8c7b47ede420ffdd55bfb37079312d02fcb47cd extends \Twig\Template
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
        echo "<form data-request=\"onSend\">
    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"name\" placeholder=\"Имя\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"email\" name=\"email\" placeholder=\"Ваша электронная почта\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"phone\" name=\"phone\" placeholder=\"Ваш номер телефона\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"select\" value=\"Участник\" id=\"select\" readonly>
      <!-- <button id=\"select\" name=\"select\" value=\"ssss\">Участник</button> -->
      <div class=\"ulSeectWrap\">
        <ul id=\"optins\">
          <li>Участник</li>
          <li>Партнер</li>  
        </ul>
      </div>
    </div>

    <div class=\"submit\">
      <input type=\"submit\" value=\"отправить\" class=\"submitForm\"/>
    </div>
  </form>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\swb.loc/plugins/swb/feedback/components/feedbackform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSend\">
    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"name\" placeholder=\"Имя\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"email\" name=\"email\" placeholder=\"Ваша электронная почта\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"phone\" name=\"phone\" placeholder=\"Ваш номер телефона\" />
    </div>

    <div class=\"input__wrpBG\">
      <input type=\"text\" name=\"select\" value=\"Участник\" id=\"select\" readonly>
      <!-- <button id=\"select\" name=\"select\" value=\"ssss\">Участник</button> -->
      <div class=\"ulSeectWrap\">
        <ul id=\"optins\">
          <li>Участник</li>
          <li>Партнер</li>  
        </ul>
      </div>
    </div>

    <div class=\"submit\">
      <input type=\"submit\" value=\"отправить\" class=\"submitForm\"/>
    </div>
  </form>", "D:\\GitHub\\swb.loc/plugins/swb/feedback/components/feedbackform/default.htm", "");
    }
}
