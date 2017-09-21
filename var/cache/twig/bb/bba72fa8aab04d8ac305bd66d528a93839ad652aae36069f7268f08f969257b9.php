<?php

/* aside.html.twig */
class __TwigTemplate_cf436d6be3b6e7a7a64cd77b3efc83e7b6dd5a06f630ed3c308a4ae38983ed82 extends Twig_Template
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
        $__internal_7450c87eac930505de3b8b0ab10c3e71a602866eb2839d04a9824ddc3308a89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7450c87eac930505de3b8b0ab10c3e71a602866eb2839d04a9824ddc3308a89c->enter($__internal_7450c87eac930505de3b8b0ab10c3e71a602866eb2839d04a9824ddc3308a89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_42ee1dea751745db90576dd0f6755c3b3fa14b654459d943a9082e36aedce339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ee1dea751745db90576dd0f6755c3b3fa14b654459d943a9082e36aedce339->enter($__internal_42ee1dea751745db90576dd0f6755c3b3fa14b654459d943a9082e36aedce339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

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
        
        $__internal_7450c87eac930505de3b8b0ab10c3e71a602866eb2839d04a9824ddc3308a89c->leave($__internal_7450c87eac930505de3b8b0ab10c3e71a602866eb2839d04a9824ddc3308a89c_prof);

        
        $__internal_42ee1dea751745db90576dd0f6755c3b3fa14b654459d943a9082e36aedce339->leave($__internal_42ee1dea751745db90576dd0f6755c3b3fa14b654459d943a9082e36aedce339_prof);

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
        
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\aside.html.twig");
    }
}
