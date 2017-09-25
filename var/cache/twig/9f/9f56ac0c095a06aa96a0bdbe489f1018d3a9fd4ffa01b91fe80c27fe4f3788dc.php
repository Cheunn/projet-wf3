<?php

/* admin/handicap/edit.html.twig */
class __TwigTemplate_900f277a6426702ddf7778163d585e425c3170cdccf0c10ae2218e44ab866af0 extends Twig_Template
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
        $__internal_31cb6e5bc8fc4297fa412a86be950c5b7b5cec7dd523417d4989546aa1b54230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cb6e5bc8fc4297fa412a86be950c5b7b5cec7dd523417d4989546aa1b54230->enter($__internal_31cb6e5bc8fc4297fa412a86be950c5b7b5cec7dd523417d4989546aa1b54230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/handicap/edit.html.twig"));

        $__internal_19aed978e82f19caf734d738a377f18bf090f0d7943150623186c90d6686a2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19aed978e82f19caf734d738a377f18bf090f0d7943150623186c90d6686a2bd->enter($__internal_19aed978e82f19caf734d738a377f18bf090f0d7943150623186c90d6686a2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/handicap/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31cb6e5bc8fc4297fa412a86be950c5b7b5cec7dd523417d4989546aa1b54230->leave($__internal_31cb6e5bc8fc4297fa412a86be950c5b7b5cec7dd523417d4989546aa1b54230_prof);

        
        $__internal_19aed978e82f19caf734d738a377f18bf090f0d7943150623186c90d6686a2bd->leave($__internal_19aed978e82f19caf734d738a377f18bf090f0d7943150623186c90d6686a2bd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0a4a31cc00dafc8b2811a6517ac2d41e3f018bf01f5d3890ba8831161aed187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a4a31cc00dafc8b2811a6517ac2d41e3f018bf01f5d3890ba8831161aed187->enter($__internal_b0a4a31cc00dafc8b2811a6517ac2d41e3f018bf01f5d3890ba8831161aed187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a27509c00392b6788a23985a9525bedbbdfd858e2c7f55be33a78663aa65838d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27509c00392b6788a23985a9525bedbbdfd858e2c7f55be33a78663aa65838d->enter($__internal_a27509c00392b6788a23985a9525bedbbdfd858e2c7f55be33a78663aa65838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        if ($this->getAttribute((isset($context["handicap"]) ? $context["handicap"] : $this->getContext($context, "handicap")), "id", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["handicap"]) ? $context["handicap"] : $this->getContext($context, "handicap")), "name", array()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_handicap");
        echo "\" class=\"btn btn-default\">Annuler</a>
    </form>
";
        
        $__internal_a27509c00392b6788a23985a9525bedbbdfd858e2c7f55be33a78663aa65838d->leave($__internal_a27509c00392b6788a23985a9525bedbbdfd858e2c7f55be33a78663aa65838d_prof);

        
        $__internal_b0a4a31cc00dafc8b2811a6517ac2d41e3f018bf01f5d3890ba8831161aed187->leave($__internal_b0a4a31cc00dafc8b2811a6517ac2d41e3f018bf01f5d3890ba8831161aed187_prof);

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
{% endblock %}", "admin/handicap/edit.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\handicap\\edit.html.twig");
    }
}
