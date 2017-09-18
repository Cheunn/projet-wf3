<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_425b412aa5d4b4c4b9af20f72ebaa986b91c743b9c5e17fa235336c4a2b1e2ad extends Twig_Template
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
        $__internal_9dc00dd0d208a2cfb65d30ae1a690114174fce33499bb57c93d05145ced95db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc00dd0d208a2cfb65d30ae1a690114174fce33499bb57c93d05145ced95db7->enter($__internal_9dc00dd0d208a2cfb65d30ae1a690114174fce33499bb57c93d05145ced95db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b1efffcce43526ddd9ac625cae484a2fac5b85436033a294cfef4e8a8b0331fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1efffcce43526ddd9ac625cae484a2fac5b85436033a294cfef4e8a8b0331fa->enter($__internal_b1efffcce43526ddd9ac625cae484a2fac5b85436033a294cfef4e8a8b0331fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc00dd0d208a2cfb65d30ae1a690114174fce33499bb57c93d05145ced95db7->leave($__internal_9dc00dd0d208a2cfb65d30ae1a690114174fce33499bb57c93d05145ced95db7_prof);

        
        $__internal_b1efffcce43526ddd9ac625cae484a2fac5b85436033a294cfef4e8a8b0331fa->leave($__internal_b1efffcce43526ddd9ac625cae484a2fac5b85436033a294cfef4e8a8b0331fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2d9f0b82b53eb12504802c15f440febcff7c8481036e1b1a1773097e55d99f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d9f0b82b53eb12504802c15f440febcff7c8481036e1b1a1773097e55d99f8->enter($__internal_d2d9f0b82b53eb12504802c15f440febcff7c8481036e1b1a1773097e55d99f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7675163f3e47c8125e07882312581af7705c9530d964319e3ca6261429fc47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7675163f3e47c8125e07882312581af7705c9530d964319e3ca6261429fc47b->enter($__internal_e7675163f3e47c8125e07882312581af7705c9530d964319e3ca6261429fc47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e7675163f3e47c8125e07882312581af7705c9530d964319e3ca6261429fc47b->leave($__internal_e7675163f3e47c8125e07882312581af7705c9530d964319e3ca6261429fc47b_prof);

        
        $__internal_d2d9f0b82b53eb12504802c15f440febcff7c8481036e1b1a1773097e55d99f8->leave($__internal_d2d9f0b82b53eb12504802c15f440febcff7c8481036e1b1a1773097e55d99f8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c163eecf3dd1f5e4c9f0844bdc990cc832f78b7b7f1034d7b8f82f3598230b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c163eecf3dd1f5e4c9f0844bdc990cc832f78b7b7f1034d7b8f82f3598230b71->enter($__internal_c163eecf3dd1f5e4c9f0844bdc990cc832f78b7b7f1034d7b8f82f3598230b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ddb4a19a8f1f11084b4571d49b6190f4873e110c8b6a0b565a952388f6de073c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb4a19a8f1f11084b4571d49b6190f4873e110c8b6a0b565a952388f6de073c->enter($__internal_ddb4a19a8f1f11084b4571d49b6190f4873e110c8b6a0b565a952388f6de073c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ddb4a19a8f1f11084b4571d49b6190f4873e110c8b6a0b565a952388f6de073c->leave($__internal_ddb4a19a8f1f11084b4571d49b6190f4873e110c8b6a0b565a952388f6de073c_prof);

        
        $__internal_c163eecf3dd1f5e4c9f0844bdc990cc832f78b7b7f1034d7b8f82f3598230b71->leave($__internal_c163eecf3dd1f5e4c9f0844bdc990cc832f78b7b7f1034d7b8f82f3598230b71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_346b8810b4f177ebc97f5dbca29806547b18a8653cc38e3dd13ae78a018827d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346b8810b4f177ebc97f5dbca29806547b18a8653cc38e3dd13ae78a018827d2->enter($__internal_346b8810b4f177ebc97f5dbca29806547b18a8653cc38e3dd13ae78a018827d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90b9494e49a1d843c0bdf656780e04693969f3a21c4528038d5e088332b16dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b9494e49a1d843c0bdf656780e04693969f3a21c4528038d5e088332b16dcf->enter($__internal_90b9494e49a1d843c0bdf656780e04693969f3a21c4528038d5e088332b16dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_90b9494e49a1d843c0bdf656780e04693969f3a21c4528038d5e088332b16dcf->leave($__internal_90b9494e49a1d843c0bdf656780e04693969f3a21c4528038d5e088332b16dcf_prof);

        
        $__internal_346b8810b4f177ebc97f5dbca29806547b18a8653cc38e3dd13ae78a018827d2->leave($__internal_346b8810b4f177ebc97f5dbca29806547b18a8653cc38e3dd13ae78a018827d2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
