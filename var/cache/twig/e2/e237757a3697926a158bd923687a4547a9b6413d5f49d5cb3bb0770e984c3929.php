<?php

/* aside.html.twig */
class __TwigTemplate_4cf48ae73448b0b02430d416848939e978d92160a18a41c6d0956f758d2c117a extends Twig_Template
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
        $__internal_6206faf91065c15768b89ea77adc44a1447e313258ac9b6a3b1034f8fbc89c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6206faf91065c15768b89ea77adc44a1447e313258ac9b6a3b1034f8fbc89c5d->enter($__internal_6206faf91065c15768b89ea77adc44a1447e313258ac9b6a3b1034f8fbc89c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_6794c1b3b61d43328066badfc1228b27c192e96dbeb6a885644d6ab685c733da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6794c1b3b61d43328066badfc1228b27c192e96dbeb6a885644d6ab685c733da->enter($__internal_6794c1b3b61d43328066badfc1228b27c192e96dbeb6a885644d6ab685c733da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        // line 2
        echo "        <div class=\"list-group\"> 
                  
                    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " 
                        <a href=\"#\" class=\"list-group-item\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "                   
        </div>";
        
        $__internal_6206faf91065c15768b89ea77adc44a1447e313258ac9b6a3b1034f8fbc89c5d->leave($__internal_6206faf91065c15768b89ea77adc44a1447e313258ac9b6a3b1034f8fbc89c5d_prof);

        
        $__internal_6794c1b3b61d43328066badfc1228b27c192e96dbeb6a885644d6ab685c733da->leave($__internal_6794c1b3b61d43328066badfc1228b27c192e96dbeb6a885644d6ab685c733da_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
        <div class=\"list-group\"> 
                  
                    {% for category in categories %} 
                        <a href=\"#\" class=\"list-group-item\">{{ category.name }}</a>
                    {% endfor %}
                   
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\aside.html.twig");
    }
}
