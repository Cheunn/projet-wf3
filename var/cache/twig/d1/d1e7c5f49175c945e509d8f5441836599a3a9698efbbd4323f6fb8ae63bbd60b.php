<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8aa5997e60f42e7a3fe0589e550c2d75f5115d140ecad0516197be7e70711dd1 extends Twig_Template
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
        $__internal_77f026d96602c7d9b2dfa5e6a6142d507bc2e42cdb149604fe44da6d0bd15c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f026d96602c7d9b2dfa5e6a6142d507bc2e42cdb149604fe44da6d0bd15c46->enter($__internal_77f026d96602c7d9b2dfa5e6a6142d507bc2e42cdb149604fe44da6d0bd15c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f8ff8681653a668681f86e6b00154614b45ab188810215eb810a2a424dcfce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8ff8681653a668681f86e6b00154614b45ab188810215eb810a2a424dcfce8->enter($__internal_7f8ff8681653a668681f86e6b00154614b45ab188810215eb810a2a424dcfce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f026d96602c7d9b2dfa5e6a6142d507bc2e42cdb149604fe44da6d0bd15c46->leave($__internal_77f026d96602c7d9b2dfa5e6a6142d507bc2e42cdb149604fe44da6d0bd15c46_prof);

        
        $__internal_7f8ff8681653a668681f86e6b00154614b45ab188810215eb810a2a424dcfce8->leave($__internal_7f8ff8681653a668681f86e6b00154614b45ab188810215eb810a2a424dcfce8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24ec13cbc0beb2c91b5d39c9f6d38a7e401c9f016b6a28365132743c64fe4759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ec13cbc0beb2c91b5d39c9f6d38a7e401c9f016b6a28365132743c64fe4759->enter($__internal_24ec13cbc0beb2c91b5d39c9f6d38a7e401c9f016b6a28365132743c64fe4759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5aab9df774617db49ae7a32488bea4473ec2d409071257b5e89b1e29290abb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aab9df774617db49ae7a32488bea4473ec2d409071257b5e89b1e29290abb08->enter($__internal_5aab9df774617db49ae7a32488bea4473ec2d409071257b5e89b1e29290abb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5aab9df774617db49ae7a32488bea4473ec2d409071257b5e89b1e29290abb08->leave($__internal_5aab9df774617db49ae7a32488bea4473ec2d409071257b5e89b1e29290abb08_prof);

        
        $__internal_24ec13cbc0beb2c91b5d39c9f6d38a7e401c9f016b6a28365132743c64fe4759->leave($__internal_24ec13cbc0beb2c91b5d39c9f6d38a7e401c9f016b6a28365132743c64fe4759_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a99fb1498c9d3788442aec9b3a5549ed9fc73d7a7ba4af957a4be8dc2d182653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99fb1498c9d3788442aec9b3a5549ed9fc73d7a7ba4af957a4be8dc2d182653->enter($__internal_a99fb1498c9d3788442aec9b3a5549ed9fc73d7a7ba4af957a4be8dc2d182653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c677db1016d507b6c181b1589bb7f2e58c52dd145074c39e2dfd66aec82cc733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c677db1016d507b6c181b1589bb7f2e58c52dd145074c39e2dfd66aec82cc733->enter($__internal_c677db1016d507b6c181b1589bb7f2e58c52dd145074c39e2dfd66aec82cc733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c677db1016d507b6c181b1589bb7f2e58c52dd145074c39e2dfd66aec82cc733->leave($__internal_c677db1016d507b6c181b1589bb7f2e58c52dd145074c39e2dfd66aec82cc733_prof);

        
        $__internal_a99fb1498c9d3788442aec9b3a5549ed9fc73d7a7ba4af957a4be8dc2d182653->leave($__internal_a99fb1498c9d3788442aec9b3a5549ed9fc73d7a7ba4af957a4be8dc2d182653_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c55c88569e0343d5147e552faaf5ae35311a6583ad42d89265420299b22f018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c55c88569e0343d5147e552faaf5ae35311a6583ad42d89265420299b22f018->enter($__internal_2c55c88569e0343d5147e552faaf5ae35311a6583ad42d89265420299b22f018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c25466da71257addc424a95f35d339a527dac410b9352f1cefc7313c4827aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c25466da71257addc424a95f35d339a527dac410b9352f1cefc7313c4827aa1->enter($__internal_5c25466da71257addc424a95f35d339a527dac410b9352f1cefc7313c4827aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c25466da71257addc424a95f35d339a527dac410b9352f1cefc7313c4827aa1->leave($__internal_5c25466da71257addc424a95f35d339a527dac410b9352f1cefc7313c4827aa1_prof);

        
        $__internal_2c55c88569e0343d5147e552faaf5ae35311a6583ad42d89265420299b22f018->leave($__internal_2c55c88569e0343d5147e552faaf5ae35311a6583ad42d89265420299b22f018_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\dev\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
