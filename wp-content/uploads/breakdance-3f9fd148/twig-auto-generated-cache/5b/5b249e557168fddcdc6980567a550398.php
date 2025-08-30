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

/* d1af305719368db5d0ca80618bef92eb713aa20a */
class __TwigTemplate_f519bc334f5f8b17a1323b0be545f382 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "d1af305719368db5d0ca80618bef92eb713aa20a", 2)->unwrap();
        // line 3
        echo "%%SELECTOR%% {
  ";
        // line 4
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 4), "height", [], "any", false, false, false, 4) == "custom")) {
            // line 5
            echo "    --bde-basic-slider-height: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 5), "custom_height", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
            echo ";
  ";
        }
        // line 7
        echo "  ";
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 7), "height", [], "any", false, false, false, 7) == "viewport")) {
            // line 8
            echo "    --bde-basic-slider-height: 100vh;
  ";
        }
        // line 10
        echo "
  width: ";
        // line 11
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 11), "width", [], "any", false, false, false, 11), "style", [], "any", false, false, false, 11);
        echo ";
  ";
        // line 12
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_margin_y", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 12), "container", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-basicslider__slide {
  ";
        // line 16
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_padding_all", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 16), "padding", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
        echo "

  ";
        // line 18
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 18), "align_children", [], "any", false, false, false, 18) == "left")) {
            // line 19
            echo "  \tjustify-content: flex-start;
  \ttext-align: left;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 21
($context["design"] ?? null), "slide", [], "any", false, false, false, 21), "align_children", [], "any", false, false, false, 21) == "center")) {
            // line 22
            echo "  \tjustify-content: center;
  \ttext-align: center;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 24
($context["design"] ?? null), "slide", [], "any", false, false, false, 24), "align_children", [], "any", false, false, false, 24) == "right")) {
            // line 25
            echo "  \tjustify-content: flex-end;
   \ttext-align: right;
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 29), "vertical_align_children", [], "any", false, false, false, 29) == "top")) {
            // line 30
            echo "    align-items: flex-start;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 31
($context["design"] ?? null), "slide", [], "any", false, false, false, 31), "vertical_align_children", [], "any", false, false, false, 31) == "middle")) {
            // line 32
            echo " \talign-items: center;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 33
($context["design"] ?? null), "slide", [], "any", false, false, false, 33), "vertical_align_children", [], "any", false, false, false, 33) == "bottom")) {
            // line 34
            echo "  \talign-items: flex-end;
  ";
        }
        // line 36
        echo "}

%%SELECTOR%% .bde-basicslider__content {
  max-width: ";
        // line 39
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slide", [], "any", false, false, false, 39), "content_width", [], "any", false, false, false, 39), "style", [], "any", false, false, false, 39);
        echo ";
}

%%SELECTOR%% .bde-basicslider__title {
  ";
        // line 43
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), ($context["globalSettings"] ?? null)], 43, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 44
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 44), "after_title", [], "any", false, false, false, 44), "style", [], "any", false, false, false, 44);
        echo ";
}

%%SELECTOR%% .bde-basicslider__text {
  ";
        // line 48
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 48), "text", [], "any", false, false, false, 48), ($context["globalSettings"] ?? null)], 48, $context, $this->getSourceContext());
        echo "
  margin-bottom: ";
        // line 49
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 49), "after_text", [], "any", false, false, false, 49), "style", [], "any", false, false, false, 49);
        echo ";
}

";
        // line 52
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_AtomV1SwiperCss", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 52), "%%SELECTOR%%", ($context["globalSettings"] ?? null), ($context["isBaseBreakpoint"] ?? null)], 52, $context, $this->getSourceContext());
        echo "
";
        // line 53
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonCss", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 53), "bde-basicslider__button", "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 53, $context, $this->getSourceContext());
        echo "

";
        // line 56
        echo "

    %%SELECTOR%% {
        ";
        // line 59
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper", [], "any", false, false, false, 60), "background", [], "any", false, false, false, 60), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper", [], "any", false, false, false, 61), "layout", [], "any", false, false, false, 61), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 62), "wrapper", [], "any", false, false, false, 62), "size", [], "any", false, false, false, 62), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper", [], "any", false, false, false, 63), "typography", [], "any", false, false, false, 63),         // line 64
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper", [], "any", false, false, false, 65), "spacing", [], "any", false, false, false, 65), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 66
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 66), "wrapper", [], "any", false, false, false, 66), "borders", [], "any", false, false, false, 66), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper", [], "any", false, false, false, 67), "effects", [], "any", false, false, false, 67)], 59, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 71
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 72
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 72), "wrapper_hover", [], "any", false, false, false, 72), "background", [], "any", false, false, false, 72), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 73
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 73), "wrapper_hover", [], "any", false, false, false, 73), "layout", [], "any", false, false, false, 73), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 74
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 74), "wrapper_hover", [], "any", false, false, false, 74), "size", [], "any", false, false, false, 74), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 75
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "wrapper_hover", [], "any", false, false, false, 75), "typography", [], "any", false, false, false, 75),         // line 76
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 77
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "wrapper_hover", [], "any", false, false, false, 77), "spacing", [], "any", false, false, false, 77), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 78
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 78), "wrapper_hover", [], "any", false, false, false, 78), "borders", [], "any", false, false, false, 78), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 79
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 79), "wrapper_hover", [], "any", false, false, false, 79), "effects", [], "any", false, false, false, 79)], 71, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 83
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 83), "css", [], "any", false, false, false, 83);
        echo "


";
        // line 86
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 86), "hide", [], "any", false, false, false, 86)))) {
            // line 87
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 88
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 88), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 88), "hide", [], "any", false, false, false, 88))) {
                    // line 89
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 91
                    if (($context["isBuilder"] ?? null)) {
                        // line 92
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 92), "builder_preview", [], "any", false, false, false, 92) == "hide")) {
                            // line 93
                            echo "                            display: none;
                        ";
                        } else {
                            // line 95
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 98
                        echo "                    ";
                    } else {
                        // line 99
                        echo "                        display: none;
                    ";
                    }
                    // line 101
                    echo "                }
            }
        ";
                }
                // line 104
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 106
        echo "
";
    }

    public function getTemplateName()
    {
        return "d1af305719368db5d0ca80618bef92eb713aa20a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 106,  242 => 104,  237 => 101,  233 => 99,  230 => 98,  225 => 95,  221 => 93,  218 => 92,  216 => 91,  210 => 89,  207 => 88,  202 => 87,  200 => 86,  194 => 83,  187 => 79,  186 => 78,  185 => 77,  184 => 76,  183 => 75,  182 => 74,  181 => 73,  180 => 72,  179 => 71,  172 => 67,  171 => 66,  170 => 65,  169 => 64,  168 => 63,  167 => 62,  166 => 61,  165 => 60,  164 => 59,  159 => 56,  154 => 53,  150 => 52,  144 => 49,  140 => 48,  133 => 44,  129 => 43,  122 => 39,  117 => 36,  113 => 34,  111 => 33,  108 => 32,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  93 => 25,  91 => 24,  87 => 22,  85 => 21,  81 => 19,  79 => 18,  74 => 16,  67 => 12,  63 => 11,  60 => 10,  56 => 8,  53 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "d1af305719368db5d0ca80618bef92eb713aa20a", "");
    }
}
