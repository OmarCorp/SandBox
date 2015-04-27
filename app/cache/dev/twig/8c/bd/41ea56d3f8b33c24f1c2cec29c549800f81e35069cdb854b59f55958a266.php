<?php

/* SonataPaymentBundle:Payment:error.html.twig */
class __TwigTemplate_8cbd41ea56d3f8b33c24f1c2cec29c549800f81e35069cdb854b59f55958a266 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_error_payment", array(), "SonataPaymentBundle"), "html", null, true);
        echo "</h1>

<p>
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_error_payment", array(), "SonataPaymentBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "SonataPaymentBundle:Payment:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 15,  22 => 12,  19 => 11,);
    }
}
