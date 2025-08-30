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

/* 7bea2a176d84d2a034d09bce15e36388ae176345 */
class __TwigTemplate_ac7a14afd5e91eb0f02fc58d7fe393cf extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "7bea2a176d84d2a034d09bce15e36388ae176345", 2)->unwrap();
        // line 3
        echo "
        %%SELECTOR%% {
            ";
        // line 5
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [($context["background"] ?? null), ($context["layout"] ?? null), ($context["size"] ?? null), ($context["typography"] ?? null), ($context["globalSettings"] ?? null), ($context["spacing"] ?? null), ($context["borders"] ?? null), ($context["effects"] ?? null)], 5, $context, $this->getSourceContext());
        echo "
        }

    ";
        // line 8
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_css", [($context["custom_css"] ?? null)], 8, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "7bea2a176d84d2a034d09bce15e36388ae176345";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "7bea2a176d84d2a034d09bce15e36388ae176345", "");
    }
}
