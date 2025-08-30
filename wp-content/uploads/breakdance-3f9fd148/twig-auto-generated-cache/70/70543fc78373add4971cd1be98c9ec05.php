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

/* 197109f5dd460b610a0da8c33d1f2f49dc2fafe6 */
class __TwigTemplate_e382508a76d5d292dd577b72294dd5a1 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "197109f5dd460b610a0da8c33d1f2f49dc2fafe6", 2)->unwrap();
        // line 3
        echo "<div class=\"custom-blockquote\">
  ";
        // line 4
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "author", [], "any", false, false, false, 4)) {
            // line 5
            echo "      <cite ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.author");
            echo ">";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "author", [], "any", false, false, false, 5);
            echo "</cite>
  ";
        }
        // line 6
        echo " 
  ";
        // line 7
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "star_rating", [], "any", false, false, false, 7)) {
            // line 8
            echo "      <span ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.star_rating");
            echo ">";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "star_rating", [], "any", false, false, false, 8);
            echo "</span>
  ";
        }
        // line 10
        echo "  <p class=\"verified-customer\">Verified Customer</p>
  ";
        // line 11
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 11), "text", [], "any", false, false, false, 11)) {
            // line 12
            echo "    <p ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 12), "text", [], "any", true, true, false, 12)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 12), "text", [], "any", false, false, false, 12), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
            echo "</p>
  ";
        }
        // line 14
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "197109f5dd460b610a0da8c33d1f2f49dc2fafe6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  73 => 12,  71 => 11,  68 => 10,  60 => 8,  58 => 7,  55 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "197109f5dd460b610a0da8c33d1f2f49dc2fafe6", "");
    }
}
