<?php

/* admin/category/index.html.twig */
class __TwigTemplate_7f2cf59d2e75efb5d3cc8ebcdd2d9980603341cb6694d29b93d6a8839c718456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/category/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_207e6abe33488362d8effd065e427997489c111cb070e856514d936898cceab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207e6abe33488362d8effd065e427997489c111cb070e856514d936898cceab1->enter($__internal_207e6abe33488362d8effd065e427997489c111cb070e856514d936898cceab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_24887a328331b9745bd60f8e038bc49aac2dd792ed942012e26c802852d0b3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24887a328331b9745bd60f8e038bc49aac2dd792ed942012e26c802852d0b3c2->enter($__internal_24887a328331b9745bd60f8e038bc49aac2dd792ed942012e26c802852d0b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_207e6abe33488362d8effd065e427997489c111cb070e856514d936898cceab1->leave($__internal_207e6abe33488362d8effd065e427997489c111cb070e856514d936898cceab1_prof);

        
        $__internal_24887a328331b9745bd60f8e038bc49aac2dd792ed942012e26c802852d0b3c2->leave($__internal_24887a328331b9745bd60f8e038bc49aac2dd792ed942012e26c802852d0b3c2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e20ddd634f92058018611582c77728a2a6aafa53c497363b9c03cebf778e0128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20ddd634f92058018611582c77728a2a6aafa53c497363b9c03cebf778e0128->enter($__internal_e20ddd634f92058018611582c77728a2a6aafa53c497363b9c03cebf778e0128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_667420b3c57a2eadd5cb5d14fa57efddb7b6c8ee68dededb857e1ffaa3004c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667420b3c57a2eadd5cb5d14fa57efddb7b6c8ee68dededb857e1ffaa3004c55->enter($__internal_667420b3c57a2eadd5cb5d14fa57efddb7b6c8ee68dededb857e1ffaa3004c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "



";
        
        $__internal_667420b3c57a2eadd5cb5d14fa57efddb7b6c8ee68dededb857e1ffaa3004c55->leave($__internal_667420b3c57a2eadd5cb5d14fa57efddb7b6c8ee68dededb857e1ffaa3004c55_prof);

        
        $__internal_e20ddd634f92058018611582c77728a2a6aafa53c497363b9c03cebf778e0128->leave($__internal_e20ddd634f92058018611582c77728a2a6aafa53c497363b9c03cebf778e0128_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}




{% endblock %}", "admin/category/index.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\admin\\category\\index.html.twig");
    }
}
