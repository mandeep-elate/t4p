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

/* f97bc1a2199ee31e5e0c341515c5ed08ae493004 */
class __TwigTemplate_a325d4ae22a0d1d5bdc859e74a7f440b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "f97bc1a2199ee31e5e0c341515c5ed08ae493004", 2)->unwrap();
        // line 3
        echo "%%SELECTOR%% {
  ";
        // line 4
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 4), "disable_overlay", [], "any", false, false, false, 4)) {
            // line 5
            echo "    ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_background", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 8), "position", [], "any", false, false, false, 8), "align", [], "any", false, false, false, 8) == "left")) {
            // line 9
            echo "    align-items: flex-start;
    text-align: left;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 11
($context["design"] ?? null), "popup", [], "any", false, false, false, 11), "position", [], "any", false, false, false, 11), "align", [], "any", false, false, false, 11) == "center")) {
            // line 12
            echo "    align-items: center;
    text-align: center;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 14
($context["design"] ?? null), "popup", [], "any", false, false, false, 14), "position", [], "any", false, false, false, 14), "align", [], "any", false, false, false, 14) == "right")) {
            // line 15
            echo "    align-items: flex-end;
    text-align: right;
  ";
        }
        // line 18
        echo "
  justify-content: ";
        // line 19
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 19), "position", [], "any", false, false, false, 19), "vertical_align", [], "any", false, false, false, 19);
        echo ";
}

%%SELECTOR%% .breakdance-popup {
  ";
        // line 23
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 23), "position", [], "any", false, false, false, 23), "translate", [], "any", false, false, false, 23), "x", [], "any", false, false, false, 23)) {
            // line 24
            echo "    left: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 24), "position", [], "any", false, false, false, 24), "translate", [], "any", false, false, false, 24), "x", [], "any", false, false, false, 24), "style", [], "any", false, false, false, 24);
            echo ";
  ";
        }
        // line 26
        echo "  ";
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 26), "position", [], "any", false, false, false, 26), "translate", [], "any", false, false, false, 26), "y", [], "any", false, false, false, 26)) {
            // line 27
            echo "    top: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 27), "position", [], "any", false, false, false, 27), "translate", [], "any", false, false, false, 27), "y", [], "any", false, false, false, 27), "style", [], "any", false, false, false, 27);
            echo ";
  ";
        }
        // line 29
        echo "   width: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 29), "size", [], "any", false, false, false, 29), "width", [], "any", false, false, false, 29), "style", [], "any", false, false, false, 29);
        echo ";
   height: ";
        // line 30
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 30), "size", [], "any", false, false, false, 30), "height", [], "any", false, false, false, 30), "style", [], "any", false, false, false, 30);
        echo ";
   max-height: ";
        // line 31
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 31), "size", [], "any", false, false, false, 31), "max_height", [], "any", false, false, false, 31), "style", [], "any", false, false, false, 31);
        echo ";
}

%%SELECTOR%% .breakdance-popup-content {
  ";
        // line 35
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_simpleLayout", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 35), "layout", [], "any", false, false, false, 35), ($context["breakpoint"] ?? null)], 35, $context, $this->getSourceContext());
        echo "
  ";
        // line 36
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 36), "background", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
        echo "
  ";
        // line 37
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 37), "borders", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
        echo "
  ";
        // line 38
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_complex", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 38), "padding", [], "any", false, false, false, 38), "padding", [], "any", false, false, false, 38), "padding"], 38, $context, $this->getSourceContext());
        echo "
}

";
        // line 41
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_layoutV2", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 41), "layout_v2", [], "any", false, false, false, 41), ($context["breakpoint"] ?? null), ($context["isBaseBreakpoint"] ?? null), "%%SELECTOR%% .breakdance-popup-content"], 41, $context, $this->getSourceContext());
        echo "

";
        // line 43
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 43), "disable_close_button", [], "any", false, false, false, 43)) {
            // line 44
            echo "
  %%SELECTOR%% .breakdance-popup .breakdance-popup-close-button {
    color: ";
            // line 46
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 46), "color", [], "any", false, false, false, 46);
            echo ";

    --closeButtonSize: ";
            // line 48
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 48), "size", [], "any", false, false, false, 48), "style", [], "any", false, false, false, 48);
            echo ";

    ";
            // line 50
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 50), "outside", [], "any", false, false, false, 50)) {
                // line 51
                echo "      --closeButtonOutsideOffset: calc(var(--closeButtonSize) + var(--closeButtonOutsidePadding, 0px) + var(--closeButtonOutsidePadding, 0px));
    ";
            }
            // line 53
            echo "
    ";
            // line 54
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 54), "wrapped", [], "any", false, false, false, 54)) {
                // line 55
                echo "      --closeButtonOutsidePadding: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 55), "padding", [], "any", false, false, false, 55), "style", [], "any", false, false, false, 55);
                echo ";
      border-radius: ";
                // line 56
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 56), "radius", [], "any", false, false, false, 56), "style", [], "any", false, false, false, 56);
                echo ";
      padding-left: ";
                // line 57
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 57), "padding", [], "any", false, false, false, 57), "style", [], "any", false, false, false, 57);
                echo ";
      padding-right: ";
                // line 58
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 58), "padding", [], "any", false, false, false, 58), "style", [], "any", false, false, false, 58);
                echo ";
      padding-bottom: ";
                // line 59
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 59), "padding", [], "any", false, false, false, 59), "style", [], "any", false, false, false, 59);
                echo ";
      padding-top: ";
                // line 60
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 60), "padding", [], "any", false, false, false, 60), "style", [], "any", false, false, false, 60);
                echo ";
      background-color: ";
                // line 61
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 61), "background", [], "any", false, false, false, 61);
                echo ";
    ";
            }
            // line 63
            echo "
    ";
            // line 64
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 64), "translate", [], "any", false, false, false, 64), "x", [], "any", false, false, false, 64), "style", [], "any", false, false, false, 64) || \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 64), "translate", [], "any", false, false, false, 64), "y", [], "any", false, false, false, 64), "style", [], "any", false, false, false, 64))) {
                // line 65
                echo "      transform: translate(";
                echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 65), "translate", [], "any", false, true, false, 65), "x", [], "any", false, true, false, 65), "style", [], "any", true, true, false, 65) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 65), "translate", [], "any", false, true, false, 65), "x", [], "any", false, true, false, 65), "style", [], "any", false, false, false, 65)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 65), "translate", [], "any", false, true, false, 65), "x", [], "any", false, true, false, 65), "style", [], "any", false, false, false, 65)) : (0));
                echo ",";
                echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 65), "translate", [], "any", false, true, false, 65), "y", [], "any", false, true, false, 65), "style", [], "any", true, true, false, 65) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 65), "translate", [], "any", false, true, false, 65), "y", [], "any", false, true, false, 65), "style", [], "any", false, false, false, 65)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 65), "translate", [], "any", false, true, false, 65), "y", [], "any", false, true, false, 65), "style", [], "any", false, false, false, 65)) : (0));
                echo ");
    ";
            }
            // line 67
            echo "
  }

  %%SELECTOR%% .breakdance-popup .breakdance-popup-close-button:hover {
     background-color: ";
            // line 71
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 71), "background_hover", [], "any", false, false, false, 71);
            echo ";    
     color: ";
            // line 72
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 72), "color_hover", [], "any", false, false, false, 72);
            echo ";
  }

";
        }
        // line 76
        echo "
";
        // line 78
        echo "

    %%SELECTOR%% {
        ";
        // line 81
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 82
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 82), "wrapper", [], "any", false, false, false, 82), "background", [], "any", false, false, false, 82), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 83
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 83), "wrapper", [], "any", false, false, false, 83), "layout", [], "any", false, false, false, 83), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 84
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 84), "wrapper", [], "any", false, false, false, 84), "size", [], "any", false, false, false, 84), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 85
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "wrapper", [], "any", false, false, false, 85), "typography", [], "any", false, false, false, 85),         // line 86
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 87
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 87), "wrapper", [], "any", false, false, false, 87), "spacing", [], "any", false, false, false, 87), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 88
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 88), "wrapper", [], "any", false, false, false, 88), "borders", [], "any", false, false, false, 88), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 89
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 89), "wrapper", [], "any", false, false, false, 89), "effects", [], "any", false, false, false, 89)], 81, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 93
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 94
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 94), "wrapper_hover", [], "any", false, false, false, 94), "background", [], "any", false, false, false, 94), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 95
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 95), "wrapper_hover", [], "any", false, false, false, 95), "layout", [], "any", false, false, false, 95), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 96
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 96), "wrapper_hover", [], "any", false, false, false, 96), "size", [], "any", false, false, false, 96), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper_hover", [], "any", false, false, false, 97), "typography", [], "any", false, false, false, 97),         // line 98
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper_hover", [], "any", false, false, false, 99), "spacing", [], "any", false, false, false, 99), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 100
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 100), "wrapper_hover", [], "any", false, false, false, 100), "borders", [], "any", false, false, false, 100), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 101
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 101), "wrapper_hover", [], "any", false, false, false, 101), "effects", [], "any", false, false, false, 101)], 93, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 105
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 105), "css", [], "any", false, false, false, 105);
        echo "


";
        // line 108
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 108), "hide", [], "any", false, false, false, 108)))) {
            // line 109
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 110
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 110), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 110), "hide", [], "any", false, false, false, 110))) {
                    // line 111
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 113
                    if (($context["isBuilder"] ?? null)) {
                        // line 114
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 114), "builder_preview", [], "any", false, false, false, 114) == "hide")) {
                            // line 115
                            echo "                            display: none;
                        ";
                        } else {
                            // line 117
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 120
                        echo "                    ";
                    } else {
                        // line 121
                        echo "                        display: none;
                    ";
                    }
                    // line 123
                    echo "                }
            }
        ";
                }
                // line 126
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 128
        echo "
";
    }

    public function getTemplateName()
    {
        return "f97bc1a2199ee31e5e0c341515c5ed08ae493004";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 128,  314 => 126,  309 => 123,  305 => 121,  302 => 120,  297 => 117,  293 => 115,  290 => 114,  288 => 113,  282 => 111,  279 => 110,  274 => 109,  272 => 108,  266 => 105,  259 => 101,  258 => 100,  257 => 99,  256 => 98,  255 => 97,  254 => 96,  253 => 95,  252 => 94,  251 => 93,  244 => 89,  243 => 88,  242 => 87,  241 => 86,  240 => 85,  239 => 84,  238 => 83,  237 => 82,  236 => 81,  231 => 78,  228 => 76,  221 => 72,  217 => 71,  211 => 67,  203 => 65,  201 => 64,  198 => 63,  193 => 61,  189 => 60,  185 => 59,  181 => 58,  177 => 57,  173 => 56,  168 => 55,  166 => 54,  163 => 53,  159 => 51,  157 => 50,  152 => 48,  147 => 46,  143 => 44,  141 => 43,  136 => 41,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  111 => 31,  107 => 30,  102 => 29,  96 => 27,  93 => 26,  87 => 24,  85 => 23,  78 => 19,  75 => 18,  70 => 15,  68 => 14,  64 => 12,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f97bc1a2199ee31e5e0c341515c5ed08ae493004", "");
    }
}
