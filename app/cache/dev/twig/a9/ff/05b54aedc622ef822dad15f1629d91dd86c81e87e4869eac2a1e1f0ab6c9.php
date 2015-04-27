<?php

/* SpyTimelineBundle:Timeline:default.html.twig */
class __TwigTemplate_a9ff05b54aedc622ef822dad15f1629d91dd86c81e87e4869eac2a1e1f0ab6c9 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "subject");
        echo "
-
";
        // line 3
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "verb");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SpyTimelineBundle:Timeline:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 1,);
    }
}
