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

/* ae233c29e141af022409a73874770d79670089a3 */
class __TwigTemplate_b86deb0b1e8325742d58515d2aa0ebe9 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "ae233c29e141af022409a73874770d79670089a3", 2)->unwrap();
        // line 3
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkStart", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 3), "link", [], "any", false, false, false, 3), "breakdance-menu-link", "", false, "content.content.text"], 3, $context, $this->getSourceContext());
        ob_start(function () { return ''; });
        // line 4
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkMaybeEnqueueLightboxStyles", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 4), "link", [], "any", false, false, false, 4)], 4, $context, $this->getSourceContext());
        echo "
";
        // line 5
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkMaybeEnqueueLinkActions", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 5), "link", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
";
        $context["prevent_whitespace_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 7), "tag", [], "any", false, false, false, 7)) {
            // line 8
            echo "  <";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "tag", [], "any", false, false, false, 8);
            echo " ";
            echo Breakdance\PluginsAPI\content_editable_php("content.content.text");
            echo ">
";
        }
        // line 10
        echo "  ";
        echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 10), "text", [], "any", true, true, false, 10)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, true, false, 10), "text", [], "any", false, false, false, 10), "Text Link")) : ("Text Link"));
        echo "
";
        // line 11
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 11), "tag", [], "any", false, false, false, 11)) {
            // line 12
            echo "  </";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 12), "tag", [], "any", false, false, false, 12);
            echo ">
";
        }
        // line 14
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_linkEnd", [], 14, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "ae233c29e141af022409a73874770d79670089a3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  71 => 12,  69 => 11,  64 => 10,  56 => 8,  54 => 7,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ae233c29e141af022409a73874770d79670089a3", "");
    }
}
