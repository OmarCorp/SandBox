<?php

/* SonataPageBundle:Page:breadcrumb.html.twig */
class __TwigTemplate_129078bf6dcbd8d451acac9cf42bbaf46ab2adeee53ac341a58bf9e5253d8da7 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
";
        // line 12
        if ((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs"))) {
            // line 13
            echo "    <ul ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "container_attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 15
                echo "            <li ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "elements_attr", array()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 16
                if ( !$this->getAttribute($context["breadcrumb"], "isdynamic", array())) {
                    // line 17
                    echo "                    <a href=\"";
                    echo $this->env->getExtension('routing')->getPath($context["breadcrumb"]);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["breadcrumb"], "title", array())) ? ($this->getAttribute($context["breadcrumb"], "title", array())) : ($this->getAttribute($context["breadcrumb"], "name", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["breadcrumb"], "title", array())) ? ($this->getAttribute($context["breadcrumb"], "title", array())) : ($this->getAttribute($context["breadcrumb"], "name", array()))), "html", null, true);
                    echo "</a>";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "separator", array());
                    echo "
                ";
                } else {
                    // line 19
                    echo "                    ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["breadcrumb"], "title", array())) ? ($this->getAttribute($context["breadcrumb"], "title", array())) : ($this->getAttribute($context["breadcrumb"], "name", array()))), "html", null, true);
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "separator", array());
                    echo "
                ";
                }
                // line 21
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        ";
            // line 24
            $context["li_attrs_class"] = (((($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "elements_attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "elements_attr", array(), "any", false, true), "class", array()), "")) : ("")) . " ") . $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "current_class", array()));
            // line 25
            echo "        ";
            $context["li_attrs"] = twig_array_merge($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "elements_attr", array()), array("class" => (isset($context["li_attrs_class"]) ? $context["li_attrs_class"] : $this->getContext($context, "li_attrs_class"))));
            // line 26
            echo "        <li ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["li_attrs"]) ? $context["li_attrs"] : $this->getContext($context, "li_attrs")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 27
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "isdynamic", array())) {
                // line 28
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()))), "html", null, true);
                echo "</a>";
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "last_separator", array());
                echo "
            ";
            } else {
                // line 30
                echo "                ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()))), "html", null, true);
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "last_separator", array());
                echo "
            ";
            }
            // line 32
            echo "        </li>
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  123 => 30,  111 => 28,  109 => 27,  94 => 26,  91 => 25,  89 => 24,  86 => 23,  79 => 21,  72 => 19,  60 => 17,  58 => 16,  43 => 15,  39 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }
}
