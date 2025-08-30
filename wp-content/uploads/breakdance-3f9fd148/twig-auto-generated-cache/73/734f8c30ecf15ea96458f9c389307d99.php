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

/* 2726aa508568bae9cc1cdae9975ea093cbbabf3d */
class __TwigTemplate_1099c6843326bec0ab61541e1e1337dd extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2726aa508568bae9cc1cdae9975ea093cbbabf3d", 2)->unwrap();
        // line 3
        $context["logos"] = [0 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-1.png", 1 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-2.png", 2 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-3.png", 3 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-4.png", 4 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-5.png", 5 => "https://breakdancedemos.com/elements/wp-content/uploads/sites/8/2022/08/logo-6.png"];
        // line 11
        echo "
";
        // line 12
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 12), "type", [], "any", false, false, false, 12) == "animated")) {
            // line 13
            echo "  <div class=\"un-logo-bar__marquee-content carousel-type__";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "list", [], "any", false, false, false, 13), "animation", [], "any", false, false, false, 13), "animation_type", [], "any", false, false, false, 13);
            echo "\">
  ";
            // line 14
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 14), "logos", [], "any", false, false, false, 14)) {
                // line 15
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6]);
                foreach ($context['_seq'] as $context["_key"] => $context["repeat"]) {
                    // line 16
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 16), "logos", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 17
                        echo "        ";
                        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 17)) {
                            // line 18
                            echo "    \t";
                            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkStart", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 18), "un-logo-bar__logo-wrapper"], 18, $context, $this->getSourceContext());
                            echo "
        \t";
                            // line 19
                            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 19), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19), false], 19, $context, $this->getSourceContext());
                            echo "
     \t";
                            // line 20
                            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkEnd", [], 20, $context, $this->getSourceContext());
                            echo "
        ";
                        } else {
                            // line 22
                            echo "        <div class=\"un-logo-bar__logo-wrapper\">
          ";
                            // line 23
                            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 23), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 23), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 23), false], 23, $context, $this->getSourceContext());
                            echo "
        </div>
        ";
                        }
                        // line 26
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "  ";
            } else {
                // line 29
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4]);
                foreach ($context['_seq'] as $context["_key"] => $context["repeat"]) {
                    // line 30
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["logos"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
                        // line 31
                        echo "        <div class=\"un-logo-bar__logo-wrapper\">
          <img src=\"";
                        // line 32
                        echo $context["logo"];
                        echo "\">
        </div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "  ";
            }
            // line 37
            echo "  </div>
";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 38
($context["design"] ?? null), "list", [], "any", false, false, false, 38), "type", [], "any", false, false, false, 38) == "side-scroll")) {
            // line 39
            echo "  <div class=\"un-logo-bar__scrollable-wrapper\">
  ";
            // line 40
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 40), "logos", [], "any", false, false, false, 40)) {
                // line 41
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 41), "logos", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "      ";
                    if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 42)) {
                        // line 43
                        echo "        ";
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkStart", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 43), "un-logo-bar__logo-wrapper"], 43, $context, $this->getSourceContext());
                        echo "
        \t";
                        // line 44
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 44), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 44), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 44), false], 44, $context, $this->getSourceContext());
                        echo "
     \t";
                        // line 45
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkEnd", [], 45, $context, $this->getSourceContext());
                        echo "
        ";
                    } else {
                        // line 47
                        echo "        <div class=\"un-logo-bar__logo-wrapper\">
          ";
                        // line 48
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 48), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 48), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 48), false], 48, $context, $this->getSourceContext());
                        echo "
        </div>
        ";
                    }
                    // line 51
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    ";
            } else {
                // line 53
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["logos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
                    // line 54
                    echo "        <div class=\"un-logo-bar__logo-wrapper\">
          <img src=\"";
                    // line 55
                    echo $context["logo"];
                    echo "\">
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "  ";
            }
            // line 59
            echo "  </div>
";
        } else {
            // line 61
            echo "  ";
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 61), "logos", [], "any", false, false, false, 61)) {
                // line 62
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "setting", [], "any", false, false, false, 62), "logos", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 63
                    echo "      ";
                    if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 63)) {
                        // line 64
                        echo "        ";
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkStart", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 64), "un-logo-bar__logo-wrapper"], 64, $context, $this->getSourceContext());
                        echo "
        \t";
                        // line 65
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 65), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 65), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 65), false], 65, $context, $this->getSourceContext());
                        echo "
     \t";
                        // line 66
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkEnd", [], 66, $context, $this->getSourceContext());
                        echo "
        ";
                    } else {
                        // line 68
                        echo "        <div class=\"un-logo-bar__logo-wrapper\">
          ";
                        // line 69
                        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 69), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 69), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 69), false], 69, $context, $this->getSourceContext());
                        echo "
        </div>
        ";
                    }
                    // line 72
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "    ";
            } else {
                // line 74
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["logos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
                    // line 75
                    echo "        <div class=\"un-logo-bar__logo-wrapper\">
          <img src=\"";
                    // line 76
                    echo $context["logo"];
                    echo "\">
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "2726aa508568bae9cc1cdae9975ea093cbbabf3d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 79,  263 => 76,  260 => 75,  255 => 74,  252 => 73,  246 => 72,  240 => 69,  237 => 68,  232 => 66,  228 => 65,  223 => 64,  220 => 63,  215 => 62,  212 => 61,  208 => 59,  205 => 58,  196 => 55,  193 => 54,  188 => 53,  185 => 52,  179 => 51,  173 => 48,  170 => 47,  165 => 45,  161 => 44,  156 => 43,  153 => 42,  148 => 41,  146 => 40,  143 => 39,  141 => 38,  138 => 37,  135 => 36,  129 => 35,  120 => 32,  117 => 31,  112 => 30,  107 => 29,  104 => 28,  98 => 27,  92 => 26,  86 => 23,  83 => 22,  78 => 20,  74 => 19,  69 => 18,  66 => 17,  61 => 16,  56 => 15,  54 => 14,  49 => 13,  47 => 12,  44 => 11,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2726aa508568bae9cc1cdae9975ea093cbbabf3d", "");
    }
}
