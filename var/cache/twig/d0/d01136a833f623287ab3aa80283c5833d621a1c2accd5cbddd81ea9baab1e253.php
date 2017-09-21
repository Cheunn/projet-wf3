<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7111098222923e955e457cf7cac347e7ff85e513bec9866410cc8a02d021f931 extends Twig_Template
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
        $__internal_6861edae91014846f43419eb7d25766f916fdd09dacedcc3f9acf0ebeae0109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6861edae91014846f43419eb7d25766f916fdd09dacedcc3f9acf0ebeae0109c->enter($__internal_6861edae91014846f43419eb7d25766f916fdd09dacedcc3f9acf0ebeae0109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_940539443c7ba579ebb990b5d12caefbae5ef6b92716078c4883facfd633a803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940539443c7ba579ebb990b5d12caefbae5ef6b92716078c4883facfd633a803->enter($__internal_940539443c7ba579ebb990b5d12caefbae5ef6b92716078c4883facfd633a803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6861edae91014846f43419eb7d25766f916fdd09dacedcc3f9acf0ebeae0109c->leave($__internal_6861edae91014846f43419eb7d25766f916fdd09dacedcc3f9acf0ebeae0109c_prof);

        
        $__internal_940539443c7ba579ebb990b5d12caefbae5ef6b92716078c4883facfd633a803->leave($__internal_940539443c7ba579ebb990b5d12caefbae5ef6b92716078c4883facfd633a803_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_950da98ecfecd16ae13c52b56f9c2ab71e470ad804d1c4a74f001949aaf1b941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950da98ecfecd16ae13c52b56f9c2ab71e470ad804d1c4a74f001949aaf1b941->enter($__internal_950da98ecfecd16ae13c52b56f9c2ab71e470ad804d1c4a74f001949aaf1b941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e442af1b7f5da4d0397e4b04fb828027c9ecb87e4acf93be62f851ec14d42ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e442af1b7f5da4d0397e4b04fb828027c9ecb87e4acf93be62f851ec14d42ee->enter($__internal_3e442af1b7f5da4d0397e4b04fb828027c9ecb87e4acf93be62f851ec14d42ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3e442af1b7f5da4d0397e4b04fb828027c9ecb87e4acf93be62f851ec14d42ee->leave($__internal_3e442af1b7f5da4d0397e4b04fb828027c9ecb87e4acf93be62f851ec14d42ee_prof);

        
        $__internal_950da98ecfecd16ae13c52b56f9c2ab71e470ad804d1c4a74f001949aaf1b941->leave($__internal_950da98ecfecd16ae13c52b56f9c2ab71e470ad804d1c4a74f001949aaf1b941_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_v2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
