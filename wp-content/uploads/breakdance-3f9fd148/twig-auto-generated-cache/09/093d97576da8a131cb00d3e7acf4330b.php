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

/* 67cb0ac2cc94931e8fd3469a3cef15b75cc44cee */
class __TwigTemplate_75c5d680db053d832d93628d8b351f09 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "67cb0ac2cc94931e8fd3469a3cef15b75cc44cee", 2)->unwrap();
        // line 3
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "quotes", [], "any", false, false, false, 3), "icon", [], "any", false, false, false, 3), "svgCode", [], "any", false, false, false, 3)) {
            // line 4
            echo "  ";
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "quotes", [], "any", false, false, false, 4), "icon_position", [], "any", false, false, false, 4) == "above")) {
                // line 5
                echo "    <p class=\"above-text_blockquote-icon\"><span class=\"blockquote-icon\">";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "quotes", [], "any", false, false, false, 5), "icon", [], "any", false, false, false, 5), "svgCode", [], "any", false, false, false, 5);
                echo "</span></p>
    <p ";
                // line 6
                echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
                echo ">";
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 6), "text", [], "any", true, true, false, 6)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 6), "text", [], "any", false, false, false, 6), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
                echo "</p>
  ";
            } else {
                // line 8
                echo "
";
                // line 9
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "author", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "  <cite ";
                    echo Breakdance\PluginsAPI\content_editable_php("content.content.author");
                    echo ">";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 10), "author", [], "any", false, false, false, 10);
                    echo "</cite>
";
                }
                // line 11
                echo " 
";
                // line 12
                if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 12), "rating_star", [], "any", false, false, false, 12) == "1")) {
                    // line 13
                    echo "<span class=\"star1\"></span>
";
                } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,                 // line 14
($context["design"] ?? null), "typography", [], "any", false, false, false, 14), "rating_star", [], "any", false, false, false, 14) == "2")) {
                    // line 15
                    echo "  <span class=\"star2\"></span>
";
                } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,                 // line 16
($context["design"] ?? null), "typography", [], "any", false, false, false, 16), "rating_star", [], "any", false, false, false, 16) == "3")) {
                    // line 17
                    echo "  <span class=\"star3\"></span>
";
                } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,                 // line 18
($context["design"] ?? null), "typography", [], "any", false, false, false, 18), "rating_star", [], "any", false, false, false, 18) == "4")) {
                    // line 19
                    echo "  <span class=\"star4\"></span>
";
                } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,                 // line 20
($context["design"] ?? null), "typography", [], "any", false, false, false, 20), "rating_star", [], "any", false, false, false, 20) == "5")) {
                    // line 21
                    echo "  <span class=\"star5\"></span>

";
                }
                // line 24
                echo "
<p class=\"verified-customer\">Verified Customer</p>
    <p class=\"inline-text_blockquote-icon\"><span class=\"blockquote-icon\">";
                // line 26
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "quotes", [], "any", false, false, false, 26), "icon", [], "any", false, false, false, 26), "svgCode", [], "any", false, false, false, 26);
                echo "</span>";
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 26), "text", [], "any", true, true, false, 26)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 26), "text", [], "any", false, false, false, 26), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
                echo "</p>
  ";
            }
        } else {
            // line 29
            echo "  <p>";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 29), "text", [], "any", true, true, false, 29)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 29), "text", [], "any", false, false, false, 29), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
            echo "</p>
";
        }
        // line 31
        echo "

";
    }

    public function getTemplateName()
    {
        return "67cb0ac2cc94931e8fd3469a3cef15b75cc44cee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  114 => 29,  106 => 26,  102 => 24,  97 => 21,  95 => 20,  92 => 19,  90 => 18,  87 => 17,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  75 => 12,  72 => 11,  64 => 10,  62 => 9,  59 => 8,  52 => 6,  47 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "67cb0ac2cc94931e8fd3469a3cef15b75cc44cee", "");
    }
}
