<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ddea427139f2e94ab53835a9be2cb5af9fa279a3ca09ad502265d03452634023 extends Twig_Template
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
        $__internal_7e1c31a785a7e48acec615bd88a9fcd2d041ec47e41317e9e4f230e2c3a424a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1c31a785a7e48acec615bd88a9fcd2d041ec47e41317e9e4f230e2c3a424a8->enter($__internal_7e1c31a785a7e48acec615bd88a9fcd2d041ec47e41317e9e4f230e2c3a424a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8ca591285c50a2ce91fe9f7a342a1a90b3a1f2b948fd60880b42e5dda3d0a139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca591285c50a2ce91fe9f7a342a1a90b3a1f2b948fd60880b42e5dda3d0a139->enter($__internal_8ca591285c50a2ce91fe9f7a342a1a90b3a1f2b948fd60880b42e5dda3d0a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1c31a785a7e48acec615bd88a9fcd2d041ec47e41317e9e4f230e2c3a424a8->leave($__internal_7e1c31a785a7e48acec615bd88a9fcd2d041ec47e41317e9e4f230e2c3a424a8_prof);

        
        $__internal_8ca591285c50a2ce91fe9f7a342a1a90b3a1f2b948fd60880b42e5dda3d0a139->leave($__internal_8ca591285c50a2ce91fe9f7a342a1a90b3a1f2b948fd60880b42e5dda3d0a139_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e302a6c28295bf5aa2b8f06c6bfd61045d0e4615f01fb1b3e762d5291d54a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e302a6c28295bf5aa2b8f06c6bfd61045d0e4615f01fb1b3e762d5291d54a30->enter($__internal_5e302a6c28295bf5aa2b8f06c6bfd61045d0e4615f01fb1b3e762d5291d54a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_adc8577bc705699e8657d2c6125a1a876ffbbb7647f29358094a9d10cc6ebcca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc8577bc705699e8657d2c6125a1a876ffbbb7647f29358094a9d10cc6ebcca->enter($__internal_adc8577bc705699e8657d2c6125a1a876ffbbb7647f29358094a9d10cc6ebcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_adc8577bc705699e8657d2c6125a1a876ffbbb7647f29358094a9d10cc6ebcca->leave($__internal_adc8577bc705699e8657d2c6125a1a876ffbbb7647f29358094a9d10cc6ebcca_prof);

        
        $__internal_5e302a6c28295bf5aa2b8f06c6bfd61045d0e4615f01fb1b3e762d5291d54a30->leave($__internal_5e302a6c28295bf5aa2b8f06c6bfd61045d0e4615f01fb1b3e762d5291d54a30_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd5979d6b4b6bfe3dd6d0e2401a64f4572804ef76ed2b4ce467368e15b945857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5979d6b4b6bfe3dd6d0e2401a64f4572804ef76ed2b4ce467368e15b945857->enter($__internal_dd5979d6b4b6bfe3dd6d0e2401a64f4572804ef76ed2b4ce467368e15b945857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a34b11c7754321c6465e37adc4aa712e79045f4957747e9373dc8f6921663ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a34b11c7754321c6465e37adc4aa712e79045f4957747e9373dc8f6921663ba->enter($__internal_8a34b11c7754321c6465e37adc4aa712e79045f4957747e9373dc8f6921663ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8a34b11c7754321c6465e37adc4aa712e79045f4957747e9373dc8f6921663ba->leave($__internal_8a34b11c7754321c6465e37adc4aa712e79045f4957747e9373dc8f6921663ba_prof);

        
        $__internal_dd5979d6b4b6bfe3dd6d0e2401a64f4572804ef76ed2b4ce467368e15b945857->leave($__internal_dd5979d6b4b6bfe3dd6d0e2401a64f4572804ef76ed2b4ce467368e15b945857_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72992424351ebe2436616f5b24eac490c26fb9a451430937a994b33f7f0c9e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72992424351ebe2436616f5b24eac490c26fb9a451430937a994b33f7f0c9e3f->enter($__internal_72992424351ebe2436616f5b24eac490c26fb9a451430937a994b33f7f0c9e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34b4b55bb367b85d7e32d4d30bc0208cd167167b982cf0458bbe39cdd76af622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b4b55bb367b85d7e32d4d30bc0208cd167167b982cf0458bbe39cdd76af622->enter($__internal_34b4b55bb367b85d7e32d4d30bc0208cd167167b982cf0458bbe39cdd76af622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_34b4b55bb367b85d7e32d4d30bc0208cd167167b982cf0458bbe39cdd76af622->leave($__internal_34b4b55bb367b85d7e32d4d30bc0208cd167167b982cf0458bbe39cdd76af622_prof);

        
        $__internal_72992424351ebe2436616f5b24eac490c26fb9a451430937a994b33f7f0c9e3f->leave($__internal_72992424351ebe2436616f5b24eac490c26fb9a451430937a994b33f7f0c9e3f_prof);

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
