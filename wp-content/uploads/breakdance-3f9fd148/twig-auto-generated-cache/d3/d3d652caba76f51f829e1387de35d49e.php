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

/* 9e73ae5d9d9217880b339fcf816907bcce77dd74 */
class __TwigTemplate_5456541a10bf665cbea1af65e32cfb05 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "9e73ae5d9d9217880b339fcf816907bcce77dd74", 2)->unwrap();
        // line 3
        echo "%%SELECTOR%% {
  width: ";
        // line 4
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 4), "width", [], "any", false, false, false, 4), "style", [], "any", false, false, false, 4);
        echo ";
  ";
        // line 5
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_margin_y", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul {
 gap: ";
        // line 9
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 9), "space_between", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9);
        echo ";
}

";
        // line 12
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 12), "stack", [], "any", false, false, false, 12) == "vertical")) {
            // line 13
            echo "  %%SELECTOR%% ul {
    ";
            // line 14
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 14), "alignment_when_vertical", [], "any", false, false, false, 14) == "left")) {
                // line 15
                echo "      align-items: flex-start;
    ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 16
($context["design"] ?? null), "layout", [], "any", false, false, false, 16), "alignment_when_vertical", [], "any", false, false, false, 16) == "center")) {
                // line 17
                echo "      align-items: center;
    ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 18
($context["design"] ?? null), "layout", [], "any", false, false, false, 18), "alignment_when_vertical", [], "any", false, false, false, 18) == "right")) {
                // line 19
                echo "      align-items: flex-end;
    ";
            }
            // line 21
            echo "  }
";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 22
($context["design"] ?? null), "layout", [], "any", false, false, false, 22), "stack", [], "any", false, false, false, 22) == "horizontal")) {
            // line 23
            echo "  %%SELECTOR%% ul {
    flex-direction: row;
    justify-content: ";
            // line 25
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 25), "horizontal_align", [], "any", true, true, false, 25)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 25), "horizontal_align", [], "any", false, false, false, 25), "left")) : ("left"));
            echo ";
    flex-wrap: wrap;
    align-items: center;
  }
";
        }
        // line 30
        echo "

";
        // line 32
        if ((($context["breakpoint"] ?? null) == \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 32), "stack_vertical_at", [], "any", false, false, false, 32))) {
            // line 33
            echo "  %%SELECTOR%% ul {
    flex-direction: column;
    align-items: flex-start;
    ";
            // line 36
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 36), "alignment_when_vertical", [], "any", false, false, false, 36) == "left")) {
                // line 37
                echo "    align-items: flex-start;
    ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 38
($context["design"] ?? null), "layout", [], "any", false, false, false, 38), "alignment_when_vertical", [], "any", false, false, false, 38) == "center")) {
                // line 39
                echo "    align-items: center;
    ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 40
($context["design"] ?? null), "layout", [], "any", false, false, false, 40), "alignment_when_vertical", [], "any", false, false, false, 40) == "right")) {
                // line 41
                echo "    align-items: flex-end;
    ";
            }
            // line 43
            echo "  }
";
        }
        // line 45
        echo "


/* icons */
%%SELECTOR%% li .bde-icon-list__icon {
  font-size: ";
        // line 50
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 50), "size", [], "any", false, false, false, 50), "style", [], "any", false, false, false, 50);
        echo ";
}

%%SELECTOR%% li .bde-icon-list__icon > svg {
  ";
        // line 54
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 54), "nudge", [], "any", false, false, false, 54), "vertical", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54) || \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 54), "nudge", [], "any", false, false, false, 54), "horizontal", [], "any", false, false, false, 54), "style", [], "any", false, false, false, 54))) {
            // line 55
            echo "    transform: translate(";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 55), "nudge", [], "any", false, true, false, 55), "horizontal", [], "any", false, true, false, 55), "style", [], "any", true, true, false, 55)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 55), "nudge", [], "any", false, true, false, 55), "horizontal", [], "any", false, true, false, 55), "style", [], "any", false, false, false, 55), "0")) : ("0"));
            echo ", ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 55), "nudge", [], "any", false, true, false, 55), "vertical", [], "any", false, true, false, 55), "style", [], "any", true, true, false, 55)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 55), "nudge", [], "any", false, true, false, 55), "vertical", [], "any", false, true, false, 55), "style", [], "any", false, false, false, 55), "0")) : ("0"));
            echo ");
  ";
        }
        // line 57
        echo "}

%%SELECTOR%% li .bde-icon-list__icon {
  color: ";
        // line 60
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 60), "color", [], "any", false, false, false, 60);
        echo ";
  ";
        // line 61
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 61), "background", [], "any", false, false, false, 61)) {
            // line 62
            echo "    padding: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 62), "padding", [], "any", false, false, false, 62), "style", [], "any", false, false, false, 62);
            echo ";
    border-radius: ";
            // line 63
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 63), "radius", [], "any", false, false, false, 63), "style", [], "any", false, false, false, 63);
            echo ";
    ";
            // line 64
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 64), "fill", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 66
        echo "}

%%SELECTOR%% li:hover .bde-icon-list__icon {
  color: ";
        // line 69
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 69), "color_hover", [], "any", false, false, false, 69);
        echo ";
  ";
        // line 70
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 70), "background", [], "any", false, false, false, 70)) {
            // line 71
            echo "    ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 71), "fill_hover", [], "any", false, false, false, 71)], 71, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 73
        echo "}

/* list */

%%SELECTOR%% li .bde-icon-list__text {
  ";
        // line 78
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 78), ($context["globalSettings"] ?? null)], 78, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li:hover .bde-icon-list__text {
  ";
        // line 82
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 82)], 82, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul li .bde-icon-list__item-wrapper {
  gap: ";
        // line 86
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 86), "text_indent", [], "any", false, false, false, 86), "style", [], "any", false, false, false, 86);
        echo ";
  align-items: ";
        // line 87
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 87), "position", [], "any", false, false, false, 87);
        echo ";
}



";
        // line 93
        echo "

    %%SELECTOR%% {
        ";
        // line 96
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper", [], "any", false, false, false, 97), "background", [], "any", false, false, false, 97), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper", [], "any", false, false, false, 98), "layout", [], "any", false, false, false, 98), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper", [], "any", false, false, false, 99), "size", [], "any", false, false, false, 99), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 100
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 100), "wrapper", [], "any", false, false, false, 100), "typography", [], "any", false, false, false, 100),         // line 101
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper", [], "any", false, false, false, 102), "spacing", [], "any", false, false, false, 102), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper", [], "any", false, false, false, 103), "borders", [], "any", false, false, false, 103), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 104
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 104), "wrapper", [], "any", false, false, false, 104), "effects", [], "any", false, false, false, 104)], 96, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 108
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 109
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 109), "wrapper_hover", [], "any", false, false, false, 109), "background", [], "any", false, false, false, 109), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 110
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 110), "wrapper_hover", [], "any", false, false, false, 110), "layout", [], "any", false, false, false, 110), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 111
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 111), "wrapper_hover", [], "any", false, false, false, 111), "size", [], "any", false, false, false, 111), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 112
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 112), "wrapper_hover", [], "any", false, false, false, 112), "typography", [], "any", false, false, false, 112),         // line 113
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 114
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 114), "wrapper_hover", [], "any", false, false, false, 114), "spacing", [], "any", false, false, false, 114), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 115
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 115), "wrapper_hover", [], "any", false, false, false, 115), "borders", [], "any", false, false, false, 115), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 116
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 116), "wrapper_hover", [], "any", false, false, false, 116), "effects", [], "any", false, false, false, 116)], 108, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 120
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 120), "css", [], "any", false, false, false, 120);
        echo "


";
        // line 123
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 123), "hide", [], "any", false, false, false, 123)))) {
            // line 124
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 125
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 125), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 125), "hide", [], "any", false, false, false, 125))) {
                    // line 126
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 128
                    if (($context["isBuilder"] ?? null)) {
                        // line 129
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 129), "builder_preview", [], "any", false, false, false, 129) == "hide")) {
                            // line 130
                            echo "                            display: none;
                        ";
                        } else {
                            // line 132
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 135
                        echo "                    ";
                    } else {
                        // line 136
                        echo "                        display: none;
                    ";
                    }
                    // line 138
                    echo "                }
            }
        ";
                }
                // line 141
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 143
        echo "
";
    }

    public function getTemplateName()
    {
        return "9e73ae5d9d9217880b339fcf816907bcce77dd74";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 143,  313 => 141,  308 => 138,  304 => 136,  301 => 135,  296 => 132,  292 => 130,  289 => 129,  287 => 128,  281 => 126,  278 => 125,  273 => 124,  271 => 123,  265 => 120,  258 => 116,  257 => 115,  256 => 114,  255 => 113,  254 => 112,  253 => 111,  252 => 110,  251 => 109,  250 => 108,  243 => 104,  242 => 103,  241 => 102,  240 => 101,  239 => 100,  238 => 99,  237 => 98,  236 => 97,  235 => 96,  230 => 93,  222 => 87,  218 => 86,  211 => 82,  204 => 78,  197 => 73,  191 => 71,  189 => 70,  185 => 69,  180 => 66,  175 => 64,  171 => 63,  166 => 62,  164 => 61,  160 => 60,  155 => 57,  147 => 55,  145 => 54,  138 => 50,  131 => 45,  127 => 43,  123 => 41,  121 => 40,  118 => 39,  116 => 38,  113 => 37,  111 => 36,  106 => 33,  104 => 32,  100 => 30,  92 => 25,  88 => 23,  86 => 22,  83 => 21,  79 => 19,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  67 => 14,  64 => 13,  62 => 12,  56 => 9,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "9e73ae5d9d9217880b339fcf816907bcce77dd74", "");
    }
}
