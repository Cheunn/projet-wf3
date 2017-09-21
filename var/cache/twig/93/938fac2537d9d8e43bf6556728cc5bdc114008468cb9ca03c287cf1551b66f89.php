<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a109b43f36c869ecb494ebeb2b4b3d6ad55f6a36bfff2e6d647e8e0ec37d8fb0 extends Twig_Template
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
        $__internal_f545424d164ae06c16e6b6f7d5596f0dfe69298b147100123762f07e2b70e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f545424d164ae06c16e6b6f7d5596f0dfe69298b147100123762f07e2b70e89d->enter($__internal_f545424d164ae06c16e6b6f7d5596f0dfe69298b147100123762f07e2b70e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_39855ea23b51b5114aff41364309235ba6a655e765e3144d8f8b610d7e116d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39855ea23b51b5114aff41364309235ba6a655e765e3144d8f8b610d7e116d78->enter($__internal_39855ea23b51b5114aff41364309235ba6a655e765e3144d8f8b610d7e116d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f545424d164ae06c16e6b6f7d5596f0dfe69298b147100123762f07e2b70e89d->leave($__internal_f545424d164ae06c16e6b6f7d5596f0dfe69298b147100123762f07e2b70e89d_prof);

        
        $__internal_39855ea23b51b5114aff41364309235ba6a655e765e3144d8f8b610d7e116d78->leave($__internal_39855ea23b51b5114aff41364309235ba6a655e765e3144d8f8b610d7e116d78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42f276151154806714a5b91dcd50065d03297a8d34a1dec377fd9d38b9cf6121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f276151154806714a5b91dcd50065d03297a8d34a1dec377fd9d38b9cf6121->enter($__internal_42f276151154806714a5b91dcd50065d03297a8d34a1dec377fd9d38b9cf6121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a33c095a32655dad5b450020a447b6b3d3923ae9a38527a3a3efa687fed369c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33c095a32655dad5b450020a447b6b3d3923ae9a38527a3a3efa687fed369c3->enter($__internal_a33c095a32655dad5b450020a447b6b3d3923ae9a38527a3a3efa687fed369c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a33c095a32655dad5b450020a447b6b3d3923ae9a38527a3a3efa687fed369c3->leave($__internal_a33c095a32655dad5b450020a447b6b3d3923ae9a38527a3a3efa687fed369c3_prof);

        
        $__internal_42f276151154806714a5b91dcd50065d03297a8d34a1dec377fd9d38b9cf6121->leave($__internal_42f276151154806714a5b91dcd50065d03297a8d34a1dec377fd9d38b9cf6121_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b98749c7b5761334c39c83dd133bcbd982bc953f65886f24bdda8b9231353af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b98749c7b5761334c39c83dd133bcbd982bc953f65886f24bdda8b9231353af->enter($__internal_5b98749c7b5761334c39c83dd133bcbd982bc953f65886f24bdda8b9231353af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c289798f51eacfe60a82289da049a4f04ca974c8880b9e6845ca30730713b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c289798f51eacfe60a82289da049a4f04ca974c8880b9e6845ca30730713b7d->enter($__internal_4c289798f51eacfe60a82289da049a4f04ca974c8880b9e6845ca30730713b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4c289798f51eacfe60a82289da049a4f04ca974c8880b9e6845ca30730713b7d->leave($__internal_4c289798f51eacfe60a82289da049a4f04ca974c8880b9e6845ca30730713b7d_prof);

        
        $__internal_5b98749c7b5761334c39c83dd133bcbd982bc953f65886f24bdda8b9231353af->leave($__internal_5b98749c7b5761334c39c83dd133bcbd982bc953f65886f24bdda8b9231353af_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f685bb7e4af4b76dd17406ad96757ca71e85a58dd0e602c2ba6a5c3b5d4e884a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f685bb7e4af4b76dd17406ad96757ca71e85a58dd0e602c2ba6a5c3b5d4e884a->enter($__internal_f685bb7e4af4b76dd17406ad96757ca71e85a58dd0e602c2ba6a5c3b5d4e884a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35ddb6eed7ad8403f2fecf3c20daee12d5c70b3d5a57f6f89e879e591e82a8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ddb6eed7ad8403f2fecf3c20daee12d5c70b3d5a57f6f89e879e591e82a8ea->enter($__internal_35ddb6eed7ad8403f2fecf3c20daee12d5c70b3d5a57f6f89e879e591e82a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_35ddb6eed7ad8403f2fecf3c20daee12d5c70b3d5a57f6f89e879e591e82a8ea->leave($__internal_35ddb6eed7ad8403f2fecf3c20daee12d5c70b3d5a57f6f89e879e591e82a8ea_prof);

        
        $__internal_f685bb7e4af4b76dd17406ad96757ca71e85a58dd0e602c2ba6a5c3b5d4e884a->leave($__internal_f685bb7e4af4b76dd17406ad96757ca71e85a58dd0e602c2ba6a5c3b5d4e884a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_v3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
