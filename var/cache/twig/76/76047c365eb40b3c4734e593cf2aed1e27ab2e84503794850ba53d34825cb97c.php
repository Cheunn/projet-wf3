<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cabb059e2d74099dc6ffc22f8a70e3d166c6d01d8475259786e2d9154a3fb4b6 extends Twig_Template
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
        $__internal_6f28e8eb0a719bae8dc653862c9b8d2075034b2c99ed14a1126b73c3f5c05df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f28e8eb0a719bae8dc653862c9b8d2075034b2c99ed14a1126b73c3f5c05df9->enter($__internal_6f28e8eb0a719bae8dc653862c9b8d2075034b2c99ed14a1126b73c3f5c05df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aa6f8301c1f41b296c4ddcbbeafa12dd4b2d8c194cf5feebf671ab9c9d33857c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6f8301c1f41b296c4ddcbbeafa12dd4b2d8c194cf5feebf671ab9c9d33857c->enter($__internal_aa6f8301c1f41b296c4ddcbbeafa12dd4b2d8c194cf5feebf671ab9c9d33857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f28e8eb0a719bae8dc653862c9b8d2075034b2c99ed14a1126b73c3f5c05df9->leave($__internal_6f28e8eb0a719bae8dc653862c9b8d2075034b2c99ed14a1126b73c3f5c05df9_prof);

        
        $__internal_aa6f8301c1f41b296c4ddcbbeafa12dd4b2d8c194cf5feebf671ab9c9d33857c->leave($__internal_aa6f8301c1f41b296c4ddcbbeafa12dd4b2d8c194cf5feebf671ab9c9d33857c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e80205132656937cbe4c8d807768c883661b3da683465badba3d8ff57fd89c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80205132656937cbe4c8d807768c883661b3da683465badba3d8ff57fd89c02->enter($__internal_e80205132656937cbe4c8d807768c883661b3da683465badba3d8ff57fd89c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4a352f44f08b46206110ab8004d829cb26db14cca4363edbd0a121ae6d8ca69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a352f44f08b46206110ab8004d829cb26db14cca4363edbd0a121ae6d8ca69->enter($__internal_d4a352f44f08b46206110ab8004d829cb26db14cca4363edbd0a121ae6d8ca69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4a352f44f08b46206110ab8004d829cb26db14cca4363edbd0a121ae6d8ca69->leave($__internal_d4a352f44f08b46206110ab8004d829cb26db14cca4363edbd0a121ae6d8ca69_prof);

        
        $__internal_e80205132656937cbe4c8d807768c883661b3da683465badba3d8ff57fd89c02->leave($__internal_e80205132656937cbe4c8d807768c883661b3da683465badba3d8ff57fd89c02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5dea29006cbcfaf340107db7b5df41846d04dea08ddece15ab028122bbef9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dea29006cbcfaf340107db7b5df41846d04dea08ddece15ab028122bbef9d0->enter($__internal_e5dea29006cbcfaf340107db7b5df41846d04dea08ddece15ab028122bbef9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69191cb8558d9cb28de99adbcaeeeabcc2ab7850ede2322f09c3935b0709badd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69191cb8558d9cb28de99adbcaeeeabcc2ab7850ede2322f09c3935b0709badd->enter($__internal_69191cb8558d9cb28de99adbcaeeeabcc2ab7850ede2322f09c3935b0709badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69191cb8558d9cb28de99adbcaeeeabcc2ab7850ede2322f09c3935b0709badd->leave($__internal_69191cb8558d9cb28de99adbcaeeeabcc2ab7850ede2322f09c3935b0709badd_prof);

        
        $__internal_e5dea29006cbcfaf340107db7b5df41846d04dea08ddece15ab028122bbef9d0->leave($__internal_e5dea29006cbcfaf340107db7b5df41846d04dea08ddece15ab028122bbef9d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2608f9c4bc33bc39174457b725199b0ad21ecb3043a9d1dc66e5ad5752d26a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2608f9c4bc33bc39174457b725199b0ad21ecb3043a9d1dc66e5ad5752d26a6e->enter($__internal_2608f9c4bc33bc39174457b725199b0ad21ecb3043a9d1dc66e5ad5752d26a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06666ee2475ea717bfc8552a1164e5843f5ef876a831c29f95b9fedbbebe5dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06666ee2475ea717bfc8552a1164e5843f5ef876a831c29f95b9fedbbebe5dab->enter($__internal_06666ee2475ea717bfc8552a1164e5843f5ef876a831c29f95b9fedbbebe5dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06666ee2475ea717bfc8552a1164e5843f5ef876a831c29f95b9fedbbebe5dab->leave($__internal_06666ee2475ea717bfc8552a1164e5843f5ef876a831c29f95b9fedbbebe5dab_prof);

        
        $__internal_2608f9c4bc33bc39174457b725199b0ad21ecb3043a9d1dc66e5ad5752d26a6e->leave($__internal_2608f9c4bc33bc39174457b725199b0ad21ecb3043a9d1dc66e5ad5752d26a6e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
