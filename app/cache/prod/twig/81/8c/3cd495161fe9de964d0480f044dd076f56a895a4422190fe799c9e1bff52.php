<?php

/* SonataBasketBundle:Block:block_basket_items.html.twig */
class __TwigTemplate_818c3cd495161fe9de964d0480f044dd076f56a895a4422190fe799c9e1bff52 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"display:inline; margin-left:10px;\">
        <span class=\"glyphicon glyphicon-shopping-cart\"></span>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sonata_basket_index");
        echo "\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.title_basket", array(), "SonataBasketBundle"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_basket"]) ? $context["sonata_basket"] : null), "basket", array()), "countBasketElements", array()), "html", null, true);
        echo ")
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Block:block_basket_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }
}
