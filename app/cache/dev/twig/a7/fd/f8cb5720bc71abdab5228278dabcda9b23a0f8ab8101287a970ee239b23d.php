<?php

/* ApplicationSonataProductBundle:Goodie:view.html.twig */
class __TwigTemplate_a7fdf8cb5720bc71abdab5228278dabcda9b23a0f8ab8101287a970ee239b23d extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Product:view.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(19);

            throw $e;
        }

        $this->blocks = array(
            'product_delivery' => array($this, 'block_product_delivery'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Product:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_product_delivery($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ApplicationSonataProductBundle:Goodie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 21,  11 => 19,);
    }
}
