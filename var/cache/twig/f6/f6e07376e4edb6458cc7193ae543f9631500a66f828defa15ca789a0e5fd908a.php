<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a7aab06356c3f562a7594114fff34a298e225bc7d62db4df66a18e7bf6e26688 extends Twig_Template
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
        $__internal_a3bf11eba6d60837ba771b73416ef539bec8f16024e2d12f1051d16e4134719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bf11eba6d60837ba771b73416ef539bec8f16024e2d12f1051d16e4134719b->enter($__internal_a3bf11eba6d60837ba771b73416ef539bec8f16024e2d12f1051d16e4134719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_04ecf27fd622f29a88b1c0aae1cfcb5d777d7eb6e480ad8931d6f9f3ee23cc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ecf27fd622f29a88b1c0aae1cfcb5d777d7eb6e480ad8931d6f9f3ee23cc60->enter($__internal_04ecf27fd622f29a88b1c0aae1cfcb5d777d7eb6e480ad8931d6f9f3ee23cc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3bf11eba6d60837ba771b73416ef539bec8f16024e2d12f1051d16e4134719b->leave($__internal_a3bf11eba6d60837ba771b73416ef539bec8f16024e2d12f1051d16e4134719b_prof);

        
        $__internal_04ecf27fd622f29a88b1c0aae1cfcb5d777d7eb6e480ad8931d6f9f3ee23cc60->leave($__internal_04ecf27fd622f29a88b1c0aae1cfcb5d777d7eb6e480ad8931d6f9f3ee23cc60_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_073b7ebc12f75c8b2c406d6d4aa4d1f9c0a4d475bfc0b0a160479f1b03eba136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073b7ebc12f75c8b2c406d6d4aa4d1f9c0a4d475bfc0b0a160479f1b03eba136->enter($__internal_073b7ebc12f75c8b2c406d6d4aa4d1f9c0a4d475bfc0b0a160479f1b03eba136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7f2eb3b5c8c2a1dfd35568e8ff7763ad601c18104d6acf2351ad383626bd2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f2eb3b5c8c2a1dfd35568e8ff7763ad601c18104d6acf2351ad383626bd2c8->enter($__internal_a7f2eb3b5c8c2a1dfd35568e8ff7763ad601c18104d6acf2351ad383626bd2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a7f2eb3b5c8c2a1dfd35568e8ff7763ad601c18104d6acf2351ad383626bd2c8->leave($__internal_a7f2eb3b5c8c2a1dfd35568e8ff7763ad601c18104d6acf2351ad383626bd2c8_prof);

        
        $__internal_073b7ebc12f75c8b2c406d6d4aa4d1f9c0a4d475bfc0b0a160479f1b03eba136->leave($__internal_073b7ebc12f75c8b2c406d6d4aa4d1f9c0a4d475bfc0b0a160479f1b03eba136_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
