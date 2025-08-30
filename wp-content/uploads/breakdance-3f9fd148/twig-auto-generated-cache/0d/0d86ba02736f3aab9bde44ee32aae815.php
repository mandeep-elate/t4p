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

/* f09aa40c390ebec363cf1ca436c3c9c59f381664 */
class __TwigTemplate_37fcd52a1dbe8ca5b6833695fe1386ff extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "f09aa40c390ebec363cf1ca436c3c9c59f381664", 2)->unwrap();
        // line 3
        echo "if (window.breakdancePopupInstances) {
  const popupInstance = window.breakdancePopupInstances[%%POSTID%%] ?? null;
  if (popupInstance) {
    popupInstance.setOptions({
      keepOpenOnHashlinkClicks: ";
        // line 7
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 7), "advanced", [], "any", false, false, false, 7), "keep_open_on_hashlink_clicks", [], "any", false, false, false, 7)) ? ("true") : ("false"));
        echo ",
      closeOnClickOutside: ";
        // line 8
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 8), "popup_can_t_be_closed", [], "any", false, false, false, 8) == 1)) ? ("false") : ("true"));
        echo ",
      closeOnEscapeKey: ";
        // line 9
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 9), "popup_can_t_be_closed", [], "any", false, false, false, 9) == 1)) ? ("false") : ("true"));
        echo ",
      closeAfterMilliseconds: ";
        // line 10
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 10), "automatically_close_after", [], "any", false, true, false, 10), "number", [], "any", true, true, false, 10) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 10), "automatically_close_after", [], "any", false, true, false, 10), "number", [], "any", false, false, false, 10)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 10), "automatically_close_after", [], "any", false, true, false, 10), "number", [], "any", false, false, false, 10)) : ("null"));
        echo ",
      showCloseButtonAfterMilliseconds: ";
        // line 11
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 11), "show_close_button_after", [], "any", false, true, false, 11), "number", [], "any", true, true, false, 11) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 11), "show_close_button_after", [], "any", false, true, false, 11), "number", [], "any", false, false, false, 11)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, true, false, 11), "show_close_button_after", [], "any", false, true, false, 11), "number", [], "any", false, false, false, 11)) : ("null"));
        echo ",
      disableScrollWhenOpen: ";
        // line 12
        echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 12), "allow_scroll", [], "any", false, false, false, 12) == 1)) ? ("false") : ("true"));
        echo ",
      ";
        // line 13
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 13), "animation", [], "any", false, false, false, 13), "entrance", [], "any", false, false, false, 13), "animation_type", [], "any", false, false, false, 13))) {
            // line 14
            echo "        entranceAnimation: ";
            echo json_encode(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 14), "animation", [], "any", false, false, false, 14), "entrance", [], "any", false, false, false, 14));
            echo ",
      ";
        }
        // line 16
        echo "      ";
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 16), "animation", [], "any", false, false, false, 16), "exit", [], "any", false, false, false, 16), "animation_type", [], "any", false, false, false, 16))) {
            // line 17
            echo "        exitAnimation: ";
            echo json_encode(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "popup", [], "any", false, false, false, 17), "animation", [], "any", false, false, false, 17), "exit", [], "any", false, false, false, 17));
            echo ",
      ";
        }
        // line 19
        echo "    });
  }
}

";
    }

    public function getTemplateName()
    {
        return "f09aa40c390ebec363cf1ca436c3c9c59f381664";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  83 => 17,  80 => 16,  74 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f09aa40c390ebec363cf1ca436c3c9c59f381664", "");
    }
}
