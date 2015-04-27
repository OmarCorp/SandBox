<?php

/* SonataMediaBundle:Extra:pixlr_exit.html.twig */
class __TwigTemplate_6c1c03776e8f96559d5b517fafee6f1fa39e0b821cd944bc9eba85733b40ef04 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 11,);
    }
}
