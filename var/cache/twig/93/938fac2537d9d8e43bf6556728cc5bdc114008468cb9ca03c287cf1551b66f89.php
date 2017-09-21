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
        $__internal_8092f8c366f6cd8f556a10f4ae6ff69e089911ebddb619b624eb84d4772760e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8092f8c366f6cd8f556a10f4ae6ff69e089911ebddb619b624eb84d4772760e8->enter($__internal_8092f8c366f6cd8f556a10f4ae6ff69e089911ebddb619b624eb84d4772760e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_864ebeb7f1e03b49468865bd6eaf596e32fab23cafb07baca6d4f420554deb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864ebeb7f1e03b49468865bd6eaf596e32fab23cafb07baca6d4f420554deb00->enter($__internal_864ebeb7f1e03b49468865bd6eaf596e32fab23cafb07baca6d4f420554deb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8092f8c366f6cd8f556a10f4ae6ff69e089911ebddb619b624eb84d4772760e8->leave($__internal_8092f8c366f6cd8f556a10f4ae6ff69e089911ebddb619b624eb84d4772760e8_prof);

        
        $__internal_864ebeb7f1e03b49468865bd6eaf596e32fab23cafb07baca6d4f420554deb00->leave($__internal_864ebeb7f1e03b49468865bd6eaf596e32fab23cafb07baca6d4f420554deb00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7f7d843a90e379701e85c10b41747b0e9714e97db58b5cf3037bdaafa84aa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f7d843a90e379701e85c10b41747b0e9714e97db58b5cf3037bdaafa84aa08->enter($__internal_c7f7d843a90e379701e85c10b41747b0e9714e97db58b5cf3037bdaafa84aa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_130186cb515c052148a22f832deda9d0d59af468e1870c14422e4a5e660d929d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130186cb515c052148a22f832deda9d0d59af468e1870c14422e4a5e660d929d->enter($__internal_130186cb515c052148a22f832deda9d0d59af468e1870c14422e4a5e660d929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_130186cb515c052148a22f832deda9d0d59af468e1870c14422e4a5e660d929d->leave($__internal_130186cb515c052148a22f832deda9d0d59af468e1870c14422e4a5e660d929d_prof);

        
        $__internal_c7f7d843a90e379701e85c10b41747b0e9714e97db58b5cf3037bdaafa84aa08->leave($__internal_c7f7d843a90e379701e85c10b41747b0e9714e97db58b5cf3037bdaafa84aa08_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b556aaf84cf0837f33a6071321c32ab301c9578a8add40fac79b070b21c398d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b556aaf84cf0837f33a6071321c32ab301c9578a8add40fac79b070b21c398d1->enter($__internal_b556aaf84cf0837f33a6071321c32ab301c9578a8add40fac79b070b21c398d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_963de816c9f9d3d3223d2d907a76a0daa478d2598d278e45edc2011b6aac2294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963de816c9f9d3d3223d2d907a76a0daa478d2598d278e45edc2011b6aac2294->enter($__internal_963de816c9f9d3d3223d2d907a76a0daa478d2598d278e45edc2011b6aac2294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_963de816c9f9d3d3223d2d907a76a0daa478d2598d278e45edc2011b6aac2294->leave($__internal_963de816c9f9d3d3223d2d907a76a0daa478d2598d278e45edc2011b6aac2294_prof);

        
        $__internal_b556aaf84cf0837f33a6071321c32ab301c9578a8add40fac79b070b21c398d1->leave($__internal_b556aaf84cf0837f33a6071321c32ab301c9578a8add40fac79b070b21c398d1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_991dc5767ca5afbd94b4ff00a0816cfac0c64dd706724685f679917ed7694633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991dc5767ca5afbd94b4ff00a0816cfac0c64dd706724685f679917ed7694633->enter($__internal_991dc5767ca5afbd94b4ff00a0816cfac0c64dd706724685f679917ed7694633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ee91e551ab9223c47d6b171f7614ad5d2787b85056226533aba3b8eb00d3795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee91e551ab9223c47d6b171f7614ad5d2787b85056226533aba3b8eb00d3795->enter($__internal_6ee91e551ab9223c47d6b171f7614ad5d2787b85056226533aba3b8eb00d3795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6ee91e551ab9223c47d6b171f7614ad5d2787b85056226533aba3b8eb00d3795->leave($__internal_6ee91e551ab9223c47d6b171f7614ad5d2787b85056226533aba3b8eb00d3795_prof);

        
        $__internal_991dc5767ca5afbd94b4ff00a0816cfac0c64dd706724685f679917ed7694633->leave($__internal_991dc5767ca5afbd94b4ff00a0816cfac0c64dd706724685f679917ed7694633_prof);

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
