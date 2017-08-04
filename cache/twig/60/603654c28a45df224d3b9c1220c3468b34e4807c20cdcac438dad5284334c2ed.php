<?php

/* partials/header.html.twig */
class __TwigTemplate_1052673cdd9d08ba77c56b5b4ee98547e2a7856a48e025e920f982df216316d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 2
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), array(), "array"), "cache", array()), "url", array(), "method")) . "')\"");
        } elseif ($this->getAttribute(        // line 3
(isset($context["theme_config"]) ? $context["theme_config"] : null), "default_header_image", array())) {
            // line 4
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_header_image", array())))) . "')\"");
        } else {
            // line 6
            echo "    ";
            $context["style"] = "";
        }
        // line 8
        echo "
<header class=\"intro-header\"";
        // line 9
        echo (isset($context["style"]) ? $context["style"] : null);
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                    ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array())) {
            // line 16
            echo "                    <hr class=\"small\">
                    <span class=\"subheading\">";
            // line 17
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
            echo "</span>
                    ";
        }
        // line 19
        echo "                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  54 => 17,  51 => 16,  49 => 15,  45 => 14,  37 => 9,  34 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ page.media.images[page.header.header_image].cache.url()  ~ '\\')\"' %}
{% elseif theme_config.default_header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ url('theme://img/' ~ theme_config.default_header_image)  ~ '\\')\"' %}
{% else %}
    {% set style = '' %}
{% endif %}

<header class=\"intro-header\"{{ style }}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>{{ page.title }}</h1>
                    {% if page.header.subheading %}
                    <hr class=\"small\">
                    <span class=\"subheading\">{{ page.header.subheading }}</span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</header>
", "partials/header.html.twig", "/home/angel281/public_html/faq/user/themes/clean-blog/templates/partials/header.html.twig");
    }
}
