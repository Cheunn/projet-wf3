<?php

/* admin/category/edit.html.twig */
class __TwigTemplate_efc1879fb41384e2859afbb9eb75b48ac044455db7c7403e426f3742d33cbb1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/category/edit.html.twig", 1);
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
        $__internal_6ad27e6557eb0bf8d075b83ee1e7ea95c7507e51b8cd2b1115c9138285f40648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad27e6557eb0bf8d075b83ee1e7ea95c7507e51b8cd2b1115c9138285f40648->enter($__internal_6ad27e6557eb0bf8d075b83ee1e7ea95c7507e51b8cd2b1115c9138285f40648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/edit.html.twig"));

        $__internal_7aafabbcc78e6978e93a8d8ce98b07b96f1ddfb447155f3aaf0b9e53e1f08d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aafabbcc78e6978e93a8d8ce98b07b96f1ddfb447155f3aaf0b9e53e1f08d2b->enter($__internal_7aafabbcc78e6978e93a8d8ce98b07b96f1ddfb447155f3aaf0b9e53e1f08d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad27e6557eb0bf8d075b83ee1e7ea95c7507e51b8cd2b1115c9138285f40648->leave($__internal_6ad27e6557eb0bf8d075b83ee1e7ea95c7507e51b8cd2b1115c9138285f40648_prof);

        
        $__internal_7aafabbcc78e6978e93a8d8ce98b07b96f1ddfb447155f3aaf0b9e53e1f08d2b->leave($__internal_7aafabbcc78e6978e93a8d8ce98b07b96f1ddfb447155f3aaf0b9e53e1f08d2b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f805aeb8915c7cc1d4f6b4a2bc58d4405d0fc1807567b8b37f6ea9ffa9da94ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f805aeb8915c7cc1d4f6b4a2bc58d4405d0fc1807567b8b37f6ea9ffa9da94ce->enter($__internal_f805aeb8915c7cc1d4f6b4a2bc58d4405d0fc1807567b8b37f6ea9ffa9da94ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ce94fead73e812a716b609696b89429aa9b9548ae2781fb21e377db201dc381c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce94fead73e812a716b609696b89429aa9b9548ae2781fb21e377db201dc381c->enter($__internal_ce94fead73e812a716b609696b89429aa9b9548ae2781fb21e377db201dc381c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id_category", array())) {
            echo "Modification";
        } else {
            echo "Création";
        }
        echo "category</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category");
        echo "\" class=\"btn btn-default\">Annuler</a>
    </form>
";
        
        $__internal_ce94fead73e812a716b609696b89429aa9b9548ae2781fb21e377db201dc381c->leave($__internal_ce94fead73e812a716b609696b89429aa9b9548ae2781fb21e377db201dc381c_prof);

        
        $__internal_f805aeb8915c7cc1d4f6b4a2bc58d4405d0fc1807567b8b37f6ea9ffa9da94ce->leave($__internal_f805aeb8915c7cc1d4f6b4a2bc58d4405d0fc1807567b8b37f6ea9ffa9da94ce_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  61 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <h1>{% if category.id_category %}Modification{% else %}Création{% endif %}category</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ category.name }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"{{ path('admin_category') }}\" class=\"btn btn-default\">Annuler</a>
    </form>
{% endblock %}
", "admin/category/edit.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\category\\edit.html.twig");
    }
}
