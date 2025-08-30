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

/* 886c96a57a1e664d40c302f844a397d8bee4c903 */
class __TwigTemplate_1215c87ce128084436b12f778ebf3244 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "886c96a57a1e664d40c302f844a397d8bee4c903", 2)->unwrap();
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
    class=\"breakdance-form-field__input\"
    ";
        // line 14
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)) ? ((("id=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)) . "\"")) : (""));
        echo "
    ";
        // line 15
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)) ? ((("aria-describedby=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)) . "\"")) : (""));
        echo "
    type=\"";
        // line 16
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 16);
        echo "\"
    name=\"";
        // line 17
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 17);
        echo "\"
    placeholder=\"";
        // line 18
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 18), "placeholder", [], "any", false, false, false, 18);
        echo "\"
    value=\"";
        // line 19
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19);
        echo "\"
    ";
        // line 20
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 20), "conditional", [], "any", false, false, false, 20)) {
            // line 21
            echo "        ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_conditionalFormFieldAttributes", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 21), "condition", [], "any", false, false, false, 21)], 21, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 23
        echo "    ";
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 23) == "date")) {
            // line 24
            echo "        ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "min_date", [], "any", false, false, false, 24)) ? ((("min=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "min_date", [], "any", false, false, false, 24)) . "\"")) : (""));
            echo "
        ";
            // line 25
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "max_date", [], "any", false, false, false, 25)) ? ((("max=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "max_date", [], "any", false, false, false, 25)) . "\"")) : (""));
            echo "
    ";
        } else {
            // line 27
            echo "        ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "min", [], "any", false, false, false, 27)) ? ((("min=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "min", [], "any", false, false, false, 27)) . "\"")) : (""));
            echo "
        ";
            // line 28
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "max", [], "any", false, false, false, 28)) ? ((("max=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "max", [], "any", false, false, false, 28)) . "\"")) : (""));
            echo "
    ";
        }
        // line 30
        echo "    ";
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "step", [], "any", false, false, false, 30)) ? ((("step=\"" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "step", [], "any", false, false, false, 30)) . "\"")) : (""));
        echo "
    ";
        // line 31
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 31), "required", [], "any", false, false, false, 31)) ? ("required") : (""));
        echo "
    ";
        // line 32
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 32), "autocomplete_disabled", [], "any", false, false, false, 32)) ? ("autocomplete=\"off\"") : (""));
        echo "
    ";
        // line 33
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 33), "tabindex", [], "any", false, false, false, 33)) ? (("tabindex=" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 33), "tabindex", [], "any", false, false, false, 33))) : (""));
        echo "
>


    ";
        // line 37
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 37), "append", [], "any", false, false, false, 37);
        echo "
    ";
        // line 38
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "886c96a57a1e664d40c302f844a397d8bee4c903";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 38,  158 => 37,  151 => 33,  147 => 32,  143 => 31,  138 => 30,  133 => 28,  128 => 27,  123 => 25,  118 => 24,  115 => 23,  109 => 21,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  78 => 11,  71 => 8,  66 => 7,  64 => 6,  59 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "886c96a57a1e664d40c302f844a397d8bee4c903", "");
    }
}
