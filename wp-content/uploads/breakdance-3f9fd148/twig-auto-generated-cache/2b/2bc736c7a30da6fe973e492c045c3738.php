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

/* 1093f29c415e9c8d4da3f2233214f6e0680ad1e2 */
class __TwigTemplate_896e895369acf1880b8562e4dc16600f extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "1093f29c415e9c8d4da3f2233214f6e0680ad1e2", 2)->unwrap();
        // line 3
        echo "<div class=\"breakdance-swiper-wrapper\" data-swiper-id=\"%%ID%%\">
    <div class=\"swiper\">
      <div class=\"swiper-wrapper\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 6), "slides", [], "any", false, false, false, 6));
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
            // line 7
            echo "
\t    ";
            // line 8
            $context["overlay"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 8), "overlay", [], "any", false, false, false, 8)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 8), "overlay", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext())) : (false));
            // line 9
            echo "        ";
            $context["background"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 9), "color", [], "any", false, false, false, 9)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_backgroundColor", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 9), "color", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext())) : (false));
            // line 10
            echo "        ";
            $context["image"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 10), "image", [], "any", false, false, false, 10)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 10), "image", [], "any", false, false, false, 10)) : (false));
            // line 11
            echo "
        <div class=\"swiper-slide\">
          <div class=\"bde-basicslider__slide\"";
            // line 13
            if (($context["background"] ?? null)) {
                echo " style=\"";
                echo ($context["background"] ?? null);
                echo "\"";
            }
            echo ">
              <div class=\"bde-basicslider__content\">
            ";
            // line 15
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15)) {
                // line 16
                echo "              <";
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 16), "title_html_tag", [], "any", true, true, false, 16)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 16), "title_html_tag", [], "any", false, false, false, 16), "h3")) : ("h3"));
                echo " class=\"bde-basicslider__title\">";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16);
                echo "</";
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 16), "title_html_tag", [], "any", true, true, false, 16)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 16), "title_html_tag", [], "any", false, false, false, 16), "h3")) : ("h3"));
                echo ">
            ";
            }
            // line 18
            echo "            ";
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 18)) {
                // line 19
                echo "            <div class=\"bde-basicslider__text\">
              ";
                // line 20
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 20);
                echo "
            </div>
            ";
            }
            // line 23
            echo "            ";
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "button", [], "any", false, false, false, 23), "text", [], "any", false, false, false, 23)) {
                // line 24
                echo "                ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonHtml", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "button", [], "any", false, false, false, 24), "bde-basicslider__button", \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 24), (("content.content.slides[" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 24)) . "].button.text")], 24, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 26
            echo "            </div>

\t\t\t";
            // line 28
            if (($context["overlay"] ?? null)) {
                // line 29
                echo "\t\t\t<div class=\"bde-basicslider__overlay\" style=\"";
                echo ($context["overlay"] ?? null);
                echo "\"></div>
\t\t\t";
            }
            // line 31
            echo "\t\t\t";
            if (($context["image"] ?? null)) {
                // line 32
                echo "          ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [($context["image"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 32), "size", [], "any", false, false, false, 32), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 32), "alt", [], "any", false, false, false, 32), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "background", [], "any", false, false, false, 32), "lazy_load", [], "any", false, false, false, 32), "bde-basicslider__image"], 32, $context, $this->getSourceContext());
                echo "
\t\t\t";
            }
            // line 34
            echo "
          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
      </div>
    </div>
    ";
        // line 41
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 41)], 41, $context, $this->getSourceContext());
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "1093f29c415e9c8d4da3f2233214f6e0680ad1e2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 41,  159 => 38,  142 => 34,  136 => 32,  133 => 31,  127 => 29,  125 => 28,  121 => 26,  115 => 24,  112 => 23,  106 => 20,  103 => 19,  100 => 18,  90 => 16,  88 => 15,  79 => 13,  75 => 11,  72 => 10,  69 => 9,  67 => 8,  64 => 7,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1093f29c415e9c8d4da3f2233214f6e0680ad1e2", "");
    }
}
