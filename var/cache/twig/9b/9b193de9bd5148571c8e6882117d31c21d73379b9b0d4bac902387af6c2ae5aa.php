<?php

/* aside.html.twig */
class __TwigTemplate_8bbe60d1a5e2062f45b694e7778abb709bf6ac2cb9687c047d33d99a3d5f08b7 extends Twig_Template
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
        $__internal_a878b2a1931946137a67043b912e469362428054cf3ddcdbc790cc20c891482e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a878b2a1931946137a67043b912e469362428054cf3ddcdbc790cc20c891482e->enter($__internal_a878b2a1931946137a67043b912e469362428054cf3ddcdbc790cc20c891482e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_81ac86da0f9e7a77fe8a29684c8da55aa03f7f85292c4afc28585e8fde3f8483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ac86da0f9e7a77fe8a29684c8da55aa03f7f85292c4afc28585e8fde3f8483->enter($__internal_81ac86da0f9e7a77fe8a29684c8da55aa03f7f85292c4afc28585e8fde3f8483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

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
        
        $__internal_a878b2a1931946137a67043b912e469362428054cf3ddcdbc790cc20c891482e->leave($__internal_a878b2a1931946137a67043b912e469362428054cf3ddcdbc790cc20c891482e_prof);

        
        $__internal_81ac86da0f9e7a77fe8a29684c8da55aa03f7f85292c4afc28585e8fde3f8483->leave($__internal_81ac86da0f9e7a77fe8a29684c8da55aa03f7f85292c4afc28585e8fde3f8483_prof);

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
                   
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet_v2\\templates\\aside.html.twig");
    }
}
