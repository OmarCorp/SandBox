<?php

/* FOSCommentBundle:Thread:comment_edit.html.twig */
class __TwigTemplate_a6a280e7d4b6493bfa10cfc92db546949dbc2b656e23126c5205ddef62d56463 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"fos_comment_comment_form_holder\">
    <form class=\"fos_comment_comment_edit_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_put_thread_comments", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 21
        echo "
        <div class=\"fos_comment_submit\">
            <button type=\"button\" class=\"fos_comment_comment_edit_cancel\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit_cancel", array(), "FOSCommentBundle");
        echo "</button>
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
        echo "        </div>

        <input type=\"hidden\" name=\"_method\" value=\"PUT\">

    </form>
</div>
";
    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        ";
    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 25
        echo "                <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit_submit", array(), "FOSCommentBundle");
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  74 => 24,  68 => 19,  64 => 18,  60 => 17,  55 => 16,  52 => 15,  42 => 27,  40 => 24,  36 => 23,  32 => 21,  30 => 15,  25 => 13,  21 => 11,);
    }
}
