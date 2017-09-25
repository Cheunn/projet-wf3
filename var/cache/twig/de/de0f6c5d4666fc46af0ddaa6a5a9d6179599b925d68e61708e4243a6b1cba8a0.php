<?php

/* aside.html.twig */
class __TwigTemplate_6e15afa80de0a9c7ee4a1491401025370fd8f46b71612bf13f5dce991a78b7f6 extends Twig_Template
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
        $__internal_b4f85cc6b1a583acdfa67b0437090e18d2c8a8f804dbdc28783b309bb3705c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f85cc6b1a583acdfa67b0437090e18d2c8a8f804dbdc28783b309bb3705c1f->enter($__internal_b4f85cc6b1a583acdfa67b0437090e18d2c8a8f804dbdc28783b309bb3705c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_a571900c07ecf0325822b33fb32a6c1dab006711ea2a220770c61b4863db8fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a571900c07ecf0325822b33fb32a6c1dab006711ea2a220770c61b4863db8fbc->enter($__internal_a571900c07ecf0325822b33fb32a6c1dab006711ea2a220770c61b4863db8fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        // line 2
        echo "        <div class=\"list-group\"> 
                  
                    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        
        $__internal_b4f85cc6b1a583acdfa67b0437090e18d2c8a8f804dbdc28783b309bb3705c1f->leave($__internal_b4f85cc6b1a583acdfa67b0437090e18d2c8a8f804dbdc28783b309bb3705c1f_prof);

        
        $__internal_a571900c07ecf0325822b33fb32a6c1dab006711ea2a220770c61b4863db8fbc->leave($__internal_a571900c07ecf0325822b33fb32a6c1dab006711ea2a220770c61b4863db8fbc_prof);

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
        
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\aside.html.twig");
    }
}
