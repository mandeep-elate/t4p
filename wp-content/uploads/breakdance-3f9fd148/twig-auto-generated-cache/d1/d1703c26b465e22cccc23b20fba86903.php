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

/* 6a1d74993e82c5b8ec5a13aae3c76117a4c9878d */
class __TwigTemplate_1963218db88228dc2fd0db844d721fde extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "6a1d74993e82c5b8ec5a13aae3c76117a4c9878d", 2)->unwrap();
        // line 3
        if ((($context["isBuilder"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, false, false, 3), "disable_builder_preview_mode", [], "any", false, false, false, 3))) {
            // line 4
            echo "body.single-breakdance_header,
body.single-breakdance_template,
body.single-breakdance_block {
    background-image: linear-gradient(135deg, #d2d2d2 25%, transparent 25%), linear-gradient(225deg, #d2d2d2 25%, transparent 25%), linear-gradient(45deg, #d2d2d2 25%, transparent 25%), linear-gradient(315deg, #d2d2d2 25%, #e5e5e5 25%);
    background-position: 50px 0, 50px 0, 0 0, 0 0;
    background-size: 100px 100px;
    background-repeat: repeat;
    min-height: 5000px;
}

.bde-header-builder-marker {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: inline-block;
  color: #fff;
  font-weight: bold;
  padding: 10px;
  border-radius: 6px;
  background-color: #f44336;
}

.bde-header-builder-marker:before {
  content: '';
  position: absolute;
  top: calc(50% + 1px);
  left: 50%;
  z-index: -1;
  width: 100vw;
  height: 2px;
  transform: translateX(-50%) translateY(-50%);
  border-top: 2px dashed #f44336;
}
";
        }
        // line 38
        echo "
";
        // line 39
        if ((($context["isBuilder"] ?? null) && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, false, false, 39), "disable_builder_preview_mode", [], "any", false, false, false, 39))) {
            // line 40
            echo ".bde-header-builder-marker {
  display: none;
}
";
        }
        // line 44
        echo "
%%SELECTOR%% {
  ";
        // line 46
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 46), "color", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
        echo "
  --bde-header-sticky-offset: ";
        // line 47
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 47), "offset", [], "any", false, false, false, 47), "style", [], "any", false, false, false, 47);
        echo ";
  --bde-header-sticky-duration: ";
        // line 48
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 48), "scroll_behavior", [], "any", false, false, false, 48), "duration", [], "any", false, false, false, 48), "style", [], "any", false, false, false, 48);
        echo ";
  --bde-z-index-header-sticky: ";
        // line 49
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 49), "z_index", [], "any", false, false, false, 49);
        echo ";
  --bde-z-index-header-overlay: ";
        // line 50
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 50), "z_index", [], "any", false, false, false, 50);
        echo ";
  
  ";
        // line 52
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 52), "width", [], "any", false, false, false, 52) == "full")) {
            // line 53
            echo "    --bde-header-width: 100%;
  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 54
($context["design"] ?? null), "size", [], "any", false, false, false, 54), "width", [], "any", false, false, false, 54) == "custom")) {
            // line 55
            echo "    --bde-header-width: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 55), "custom_width", [], "any", false, false, false, 55), "style", [], "any", false, false, false, 55);
            echo ";
  ";
        }
        // line 57
        echo "  
  box-shadow: ";
        // line 58
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 58), "shadow", [], "any", false, false, false, 58), "style", [], "any", false, false, false, 58);
        echo ";
}

%%SELECTOR%% .bde-header-builder__header-builder-border-top {
  height: ";
        // line 62
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 62), "top", [], "any", false, false, false, 62), "width", [], "any", false, false, false, 62), "style", [], "any", false, false, false, 62);
        echo ";
  ";
        // line 63
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 63), "top", [], "any", false, false, false, 63), "fill", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-header-builder__header-builder-border-bottom {
  height: ";
        // line 67
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 67), "bottom", [], "any", false, false, false, 67), "width", [], "any", false, false, false, 67), "style", [], "any", false, false, false, 67);
        echo ";
  ";
        // line 68
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "borders", [], "any", false, false, false, 68), "bottom", [], "any", false, false, false, 68), "fill", [], "any", false, false, false, 68)], 68, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-header-builder__container {
  gap: ";
        // line 72
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 72), "gap", [], "any", false, false, false, 72), "style", [], "any", false, false, false, 72);
        echo ";
  ";
        // line 73
        if ((($context["breakpoint"] ?? null) == ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 73), "stack_vertically_at", [], "any", true, true, false, 73)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 73), "stack_vertically_at", [], "any", false, false, false, 73), ($context["firstResponsiveBreakpointId"] ?? null))) : (($context["firstResponsiveBreakpointId"] ?? null))))) {
            // line 74
            echo "    flex-direction: column;
  ";
        }
        // line 76
        echo "  min-height: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "size", [], "any", false, false, false, 76), "min_height", [], "any", false, false, false, 76), "style", [], "any", false, false, false, 76);
        echo ";
  ";
        // line 77
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_complex", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 77), "padding", [], "any", false, false, false, 77), "padding"], 77, $context, $this->getSourceContext());
        echo "
}


";
        // line 81
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 81), "enable", [], "any", false, false, false, 81) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "overlay", [], "any", false, false, false, 81), "keep_style", [], "any", false, false, false, 81))) {
            // line 82
            echo "  %%SELECTOR%%.bde-header-builder--overlay {
    background-color: transparent;
    box-shadow: none;
  }

  %%SELECTOR%%.bde-header-builder--overlay .bde-header-builder__header-builder-border-top {
    background-color: transparent;
  }

  %%SELECTOR%%.bde-header-builder--overlay .bde-header-builder__header-builder-border-bottom {
    background-color: transparent;
  }

";
        }
        // line 96
        echo "


/* for css priority, sticky styles should come after overlay */

%%SELECTOR%%.bde-header-builder--sticky-styles {
  ";
        // line 102
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 102), "style", [], "any", false, false, false, 102), "background", [], "any", false, false, false, 102)], 102, $context, $this->getSourceContext());
        echo "
  ";
        // line 103
        if ((($context["breakpoint"] ?? null) == \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 103), "disable_at", [], "any", false, false, false, 103))) {
            // line 104
            echo "    display: none;
  ";
        }
        // line 106
        echo "  box-shadow: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 106), "style", [], "any", false, false, false, 106), "borders", [], "any", false, false, false, 106), "shadow", [], "any", false, false, false, 106), "style", [], "any", false, false, false, 106);
        echo ";
  --bde-header-sticky-offset: ";
        // line 107
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 107), "scroll_behavior", [], "any", false, false, false, 107), "offset_after_scroll", [], "any", false, false, false, 107), "style", [], "any", false, false, false, 107);
        echo ";
}

%%SELECTOR%%.bde-header-builder--sticky-styles .bde-header-builder__container {
  min-height: ";
        // line 111
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 111), "style", [], "any", false, false, false, 111), "min_height", [], "any", false, false, false, 111), "style", [], "any", false, false, false, 111);
        echo ";
}

%%SELECTOR%%.bde-header-builder--sticky-styles .bde-header-builder__header-builder-border-top {
  height: ";
        // line 115
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 115), "style", [], "any", false, false, false, 115), "borders", [], "any", false, false, false, 115), "top", [], "any", false, false, false, 115), "width", [], "any", false, false, false, 115), "style", [], "any", false, false, false, 115);
        echo ";
  ";
        // line 116
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 116), "style", [], "any", false, false, false, 116), "borders", [], "any", false, false, false, 116), "top", [], "any", false, false, false, 116), "fill", [], "any", false, false, false, 116)], 116, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%.bde-header-builder--sticky-styles .bde-header-builder__header-builder-border-bottom {
  height: ";
        // line 120
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 120), "style", [], "any", false, false, false, 120), "borders", [], "any", false, false, false, 120), "bottom", [], "any", false, false, false, 120), "width", [], "any", false, false, false, 120), "style", [], "any", false, false, false, 120);
        echo ";
  ";
        // line 121
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 121), "style", [], "any", false, false, false, 121), "borders", [], "any", false, false, false, 121), "bottom", [], "any", false, false, false, 121), "fill", [], "any", false, false, false, 121)], 121, $context, $this->getSourceContext());
        echo "
}

";
        // line 124
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 124), "enable", [], "any", false, false, false, 124)) {
            // line 125
            echo "  body {
    ";
            // line 126
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 126), "position", [], "any", false, false, false, 126) == "bottom")) {
                // line 127
                echo "      margin-bottom: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 127), "page_bottom_margin", [], "any", false, false, false, 127), "style", [], "any", false, false, false, 127);
                echo ";
    ";
            } else {
                // line 129
                echo "      margin-top: ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 129), "page_top_margin", [], "any", false, false, false, 129), "style", [], "any", false, false, false, 129);
                echo ";
    ";
            }
            // line 131
            echo "  }
";
        }
        // line 133
        echo "
";
        // line 135
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "sticky", [], "any", false, false, false, 135), "enable", [], "any", false, false, false, 135)) {
            // line 136
            echo "  ";
            // line 147
            echo "  @media screen and (max-width: 600px) {
    #wpadminbar {
      display: none;
    }
    .breakdance .bde-header-builder {
      --wp-admin--admin-bar--height: 0px;
    }
  }
";
        }
        // line 156
        echo "
";
        // line 158
        echo "

    %%SELECTOR%% {
        ";
        // line 161
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 162
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 162), "wrapper", [], "any", false, false, false, 162), "background", [], "any", false, false, false, 162), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 163
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 163), "wrapper", [], "any", false, false, false, 163), "layout", [], "any", false, false, false, 163), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 164
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 164), "wrapper", [], "any", false, false, false, 164), "size", [], "any", false, false, false, 164), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 165
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 165), "wrapper", [], "any", false, false, false, 165), "typography", [], "any", false, false, false, 165),         // line 166
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 167
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 167), "wrapper", [], "any", false, false, false, 167), "spacing", [], "any", false, false, false, 167), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 168
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 168), "wrapper", [], "any", false, false, false, 168), "borders", [], "any", false, false, false, 168), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 169
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 169), "wrapper", [], "any", false, false, false, 169), "effects", [], "any", false, false, false, 169)], 161, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 173
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 174
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 174), "wrapper_hover", [], "any", false, false, false, 174), "background", [], "any", false, false, false, 174), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 175
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 175), "wrapper_hover", [], "any", false, false, false, 175), "layout", [], "any", false, false, false, 175), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 176
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 176), "wrapper_hover", [], "any", false, false, false, 176), "size", [], "any", false, false, false, 176), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 177
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 177), "wrapper_hover", [], "any", false, false, false, 177), "typography", [], "any", false, false, false, 177),         // line 178
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 179
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 179), "wrapper_hover", [], "any", false, false, false, 179), "spacing", [], "any", false, false, false, 179), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 180
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 180), "wrapper_hover", [], "any", false, false, false, 180), "borders", [], "any", false, false, false, 180), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 181
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 181), "wrapper_hover", [], "any", false, false, false, 181), "effects", [], "any", false, false, false, 181)], 173, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 185
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 185), "css", [], "any", false, false, false, 185);
        echo "


";
        // line 188
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 188), "hide", [], "any", false, false, false, 188)))) {
            // line 189
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 190
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 190), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 190), "hide", [], "any", false, false, false, 190))) {
                    // line 191
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 193
                    if (($context["isBuilder"] ?? null)) {
                        // line 194
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 194), "builder_preview", [], "any", false, false, false, 194) == "hide")) {
                            // line 195
                            echo "                            display: none;
                        ";
                        } else {
                            // line 197
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 200
                        echo "                    ";
                    } else {
                        // line 201
                        echo "                        display: none;
                    ";
                    }
                    // line 203
                    echo "                }
            }
        ";
                }
                // line 206
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 208
        echo "
";
    }

    public function getTemplateName()
    {
        return "6a1d74993e82c5b8ec5a13aae3c76117a4c9878d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 208,  386 => 206,  381 => 203,  377 => 201,  374 => 200,  369 => 197,  365 => 195,  362 => 194,  360 => 193,  354 => 191,  351 => 190,  346 => 189,  344 => 188,  338 => 185,  331 => 181,  330 => 180,  329 => 179,  328 => 178,  327 => 177,  326 => 176,  325 => 175,  324 => 174,  323 => 173,  316 => 169,  315 => 168,  314 => 167,  313 => 166,  312 => 165,  311 => 164,  310 => 163,  309 => 162,  308 => 161,  303 => 158,  300 => 156,  289 => 147,  287 => 136,  285 => 135,  282 => 133,  278 => 131,  272 => 129,  266 => 127,  264 => 126,  261 => 125,  259 => 124,  253 => 121,  249 => 120,  242 => 116,  238 => 115,  231 => 111,  224 => 107,  219 => 106,  215 => 104,  213 => 103,  209 => 102,  201 => 96,  185 => 82,  183 => 81,  176 => 77,  171 => 76,  167 => 74,  165 => 73,  161 => 72,  154 => 68,  150 => 67,  143 => 63,  139 => 62,  132 => 58,  129 => 57,  123 => 55,  121 => 54,  118 => 53,  116 => 52,  111 => 50,  107 => 49,  103 => 48,  99 => 47,  95 => 46,  91 => 44,  85 => 40,  83 => 39,  80 => 38,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "6a1d74993e82c5b8ec5a13aae3c76117a4c9878d", "");
    }
}
