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

/* 64700b816bed020b816bfe5c3aee37260b647323 */
class __TwigTemplate_fe99aba4d2c5d30dab78d19d3dec577f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "64700b816bed020b816bfe5c3aee37260b647323", 2)->unwrap();
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
    ";
        // line 12
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 12)) {
            // line 13
            echo "<fieldset role=\"group\"
  ";
            // line 14
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 14)) {
                // line 15
                echo "  aria-label=\"";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_striptags(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 15));
                echo "\"
  ";
            }
            // line 17
            echo "  >
  ";
            // line 18
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 18)) {
                // line 19
                echo "     <legend class=\"breakdance-form-field__label\">";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 19);
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 19), "required", [], "any", false, false, false, 19)) ? ("<span class=\"breakdance-form-field__required\">*</span>") : (""));
                echo "</legend>
  ";
            }
            // line 21
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "options", [], "any", false, false, false, 21));
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 22
                echo "      <div class=\"breakdance-form-checkbox\">
          <input
              type=\"checkbox\"
              name=\"";
                // line 25
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 25);
                echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 25) > 1)) ? ("[]") : (""));
                echo "\"
              value=\"";
                // line 26
                echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", true, true, false, 26) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26)) : (\Breakdance\Lib\Vendor\Twig\Extension\Escaper\Functions\twig_escape_filter($this->env, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 26))));
                echo "\"
              id=\"";
                // line 27
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27);
                echo "-";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27);
                echo "\"
              ";
                // line 28
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, false, 28)) ? ("checked") : (""));
                echo "
              ";
                // line 29
                if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 29), "conditional", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                ";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_conditionalFormFieldAttributes", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 30), "condition", [], "any", false, false, false, 30)], 30, $context, $this->getSourceContext());
                    echo "
              ";
                }
                // line 32
                echo "          >
          <label class=\"breakdance-form-checkbox__text\" for=\"";
                // line 33
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33);
                echo "-";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33);
                echo "\">";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 33);
                echo "</label>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "</fieldset>
";
        }
        // line 38
        echo "


    ";
        // line 41
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 41), "append", [], "any", false, false, false, 41);
        echo "
    ";
        // line 42
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "64700b816bed020b816bfe5c3aee37260b647323";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 42,  189 => 41,  184 => 38,  180 => 36,  159 => 33,  156 => 32,  150 => 30,  148 => 29,  144 => 28,  138 => 27,  134 => 26,  129 => 25,  124 => 22,  106 => 21,  99 => 19,  97 => 18,  94 => 17,  88 => 15,  86 => 14,  83 => 13,  81 => 12,  78 => 11,  71 => 8,  66 => 7,  64 => 6,  59 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "64700b816bed020b816bfe5c3aee37260b647323", "");
    }
}
