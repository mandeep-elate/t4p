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

/* 05f12b3b94cb206a315d156f078b119ce04961a9 */
class __TwigTemplate_c098f7d3f74429683ea2b49a629f8583 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "05f12b3b94cb206a315d156f078b119ce04961a9", 2)->unwrap();
        // line 3
        $context["c"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 3);
        // line 4
        $context["size"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "size", [], "any", false, false, false, 4);
        // line 5
        $context["img"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "image", [], "any", false, false, false, 5);
        // line 6
        $context["lazyLoad"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "lazy_load", [], "any", false, false, false, 6);
        // line 7
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "alt", [], "any", false, false, false, 7), "alt", [], "any", false, false, false, 7) == "disable")) {
            // line 8
            $context["alt"] = false;
        } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 9
($context["c"] ?? null), "alt", [], "any", false, false, false, 9), "alt", [], "any", false, false, false, 9) == "custom")) {
            // line 10
            $context["alt"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "alt", [], "any", false, false, false, 10), "custom_alt", [], "any", false, false, false, 10);
        } else {
            // line 12
            $context["alt"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "alt", [], "any", false, false, false, 12);
        }
        // line 16
        $context["linkType"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "link", [], "any", false, false, false, 16), "link_type", [], "any", false, false, false, 16);
        // line 17
        $context["hasLink"] = (($context["linkType"] ?? null) != null);
        // line 18
        $context["lightboxImage"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, true, false, 18), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "link", [], "any", false, false, false, 18), "image_size", [], "any", false, false, false, 18), [], "array", true, true, false, 18)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter((($__internal_compile_0 = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, true, false, 18)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "link", [], "any", false, false, false, 18), "image_size", [], "any", false, false, false, 18)] ?? null) : null), ($context["img"] ?? null))) : (($context["img"] ?? null)));
        // line 20
        $context["links"] = ["url" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 21
($context["c"] ?? null), "link", [], "any", false, false, false, 21), "url", [], "any", false, false, false, 21), "media" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 22
($context["img"] ?? null), "url", [], "any", false, false, false, 22), "lightbox" => \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 23
($context["lightboxImage"] ?? null), "url", [], "any", false, false, false, 23)];
        // line 25
        $context["link"] = (($__internal_compile_1 = ($context["links"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["linkType"] ?? null)] ?? null) : null);
        // line 26
        $context["target"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "link", [], "any", false, false, false, 26), "new_tab", [], "any", false, false, false, 26)) ? ("_blank") : ("_self"));
        // line 29
        $context["fromLibrary"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, true, false, 29), "from_library", [], "any", true, true, false, 29)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, true, false, 29), "from_library", [], "any", false, false, false, 29), false)) : (false));
        // line 30
        $context["caption"] = ((($context["fromLibrary"] ?? null)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "caption", [], "any", false, false, false, 30)) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, false, false, 30), "caption", [], "any", false, false, false, 30)));
        // line 31
        $context["captionPosition"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "caption", [], "any", false, false, false, 31), "position", [], "any", false, false, false, 31);
        // line 32
        $context["hasCaption"] = ((((($context["fromLibrary"] ?? null) && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "caption", [], "any", false, false, false, 32)) || \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "caption", [], "any", false, false, false, 32), "caption", [], "any", false, false, false, 32))) ? (true) : (false));
        // line 35
        $context["hasMask"] = (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "effects", [], "any", false, false, false, 35), "mask", [], "any", false, false, false, 35), "shape", [], "any", false, false, false, 35) != null);
        // line 38
        $context["captionClass"] = ((($context["captionPosition"] ?? null)) ? (("breakdance-image--caption-" . ($context["captionPosition"] ?? null))) : (""));
        // line 39
        $context["cssClasses"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_join_filter([0 => ("breakdance-image--" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 40
($context["img"] ?? null), "id", [], "any", false, false, false, 40)), 1 =>         // line 41
($context["captionClass"] ?? null)], " ");
        // line 44
        echo "<figure class=\"breakdance-image ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_trim_filter(($context["cssClasses"] ?? null));
        echo "\">
\t<div class=\"breakdance-image-container\">
\t\t<div class=\"breakdance-image-clip\">";
        // line 47
        if (($context["hasLink"] ?? null)) {
            // line 48
            echo "<a class=\"breakdance-image-link breakdance-image-link--";
            echo ($context["linkType"] ?? null);
            echo "\" href=\"";
            echo ($context["link"] ?? null);
            echo "\" target=\"";
            echo ($context["target"] ?? null);
            echo "\" rel=\"noopener\" data-sub-html=\"";
            echo ($context["caption"] ?? null);
            echo "\" data-lg-size=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["lightboxImage"] ?? null), "width", [], "any", false, false, false, 48);
            echo "-";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["lightboxImage"] ?? null), "height", [], "any", false, false, false, 48);
            echo "\">";
        }
        // line 51
        if (($context["hasMask"] ?? null)) {
            // line 52
            echo "<div class=\"breakdance-image__mask\">";
        }
        // line 55
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_image", [($context["img"] ?? null), ($context["size"] ?? null), ($context["alt"] ?? null), ($context["lazyLoad"] ?? null)], 55, $context, $this->getSourceContext());
        // line 57
        if (($context["hasMask"] ?? null)) {
            // line 58
            echo "</div>";
        }
        // line 61
        if (($context["hasLink"] ?? null)) {
            // line 62
            echo "</a>";
        }
        // line 64
        echo "</div>
\t</div>";
        // line 67
        if (($context["hasCaption"] ?? null)) {
            // line 68
            echo "<figcaption class=\"breakdance-image__caption\">";
            // line 69
            echo ($context["caption"] ?? null);
            // line 70
            echo "</figcaption>";
        }
        // line 72
        echo "</figure>

";
    }

    public function getTemplateName()
    {
        return "05f12b3b94cb206a315d156f078b119ce04961a9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  142 => 70,  140 => 69,  138 => 68,  136 => 67,  133 => 64,  130 => 62,  128 => 61,  125 => 58,  123 => 57,  121 => 55,  118 => 52,  116 => 51,  101 => 48,  99 => 47,  93 => 44,  91 => 41,  90 => 40,  89 => 39,  87 => 38,  85 => 35,  83 => 32,  81 => 31,  79 => 30,  77 => 29,  75 => 26,  73 => 25,  71 => 23,  70 => 22,  69 => 21,  68 => 20,  66 => 18,  64 => 17,  62 => 16,  59 => 12,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "05f12b3b94cb206a315d156f078b119ce04961a9", "");
    }
}
