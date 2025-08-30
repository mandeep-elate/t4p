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

/* 34775ca225e100cbaa2c7701213ed7749790e037 */
class __TwigTemplate_11a9551f344e9439eec7c87855498f4a extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "34775ca225e100cbaa2c7701213ed7749790e037", 2)->unwrap();
        // line 3
        echo "%%SELECTOR%% {
    --searchFormSize: ";
        // line 4
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 4), "height", [], "any", false, false, false, 4), "style", [], "any", false, false, false, 4);
        echo ";
  ";
        // line 5
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5) != "full-screen")) {
            // line 6
            echo "  width: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
            echo ";
  ";
        }
        // line 8
        echo "}

/* CLASSIC */

%%SELECTOR%% .search-form--classic .search-form__container {
  ";
        // line 13
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 13), "classic_styles", [], "any", false, false, false, 13), "borders", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
  ";
        // line 14
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 14), "classic_styles", [], "any", false, false, false, 14), "background", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
  ";
        // line 15
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 15), "classic_styles", [], "any", false, false, false, 15), "icon_button", [], "any", false, false, false, 15), "position", [], "any", false, false, false, 15) == "right")) {
            // line 16
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 18
        echo "}

%%SELECTOR%% .search-form--classic .search-form__field {
  padding-left: ";
        // line 21
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 21), "classic_styles", [], "any", false, false, false, 21), "padding", [], "any", false, false, false, 21), "style", [], "any", false, false, false, 21);
        echo ";
  padding-right: ";
        // line 22
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 22), "classic_styles", [], "any", false, false, false, 22), "padding", [], "any", false, false, false, 22), "style", [], "any", false, false, false, 22);
        echo ";
  ";
        // line 23
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 23), "classic_styles", [], "any", false, false, false, 23), "typography", [], "any", false, false, false, 23), ($context["globalSettings"] ?? null)], 23, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--classic .search-form__field::placeholder {  
  color: ";
        // line 27
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 27), "classic_styles", [], "any", false, false, false, 27), "placeholder", [], "any", false, false, false, 27);
        echo "
}

%%SELECTOR%% .search-form--classic .search-form__button {
  font-size: ";
        // line 31
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 31), "classic_styles", [], "any", false, false, false, 31), "icon_button", [], "any", false, false, false, 31), "size", [], "any", false, false, false, 31), "style", [], "any", false, false, false, 31);
        echo ";
  background-color: ";
        // line 32
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 32), "classic_styles", [], "any", false, false, false, 32), "icon_button", [], "any", false, false, false, 32), "background", [], "any", false, false, false, 32);
        echo ";
  color: ";
        // line 33
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 33), "classic_styles", [], "any", false, false, false, 33), "icon_button", [], "any", false, false, false, 33), "color", [], "any", false, false, false, 33);
        echo ";
}

%%SELECTOR%% .search-form--classic .search-form__button:hover {
  background-color: ";
        // line 37
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 37), "classic_styles", [], "any", false, false, false, 37), "icon_button", [], "any", false, false, false, 37), "background_hover", [], "any", false, false, false, 37);
        echo ";
}

%%SELECTOR%% .search-form--classic .search-form__button.has-text {
  padding-left: ";
        // line 41
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 41), "classic_styles", [], "any", false, false, false, 41), "icon_button", [], "any", false, false, false, 41), "padding", [], "any", false, false, false, 41), "style", [], "any", false, false, false, 41);
        echo ";
  padding-right: ";
        // line 42
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 42), "classic_styles", [], "any", false, false, false, 42), "icon_button", [], "any", false, false, false, 42), "padding", [], "any", false, false, false, 42), "style", [], "any", false, false, false, 42);
        echo ";
  ";
        // line 43
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 43), "classic_styles", [], "any", false, false, false, 43), "typography", [], "any", false, false, false, 43), ($context["globalSettings"] ?? null)], 43, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--classic .search-form__container:focus-within {
  background-color: ";
        // line 47
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 47), "classic_styles", [], "any", false, false, false, 47), "focused", [], "any", false, false, false, 47), "background", [], "any", false, false, false, 47);
        echo ";
  border-color: ";
        // line 48
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 48), "classic_styles", [], "any", false, false, false, 48), "focused", [], "any", false, false, false, 48), "border", [], "any", false, false, false, 48);
        echo ";
  box-shadow: ";
        // line 49
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 49), "classic_styles", [], "any", false, false, false, 49), "focused", [], "any", false, false, false, 49), "shadow", [], "any", false, false, false, 49), "style", [], "any", false, false, false, 49);
        echo ";
}

/* EXPAND */

%%SELECTOR%% .search-form--expand .search-form__button {
  width: var(--searchFormSize);
  height: var(--searchFormSize);
  font-size: ";
        // line 57
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 57), "expand_styles", [], "any", false, false, false, 57), "open_button", [], "any", false, false, false, 57), "size", [], "any", false, false, false, 57), "style", [], "any", false, false, false, 57);
        echo ";
  background-color: ";
        // line 58
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 58), "expand_styles", [], "any", false, false, false, 58), "open_button", [], "any", false, false, false, 58), "background", [], "any", false, false, false, 58);
        echo ";
  color: ";
        // line 59
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 59), "expand_styles", [], "any", false, false, false, 59), "open_button", [], "any", false, false, false, 59), "color", [], "any", false, false, false, 59);
        echo ";
  ";
        // line 60
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 60), "expand_styles", [], "any", false, false, false, 60), "open_button", [], "any", false, false, false, 60), "borders", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--expand .search-form__button:hover {
  background-color: ";
        // line 64
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 64), "expand_styles", [], "any", false, false, false, 64), "open_button", [], "any", false, false, false, 64), "hover", [], "any", false, false, false, 64);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__container {
 gap: ";
        // line 68
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 68), "expand_styles", [], "any", false, false, false, 68), "space_between", [], "any", false, false, false, 68), "style", [], "any", false, false, false, 68);
        echo ";
   ";
        // line 69
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 69), "expand_styles", [], "any", false, false, false, 69), "open_button", [], "any", false, false, false, 69), "position", [], "any", false, false, false, 69) == "right")) {
            // line 70
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 72
        echo "}

%%SELECTOR%% .search-form--expand .search-form__field {
  padding-left: ";
        // line 75
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 75), "expand_styles", [], "any", false, false, false, 75), "padding", [], "any", false, false, false, 75), "style", [], "any", false, false, false, 75);
        echo ";
  padding-right: ";
        // line 76
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 76), "expand_styles", [], "any", false, false, false, 76), "padding", [], "any", false, false, false, 76), "style", [], "any", false, false, false, 76);
        echo ";
  ";
        // line 77
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 77), "expand_styles", [], "any", false, false, false, 77), "typography", [], "any", false, false, false, 77), ($context["globalSettings"] ?? null)], 77, $context, $this->getSourceContext());
        echo "
  ";
        // line 78
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 78), "expand_styles", [], "any", false, false, false, 78), "borders", [], "any", false, false, false, 78)], 78, $context, $this->getSourceContext());
        echo "
  ";
        // line 79
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 79), "expand_styles", [], "any", false, false, false, 79), "background", [], "any", false, false, false, 79)], 79, $context, $this->getSourceContext());
        echo "

  ";
        // line 81
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 81), "expand_styles", [], "any", false, false, false, 81), "open_button", [], "any", false, false, false, 81), "position", [], "any", false, false, false, 81) == "right")) {
            // line 82
            echo "    right: 0;
  \tleft: auto;
  ";
        }
        // line 85
        echo "
}

%%SELECTOR%% .search-form--expand .search-form__field::placeholder {  
  color: ";
        // line 89
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 89), "expand_styles", [], "any", false, false, false, 89), "placeholder", [], "any", false, false, false, 89);
        echo "
}

%%SELECTOR%% .search-form--expand .search-form__field:focus {
  background-color: ";
        // line 93
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 93), "expand_styles", [], "any", false, false, false, 93), "focused", [], "any", false, false, false, 93), "background", [], "any", false, false, false, 93);
        echo ";
  border-color: ";
        // line 94
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 94), "expand_styles", [], "any", false, false, false, 94), "focused", [], "any", false, false, false, 94), "border", [], "any", false, false, false, 94);
        echo ";
  box-shadow: ";
        // line 95
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 95), "expand_styles", [], "any", false, false, false, 95), "focused", [], "any", false, false, false, 95), "shadow", [], "any", false, false, false, 95), "style", [], "any", false, false, false, 95);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__button:hover {
  background-color: ";
        // line 99
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 99), "expand_styles", [], "any", false, false, false, 99), "open_button", [], "any", false, false, false, 99), "hover", [], "any", false, false, false, 99);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__button:hover {
  background-color: ";
        // line 103
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 103), "expand_styles", [], "any", false, false, false, 103), "open_button", [], "any", false, false, false, 103), "hover", [], "any", false, false, false, 103);
        echo ";
}

%%SELECTOR%% .search-form--expand .search-form__field,
%%SELECTOR%% .search-form--expand.is-active .search-form__field {
  width: ";
        // line 108
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 108), "expand_styles", [], "any", false, false, false, 108), "width", [], "any", false, false, false, 108), "style", [], "any", false, false, false, 108);
        echo ";
}

/* FULL SCREEN */

%%SELECTOR%% .search-form__lightbox-container {
  --searchFormSize: ";
        // line 114
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 114), "full_screen_styles", [], "any", false, false, false, 114), "search_box", [], "any", false, false, false, 114), "height", [], "any", false, false, false, 114), "style", [], "any", false, false, false, 114);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-container {
  ";
        // line 118
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 118), "full_screen_styles", [], "any", false, false, false, 118), "search_box", [], "any", false, false, false, 118), "borders", [], "any", false, false, false, 118)], 118, $context, $this->getSourceContext());
        echo "
  ";
        // line 119
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 119), "full_screen_styles", [], "any", false, false, false, 119), "search_box", [], "any", false, false, false, 119), "background", [], "any", false, false, false, 119)], 119, $context, $this->getSourceContext());
        echo "
  ";
        // line 120
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 120), "full_screen_styles", [], "any", false, false, false, 120), "search_box", [], "any", false, false, false, 120), "icon", [], "any", false, false, false, 120), "position", [], "any", false, false, false, 120) == "right")) {
            // line 121
            echo "    flex-direction: row-reverse;
  ";
        }
        // line 123
        echo "}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox {
  ";
        // line 126
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 126), "full_screen_styles", [], "any", false, false, false, 126), "background", [], "any", false, false, false, 126)], 126, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--full-screen .search-form__field::placeholder {  
  color: ";
        // line 130
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 130), "full_screen_styles", [], "any", false, false, false, 130), "search_box", [], "any", false, false, false, 130), "placeholder", [], "any", false, false, false, 130);
        echo "
  
}

%%SELECTOR%% .search-form--full-screen .search-form__field {
";
        // line 135
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_complex", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 135), "full_screen_styles", [], "any", false, false, false, 135), "search_box", [], "any", false, false, false, 135), "padding", [], "any", false, false, false, 135), "padding"], 135, $context, $this->getSourceContext());
        echo "
";
        // line 136
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 136), "full_screen_styles", [], "any", false, false, false, 136), "search_box", [], "any", false, false, false, 136), "typography", [], "any", false, false, false, 136), ($context["globalSettings"] ?? null)], 136, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-container:focus-within {
  background-color: ";
        // line 140
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 140), "full_screen_styles", [], "any", false, false, false, 140), "search_box", [], "any", false, false, false, 140), "focused", [], "any", false, false, false, 140), "background", [], "any", false, false, false, 140);
        echo ";
  border-color: ";
        // line 141
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 141), "full_screen_styles", [], "any", false, false, false, 141), "search_box", [], "any", false, false, false, 141), "focused", [], "any", false, false, false, 141), "border", [], "any", false, false, false, 141);
        echo ";
  box-shadow: ";
        // line 142
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 142), "full_screen_styles", [], "any", false, false, false, 142), "search_box", [], "any", false, false, false, 142), "focused", [], "any", false, false, false, 142), "shadow", [], "any", false, false, false, 142), "style", [], "any", false, false, false, 142);
        echo ";
}

%%SELECTOR%% .search-form__button--full-screen {
  font-size: ";
        // line 146
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 146), "full_screen_styles", [], "any", false, false, false, 146), "open_button", [], "any", false, false, false, 146), "size", [], "any", false, false, false, 146), "style", [], "any", false, false, false, 146);
        echo ";
  background-color: ";
        // line 147
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 147), "full_screen_styles", [], "any", false, false, false, 147), "open_button", [], "any", false, false, false, 147), "background", [], "any", false, false, false, 147);
        echo ";
  color: ";
        // line 148
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 148), "full_screen_styles", [], "any", false, false, false, 148), "open_button", [], "any", false, false, false, 148), "color", [], "any", false, false, false, 148);
        echo ";
  ";
        // line 149
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 149), "full_screen_styles", [], "any", false, false, false, 149), "open_button", [], "any", false, false, false, 149), "borders", [], "any", false, false, false, 149)], 149, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .search-form__button--full-screen:hover {
  background-color: ";
        // line 153
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 153), "full_screen_styles", [], "any", false, false, false, 153), "open_button", [], "any", false, false, false, 153), "background_hover", [], "any", false, false, false, 153);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-close {
  font-size: ";
        // line 157
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 157), "full_screen_styles", [], "any", false, false, false, 157), "close_icon", [], "any", false, false, false, 157), "size", [], "any", false, false, false, 157), "style", [], "any", false, false, false, 157);
        echo ";
  color: ";
        // line 158
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 158), "full_screen_styles", [], "any", false, false, false, 158), "close_icon", [], "any", false, false, false, 158), "color", [], "any", false, false, false, 158);
        echo ";
}

%%SELECTOR%% .search-form--full-screen .search-form__lightbox-button {
  font-size: ";
        // line 162
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 162), "full_screen_styles", [], "any", false, false, false, 162), "search_box", [], "any", false, false, false, 162), "icon", [], "any", false, false, false, 162), "size", [], "any", false, false, false, 162), "style", [], "any", false, false, false, 162);
        echo ";
  color: ";
        // line 163
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 163), "full_screen_styles", [], "any", false, false, false, 163), "search_box", [], "any", false, false, false, 163), "icon", [], "any", false, false, false, 163), "color", [], "any", false, false, false, 163);
        echo ";
  ";
        // line 164
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 164), "full_screen_styles", [], "any", false, false, false, 164), "search_box", [], "any", false, false, false, 164), "icon", [], "any", false, false, false, 164), "hide", [], "any", false, false, false, 164)) {
            // line 165
            echo "  \tdisplay: none;
  ";
        }
        // line 167
        echo "}

";
        // line 169
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 169), "full_screen_styles", [], "any", false, false, false, 169), "search_box", [], "any", false, false, false, 169), "width", [], "any", false, false, false, 169), "style", [], "any", false, false, false, 169)) {
            // line 170
            echo "  %%SELECTOR%% .search-form--full-screen .search-form__lightbox-container {
    width: ";
            // line 171
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 171), "full_screen_styles", [], "any", false, false, false, 171), "search_box", [], "any", false, false, false, 171), "width", [], "any", false, false, false, 171), "style", [], "any", false, false, false, 171);
            echo ";
    margin-left: auto;
    margin-right: auto;
  }
";
        }
        // line 175
        echo " 




";
        // line 181
        echo "

    %%SELECTOR%% {
        ";
        // line 184
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 185
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 185), "wrapper", [], "any", false, false, false, 185), "background", [], "any", false, false, false, 185), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 186
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 186), "wrapper", [], "any", false, false, false, 186), "layout", [], "any", false, false, false, 186), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 187
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 187), "wrapper", [], "any", false, false, false, 187), "size", [], "any", false, false, false, 187), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 188
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 188), "wrapper", [], "any", false, false, false, 188), "typography", [], "any", false, false, false, 188),         // line 189
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 190
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 190), "wrapper", [], "any", false, false, false, 190), "spacing", [], "any", false, false, false, 190), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 191
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 191), "wrapper", [], "any", false, false, false, 191), "borders", [], "any", false, false, false, 191), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 192
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 192), "wrapper", [], "any", false, false, false, 192), "effects", [], "any", false, false, false, 192)], 184, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 196
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 197
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 197), "wrapper_hover", [], "any", false, false, false, 197), "background", [], "any", false, false, false, 197), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 198
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 198), "wrapper_hover", [], "any", false, false, false, 198), "layout", [], "any", false, false, false, 198), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 199
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 199), "wrapper_hover", [], "any", false, false, false, 199), "size", [], "any", false, false, false, 199), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 200
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 200), "wrapper_hover", [], "any", false, false, false, 200), "typography", [], "any", false, false, false, 200),         // line 201
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 202
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 202), "wrapper_hover", [], "any", false, false, false, 202), "spacing", [], "any", false, false, false, 202), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 203
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 203), "wrapper_hover", [], "any", false, false, false, 203), "borders", [], "any", false, false, false, 203), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 204
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 204), "wrapper_hover", [], "any", false, false, false, 204), "effects", [], "any", false, false, false, 204)], 196, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 208
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 208), "css", [], "any", false, false, false, 208);
        echo "


";
        // line 211
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 211), "hide", [], "any", false, false, false, 211)))) {
            // line 212
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 213
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 213), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 213), "hide", [], "any", false, false, false, 213))) {
                    // line 214
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 216
                    if (($context["isBuilder"] ?? null)) {
                        // line 217
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 217), "builder_preview", [], "any", false, false, false, 217) == "hide")) {
                            // line 218
                            echo "                            display: none;
                        ";
                        } else {
                            // line 220
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 223
                        echo "                    ";
                    } else {
                        // line 224
                        echo "                        display: none;
                    ";
                    }
                    // line 226
                    echo "                }
            }
        ";
                }
                // line 229
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 231
        echo "
";
    }

    public function getTemplateName()
    {
        return "34775ca225e100cbaa2c7701213ed7749790e037";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 231,  507 => 229,  502 => 226,  498 => 224,  495 => 223,  490 => 220,  486 => 218,  483 => 217,  481 => 216,  475 => 214,  472 => 213,  467 => 212,  465 => 211,  459 => 208,  452 => 204,  451 => 203,  450 => 202,  449 => 201,  448 => 200,  447 => 199,  446 => 198,  445 => 197,  444 => 196,  437 => 192,  436 => 191,  435 => 190,  434 => 189,  433 => 188,  432 => 187,  431 => 186,  430 => 185,  429 => 184,  424 => 181,  417 => 175,  409 => 171,  406 => 170,  404 => 169,  400 => 167,  396 => 165,  394 => 164,  390 => 163,  386 => 162,  379 => 158,  375 => 157,  368 => 153,  361 => 149,  357 => 148,  353 => 147,  349 => 146,  342 => 142,  338 => 141,  334 => 140,  327 => 136,  323 => 135,  315 => 130,  308 => 126,  303 => 123,  299 => 121,  297 => 120,  293 => 119,  289 => 118,  282 => 114,  273 => 108,  265 => 103,  258 => 99,  251 => 95,  247 => 94,  243 => 93,  236 => 89,  230 => 85,  225 => 82,  223 => 81,  218 => 79,  214 => 78,  210 => 77,  206 => 76,  202 => 75,  197 => 72,  193 => 70,  191 => 69,  187 => 68,  180 => 64,  173 => 60,  169 => 59,  165 => 58,  161 => 57,  150 => 49,  146 => 48,  142 => 47,  135 => 43,  131 => 42,  127 => 41,  120 => 37,  113 => 33,  109 => 32,  105 => 31,  98 => 27,  91 => 23,  87 => 22,  83 => 21,  78 => 18,  74 => 16,  72 => 15,  68 => 14,  64 => 13,  57 => 8,  51 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "34775ca225e100cbaa2c7701213ed7749790e037", "");
    }
}
