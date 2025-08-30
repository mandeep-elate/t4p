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

/* 3b58768148331db47b6f49d2cea077dd05edc5a0 */
class __TwigTemplate_24e475e027b7509751b0f77373f416f4 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "3b58768148331db47b6f49d2cea077dd05edc5a0", 2)->unwrap();
        // line 3
        if ((($context["isBuilder"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 3), "disable_builder_label", [], "any", false, false, false, 3))) {
            // line 4
            echo "  <div style=\"padding: 20px; background: repeating-linear-gradient(145deg, #eff6ff, #eff6ff 10px, #d8e3f9 10px, #d8e3f9 20px); width: 100%; color: black; font-weight: bold;\">
    ";
            // line 5
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 5), "builder_label", [], "any", true, true, false, 5)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 5), "builder_label", [], "any", false, false, false, 5), "Code Block")) : ("Code Block"));
            echo "
  </div>
";
        }
        // line 8
        echo "
";
        // line 9
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 9), "php_code", [], "any", false, false, false, 9)) {
            // line 10
            echo "  %%SSR%%
";
        }
        // line 12
        echo "

";
    }

    public function getTemplateName()
    {
        return "3b58768148331db47b6f49d2cea077dd05edc5a0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  58 => 10,  56 => 9,  53 => 8,  47 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "3b58768148331db47b6f49d2cea077dd05edc5a0", "");
    }
}
