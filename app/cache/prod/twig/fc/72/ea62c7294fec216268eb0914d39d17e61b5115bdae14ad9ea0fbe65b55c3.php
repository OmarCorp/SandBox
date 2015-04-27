<?php

/* SonataCommentBundle:Thread:async.html.twig */
class __TwigTemplate_fc72ea62c7294fec216268eb0914d39d17e61b5115bdae14ad9ea0fbe65b55c3 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "
<div id=\"fos_comment_thread\"></div>

<script type=\"text/javascript\">
    // thread id
    var fos_comment_thread_id = '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "';

    // api base url to use for initial requests
    var fos_comment_thread_api_base_url = '";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_comment_get_threads");
        echo "';

    // Snippet for asynchronously loading the comments
    (function() {
        var fos_comment_script = document.createElement('script');
        fos_comment_script.async = true;
        fos_comment_script.src = '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatacomment/js/comments.js"), "html", null, true);
        echo "';
        fos_comment_script.type = 'text/javascript';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
    })();
</script>";
    }

    public function getTemplateName()
    {
        return "SonataCommentBundle:Thread:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 25,  32 => 19,  26 => 16,  19 => 11,);
    }
}
