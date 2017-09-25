<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_18d65f9257a47e7016e9c3d872bb4a9288837f24824cd4d285211947fb18f900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e39a69ff0c7fc399e656d30afc44378e4f83373008f0f7438baa7e5280f776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e39a69ff0c7fc399e656d30afc44378e4f83373008f0f7438baa7e5280f776->enter($__internal_26e39a69ff0c7fc399e656d30afc44378e4f83373008f0f7438baa7e5280f776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_12f798ca96a169b4c57e75f148295164cdbd2f2d5b44762a4f2662c7d42be4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f798ca96a169b4c57e75f148295164cdbd2f2d5b44762a4f2662c7d42be4e6->enter($__internal_12f798ca96a169b4c57e75f148295164cdbd2f2d5b44762a4f2662c7d42be4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e39a69ff0c7fc399e656d30afc44378e4f83373008f0f7438baa7e5280f776->leave($__internal_26e39a69ff0c7fc399e656d30afc44378e4f83373008f0f7438baa7e5280f776_prof);

        
        $__internal_12f798ca96a169b4c57e75f148295164cdbd2f2d5b44762a4f2662c7d42be4e6->leave($__internal_12f798ca96a169b4c57e75f148295164cdbd2f2d5b44762a4f2662c7d42be4e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9b42afc5d471d2408a0563c8138658502eabe4a56f3a074cb30474896f185a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9b42afc5d471d2408a0563c8138658502eabe4a56f3a074cb30474896f185a->enter($__internal_db9b42afc5d471d2408a0563c8138658502eabe4a56f3a074cb30474896f185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e1b8cbd44c84422088c2d26a9c827c47233078d24afa833694827bf4108efd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1b8cbd44c84422088c2d26a9c827c47233078d24afa833694827bf4108efd4->enter($__internal_7e1b8cbd44c84422088c2d26a9c827c47233078d24afa833694827bf4108efd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7e1b8cbd44c84422088c2d26a9c827c47233078d24afa833694827bf4108efd4->leave($__internal_7e1b8cbd44c84422088c2d26a9c827c47233078d24afa833694827bf4108efd4_prof);

        
        $__internal_db9b42afc5d471d2408a0563c8138658502eabe4a56f3a074cb30474896f185a->leave($__internal_db9b42afc5d471d2408a0563c8138658502eabe4a56f3a074cb30474896f185a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
