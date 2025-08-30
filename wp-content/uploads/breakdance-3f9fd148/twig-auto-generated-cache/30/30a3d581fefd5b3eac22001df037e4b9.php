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

/* d5f76a65ad387ea4df79c8bdf592abf82edcdbb5 */
class __TwigTemplate_26c9c452ac7f5489bf80d1aa9cbf3176 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "d5f76a65ad387ea4df79c8bdf592abf82edcdbb5", 2)->unwrap();
        // line 3
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 4
            echo ":root {
    ";
            // line 6
            echo "    ";
            // line 7
            echo "    ";
            // line 8
            echo "
    --white: #ffffff;

    --grey-50: #f9fafb;
    --grey-100: #f3f4f6;
    --grey-200: #e5e7eb;
    --grey-300: #d1d5db;
    --grey-400: #9ca3af;
    --grey-450: #787e8b;
    --grey-500: #6b7280;
    --grey-600: #4b5563;
    --grey-700: #374151;
    --grey-800: #1f2937;
    --grey-900: #111827;

    --blue-500: #3b82f6;
    --blue-600: #2563eb;

    --pink-600: #db2777;

    --emerald-100: #d1fae5;
    --emerald-700: #047857;

    --sky-100: #e0f2fe;
    --sky-500: #0ea5e9;

    --red-50: #fef2f2;
    --red-500: #ef4444;
    --red-700: #b91c1c;

    --indigo-50: #eef2ff;
    --indigo-600: #4f46e5;
    --indigo-700: #4338ca;

    --yellow-500: #fbbf24;

    ";
            // line 45
            echo "    --bde-brand-primary-color: ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 45), "brand", [], "any", true, true, false, 45)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 45), "brand", [], "any", false, false, false, 45), "var(--blue-500)")) : ("var(--blue-500)"));
            echo ";
    --bde-brand-primary-color-hover: ";
            // line 46
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 46), "brand_hover", [], "any", true, true, false, 46)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 46), "brand_hover", [], "any", false, false, false, 46), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 46), "brand", [], "any", false, false, false, 46))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 46), "brand", [], "any", false, false, false, 46))), "var(--blue-600)");
            echo ";

    ";
            // line 49
            echo "    ";
            // line 50
            echo "    ";
            // line 51
            echo "
    ";
            // line 53
            echo "    ";
            $context["defaultFont"] = "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\"";
            // line 54
            echo "
    ";
            // line 55
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 55), "body_font", [], "any", false, false, false, 55))) {
                // line 56
                echo "    --bde-body-font-family: ";
                echo ($context["defaultFont"] ?? null);
                echo ";
    ";
            } else {
                // line 58
                echo "    --bde-body-font-family: ";
                echo Breakdance\Fonts\process_font(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 58), "body_font", [], "any", false, false, false, 58));
                echo ";
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 61), "heading_font", [], "any", false, false, false, 61))) {
                // line 62
                echo "    --bde-heading-font-family: ";
                echo ($context["defaultFont"] ?? null);
                echo ";
    ";
            } else {
                // line 64
                echo "    --bde-heading-font-family: ";
                echo Breakdance\Fonts\process_font(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 64), "heading_font", [], "any", false, false, false, 64));
                echo ";
    ";
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    --bde-base-font-size: 16px;
    --bde-body-font-size: ";
            // line 69
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 69), "advanced", [], "any", false, true, false, 69), "body", [], "any", false, true, false, 69), "typography", [], "any", false, true, false, 69), "custom", [], "any", false, true, false, 69), "customTypography", [], "any", false, true, false, 69), "fontSize", [], "any", false, true, false, 69), "style", [], "any", true, true, false, 69)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 69), "advanced", [], "any", false, true, false, 69), "body", [], "any", false, true, false, 69), "typography", [], "any", false, true, false, 69), "custom", [], "any", false, true, false, 69), "customTypography", [], "any", false, true, false, 69), "fontSize", [], "any", false, true, false, 69), "style", [], "any", false, false, false, 69), "var(--bde-base-font-size)")) : ("var(--bde-base-font-size)"));
            echo ";

    ";
            // line 72
            echo "    --bde-font-size-ratio: 1.250;
    --bde-h6-font-size: ";
            // line 73
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 73), "advanced", [], "any", false, true, false, 73), "headings", [], "any", false, true, false, 73), "h6", [], "any", false, true, false, 73), "typography", [], "any", false, true, false, 73), "custom", [], "any", false, true, false, 73), "customTypography", [], "any", false, true, false, 73), "fontSize", [], "any", false, true, false, 73), "style", [], "any", true, true, false, 73)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 73), "advanced", [], "any", false, true, false, 73), "headings", [], "any", false, true, false, 73), "h6", [], "any", false, true, false, 73), "typography", [], "any", false, true, false, 73), "custom", [], "any", false, true, false, 73), "customTypography", [], "any", false, true, false, 73), "fontSize", [], "any", false, true, false, 73), "style", [], "any", false, false, false, 73), "var(--bde-base-font-size)")) : ("var(--bde-base-font-size)"));
            echo ";
    --bde-h5-font-size: ";
            // line 74
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 74), "advanced", [], "any", false, true, false, 74), "headings", [], "any", false, true, false, 74), "h5", [], "any", false, true, false, 74), "typography", [], "any", false, true, false, 74), "custom", [], "any", false, true, false, 74), "customTypography", [], "any", false, true, false, 74), "fontSize", [], "any", false, true, false, 74), "style", [], "any", true, true, false, 74)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 74), "advanced", [], "any", false, true, false, 74), "headings", [], "any", false, true, false, 74), "h5", [], "any", false, true, false, 74), "typography", [], "any", false, true, false, 74), "custom", [], "any", false, true, false, 74), "customTypography", [], "any", false, true, false, 74), "fontSize", [], "any", false, true, false, 74), "style", [], "any", false, false, false, 74), "calc(var(--bde-h6-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h6-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h4-font-size: ";
            // line 75
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 75), "advanced", [], "any", false, true, false, 75), "headings", [], "any", false, true, false, 75), "h4", [], "any", false, true, false, 75), "typography", [], "any", false, true, false, 75), "custom", [], "any", false, true, false, 75), "customTypography", [], "any", false, true, false, 75), "fontSize", [], "any", false, true, false, 75), "style", [], "any", true, true, false, 75)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 75), "advanced", [], "any", false, true, false, 75), "headings", [], "any", false, true, false, 75), "h4", [], "any", false, true, false, 75), "typography", [], "any", false, true, false, 75), "custom", [], "any", false, true, false, 75), "customTypography", [], "any", false, true, false, 75), "fontSize", [], "any", false, true, false, 75), "style", [], "any", false, false, false, 75), "calc(var(--bde-h5-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h5-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h3-font-size: ";
            // line 76
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 76), "advanced", [], "any", false, true, false, 76), "headings", [], "any", false, true, false, 76), "h3", [], "any", false, true, false, 76), "typography", [], "any", false, true, false, 76), "custom", [], "any", false, true, false, 76), "customTypography", [], "any", false, true, false, 76), "fontSize", [], "any", false, true, false, 76), "style", [], "any", true, true, false, 76)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 76), "advanced", [], "any", false, true, false, 76), "headings", [], "any", false, true, false, 76), "h3", [], "any", false, true, false, 76), "typography", [], "any", false, true, false, 76), "custom", [], "any", false, true, false, 76), "customTypography", [], "any", false, true, false, 76), "fontSize", [], "any", false, true, false, 76), "style", [], "any", false, false, false, 76), "calc(var(--bde-h4-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h4-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h2-font-size: ";
            // line 77
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 77), "advanced", [], "any", false, true, false, 77), "headings", [], "any", false, true, false, 77), "h2", [], "any", false, true, false, 77), "typography", [], "any", false, true, false, 77), "custom", [], "any", false, true, false, 77), "customTypography", [], "any", false, true, false, 77), "fontSize", [], "any", false, true, false, 77), "style", [], "any", true, true, false, 77)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 77), "advanced", [], "any", false, true, false, 77), "headings", [], "any", false, true, false, 77), "h2", [], "any", false, true, false, 77), "typography", [], "any", false, true, false, 77), "custom", [], "any", false, true, false, 77), "customTypography", [], "any", false, true, false, 77), "fontSize", [], "any", false, true, false, 77), "style", [], "any", false, false, false, 77), "calc(var(--bde-h3-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h3-font-size) * var(--bde-font-size-ratio))"));
            echo ";
    --bde-h1-font-size: ";
            // line 78
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 78), "advanced", [], "any", false, true, false, 78), "headings", [], "any", false, true, false, 78), "h1", [], "any", false, true, false, 78), "typography", [], "any", false, true, false, 78), "custom", [], "any", false, true, false, 78), "customTypography", [], "any", false, true, false, 78), "fontSize", [], "any", false, true, false, 78), "style", [], "any", true, true, false, 78)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 78), "advanced", [], "any", false, true, false, 78), "headings", [], "any", false, true, false, 78), "h1", [], "any", false, true, false, 78), "typography", [], "any", false, true, false, 78), "custom", [], "any", false, true, false, 78), "customTypography", [], "any", false, true, false, 78), "fontSize", [], "any", false, true, false, 78), "style", [], "any", false, false, false, 78), "calc(var(--bde-h2-font-size) * var(--bde-font-size-ratio))")) : ("calc(var(--bde-h2-font-size) * var(--bde-font-size-ratio))"));
            echo ";

    ";
            // line 81
            echo "    --bde-body-text-color: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 81), "text", [], "any", true, true, false, 81)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 81), "text", [], "any", false, false, false, 81), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 81), "advanced", [], "any", false, false, false, 81), "body", [], "any", false, false, false, 81), "color", [], "any", false, false, false, 81))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 81), "advanced", [], "any", false, false, false, 81), "body", [], "any", false, false, false, 81), "color", [], "any", false, false, false, 81))), "var(--grey-700)");
            echo ";
    --bde-headings-color: ";
            // line 82
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 82), "headings", [], "any", true, true, false, 82)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 82), "headings", [], "any", false, false, false, 82), "var(--grey-900)")) : ("var(--grey-900)"));
            echo ";

    --bde-background-color:";
            // line 84
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 84), "background", [], "any", true, true, false, 84)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 84), "background", [], "any", false, false, false, 84), "var(--grey-50)")) : ("var(--grey-50)"));
            echo ";

    ";
            // line 87
            echo "    ";
            $context["colors"] = (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 87), "palette", [], "any", false, true, false, 87), "colors", [], "any", true, true, false, 87) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 87), "palette", [], "any", false, true, false, 87), "colors", [], "any", false, false, false, 87)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 87), "palette", [], "any", false, true, false, 87), "colors", [], "any", false, false, false, 87)) : ([]));
            // line 88
            echo "    ";
            $context["gradients"] = (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 88), "palette", [], "any", false, true, false, 88), "gradients", [], "any", true, true, false, 88) &&  !(null === \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 88), "palette", [], "any", false, true, false, 88), "gradients", [], "any", false, false, false, 88)))) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 88), "palette", [], "any", false, true, false, 88), "gradients", [], "any", false, false, false, 88)) : ([]));
            // line 89
            echo "    ";
            $context["globalColors"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_array_merge(($context["colors"] ?? null), ($context["gradients"] ?? null));
            // line 90
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["globalColors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 91
                echo "        ";
                if ($context["color"]) {
                    // line 92
                    echo "            ";
                    $context["value"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, true, false, 92), "value", [], "any", true, true, false, 92)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, true, false, 92), "value", [], "any", false, false, false, 92), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, false, false, 92))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, false, false, 92)));
                    // line 93
                    echo "            --";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["color"], "cssVariableName", [], "any", false, false, false, 93);
                    echo ": ";
                    echo ($context["value"] ?? null);
                    echo ";
        ";
                }
                // line 95
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
    ";
            // line 98
            echo "    --bde-transition-duration: ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "other", [], "any", false, true, false, 98), "transition_duration", [], "any", false, true, false, 98), "style", [], "any", true, true, false, 98)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "other", [], "any", false, true, false, 98), "transition_duration", [], "any", false, true, false, 98), "style", [], "any", false, false, false, 98), "300ms")) : ("300ms"));
            echo ";

    ";
            // line 101
            echo "    ";
            // line 102
            echo "    ";
            // line 103
            echo "
    --bde-column-gap: 32px;
    --bde-section-width: 1120px;
    --bde-section-vertical-padding: 100px;
    --bde-section-horizontal-padding: 20px;

    ";
            // line 110
            echo "    ";
            // line 111
            echo "    ";
            // line 112
            echo "
    ";
            // line 114
            echo "    --bde-button-primary-border-color: transparent;
    --bde-button-primary-border-color-hover: transparent;
    --bde-button-primary-text-color: white;
    --bde-button-primary-text-color-hover: white;

    ";
            // line 120
            echo "    --bde-button-secondary-text-color-hover: white;
    --bde-button-secondary-background-color: transparent;

    ";
            // line 124
            echo "    --bde-button-custom-border-color: var(--grey-900);
    --bde-button-custom-border-color-hover: var(--grey-700);
    --bde-button-custom-text-color: var(--white);
    --bde-button-custom-text-color-hover: var(--white);
    --bde-button-custom-background-color: var(--grey-900);
    --bde-button-custom-background-color-hover: var(--grey-700);

    ";
            // line 132
            echo "    --bde-button-font-weight: 500;
    --bde-button-border-radius: 3px;
    --bde-button-border-width: 1px;

    ";
            // line 137
            echo "    --bde-button-padding-base: 14px 24px;
    --bde-button-padding-sm: 8px 16px;
    --bde-button-padding-lg: 28px 54px;

    --bde-button-line-height: 1;

    ";
            // line 144
            echo "    ";
            // line 145
            echo "    ";
            // line 146
            echo "
    --bde-form-gap: 16px;
    --bde-form-after-label: 8px;
    --bde-form-after-sublabel: 8px;
    --bde-form-input-border-radius: 3px;
    --bde-form-input-background-color: var(--white);
    --bde-form-input-padding-top: 12px;
    --bde-form-input-padding-right: 16px;
    --bde-form-input-padding-bottom: 12px;
    --bde-form-input-padding-left: 16px;
    --bde-form-input-placeholder-color: var(--grey-450);
    --bde-form-input-border-width: 1px;
    --bde-form-input-border-color: var(--grey-300);
    --bde-form-label-font-weight: 500;
    --bde-form-label-required-color: var(--red-700);
    --bde-form-label-required-nudge-x: 0;
    --bde-form-label-required-nudge-y: 0;
    --bde-form-label-required-size: inherit;
    --bde-form-text-color: var(--grey-700);
    --bde-form-input-focused-background-color: var(--white);
    --bde-form-input-input-shadow: none;
    --bde-form-checkbox-size: 1em;

    ";
            // line 170
            echo "    ";
            // line 171
            echo "    ";
            // line 172
            echo "    --bde-woo-products-list-gap: var(--bde-woo-base-large-gaps);

    --bde-woo-base-paragraph-line-height: 1.4;
    --bde-woo-base-heading-line-height: 1.2;

    --bde-woo-base-border-color: var(--grey-300);
    --bde-woo-base-text-on-primary-color: var(--white);

    ";
            // line 181
            echo "    --bde-woo-base-space: 8px;
    --bde-woo-base-ratio: 1.618;

    ";
            // line 185
            echo "    --bde-woo-typography-font-weight-normal: ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 185), "advanced", [], "any", false, true, false, 185), "body", [], "any", false, true, false, 185), "typography", [], "any", false, true, false, 185), "custom", [], "any", false, true, false, 185), "customTypography", [], "any", false, true, false, 185), "fontWeight", [], "any", true, true, false, 185)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, true, false, 185), "advanced", [], "any", false, true, false, 185), "body", [], "any", false, true, false, 185), "typography", [], "any", false, true, false, 185), "custom", [], "any", false, true, false, 185), "customTypography", [], "any", false, true, false, 185), "fontWeight", [], "any", false, false, false, 185), "400")) : ("400"));
            echo ";
    --bde-woo-typography-font-weight-medium: 500;
    --bde-woo-typography-font-weight-heavy: 600;

    ";
            // line 190
            echo "    --bde-woo-buttons-and-links-line-height: 1;

    ";
            // line 193
            echo "    --bde-woo-buttons-and-links__disabled-button-color: var(--grey-300);
    --bde-woo-buttons-and-links__disabled-button-text-color: var(--white);

    ";
            // line 197
            echo "    --bde-woo-buttons-and-links__nav-link-background-active: var(--grey-50);
    --bde-woo-buttons-and-links__nav-border-radius: 4px;


    --bde-woo-forms__inputs-select2-selected-item: var(--grey-300);

    ";
            // line 204
            echo "    --bde-woo-forms__wrappers-small: 360px;

    ";
            // line 207
            echo "    --error-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.5 16.084l-1.403 1.416-4.09-4.096-4.102 4.096-1.405-1.405 4.093-4.092-4.093-4.098 1.405-1.405 4.088 4.089 4.091-4.089 1.416 1.403-4.092 4.087 4.092 4.094z\"/></svg>');
    --success-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1 17l-5-5.299 1.399-1.43 3.574 3.736 6.572-7.007 1.455 1.403-8 8.597z\"/></svg>');
    --info-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 18h-2v-6h-2v-2h4v8zm-1-9.75c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z\"/></svg>');
    --chevron-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z\"/></svg>');
    --checkbox-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M9 21.035l-9-8.638 2.791-2.87 6.156 5.874 12.21-12.436 2.843 2.817z\"/></svg>');
    --radiobutton-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><circle cx=\"12\" cy=\"12\" r=\"12\"/></svg>');
    --show-password-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm0-2c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z\"/></svg>');
    --hide-password-svg-icon: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M19.604 2.562l-3.346 3.137c-1.27-.428-2.686-.699-4.243-.699-7.569 0-12.015 6.551-12.015 6.551s1.928 2.951 5.146 5.138l-2.911 2.909 1.414 1.414 17.37-17.035-1.415-1.415zm-6.016 5.779c-3.288-1.453-6.681 1.908-5.265 5.206l-1.726 1.707c-1.814-1.16-3.225-2.65-4.06-3.66 1.493-1.648 4.817-4.594 9.478-4.594.927 0 1.796.119 2.61.315l-1.037 1.026zm-2.883 7.431l5.09-4.993c1.017 3.111-2.003 6.067-5.09 4.993zm13.295-4.221s-4.252 7.449-11.985 7.449c-1.379 0-2.662-.291-3.851-.737l1.614-1.583c.715.193 1.458.32 2.237.32 4.791 0 8.104-3.527 9.504-5.364-.729-.822-1.956-1.99-3.587-2.952l1.489-1.46c2.982 1.9 4.579 4.327 4.579 4.327z\"/></svg>');
    --error-svg-icon-color: var(--red-500);
    --success-svg-icon-color: var(--emerald-700);
    --info-svg-icon-color: var(--sky-500);
    --chevron-svg-icon-color: var(--grey-900);
    --checkbox-svg-icon-color: var(--grey-900);
    --radiobutton-svg-icon-color: var(--grey-900);
    --show-password-svg-icon-color: var(--grey-900);
    --hide-password-svg-icon-color: var(--grey-900);

    ";
            // line 225
            echo "    --bde-woo-notices__icon-size: 16px;
    --bde-woo-notices__padding: 24px;

    --bde-woo-notices__border-radius: 4px;
    --bde-woo-notices__error-background: var(--red-50);
    --bde-woo-notices__error-text: var(--red-500);
    --bde-woo-notices__error-link-text: var(--red-500);
    --bde-woo-notices__error-link-text-hover: var(--red-500);
    --bde-woo-notices__info-background: var(--sky-100);
    --bde-woo-notices__info-text: var(--sky-500);
    --bde-woo-notices__info-link-text: var(--sky-500);
    --bde-woo-notices__info-link-text-hover: var(--sky-500);
    --bde-woo-notices__success-background: var(--emerald-100);
    --bde-woo-notices__success-text: var(--emerald-700);
    --bde-woo-notices__success-link-text: var(--emerald-700);
    --bde-woo-notices__success-link-text-hover: var(--emerald-700);

    ";
            // line 243
            echo "    --bde-woo-sale-badge__border-radius: 2px;
    --bde-woo-sale-badge__padding: 4px 8px;

    ";
            // line 247
            echo "    --bde-woo-ratings__star-color: var(--yellow-500);
    --bde-woo-ratings__star-size: 18px;
    --bde-woo-ratings__filled-star-svg: url('data:image/svg+xml;utf8,<svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><polygon id=\"Path\" points=\"12 0.587 15.668 8.155 24 9.306 17.936 15.134 19.416 23.413 12 19.446 4.583 23.413 6.064 15.134 0 9.306 8.332 8.155\"></polygon></svg>');
    --bde-woo-ratings__empty-star-svg: url('data:image/svg+xml;utf8,<svg width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M12,5.173 L14.335,9.99 L19.64,10.722 L15.779,14.432 L16.721,19.702 L12,17.178 L7.279,19.703 L8.221,14.433 L4.36,10.723 L9.665,9.99 L12,5.173 L12,5.173 Z M12,0.587 L8.332,8.155 L0,9.306 L6.064,15.134 L4.584,23.413 L12,19.446 L19.416,23.412 L17.936,15.133 L24,9.306 L15.668,8.156 L12,0.587 Z\" id=\"Shape\"></path></svg>');

    ";
            // line 253
            echo "    --bde-woo-product-images__border-radius: 4px;
    --bde-woo-product-images__border-width: 0px;
    --bde-woo-product-images__border-color: var(--grey-300);

    ";
            // line 258
            echo "    --bde-woo-wrappers__background-color: var(--white);
    --bde-woo-wrappers__border-radius: 4px;
    --bde-woo-wrappers__border-color: var(--grey-300);
    --bde-woo-wrappers__border-width: 1px;
    --bde-woo-wrappers__shadow: rgba(0, 0, 0, 0.05) 0 1px 3px, rgba(0, 0, 0, 0.05) 0 1px 2px;

    ";
            // line 265
            echo "    --bde-woo-tables__header-color: var(--grey-100);
    --bde-woo-tables__background-color: var(--white);
    --bde-woo-tables__border-radius: 4px;
    --bde-woo-tables__border-width: 1px;

    ";
            // line 271
            echo "    --bde-woo-widgets__chip-background-color: transparent;
    --bde-woo-widgets__chip-background-color-hover: var(--indigo-50);
    --bde-woo-widgets__chip-text-color: inherit;

    --bde-woo-widgets__handle-border-color: var(--grey-300);
    --bde-woo-widgets__handle-background-color: var(--white);
    --bde-woo-widgets__handle-background-color-hover: var(--white);
    --bde-woo-widgets__handle-shadow: rgba(0, 0, 0, 0.05) 0 1px 3px, rgba(0, 0, 0, 0.05) 0 1px 2px;
    --bde-woo-widgets__handle-shadow-hover: var(--grey-300) 0 0 4px;

    ";
            // line 282
            echo "    --bde-woo-widgets__remove-item-from-cart-color: var(--grey-450);
    --bde-woo-select2__active-item-background-color: var(--indigo-50);
    --bde-woo-gallery__zoom-icon-shadow: rgba(0, 0, 0, 0.05) 0 1px 3px, rgba(0, 0, 0, 0.05) 0 1px 2px;

    ";
            // line 287
            echo "    --bde-woo-payment-box-background-color: var(--grey-100);
    --bde-woo-payment-box-border-color: var(--grey-200);
    --bde-woo-payment-box-border-width: 1px;

    ";
            // line 292
            echo "    --bde-woo-quicklook-button-icon: url(icons/eye.svg);
    --bde-woo-quicklook-button-background-color: none;
    --bde-woo-quicklook-button-icon-size: 20px;
    --bde-woo-quicklook-button-backdrop-color: rgba(0, 0, 0, 0.15);
    --bde-woo-quicklook-button-backdrop-opacity: 0.7;
    --bde-woo-quicklook-modal-background-color: var(--white);
    --bde-woo-quicklook-overlay-color: rgba(0, 0, 0, 0.7);
    --bde-woo-quicklook-close-button-size: 2em;
    --bde-woo-quicklook-arrow-size: 1em;
    --bde-woo-quicklook-arrow-color: var(--white);

    ";
            // line 304
            echo "    --bde-woo-swatch-space-between-options: 10px;
    --bde-woo-swatch-padding: 7px 7px;
    --bde-woo-swatch-color-width: 30px;
    --bde-woo-swatch-color-height: 30px;
    --bde-woo-swatch-border: 1px solid var(--grey-200);
    --bde-woo-swatch-border-color-hover: var(--grey-400);
    --bde-woo-swatch-shadow: none;
    --bde-woo-swatch-shadow-hover: none;
    --bde-woo-swatch-background: var(--white);
    --bde-woo-swatch-background-hover: var(--grey-50);
    --bde-woo-swatch-color-padding: 2px;
    --bde-woo-swatch-tooltip-color: var(--white);
    --bde-woo-swatch-tooltip-background: var(--grey-900);
    --bde-woo-swatch-tooltip-padding: 7px;
    --bde-woo-swatch-space-after-label: 8px;

    ";
            // line 321
            echo "    --bde-woo-responsive__stack: row;
}

:root,
.bde-global-css-vars {
    ";
            // line 327
            echo "    --bde-links-color: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 327), "links", [], "any", true, true, false, 327)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 327), "links", [], "any", false, false, false, 327), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 327), "advanced", [], "any", false, false, false, 327), "links", [], "any", false, false, false, 327), "color", [], "any", false, false, false, 327))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 327), "advanced", [], "any", false, false, false, 327), "links", [], "any", false, false, false, 327), "color", [], "any", false, false, false, 327))), "var(--bde-brand-primary-color)");
            echo ";
    --bde-links-color-hover: ";
            // line 328
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 328), "links_hover", [], "any", true, true, false, 328)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 328), "links_hover", [], "any", false, false, false, 328), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 328), "links", [], "any", false, false, false, 328))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 328), "links", [], "any", false, false, false, 328))), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 328), "advanced", [], "any", false, false, false, 328), "links", [], "any", false, false, false, 328), "color", [], "any", false, false, false, 328)), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 328), "advanced", [], "any", false, false, false, 328), "links", [], "any", false, false, false, 328), "color_hover", [], "any", false, false, false, 328)), "var(--bde-brand-primary-color-hover)");
            echo ";

    ";
            // line 331
            echo "    ";
            // line 332
            echo "    ";
            // line 333
            echo "
    ";
            // line 335
            echo "    --bde-button-primary-background-color: var(--bde-brand-primary-color);
    --bde-button-primary-background-color-hover: var(--bde-brand-primary-color-hover);

    ";
            // line 339
            echo "    --bde-button-secondary-border-color: var(--bde-brand-primary-color);
    --bde-button-secondary-border-color-hover: var(--bde-brand-primary-color);
    --bde-button-secondary-text-color: var(--bde-brand-primary-color);
    --bde-button-secondary-background-color-hover: var(--bde-brand-primary-color);

    ";
            // line 345
            echo "    --bde-button-text-text-color: var(--bde-links-color);
    --bde-button-text-text-color-hover: var(--bde-links-color-hover);

    ";
            // line 349
            echo "    --bde-button-font-size: var(--bde-body-font-size);

    ";
            // line 352
            echo "    ";
            // line 353
            echo "    ";
            // line 354
            echo "
    --bde-form-font-size: var(--bde-body-font-size);
    --bde-form-input-border-top-left-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-top-right-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-bottom-left-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-bottom-right-radius: var(--bde-form-input-border-radius);
    --bde-form-input-border-top: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-input-border-right: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-input-border-bottom: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-input-border-left: var(--bde-form-input-border-width) solid var(--bde-form-input-border-color);
    --bde-form-label-color: var(--bde-headings-color);
    --bde-form-input-focused-border-color: var(--bde-brand-primary-color);
    --bde-form-input-focused-shadow: var(--bde-brand-primary-color) 0 0 2px;
    --bde-form-checkbox-selected-color: var(--bde-brand-primary-color);

    ";
            // line 370
            echo "    ";
            // line 371
            echo "    ";
            // line 372
            echo "    --bde-z-index-lightbox: 1100; /* Always in front of everything */
    --bde-z-index-popup: 1050;
    --bde-z-index-modal: 1000;
    --bde-z-index-modal-backdrop: calc(var(--bde-z-index-modal) - 1);
    --bde-z-index-high: 300;
    --bde-z-index-medium: 200;
    --bde-z-index-low: 100;
    --bde-z-index-sticky: 10;

    --bde-z-index-minicart: var(--bde-z-index-modal);
    --bde-z-index-minicart-backdrop: var(--bde-z-index-modal-backdrop);
    --bde-z-index-menu-dropdown: var(--bde-z-index-modal);
    --bde-z-index-menu-mobile: var(--bde-z-index-modal);
    --bde-z-index-menu-backdrop: var(--bde-z-index-modal-backdrop);
    --bde-z-index-search-fullscreen: var(--bde-z-index-modal);
    --bde-z-index-back-to-top: var(--bde-z-index-high);
    --bde-z-index-scroll-progress: var(--bde-z-index-high);
    --bde-z-index-header-sticky: var(--bde-z-index-medium);
    --bde-z-index-header-overlay: calc(var(--bde-z-index-header-sticky) - 1);
    --bde-z-index-social-share-buttons: var(--bde-z-index-low);

    ";
            // line 394
            echo "    ";
            // line 395
            echo "    ";
            // line 396
            echo "
    --bde-woo-base-transition: all ease var(--bde-transition-duration);

    --bde-woo-base-text-color: var(--bde-body-text-color);
    --bde-woo-base-headings-color: var(--bde-headings-color);

    --bde-woo-base-primary-color: var(--bde-brand-primary-color);
    --bde-woo-base-primary-color-hover: var(--bde-brand-primary-color-hover);

    ";
            // line 406
            echo "
    --bde-woo-base-extra-small-gaps: calc(var(--bde-woo-base-small-gaps) / var(--bde-woo-base-ratio));
    --bde-woo-base-small-gaps: calc(var(--bde-woo-base-space) / var(--bde-woo-base-ratio));
    --bde-woo-base-standard-gaps: var(--bde-woo-base-space); ";
            // line 410
            echo "    --bde-woo-base-medium-gaps: calc(var(--bde-woo-base-space) * var(--bde-woo-base-ratio));
    --bde-woo-base-big-gaps: calc(var(--bde-woo-base-medium-gaps) *  var(--bde-woo-base-ratio));
    --bde-woo-base-large-gaps: calc(var(--bde-woo-base-big-gaps) *  var(--bde-woo-base-ratio));
    --bde-woo-base-extra-large-gaps: calc(var(--bde-woo-base-large-gaps) * var(--bde-woo-base-ratio));

    ";
            // line 416
            echo "    --bde-woo-typography-ratio: var(--bde-font-size-ratio);

    ";
            // line 419
            echo "    --bde-woo-typography__size-small: calc(var(--bde-woo-typography__size-standard) / var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-small-font-family: var(--bde-body-font-family);

    --bde-woo-typography__size-standard: var(--bde-body-font-size);
    --bde-woo-typography__size-standard-font-family: var(--bde-body-font-family);

    --bde-woo-typography__size-medium: calc(var(--bde-woo-typography__size-standard) * var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-medium-font-family: var(--bde-heading-font-family);

    --bde-woo-typography__size-large: calc(var(--bde-woo-typography__size-medium) * var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-large-font-family: var(--bde-heading-font-family);

    --bde-woo-typography__size-extra-large: calc(var(--bde-woo-typography__size-large) * var(--bde-woo-typography-ratio));
    --bde-woo-typography__size-extra-large-font-family: var(--bde-heading-font-family);

    ";
            // line 435
            echo "    --bde-woo-buttons-and-links__text-link-color: ";
            echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 435), "links", [], "any", true, true, false, 435)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 435), "links", [], "any", false, false, false, 435), "var(--bde-woo-base-primary-color)")) : ("var(--bde-woo-base-primary-color)"));
            echo ";
    --bde-woo-buttons-and-links__text-link-color-hover: ";
            // line 436
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 436), "links_hover", [], "any", true, true, false, 436)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, true, false, 436), "links_hover", [], "any", false, false, false, 436), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 436), "links", [], "any", false, false, false, 436))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "colors", [], "any", false, false, false, 436), "links", [], "any", false, false, false, 436))), "var(--bde-woo-base-primary-color-hover)");
            echo ";

    ";
            // line 439
            echo "    --bde-woo-buttons-and-links__nav-link-color: var(--bde-woo-base-text-color);
    --bde-woo-buttons-and-links__nav-link-color-hover: var(--bde-woo-base-text-on-primary-color);
    --bde-woo-buttons-and-links__nav-link-color-active: var(--bde-woo-base-primary-color);

    ";
            // line 444
            echo "    --bde-woo-forms__spacing-after-label: var(--bde-form-after-label);
    --bde-woo-forms__spacing-between-fields: var(--bde-form-gap);
    --bde-woo-forms__spacing-between-columns: var(--bde-woo-base-extra-large-gaps);

    --bde-woo-forms__labels-color: var(--bde-form-label-color);

    --bde-woo-forms__inputs-background-color: var(--bde-form-input-background-color);
    --bde-woo-forms__inputs-text-color: var(--bde-form-text-color);
    --bde-woo-forms__inputs-placeholder-color: var(--bde-form-input-placeholder-color);
    --bde-woo-forms__inputs-border-color: var(--bde-form-input-border-color);
    --bde-woo-forms__inputs-border-width: var(--bde-form-input-border-width);
    --bde-woo-forms__inputs-border-radius: var(--bde-form-input-border-top-left-radius) var(--bde-form-input-border-top-right-radius) var(--bde-form-input-border-bottom-right-radius) var(--bde-form-input-border-bottom-left-radius);
    --bde-woo-forms__inputs-background-color-focused: var(--bde-form-input-focused-background-color);
    --bde-woo-forms__inputs-border-color-focused: var(--bde-form-input-focused-border-color);
    --bde-woo-forms__inputs-shadow-focused: var(--bde-form-input-focused-shadow);
    --bde-woo-forms__inputs-shadow: var(--bde-form-input-input-shadow);

    --bde-woo-forms__inputs-select2-hover-item: var(--bde-woo-base-primary-color);

    ";
            // line 464
            echo "    --bde-woo-forms__labels-required-color: var(--bde-form-label-required-color);
    --bde-woo-forms__labels-required-size:  var(--bde-form-label-required-size);

    --bde-woo-forms__labels-required-nudge-x: var(--bde-form-label-required-nudge-x);
    --bde-woo-forms__labels-required-nudge-y: var(--bde-form-label-required-nudge-y);

    ";
            // line 471
            echo "    --bde-woo-tables__border-color: var(--bde-woo-base-border-color);

    ";
            // line 474
            echo "    --bde-woo-sale-badge__background-color: var(--bde-woo-base-primary-color);
    --bde-woo-sale-badge__text-color: var(--bde-woo-base-text-on-primary-color);
    --bde-woo-sale-badge__font-weight: var(--bde-woo-typography-font-weight-heavy);
    --bde-woo-sale-badge__font-size: var(--bde-woo-typography__size-standard);

    ";
            // line 480
            echo "    --bde-woo-widgets__chip-text-color-hover: var(--bde-woo-buttons-and-links__text-link-color);
    --bde-woo-widgets__handle-border-color-hover: var(--bde-woo-base-primary-color);

    ";
            // line 484
            echo "    --bde-woo-notices__padding-left: calc(var(--bde-woo-notices__padding) + var(--bde-woo-notices__icon-size) + (var(--bde-woo-notices__icon-size) / 2));

    ";
            // line 487
            echo "    --bde-woo-quicklook-button-text-color: var(--bde-button-primary-text-color);
    --bde-woo-quicklook-button-background-color-hover: var(--bde-woo-quicklook-button-background-color);
    --bde-woo-quicklook-button-icon-spacing: var(--bde-woo-base-standard-gaps);

    --bde-woo-quicklook-close-button-color: var(--bde-woo-base-headings-color);
    --bde-woo-quicklook-arrow-color-hover: var(--bde-woo-quicklook-arrow-color);
    --bde-woo-quicklook-arrow-background-color: var(--bde-brand-primary-color);
    --bde-woo-quicklook-arrow-background-color-hover: var(--bde-woo-quicklook-arrow-background-color);

    ";
            // line 497
            echo "    --bde-woo-swatch-space-between-items: var(--bde-woo-base-medium-gaps);
    --bde-woo-swatch-background-selected: var(--bde-woo-swatch-background-hover);
    --bde-woo-swatch-border-color-selected: var(--bde-woo-swatch-border-color-hover);
    --bde-woo-swatch-shadow-selected: var(--bde-woo-swatch-shadow-hover);
    --bde-woo-swatch-color-background: var(--bde-woo-swatch-background);
}

";
        }
        // line 505
        echo "
";
        // line 509
        echo "
:root {
    ";
        // line 511
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 511), "ratio", [], "any", false, false, false, 511)) {
            // line 512
            echo "        --bde-font-size-ratio: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 512), "ratio", [], "any", false, false, false, 512);
            echo ";
    ";
        }
        // line 514
        echo "
    ";
        // line 515
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 515), "base_size", [], "any", false, false, false, 515), "style", [], "any", false, false, false, 515)) {
            // line 516
            echo "        --bde-base-font-size: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 516), "base_size", [], "any", false, false, false, 516), "style", [], "any", false, false, false, 516);
            echo ";
    ";
        }
        // line 518
        echo "}

";
        // line 520
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 521
            echo "
";
            // line 523
            echo ".breakdance .button-atom {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  vertical-align: middle;
  user-select: none;
  appearance: none;
  box-sizing: border-box;
  margin: 0;
  border: 0;
  padding: 0;
  background-color: transparent;
  font-size: var(--bde-button-font-size);
  line-height: var(--bde-button-line-height);
  transform: translate(0, 0);
  max-width: 100%;
  width: var(--bde-button-width);
}

";
            // line 543
            echo ".breakdance .button-atom--primary,
.breakdance .button-atom--secondary,
.breakdance .button-atom--custom {
  text-align: center;
  font-weight: var(--bde-button-font-weight);
  text-decoration: none;
  padding: var(--bde-button-padding-base);
  border-radius: var(--bde-button-border-radius);
  cursor: pointer;
  border-width: var(--bde-button-border-width);
  border-style: solid;
  border-color: transparent;
  transition-timing-function: ease-in-out;
  transition-property: all;
  transition-duration: var(--bde-transition-duration);
  overflow: hidden;
}

.breakdance .button-atom--text {
  color: var(--bde-button-text-text-color);
}

.breakdance .button-atom--text:hover {
  color: var(--bde-button-text-text-color-hover);
}

";
            // line 570
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonVariant", ["primary"], 570, $context, $this->getSourceContext());
            echo "
";
            // line 571
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonVariant", ["secondary"], 571, $context, $this->getSourceContext());
            echo "
";
            // line 572
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonVariant", ["custom"], 572, $context, $this->getSourceContext());
            echo "

";
            // line 575
            echo ".breakdance .button-atom:disabled,
.breakdance .button-atom:hover:disabled {
    filter: grayscale(100%);
    opacity: 0.6;
    cursor: not-allowed;
}


";
            // line 584
            echo ".button-atom__icon-wrapper > svg:not(.breakdance-icon-atom-svg-gradient) {
  font-size: inherit;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: var(--bde-brand-primary-color);
  fill: var(--bde-brand-primary-color);
}

";
            // line 594
            echo ".breakdance-icon-atom {
    display: flex;
    font-size: 40px;
}

.breakdance-icon-atom > svg:not(.breakdance-icon-atom-svg-gradient) {
    font-size: inherit;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: var(--bde-brand-primary-color);
    fill: var(--bde-brand-primary-color);
    transform: var(--eeiTransform);
}

";
        }
        // line 610
        echo "
";
        // line 611
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 612
            echo "
.breakdance *,
.breakdance *::before,
.breakdance *::after {
  box-sizing: border-box;
}

.breakdance img {
  max-width: 100%;
  height: auto;
}

.breakdance figure {
    margin-left: 0;
    margin-right: 0;
}

.breakdance-full-width {
  width: 100%;
  max-width: 100%;
}

.breakdance-rich-text-styles > *:first-child {
  margin-top: 0;
}

.breakdance-rich-text-styles > *:last-child {
  margin-bottom: 0;
}

";
            // line 643
            echo ".bde-stop-scrolling,
.bde-stop-scrolling body {
  overflow-y: hidden;
}

@supports (overflow-y: clip) {
  .bde-stop-scrolling,
  .bde-stop-scrolling body {
    overflow-y: clip;
  }
}

";
            // line 656
            echo "
/*
 * 1. Safari support
 * 2. Support position: sticky on compatible browsers
 */
.breakdance-animation-enabled,
.breakdance-animation-enabled body { /* 1 */
  overflow-x: hidden;
}

@supports (overflow-x: clip) { /* 2 */
  .breakdance-animation-enabled,
  .breakdance-animation-enabled body { /* 1 */
    overflow-x: clip;
  }
}

";
            // line 674
            echo "
.lg-outer {
  z-index: var(--bde-z-index-lightbox);
}

.lg-outer .lg-thumb-outer {
  background-color: transparent;
}

.lg-video-play-icon {
  transform: translate3d(-40%, -50%, 0);
}

.admin-bar .lg-toolbar {
  top: var(--wp-admin--admin-bar--height);
}

";
            // line 692
            echo "
[data-bde-lazy-bg=\"waiting\"] {
  background-image: none!important;
}

";
            // line 698
            echo ".screen-reader-text {
border: 0;
clip: rect(1px,1px,1px,1px);
-webkit-clip-path: inset(50%);
clip-path: inset(50%);
height: 1px;
margin: -1px;
overflow: hidden;
overflow-wrap: normal!important;
word-wrap: normal!important;
padding: 0;
position: absolute!important;
width: 1px;
}

";
        }
        // line 714
        echo "
";
        // line 716
        echo "
.breakdance-global-gradients-sprite {
  position: absolute;
  width: 0;
  height: 0;
  overflow: hidden;
}

";
        // line 725
        if (Breakdance\Subscription\freeModeOnFrontend()) {
            // line 726
            echo ".breakdance-free-version-frontend-element-hider {
  animation-name: breakdance_free_version_hide_pro_element;
  animation-duration: 8s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

@keyframes breakdance_free_version_hide_pro_element {
  from {
    opacity: 1;
    filter: grayscale(0%);
  }
  to {
    opacity: .1;
    filter: grayscale(100%);
  }
}
";
        }
        // line 744
        echo "

";
        // line 746
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 747
            echo "
";
            // line 749
            echo ".breakdance {
    background-color: var(--bde-background-color);
    color: var(--bde-body-text-color);
}

.breakdance h1,
.breakdance h2,
.breakdance h3,
.breakdance h4,
.breakdance h5,
.breakdance h6 {
    color: var(--bde-headings-color);
}

.breakdance a,
.button-atom--text {
    color: var(--bde-links-color);
}

.breakdance a:hover,
.button-atom--text:hover {
    color: var(--bde-links-color-hover);
}

";
        }
        // line 774
        echo "


";
        // line 782
        echo "
";
        // line 784
        $context["primaryButtons"] = [0 => ".breakdance .button-atom--primary", 1 => ".bde-mini-cart-offcanvas .button", 2 => ".bde-woo-product-quicklook-button", 3 => ".woocommerce-page.woocommerce-lost-password .breakdance-woocommerce button[type=\"submit\"]", 4 => ".breakdance-woocommerce .woocommerce-form-track-order button[type=\"submit\"]", 5 => ".breakdance-woocommerce #place_order", 6 => ".breakdance-woocommerce .woocommerce-button.pay", 7 => ".breakdance-woocommerce button.single_add_to_cart_button", 8 => ".breakdance-woocommerce a.single_add_to_cart_button", 9 => ".breakdance-woocommerce a.button.wc-backward", 10 => ".breakdance-woocommerce a.checkout-button", 11 => ".breakdance-woocommerce p.order-again a.button", 12 => ".breakdance-woocommerce button[name=\"add-to-cart\"]", 13 => ".breakdance-woocommerce button[name=\"login\"]", 14 => ".breakdance-woocommerce button[name=\"save_address\"]", 15 => ".breakdance-woocommerce button[name=\"save_account_details\"]", 16 => ".breakdance-woocommerce button[name=\"woocommerce_checkout_place_order\"]", 17 => ".breakdance-woocommerce .woocommerce-MyAccount-content a.button[href*=\"add-payment-method\"]"];
        // line 805
        echo "

";
        // line 808
        $context["secondaryButtons"] = [0 => ".breakdance .button-atom--secondary", 1 => ".breakdance-woocommerce .woocommerce-MyAccount-downloads-file", 2 => ".breakdance-woocommerce .woocommerce-Address a.edit", 3 => ".breakdance-woocommerce .woocommerce-button.view", 4 => ".breakdance-woocommerce .woocommerce-Button--previous", 5 => ".breakdance-woocommerce .woocommerce-Button--next", 6 => ".breakdance-woocommerce .widget_price_filter .button", 7 => ".breakdance-woocommerce a.button.add_to_cart_button", 8 => ".breakdance-woocommerce a.button.product_type_grouped", 9 => ".breakdance-woocommerce .added_to_cart", 10 => ".breakdance-woocommerce .woocommerce-widget-layered-nav-dropdown__submit", 11 => ".breakdance-woocommerce .woocommerce-product-search button[type=\"submit\"]", 12 => ".breakdance-woocommerce a.product_type_simple", 13 => ".breakdance-woocommerce a.product_type_variable", 14 => ".breakdance-woocommerce .form-submit input[type=\"submit\"]", 15 => ".breakdance-woocommerce button[name=\"update_cart\"]", 16 => ".breakdance-woocommerce button[name=\"calc_shipping\"]", 17 => ".breakdance-woocommerce button[name=\"apply_coupon\"]", 18 => ".breakdance-woocommerce a.product_type_external"];
        // line 830
        echo "

";
        // line 832
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "buttons", [], "any", false, false, false, 832), "primary", [], "any", false, false, false, 832), ($context["primaryButtons"] ?? null), "primary", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 832, $context, $this->getSourceContext());
        echo "
";
        // line 833
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "buttons", [], "any", false, false, false, 833), "secondary", [], "any", false, false, false, 833), ($context["secondaryButtons"] ?? null), "secondary", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 833, $context, $this->getSourceContext());
        echo "



";
        // line 838
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 839
            echo "
    .breakdance {
        font-family: var(--bde-body-font-family);
        font-size: var(--bde-body-font-size);
    }

    .bde-h1,
    .bde-h2,
    .bde-h3,
    .bde-h4,
    .bde-h5,
    .bde-h6,
    .breakdance h1,
    .breakdance h2,
    .breakdance h3,
    .breakdance h4,
    .breakdance h5,
    .breakdance h6 {
        font-family: var(--bde-heading-font-family);
    }

    .bde-h1,
    .breakdance h1 {
        font-size: var(--bde-h1-font-size);
    }

    .bde-h2,
    .breakdance h2 {
        font-size: var(--bde-h2-font-size);
    }

    .bde-h3,
    .breakdance h3 {
        font-size: var(--bde-h3-font-size);
    }

    .bde-h4,
    .breakdance h4 {
        font-size: var(--bde-h4-font-size);
    }

    .bde-h5,
    .breakdance h5 {
        font-size: var(--bde-h5-font-size);
    }

    .bde-h6,
    .breakdance h6 {
        font-size: var(--bde-h6-font-size);
    }
";
        }
        // line 890
        echo "
";
        // line 892
        echo ".breakdance {
   ";
        // line 893
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 893), "advanced", [], "any", false, false, false, 893), "body", [], "any", false, false, false, 893), ($context["settings"] ?? null)], 893, $context, $this->getSourceContext());
        echo "
}

.bde-h1,
.bde-h2,
.bde-h3,
.bde-h4,
.bde-h5,
.bde-h6,
.breakdance h1,
.breakdance h2,
.breakdance h3,
.breakdance h4,
.breakdance h5,
.breakdance h6 {
    ";
        // line 908
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 908), "advanced", [], "any", false, false, false, 908), "headings", [], "any", false, false, false, 908), "all_headings", [], "any", false, false, false, 908), ($context["settings"] ?? null)], 908, $context, $this->getSourceContext());
        echo "
}

.bde-h1,
.breakdance h1 {
    ";
        // line 913
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 913), "advanced", [], "any", false, false, false, 913), "headings", [], "any", false, false, false, 913), "h1", [], "any", false, false, false, 913), ($context["settings"] ?? null)], 913, $context, $this->getSourceContext());
        echo "
}

.bde-h2,
.breakdance h2 {
    ";
        // line 918
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 918), "advanced", [], "any", false, false, false, 918), "headings", [], "any", false, false, false, 918), "h2", [], "any", false, false, false, 918), ($context["settings"] ?? null)], 918, $context, $this->getSourceContext());
        echo "
}

.bde-h3,
.breakdance h3 {
    ";
        // line 923
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 923), "advanced", [], "any", false, false, false, 923), "headings", [], "any", false, false, false, 923), "h3", [], "any", false, false, false, 923), ($context["settings"] ?? null)], 923, $context, $this->getSourceContext());
        echo "
}

.bde-h4,
.breakdance h4 {
    ";
        // line 928
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 928), "advanced", [], "any", false, false, false, 928), "headings", [], "any", false, false, false, 928), "h4", [], "any", false, false, false, 928), ($context["settings"] ?? null)], 928, $context, $this->getSourceContext());
        echo "
}

.bde-h5,
.breakdance h5 {
    ";
        // line 933
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 933), "advanced", [], "any", false, false, false, 933), "headings", [], "any", false, false, false, 933), "h5", [], "any", false, false, false, 933), ($context["settings"] ?? null)], 933, $context, $this->getSourceContext());
        echo "
}

.bde-h6,
.breakdance h6 {
    ";
        // line 938
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_typography", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 938), "advanced", [], "any", false, false, false, 938), "headings", [], "any", false, false, false, 938), "h6", [], "any", false, false, false, 938), ($context["settings"] ?? null)], 938, $context, $this->getSourceContext());
        echo "
}

.breakdance a,
.breakdance .button-atom--text {
    color: ";
        // line 943
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 943), "advanced", [], "any", false, false, false, 943), "links", [], "any", false, false, false, 943), "color", [], "any", false, false, false, 943);
        echo ";
    font-weight: ";
        // line 944
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 944), "advanced", [], "any", false, false, false, 944), "links", [], "any", false, false, false, 944), "font_weight", [], "any", false, false, false, 944);
        echo ";
    ";
        // line 945
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 945), "advanced", [], "any", false, false, false, 945), "links", [], "any", false, false, false, 945), "decoration", [], "any", false, false, false, 945), "style", [], "any", false, false, false, 945) == "none")) {
            // line 946
            echo "        text-decoration: none;
    ";
        }
        // line 948
        echo "    text-decoration-thickness: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 948), "advanced", [], "any", false, false, false, 948), "links", [], "any", false, false, false, 948), "decoration", [], "any", false, false, false, 948), "thickness", [], "any", false, false, false, 948), "style", [], "any", false, false, false, 948);
        echo ";
    text-decoration-line: ";
        // line 949
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 949), "advanced", [], "any", false, false, false, 949), "links", [], "any", false, false, false, 949), "decoration", [], "any", false, false, false, 949), "line", [], "any", false, false, false, 949);
        echo ";
    text-decoration-style: ";
        // line 950
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 950), "advanced", [], "any", false, false, false, 950), "links", [], "any", false, false, false, 950), "decoration", [], "any", false, false, false, 950), "style", [], "any", false, false, false, 950);
        echo ";
    text-decoration-color: ";
        // line 951
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 951), "advanced", [], "any", false, false, false, 951), "links", [], "any", false, false, false, 951), "decoration", [], "any", false, false, false, 951), "color", [], "any", false, false, false, 951);
        echo ";
}

.breakdance a:hover,
.breakdance .button-atom--text:hover {
    color: ";
        // line 956
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 956), "advanced", [], "any", false, false, false, 956), "links", [], "any", false, false, false, 956), "color_hover", [], "any", false, false, false, 956);
        echo ";
    ";
        // line 957
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 957), "advanced", [], "any", false, false, false, 957), "links", [], "any", false, false, false, 957), "decoration", [], "any", false, false, false, 957), "style_hover", [], "any", false, false, false, 957) == "none")) {
            // line 958
            echo "        text-decoration: none;
    ";
        }
        // line 960
        echo "    text-decoration-thickness: ";
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 960), "advanced", [], "any", false, false, false, 960), "links", [], "any", false, false, false, 960), "decoration", [], "any", false, false, false, 960), "thickness_hover", [], "any", false, false, false, 960), "style", [], "any", false, false, false, 960);
        echo ";
    text-decoration-line: ";
        // line 961
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 961), "advanced", [], "any", false, false, false, 961), "links", [], "any", false, false, false, 961), "decoration", [], "any", false, false, false, 961), "line_hover", [], "any", false, false, false, 961);
        echo ";
    text-decoration-style: ";
        // line 962
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 962), "advanced", [], "any", false, false, false, 962), "links", [], "any", false, false, false, 962), "decoration", [], "any", false, false, false, 962), "style_hover", [], "any", false, false, false, 962);
        echo ";
    text-decoration-color: ";
        // line 963
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 963), "advanced", [], "any", false, false, false, 963), "links", [], "any", false, false, false, 963), "decoration", [], "any", false, false, false, 963), "color_hover", [], "any", false, false, false, 963);
        echo ";
}







:root {
    ";
        // line 973
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "typography", [], "any", false, false, false, 973), "global_typography", [], "any", false, false, false, 973), "typography_presets", [], "any", false, false, false, 973));
        foreach ($context['_seq'] as $context["_key"] => $context["preset_style"]) {
            // line 974
            echo "        ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_customTypographyValuesAsCssVariables", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["preset_style"], "preset", [], "any", false, false, false, 974), "id", [], "any", false, false, false, 974), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["preset_style"], "custom", [], "any", false, false, false, 974), "customTypography", [], "any", false, false, false, 974)], 974, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset_style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 976
        echo "}

";
        // line 978
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "forms", [], "any", false, false, false, 978), "fields", [], "any", false, false, false, 978), "advanced", [], "any", false, false, false, 978), "file_input", [], "any", false, false, false, 978), "button", [], "any", false, false, false, 978), ".breakdance .breakdance-form-file-upload__button", "custom", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 978, $context, $this->getSourceContext());
        echo "
";
        // line 979
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1ButtonButton", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "forms", [], "any", false, false, false, 979), "submit_button", [], "any", false, false, false, 979), "styles", [], "any", false, false, false, 979), [0 => ".breakdance .breakdance-form-button", 1 => ".breakdance .comment-form__submit"], "primary", ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 979, $context, $this->getSourceContext());
        echo "
";
        // line 980
        echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1FormCss", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "forms", [], "any", false, false, false, 980), null, ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 980, $context, $this->getSourceContext());
        echo "



:root {
\t";
        // line 985
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 985), "sections", [], "any", false, false, false, 985), "container_width", [], "any", false, false, false, 985), "style", [], "any", false, false, false, 985)) {
            // line 986
            echo "\t--bde-section-width: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 986), "sections", [], "any", false, false, false, 986), "container_width", [], "any", false, false, false, 986), "style", [], "any", false, false, false, 986);
            echo ";
\t";
        }
        // line 988
        echo "
\t";
        // line 989
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 989), "sections", [], "any", false, false, false, 989), "vertical_padding", [], "any", false, false, false, 989), "style", [], "any", false, false, false, 989)) {
            // line 990
            echo "\t--bde-section-vertical-padding: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 990), "sections", [], "any", false, false, false, 990), "vertical_padding", [], "any", false, false, false, 990), "style", [], "any", false, false, false, 990);
            echo ";
\t";
        }
        // line 992
        echo "
\t";
        // line 993
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 993), "sections", [], "any", false, false, false, 993), "horizontal_padding", [], "any", false, false, false, 993), "style", [], "any", false, false, false, 993)) {
            // line 994
            echo "\t--bde-section-horizontal-padding: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 994), "sections", [], "any", false, false, false, 994), "horizontal_padding", [], "any", false, false, false, 994), "style", [], "any", false, false, false, 994);
            echo ";
\t";
        }
        // line 996
        echo "
    ";
        // line 997
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 997), "column_gap", [], "any", false, false, false, 997), "style", [], "any", false, false, false, 997)) {
            // line 998
            echo "\t--bde-column-gap: ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "containers", [], "any", false, false, false, 998), "column_gap", [], "any", false, false, false, 998), "style", [], "any", false, false, false, 998);
            echo ";
\t";
        }
        // line 1000
        echo "}


";
        // line 1003
        if (($context["isBaseBreakpoint"] ?? null)) {
            // line 1004
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code", [], "any", false, false, false, 1004), "stylesheets", [], "any", false, false, false, 1004));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 1005
                echo "        ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["stylesheet"], "code", [], "any", false, false, false, 1005);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1008
        echo "

      ";
        // line 1010
        $context["woocommerceEnabled"] = true;
        // line 1011
        echo "
      ";
        // line 1012
        if (($context["woocommerceEnabled"] ?? null)) {
            // line 1013
            echo "          ";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_wooGlobalStyler", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "woocommerce", [], "any", false, false, false, 1013), null, ($context["breakpoint"] ?? null), ($context["settings"] ?? null)], 1013, $context, $this->getSourceContext());
            echo "
      ";
        }
        // line 1015
        echo "    

";
    }

    public function getTemplateName()
    {
        return "d5f76a65ad387ea4df79c8bdf592abf82edcdbb5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1395 => 1015,  1389 => 1013,  1387 => 1012,  1384 => 1011,  1382 => 1010,  1378 => 1008,  1368 => 1005,  1363 => 1004,  1361 => 1003,  1356 => 1000,  1350 => 998,  1348 => 997,  1345 => 996,  1339 => 994,  1337 => 993,  1334 => 992,  1328 => 990,  1326 => 989,  1323 => 988,  1317 => 986,  1315 => 985,  1307 => 980,  1303 => 979,  1299 => 978,  1295 => 976,  1286 => 974,  1282 => 973,  1269 => 963,  1265 => 962,  1261 => 961,  1256 => 960,  1252 => 958,  1250 => 957,  1246 => 956,  1238 => 951,  1234 => 950,  1230 => 949,  1225 => 948,  1221 => 946,  1219 => 945,  1215 => 944,  1211 => 943,  1203 => 938,  1195 => 933,  1187 => 928,  1179 => 923,  1171 => 918,  1163 => 913,  1155 => 908,  1137 => 893,  1134 => 892,  1131 => 890,  1078 => 839,  1076 => 838,  1069 => 833,  1065 => 832,  1061 => 830,  1059 => 808,  1055 => 805,  1053 => 784,  1050 => 782,  1045 => 774,  1018 => 749,  1015 => 747,  1013 => 746,  1009 => 744,  989 => 726,  987 => 725,  977 => 716,  974 => 714,  956 => 698,  949 => 692,  930 => 674,  911 => 656,  897 => 643,  865 => 612,  863 => 611,  860 => 610,  842 => 594,  831 => 584,  821 => 575,  816 => 572,  812 => 571,  808 => 570,  780 => 543,  759 => 523,  756 => 521,  754 => 520,  750 => 518,  744 => 516,  742 => 515,  739 => 514,  733 => 512,  731 => 511,  727 => 509,  724 => 505,  714 => 497,  703 => 487,  699 => 484,  694 => 480,  687 => 474,  683 => 471,  675 => 464,  654 => 444,  648 => 439,  643 => 436,  638 => 435,  621 => 419,  617 => 416,  610 => 410,  605 => 406,  594 => 396,  592 => 395,  590 => 394,  567 => 372,  565 => 371,  563 => 370,  546 => 354,  544 => 353,  542 => 352,  538 => 349,  533 => 345,  526 => 339,  521 => 335,  518 => 333,  516 => 332,  514 => 331,  509 => 328,  504 => 327,  497 => 321,  479 => 304,  466 => 292,  460 => 287,  454 => 282,  442 => 271,  435 => 265,  427 => 258,  421 => 253,  414 => 247,  409 => 243,  390 => 225,  371 => 207,  367 => 204,  359 => 197,  354 => 193,  350 => 190,  342 => 185,  337 => 181,  327 => 172,  325 => 171,  323 => 170,  298 => 146,  296 => 145,  294 => 144,  286 => 137,  280 => 132,  271 => 124,  266 => 120,  259 => 114,  256 => 112,  254 => 111,  252 => 110,  244 => 103,  242 => 102,  240 => 101,  234 => 98,  231 => 96,  225 => 95,  217 => 93,  214 => 92,  211 => 91,  206 => 90,  203 => 89,  200 => 88,  197 => 87,  192 => 84,  187 => 82,  182 => 81,  177 => 78,  173 => 77,  169 => 76,  165 => 75,  161 => 74,  157 => 73,  154 => 72,  149 => 69,  146 => 68,  143 => 66,  137 => 64,  131 => 62,  129 => 61,  126 => 60,  120 => 58,  114 => 56,  112 => 55,  109 => 54,  106 => 53,  103 => 51,  101 => 50,  99 => 49,  94 => 46,  89 => 45,  51 => 8,  49 => 7,  47 => 6,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "d5f76a65ad387ea4df79c8bdf592abf82edcdbb5", "");
    }
}
