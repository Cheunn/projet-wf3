<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_03aa1e9c110906d992a9594f864dd57de770dbc75f8209c0b694b169c3c4581c extends Twig_Template
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
        $__internal_1fce0b4884f867e914644d67dbf6ba3d63cc289274000cabca4967f09791cf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fce0b4884f867e914644d67dbf6ba3d63cc289274000cabca4967f09791cf4c->enter($__internal_1fce0b4884f867e914644d67dbf6ba3d63cc289274000cabca4967f09791cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_390aa6e98ee542c8127eda628f9865b50edc06e57d5147bd8f49d9d5e2dc91f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390aa6e98ee542c8127eda628f9865b50edc06e57d5147bd8f49d9d5e2dc91f0->enter($__internal_390aa6e98ee542c8127eda628f9865b50edc06e57d5147bd8f49d9d5e2dc91f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fce0b4884f867e914644d67dbf6ba3d63cc289274000cabca4967f09791cf4c->leave($__internal_1fce0b4884f867e914644d67dbf6ba3d63cc289274000cabca4967f09791cf4c_prof);

        
        $__internal_390aa6e98ee542c8127eda628f9865b50edc06e57d5147bd8f49d9d5e2dc91f0->leave($__internal_390aa6e98ee542c8127eda628f9865b50edc06e57d5147bd8f49d9d5e2dc91f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da6fd8f84190f8417bb60a673025683e246eee630d9cf822b98d7eb4c5ed33b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6fd8f84190f8417bb60a673025683e246eee630d9cf822b98d7eb4c5ed33b9->enter($__internal_da6fd8f84190f8417bb60a673025683e246eee630d9cf822b98d7eb4c5ed33b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_122051ca94297054943d441d52ae5aa5962bdb15dccd27efcc3d436bf0f6f188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122051ca94297054943d441d52ae5aa5962bdb15dccd27efcc3d436bf0f6f188->enter($__internal_122051ca94297054943d441d52ae5aa5962bdb15dccd27efcc3d436bf0f6f188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_122051ca94297054943d441d52ae5aa5962bdb15dccd27efcc3d436bf0f6f188->leave($__internal_122051ca94297054943d441d52ae5aa5962bdb15dccd27efcc3d436bf0f6f188_prof);

        
        $__internal_da6fd8f84190f8417bb60a673025683e246eee630d9cf822b98d7eb4c5ed33b9->leave($__internal_da6fd8f84190f8417bb60a673025683e246eee630d9cf822b98d7eb4c5ed33b9_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
