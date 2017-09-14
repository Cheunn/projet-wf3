<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_798799cf0ac1cc6aea2a0c09bb2fc4e3141f73c2544a3cf597225e5419f5d273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6116f37d2764ced580b83b08d632bb22a7ca69e7ba80821b9bc53b4661ec1efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6116f37d2764ced580b83b08d632bb22a7ca69e7ba80821b9bc53b4661ec1efb->enter($__internal_6116f37d2764ced580b83b08d632bb22a7ca69e7ba80821b9bc53b4661ec1efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_588ec3ef571a1e9b01ab73008f3015528ca780bc8965c799ce023e99730316a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588ec3ef571a1e9b01ab73008f3015528ca780bc8965c799ce023e99730316a4->enter($__internal_588ec3ef571a1e9b01ab73008f3015528ca780bc8965c799ce023e99730316a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6116f37d2764ced580b83b08d632bb22a7ca69e7ba80821b9bc53b4661ec1efb->leave($__internal_6116f37d2764ced580b83b08d632bb22a7ca69e7ba80821b9bc53b4661ec1efb_prof);

        
        $__internal_588ec3ef571a1e9b01ab73008f3015528ca780bc8965c799ce023e99730316a4->leave($__internal_588ec3ef571a1e9b01ab73008f3015528ca780bc8965c799ce023e99730316a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d8903cd59993a630c06f8acedf001cbdf87ec57e1a0b5a32b396f8c399fa786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8903cd59993a630c06f8acedf001cbdf87ec57e1a0b5a32b396f8c399fa786->enter($__internal_9d8903cd59993a630c06f8acedf001cbdf87ec57e1a0b5a32b396f8c399fa786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0899f32e28ca049cb7ba30cbbbd2e9fce2b5c816073ea60793c2e8f5a806534c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0899f32e28ca049cb7ba30cbbbd2e9fce2b5c816073ea60793c2e8f5a806534c->enter($__internal_0899f32e28ca049cb7ba30cbbbd2e9fce2b5c816073ea60793c2e8f5a806534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0899f32e28ca049cb7ba30cbbbd2e9fce2b5c816073ea60793c2e8f5a806534c->leave($__internal_0899f32e28ca049cb7ba30cbbbd2e9fce2b5c816073ea60793c2e8f5a806534c_prof);

        
        $__internal_9d8903cd59993a630c06f8acedf001cbdf87ec57e1a0b5a32b396f8c399fa786->leave($__internal_9d8903cd59993a630c06f8acedf001cbdf87ec57e1a0b5a32b396f8c399fa786_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db67c6e22571a6bc6c2eb9acf5ebb7d99dfec9c0b00e0383c281e2e367d22486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db67c6e22571a6bc6c2eb9acf5ebb7d99dfec9c0b00e0383c281e2e367d22486->enter($__internal_db67c6e22571a6bc6c2eb9acf5ebb7d99dfec9c0b00e0383c281e2e367d22486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae33efc6aad0c63a1ea358befb013dd8dcd8679191aaa9c6d42aa42f62ed88f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae33efc6aad0c63a1ea358befb013dd8dcd8679191aaa9c6d42aa42f62ed88f5->enter($__internal_ae33efc6aad0c63a1ea358befb013dd8dcd8679191aaa9c6d42aa42f62ed88f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae33efc6aad0c63a1ea358befb013dd8dcd8679191aaa9c6d42aa42f62ed88f5->leave($__internal_ae33efc6aad0c63a1ea358befb013dd8dcd8679191aaa9c6d42aa42f62ed88f5_prof);

        
        $__internal_db67c6e22571a6bc6c2eb9acf5ebb7d99dfec9c0b00e0383c281e2e367d22486->leave($__internal_db67c6e22571a6bc6c2eb9acf5ebb7d99dfec9c0b00e0383c281e2e367d22486_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d255f394ce84e3cab0ec58bdb13e99319ac551dcb2484d6cff706adbcfb8e444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d255f394ce84e3cab0ec58bdb13e99319ac551dcb2484d6cff706adbcfb8e444->enter($__internal_d255f394ce84e3cab0ec58bdb13e99319ac551dcb2484d6cff706adbcfb8e444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8cf2a137b29f6f59dbe8f464fa98b1bdd487a1fef7ba9694dc65e6bbff62ec3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf2a137b29f6f59dbe8f464fa98b1bdd487a1fef7ba9694dc65e6bbff62ec3e->enter($__internal_8cf2a137b29f6f59dbe8f464fa98b1bdd487a1fef7ba9694dc65e6bbff62ec3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_8cf2a137b29f6f59dbe8f464fa98b1bdd487a1fef7ba9694dc65e6bbff62ec3e->leave($__internal_8cf2a137b29f6f59dbe8f464fa98b1bdd487a1fef7ba9694dc65e6bbff62ec3e_prof);

        
        $__internal_d255f394ce84e3cab0ec58bdb13e99319ac551dcb2484d6cff706adbcfb8e444->leave($__internal_d255f394ce84e3cab0ec58bdb13e99319ac551dcb2484d6cff706adbcfb8e444_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
