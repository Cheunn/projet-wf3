<?php

/* aside.html.twig */
class __TwigTemplate_5f21b4514cef62a87b6cfbce2314f6277170282a1b52e56bf5ac3072526746a4 extends Twig_Template
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
        $__internal_e8bb00525685f6cdcfb69babb076c75e41c8ceff1c6fc9392c048b8e03bb4fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bb00525685f6cdcfb69babb076c75e41c8ceff1c6fc9392c048b8e03bb4fc9->enter($__internal_e8bb00525685f6cdcfb69babb076c75e41c8ceff1c6fc9392c048b8e03bb4fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

        $__internal_8741864096dc4eb9ee78a1ff4c83b1ceb7a184da3c27488b65b4396b759ddf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8741864096dc4eb9ee78a1ff4c83b1ceb7a184da3c27488b65b4396b759ddf18->enter($__internal_8741864096dc4eb9ee78a1ff4c83b1ceb7a184da3c27488b65b4396b759ddf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aside.html.twig"));

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
        
        $__internal_e8bb00525685f6cdcfb69babb076c75e41c8ceff1c6fc9392c048b8e03bb4fc9->leave($__internal_e8bb00525685f6cdcfb69babb076c75e41c8ceff1c6fc9392c048b8e03bb4fc9_prof);

        
        $__internal_8741864096dc4eb9ee78a1ff4c83b1ceb7a184da3c27488b65b4396b759ddf18->leave($__internal_8741864096dc4eb9ee78a1ff4c83b1ceb7a184da3c27488b65b4396b759ddf18_prof);

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
        
        </div>", "aside.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\aside.html.twig");
    }
}
