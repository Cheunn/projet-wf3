<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_590f126fadfb0b15d42fc7fccf719380b697f82c5fe02e1eca724bb47c40ccf5 extends Twig_Template
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
        $__internal_6e50e10ce5c77b05c4f11164b5b018df9daacd876c19d048282a5c1e85025105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e50e10ce5c77b05c4f11164b5b018df9daacd876c19d048282a5c1e85025105->enter($__internal_6e50e10ce5c77b05c4f11164b5b018df9daacd876c19d048282a5c1e85025105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2622e9ce2476c91178f6102e982c12d5bf022d231b778665fdc3e20c4e1f233d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2622e9ce2476c91178f6102e982c12d5bf022d231b778665fdc3e20c4e1f233d->enter($__internal_2622e9ce2476c91178f6102e982c12d5bf022d231b778665fdc3e20c4e1f233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e50e10ce5c77b05c4f11164b5b018df9daacd876c19d048282a5c1e85025105->leave($__internal_6e50e10ce5c77b05c4f11164b5b018df9daacd876c19d048282a5c1e85025105_prof);

        
        $__internal_2622e9ce2476c91178f6102e982c12d5bf022d231b778665fdc3e20c4e1f233d->leave($__internal_2622e9ce2476c91178f6102e982c12d5bf022d231b778665fdc3e20c4e1f233d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b1adfc2e6f88d9f2d95d755f49d96f23705b1d8115a0fb72bf5ccfc0a7a5870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1adfc2e6f88d9f2d95d755f49d96f23705b1d8115a0fb72bf5ccfc0a7a5870->enter($__internal_3b1adfc2e6f88d9f2d95d755f49d96f23705b1d8115a0fb72bf5ccfc0a7a5870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5071fd7c0a9f5bea627e70d4c45a132de2c64ec2a293be2413eeeee3a7d96f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5071fd7c0a9f5bea627e70d4c45a132de2c64ec2a293be2413eeeee3a7d96f1d->enter($__internal_5071fd7c0a9f5bea627e70d4c45a132de2c64ec2a293be2413eeeee3a7d96f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5071fd7c0a9f5bea627e70d4c45a132de2c64ec2a293be2413eeeee3a7d96f1d->leave($__internal_5071fd7c0a9f5bea627e70d4c45a132de2c64ec2a293be2413eeeee3a7d96f1d_prof);

        
        $__internal_3b1adfc2e6f88d9f2d95d755f49d96f23705b1d8115a0fb72bf5ccfc0a7a5870->leave($__internal_3b1adfc2e6f88d9f2d95d755f49d96f23705b1d8115a0fb72bf5ccfc0a7a5870_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f91f7cd3fc88c0931d999b18605535898d8e7ed429ca2667ba7db73dbae23a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91f7cd3fc88c0931d999b18605535898d8e7ed429ca2667ba7db73dbae23a83->enter($__internal_f91f7cd3fc88c0931d999b18605535898d8e7ed429ca2667ba7db73dbae23a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7eaf1636719925e95fb5596a815dfd4db27fffe2192bb84f8118c99ecc11a579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaf1636719925e95fb5596a815dfd4db27fffe2192bb84f8118c99ecc11a579->enter($__internal_7eaf1636719925e95fb5596a815dfd4db27fffe2192bb84f8118c99ecc11a579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7eaf1636719925e95fb5596a815dfd4db27fffe2192bb84f8118c99ecc11a579->leave($__internal_7eaf1636719925e95fb5596a815dfd4db27fffe2192bb84f8118c99ecc11a579_prof);

        
        $__internal_f91f7cd3fc88c0931d999b18605535898d8e7ed429ca2667ba7db73dbae23a83->leave($__internal_f91f7cd3fc88c0931d999b18605535898d8e7ed429ca2667ba7db73dbae23a83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fe158390183a7c65e64ee53939a28e5a824cb64c0b430841d52eda7668bc027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe158390183a7c65e64ee53939a28e5a824cb64c0b430841d52eda7668bc027->enter($__internal_3fe158390183a7c65e64ee53939a28e5a824cb64c0b430841d52eda7668bc027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_776ebf01f4e535be630e954d0e4128d9892f26f0981053c5dae62353526fdae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776ebf01f4e535be630e954d0e4128d9892f26f0981053c5dae62353526fdae5->enter($__internal_776ebf01f4e535be630e954d0e4128d9892f26f0981053c5dae62353526fdae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_776ebf01f4e535be630e954d0e4128d9892f26f0981053c5dae62353526fdae5->leave($__internal_776ebf01f4e535be630e954d0e4128d9892f26f0981053c5dae62353526fdae5_prof);

        
        $__internal_3fe158390183a7c65e64ee53939a28e5a824cb64c0b430841d52eda7668bc027->leave($__internal_3fe158390183a7c65e64ee53939a28e5a824cb64c0b430841d52eda7668bc027_prof);

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
