<?php

/* admin/handicap/edit.html.twig */
class __TwigTemplate_946f2e82729281a8f73b9a2943cf6dd79037f15a45cfa17be846b54cfcaf2b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/handicap/edit.html.twig", 1);
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
        $__internal_2a579eaf569c8c75c40b51a2fc8a32931d4a29cc2f0a4c7e04287ef611d27d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a579eaf569c8c75c40b51a2fc8a32931d4a29cc2f0a4c7e04287ef611d27d85->enter($__internal_2a579eaf569c8c75c40b51a2fc8a32931d4a29cc2f0a4c7e04287ef611d27d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/handicap/edit.html.twig"));

        $__internal_7d8a45642246bed2cb60f25e8893c7d8c8b2a0176dde5c2a8101eef8a72ec44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8a45642246bed2cb60f25e8893c7d8c8b2a0176dde5c2a8101eef8a72ec44f->enter($__internal_7d8a45642246bed2cb60f25e8893c7d8c8b2a0176dde5c2a8101eef8a72ec44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/handicap/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a579eaf569c8c75c40b51a2fc8a32931d4a29cc2f0a4c7e04287ef611d27d85->leave($__internal_2a579eaf569c8c75c40b51a2fc8a32931d4a29cc2f0a4c7e04287ef611d27d85_prof);

        
        $__internal_7d8a45642246bed2cb60f25e8893c7d8c8b2a0176dde5c2a8101eef8a72ec44f->leave($__internal_7d8a45642246bed2cb60f25e8893c7d8c8b2a0176dde5c2a8101eef8a72ec44f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c79c26a806406d6c6211c71e31141b675f705d963e29a14249a782f7cd5f1757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79c26a806406d6c6211c71e31141b675f705d963e29a14249a782f7cd5f1757->enter($__internal_c79c26a806406d6c6211c71e31141b675f705d963e29a14249a782f7cd5f1757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b2a7a77e48a8078a7c741da07f5eb6ce073b5e77b0f58b3b4ccc26c3fc5d31a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a7a77e48a8078a7c741da07f5eb6ce073b5e77b0f58b3b4ccc26c3fc5d31a9->enter($__internal_b2a7a77e48a8078a7c741da07f5eb6ce073b5e77b0f58b3b4ccc26c3fc5d31a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        if ($this->getAttribute(($context["handicap"] ?? $this->getContext($context, "handicap")), "id", array())) {
            echo "Modification";
        } else {
            echo "Création";
        }
        echo " handicap</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["handicap"] ?? $this->getContext($context, "handicap")), "name", array()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_handicap");
        echo "\" class=\"btn btn-default\">Annuler</a>
    </form>
";
        
        $__internal_b2a7a77e48a8078a7c741da07f5eb6ce073b5e77b0f58b3b4ccc26c3fc5d31a9->leave($__internal_b2a7a77e48a8078a7c741da07f5eb6ce073b5e77b0f58b3b4ccc26c3fc5d31a9_prof);

        
        $__internal_c79c26a806406d6c6211c71e31141b675f705d963e29a14249a782f7cd5f1757->leave($__internal_c79c26a806406d6c6211c71e31141b675f705d963e29a14249a782f7cd5f1757_prof);

    }

    public function getTemplateName()
    {
        return "admin/handicap/edit.html.twig";
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
    <h1>{% if handicap.id %}Modification{% else %}Création{% endif %} handicap</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ handicap.name }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"{{ path('admin_handicap') }}\" class=\"btn btn-default\">Annuler</a>
    </form>
{% endblock %}", "admin/handicap/edit.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\admin\\handicap\\edit.html.twig");
    }
}
