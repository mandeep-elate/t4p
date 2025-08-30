<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* 5de71935b1bd3a72d60e8959ba743e121c5fccb8 */
class __TwigTemplate_a64a4eb7eb322a4c63f10a82ad8dd837 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "5de71935b1bd3a72d60e8959ba743e121c5fccb8", 2)->unwrap();
        // line 3
        $context["options"] = ["links" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 4
($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 4), "links", [], "any", false, false, false, 4), "vertical" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 5
($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 5), "vertical", [], "any", false, false, false, 5), "removeColumnTitles" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 6
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 6), "links", [], "any", false, false, false, 6), "remove_column_titles", [], "any", false, false, false, 6), "toggle" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 7
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 7), "toggle", [], "any", false, false, false, 7), "attributes" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 8
($context["content"] ?? null), "content", [], "any", false, false, false, 8), "accessibility", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "hideArrowsOn" => ["desktop" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 10
($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 10), "links", [], "any", false, false, false, 10), "dropdown_arrows", [], "any", false, false, false, 10), "disable", [], "any", false, false, false, 10), "mobile" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 11
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 11), "links", [], "any", false, false, false, 11), "dropdown_arrows", [], "any", false, false, false, 11), "disable", [], "any", false, false, false, 11)]];
        // line 14
        echo "
";
        // line 15
        $context["topbarOptions"] = ["mode" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 16
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 16), "mode", [], "any", false, false, false, 16), "layout" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 17
($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 17), "top_bar", [], "any", false, false, false, 17)];
        // line 19
        echo "
";
        // line 20
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_menuStart", [($context["options"] ?? null)], 20, $context, $this->getSourceContext());
        echo "
  <ul class=\"breakdance-menu-list\" id=\"menu-%%ID%%\">
    ";
        // line 22
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_menuTopbar", [($context["topbarOptions"] ?? null)], 22, $context, $this->getSourceContext());
        echo "
    %%CHILDREN%%
  </ul>
";
        // line 25
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_menuEnd", [], 25, $context, $this->getSourceContext());
        echo "

";
    }

    public function getTemplateName()
    {
        return "5de71935b1bd3a72d60e8959ba743e121c5fccb8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  66 => 22,  61 => 20,  58 => 19,  56 => 17,  55 => 16,  54 => 15,  51 => 14,  49 => 11,  48 => 10,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "5de71935b1bd3a72d60e8959ba743e121c5fccb8", "");
    }
}
