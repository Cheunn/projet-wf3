<?php

/* admin/tag/edit.html.twig */
class __TwigTemplate_630fc06da9ff7b6ac2f40732901a9846daafc9b954ae0df2af325e18d9c7cdda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/tag/edit.html.twig", 1);
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
        $__internal_c195d0ba5e33fe03bfb8b411e070f5f138afac12b4c3bc63889bbe2482d3684b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c195d0ba5e33fe03bfb8b411e070f5f138afac12b4c3bc63889bbe2482d3684b->enter($__internal_c195d0ba5e33fe03bfb8b411e070f5f138afac12b4c3bc63889bbe2482d3684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tag/edit.html.twig"));

        $__internal_d2b56f784516e7385052dd2d938bc07663e233141543109a5886fccb61c88710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b56f784516e7385052dd2d938bc07663e233141543109a5886fccb61c88710->enter($__internal_d2b56f784516e7385052dd2d938bc07663e233141543109a5886fccb61c88710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c195d0ba5e33fe03bfb8b411e070f5f138afac12b4c3bc63889bbe2482d3684b->leave($__internal_c195d0ba5e33fe03bfb8b411e070f5f138afac12b4c3bc63889bbe2482d3684b_prof);

        
        $__internal_d2b56f784516e7385052dd2d938bc07663e233141543109a5886fccb61c88710->leave($__internal_d2b56f784516e7385052dd2d938bc07663e233141543109a5886fccb61c88710_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_18f36640c3df1adddb433a76dfb9550435b98de8ff9feece0c81b6ae83d8077a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f36640c3df1adddb433a76dfb9550435b98de8ff9feece0c81b6ae83d8077a->enter($__internal_18f36640c3df1adddb433a76dfb9550435b98de8ff9feece0c81b6ae83d8077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_10abc40dc800a45d657f8573ac1c7ba9be5137176a5ddf54abaddf66473e9eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10abc40dc800a45d657f8573ac1c7ba9be5137176a5ddf54abaddf66473e9eed->enter($__internal_10abc40dc800a45d657f8573ac1c7ba9be5137176a5ddf54abaddf66473e9eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        if ($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "idtag", array())) {
            echo "Modification";
        } else {
            echo "Création";
        }
        echo " tag</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag");
        echo "\" class=\"btn btn-default\">Annuler</a>
    </form>
";
        
        $__internal_10abc40dc800a45d657f8573ac1c7ba9be5137176a5ddf54abaddf66473e9eed->leave($__internal_10abc40dc800a45d657f8573ac1c7ba9be5137176a5ddf54abaddf66473e9eed_prof);

        
        $__internal_18f36640c3df1adddb433a76dfb9550435b98de8ff9feece0c81b6ae83d8077a->leave($__internal_18f36640c3df1adddb433a76dfb9550435b98de8ff9feece0c81b6ae83d8077a_prof);

    }

    public function getTemplateName()
    {
        return "admin/tag/edit.html.twig";
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
    <h1>{% if tag.idtag %}Modification{% else %}Création{% endif %} tag</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" value=\"{{ tag.name }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"{{ path('admin_tag') }}\" class=\"btn btn-default\">Annuler</a>
    </form>
{% endblock %}
", "admin/tag/edit.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\tag\\edit.html.twig");
    }
}
