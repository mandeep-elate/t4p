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

/* 700d415348a249f5199562437ce62c23e9f1a59b */
class __TwigTemplate_e0f1d3bff86cd3f900be4d102e24d4b1 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "700d415348a249f5199562437ce62c23e9f1a59b", 2)->unwrap();
        // line 3
        $context["popupPostId"] = ('' === $tmp = "%%POSTID%%") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo "<div
    class=\"breakdance-popup
    ";
        // line 6
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 6), "advanced", [], "any", false, false, false, 6), "popup_css_class", [], "any", false, false, false, 6)) {
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 6), "advanced", [], "any", false, false, false, 6), "popup_css_class", [], "any", false, false, false, 6);
        }
        echo "\"
    data-breakdance-popup-id=\"%%POSTID%%\"
    ";
        // line 8
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 8), "advanced", [], "any", false, false, false, 8), "popup_html_id", [], "any", false, false, false, 8)) {
            echo " id=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 8), "advanced", [], "any", false, false, false, 8), "popup_html_id", [], "any", false, false, false, 8);
            echo "\" ";
        }
        // line 9
        echo "    ";
        if ((Breakdance\Subscription\freeModeOnFrontend() && Breakdance\Subscription\isPopupUsingProOnlyTriggers(($context["popupPostId"] ?? null)))) {
            echo " data-breakdance-popup-using-pro-triggers=\"true\" ";
        }
        // line 10
        echo ">
  <div class='breakdance-popup-content'>
    %%CHILDREN%%
  </div>
  ";
        // line 14
        if ( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "popup", [], "any", false, false, false, 14), "disable_close_button", [], "any", false, false, false, 14)) {
            // line 15
            echo "  \t<div class=\"breakdance-popup-close-button";
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 15), "show_after", [], "any", false, false, false, 15)) {
                echo " hidden";
            }
            echo " breakdance-popup-position-";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 15), "position", [], "any", true, true, false, 15)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, true, false, 15), "position", [], "any", false, false, false, 15), "top-right")) : ("top-right"));
            echo "\" data-breakdance-popup-reference=\"%%POSTID%%\" data-breakdance-popup-action=\"close\">
      <div class=\"breakdance-popup-close-icon\">
        ";
            // line 17
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 17), "custom_icon", [], "any", false, false, false, 17)) {
                // line 18
                echo "          ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "close_button", [], "any", false, false, false, 18), "custom_icon", [], "any", false, false, false, 18), "svgCode", [], "any", false, false, false, 18);
                echo "
        ";
            } else {
                // line 20
                echo "          <svg viewBox=\"0 0 24 24\">
            <path d=\"M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z\" />
          </svg>
        ";
            }
            // line 24
            echo "      </div>
    </div>
  ";
        }
        // line 27
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "700d415348a249f5199562437ce62c23e9f1a59b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  98 => 24,  92 => 20,  86 => 18,  84 => 17,  74 => 15,  72 => 14,  66 => 10,  61 => 9,  55 => 8,  48 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "700d415348a249f5199562437ce62c23e9f1a59b", "");
    }
}
