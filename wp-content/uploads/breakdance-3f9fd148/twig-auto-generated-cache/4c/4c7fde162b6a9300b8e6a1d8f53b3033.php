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

/* 9a49871d27bbb14ea507ed5e1693aee2e61273fd */
class __TwigTemplate_5ab5ec1ddf2a2568172d226a005e2e04 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "9a49871d27bbb14ea507ed5e1693aee2e61273fd", 2)->unwrap();
        // line 3
        ob_start(function () { return ''; });
        $context["fallbackimage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "  ";
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 5), "from", [], "any", false, false, false, 5) == "media_library")) {
            // line 6
            echo "    ";
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 6), "size", [], "any", false, false, false, 6)) {
                // line 7
                echo "      ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 7), "media", [], "any", false, false, false, 7), "sizes", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 7), "size", [], "any", false, false, false, 7)] ?? null) : null), "url", [], "any", false, false, false, 7);
                echo "
    ";
            } else {
                // line 9
                echo "      ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 9), "media", [], "any", false, false, false, 9), "url", [], "any", false, false, false, 9);
                echo "
    ";
            }
            // line 11
            echo "  ";
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 11), "from", [], "any", false, false, false, 11) == "url")) {
            // line 12
            echo "    ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, false, 12), "url", [], "any", false, false, false, 12);
            echo "
  ";
        }
        $context["imageurl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_spaceless(($context["imageurl"] ?? null)), "data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='540' height='540' viewBox='0 0 140 140'%3e%3cpath d='M0 0h140v140H0z' fill='%23e5e7eb'/%3e%3cpath d='M88 82.46H51.8v-4.52l6.74-6.74a1.13 1.13 0 011.6 0l5.23 5.23 12.76-12.77a1.13 1.13 0 011.6 0L88 71.91z' fill='%23e5e7eb'/%3e%3cpath d='M89.48 52.32H50.29a4.52 4.52 0 00-4.52 4.52V84a4.53 4.53 0 004.52 4.52h39.19A4.52 4.52 0 0094 84V56.84a4.52 4.52 0 00-4.52-4.52zm-33.16 5.27a5.28 5.28 0 11-5.27 5.28 5.27 5.27 0 015.27-5.28zM88 82.46H51.8v-4.52l6.74-6.74a1.13 1.13 0 011.6 0l5.23 5.23 12.76-12.77a1.13 1.13 0 011.6 0L88 71.91z' fill='%23d1d5db'/%3e%3c/svg%3e");
        echo "

";
    }

    public function getTemplateName()
    {
        return "9a49871d27bbb14ea507ed5e1693aee2e61273fd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  68 => 12,  65 => 11,  59 => 9,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "9a49871d27bbb14ea507ed5e1693aee2e61273fd", "");
    }
}
