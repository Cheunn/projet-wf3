<?php

/* admin/type/edit.html.twig */
class __TwigTemplate_5f2245fd3bc77855d0e93765f53abfea217de7f3de2d56b872421e69c8e1daf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/type/edit.html.twig", 1);
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
        $__internal_5eae42060a2fd71a01a9a461571ec9a30c64381678556e37d83cc886ae1c0f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eae42060a2fd71a01a9a461571ec9a30c64381678556e37d83cc886ae1c0f6a->enter($__internal_5eae42060a2fd71a01a9a461571ec9a30c64381678556e37d83cc886ae1c0f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/type/edit.html.twig"));

        $__internal_2ec08cf619707c81eb9bb33361c024c04810a9127bfd418147ff98282bf4975d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec08cf619707c81eb9bb33361c024c04810a9127bfd418147ff98282bf4975d->enter($__internal_2ec08cf619707c81eb9bb33361c024c04810a9127bfd418147ff98282bf4975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/type/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eae42060a2fd71a01a9a461571ec9a30c64381678556e37d83cc886ae1c0f6a->leave($__internal_5eae42060a2fd71a01a9a461571ec9a30c64381678556e37d83cc886ae1c0f6a_prof);

        
        $__internal_2ec08cf619707c81eb9bb33361c024c04810a9127bfd418147ff98282bf4975d->leave($__internal_2ec08cf619707c81eb9bb33361c024c04810a9127bfd418147ff98282bf4975d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca1726d3950d90988add7f6143200f71d6086f4d13dac85982668feb46b4fc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1726d3950d90988add7f6143200f71d6086f4d13dac85982668feb46b4fc84->enter($__internal_ca1726d3950d90988add7f6143200f71d6086f4d13dac85982668feb46b4fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c7ccda1dbeaae1609c6325284d95b9acf36700d82914d212f91b2b9de1816d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ccda1dbeaae1609c6325284d95b9acf36700d82914d212f91b2b9de1816d15->enter($__internal_c7ccda1dbeaae1609c6325284d95b9acf36700d82914d212f91b2b9de1816d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id_type", array())) {
            echo "Modification";
        } else {
            echo "Création";
        }
        echo " type</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name", array()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type");
        echo "\" class=\"btn btn-default\">Annuler</a>
    </form>
";
        
        $__internal_c7ccda1dbeaae1609c6325284d95b9acf36700d82914d212f91b2b9de1816d15->leave($__internal_c7ccda1dbeaae1609c6325284d95b9acf36700d82914d212f91b2b9de1816d15_prof);

        
        $__internal_ca1726d3950d90988add7f6143200f71d6086f4d13dac85982668feb46b4fc84->leave($__internal_ca1726d3950d90988add7f6143200f71d6086f4d13dac85982668feb46b4fc84_prof);

    }

    public function getTemplateName()
    {
        return "admin/type/edit.html.twig";
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
    <h1>{% if type.id_type %}Modification{% else %}Création{% endif %} type</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ type.name }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"{{ path('admin_type') }}\" class=\"btn btn-default\">Annuler</a>
    </form>
{% endblock %}
", "admin/type/edit.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\type\\edit.html.twig");
    }
}
