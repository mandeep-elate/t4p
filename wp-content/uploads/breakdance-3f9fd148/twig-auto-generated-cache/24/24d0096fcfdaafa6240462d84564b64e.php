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

/* 8c8f1ab57663e6bd01fa206d85b2d88469895cce */
class __TwigTemplate_d6a4642e97a2a5dd2edda7ba2be2bdff extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "8c8f1ab57663e6bd01fa206d85b2d88469895cce", 2)->unwrap();
        // line 3
        echo "%%SELECTOR%% {
  ";
        // line 4
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_margin_y", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "
  max-width: ";
        // line 5
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 5), "max_width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  width: ";
        // line 6
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
}

%%SELECTOR%% .breakdance-image-container {
  box-shadow: ";
        // line 10
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 10), "shadow", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10);
        echo ";
  ";
        // line 11
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_border_radius", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 11), "radius", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .breakdance-image-clip {
  ";
        // line 15
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders_without_shadows", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "
}

/* Actual Image */

%%SELECTOR%% .breakdance-image-object {
  ";
        // line 21
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 21), "width", [], "any", false, false, false, 21), "style", [], "any", false, false, false, 21)) {
            // line 22
            echo "    width: 100%;
    ";
            // line 23
            if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 23), "height", [], "any", false, false, false, 23), "style", [], "any", false, false, false, 23)) {
                // line 24
                echo "      height: auto;
    ";
            }
            // line 26
            echo "  ";
        }
        // line 27
        echo "
  ";
        // line 28
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 28), "height", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28) || \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 28), "aspect_ratio", [], "any", false, false, false, 28))) {
            // line 29
            echo "    object-fit: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 29), "object_fit", [], "any", false, false, false, 29);
            echo ";
    ";
            // line 30
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 30), "object_position", [], "any", false, false, false, 30)) {
                // line 31
                echo "      object-position: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 31), "object_position", [], "any", false, false, false, 31), "x", [], "any", false, false, false, 31);
                echo "% ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 31), "object_position", [], "any", false, false, false, 31), "y", [], "any", false, false, false, 31);
                echo "%;
    ";
            }
            // line 33
            echo "  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 35), "height", [], "any", false, false, false, 35), "style", [], "any", false, false, false, 35)) {
            // line 36
            echo "    height: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 36), "height", [], "any", false, false, false, 36), "style", [], "any", false, false, false, 36);
            echo ";

    ";
            // line 38
            if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 38), "width", [], "any", false, false, false, 38), "style", [], "any", false, false, false, 38)) {
                // line 39
                echo "      width: auto;
    ";
            }
            // line 41
            echo "  ";
        }
        // line 42
        echo "
  ";
        // line 44
        echo "
  ";
        // line 45
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 45), "zoom", [], "any", false, false, false, 45)) {
            // line 46
            echo "    transform: scale(";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 46), "zoom", [], "any", false, false, false, 46), "number", [], "any", false, false, false, 46) / 100) + 1);
            echo ") translateZ(0);
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 49), "focus_point", [], "any", false, false, false, 49)) {
            // line 50
            echo "    transform-origin: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 50), "focus_point", [], "any", false, false, false, 50), "x", [], "any", false, false, false, 50);
            echo "% ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 50), "focus_point", [], "any", false, false, false, 50), "y", [], "any", false, false, false, 50);
            echo "%;
  ";
        }
        // line 52
        echo "
  ";
        // line 54
        echo "  opacity: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 54), "opacity", [], "any", false, false, false, 54);
        echo ";
  transition-duration: ";
        // line 55
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 55), "transition_duration", [], "any", false, false, false, 55), "style", [], "any", false, false, false, 55);
        echo ";
  mix-blend-mode: ";
        // line 56
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 56), "blend_mode", [], "any", false, false, false, 56);
        echo ";
  ";
        // line 58
        echo "  ";
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 58), "aspect_ratio", [], "any", false, false, false, 58)) {
            // line 59
            echo "    ";
            if ((((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 59), "aspect_ratio", [], "any", false, false, false, 59) == "custom") && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 59), "custom_ratio", [], "any", false, false, false, 59), "width", [], "any", false, false, false, 59)) && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 59), "custom_ratio", [], "any", false, false, false, 59), "height", [], "any", false, false, false, 59))) {
                // line 60
                echo "      aspect-ratio: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 60), "custom_ratio", [], "any", false, false, false, 60), "width", [], "any", false, false, false, 60);
                echo " / ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 60), "custom_ratio", [], "any", false, false, false, 60), "height", [], "any", false, false, false, 60);
                echo ";
    ";
            } else {
                // line 62
                echo "      aspect-ratio: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 62), "aspect_ratio", [], "any", false, false, false, 62);
                echo ";
    ";
            }
            // line 64
            echo "    object-fit: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 64), "object_fit", [], "any", false, false, false, 64);
            echo ";
  ";
        }
        // line 66
        echo "  ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_filters", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 66), "filters", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%:hover .breakdance-image-object {
  ";
        // line 71
        echo "  ";
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 71), "zoom_hover", [], "any", false, false, false, 71)) {
            // line 72
            echo "    transform: scale(";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 72), "zoom_hover", [], "any", false, false, false, 72), "number", [], "any", false, false, false, 72) / 100) + 1);
            echo ") translateZ(0);
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 75), "focus_point_hover", [], "any", false, false, false, 75)) {
            // line 76
            echo "    transform-origin: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 76), "focus_point_hover", [], "any", false, false, false, 76), "x", [], "any", false, false, false, 76);
            echo "% ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "image", [], "any", false, false, false, 76), "focus_point_hover", [], "any", false, false, false, 76), "y", [], "any", false, false, false, 76);
            echo "%;
  ";
        }
        // line 78
        echo "
  ";
        // line 80
        echo "  opacity: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 80), "opacity_hover", [], "any", false, false, false, 80);
        echo ";
  ";
        // line 81
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_filtersHover", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 81), "filters", [], "any", false, false, false, 81)], 81, $context, $this->getSourceContext());
        echo "
}

/* Caption */

%%SELECTOR%% .breakdance-image__caption {
  ";
        // line 87
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 87), "typography", [], "any", false, false, false, 87), ($context["globalSettings"] ?? null)], 87, $context, $this->getSourceContext());
        echo "
  ";
        // line 88
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 88), "background", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
        echo "
  ";
        // line 89
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 89), "borders", [], "any", false, false, false, 89)], 89, $context, $this->getSourceContext());
        echo "
  ";
        // line 90
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_padding_all", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 90), "spacing", [], "any", false, false, false, 90)], 90, $context, $this->getSourceContext());
        echo "
}

/* Mask */

%%SELECTOR%% .breakdance-image__mask {
  ";
        // line 96
        $context["mask"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 96), "mask", [], "any", false, false, false, 96);
        // line 97
        echo "
  -webkit-mask-repeat: ";
        // line 98
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "repeat", [], "any", false, false, false, 98);
        echo ";
  mask-repeat: ";
        // line 99
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "repeat", [], "any", false, false, false, 99);
        echo ";

  ";
        // line 101
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 101)) {
            // line 102
            echo "    -webkit-mask-position: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 102), "x", [], "any", false, false, false, 102);
            echo "% ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 102), "y", [], "any", false, false, false, 102);
            echo "%;
    mask-position: ";
            // line 103
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 103), "x", [], "any", false, false, false, 103);
            echo "% ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "position", [], "any", false, false, false, 103), "y", [], "any", false, false, false, 103);
            echo "%;
  ";
        }
        // line 105
        echo "
  ";
        // line 106
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "size", [], "any", false, false, false, 106) == "custom")) {
            // line 107
            echo "    -webkit-mask-size: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_size", [], "any", false, false, false, 107), "style", [], "any", false, false, false, 107);
            echo ";
    mask-size: ";
            // line 108
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_size", [], "any", false, false, false, 108), "style", [], "any", false, false, false, 108);
            echo ";
  ";
        } else {
            // line 110
            echo "    -webkit-mask-size: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "size", [], "any", false, false, false, 110);
            echo ";
    mask-size: ";
            // line 111
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "size", [], "any", false, false, false, 111);
            echo ";
  ";
        }
        // line 113
        echo "
  ";
        // line 114
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "shape", [], "any", false, false, false, 114) == "custom")) {
            // line 115
            echo "    -webkit-mask-image: url(";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_shape", [], "any", false, false, false, 115), "url", [], "any", false, false, false, 115);
            echo ") !important;
    mask-image: url(";
            // line 116
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["mask"] ?? null), "custom_shape", [], "any", false, false, false, 116), "url", [], "any", false, false, false, 116);
            echo ") !important;
  ";
        } elseif (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 117
($context["mask"] ?? null), "shape", [], "any", false, false, false, 117)) {
            // line 118
            echo "    ";
            $context["shape"] = (((Breakdance\PluginsAPI\getBreakdanceElementsPluginUrl() . "elements/image/masks/") . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 118), "mask", [], "any", false, false, false, 118), "shape", [], "any", false, false, false, 118)) . ".svg");
            // line 119
            echo "    -webkit-mask-image: url('";
            echo ($context["shape"] ?? null);
            echo "');
    mask-image: url('";
            // line 120
            echo ($context["shape"] ?? null);
            echo "');
  ";
        }
        // line 122
        echo "}

/* Lightbox */
";
        // line 125
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1LightboxCss", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "lightbox", [], "any", false, false, false, 125)], 125, $context, $this->getSourceContext());
        echo "

";
        // line 128
        echo "

    %%SELECTOR%% {
        ";
        // line 131
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 132
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 132), "wrapper", [], "any", false, false, false, 132), "background", [], "any", false, false, false, 132), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 133
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 133), "wrapper", [], "any", false, false, false, 133), "layout", [], "any", false, false, false, 133), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 134
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 134), "wrapper", [], "any", false, false, false, 134), "size", [], "any", false, false, false, 134), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 135
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 135), "wrapper", [], "any", false, false, false, 135), "typography", [], "any", false, false, false, 135),         // line 136
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 137
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 137), "wrapper", [], "any", false, false, false, 137), "spacing", [], "any", false, false, false, 137), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 138
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 138), "wrapper", [], "any", false, false, false, 138), "borders", [], "any", false, false, false, 138), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 139
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 139), "wrapper", [], "any", false, false, false, 139), "effects", [], "any", false, false, false, 139)], 131, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 143
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 144
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 144), "wrapper_hover", [], "any", false, false, false, 144), "background", [], "any", false, false, false, 144), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 145
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 145), "wrapper_hover", [], "any", false, false, false, 145), "layout", [], "any", false, false, false, 145), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 146
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 146), "wrapper_hover", [], "any", false, false, false, 146), "size", [], "any", false, false, false, 146), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 147
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 147), "wrapper_hover", [], "any", false, false, false, 147), "typography", [], "any", false, false, false, 147),         // line 148
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 149
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 149), "wrapper_hover", [], "any", false, false, false, 149), "spacing", [], "any", false, false, false, 149), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 150
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 150), "wrapper_hover", [], "any", false, false, false, 150), "borders", [], "any", false, false, false, 150), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 151
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 151), "wrapper_hover", [], "any", false, false, false, 151), "effects", [], "any", false, false, false, 151)], 143, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 155
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 155), "css", [], "any", false, false, false, 155);
        echo "


";
        // line 158
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 158), "hide", [], "any", false, false, false, 158)))) {
            // line 159
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 160
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 160), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 160), "hide", [], "any", false, false, false, 160))) {
                    // line 161
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 163
                    if (($context["isBuilder"] ?? null)) {
                        // line 164
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 164), "builder_preview", [], "any", false, false, false, 164) == "hide")) {
                            // line 165
                            echo "                            display: none;
                        ";
                        } else {
                            // line 167
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 170
                        echo "                    ";
                    } else {
                        // line 171
                        echo "                        display: none;
                    ";
                    }
                    // line 173
                    echo "                }
            }
        ";
                }
                // line 176
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 178
        echo "
";
    }

    public function getTemplateName()
    {
        return "8c8f1ab57663e6bd01fa206d85b2d88469895cce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 178,  451 => 176,  446 => 173,  442 => 171,  439 => 170,  434 => 167,  430 => 165,  427 => 164,  425 => 163,  419 => 161,  416 => 160,  411 => 159,  409 => 158,  403 => 155,  396 => 151,  395 => 150,  394 => 149,  393 => 148,  392 => 147,  391 => 146,  390 => 145,  389 => 144,  388 => 143,  381 => 139,  380 => 138,  379 => 137,  378 => 136,  377 => 135,  376 => 134,  375 => 133,  374 => 132,  373 => 131,  368 => 128,  363 => 125,  358 => 122,  353 => 120,  348 => 119,  345 => 118,  343 => 117,  339 => 116,  334 => 115,  332 => 114,  329 => 113,  324 => 111,  319 => 110,  314 => 108,  309 => 107,  307 => 106,  304 => 105,  297 => 103,  290 => 102,  288 => 101,  283 => 99,  279 => 98,  276 => 97,  274 => 96,  265 => 90,  261 => 89,  257 => 88,  253 => 87,  244 => 81,  239 => 80,  236 => 78,  228 => 76,  226 => 75,  223 => 74,  217 => 72,  214 => 71,  206 => 66,  200 => 64,  194 => 62,  186 => 60,  183 => 59,  180 => 58,  176 => 56,  172 => 55,  167 => 54,  164 => 52,  156 => 50,  154 => 49,  151 => 48,  145 => 46,  143 => 45,  140 => 44,  137 => 42,  134 => 41,  130 => 39,  128 => 38,  122 => 36,  120 => 35,  117 => 34,  114 => 33,  106 => 31,  104 => 30,  99 => 29,  97 => 28,  94 => 27,  91 => 26,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  71 => 15,  64 => 11,  60 => 10,  53 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "8c8f1ab57663e6bd01fa206d85b2d88469895cce", "");
    }
}
