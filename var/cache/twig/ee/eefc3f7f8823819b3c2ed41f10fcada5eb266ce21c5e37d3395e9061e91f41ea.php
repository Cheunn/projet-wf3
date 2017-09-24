<?php

/* aside.html.twig */
class __TwigTemplate_e47f1b72343f362ed42f344896aa07466870e419e66e283e1d946e558db6ae75 extends Twig_Template
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
        $__internal_b76cd2e94dcabc16d2a6b16e6bbe826da74218ce07753024fcaf8d3d05878dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76cd2e94dcabc16d2a6b16e6bbe826da74218ce07753024fcaf8d3d05878dcc->enter($__internal_b76cd2e94dcabc16d2a6b16e6bbe826da74218ce07753024fcaf8d3d05878dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_77c3341c5e99840c960cdde9277067f81c5e0e012d8834451e748bbe07bd247d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c3341c5e99840c960cdde9277067f81c5e0e012d8834451e748bbe07bd247d->enter($__internal_77c3341c5e99840c960cdde9277067f81c5e0e012d8834451e748bbe07bd247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

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
        
        $__internal_b76cd2e94dcabc16d2a6b16e6bbe826da74218ce07753024fcaf8d3d05878dcc->leave($__internal_b76cd2e94dcabc16d2a6b16e6bbe826da74218ce07753024fcaf8d3d05878dcc_prof);

        
        $__internal_77c3341c5e99840c960cdde9277067f81c5e0e012d8834451e748bbe07bd247d->leave($__internal_77c3341c5e99840c960cdde9277067f81c5e0e012d8834451e748bbe07bd247d_prof);

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
        
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\templates\\aside.html.twig");
    }
}
