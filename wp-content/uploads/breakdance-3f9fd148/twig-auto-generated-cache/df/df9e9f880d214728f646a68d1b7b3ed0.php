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

/* f582aa403765c34cc2a212f139f5fcecdac92b9c */
class __TwigTemplate_d90497858fcacac88c720f4263fb4241 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "f582aa403765c34cc2a212f139f5fcecdac92b9c", 2)->unwrap();
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
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "star_rating", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "  <span ";
                    echo Breakdance\PluginsAPI\content_editable_php("content.content.star_rating");
                    echo ">";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "star_rating", [], "any", false, false, false, 13);
                    echo "</span>
";
                }
                // line 15
                echo "
<p class=\"verified-customer\">Verified Customer</p>
    <p class=\"inline-text_blockquote-icon\"><span class=\"blockquote-icon\">";
                // line 17
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "quotes", [], "any", false, false, false, 17), "icon", [], "any", false, false, false, 17), "svgCode", [], "any", false, false, false, 17);
                echo "</span>";
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 17), "text", [], "any", true, true, false, 17)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 17), "text", [], "any", false, false, false, 17), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
                echo "</p>
  ";
            }
        } else {
            // line 20
            echo "  <p>";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 20), "text", [], "any", true, true, false, 20)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 20), "text", [], "any", false, false, false, 20), "It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change.")) : ("It is not the strongest of the species that survives, nor the most intelligent, but the one most responsive to change."));
            echo "</p>
";
        }
        // line 22
        echo "

";
    }

    public function getTemplateName()
    {
        return "f582aa403765c34cc2a212f139f5fcecdac92b9c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 20,  89 => 17,  85 => 15,  77 => 13,  75 => 12,  72 => 11,  64 => 10,  62 => 9,  59 => 8,  52 => 6,  47 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f582aa403765c34cc2a212f139f5fcecdac92b9c", "");
    }
}
