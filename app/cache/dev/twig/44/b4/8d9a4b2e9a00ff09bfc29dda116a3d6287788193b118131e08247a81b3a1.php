<?php

/* SimpleThingsEntityAuditBundle::layout.html.twig */
class __TwigTemplate_44b48d9a4b2e9a00ff09bfc29dda116a3d6287788193b118131e08247a81b3a1 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('simplethings_entityaudit_content', $context, $blocks);
        // line 9
        echo "        </div>
    </body>
</html>";
    }

    // line 8
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 9,  29 => 8,  20 => 1,);
    }
}
