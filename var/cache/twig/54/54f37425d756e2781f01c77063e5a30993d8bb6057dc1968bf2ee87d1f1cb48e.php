<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_52255ef7611d9c8c7b2a02d523d02b8a34aa03130559fe2426a365028d0479af extends Twig_Template
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
        $__internal_20c13aee69ad6354966c8dac9bbc9265f7775b28a738f2d68fdd1d790ebce1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c13aee69ad6354966c8dac9bbc9265f7775b28a738f2d68fdd1d790ebce1a8->enter($__internal_20c13aee69ad6354966c8dac9bbc9265f7775b28a738f2d68fdd1d790ebce1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3da3cb9e09d8904b9d2597ecd073c0852120b8e5a5a5f6ff9e7e6ade6266532d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da3cb9e09d8904b9d2597ecd073c0852120b8e5a5a5f6ff9e7e6ade6266532d->enter($__internal_3da3cb9e09d8904b9d2597ecd073c0852120b8e5a5a5f6ff9e7e6ade6266532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20c13aee69ad6354966c8dac9bbc9265f7775b28a738f2d68fdd1d790ebce1a8->leave($__internal_20c13aee69ad6354966c8dac9bbc9265f7775b28a738f2d68fdd1d790ebce1a8_prof);

        
        $__internal_3da3cb9e09d8904b9d2597ecd073c0852120b8e5a5a5f6ff9e7e6ade6266532d->leave($__internal_3da3cb9e09d8904b9d2597ecd073c0852120b8e5a5a5f6ff9e7e6ade6266532d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_055a382842749429e61df602ac60512ea488da1314d1bbcc42b91827a10e9093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055a382842749429e61df602ac60512ea488da1314d1bbcc42b91827a10e9093->enter($__internal_055a382842749429e61df602ac60512ea488da1314d1bbcc42b91827a10e9093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a0a7aabf673c742f8c4798b6ffa4225ba10042c5c18e04ad7e240a38970b494c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a7aabf673c742f8c4798b6ffa4225ba10042c5c18e04ad7e240a38970b494c->enter($__internal_a0a7aabf673c742f8c4798b6ffa4225ba10042c5c18e04ad7e240a38970b494c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a0a7aabf673c742f8c4798b6ffa4225ba10042c5c18e04ad7e240a38970b494c->leave($__internal_a0a7aabf673c742f8c4798b6ffa4225ba10042c5c18e04ad7e240a38970b494c_prof);

        
        $__internal_055a382842749429e61df602ac60512ea488da1314d1bbcc42b91827a10e9093->leave($__internal_055a382842749429e61df602ac60512ea488da1314d1bbcc42b91827a10e9093_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7475eac848c791581a4da82f178f410a53738a535dc7e60e3492bdac7977321d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7475eac848c791581a4da82f178f410a53738a535dc7e60e3492bdac7977321d->enter($__internal_7475eac848c791581a4da82f178f410a53738a535dc7e60e3492bdac7977321d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44c825d5da637f5a4e1fe2547a3c9313ecba35151d1ee4827d64d5f4dcf0a2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c825d5da637f5a4e1fe2547a3c9313ecba35151d1ee4827d64d5f4dcf0a2d7->enter($__internal_44c825d5da637f5a4e1fe2547a3c9313ecba35151d1ee4827d64d5f4dcf0a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_44c825d5da637f5a4e1fe2547a3c9313ecba35151d1ee4827d64d5f4dcf0a2d7->leave($__internal_44c825d5da637f5a4e1fe2547a3c9313ecba35151d1ee4827d64d5f4dcf0a2d7_prof);

        
        $__internal_7475eac848c791581a4da82f178f410a53738a535dc7e60e3492bdac7977321d->leave($__internal_7475eac848c791581a4da82f178f410a53738a535dc7e60e3492bdac7977321d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6cd96906e6c261e5924a414e6942550b8f97182d4bf6475112dd222cde75e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cd96906e6c261e5924a414e6942550b8f97182d4bf6475112dd222cde75e07->enter($__internal_d6cd96906e6c261e5924a414e6942550b8f97182d4bf6475112dd222cde75e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea077dd17accd411ab9b0e82d551fc4cbd0af2ec36daa5bb743f1b013bb7c252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea077dd17accd411ab9b0e82d551fc4cbd0af2ec36daa5bb743f1b013bb7c252->enter($__internal_ea077dd17accd411ab9b0e82d551fc4cbd0af2ec36daa5bb743f1b013bb7c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ea077dd17accd411ab9b0e82d551fc4cbd0af2ec36daa5bb743f1b013bb7c252->leave($__internal_ea077dd17accd411ab9b0e82d551fc4cbd0af2ec36daa5bb743f1b013bb7c252_prof);

        
        $__internal_d6cd96906e6c261e5924a414e6942550b8f97182d4bf6475112dd222cde75e07->leave($__internal_d6cd96906e6c261e5924a414e6942550b8f97182d4bf6475112dd222cde75e07_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
