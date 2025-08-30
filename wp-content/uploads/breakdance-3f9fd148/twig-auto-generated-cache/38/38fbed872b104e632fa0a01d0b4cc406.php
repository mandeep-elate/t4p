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

/* 94deefecfb115f10250a747a8e3342c88b87f839 */
class __TwigTemplate_8b81b00f4ebb11d503ea61f091e58181 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "94deefecfb115f10250a747a8e3342c88b87f839", 2)->unwrap();
        // line 3
        echo "<div class=\"breakdance-dropdown";
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "wrapper", [], "any", false, false, false, 3), "width", [], "any", false, false, false, 3)) ? (" breakdance-dropdown--custom") : (""));
        echo " ";
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 3), "link", [], "any", false, false, false, 3)) ? (" breakdance-dropdown--with-link") : (""));
        echo "\">
    <div class=\"breakdance-dropdown-toggle\">
      ";
        // line 5
        $context["attString"] = "aria-expanded=\"false\" aria-controls=\"dropdown-%%ID%%\"";
        // line 6
        echo "      
      ";
        // line 7
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "link", [], "any", false, false, false, 7)) {
            // line 8
            echo "        ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkStart", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "link", [], "any", false, false, false, 8), "breakdance-menu-link", ($context["attString"] ?? null), false, "content.content.text"], 8, $context, $this->getSourceContext());
            echo "
          ";
            // line 9
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "text", [], "any", false, false, false, 9);
            echo "
        ";
            // line 10
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkEnd", [], 10, $context, $this->getSourceContext());
            echo "
      ";
        } else {
            // line 12
            echo "        <button class=\"breakdance-menu-link\" type=\"button\" ";
            echo ($context["attString"] ?? null);
            echo " ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">
          ";
            // line 13
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13);
            echo "
        </button>
      ";
        }
        // line 16
        echo "
      <button class=\"breakdance-menu-link-arrow\" type=\"button\" aria-expanded=\"false\" aria-controls=\"dropdown-%%ID%%\" aria-label=\"";
        // line 17
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 17), "text", [], "any", false, false, false, 17);
        echo " Submenu\"></button>
    </div>

    <div class=\"breakdance-dropdown-floater\" aria-hidden=\"true\" id=\"dropdown-%%ID%%\">
        <div class=\"breakdance-dropdown-body\">
            ";
        // line 22
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_menuSection", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 22), "columns", [], "any", false, false, false, 22)], 22, $context, $this->getSourceContext());
        echo "

            ";
        // line 24
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 24), "show_another_section", [], "any", false, false, false, 24)) {
            // line 25
            echo "            ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_menuSection", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 25), "columns_2", [], "any", false, false, false, 25), "additional"], 25, $context, $this->getSourceContext());
            echo "
          ";
        }
        // line 27
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "94deefecfb115f10250a747a8e3342c88b87f839";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  102 => 25,  100 => 24,  95 => 22,  87 => 17,  84 => 16,  78 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "94deefecfb115f10250a747a8e3342c88b87f839", "");
    }
}
