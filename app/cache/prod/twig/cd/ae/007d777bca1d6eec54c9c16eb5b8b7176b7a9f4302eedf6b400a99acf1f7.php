<?php

/* SonataSeoBundle:Block:_twitter_sdk.html.twig */
class __TwigTemplate_cdae007d777bca1d6eec54c9c16eb5b8b7176b7a9f4302eedf6b400a99acf1f7 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebook_sdk' => array($this, 'block_facebook_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_twitter_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 13,  26 => 12,  20 => 11,);
    }
}
