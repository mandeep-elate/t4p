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

/* fef56d84ff6d50445718cb4d21a96557345d2c42 */
class __TwigTemplate_c1779da905efd159ad6ea445d0d7970c extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "fef56d84ff6d50445718cb4d21a96557345d2c42", 2)->unwrap();
        // line 4
        echo "%%SELECTOR%% .section-container {
  ";
        // line 5
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_simpleLayout", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 5), ($context["breakpoint"] ?? null)], 5, $context, $this->getSourceContext());
        echo "
}

";
        // line 8
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_layoutV2", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout_v2", [], "any", false, false, false, 8), ($context["breakpoint"] ?? null), ($context["isBaseBreakpoint"] ?? null), "%%SELECTOR%% .section-container"], 8, $context, $this->getSourceContext());
        echo "

";
        // line 10
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_fancyBackgroundCss", ["%%SELECTOR%%", \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 10), ($context["breakpoint"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 10), "viewport", [], "any", false, false, false, 10), false, false], 10, $context, $this->getSourceContext());
        echo "

";
        // line 13
        echo "%%SELECTOR%% * {
  ";
        // line 14
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14)) {
            // line 15
            echo "    color: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 15), "text", [], "any", false, false, false, 15);
            echo ";
  ";
        }
        // line 17
        echo "  ";
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 17), "brand", [], "any", false, false, false, 17)) {
            // line 18
            echo "    --bde-brand-primary-color: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 18), "brand", [], "any", false, false, false, 18);
            echo ";
  ";
        }
        // line 20
        echo "}

";
        // line 22
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 22), "headings", [], "any", false, false, false, 22)) {
            // line 23
            echo "  %%SELECTOR%% h1, %%SELECTOR%% h2, %%SELECTOR%% h3, %%SELECTOR%% h4, %%SELECTOR%% h5, %%SELECTOR%% h6 {
    color: ";
            // line 24
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 24), "headings", [], "any", false, false, false, 24);
            echo ";
  }
";
        }
        // line 27
        echo "
";
        // line 28
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 28), "link", [], "any", false, false, false, 28)) {
            // line 29
            echo "  %%SELECTOR%% a {
    color: ";
            // line 30
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 30), "link", [], "any", false, false, false, 30);
            echo ";
  }
";
        }
        // line 33
        echo "
";
        // line 34
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 34), "link_hover", [], "any", false, false, false, 34)) {
            // line 35
            echo "  %%SELECTOR%% a:hover {
    color: ";
            // line 36
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "text_colors", [], "any", false, false, false, 36), "link_hover", [], "any", false, false, false, 36);
            echo ";
  }
";
        }
        // line 39
        echo "
";
        // line 41
        echo "%%SELECTOR%% .section-container {
  ";
        // line 42
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 42), "height", [], "any", false, false, false, 42) == "viewport")) {
            // line 43
            echo "    height: 100vh;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 44
($context["design"] ?? null), "size", [], "any", false, false, false, 44), "height", [], "any", false, false, false, 44) == "custom")) {
            // line 45
            echo "    height: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 45), "custom_height", [], "any", false, false, false, 45), "style", [], "any", false, false, false, 45);
            echo ";
    min-height: ";
            // line 46
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 46), "min_height", [], "any", false, false, false, 46), "style", [], "any", false, false, false, 46);
            echo ";
  ";
        }
        // line 48
        echo "}

%%SELECTOR%% .section-container {
  ";
        // line 51
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 51), "width", [], "any", false, false, false, 51) == "full")) {
            // line 52
            echo "    --bde-section-width: 100%;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 53
($context["design"] ?? null), "size", [], "any", false, false, false, 53), "width", [], "any", false, false, false, 53) == "custom")) {
            // line 54
            echo "    --bde-section-width: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 54), "container_width", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54);
            echo ";
  ";
        }
        // line 56
        echo "}

";
        // line 59
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 59), "padding", [], "any", false, false, false, 59)) {
            // line 60
            echo "  %%SELECTOR%% .section-container {
    ";
            // line 61
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_complex", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 61), "padding", [], "any", false, false, false, 61), "padding"], 61, $context, $this->getSourceContext());
            echo "
  }
";
        }
        // line 64
        echo "
%%SELECTOR%% {
  margin-top: ";
        // line 66
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 66), "margin_top", [], "any", false, false, false, 66), "style", [], "any", false, false, false, 66);
        echo ";
  margin-bottom: ";
        // line 67
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 67), "margin_bottom", [], "any", false, false, false, 67), "style", [], "any", false, false, false, 67);
        echo ";
}

";
        // line 71
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 71))) {
            // line 72
            echo "  %%SELECTOR%% {
    ";
            // line 73
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
            echo "
  }
";
        }
        // line 76
        echo "
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "dividers", [], "any", false, false, false, 78), "shape_dividers_section", [], "any", false, false, false, 78), "dividers", [], "any", false, false, false, 78));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["divider"]) {
            // line 79
            echo "  ";
            $context["transforms"] = "";
            // line 80
            echo "  %%SELECTOR%% .section-shape-divider-wrapper--";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 80);
            echo " .section-shape-divider svg {
    color: ";
            // line 81
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "color", [], "any", false, false, false, 81);
            echo ";
    width:  ";
            // line 82
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "width", [], "any", false, false, false, 82), "style", [], "any", false, false, false, 82);
            echo ";
    height: ";
            // line 83
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "height", [], "any", false, false, false, 83), "style", [], "any", false, false, false, 83);
            echo ";
    ";
            // line 84
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "position", [], "any", false, false, false, 84) == "bottom")) {
                // line 85
                echo "      bottom: 0;
      top: auto;
    ";
            }
            // line 88
            echo "    ";
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "position", [], "any", false, false, false, 88) == "bottom")) {
                // line 89
                echo "      ";
                $context["transforms"] = "scaleY(1)";
                // line 90
                echo "    ";
            } else {
                // line 91
                echo "      ";
                $context["transforms"] = "scaleY(-1)";
                // line 92
                echo "    ";
            }
            // line 93
            echo "    ";
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "flip_horizontally", [], "any", false, false, false, 93) == "yes")) {
                // line 94
                echo "      ";
                $context["transforms"] = (($context["transforms"] ?? null) . " scaleX(-1)");
                // line 95
                echo "    ";
            }
            // line 96
            echo "    ";
            if (($context["transforms"] ?? null)) {
                // line 97
                echo "      transform: ";
                echo ($context["transforms"] ?? null);
                echo ";
    ";
            }
            // line 99
            echo "    ";
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "bring_to_front", [], "any", false, false, false, 99)) {
                // line 100
                echo "      z-index: 1;
    ";
            }
            // line 102
            echo "  }

  ";
            // line 105
            echo "  %%SELECTOR%% .section-shape-divider-wrapper--";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105);
            echo " .section-shape-divider path,
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 106
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106);
            echo " .section-shape-divider rect, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 107
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107);
            echo " .section-shape-divider ellipse, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 108
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108);
            echo " .section-shape-divider polyline, 
  %%SELECTOR%% .section-shape-divider-wrapper--";
            // line 109
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109);
            echo " .section-shape-divider polygon {
    color: ";
            // line 110
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["divider"], "color", [], "any", false, false, false, 110);
            echo ";
  }
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "
";
        // line 114
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 114), "slideshow_settings", [], "any", false, false, false, 114), "ken_burns", [], "any", false, false, false, 114))) {
            // line 115
            echo "  %%SELECTOR%% .swiper-slide .swiper-slide-item {
    ";
            // line 116
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 116), "slideshow_settings", [], "any", false, false, false, 116), "ken_burns", [], "any", false, false, false, 116) == "out")) {
                // line 117
                echo "      transform: scale(";
                echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 117), "slideshow_settings", [], "any", false, true, false, 117), "zoom", [], "any", true, true, false, 117) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 117), "slideshow_settings", [], "any", false, true, false, 117), "zoom", [], "any", false, false, false, 117)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 117), "slideshow_settings", [], "any", false, true, false, 117), "zoom", [], "any", false, false, false, 117)) : (1.5));
                echo ");
    ";
            } else {
                // line 119
                echo "      transform: scale(1);
    ";
            }
            // line 121
            echo "    transition: 5s ease-in;
    transform-origin: 0% ";
            // line 122
            echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 122), "slideshow_settings", [], "any", false, true, false, 122), "origin_", [], "any", false, true, false, 122), "style", [], "any", true, true, false, 122) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 122), "slideshow_settings", [], "any", false, true, false, 122), "origin_", [], "any", false, true, false, 122), "style", [], "any", false, false, false, 122)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 122), "slideshow_settings", [], "any", false, true, false, 122), "origin_", [], "any", false, true, false, 122), "style", [], "any", false, false, false, 122)) : ("100%"));
            echo ";
  }

  %%SELECTOR%% .swiper-slide.swiper-slide-active .swiper-slide-item {
    ";
            // line 126
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 126), "slideshow_settings", [], "any", false, false, false, 126), "ken_burns", [], "any", false, false, false, 126) == "out")) {
                // line 127
                echo "      transform: scale(1);
    ";
            } else {
                // line 129
                echo "      transform: scale(";
                echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 129), "slideshow_settings", [], "any", false, true, false, 129), "zoom", [], "any", true, true, false, 129) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 129), "slideshow_settings", [], "any", false, true, false, 129), "zoom", [], "any", false, false, false, 129)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 129), "slideshow_settings", [], "any", false, true, false, 129), "zoom", [], "any", false, false, false, 129)) : (1.5));
                echo ");
    ";
            }
            // line 131
            echo "  }
";
        }
        // line 134
        echo "

    %%SELECTOR%% {
        ";
        // line 137
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 138
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 138), "wrapper", [], "any", false, false, false, 138), "background", [], "any", false, false, false, 138), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 139
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 139), "wrapper", [], "any", false, false, false, 139), "layout", [], "any", false, false, false, 139), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 140
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 140), "wrapper", [], "any", false, false, false, 140), "size", [], "any", false, false, false, 140), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 141
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 141), "wrapper", [], "any", false, false, false, 141), "typography", [], "any", false, false, false, 141),         // line 142
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 143
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 143), "wrapper", [], "any", false, false, false, 143), "spacing", [], "any", false, false, false, 143), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 144
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 144), "wrapper", [], "any", false, false, false, 144), "borders", [], "any", false, false, false, 144), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 145
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 145), "wrapper", [], "any", false, false, false, 145), "effects", [], "any", false, false, false, 145)], 137, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 149
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 150
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 150), "wrapper_hover", [], "any", false, false, false, 150), "background", [], "any", false, false, false, 150), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 151
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 151), "wrapper_hover", [], "any", false, false, false, 151), "layout", [], "any", false, false, false, 151), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 152
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 152), "wrapper_hover", [], "any", false, false, false, 152), "size", [], "any", false, false, false, 152), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 153
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 153), "wrapper_hover", [], "any", false, false, false, 153), "typography", [], "any", false, false, false, 153),         // line 154
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 155
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 155), "wrapper_hover", [], "any", false, false, false, 155), "spacing", [], "any", false, false, false, 155), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 156
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 156), "wrapper_hover", [], "any", false, false, false, 156), "borders", [], "any", false, false, false, 156), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 157
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 157), "wrapper_hover", [], "any", false, false, false, 157), "effects", [], "any", false, false, false, 157)], 149, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 161
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 161), "css", [], "any", false, false, false, 161);
        echo "


";
        // line 164
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 164), "hide", [], "any", false, false, false, 164)))) {
            // line 165
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 166
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 166), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 166), "hide", [], "any", false, false, false, 166))) {
                    // line 167
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 169
                    if (($context["isBuilder"] ?? null)) {
                        // line 170
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 170), "builder_preview", [], "any", false, false, false, 170) == "hide")) {
                            // line 171
                            echo "                            display: none;
                        ";
                        } else {
                            // line 173
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 176
                        echo "                    ";
                    } else {
                        // line 177
                        echo "                        display: none;
                    ";
                    }
                    // line 179
                    echo "                }
            }
        ";
                }
                // line 182
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 184
        echo "
";
    }

    public function getTemplateName()
    {
        return "fef56d84ff6d50445718cb4d21a96557345d2c42";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 184,  463 => 182,  458 => 179,  454 => 177,  451 => 176,  446 => 173,  442 => 171,  439 => 170,  437 => 169,  431 => 167,  428 => 166,  423 => 165,  421 => 164,  415 => 161,  408 => 157,  407 => 156,  406 => 155,  405 => 154,  404 => 153,  403 => 152,  402 => 151,  401 => 150,  400 => 149,  393 => 145,  392 => 144,  391 => 143,  390 => 142,  389 => 141,  388 => 140,  387 => 139,  386 => 138,  385 => 137,  380 => 134,  376 => 131,  370 => 129,  366 => 127,  364 => 126,  357 => 122,  354 => 121,  350 => 119,  344 => 117,  342 => 116,  339 => 115,  337 => 114,  334 => 113,  317 => 110,  313 => 109,  309 => 108,  305 => 107,  301 => 106,  296 => 105,  292 => 102,  288 => 100,  285 => 99,  279 => 97,  276 => 96,  273 => 95,  270 => 94,  267 => 93,  264 => 92,  261 => 91,  258 => 90,  255 => 89,  252 => 88,  247 => 85,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  228 => 80,  225 => 79,  208 => 78,  205 => 76,  199 => 73,  196 => 72,  194 => 71,  188 => 67,  184 => 66,  180 => 64,  174 => 61,  171 => 60,  169 => 59,  165 => 56,  159 => 54,  157 => 53,  154 => 52,  152 => 51,  147 => 48,  142 => 46,  137 => 45,  135 => 44,  132 => 43,  130 => 42,  127 => 41,  124 => 39,  118 => 36,  115 => 35,  113 => 34,  110 => 33,  104 => 30,  101 => 29,  99 => 28,  96 => 27,  90 => 24,  87 => 23,  85 => 22,  81 => 20,  75 => 18,  72 => 17,  66 => 15,  64 => 14,  61 => 13,  56 => 10,  51 => 8,  45 => 5,  42 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fef56d84ff6d50445718cb4d21a96557345d2c42", "");
    }
}
