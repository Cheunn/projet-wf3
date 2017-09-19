<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_24ece6baa0bdb0124cf139017ef1317fdafc937f6c5e561e999a6b842d26eaa0 extends Twig_Template
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
        $__internal_3c845a8066e4d14cd5c2b2a75e80dd59f4bc68e027f4b173a33f9bdd64d7043d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c845a8066e4d14cd5c2b2a75e80dd59f4bc68e027f4b173a33f9bdd64d7043d->enter($__internal_3c845a8066e4d14cd5c2b2a75e80dd59f4bc68e027f4b173a33f9bdd64d7043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7cbb608542743b8c20d4ca0f4f3e4a88654c248c19ec2b7d5d34d807796fee2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbb608542743b8c20d4ca0f4f3e4a88654c248c19ec2b7d5d34d807796fee2c->enter($__internal_7cbb608542743b8c20d4ca0f4f3e4a88654c248c19ec2b7d5d34d807796fee2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c845a8066e4d14cd5c2b2a75e80dd59f4bc68e027f4b173a33f9bdd64d7043d->leave($__internal_3c845a8066e4d14cd5c2b2a75e80dd59f4bc68e027f4b173a33f9bdd64d7043d_prof);

        
        $__internal_7cbb608542743b8c20d4ca0f4f3e4a88654c248c19ec2b7d5d34d807796fee2c->leave($__internal_7cbb608542743b8c20d4ca0f4f3e4a88654c248c19ec2b7d5d34d807796fee2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_398ead7c8b870803d083b6aa11b1aa74fef6e9c27c983e8de120e9213135c67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ead7c8b870803d083b6aa11b1aa74fef6e9c27c983e8de120e9213135c67d->enter($__internal_398ead7c8b870803d083b6aa11b1aa74fef6e9c27c983e8de120e9213135c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_506b9bd2e0754c7a4e94abc3f27ed072940f37325cb1942ac8ff0ad0edecfb53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506b9bd2e0754c7a4e94abc3f27ed072940f37325cb1942ac8ff0ad0edecfb53->enter($__internal_506b9bd2e0754c7a4e94abc3f27ed072940f37325cb1942ac8ff0ad0edecfb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_506b9bd2e0754c7a4e94abc3f27ed072940f37325cb1942ac8ff0ad0edecfb53->leave($__internal_506b9bd2e0754c7a4e94abc3f27ed072940f37325cb1942ac8ff0ad0edecfb53_prof);

        
        $__internal_398ead7c8b870803d083b6aa11b1aa74fef6e9c27c983e8de120e9213135c67d->leave($__internal_398ead7c8b870803d083b6aa11b1aa74fef6e9c27c983e8de120e9213135c67d_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
