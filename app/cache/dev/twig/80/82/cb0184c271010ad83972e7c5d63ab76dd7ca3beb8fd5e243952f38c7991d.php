<?php

/* SonataCommentBundle:CommentAdmin:list_status.html.twig */
class __TwigTemplate_8082cb0184c271010ad83972e7c5d63ab76dd7ca3beb8fd5e243952f38c7991d extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <span class=\"label";
        echo twig_escape_filter($this->env, (($this->env->getExtension('sonata_core_status')->statusClass((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), null, "danger")) ? ((" label-" . $this->env->getExtension('sonata_core_status')->statusClass((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), null, "danger"))) : ("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "stateLabel", array()), array(), "SonataCommentBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "SonataCommentBundle:CommentAdmin:list_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  36 => 14,  11 => 12,);
    }
}
