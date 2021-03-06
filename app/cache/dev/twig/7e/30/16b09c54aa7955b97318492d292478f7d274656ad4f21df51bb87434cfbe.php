<?php

/* SpyTimelineBundle:Action:components.html.twig */
class __TwigTemplate_7e3016b09c54aa7955b97318492d292478f7d274656ad4f21df51bb87434cfbe extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject_component' => array($this, 'block_subject_component'),
            'verb_component' => array($this, 'block_verb_component'),
            'action_component' => array($this, 'block_action_component'),
            'component_attributes' => array($this, 'block_component_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject_component', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('verb_component', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('action_component', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        $this->displayBlock('component_attributes', $context, $blocks);
    }

    // line 2
    public function block_subject_component($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "subject")) : ("subject"));
        // line 5
        echo "    ";
        $this->displayBlock("action_component", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_verb_component($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "verb")) : ("verb"));
        // line 12
        echo "    ";
        $this->displayBlock("action_component", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_action_component($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 18
        echo "    ";
        if (((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), false)) : (false))) {
            // line 19
            echo "        ";
            $context["value"] = ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")))) : ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))));
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <span ";
        $this->displayBlock("component_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 26
    public function block_component_attributes($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), false)) : (false))) {
            // line 29
            echo "        ";
            $context["attrClass"] = (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""));
            // line 30
            echo "        ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array())), array("class" => trim((((isset($context["attrClass"]) ? $context["attrClass"] : $this->getContext($context, "attrClass")) . " ") . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SpyTimelineBundle:Action:components.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  101 => 27,  98 => 26,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  77 => 17,  74 => 16,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  38 => 26,  35 => 24,  33 => 16,  30 => 15,  28 => 9,  25 => 8,  23 => 2,);
    }
}
