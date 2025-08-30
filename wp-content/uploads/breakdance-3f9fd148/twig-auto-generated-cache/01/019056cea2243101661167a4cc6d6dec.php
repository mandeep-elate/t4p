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

/* 1f007f37c5e59f77f1cb234cba8f36a4fd08d279 */
class __TwigTemplate_d80f652b7d8dca6aa0f6ccaef91694fc extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1f007f37c5e59f77f1cb234cba8f36a4fd08d279", 2)->unwrap();
        // line 3
        echo "<div class=\"breakdance-form-field breakdance-form-field--";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 3);
        if ((($context["step"] ?? null) >= 1)) {
            echo " hidden-step";
        }
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 3), "hide_label", [], "any", false, false, false, 3)) {
            echo " breakdance-form-field__hide-label";
        }
        echo "\" ";
        if ((($context["step"] ?? null) >= 1)) {
            echo " data-form-step=\"";
            echo ($context["step"] ?? null);
            echo "\" ";
        }
        echo ">
    ";
        // line 4
        echo do_action("breakdance_form_before_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
    
    ";
        // line 6
        if ((!\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 6), [0 => "hidden", 1 => "html", 2 => "step", 3 => "radio", 4 => "checkbox"]) && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 6))) {
            // line 7
            echo "        <label class=\"breakdance-form-field__label\" for=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
            echo "\">
            ";
            // line 8
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 8);
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 8), "required", [], "any", false, false, false, 8)) ? ("<span class=\"breakdance-form-field__required\">*</span>") : (""));
            echo "
        </label>
    ";
        }
        // line 11
        echo "
    <input
    id=\"";
        // line 13
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13);
        echo "\"
    type=\"hidden\"
    name=\"";
        // line 15
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 15);
        echo "\"
    value=\"";
        // line 16
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16);
        echo "\"
    ";
        // line 17
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 17), "conditional", [], "any", false, false, false, 17)) {
            // line 18
            echo "        ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_conditionalFormFieldAttributes", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 18), "condition", [], "any", false, false, false, 18)], 18, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 20
        echo ">


    ";
        // line 23
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 23), "append", [], "any", false, false, false, 23);
        echo "
    ";
        // line 24
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "1f007f37c5e59f77f1cb234cba8f36a4fd08d279";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 24,  108 => 23,  103 => 20,  97 => 18,  95 => 17,  91 => 16,  87 => 15,  82 => 13,  78 => 11,  71 => 8,  66 => 7,  64 => 6,  59 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1f007f37c5e59f77f1cb234cba8f36a4fd08d279", "");
    }
}
