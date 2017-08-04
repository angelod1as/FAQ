<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_82931bfed048137812cd75209d6a300cb5439d9dde205e0cc4586f7a58ffb068 extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 6
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.SIMPLE_SEARCH.HEADLINE");
            echo "</h4>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 11
            echo "    <h4>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
        }
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 15
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 17
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
</div>
";
        }
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 22
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 24
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 24)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 25
            echo "</div>
";
        }
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 28
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 29
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
\t";
            // line 30
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 30)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null))));
            // line 31
            echo "</div>
";
        }
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 34
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 35
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 36
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 37
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  110 => 36,  106 => 35,  103 => 34,  101 => 33,  97 => 31,  95 => 30,  91 => 29,  88 => 28,  86 => 27,  82 => 25,  80 => 24,  76 => 23,  73 => 22,  71 => 21,  68 => 20,  60 => 17,  56 => 16,  53 => 15,  51 => 14,  48 => 12,  43 => 11,  41 => 10,  37 => 8,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
\t<a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
</div>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
\t{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
    <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
{% endif %}", "partials/sidebar.html.twig", "/home/angel281/public_html/faq/user/themes/antimatter/templates/partials/sidebar.html.twig");
    }
}
