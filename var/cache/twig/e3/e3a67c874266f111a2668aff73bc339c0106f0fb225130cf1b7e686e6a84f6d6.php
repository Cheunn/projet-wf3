<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ac898fe7ff516d9f0579ba820c121fd285cdcfb19feb50dc47bef3b5f8b1efa0 extends Twig_Template
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
        $__internal_da58e716e0b048656690fcf0001fe2c205373fb9968187f6b3799027831ee079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da58e716e0b048656690fcf0001fe2c205373fb9968187f6b3799027831ee079->enter($__internal_da58e716e0b048656690fcf0001fe2c205373fb9968187f6b3799027831ee079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_995df43b68134bdafdb0dc20eff89c707818dbca0e983d6b834282cbe5435aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995df43b68134bdafdb0dc20eff89c707818dbca0e983d6b834282cbe5435aa9->enter($__internal_995df43b68134bdafdb0dc20eff89c707818dbca0e983d6b834282cbe5435aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da58e716e0b048656690fcf0001fe2c205373fb9968187f6b3799027831ee079->leave($__internal_da58e716e0b048656690fcf0001fe2c205373fb9968187f6b3799027831ee079_prof);

        
        $__internal_995df43b68134bdafdb0dc20eff89c707818dbca0e983d6b834282cbe5435aa9->leave($__internal_995df43b68134bdafdb0dc20eff89c707818dbca0e983d6b834282cbe5435aa9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_127d771e13c19c7ad5991d2cc08d3d1cbaf9a28010333e5185016b79bc5d2f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127d771e13c19c7ad5991d2cc08d3d1cbaf9a28010333e5185016b79bc5d2f9d->enter($__internal_127d771e13c19c7ad5991d2cc08d3d1cbaf9a28010333e5185016b79bc5d2f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98e7724ce94a939c7ff7cbb5983b72a3f91e9760493046e571f56fb13bc2a3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e7724ce94a939c7ff7cbb5983b72a3f91e9760493046e571f56fb13bc2a3bd->enter($__internal_98e7724ce94a939c7ff7cbb5983b72a3f91e9760493046e571f56fb13bc2a3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98e7724ce94a939c7ff7cbb5983b72a3f91e9760493046e571f56fb13bc2a3bd->leave($__internal_98e7724ce94a939c7ff7cbb5983b72a3f91e9760493046e571f56fb13bc2a3bd_prof);

        
        $__internal_127d771e13c19c7ad5991d2cc08d3d1cbaf9a28010333e5185016b79bc5d2f9d->leave($__internal_127d771e13c19c7ad5991d2cc08d3d1cbaf9a28010333e5185016b79bc5d2f9d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e5c9a6a4eeda4bfa22518b5dcac50ccba7903b474a941b52da6333450e610a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5c9a6a4eeda4bfa22518b5dcac50ccba7903b474a941b52da6333450e610a3->enter($__internal_8e5c9a6a4eeda4bfa22518b5dcac50ccba7903b474a941b52da6333450e610a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b9d736febfe06aa11c76d139b92fb297f4ffc6e3ab62ed39ccffa12b1ce3f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9d736febfe06aa11c76d139b92fb297f4ffc6e3ab62ed39ccffa12b1ce3f04->enter($__internal_5b9d736febfe06aa11c76d139b92fb297f4ffc6e3ab62ed39ccffa12b1ce3f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5b9d736febfe06aa11c76d139b92fb297f4ffc6e3ab62ed39ccffa12b1ce3f04->leave($__internal_5b9d736febfe06aa11c76d139b92fb297f4ffc6e3ab62ed39ccffa12b1ce3f04_prof);

        
        $__internal_8e5c9a6a4eeda4bfa22518b5dcac50ccba7903b474a941b52da6333450e610a3->leave($__internal_8e5c9a6a4eeda4bfa22518b5dcac50ccba7903b474a941b52da6333450e610a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33c2dcc5631fc9157d9e9dcdf5f744ad6f494f0c99f679394ee3e6d6ce5e43d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c2dcc5631fc9157d9e9dcdf5f744ad6f494f0c99f679394ee3e6d6ce5e43d9->enter($__internal_33c2dcc5631fc9157d9e9dcdf5f744ad6f494f0c99f679394ee3e6d6ce5e43d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1d3fa0ba8d85dbcd639e6a5e3dcdad22ffd72514c1c24e4c43cc4d0c628233a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d3fa0ba8d85dbcd639e6a5e3dcdad22ffd72514c1c24e4c43cc4d0c628233a->enter($__internal_a1d3fa0ba8d85dbcd639e6a5e3dcdad22ffd72514c1c24e4c43cc4d0c628233a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a1d3fa0ba8d85dbcd639e6a5e3dcdad22ffd72514c1c24e4c43cc4d0c628233a->leave($__internal_a1d3fa0ba8d85dbcd639e6a5e3dcdad22ffd72514c1c24e4c43cc4d0c628233a_prof);

        
        $__internal_33c2dcc5631fc9157d9e9dcdf5f744ad6f494f0c99f679394ee3e6d6ce5e43d9->leave($__internal_33c2dcc5631fc9157d9e9dcdf5f744ad6f494f0c99f679394ee3e6d6ce5e43d9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_v2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
