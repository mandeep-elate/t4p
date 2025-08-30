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

/* 1460e4373a6bd2c1093a6f776d64e494832772f4 */
class __TwigTemplate_994d99b24d018fbbeae40c60075d30a8 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1460e4373a6bd2c1093a6f776d64e494832772f4", 2)->unwrap();
        // line 3
        echo "<div class=\"custom-blockquote\">
  <div class=\"custom-blockquote-top\">
  ";
        // line 5
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "author", [], "any", false, false, false, 5)) {
            // line 6
            echo "      <cite ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.author");
            echo ">";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 6), "author", [], "any", false, false, false, 6);
            echo "</cite>
  ";
        }
        // line 7
        echo " 
  ";
        // line 8
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "star_rating", [], "any", false, false, false, 8)) {
            // line 9
            echo "      <span ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.star_rating");
            echo " class=\"star";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "star_rating", [], "any", false, false, false, 9);
            echo "\"></span>
  ";
        }
        // line 11
        echo "</div>
  
  <p class=\"verified-customer\">Verified Customer</p>
  ";
        // line 14
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14)) {
            // line 15
            echo "    <p ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 15), "text", [], "any", true, true, false, 15)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 15), "text", [], "any", false, false, false, 15), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
            echo "</p>
  ";
        }
        // line 17
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "1460e4373a6bd2c1093a6f776d64e494832772f4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  76 => 15,  74 => 14,  69 => 11,  61 => 9,  59 => 8,  56 => 7,  48 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1460e4373a6bd2c1093a6f776d64e494832772f4", "");
    }
}
