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

/* 60ae29cace1b93dc01c183ea9f65e2bbf29fb485 */
class __TwigTemplate_b40f50d2522488770068a539bb13d705 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "60ae29cace1b93dc01c183ea9f65e2bbf29fb485", 2)->unwrap();
        // line 3
        $context["s"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 3), "container", [], "any", false, false, false, 3), "padding", [], "any", false, false, false, 3);
        // line 4
        echo "
%%SELECTOR%% {
  --bde-mini-cart-padding-top: ";
        // line 6
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "padding", [], "any", false, false, false, 6), "top", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  --bde-mini-cart-padding-right: ";
        // line 7
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "padding", [], "any", false, false, false, 7), "right", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  --bde-mini-cart-padding-bottom: ";
        // line 8
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "padding", [], "any", false, false, false, 8), "bottom", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
  --bde-mini-cart-padding-left: ";
        // line 9
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["s"] ?? null), "padding", [], "any", false, false, false, 9), "left", [], "any", false, false, false, 9), "style", [], "any", false, false, false, 9);
        echo ";
}

/* Content / Link / Hide Count */
";
        // line 13
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "link", [], "any", false, false, false, 13), "hide_count", [], "any", false, false, false, 13)) {
            // line 14
            echo "  %%SELECTOR%% .bde-mini-cart-toggle__counter {
    display: none;
  }
";
        }
        // line 18
        echo "
/* Content / Link / Hide Count When Empty */
";
        // line 20
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 20), "link", [], "any", false, false, false, 20), "hide_count_when_empty", [], "any", false, false, false, 20)) {
            // line 21
            echo "  %%SELECTOR%% .bde-mini-cart-toggle__counter[data-count=\"0\"] {
    display: none;
  }
";
        }
        // line 25
        echo "
/* Content / Link / Hide Subtotal */
";
        // line 27
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 27), "link", [], "any", false, false, false, 27), "hide_subtotal", [], "any", false, false, false, 27)) {
            // line 28
            echo "  %%SELECTOR%% .bde-mini-cart-toggle__subtotal {
    display: none;
  }
";
        }
        // line 32
        echo "
/* Content / Link / Hide Subtotal When Empty */
";
        // line 34
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 34), "link", [], "any", false, false, false, 34), "hide_subtotal_when_empty", [], "any", false, false, false, 34)) {
            // line 35
            echo "  %%SELECTOR%% .bde-mini-cart-toggle__subtotal[data-count=\"0\"] {
    display: none;
  }
";
        }
        // line 39
        echo "
/* Content / Cart / Hide Subtotal */
";
        // line 41
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 41), "cart", [], "any", false, false, false, 41), "top_bar", [], "any", false, false, false, 41) == "enable")) {
            // line 42
            echo "  %%SELECTOR%% .bde-mini-cart-offcanvas-topbar {
    display: flex;
  }
";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 45
($context["content"] ?? null), "content", [], "any", false, false, false, 45), "cart", [], "any", false, false, false, 45), "top_bar", [], "any", false, false, false, 45) == "disable")) {
            // line 46
            echo "  %%SELECTOR%% .bde-mini-cart-offcanvas-topbar {
    display: none;
  }
";
        }
        // line 50
        echo "
";
        // line 51
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 51), "cart", [], "any", false, false, false, 51), "hide_quantity_input", [], "any", false, false, false, 51)) {
            // line 52
            echo "  %%SELECTOR%% .bde-mini-cart-quantity {
    display: none;
  }
  
  %%SELECTOR%% .bde-mini-cart-quantity-simple {
    display: flex;
  }
";
        }
        // line 60
        echo "
/* Link / Container / BG */
%%SELECTOR%% .bde-mini-cart-toggle {
\tbackground-color: ";
        // line 63
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 63), "container", [], "any", false, false, false, 63), "background", [], "any", false, false, false, 63);
        echo ";
}
%%SELECTOR%% .bde-mini-cart-toggle:hover {
  background-color: ";
        // line 66
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 66), "container", [], "any", false, false, false, 66), "background_hover", [], "any", false, false, false, 66);
        echo ";
}
/* Link / Container / Borders */
%%SELECTOR%% .bde-mini-cart-toggle {
  ";
        // line 70
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders_without_shadows", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 70), "container", [], "any", false, false, false, 70), "borders", [], "any", false, false, false, 70)], 70, $context, $this->getSourceContext());
        echo "
}
/* Link / Container / Border Hover Color */
%%SELECTOR%% .bde-mini-cart-toggle:hover {
  border-color: ";
        // line 74
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 74), "container", [], "any", false, false, false, 74), "borders_hover", [], "any", false, false, false, 74);
        echo ";
}
/* Link / Container / Shadows */
%%SELECTOR%% .bde-mini-cart-toggle {
  box-shadow: ";
        // line 78
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 78), "container", [], "any", false, false, false, 78), "shadow", [], "any", false, false, false, 78), "style", [], "any", false, false, false, 78);
        echo ";
}
%%SELECTOR%% .bde-mini-cart-toggle:hover {
  box-shadow: ";
        // line 81
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 81), "container", [], "any", false, false, false, 81), "shadow_hover", [], "any", false, false, false, 81), "style", [], "any", false, false, false, 81);
        echo ";
}
/* Link / Container / Padding */
%%SELECTOR%% .bde-mini-cart-toggle {
  ";
        // line 85
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_padding_all", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 85), "container", [], "any", false, false, false, 85), "padding", [], "any", false, false, false, 85)], 85, $context, $this->getSourceContext());
        echo "
}

/* Icon */
%%SELECTOR%% .bde-mini-cart-toggle__icon {
  background-color: ";
        // line 90
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 90), "icon", [], "any", false, false, false, 90), "color", [], "any", false, false, false, 90);
        echo ";
  width: ";
        // line 91
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 91), "icon", [], "any", false, false, false, 91), "size", [], "any", false, false, false, 91), "style", [], "any", false, false, false, 91);
        echo ";
  height: ";
        // line 92
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 92), "icon", [], "any", false, false, false, 92), "size", [], "any", false, false, false, 92), "style", [], "any", false, false, false, 92);
        echo ";
  ";
        // line 93
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 93), "icon", [], "any", false, false, false, 93), "icon", [], "any", false, false, false, 93)) {
            // line 94
            echo "  ";
            $context["linkIcon"] = Breakdance\PluginsAPI\data_uri(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 94), "icon", [], "any", false, false, false, 94), "icon", [], "any", false, false, false, 94), "svgCode", [], "any", false, false, false, 94), "image/svg+xml");
            // line 95
            echo "  mask: url(";
            echo ($context["linkIcon"] ?? null);
            echo ");
  -webkit-mask: url(";
            // line 96
            echo ($context["linkIcon"] ?? null);
            echo ");
  mask-size: contain;
  -webkit-mask-size: contain;
  mask-repeat: no-repeat;
  -webkit-mask-repeat: no-repeat;
  ";
        }
        // line 102
        echo "}
%%SELECTOR%% .bde-mini-cart-toggle:hover .bde-mini-cart-toggle__icon {
  background-color: ";
        // line 104
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 104), "icon", [], "any", false, false, false, 104), "color_hover", [], "any", false, false, false, 104);
        echo ";
}

/* Subtotal */
%%SELECTOR%% .bde-mini-cart-toggle__subtotal {
 margin-right: ";
        // line 109
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 109), "subtotal", [], "any", false, false, false, 109), "space_after", [], "any", false, false, false, 109), "style", [], "any", false, false, false, 109);
        echo ";
}
%%SELECTOR%% .bde-mini-cart-toggle__subtotal .woocommerce-Price-amount bdi {
   ";
        // line 112
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 112), "subtotal", [], "any", false, false, false, 112), "typography", [], "any", false, false, false, 112), ($context["globalSettings"] ?? null)], 112, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-toggle:hover .bde-mini-cart-toggle__subtotal .woocommerce-Price-amount bdi {
   ";
        // line 115
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 115), "subtotal", [], "any", false, false, false, 115), "typography", [], "any", false, false, false, 115)], 115, $context, $this->getSourceContext());
        echo "
}

/* Quantity */
%%SELECTOR%% .bde-mini-cart-toggle__counter {
  margin-left: ";
        // line 120
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 120), "quantity", [], "any", false, false, false, 120), "space_before", [], "any", false, false, false, 120), "style", [], "any", false, false, false, 120);
        echo ";
  background-color: ";
        // line 121
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 121), "quantity", [], "any", false, false, false, 121), "background", [], "any", false, false, false, 121);
        echo ";
   ";
        // line 122
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 122), "quantity", [], "any", false, false, false, 122), "typography", [], "any", false, false, false, 122), ($context["globalSettings"] ?? null)], 122, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-toggle:hover .bde-mini-cart-toggle__counter {
  background-color: ";
        // line 125
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 125), "quantity", [], "any", false, false, false, 125), "background_hover", [], "any", false, false, false, 125);
        echo ";
  ";
        // line 126
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 126), "quantity", [], "any", false, false, false, 126), "typography", [], "any", false, false, false, 126)], 126, $context, $this->getSourceContext());
        echo "
}

/* Overlap */
";
        // line 130
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, false, false, 130), "quantity", [], "any", false, false, false, 130), "overlap", [], "any", false, false, false, 130)) {
            // line 131
            echo "%%SELECTOR%% .bde-mini-cart-toggle__counter {
  position: absolute;
  top: ";
            // line 133
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, true, false, 133), "quantity", [], "any", false, true, false, 133), "top_nudge", [], "any", false, true, false, 133), "style", [], "any", true, true, false, 133)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, true, false, 133), "quantity", [], "any", false, true, false, 133), "top_nudge", [], "any", false, true, false, 133), "style", [], "any", false, false, false, 133), "2px")) : ("2px"));
            echo ";;
  right: ";
            // line 134
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, true, false, 134), "quantity", [], "any", false, true, false, 134), "right_nudge", [], "any", false, true, false, 134), "style", [], "any", true, true, false, 134)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "link", [], "any", false, true, false, 134), "quantity", [], "any", false, true, false, 134), "right_nudge", [], "any", false, true, false, 134), "style", [], "any", false, false, false, 134), "2px")) : ("2px"));
            echo ";;
}
";
        }
        // line 137
        echo "
/* Cart / Container */
%%SELECTOR%% .bde-mini-cart-offcanvas-body {
  --cart-image-size: ";
        // line 140
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 140), "contents", [], "any", false, false, false, 140), "thumbnails", [], "any", false, false, false, 140), "size", [], "any", false, false, false, 140), "style", [], "any", false, false, false, 140);
        echo ";
  width: ";
        // line 141
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 141), "container", [], "any", false, false, false, 141), "width", [], "any", false, false, false, 141), "style", [], "any", false, false, false, 141);
        echo ";
  background-color: ";
        // line 142
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 142), "container", [], "any", false, false, false, 142), "background", [], "any", false, false, false, 142);
        echo ";
  ";
        // line 143
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 143), "container", [], "any", false, false, false, 143), "borders", [], "any", false, false, false, 143)], 143, $context, $this->getSourceContext());
        echo "
}

/* Cart / Top Bar */
%%SELECTOR%% .bde-mini-cart-offcanvas-title {
  ";
        // line 148
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 148), "top_bar", [], "any", false, false, false, 148), "typography", [], "any", false, false, false, 148), ($context["globalSettings"] ?? null)], 148, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-offcanvas__close-button {
  font-size: ";
        // line 151
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 151), "top_bar", [], "any", false, false, false, 151), "close_button", [], "any", false, false, false, 151), "size", [], "any", false, false, false, 151), "style", [], "any", false, false, false, 151);
        echo ";
  color: ";
        // line 152
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 152), "top_bar", [], "any", false, false, false, 152), "close_button", [], "any", false, false, false, 152), "color", [], "any", false, false, false, 152);
        echo ";
  ";
        // line 153
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 153), "top_bar", [], "any", false, false, false, 153), "close_button", [], "any", false, false, false, 153), "color", [], "any", false, false, false, 153)) {
            // line 154
            echo "  opacity: 1;
  ";
        }
        // line 156
        echo "}
%%SELECTOR%% .bde-mini-cart-offcanvas__close-button:hover {
  color: ";
        // line 158
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 158), "top_bar", [], "any", false, false, false, 158), "close_button", [], "any", false, false, false, 158), "color_hover", [], "any", false, false, false, 158);
        echo ";
  opacity:";
        // line 159
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 159), "top_bar", [], "any", false, false, false, 159), "close_button", [], "any", false, false, false, 159), "opacity_hover", [], "any", false, false, false, 159);
        echo ";
}
";
        // line 161
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 161), "top_bar", [], "any", false, false, false, 161), "close_button", [], "any", false, false, false, 161), "position", [], "any", false, false, false, 161) == "left")) {
            // line 162
            echo "  %%SELECTOR%% .bde-mini-cart-offcanvas-title {
    order: 2;
  }
  %%SELECTOR%% .bde-mini-cart-offcanvas__close-button {
    order: 1;
  }
";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 168
($context["design"] ?? null), "cart", [], "any", false, false, false, 168), "top_bar", [], "any", false, false, false, 168), "close_button", [], "any", false, false, false, 168), "position", [], "any", false, false, false, 168) == "right")) {
            // line 169
            echo "  %%SELECTOR%% .bde-mini-cart-offcanvas-title {
    order: 1;
  }
  %%SELECTOR%% .bde-mini-cart-offcanvas__close-button {
    order: 2;
  }
";
        }
        // line 176
        echo "
/* Cart / Contents / Rows */

%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart {
  max-height: ";
        // line 180
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 180), "contents", [], "any", false, false, false, 180), "max_height", [], "any", false, false, false, 180), "style", [], "any", false, false, false, 180);
        echo ";
}

%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart li {
  padding-top: ";
        // line 184
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 184), "contents", [], "any", false, false, false, 184), "rows", [], "any", false, false, false, 184), "spacing", [], "any", false, false, false, 184), "style", [], "any", false, false, false, 184);
        echo ";
  padding-bottom: ";
        // line 185
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 185), "contents", [], "any", false, false, false, 185), "rows", [], "any", false, false, false, 185), "spacing", [], "any", false, false, false, 185), "style", [], "any", false, false, false, 185);
        echo ";
  border-color: ";
        // line 186
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 186), "contents", [], "any", false, false, false, 186), "rows", [], "any", false, false, false, 186), "separator_color", [], "any", false, false, false, 186);
        echo ";
  border-width: ";
        // line 187
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 187), "contents", [], "any", false, false, false, 187), "rows", [], "any", false, false, false, 187), "separator_height", [], "any", false, false, false, 187), "style", [], "any", false, false, false, 187);
        echo ";
}

%%SELECTOR%% .bde-mini-cart-offcanvas-footer,
%%SELECTOR%% .bde-mini-cart-offcanvas-topbar {
  border-color: ";
        // line 192
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 192), "contents", [], "any", false, false, false, 192), "rows", [], "any", false, false, false, 192), "separator_color", [], "any", false, false, false, 192);
        echo ";
  border-width: ";
        // line 193
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 193), "contents", [], "any", false, false, false, 193), "rows", [], "any", false, false, false, 193), "separator_height", [], "any", false, false, false, 193), "style", [], "any", false, false, false, 193);
        echo ";
}

/* Cart / Contents / Remove Icon */
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart .remove {
  font-size: ";
        // line 198
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 198), "contents", [], "any", false, false, false, 198), "remove_icon", [], "any", false, false, false, 198), "size", [], "any", false, false, false, 198), "style", [], "any", false, false, false, 198);
        echo ";
  color: ";
        // line 199
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 199), "contents", [], "any", false, false, false, 199), "remove_icon", [], "any", false, false, false, 199), "color", [], "any", false, false, false, 199);
        echo ";
  ";
        // line 200
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 200), "contents", [], "any", false, false, false, 200), "remove_icon", [], "any", false, false, false, 200), "color", [], "any", false, false, false, 200)) {
            // line 201
            echo "    opacity: 1;
  ";
        }
        // line 203
        echo "}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart .remove:hover {
  color: ";
        // line 205
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 205), "contents", [], "any", false, false, false, 205), "remove_icon", [], "any", false, false, false, 205), "color_hover", [], "any", false, false, false, 205);
        echo ";
}

/* Cart / Contents / Thumbnails */
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart li img {
  width: ";
        // line 210
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 210), "contents", [], "any", false, false, false, 210), "thumbnails", [], "any", false, false, false, 210), "size", [], "any", false, false, false, 210), "style", [], "any", false, false, false, 210);
        echo ";
  height: ";
        // line 211
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 211), "contents", [], "any", false, false, false, 211), "thumbnails", [], "any", false, false, false, 211), "size", [], "any", false, false, false, 211), "style", [], "any", false, false, false, 211);
        echo ";
  opacity: ";
        // line 212
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 212), "contents", [], "any", false, false, false, 212), "thumbnails", [], "any", false, false, false, 212), "opacity", [], "any", false, false, false, 212);
        echo ";
  ";
        // line 213
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_borders", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 213), "contents", [], "any", false, false, false, 213), "thumbnails", [], "any", false, false, false, 213), "borders", [], "any", false, false, false, 213)], 213, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart li a:hover img {
  opacity: ";
        // line 216
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 216), "contents", [], "any", false, false, false, 216), "thumbnails", [], "any", false, false, false, 216), "opacity_hover", [], "any", false, false, false, 216);
        echo ";
}

/* Cart / Contents / Typography */
%%SELECTOR%% .bde-mini-cart-offcanvas .bde-mini-cart-item-title {
  ";
        // line 221
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 221), "contents", [], "any", false, false, false, 221), "product_title", [], "any", false, false, false, 221), ($context["globalSettings"] ?? null)], 221, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-offcanvas .bde-mini-cart-item-title:hover {
  ";
        // line 224
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typographyWithHoverableColorAndEffects", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 224), "contents", [], "any", false, false, false, 224), "product_title", [], "any", false, false, false, 224)], 224, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart .quantity {
  ";
        // line 227
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 227), "contents", [], "any", false, false, false, 227), "quantity", [], "any", false, false, false, 227), ($context["globalSettings"] ?? null)], 227, $context, $this->getSourceContext());
        echo "
}

/* Cart / Contents / Subtotal */
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart__total strong {
  ";
        // line 232
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 232), "subtotal", [], "any", false, false, false, 232), "label", [], "any", false, false, false, 232), ($context["globalSettings"] ?? null)], 232, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart__total .woocommerce-Price-amount bdi {
  ";
        // line 235
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 235), "subtotal", [], "any", false, false, false, 235), "amount", [], "any", false, false, false, 235), ($context["globalSettings"] ?? null)], 235, $context, $this->getSourceContext());
        echo "
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-Price-amount bdi {
  ";
        // line 238
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 238), "contents", [], "any", false, false, false, 238), "price", [], "any", false, false, false, 238), ($context["globalSettings"] ?? null)], 238, $context, $this->getSourceContext());
        echo "
}

/* Cart / Contents / Attributes */
/* Name */
%%SELECTOR%%.bde-mini-cart .variation dt {
";
        // line 244
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 244), "contents", [], "any", false, false, false, 244), "attributes", [], "any", false, false, false, 244), "name", [], "any", false, false, false, 244), ($context["globalSettings"] ?? null)], 244, $context, $this->getSourceContext());
        echo "
}
/* Value */
%%SELECTOR%%.bde-mini-cart dl.variation dd p {
";
        // line 248
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 248), "contents", [], "any", false, false, false, 248), "attributes", [], "any", false, false, false, 248), "value", [], "any", false, false, false, 248), ($context["globalSettings"] ?? null)], 248, $context, $this->getSourceContext());
        echo "
}

/* Cart / Contents / Actions */
";
        // line 252
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 252), "actions", [], "any", false, false, false, 252), "button", [], "any", false, false, false, 252), "%%SELECTOR%% .bde-mini-cart-offcanvas .button", "primary", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 252, $context, $this->getSourceContext());
        echo "

/* Contiue Shopping */
%%SELECTOR%% .bde-mini-cart-continue-link {
  ";
        // line 256
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 256), "actions", [], "any", false, false, false, 256), "continue_shopping", [], "any", false, false, false, 256), "typography", [], "any", false, false, false, 256), ($context["globalSettings"] ?? null)], 256, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-mini-cart-continue-link:after {
  ";
        // line 260
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 260), "actions", [], "any", false, false, false, 260), "continue_shopping", [], "any", false, false, false, 260), "icon", [], "any", false, false, false, 260)) {
            // line 261
            echo "    ";
            $context["icon"] = Breakdance\PluginsAPI\data_uri(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 261), "actions", [], "any", false, false, false, 261), "continue_shopping", [], "any", false, false, false, 261), "icon", [], "any", false, false, false, 261), "svgCode", [], "any", false, false, false, 261), "image/svg+xml");
            // line 262
            echo "    mask-image: url(";
            echo ($context["icon"] ?? null);
            echo ");
    -webkit-mask-image: url(";
            // line 263
            echo ($context["icon"] ?? null);
            echo ");
  ";
        }
        // line 265
        echo "}

%%SELECTOR%% .bde-mini-cart-continue-link:hover {
  ";
        // line 268
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 268), "actions", [], "any", false, false, false, 268), "continue_shopping", [], "any", false, false, false, 268), "typography", [], "any", false, false, false, 268)], 268, $context, $this->getSourceContext());
        echo "
}

/* Cart / Contents / Spacing */
%%SELECTOR%% .bde-mini-cart-offcanvas-topbar {
  margin-bottom: ";
        // line 273
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 273), "spacing", [], "any", false, false, false, 273), "after_top_bar", [], "any", false, false, false, 273), "style", [], "any", false, false, false, 273);
        echo ";
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart {
  margin-bottom: ";
        // line 276
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 276), "spacing", [], "any", false, false, false, 276), "after_contents", [], "any", false, false, false, 276), "style", [], "any", false, false, false, 276);
        echo ";
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart__total {
   margin-bottom: ";
        // line 279
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 279), "spacing", [], "any", false, false, false, 279), "after_subtotal", [], "any", false, false, false, 279), "style", [], "any", false, false, false, 279);
        echo ";
}
%%SELECTOR%% .bde-mini-cart-offcanvas .woocommerce-mini-cart__buttons {
  margin-bottom: ";
        // line 282
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 282), "spacing", [], "any", false, false, false, 282), "after_button", [], "any", false, false, false, 282), "style", [], "any", false, false, false, 282);
        echo ";
}
/* Spacing */
%%SELECTOR%% {
  ";
        // line 286
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_spacing_margin_y", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 286)], 286, $context, $this->getSourceContext());
        echo "
}

/* Sidebar Style / Responsive Mode */

";
        // line 291
        $context["fullscreenAt"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, true, false, 291), "full_screen_at", [], "any", true, true, false, 291)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, true, false, 291), "full_screen_at", [], "any", false, false, false, 291), "breakpoint_phone_landscape")) : ("breakpoint_phone_landscape"));
        // line 292
        echo "
";
        // line 293
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 293), "full_screen_position", [], "any", false, false, false, 293) && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 293), "full_screen_at", [], "any", false, false, false, 293))) {
            // line 294
            echo "  ";
            $context["direction"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 294), "full_screen_position", [], "any", false, false, false, 294);
        } else {
            // line 296
            echo "  ";
            $context["direction"] = (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 296), "style", [], "any", false, false, false, 296) == "sidebar")) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 296), "sidebar_position", [], "any", false, false, false, 296)) : ("right"));
        }
        // line 298
        echo "
";
        // line 299
        if (((($context["breakpoint"] ?? null) == ($context["fullscreenAt"] ?? null)) || (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "cart", [], "any", false, false, false, 299), "style", [], "any", false, false, false, 299) == "sidebar"))) {
            // line 300
            echo "  %%SELECTOR%% .bde-mini-cart-offcanvas-body {
    --cart-translate-3d: ";
            // line 301
            echo (((($context["direction"] ?? null) == "left")) ? ( -100) : (100));
            echo "%, 0, 0;
    position: fixed;
    top: var(--wp-admin--admin-bar--height, 0);
    bottom: 0;
    z-index: var(--bde-z-index-minicart);
    max-width: 100%;
    transform: translate3d(var(--cart-translate-3d));
    border-radius: 0;

    ";
            // line 310
            if ((($context["direction"] ?? null) == "left")) {
                // line 311
                echo "      left: 0;
      right: auto;
    ";
            } else {
                // line 314
                echo "      right: 0;
      left: auto;
    ";
            }
            // line 317
            echo "  }

  %%SELECTOR%% .woocommerce-mini-cart {
    max-height: none;
  }

  %%SELECTOR%% .woocommerce-mini-cart-item {
    padding-top: var(--bde-woo-base-large-gaps);
    padding-bottom: var(--bde-woo-base-large-gaps);
  }

  %%SELECTOR%% .bde-mini-cart-offcanvas-topbar {
    border-bottom: 1px solid var(--grey-200);
  }

  %%SELECTOR%% .bde-mini-cart-offcanvas-footer {
    border-top: 1px solid var(--grey-200);
  }

  %%SELECTOR%% .bde-mini-cart-offcanvas-overlay {
    display: block;
  }
";
        }
        // line 340
        echo "
/* Advanced / Global Styles */
";
        // line 342
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_wooGlobalStyler", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "advanced", [], "any", false, false, false, 342), "override_global_styles", [], "any", false, false, false, 342), "%%SELECTOR%%", ($context["breakpoint"] ?? null), ($context["globalSettings"] ?? null)], 342, $context, $this->getSourceContext());
        echo "

";
        // line 345
        echo "

    %%SELECTOR%% {
        ";
        // line 348
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 349
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 349), "wrapper", [], "any", false, false, false, 349), "background", [], "any", false, false, false, 349), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 350
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 350), "wrapper", [], "any", false, false, false, 350), "layout", [], "any", false, false, false, 350), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 351
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 351), "wrapper", [], "any", false, false, false, 351), "size", [], "any", false, false, false, 351), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 352
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 352), "wrapper", [], "any", false, false, false, 352), "typography", [], "any", false, false, false, 352),         // line 353
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 354
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 354), "wrapper", [], "any", false, false, false, 354), "spacing", [], "any", false, false, false, 354), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 355
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 355), "wrapper", [], "any", false, false, false, 355), "borders", [], "any", false, false, false, 355), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 356
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 356), "wrapper", [], "any", false, false, false, 356), "effects", [], "any", false, false, false, 356)], 348, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 360
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 361
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 361), "wrapper_hover", [], "any", false, false, false, 361), "background", [], "any", false, false, false, 361), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 362
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 362), "wrapper_hover", [], "any", false, false, false, 362), "layout", [], "any", false, false, false, 362), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 363
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 363), "wrapper_hover", [], "any", false, false, false, 363), "size", [], "any", false, false, false, 363), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 364
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 364), "wrapper_hover", [], "any", false, false, false, 364), "typography", [], "any", false, false, false, 364),         // line 365
($context["globalSettings"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 366
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 366), "wrapper_hover", [], "any", false, false, false, 366), "spacing", [], "any", false, false, false, 366), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 367
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 367), "wrapper_hover", [], "any", false, false, false, 367), "borders", [], "any", false, false, false, 367), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 368
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 368), "wrapper_hover", [], "any", false, false, false, 368), "effects", [], "any", false, false, false, 368)], 360, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 372
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 372), "css", [], "any", false, false, false, 372);
        echo "


";
        // line 375
        if ((($context["isBaseBreakpoint"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 375), "hide", [], "any", false, false, false, 375)))) {
            // line 376
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 377
                echo "        ";
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 377), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 377), "hide", [], "any", false, false, false, 377))) {
                    // line 378
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 380
                    if (($context["isBuilder"] ?? null)) {
                        // line 381
                        echo "                        ";
                        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 381), "builder_preview", [], "any", false, false, false, 381) == "hide")) {
                            // line 382
                            echo "                            display: none;
                        ";
                        } else {
                            // line 384
                            echo "                            opacity: 0.5;
                            filter: grayscale(100%);
                        ";
                        }
                        // line 387
                        echo "                    ";
                    } else {
                        // line 388
                        echo "                        display: none;
                    ";
                    }
                    // line 390
                    echo "                }
            }
        ";
                }
                // line 393
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 395
        echo "
";
    }

    public function getTemplateName()
    {
        return "60ae29cace1b93dc01c183ea9f65e2bbf29fb485";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 395,  772 => 393,  767 => 390,  763 => 388,  760 => 387,  755 => 384,  751 => 382,  748 => 381,  746 => 380,  740 => 378,  737 => 377,  732 => 376,  730 => 375,  724 => 372,  717 => 368,  716 => 367,  715 => 366,  714 => 365,  713 => 364,  712 => 363,  711 => 362,  710 => 361,  709 => 360,  702 => 356,  701 => 355,  700 => 354,  699 => 353,  698 => 352,  697 => 351,  696 => 350,  695 => 349,  694 => 348,  689 => 345,  684 => 342,  680 => 340,  655 => 317,  650 => 314,  645 => 311,  643 => 310,  631 => 301,  628 => 300,  626 => 299,  623 => 298,  619 => 296,  615 => 294,  613 => 293,  610 => 292,  608 => 291,  600 => 286,  593 => 282,  587 => 279,  581 => 276,  575 => 273,  567 => 268,  562 => 265,  557 => 263,  552 => 262,  549 => 261,  547 => 260,  540 => 256,  533 => 252,  526 => 248,  519 => 244,  510 => 238,  504 => 235,  498 => 232,  490 => 227,  484 => 224,  478 => 221,  470 => 216,  464 => 213,  460 => 212,  456 => 211,  452 => 210,  444 => 205,  440 => 203,  436 => 201,  434 => 200,  430 => 199,  426 => 198,  418 => 193,  414 => 192,  406 => 187,  402 => 186,  398 => 185,  394 => 184,  387 => 180,  381 => 176,  372 => 169,  370 => 168,  362 => 162,  360 => 161,  355 => 159,  351 => 158,  347 => 156,  343 => 154,  341 => 153,  337 => 152,  333 => 151,  327 => 148,  319 => 143,  315 => 142,  311 => 141,  307 => 140,  302 => 137,  296 => 134,  292 => 133,  288 => 131,  286 => 130,  279 => 126,  275 => 125,  269 => 122,  265 => 121,  261 => 120,  253 => 115,  247 => 112,  241 => 109,  233 => 104,  229 => 102,  220 => 96,  215 => 95,  212 => 94,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  190 => 85,  183 => 81,  177 => 78,  170 => 74,  163 => 70,  156 => 66,  150 => 63,  145 => 60,  135 => 52,  133 => 51,  130 => 50,  124 => 46,  122 => 45,  117 => 42,  115 => 41,  111 => 39,  105 => 35,  103 => 34,  99 => 32,  93 => 28,  91 => 27,  87 => 25,  81 => 21,  79 => 20,  75 => 18,  69 => 14,  67 => 13,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "60ae29cace1b93dc01c183ea9f65e2bbf29fb485", "");
    }
}
