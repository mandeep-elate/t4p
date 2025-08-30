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

/* 7eb45ada30c15923f4f62ecef80159d36ed0e2f8 */
class __TwigTemplate_c40d7f9e611560856264abf58b3abcd6 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "7eb45ada30c15923f4f62ecef80159d36ed0e2f8", 2)->unwrap();
        // line 3
        $context["layout"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 3);
        // line 4
        $context["type"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "type", [], "any", true, true, false, 4)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "type", [], "any", false, false, false, 4), "grid")) : ("grid"));
        // line 5
        $context["isSlider"] = (($context["type"] ?? null) == "slider");
        // line 6
        $context["customSliderRatio"] = (((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "slider_images", [], "any", false, false, false, 6), "aspect_ratio", [], "any", false, false, false, 6) == "0")) ? ("custom") : ("ratio"));
        // line 7
        echo "
";
        // line 8
        $context["multiple"] = (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8) == "multiple");
        // line 9
        echo "
";
        // line 10
        $context["mode"] = "isotope";
        // line 11
        if ((($context["type"] ?? null) == "slider")) {
            // line 12
            echo "  ";
            $context["mode"] = "gallery-slider";
        } elseif (((        // line 13
($context["type"] ?? null) == "grid") &&  !($context["multiple"] ?? null))) {
            // line 14
            echo "  ";
            $context["mode"] = "default";
        }
        // line 16
        echo "
";
        // line 17
        $context["images"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 17), "images", [], "any", false, false, false, 17);
        // line 18
        $context["galleries"] = ((($context["multiple"] ?? null)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 18), "galleries", [], "any", false, false, false, 18)) : ([0 => ["images" => ($context["images"] ?? null)]]));
        // line 19
        echo "
";
        // line 20
        $context["linkType"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 20), "link", [], "any", false, false, false, 20);
        // line 21
        $context["linkEnabled"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_in_filter(($context["linkType"] ?? null), [0 => "lightbox", 1 => "custom_url", 2 => "media_file"]);
        // line 22
        $context["tag"] = ((($context["linkEnabled"] ?? null)) ? ("a") : ("div"));
        // line 23
        echo "
";
        // line 24
        $context["size"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 24), "image_size", [], "any", false, false, false, 24);
        // line 25
        $context["lazyLoad"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 25), "lazy_load", [], "any", false, false, false, 25);
        // line 26
        $context["showCaptions"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 26), "show_captions", [], "any", true, true, false, 26)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 26), "show_captions", [], "any", false, false, false, 26), "never")) : ("never"));
        // line 27
        echo "
";
        // line 28
        $context["animation"] = "none";
        // line 29
        if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, false, false, 29), "show_captions", [], "any", false, false, false, 29) == "on_hover")) {
            // line 30
            echo "  ";
            $context["animation"] = ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 30), "animation", [], "any", true, true, false, 30)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "captions", [], "any", false, true, false, 30), "animation", [], "any", false, false, false, 30), "fade")) : ("fade"));
        }
        // line 32
        echo "
";
        // line 34
        $context["cssClasses"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_join_filter([0 => ("ee-gallery--" .         // line 35
($context["mode"] ?? null)), 1 => ("ee-gallery--" .         // line 36
($context["type"] ?? null)), 2 => ("ee-gallery--" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 37
($context["content"] ?? null), "content", [], "any", false, false, false, 37), "type", [], "any", false, false, false, 37)), 3 => ("ee-gallery--" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 38
($context["content"] ?? null), "content", [], "any", false, false, false, 38), "link", [], "any", false, false, false, 38)), 4 => ("ee-gallery--" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 39
($context["design"] ?? null), "images", [], "any", false, false, false, 39), "hover_animation", [], "any", false, false, false, 39)), 5 => ("ee-gallery--caption-" . \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source,         // line 40
($context["design"] ?? null), "captions", [], "any", false, false, false, 40), "position", [], "any", false, false, false, 40)), 6 => ("ee-gallery--caption-" .         // line 41
($context["animation"] ?? null)), 7 => ("ee-gallery--" .         // line 42
($context["customSliderRatio"] ?? null))], " ");
        // line 44
        echo "
";
        // line 45
        $context["isEmpty"] = (( !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_length_filter($this->env, ($context["images"] ?? null)) &&  !($context["multiple"] ?? null)) || (($context["multiple"] ?? null) &&  !\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_length_filter($this->env, ($context["galleries"] ?? null))));
        // line 46
        echo "
";
        // line 47
        if (($context["isEmpty"] ?? null)) {
            // line 48
            echo "  ";
            $context["cssClasses"] = ((($context["cssClasses"] ?? null) . " ") . "ee-gallery--empty");
        }
        // line 50
        echo "
";
        // line 51
        if (($context["isSlider"] ?? null)) {
            // line 52
            echo "  ";
            $context["cssClasses"] = ((($context["cssClasses"] ?? null) . " ") . "swiper-wrapper");
        }
        // line 54
        echo "
";
        // line 55
        if ((($context["multiple"] ?? null) &&  !($context["isEmpty"] ?? null))) {
            // line 56
            echo "  ";
            $context["allEnabled"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 56), "filter_bar", [], "any", false, false, false, 56), "all_filter", [], "any", false, false, false, 56);
            // line 57
            echo "  ";
            $context["allLabel"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 57), "filter_bar", [], "any", false, false, false, 57), "all_label", [], "any", false, false, false, 57);
            // line 58
            echo "  ";
            $context["filters"] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 58), "galleries", [], "any", false, false, false, 58);
            // line 59
            echo "
  <div class=\"ee-gallery-filter\">
    <div class=\"bde-tabs\">
      ";
            // line 62
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_atomV1TabsHtml", ["%%ID%%", ($context["galleries"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "filter_bar", [], "any", false, false, false, 62), ["enabled" => ($context["allEnabled"] ?? null), "label" => ($context["allLabel"] ?? null)]], 62, $context, $this->getSourceContext());
            echo "
    </div>
  </div>
";
        }
        // line 66
        echo "
";
        // line 67
        if (($context["isSlider"] ?? null)) {
            // line 68
            echo "  <div class=\"ee-gallery-swiper breakdance-swiper-wrapper\" data-swiper-id=\"%%ID%%\">
    <div class=\"swiper\">
";
        }
        // line 71
        echo "
<div class=\"ee-gallery ";
        // line 72
        echo ($context["cssClasses"] ?? null);
        echo "\">
  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(($context["galleries"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 74
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_ensure_traversable(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["gallery"], "images", [], "any", false, false, false, 74));
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
                // line 75
                echo "      ";
                $context["url"] = (((($context["linkType"] ?? null) == "custom_url")) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "custom_url", [], "any", false, false, false, 75)) : ((((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 75) == "video")) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 75), "url", [], "any", false, false, false, 75)) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 75), "url", [], "any", false, false, false, 75)))));
                // line 76
                echo "      ";
                $context["type"] = ((((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 76) == "video") || (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76) == "video"))) ? ("video") : ("image"));
                // line 77
                echo "
      <";
                // line 78
                echo ($context["tag"] ?? null);
                echo " class=\"ee-gallery-item ee-gallery-item--";
                echo ($context["type"] ?? null);
                echo " ee-gallery-item--single";
                echo ((($context["isSlider"] ?? null)) ? (" swiper-slide") : (""));
                echo "\" href=\"";
                echo ((array_key_exists("url", $context)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(($context["url"] ?? null), "#")) : ("#"));
                echo "\" ";
                echo ((((($context["linkEnabled"] ?? null) && ($context["url"] ?? null)) && \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 78), "new_tab", [], "any", false, false, false, 78))) ? ("target=\"_blank\"") : (""));
                echo " data-sub-html=\"";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 78);
                echo "\" data-category=\"";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 78), "loop", [], "any", false, false, false, 78), "index", [], "any", false, false, false, 78);
                echo "\" ";
                echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_lightboxAttrs", [$context["item"]], 78, $context, $this->getSourceContext());
                echo ">
        <figure class=\"ee-gallery-item-figure\">
          ";
                // line 80
                if ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 80) == "video")) {
                    // line 81
                    echo "            ";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_video", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, false, 81)], 81, $context, $this->getSourceContext());
                    echo "
          ";
                } else {
                    // line 83
                    echo "            ";
                    echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_getMedia", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 83), ($context["size"] ?? null), ($context["lazyLoad"] ?? null), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, false, 83), "advanced", [], "any", false, false, false, 83), "disable_srcset_sizes", [], "any", false, false, false, 83)], 83, $context, $this->getSourceContext());
                    echo "
          ";
                }
                // line 85
                echo "
          ";
                // line 86
                if (((($context["showCaptions"] ?? null) != "never") && (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 86) || \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 86), "caption", [], "any", false, false, false, 86)))) {
                    // line 87
                    echo "            <figcaption class=\"ee-gallery-item-caption\">
              ";
                    // line 88
                    echo ((\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", true, true, false, 88)) ? (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\_twig_default_filter(\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 88), \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 88), "caption", [], "any", false, false, false, 88))) : (\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 88), "caption", [], "any", false, false, false, 88)));
                    echo "
            </figcaption>
          ";
                }
                // line 91
                echo "        </figure>
      </";
                // line 92
                echo ($context["tag"] ?? null);
                echo ">

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
            // line 95
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "  
  ";
        // line 97
        if ((($context["mode"] ?? null) == "isotope")) {
            // line 98
            echo "    <div class=\"ee-gallery-gutter\"></div>
  ";
        }
        // line 100
        echo "</div>

";
        // line 102
        if (($context["isSlider"] ?? null)) {
            // line 103
            echo "    </div>
    ";
            // line 104
            echo \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_call_macro($macros["macros"], "macro_AtomV1SwiperPaginationAndArrowsHtml", [\Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, \Breakdance\Lib\Vendor\Twig\Extension\Core\Functions\twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 104), "slider", [], "any", false, false, false, 104)], 104, $context, $this->getSourceContext());
            echo "
  </div>
";
        }
        // line 107
        echo "
";
        // line 108
        if ((($context["isEmpty"] ?? null) && ($context["isBuilder"] ?? null))) {
            // line 109
            echo "  <div class=\"breakdance-canvas-empty-element\">
    <svg class=\"breakdance-canvas-empty-element__icon\" width=\"40\" viewBox=\"0 0 640 512\">
      <path fill=\"currentColor\" d=\"M608 0H160a32 32 0 0 0-32 32v96h160V64h192v320h128a32 32 0 0 0 32-32V32a32 32 0 0 0-32-32zM232 103a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm352 208a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm-168 57H32a32 32 0 0 0-32 32v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zM96 224a32 32 0 1 1-32 32 32 32 0 0 1 32-32zm288 224H64v-32l64-64 32 32 128-128 96 96z\"></path>
    </svg>
    <h3 class=\"breakdance-canvas-empty-element__title\">No media selected.</h3>
  </div>
";
        }
        // line 116
        echo "
";
    }

    public function getTemplateName()
    {
        return "7eb45ada30c15923f4f62ecef80159d36ed0e2f8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 116,  340 => 109,  338 => 108,  335 => 107,  329 => 104,  326 => 103,  324 => 102,  320 => 100,  316 => 98,  314 => 97,  311 => 96,  297 => 95,  280 => 92,  277 => 91,  271 => 88,  268 => 87,  266 => 86,  263 => 85,  257 => 83,  251 => 81,  249 => 80,  230 => 78,  227 => 77,  224 => 76,  221 => 75,  203 => 74,  186 => 73,  182 => 72,  179 => 71,  174 => 68,  172 => 67,  169 => 66,  162 => 62,  157 => 59,  154 => 58,  151 => 57,  148 => 56,  146 => 55,  143 => 54,  139 => 52,  137 => 51,  134 => 50,  130 => 48,  128 => 47,  125 => 46,  123 => 45,  120 => 44,  118 => 42,  117 => 41,  116 => 40,  115 => 39,  114 => 38,  113 => 37,  112 => 36,  111 => 35,  110 => 34,  107 => 32,  103 => 30,  101 => 29,  99 => 28,  96 => 27,  94 => 26,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  83 => 21,  81 => 20,  78 => 19,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  65 => 13,  62 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "7eb45ada30c15923f4f62ecef80159d36ed0e2f8", "");
    }
}
