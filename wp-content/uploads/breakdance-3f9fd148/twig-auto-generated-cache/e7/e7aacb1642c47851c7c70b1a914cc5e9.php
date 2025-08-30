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

/* 3fd4f8552a7d0a07a31b08641e411cc36b389d56 */
class __TwigTemplate_15e5d21a39d498c57a623499320b58b0 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "3fd4f8552a7d0a07a31b08641e411cc36b389d56", 2)->unwrap();
        // line 3
        $context["dropdowns"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 3), "dropdowns", [], "any", false, false, false, 3);
        // line 4
        echo "new AwesomeMenu(\"%%SELECTOR%% .breakdance-menu\", {
  dropdown: {
    openOnClick: ";
        // line 6
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "open_dropdowns_on_click", [], "any", false, false, false, 6)) ? ("true") : ("false"));
        echo ",
    mode: {
      desktop: '";
        // line 8
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 8), "vertical", [], "any", false, false, false, 8)) ? (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 8), "vertical_mode", [], "any", true, true, false, 8)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, true, false, 8), "vertical_mode", [], "any", false, false, false, 8), "dropdown")) : ("dropdown"))) : ("dropdown"));
        echo "'
    },
    placement: '";
        // line 10
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 10), "placement", [], "any", true, true, false, 10)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 10), "placement", [], "any", false, false, false, 10), "left")) : ("left"));
        echo "',
    width: ";
        // line 11
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 11), "width", [], "any", true, true, false, 11) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 11), "width", [], "any", false, false, false, 11)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 11), "width", [], "any", false, false, false, 11)) : ("null"));
        echo ",
    animation: '";
        // line 12
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 12), "animation", [], "any", true, true, false, 12)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["dropdowns"] ?? null), "wrapper", [], "any", false, true, false, 12), "animation", [], "any", false, false, false, 12), "fade")) : ("fade"));
        echo "'
  },
  link: {
    effect: '";
        // line 15
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 15), "links", [], "any", false, false, false, 15), "effect", [], "any", false, false, false, 15), "effect_type", [], "any", false, false, false, 15);
        echo "',
    effectDirection: '";
        // line 16
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "desktop_menu", [], "any", false, false, false, 16), "links", [], "any", false, false, false, 16), "effect", [], "any", false, false, false, 16), "effect_direction", [], "any", false, false, false, 16);
        echo "',
  },
  mobile: {
    breakpoint: '";
        // line 19
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, false, false, 19), "show_at", [], "any", false, false, false, 19);
        echo "',
    mode: '";
        // line 20
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 20), "mode", [], "any", true, true, false, 20)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 20), "mode", [], "any", false, false, false, 20), "accordion")) : ("accordion"));
        echo "',
    offcanvasPosition: '";
        // line 21
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 21), "offcanvas_position", [], "any", true, true, false, 21)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 21), "offcanvas_position", [], "any", false, false, false, 21), "left")) : ("left"));
        echo "',
    offset: ";
        // line 22
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 22), "offset", [], "any", false, true, false, 22), "number", [], "any", true, true, false, 22) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 22), "offset", [], "any", false, true, false, 22), "number", [], "any", false, false, false, 22)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "mobile_menu", [], "any", false, true, false, 22), "offset", [], "any", false, true, false, 22), "number", [], "any", false, false, false, 22)) : ("null"));
        echo ",
    followLinks: true
  }
});
";
    }

    public function getTemplateName()
    {
        return "3fd4f8552a7d0a07a31b08641e411cc36b389d56";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  90 => 21,  86 => 20,  82 => 19,  76 => 16,  72 => 15,  66 => 12,  62 => 11,  58 => 10,  53 => 8,  48 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "3fd4f8552a7d0a07a31b08641e411cc36b389d56", "");
    }
}
