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

/* 86927073ee2aa978560f35925febba57e102fce3 */
class __TwigTemplate_bbc3d0bd129a91e7d4ce303db8bf92bd extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "86927073ee2aa978560f35925febba57e102fce3", 2)->unwrap();
        // line 3
        $macros["e"] = $this->macros["e"] = $this;
        // line 4
        $context["type"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 4), "style", [], "any", false, false, false, 4))) ? ("classic") : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 4), "style", [], "any", false, false, false, 4)));
        // line 5
        $context["effect"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_test_empty(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 5), "expand_styles", [], "any", false, false, false, 5), "effect", [], "any", false, false, false, 5))) ? ("fade") : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 5), "expand_styles", [], "any", false, false, false, 5), "effect", [], "any", false, false, false, 5)));
        // line 6
        echo "
";
        // line 10
        echo "
";
        // line 14
        echo "
";
        // line 18
        echo "


  ";
        // line 21
        if ((($context["type"] ?? null) == "full-screen")) {
            // line 22
            echo "    <button aria-label=\"";
            echo Breakdance\Elements\twig_esc_html__("Toggle search", "breakdance");
            echo "\" aria-expanded=\"false\" aria-controls=\"search-form-%%ID%%\" class=\"search-form__button search-form__button--full-screen js-search-form-expand-button\">
        ";
            // line 23
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 23), "icon", [], "any", false, false, false, 23)) {
                // line 24
                echo "            ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 24), "icon", [], "any", false, false, false, 24), "svgCode", [], "any", false, false, false, 24);
                echo "
        ";
            } else {
                // line 26
                echo "            ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["e"], "macro_searchIcon", [], 26, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 28
            echo "    </button>
  ";
        }
        // line 29
        echo " 


<form id=\"search-form-%%ID%%\" role=\"search\" method=\"get\" data-type=\"";
        // line 32
        echo ($context["type"] ?? null);
        echo "\" aria-hidden=\"";
        echo (((($context["type"] ?? null) == "full-screen")) ? ("true") : ("false"));
        echo "\" class=\"js-search-form search-form search-form--";
        echo ($context["type"] ?? null);
        echo "\" action=\"";
        echo home_url();
        echo "\">
 ";
        // line 33
        if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 33), "limit_to_post_type", [], "any", false, false, false, 33)) {
            // line 34
            echo "   <input type='hidden' name='post_type' value='";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 34), "limit_to_post_type", [], "any", false, false, false, 34);
            echo "' />
 ";
        }
        // line 36
        echo " <div class=\"search-form__container\">
  ";
        // line 37
        if ((($context["type"] ?? null) == "classic")) {
            // line 38
            echo "    <button type=\"submit\" aria-label=\"search\" class=\"search-form__button";
            echo (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 38), "classic_styles", [], "any", false, false, false, 38), "icon_button", [], "any", false, false, false, 38), "type", [], "any", false, false, false, 38) == "text")) ? (" has-text") : (""));
            echo "\">
      ";
            // line 39
            if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 39), "classic_styles", [], "any", false, false, false, 39), "icon_button", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "custom")) {
                // line 40
                echo "\t\t  ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, false, false, 40), "classic_styles", [], "any", false, false, false, 40), "icon_button", [], "any", false, false, false, 40), "icon", [], "any", false, false, false, 40), "svgCode", [], "any", false, false, false, 40);
                echo "
      ";
            } elseif ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,             // line 41
($context["design"] ?? null), "form", [], "any", false, false, false, 41), "classic_styles", [], "any", false, false, false, 41), "icon_button", [], "any", false, false, false, 41), "type", [], "any", false, false, false, 41) == "text")) {
                // line 42
                echo "          ";
                echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, true, false, 42), "classic_styles", [], "any", false, true, false, 42), "icon_button", [], "any", false, true, false, 42), "text", [], "any", true, true, false, 42)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "form", [], "any", false, true, false, 42), "classic_styles", [], "any", false, true, false, 42), "icon_button", [], "any", false, true, false, 42), "text", [], "any", false, false, false, 42), "Search")) : ("Search"));
                echo "
      ";
            } else {
                // line 44
                echo "          ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["e"], "macro_searchIcon", [], 44, $context, $this->getSourceContext());
                echo "
      ";
            }
            // line 46
            echo "    </button>
  ";
        }
        // line 47
        echo " 
   

  \t
  \t<label class=\"screen-reader-text\" for=\"search-form-field-%%ID%%\">Search for:</label>
   
    ";
        // line 53
        if ((($context["type"] ?? null) == "classic")) {
            // line 54
            echo "    <input id=\"search-form-field-%%ID%%\" type=\"text\" class=\"js-search-form-field search-form__field\" placeholder=\"";
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 54), "placeholder", [], "any", false, false, false, 54);
            echo "\" value=\"\" name=\"s\" />
  \t";
        }
        // line 55
        echo " 

    ";
        // line 57
        if ((($context["type"] ?? null) == "expand")) {
            // line 58
            echo "      <div class=\"form-search__wrapper form-search__wrapper--";
            echo ($context["effect"] ?? null);
            echo "\">
        <input id=\"search-form-field-%%ID%%\" type=\"text\" class=\"js-search-form-field search-form__field\" placeholder=\"";
            // line 59
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 59), "placeholder", [], "any", false, false, false, 59);
            echo "\" value=\"\" name=\"s\" />
      </div>
    ";
        }
        // line 61
        echo " 
   
    ";
        // line 63
        if ((($context["type"] ?? null) == "expand")) {
            // line 64
            echo "      <div role=\"button\" class=\"search-form__button js-search-form-expand-button\">
        ";
            // line 65
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["e"], "macro_searchIcon", [], 65, $context, $this->getSourceContext());
            echo "
        ";
            // line 66
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["e"], "macro_closeIcon", [], 66, $context, $this->getSourceContext());
            echo "
      </div>
    ";
        }
        // line 68
        echo " 

     ";
        // line 70
        if ((($context["type"] ?? null) == "full-screen")) {
            // line 71
            echo "      <div class=\"search-form__lightbox\">
        <div role=\"button\" class=\"search-form__lightbox-close js-search-form-close\">
          ";
            // line 73
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["e"], "macro_closeIcon", [], 73, $context, $this->getSourceContext());
            echo "
        </div>

        <div class=\"search-form__lightbox-bg js-search-form-lightbox-bg\"></div>
       
      
     <div class=\"search-form__lightbox-container\">
        <button type=\"submit\" class=\"search-form__lightbox-button\">
          ";
            // line 81
            if (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 81), "icon", [], "any", false, false, false, 81)) {
                // line 82
                echo "\t\t  \t";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 82), "icon", [], "any", false, false, false, 82), "svgCode", [], "any", false, false, false, 82);
                echo "
      \t  ";
            } else {
                // line 84
                echo "          \t";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["e"], "macro_searchIcon", [], 84, $context, $this->getSourceContext());
                echo "
      \t  ";
            }
            // line 86
            echo "        </button>
        <input type=\"text\" id=\"search-form-field-%%ID%%\" class=\"js-search-form-field search-form__field\" placeholder=\"";
            // line 87
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "form", [], "any", false, false, false, 87), "placeholder", [], "any", false, false, false, 87);
            echo "\" value=\"\" name=\"s\" />
      </div>

    </div>
  
    ";
        }
        // line 92
        echo " 
  </div>
</form>


";
    }

    // line 7
    public function macro_searchIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 8
            echo "\t<svg width=\"100%\" aria-hidden=\"true\" class=\"search-form__icon--search\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><!--! Font Awesome Pro 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d=\"M504.1 471l-134-134C399.1 301.5 415.1 256.8 415.1 208c0-114.9-93.13-208-208-208S-.0002 93.13-.0002 208S93.12 416 207.1 416c48.79 0 93.55-16.91 129-45.04l134 134C475.7 509.7 481.9 512 488 512s12.28-2.344 16.97-7.031C514.3 495.6 514.3 480.4 504.1 471zM48 208c0-88.22 71.78-160 160-160s160 71.78 160 160s-71.78 160-160 160S48 296.2 48 208z\"/></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_arrowIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 12
            echo "\t<svg width=\"100%\" aria-hidden=\"true\" class=\"search-form__icon--arrow\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><!--! Font Awesome Pro 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d=\"M264.6 70.63l176 168c4.75 4.531 7.438 10.81 7.438 17.38s-2.688 12.84-7.438 17.38l-176 168c-9.594 9.125-24.78 8.781-33.94-.8125c-9.156-9.5-8.812-24.75 .8125-33.94l132.7-126.6H24.01c-13.25 0-24.01-10.76-24.01-24.01s10.76-23.99 24.01-23.99h340.1l-132.7-126.6C221.8 96.23 221.5 80.98 230.6 71.45C239.8 61.85 254.1 61.51 264.6 70.63z\"/></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_closeIcon(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            echo "  <svg width=\"100%\" aria-hidden=\"true\" class=\"search-form__icon--close\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\"><!--! Font Awesome Pro 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d=\"M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z\"/></svg>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "86927073ee2aa978560f35925febba57e102fce3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 16,  297 => 15,  287 => 12,  275 => 11,  265 => 8,  253 => 7,  244 => 92,  235 => 87,  232 => 86,  226 => 84,  220 => 82,  218 => 81,  207 => 73,  203 => 71,  201 => 70,  197 => 68,  191 => 66,  187 => 65,  184 => 64,  182 => 63,  178 => 61,  172 => 59,  167 => 58,  165 => 57,  161 => 55,  155 => 54,  153 => 53,  145 => 47,  141 => 46,  135 => 44,  129 => 42,  127 => 41,  122 => 40,  120 => 39,  115 => 38,  113 => 37,  110 => 36,  104 => 34,  102 => 33,  92 => 32,  87 => 29,  83 => 28,  77 => 26,  71 => 24,  69 => 23,  64 => 22,  62 => 21,  57 => 18,  54 => 14,  51 => 10,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "86927073ee2aa978560f35925febba57e102fce3", "");
    }
}
