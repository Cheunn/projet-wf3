<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_99a90dd9d8afd79ef92d7e87c54065dc3d3c4af30c57ac1b9bc486a312e7abf1 extends Twig_Template
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
        $__internal_9a5054a65bd26c7a9dfb0c524fb9f7db372f49b7c0abdac55c649ead22e87e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5054a65bd26c7a9dfb0c524fb9f7db372f49b7c0abdac55c649ead22e87e1d->enter($__internal_9a5054a65bd26c7a9dfb0c524fb9f7db372f49b7c0abdac55c649ead22e87e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5dcd626bd4f6733c492da497c5901b4d0565face49e52060db70417cd7b9b329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcd626bd4f6733c492da497c5901b4d0565face49e52060db70417cd7b9b329->enter($__internal_5dcd626bd4f6733c492da497c5901b4d0565face49e52060db70417cd7b9b329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5054a65bd26c7a9dfb0c524fb9f7db372f49b7c0abdac55c649ead22e87e1d->leave($__internal_9a5054a65bd26c7a9dfb0c524fb9f7db372f49b7c0abdac55c649ead22e87e1d_prof);

        
        $__internal_5dcd626bd4f6733c492da497c5901b4d0565face49e52060db70417cd7b9b329->leave($__internal_5dcd626bd4f6733c492da497c5901b4d0565face49e52060db70417cd7b9b329_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b4229fa6154e48f16a885d2cd0b2baaa2b3115f39db682d275641fe38da20e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4229fa6154e48f16a885d2cd0b2baaa2b3115f39db682d275641fe38da20e0->enter($__internal_9b4229fa6154e48f16a885d2cd0b2baaa2b3115f39db682d275641fe38da20e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_11d4f0599ec3a9b8380efe49a3777e0509182aa499e56eee1180bad4ead1b9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d4f0599ec3a9b8380efe49a3777e0509182aa499e56eee1180bad4ead1b9de->enter($__internal_11d4f0599ec3a9b8380efe49a3777e0509182aa499e56eee1180bad4ead1b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_11d4f0599ec3a9b8380efe49a3777e0509182aa499e56eee1180bad4ead1b9de->leave($__internal_11d4f0599ec3a9b8380efe49a3777e0509182aa499e56eee1180bad4ead1b9de_prof);

        
        $__internal_9b4229fa6154e48f16a885d2cd0b2baaa2b3115f39db682d275641fe38da20e0->leave($__internal_9b4229fa6154e48f16a885d2cd0b2baaa2b3115f39db682d275641fe38da20e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e06275cefb182a940eca2e1e7ffc785a0eeeea8634f6cbe76021c66c114b2059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06275cefb182a940eca2e1e7ffc785a0eeeea8634f6cbe76021c66c114b2059->enter($__internal_e06275cefb182a940eca2e1e7ffc785a0eeeea8634f6cbe76021c66c114b2059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60b45ae091ade25bed087fe1b79f4b95a16c00e6de16cc7ef29a0ff171cc5760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b45ae091ade25bed087fe1b79f4b95a16c00e6de16cc7ef29a0ff171cc5760->enter($__internal_60b45ae091ade25bed087fe1b79f4b95a16c00e6de16cc7ef29a0ff171cc5760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_60b45ae091ade25bed087fe1b79f4b95a16c00e6de16cc7ef29a0ff171cc5760->leave($__internal_60b45ae091ade25bed087fe1b79f4b95a16c00e6de16cc7ef29a0ff171cc5760_prof);

        
        $__internal_e06275cefb182a940eca2e1e7ffc785a0eeeea8634f6cbe76021c66c114b2059->leave($__internal_e06275cefb182a940eca2e1e7ffc785a0eeeea8634f6cbe76021c66c114b2059_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25db1d751c8128aa9c49f94e38eb0720afbc4caa2c91253172973e0f3080141a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25db1d751c8128aa9c49f94e38eb0720afbc4caa2c91253172973e0f3080141a->enter($__internal_25db1d751c8128aa9c49f94e38eb0720afbc4caa2c91253172973e0f3080141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a8be8ca83ded41d670b1e1960d9bd50fa89b3af57a3671f83855af8705acb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8be8ca83ded41d670b1e1960d9bd50fa89b3af57a3671f83855af8705acb4d->enter($__internal_7a8be8ca83ded41d670b1e1960d9bd50fa89b3af57a3671f83855af8705acb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7a8be8ca83ded41d670b1e1960d9bd50fa89b3af57a3671f83855af8705acb4d->leave($__internal_7a8be8ca83ded41d670b1e1960d9bd50fa89b3af57a3671f83855af8705acb4d_prof);

        
        $__internal_25db1d751c8128aa9c49f94e38eb0720afbc4caa2c91253172973e0f3080141a->leave($__internal_25db1d751c8128aa9c49f94e38eb0720afbc4caa2c91253172973e0f3080141a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
