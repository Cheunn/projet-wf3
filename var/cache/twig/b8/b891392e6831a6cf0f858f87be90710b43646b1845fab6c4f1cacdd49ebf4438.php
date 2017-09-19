<?php

/* aside.html.twig */
class __TwigTemplate_d2c80dc73e52a213175f8f9c8d48cb0d1eecefb6eec7bf6c01f5f6990efe4ad8 extends Twig_Template
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
        $__internal_54a3c5b2313ff99f4d010b61234b02e7db4a5f5533652c7b728ac2c6e41b70a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a3c5b2313ff99f4d010b61234b02e7db4a5f5533652c7b728ac2c6e41b70a8->enter($__internal_54a3c5b2313ff99f4d010b61234b02e7db4a5f5533652c7b728ac2c6e41b70a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_b1b9530ed56da41ed4325e6079c420af09fa62fbccb57bbe5310512ebca442d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b9530ed56da41ed4325e6079c420af09fa62fbccb57bbe5310512ebca442d1->enter($__internal_b1b9530ed56da41ed4325e6079c420af09fa62fbccb57bbe5310512ebca442d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        // line 2
        echo "        <div class=\"list-group\"> 
                  
                    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " 
                        <a href=\"#\" class=\"list-group-item\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "                   
        </div>";
        
        $__internal_54a3c5b2313ff99f4d010b61234b02e7db4a5f5533652c7b728ac2c6e41b70a8->leave($__internal_54a3c5b2313ff99f4d010b61234b02e7db4a5f5533652c7b728ac2c6e41b70a8_prof);

        
        $__internal_b1b9530ed56da41ed4325e6079c420af09fa62fbccb57bbe5310512ebca442d1->leave($__internal_b1b9530ed56da41ed4325e6079c420af09fa62fbccb57bbe5310512ebca442d1_prof);

    }

    public function getTemplateName()
    {
        return "aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
        <div class=\"list-group\"> 
                  
                    {% for category in categories %} 
                        <a href=\"#\" class=\"list-group-item\">{{ category.name }}</a>
                    {% endfor %}
                   
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\aside.html.twig");
    }
}
