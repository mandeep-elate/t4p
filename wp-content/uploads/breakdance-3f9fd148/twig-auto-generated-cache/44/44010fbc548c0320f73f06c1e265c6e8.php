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

/* e0d33403782daa24d2cc65bcd4a1fe8955221381 */
class __TwigTemplate_dc60b5b2cc9bbf05f9cfa724569fcac5 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "e0d33403782daa24d2cc65bcd4a1fe8955221381", 2)->unwrap();
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
    <textarea
    class=\"breakdance-form-field__input\"
    id=\"";
        // line 14
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14);
        echo "\"
    aria-describedby=\"";
        // line 15
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15);
        echo "\"
    type=\"";
        // line 16
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 16);
        echo "\"
    name=\"";
        // line 17
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17);
        echo "\"
    ";
        // line 18
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows_textarea", [], "any", false, false, false, 18)) {
            // line 19
            echo "    rows=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "rows_textarea", [], "any", false, false, false, 19);
            echo "\"
    ";
        }
        // line 21
        echo "    placeholder=\"";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 21), "placeholder", [], "any", false, false, false, 21);
        echo "\"
    ";
        // line 22
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 22), "required", [], "any", false, false, false, 22)) ? ("required") : (""));
        echo "
    ";
        // line 23
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 23), "conditional", [], "any", false, false, false, 23)) {
            // line 24
            echo "        ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_conditionalFormFieldAttributes", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 24), "condition", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 26
        echo ">";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26);
        echo "
</textarea>


    ";
        // line 30
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 30), "append", [], "any", false, false, false, 30);
        echo "
    ";
        // line 31
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "e0d33403782daa24d2cc65bcd4a1fe8955221381";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 31,  132 => 30,  124 => 26,  118 => 24,  116 => 23,  112 => 22,  107 => 21,  101 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  78 => 11,  71 => 8,  66 => 7,  64 => 6,  59 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "e0d33403782daa24d2cc65bcd4a1fe8955221381", "");
    }
}
