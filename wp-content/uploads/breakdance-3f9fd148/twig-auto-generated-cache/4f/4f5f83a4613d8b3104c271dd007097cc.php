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

/* bc40c429970e20cddce67b082def7d1bd3b96819 */
class __TwigTemplate_cee52cf90f7ee7b8c07f3555851e556b extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "bc40c429970e20cddce67b082def7d1bd3b96819", 2)->unwrap();
        // line 3
        $context["layout"] = ((($context["formLayout"] ?? null)) ? (($context["formLayout"] ?? null)) : ("vertical"));
        // line 4
        $context["cssClasses"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_join_filter([0 => "breakdance-form", 1 => ("breakdance-form--" .         // line 6
($context["layout"] ?? null))], " ");
        // line 8
        echo "
<form id=\"";
        // line 9
        echo ($context["formId"] ?? null);
        echo "\" class=\"";
        echo ($context["cssClasses"] ?? null);
        echo "\" data-options=\"";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Escaper\Functions\twig_escape_filter($this->env, json_encode(($context["options"] ?? null)));
        echo "\" data-steps=\"";
        echo ($context["stepCount"] ?? null);
        echo "\" ";
        if ((($context["stepCount"] ?? null) >= 1)) {
            echo " data-current-step=\"1\" ";
        }
        echo ">
  ";
        // line 10
        echo do_action("breakdance_form_start", ($context["form"] ?? null));
        echo "
  ";
        // line 11
        if ((($context["stepCount"] ?? null) >= 1)) {
            // line 12
            echo "<div class=\"breakdance-form-stepper\">
    <div class=\"breakdance-form-stepper__list\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["steps"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                // line 15
                echo "            <div class=\"breakdance-form-stepper__step\" data-stepper-step=\"";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15);
                echo "\">
                <div class=\"breakdance-form-stepper__step-icon\">
                    ";
                // line 17
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "step_icon", [], "any", false, false, false, 17), "svgCode", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                        ";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "step_icon", [], "any", false, false, false, 18), "svgCode", [], "any", false, false, false, 18);
                    echo "
                    ";
                } else {
                    // line 20
                    echo "                        <span>";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20);
                    echo "</span>
                    ";
                }
                // line 22
                echo "                </div>
                ";
                // line 23
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                    <div class=\"breakdance-form-stepper__label\">";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 24);
                    echo "</div>
                ";
                }
                // line 26
                echo "            </div>
            <div class=\"breakdance-form-stepper__separator\"></div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
</div>
";
        }
        // line 32
        echo "
  
<div class=\"breakdance-form-field breakdance-form-field--text\" >
    
    
            <label class=\"breakdance-form-field__label\" for=\"your_name\">
            Your Name<span class=\"breakdance-form-field__required\">*</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"your_name\"
    aria-describedby=\"your_name\"
    type=\"text\"
    name=\"fields[your_name]\"
    placeholder=\"Your Name\"
    value=\"\"
                
        
        
    required
    
    
>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--email\" >
    
    
            <label class=\"breakdance-form-field__label\" for=\"your_email\">
            Your Email Address<span class=\"breakdance-form-field__required\">*</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"your_email\"
    aria-describedby=\"your_email\"
    type=\"email\"
    name=\"fields[your_email]\"
    placeholder=\"Email Address\"
    value=\"\"
                
        
        
    required
    
    
>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--tel\" >
    
    
            <label class=\"breakdance-form-field__label\" for=\"your_phone_number\">
            Your Phone Number
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"your_phone_number\"
    aria-describedby=\"your_phone_number\"
    type=\"tel\"
    name=\"fields[your_phone_number]\"
    placeholder=\"Phone Number\"
    value=\"\"
                
        
        
    
    
    
>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--textarea\" >
    
    
            <label class=\"breakdance-form-field__label\" for=\"your_message\">
            Your Message<span class=\"breakdance-form-field__required\">*</span>
        </label>
    
    <textarea
    class=\"breakdance-form-field__input\"
    id=\"your_message\"
    aria-describedby=\"your_message\"
    type=\"textarea\"
    name=\"fields[your_message]\"
        rows=\"5\"
        placeholder=\"Message\"
    required
    >
</textarea>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--hpinput\" >
    
    
            <label class=\"breakdance-form-field__label\" for=\"hpname\">
            HP Name
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"hpname\"
    aria-describedby=\"hpname\"
    type=\"hpinput\"
    name=\"fields[hpname]\"
    placeholder=\"\"
    value=\"\"
                
        
        
    
    autocomplete=\"off\"
    tabindex=-1
>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--hidden\" >
    
    
    
    <input
    id=\"csrf-token-%%ID%%\"
    type=\"hidden\"
    name=\"fields[csrfToken]\"
    value=\"6abf9c16a1\"
    >


    
    
</div>


  ";
        // line 192
        echo do_action("breakdance_form_before_footer", ($context["form"] ?? null));
        echo "

<div class=\"breakdance-form-field breakdance-form-footer\">
    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["steps"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 196
            echo "        <div class=\"breakdance-form-field breakdance-form-field--step-buttons\" data-form-step=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196);
            echo "\">
            ";
            // line 197
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", true, true, false, 197) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 197)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 197)) : ("Previous Step")), false, "breakdance-form-button breakdance-form-button__previous-step hidden", ($context["previousStepButtonDesign"] ?? null), "secondary", false, false, "step.next_button_text"], 197, $context, $this->getSourceContext());
            echo "
            ";
            // line 198
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", true, true, false, 198) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 198)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 198)) : ("Next Step")), false, "breakdance-form-button breakdance-form-button__next-step hidden", ($context["nextStepButtonDesign"] ?? null), "primary", false, false, "step.next_button_text"], 198, $context, $this->getSourceContext());
            echo "
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "
    ";
        // line 202
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(($context["submitButtonText"]) ?? ("Submit")), false, "breakdance-form-button breakdance-form-button__submit", ($context["submitButtonDesign"] ?? null), "primary", ($context["submitButtonId"] ?? null), true, "content.form.submit_text", ($context["disableSubmitButton"] ?? null)], 202, $context, $this->getSourceContext());
        echo "
    <input type=\"hidden\" name=\"form_id\" value=\"%%ID%%\">
    <input type=\"hidden\" name=\"post_id\" value=\"%%POSTID%%\">
</div>

  ";
        // line 207
        echo do_action("breakdance_form_end", ($context["form"] ?? null));
        echo "
</form>

";
    }

    public function getTemplateName()
    {
        return "bc40c429970e20cddce67b082def7d1bd3b96819";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 207,  357 => 202,  354 => 201,  337 => 198,  333 => 197,  328 => 196,  311 => 195,  305 => 192,  143 => 32,  138 => 29,  122 => 26,  116 => 24,  114 => 23,  111 => 22,  105 => 20,  99 => 18,  97 => 17,  91 => 15,  74 => 14,  70 => 12,  68 => 11,  64 => 10,  50 => 9,  47 => 8,  45 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bc40c429970e20cddce67b082def7d1bd3b96819", "");
    }
}
