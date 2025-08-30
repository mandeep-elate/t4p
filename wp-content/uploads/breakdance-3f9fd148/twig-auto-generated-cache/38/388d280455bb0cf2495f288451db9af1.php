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

/* f3768174ab82c7937adefdbba83bb835138f9479 */
class __TwigTemplate_063dd4d02e1ec6bfa8205ad55e25bc9e extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "f3768174ab82c7937adefdbba83bb835138f9479", 2)->unwrap();
        // line 3
        echo "<ul>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "list", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "
    ";
            // line 6
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 6), "svgCode", [], "any", false, false, false, 6))) {
                // line 7
                echo "      ";
                $context["icon"] = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d=\"M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z\"/></svg>";
                // line 8
                echo "    ";
            } else {
                // line 9
                echo "      ";
                $context["icon"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 9), "svgCode", [], "any", false, false, false, 9);
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    <li>
      ";
            // line 13
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 13)) {
                // line 14
                echo "        ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkStart", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 14), "bde-icon-list__item-wrapper"], 14, $context, $this->getSourceContext());
                echo "
      ";
            } else {
                // line 16
                echo "        <div class='bde-icon-list__item-wrapper'>
      ";
            }
            // line 18
            echo "
      <span class='bde-icon-list__icon'>
        ";
            // line 20
            echo ($context["icon"] ?? null);
            echo "
      </span>
      <span class='bde-icon-list__text' ";
            // line 22
            echo Breakdance\PluginsAPI\content_editable_php((("content.content.list[" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22)) . "].text"));
            echo ">
      ";
            // line 23
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 23);
            echo "
      </span>
      ";
            // line 25
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 25)) {
                // line 26
                echo "        ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkEnd", [], 26, $context, $this->getSourceContext());
                echo "
      ";
            } else {
                // line 28
                echo "        </div>
      ";
            }
            // line 30
            echo "
    </li>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "f3768174ab82c7937adefdbba83bb835138f9479";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 34,  125 => 30,  121 => 28,  115 => 26,  113 => 25,  108 => 23,  104 => 22,  99 => 20,  95 => 18,  91 => 16,  85 => 14,  83 => 13,  79 => 11,  76 => 10,  73 => 9,  70 => 8,  67 => 7,  65 => 6,  62 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "f3768174ab82c7937adefdbba83bb835138f9479", "");
    }
}
