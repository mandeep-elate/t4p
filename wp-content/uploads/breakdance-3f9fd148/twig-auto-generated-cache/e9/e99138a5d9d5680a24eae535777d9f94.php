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

/* 7cd71394ef8941393018d7cdad42fe4971369057 */
class __TwigTemplate_46a69c000755b94d71567a883d5a2656 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "7cd71394ef8941393018d7cdad42fe4971369057", 2)->unwrap();
        // line 3
        $context["disableAt"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, true, false, 3), "disable_desktop_styles_at", [], "any", true, true, false, 3)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, true, false, 3), "disable_desktop_styles_at", [], "any", false, false, false, 3), "breakpoint_tablet_landscape")) : ("breakpoint_tablet_landscape"));
        // line 4
        $context["breakpointWidth"] = Breakdance\PluginsAPI\getBreakpointMaxWidth(($context["disableAt"] ?? null));
        // line 5
        $context["needsBreakpoint"] = ((($context["disableAt"] ?? null) != "breakpoint_base") && (($context["disableAt"] ?? null) != "never"));
        // line 6
        echo "
";
        // line 7
        if (($context["needsBreakpoint"] ?? null)) {
            // line 8
            echo "  @media (min-width: ";
            echo (($context["breakpointWidth"] ?? null) + 1);
            echo "px) {
";
        }
        // line 10
        echo "    ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownCss", ["%%SELECTOR%%", ($context["design"] ?? null)], 10, $context, $this->getSourceContext());
        echo "

    ";
        // line 13
        echo "    ";
        $context["sections"] = [0 => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "columns", [], "any", false, false, false, 13), 1 => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "columns_2", [], "any", false, false, false, 13)];
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["sections"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 16
            echo "      ";
            $context["sectionIndex"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16);
            // line 17
            echo "
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable($context["section"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["columns"]) {
                // line 19
                echo "        ";
                $context["columnIndex"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19);
                // line 20
                echo "
        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["columns"], "links", [], "any", false, false, false, 21));
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
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 22
                    echo "          %%SELECTOR%% .breakdance-dropdown-section:nth-child(";
                    echo ($context["sectionIndex"] ?? null);
                    echo ") .breakdance-dropdown-column:nth-child(";
                    echo ($context["columnIndex"] ?? null);
                    echo ") .breakdance-dropdown-item:nth-child(";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22);
                    echo ") {
            ";
                    // line 23
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownLinkGraphicCss", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["link"], "advanced", [], "any", false, false, false, 23), "graphic", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        // line 29
        echo "
    ";
        // line 30
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1MenuColumnCss", ["%%SELECTOR%% .breakdance-dropdown", \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "columns", [], "any", false, false, false, 30), ($context["globalSettings"] ?? null)], 30, $context, $this->getSourceContext());
        echo "
    ";
        // line 31
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1MenuDropdownLinkCss", ["%%SELECTOR%% .breakdance-dropdown", \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "links", [], "any", false, false, false, 31), ($context["globalSettings"] ?? null)], 31, $context, $this->getSourceContext());
        echo "
    ";
        // line 32
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1MenuAdditionalSectionCss", ["%%SELECTOR%% .breakdance-dropdown", \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "additional_section", [], "any", false, false, false, 32), ($context["globalSettings"] ?? null)], 32, $context, $this->getSourceContext());
        echo "
";
        // line 33
        if (($context["needsBreakpoint"] ?? null)) {
            // line 34
            echo "  }
";
        }
        // line 36
        echo "
";
        // line 38
        echo "

    %%SELECTOR%% {
        ";
        // line 41
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 42
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 42), "wrapper", [], "any", false, false, false, 42), "background", [], "any", false, false, false, 42), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 43
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 43), "wrapper", [], "any", false, false, false, 43), "layout", [], "any", false, false, false, 43), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 44
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 44), "wrapper", [], "any", false, false, false, 44), "size", [], "any", false, false, false, 44), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 45
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 45), "wrapper", [], "any", false, false, false, 45), "typography", [], "any", false, false, false, 45),         // line 46
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 47
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 47), "wrapper", [], "any", false, false, false, 47), "spacing", [], "any", false, false, false, 47), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 48
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 48), "wrapper", [], "any", false, false, false, 48), "borders", [], "any", false, false, false, 48), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 49
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 49), "wrapper", [], "any", false, false, false, 49), "effects", [], "any", false, false, false, 49)], 41, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 53
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 54
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 54), "wrapper_hover", [], "any", false, false, false, 54), "background", [], "any", false, false, false, 54), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 55
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 55), "wrapper_hover", [], "any", false, false, false, 55), "layout", [], "any", false, false, false, 55), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 56
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 56), "wrapper_hover", [], "any", false, false, false, 56), "size", [], "any", false, false, false, 56), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 57
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 57), "wrapper_hover", [], "any", false, false, false, 57), "typography", [], "any", false, false, false, 57),         // line 58
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 59
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 59), "wrapper_hover", [], "any", false, false, false, 59), "spacing", [], "any", false, false, false, 59), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 60
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 60), "wrapper_hover", [], "any", false, false, false, 60), "borders", [], "any", false, false, false, 60), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 61
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 61), "wrapper_hover", [], "any", false, false, false, 61), "effects", [], "any", false, false, false, 61)], 53, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 65
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 65), "css", [], "any", false, false, false, 65);
        echo "


";
        // line 68
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 68), "hide", [], "any", false, false, false, 68)))) {
            // line 69
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 70
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 70), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 70), "hide", [], "any", false, false, false, 70))) {
                    // line 71
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 73
                    if (($context["isBuilder"] ?? null)) {
                        // line 74
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 74), "builder_preview", [], "any", false, false, false, 74) == "hide")) {
                            // line 75
                            echo "                            display: none;
                        ";
                        } else {
                            // line 77
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 80
                        echo "                    ";
                    } else {
                        // line 81
                        echo "                        display: none;
                    ";
                    }
                    // line 83
                    echo "                }
            }
        ";
                }
                // line 86
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 88
        echo "
";
    }

    public function getTemplateName()
    {
        return "7cd71394ef8941393018d7cdad42fe4971369057";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 88,  297 => 86,  292 => 83,  288 => 81,  285 => 80,  280 => 77,  276 => 75,  273 => 74,  271 => 73,  265 => 71,  262 => 70,  257 => 69,  255 => 68,  249 => 65,  242 => 61,  241 => 60,  240 => 59,  239 => 58,  238 => 57,  237 => 56,  236 => 55,  235 => 54,  234 => 53,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  221 => 43,  220 => 42,  219 => 41,  214 => 38,  211 => 36,  207 => 34,  205 => 33,  201 => 32,  197 => 31,  193 => 30,  190 => 29,  188 => 28,  174 => 27,  160 => 26,  143 => 23,  134 => 22,  117 => 21,  114 => 20,  111 => 19,  94 => 18,  91 => 17,  88 => 16,  71 => 15,  68 => 14,  65 => 13,  59 => 10,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "7cd71394ef8941393018d7cdad42fe4971369057", "");
    }
}
