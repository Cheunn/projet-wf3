<?php

/* aside.html.twig */
class __TwigTemplate_039cce1b05bdf4cc3f56b8d975647e182427c85eb62d0361e35562c183859c56 extends Twig_Template
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
        $__internal_7e72b0a6ae5898ed2fe324c2ad699308359efe6e9f3902bcf74f19f1fe981a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e72b0a6ae5898ed2fe324c2ad699308359efe6e9f3902bcf74f19f1fe981a76->enter($__internal_7e72b0a6ae5898ed2fe324c2ad699308359efe6e9f3902bcf74f19f1fe981a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_61dd2926cfd962c3633f40855fbcd9c561909691d5cb81afedf874ffb1a26720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dd2926cfd962c3633f40855fbcd9c561909691d5cb81afedf874ffb1a26720->enter($__internal_61dd2926cfd962c3633f40855fbcd9c561909691d5cb81afedf874ffb1a26720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

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
        
        $__internal_7e72b0a6ae5898ed2fe324c2ad699308359efe6e9f3902bcf74f19f1fe981a76->leave($__internal_7e72b0a6ae5898ed2fe324c2ad699308359efe6e9f3902bcf74f19f1fe981a76_prof);

        
        $__internal_61dd2926cfd962c3633f40855fbcd9c561909691d5cb81afedf874ffb1a26720->leave($__internal_61dd2926cfd962c3633f40855fbcd9c561909691d5cb81afedf874ffb1a26720_prof);

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
        
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\aside.html.twig");
    }
}
