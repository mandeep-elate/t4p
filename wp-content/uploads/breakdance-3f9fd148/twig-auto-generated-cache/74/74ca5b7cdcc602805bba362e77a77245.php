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

/* a79fac203abd09a9ba5681e7bfb8d456374344fe */
class __TwigTemplate_72e6d90d0ee17699fba306071bd3a007 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a79fac203abd09a9ba5681e7bfb8d456374344fe", 2)->unwrap();
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
    
    
            <label class=\"breakdance-form-field__label\" for=\"user_login\">
            Username or Email Address<span class=\"breakdance-form-field__required\">*</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"user_login\"
    aria-describedby=\"user_login\"
    type=\"text\"
    name=\"fields[user_login]\"
    placeholder=\"\"
    value=\"\"
                
        
        
    required
    
    
>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--password\" >
    
    
            <label class=\"breakdance-form-field__label\" for=\"user_password\">
            Password<span class=\"breakdance-form-field__required\">*</span>
        </label>
    
    <input
    class=\"breakdance-form-field__input\"
    id=\"user_password\"
    aria-describedby=\"user_password\"
    type=\"password\"
    name=\"fields[user_password]\"
    placeholder=\"\"
    value=\"\"
                
        
        
    required
    
    
>


    
    
</div>


<div class=\"breakdance-form-field breakdance-form-field--checkbox\" >
    
    
    
    <fieldset role=\"group\"
    >
          <div class=\"breakdance-form-checkbox\">
          <input
              type=\"checkbox\"
              name=\"fields[remember]\"
              value=\"1\"
              id=\"remember-1\"
              
                        >
          <label class=\"breakdance-form-checkbox__text\" for=\"remember-1\">Remember me</label>
      </div>
  </fieldset>



    <a class=\"breakdance-form-link breakdance-form-link--password\" href=\"https://t4p.elate-ecommerce.com/my-account/lost-password/\">Lost your password?</a>
    
</div>


  ";
        // line 117
        echo do_action("breakdance_form_before_footer", ($context["form"] ?? null));
        echo "

<div class=\"breakdance-form-field breakdance-form-footer\">
    ";
        // line 120
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
            // line 121
            echo "        <div class=\"breakdance-form-field breakdance-form-field--step-buttons\" data-form-step=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 121);
            echo "\">
            ";
            // line 122
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", true, true, false, 122) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 122)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "previous_button_text", [], "any", false, false, false, 122)) : ("Previous Step")), false, "breakdance-form-button breakdance-form-button__previous-step hidden", ($context["previousStepButtonDesign"] ?? null), "secondary", false, false, "step.next_button_text"], 122, $context, $this->getSourceContext());
            echo "
            ";
            // line 123
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", true, true, false, 123) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 123)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["step"], "next_button_text", [], "any", false, false, false, 123)) : ("Next Step")), false, "breakdance-form-button breakdance-form-button__next-step hidden", ($context["nextStepButtonDesign"] ?? null), "primary", false, false, "step.next_button_text"], 123, $context, $this->getSourceContext());
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
        // line 126
        echo "
    ";
        // line 127
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtmlManual", [(($context["submitButtonText"]) ?? ("Submit")), false, "breakdance-form-button breakdance-form-button__submit", ($context["submitButtonDesign"] ?? null), "primary", ($context["submitButtonId"] ?? null), true, "content.form.submit_text", ($context["disableSubmitButton"] ?? null)], 127, $context, $this->getSourceContext());
        echo "
    <input type=\"hidden\" name=\"form_id\" value=\"%%ID%%\">
    <input type=\"hidden\" name=\"post_id\" value=\"%%POSTID%%\">
</div>

  ";
        // line 132
        echo do_action("breakdance_form_end", ($context["form"] ?? null));
        echo "
</form>

";
    }

    public function getTemplateName()
    {
        return "a79fac203abd09a9ba5681e7bfb8d456374344fe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 132,  282 => 127,  279 => 126,  262 => 123,  258 => 122,  253 => 121,  236 => 120,  230 => 117,  143 => 32,  138 => 29,  122 => 26,  116 => 24,  114 => 23,  111 => 22,  105 => 20,  99 => 18,  97 => 17,  91 => 15,  74 => 14,  70 => 12,  68 => 11,  64 => 10,  50 => 9,  47 => 8,  45 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a79fac203abd09a9ba5681e7bfb8d456374344fe", "");
    }
}
