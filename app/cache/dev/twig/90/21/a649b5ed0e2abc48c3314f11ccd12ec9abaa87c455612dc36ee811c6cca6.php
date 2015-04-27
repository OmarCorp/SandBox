<?php

/* MopaBootstrapBundle:Navbar:subnavbar.html.twig */
class __TwigTemplate_9021a649b5ed0e2abc48c3314f11ccd12ec9abaa87c455612dc36ee811c6cca6 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"subnav ";
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : $this->getContext($context, "fixedTop")), false)) : (false))) ? ("subnavbar-fixed-top") : (""));
        echo "\">
    ";
        // line 2
        $this->displayBlock('menu', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Navbar:subnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  27 => 3,  25 => 2,  20 => 1,);
    }
}
