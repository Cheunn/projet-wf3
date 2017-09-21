<?php

/* aside.html.twig */
class __TwigTemplate_fb43addf79e59ac8c3eb04a0fab658277a4bbfbe31fee57bb8f521f28d177fae extends Twig_Template
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
        $__internal_fdaae2f048f270cddf435bfe64e614bb1ca64b64aa593e8ce3b0ae6564a336f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaae2f048f270cddf435bfe64e614bb1ca64b64aa593e8ce3b0ae6564a336f9->enter($__internal_fdaae2f048f270cddf435bfe64e614bb1ca64b64aa593e8ce3b0ae6564a336f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_8bbe901262af386a940591dd80b1d913e9ee3a3e397eaee2cfbcf26554701dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbe901262af386a940591dd80b1d913e9ee3a3e397eaee2cfbcf26554701dae->enter($__internal_8bbe901262af386a940591dd80b1d913e9ee3a3e397eaee2cfbcf26554701dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

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
        
        $__internal_fdaae2f048f270cddf435bfe64e614bb1ca64b64aa593e8ce3b0ae6564a336f9->leave($__internal_fdaae2f048f270cddf435bfe64e614bb1ca64b64aa593e8ce3b0ae6564a336f9_prof);

        
        $__internal_8bbe901262af386a940591dd80b1d913e9ee3a3e397eaee2cfbcf26554701dae->leave($__internal_8bbe901262af386a940591dd80b1d913e9ee3a3e397eaee2cfbcf26554701dae_prof);

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
