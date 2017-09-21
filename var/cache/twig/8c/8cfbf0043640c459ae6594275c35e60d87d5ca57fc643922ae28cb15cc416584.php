<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_690f4eec88cd0fb551d979e2045296ed6b8c1249ac3d512c4cb33001a7b25545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f027327e8130ee950c028ba39ee699484f67c3a930b3c3c476637c5f5f41b386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f027327e8130ee950c028ba39ee699484f67c3a930b3c3c476637c5f5f41b386->enter($__internal_f027327e8130ee950c028ba39ee699484f67c3a930b3c3c476637c5f5f41b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_711b095c3a79d2f398d74cb0208d6512adbb3ab414c4b4224e060b7e0ea52aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711b095c3a79d2f398d74cb0208d6512adbb3ab414c4b4224e060b7e0ea52aa2->enter($__internal_711b095c3a79d2f398d74cb0208d6512adbb3ab414c4b4224e060b7e0ea52aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f027327e8130ee950c028ba39ee699484f67c3a930b3c3c476637c5f5f41b386->leave($__internal_f027327e8130ee950c028ba39ee699484f67c3a930b3c3c476637c5f5f41b386_prof);

        
        $__internal_711b095c3a79d2f398d74cb0208d6512adbb3ab414c4b4224e060b7e0ea52aa2->leave($__internal_711b095c3a79d2f398d74cb0208d6512adbb3ab414c4b4224e060b7e0ea52aa2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5fc07ce5ff348f24c24c524088bd3fd714632dff710e44320eecd518ff5e473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fc07ce5ff348f24c24c524088bd3fd714632dff710e44320eecd518ff5e473->enter($__internal_e5fc07ce5ff348f24c24c524088bd3fd714632dff710e44320eecd518ff5e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5fec68490d81f4b8acdee487e2c707a7580c878f51c738e9a6218deb24390516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fec68490d81f4b8acdee487e2c707a7580c878f51c738e9a6218deb24390516->enter($__internal_5fec68490d81f4b8acdee487e2c707a7580c878f51c738e9a6218deb24390516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fec68490d81f4b8acdee487e2c707a7580c878f51c738e9a6218deb24390516->leave($__internal_5fec68490d81f4b8acdee487e2c707a7580c878f51c738e9a6218deb24390516_prof);

        
        $__internal_e5fc07ce5ff348f24c24c524088bd3fd714632dff710e44320eecd518ff5e473->leave($__internal_e5fc07ce5ff348f24c24c524088bd3fd714632dff710e44320eecd518ff5e473_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_762460433da5e3cf71d411c7b9854f209c2b1bb19c038e5aa7e6f0354d76ebaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762460433da5e3cf71d411c7b9854f209c2b1bb19c038e5aa7e6f0354d76ebaa->enter($__internal_762460433da5e3cf71d411c7b9854f209c2b1bb19c038e5aa7e6f0354d76ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57e381ce4cfe3663ba23a1e243c17a571b3022989d3c4a65fa5673093be4d15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e381ce4cfe3663ba23a1e243c17a571b3022989d3c4a65fa5673093be4d15c->enter($__internal_57e381ce4cfe3663ba23a1e243c17a571b3022989d3c4a65fa5673093be4d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57e381ce4cfe3663ba23a1e243c17a571b3022989d3c4a65fa5673093be4d15c->leave($__internal_57e381ce4cfe3663ba23a1e243c17a571b3022989d3c4a65fa5673093be4d15c_prof);

        
        $__internal_762460433da5e3cf71d411c7b9854f209c2b1bb19c038e5aa7e6f0354d76ebaa->leave($__internal_762460433da5e3cf71d411c7b9854f209c2b1bb19c038e5aa7e6f0354d76ebaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db2d561715ba10c706b9a8e66a527a05a7dc61f33802aa3afdf09913c67e8c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2d561715ba10c706b9a8e66a527a05a7dc61f33802aa3afdf09913c67e8c37->enter($__internal_db2d561715ba10c706b9a8e66a527a05a7dc61f33802aa3afdf09913c67e8c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_294fa02a771c5cbd70690c64f0269cd0b18d4c01ffa623f3c1152142f1ff7a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294fa02a771c5cbd70690c64f0269cd0b18d4c01ffa623f3c1152142f1ff7a83->enter($__internal_294fa02a771c5cbd70690c64f0269cd0b18d4c01ffa623f3c1152142f1ff7a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_294fa02a771c5cbd70690c64f0269cd0b18d4c01ffa623f3c1152142f1ff7a83->leave($__internal_294fa02a771c5cbd70690c64f0269cd0b18d4c01ffa623f3c1152142f1ff7a83_prof);

        
        $__internal_db2d561715ba10c706b9a8e66a527a05a7dc61f33802aa3afdf09913c67e8c37->leave($__internal_db2d561715ba10c706b9a8e66a527a05a7dc61f33802aa3afdf09913c67e8c37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_v3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
