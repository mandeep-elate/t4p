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

/* 142016ed71a6dfa30ea5f9959404068e17119e3f */
class __TwigTemplate_577272e8410dbc7d9317c08c2e2a16fd extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "142016ed71a6dfa30ea5f9959404068e17119e3f", 2)->unwrap();
        // line 3
        echo "%%SELECTOR%% {
  ";
        // line 4
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_margin_y", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "
  list-style-position: ";
        // line 5
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 5), "marker_position", [], "any", false, false, false, 5);
        echo ";
  
  ";
        // line 7
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, true, false, 7), "marker_type", [], "any", true, true, false, 7)) {
            // line 8
            echo "
  ";
            // line 9
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 9), "marker_type", [], "any", false, false, false, 9) == "square")) {
                // line 10
                echo "    list-style-type: square;  
  ";
            }
            // line 12
            echo "
  ";
            // line 13
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 13), "marker_type", [], "any", false, false, false, 13) == "none")) {
                // line 14
                echo "    list-style-type: none;  
  ";
            }
            // line 16
            echo "  
  ";
            // line 17
            if (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 17), "marker_type", [], "any", false, false, false, 17) == "emoji") && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 17), "emoji", [], "any", false, false, false, 17))) {
                // line 18
                echo "    list-style-type: '";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 18), "emoji", [], "any", false, false, false, 18);
                echo "';  
  ";
            }
            // line 20
            echo "
  ";
            // line 21
            if (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 21), "marker_type", [], "any", false, false, false, 21) == "custom") && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 21), "custom", [], "any", false, false, false, 21))) {
                // line 22
                echo "    list-style-type: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 22), "custom", [], "any", false, false, false, 22);
                echo ";
  ";
            }
            // line 24
            echo "  
  ";
        }
        // line 26
        echo "
  width: ";
        // line 27
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 27), "width", [], "any", false, false, false, 27), "style", [], "any", false, false, false, 27);
        echo ";
  padding-inline-start: ";
        // line 28
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 28), "padding_inline_start", [], "any", false, false, false, 28), "list", [], "any", false, false, false, 28), "style", [], "any", false, false, false, 28);
        echo ";
}

%%SELECTOR%% li::marker {
  color: ";
        // line 32
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 32), "marker_color", [], "any", false, false, false, 32);
        echo ";
}

%%SELECTOR%% li.bde-basic-list-item-with-link:hover::marker {
  color: ";
        // line 36
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 36), "marker_color_hover", [], "any", false, false, false, 36);
        echo ";
}

%%SELECTOR%% li {
  padding-inline-start: ";
        // line 40
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 40), "padding_inline_start", [], "any", false, false, false, 40), "item", [], "any", false, false, false, 40), "style", [], "any", false, false, false, 40);
        echo ";
  ";
        // line 41
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 41), ($context["globalSettings"] ?? null)], 41, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li.bde-basic-list-item-with-link, %%SELECTOR%% li > a {
  ";
        // line 45
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 45), ($context["globalSettings"] ?? null)], 45, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li.bde-basic-list-item-with-link:hover, %%SELECTOR%% li > a:hover {
   ";
        // line 49
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li:not(:last-child) {
  margin-bottom: ";
        // line 53
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 53), "below_item", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
        echo ";
}


";
        // line 58
        echo "

    %%SELECTOR%% {
        ";
        // line 61
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 62
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 62), "wrapper", [], "any", false, false, false, 62), "background", [], "any", false, false, false, 62), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 63
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 63), "wrapper", [], "any", false, false, false, 63), "layout", [], "any", false, false, false, 63), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 64
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 64), "wrapper", [], "any", false, false, false, 64), "size", [], "any", false, false, false, 64), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 65
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "wrapper", [], "any", false, false, false, 65), "typography", [], "any", false, false, false, 65),         // line 66
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 67
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 67), "wrapper", [], "any", false, false, false, 67), "spacing", [], "any", false, false, false, 67), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 68
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 68), "wrapper", [], "any", false, false, false, 68), "borders", [], "any", false, false, false, 68), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 69
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 69), "wrapper", [], "any", false, false, false, 69), "effects", [], "any", false, false, false, 69)], 61, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 73
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 74
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 74), "wrapper_hover", [], "any", false, false, false, 74), "background", [], "any", false, false, false, 74), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 75
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 75), "wrapper_hover", [], "any", false, false, false, 75), "layout", [], "any", false, false, false, 75), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 76
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 76), "wrapper_hover", [], "any", false, false, false, 76), "size", [], "any", false, false, false, 76), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 77
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 77), "wrapper_hover", [], "any", false, false, false, 77), "typography", [], "any", false, false, false, 77),         // line 78
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 79
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 79), "wrapper_hover", [], "any", false, false, false, 79), "spacing", [], "any", false, false, false, 79), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 80
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 80), "wrapper_hover", [], "any", false, false, false, 80), "borders", [], "any", false, false, false, 80), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 81
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 81), "wrapper_hover", [], "any", false, false, false, 81), "effects", [], "any", false, false, false, 81)], 73, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 85
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 85), "css", [], "any", false, false, false, 85);
        echo "


";
        // line 88
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 88), "hide", [], "any", false, false, false, 88)))) {
            // line 89
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 90
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 90), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 90), "hide", [], "any", false, false, false, 90))) {
                    // line 91
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 93
                    if (($context["isBuilder"] ?? null)) {
                        // line 94
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 94), "builder_preview", [], "any", false, false, false, 94) == "hide")) {
                            // line 95
                            echo "                            display: none;
                        ";
                        } else {
                            // line 97
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 100
                        echo "                    ";
                    } else {
                        // line 101
                        echo "                        display: none;
                    ";
                    }
                    // line 103
                    echo "                }
            }
        ";
                }
                // line 106
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 108
        echo "
";
    }

    public function getTemplateName()
    {
        return "142016ed71a6dfa30ea5f9959404068e17119e3f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 108,  243 => 106,  238 => 103,  234 => 101,  231 => 100,  226 => 97,  222 => 95,  219 => 94,  217 => 93,  211 => 91,  208 => 90,  203 => 89,  201 => 88,  195 => 85,  188 => 81,  187 => 80,  186 => 79,  185 => 78,  184 => 77,  183 => 76,  182 => 75,  181 => 74,  180 => 73,  173 => 69,  172 => 68,  171 => 67,  170 => 66,  169 => 65,  168 => 64,  167 => 63,  166 => 62,  165 => 61,  160 => 58,  153 => 53,  146 => 49,  139 => 45,  132 => 41,  128 => 40,  121 => 36,  114 => 32,  107 => 28,  103 => 27,  100 => 26,  96 => 24,  90 => 22,  88 => 21,  85 => 20,  79 => 18,  77 => 17,  74 => 16,  70 => 14,  68 => 13,  65 => 12,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "142016ed71a6dfa30ea5f9959404068e17119e3f", "");
    }
}
