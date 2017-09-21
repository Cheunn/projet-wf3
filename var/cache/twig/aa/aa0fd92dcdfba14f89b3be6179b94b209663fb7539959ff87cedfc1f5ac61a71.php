<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3387eff801a5927b0a163132c986dec7ea3a8cd40ff8d56ff8d697140871092f extends Twig_Template
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
        $__internal_70b2799ac8a1959fad5c0bcfe0b71158a35c9c29c3973df4ad907d29bd7ab3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b2799ac8a1959fad5c0bcfe0b71158a35c9c29c3973df4ad907d29bd7ab3ef->enter($__internal_70b2799ac8a1959fad5c0bcfe0b71158a35c9c29c3973df4ad907d29bd7ab3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a45ba903bc7dd6db6483ae13a4bcf8f33b801b3549d0b4fe19e45a5529298cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45ba903bc7dd6db6483ae13a4bcf8f33b801b3549d0b4fe19e45a5529298cdb->enter($__internal_a45ba903bc7dd6db6483ae13a4bcf8f33b801b3549d0b4fe19e45a5529298cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b2799ac8a1959fad5c0bcfe0b71158a35c9c29c3973df4ad907d29bd7ab3ef->leave($__internal_70b2799ac8a1959fad5c0bcfe0b71158a35c9c29c3973df4ad907d29bd7ab3ef_prof);

        
        $__internal_a45ba903bc7dd6db6483ae13a4bcf8f33b801b3549d0b4fe19e45a5529298cdb->leave($__internal_a45ba903bc7dd6db6483ae13a4bcf8f33b801b3549d0b4fe19e45a5529298cdb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a383b1b59ce2b0122b5d62252e6b4f18c65f98ec6fb72971f21de46a4596e3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a383b1b59ce2b0122b5d62252e6b4f18c65f98ec6fb72971f21de46a4596e3d2->enter($__internal_a383b1b59ce2b0122b5d62252e6b4f18c65f98ec6fb72971f21de46a4596e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d8f85c78f61f22c3a3d621b30303688f3e345d8f6e491d7d6f1b75886bf9938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8f85c78f61f22c3a3d621b30303688f3e345d8f6e491d7d6f1b75886bf9938->enter($__internal_9d8f85c78f61f22c3a3d621b30303688f3e345d8f6e491d7d6f1b75886bf9938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9d8f85c78f61f22c3a3d621b30303688f3e345d8f6e491d7d6f1b75886bf9938->leave($__internal_9d8f85c78f61f22c3a3d621b30303688f3e345d8f6e491d7d6f1b75886bf9938_prof);

        
        $__internal_a383b1b59ce2b0122b5d62252e6b4f18c65f98ec6fb72971f21de46a4596e3d2->leave($__internal_a383b1b59ce2b0122b5d62252e6b4f18c65f98ec6fb72971f21de46a4596e3d2_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_v3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
