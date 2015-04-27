<?php

/* SonataNewsBundle:Post:archive.rss.twig */
class __TwigTemplate_46adfaa034f5920770b7adbf638e0b9f2d4838f8101ba2c5eb9c829676572bb9 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 11
        echo "<?xml version=\"1.0\" ?>
<rss version=\"2.0\">
    <channel>
        <title>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        if ((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag"))) {
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
        }
        echo "</title>
        <link>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "link", array()), "html", null, true);
        echo "</link>
        <description>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "description", array()), "html", null, true);
        echo "</description>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "             <item>
                  <title>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</title>
                  <link>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"])), true), "html", null, true);
            echo "</link>
                  <description><![CDATA[ ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "abstract", array()), "html", null, true);
            echo " ]]></description>
                  <pubDate>";
            // line 22
            echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute($context["post"], "publicationDateStart", array()), "eee, MM LLL yyyy HH:mm:ss ZZZ", "en");
            echo "</pubDate>
                  <guid>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"])), true), "html", null, true);
            echo "</guid>
             </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  44 => 18,  40 => 17,  36 => 16,  32 => 15,  24 => 14,  19 => 11,);
    }
}
