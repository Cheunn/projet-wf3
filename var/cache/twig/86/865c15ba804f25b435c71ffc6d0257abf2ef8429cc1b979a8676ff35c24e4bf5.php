<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a72ce76c5c06cbecdfb892067a6472f85330df11c42eef1ea312b7a359c0bed8 extends Twig_Template
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
        $__internal_bd329f19f0d51f795010578762a36cfa9b97c4053b3ae43b6ef6b0e6d067ebbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd329f19f0d51f795010578762a36cfa9b97c4053b3ae43b6ef6b0e6d067ebbc->enter($__internal_bd329f19f0d51f795010578762a36cfa9b97c4053b3ae43b6ef6b0e6d067ebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_74f60eb204e1236948fd73ddc000a0777068e6b789410577d26f971c0a8aba0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f60eb204e1236948fd73ddc000a0777068e6b789410577d26f971c0a8aba0a->enter($__internal_74f60eb204e1236948fd73ddc000a0777068e6b789410577d26f971c0a8aba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd329f19f0d51f795010578762a36cfa9b97c4053b3ae43b6ef6b0e6d067ebbc->leave($__internal_bd329f19f0d51f795010578762a36cfa9b97c4053b3ae43b6ef6b0e6d067ebbc_prof);

        
        $__internal_74f60eb204e1236948fd73ddc000a0777068e6b789410577d26f971c0a8aba0a->leave($__internal_74f60eb204e1236948fd73ddc000a0777068e6b789410577d26f971c0a8aba0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57874ae9a15a6612f8dec245a148b09f252a61187943bbf340e60ea8aa3d1db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57874ae9a15a6612f8dec245a148b09f252a61187943bbf340e60ea8aa3d1db0->enter($__internal_57874ae9a15a6612f8dec245a148b09f252a61187943bbf340e60ea8aa3d1db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6a99c9f8272c657c710deff10f401e230b984c9ce42b6bf65c80d8981d133fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a99c9f8272c657c710deff10f401e230b984c9ce42b6bf65c80d8981d133fa->enter($__internal_b6a99c9f8272c657c710deff10f401e230b984c9ce42b6bf65c80d8981d133fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b6a99c9f8272c657c710deff10f401e230b984c9ce42b6bf65c80d8981d133fa->leave($__internal_b6a99c9f8272c657c710deff10f401e230b984c9ce42b6bf65c80d8981d133fa_prof);

        
        $__internal_57874ae9a15a6612f8dec245a148b09f252a61187943bbf340e60ea8aa3d1db0->leave($__internal_57874ae9a15a6612f8dec245a148b09f252a61187943bbf340e60ea8aa3d1db0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efc8306f577177c0b1d629fef342ad4c0d32d2eac48bbedbd9fc7786bf1ec6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc8306f577177c0b1d629fef342ad4c0d32d2eac48bbedbd9fc7786bf1ec6e0->enter($__internal_efc8306f577177c0b1d629fef342ad4c0d32d2eac48bbedbd9fc7786bf1ec6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56ffed18444a1a791e20f21f44d4ad933bfae8d28b690bda8727876fa0889357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ffed18444a1a791e20f21f44d4ad933bfae8d28b690bda8727876fa0889357->enter($__internal_56ffed18444a1a791e20f21f44d4ad933bfae8d28b690bda8727876fa0889357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_56ffed18444a1a791e20f21f44d4ad933bfae8d28b690bda8727876fa0889357->leave($__internal_56ffed18444a1a791e20f21f44d4ad933bfae8d28b690bda8727876fa0889357_prof);

        
        $__internal_efc8306f577177c0b1d629fef342ad4c0d32d2eac48bbedbd9fc7786bf1ec6e0->leave($__internal_efc8306f577177c0b1d629fef342ad4c0d32d2eac48bbedbd9fc7786bf1ec6e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_549535fe6b479ef054b8432831277f9694e23c9942a0343afb7817a2bf834e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549535fe6b479ef054b8432831277f9694e23c9942a0343afb7817a2bf834e9e->enter($__internal_549535fe6b479ef054b8432831277f9694e23c9942a0343afb7817a2bf834e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a00900bcff15b71c1d6c5ff21b45c3b0641bb30642c236fd8c0ea7da3bd98950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00900bcff15b71c1d6c5ff21b45c3b0641bb30642c236fd8c0ea7da3bd98950->enter($__internal_a00900bcff15b71c1d6c5ff21b45c3b0641bb30642c236fd8c0ea7da3bd98950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a00900bcff15b71c1d6c5ff21b45c3b0641bb30642c236fd8c0ea7da3bd98950->leave($__internal_a00900bcff15b71c1d6c5ff21b45c3b0641bb30642c236fd8c0ea7da3bd98950_prof);

        
        $__internal_549535fe6b479ef054b8432831277f9694e23c9942a0343afb7817a2bf834e9e->leave($__internal_549535fe6b479ef054b8432831277f9694e23c9942a0343afb7817a2bf834e9e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
