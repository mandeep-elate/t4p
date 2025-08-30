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

/* 324c338fa3371e9352f4f7a8ea47f516c8f80ebd */
class __TwigTemplate_3a931335831b01976f943c41153e14d3 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "324c338fa3371e9352f4f7a8ea47f516c8f80ebd", 2)->unwrap();
        // line 3
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 3), "from", [], "any", false, false, false, 3) == "media_library")) {
            // line 4
            echo "  ";
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 4), "alt", [], "any", false, false, false, 4) == "from_media_library")) {
                // line 5
                echo "    ";
                echo \Breakdance\PluginsAPI\getAttachmentAlt(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5));
                echo "
  ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 6
($context["content"] ?? null), "image", [], "any", false, false, false, 6), "alt", [], "any", false, false, false, 6) == "decorative")) {
                // line 7
                echo "    %%OUTPUTBLANKATTRIBUTE%%
  ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 8
($context["content"] ?? null), "image", [], "any", false, false, false, 8), "alt", [], "any", false, false, false, 8) == "custom")) {
                // line 9
                echo "    ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 9), "custom_alt", [], "any", false, false, false, 9);
                echo "
  ";
            }
        }
        // line 12
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 12), "from", [], "any", false, false, false, 12) == "url")) {
            // line 13
            echo "  ";
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 13), "alt_when_from_url", [], "any", false, false, false, 13) == "decorative")) {
                // line 14
                echo "    %%OUTPUTBLANKATTRIBUTE%%
  ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 15
($context["content"] ?? null), "image", [], "any", false, false, false, 15), "alt", [], "any", false, false, false, 15) == "custom")) {
                // line 16
                echo "    ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 16), "custom_alt_when_from_url", [], "any", false, false, false, 16);
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "324c338fa3371e9352f4f7a8ea47f516c8f80ebd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  74 => 15,  71 => 14,  68 => 13,  66 => 12,  59 => 9,  57 => 8,  54 => 7,  52 => 6,  47 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "324c338fa3371e9352f4f7a8ea47f516c8f80ebd", "");
    }
}
