<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e4254eb6f3d470f6ac67c79a35ee3305db0870870ba8c0f17186f5cde89e4fe extends Twig_Template
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
        $__internal_7dd96d18efe6fca5de8304a3dfb0db443fb5af03ee4eb0efa150d31469206d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd96d18efe6fca5de8304a3dfb0db443fb5af03ee4eb0efa150d31469206d3f->enter($__internal_7dd96d18efe6fca5de8304a3dfb0db443fb5af03ee4eb0efa150d31469206d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3e08601951e1d9859e32c340b1bf877595acce83a916ad11bc5edfeee44ece36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e08601951e1d9859e32c340b1bf877595acce83a916ad11bc5edfeee44ece36->enter($__internal_3e08601951e1d9859e32c340b1bf877595acce83a916ad11bc5edfeee44ece36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dd96d18efe6fca5de8304a3dfb0db443fb5af03ee4eb0efa150d31469206d3f->leave($__internal_7dd96d18efe6fca5de8304a3dfb0db443fb5af03ee4eb0efa150d31469206d3f_prof);

        
        $__internal_3e08601951e1d9859e32c340b1bf877595acce83a916ad11bc5edfeee44ece36->leave($__internal_3e08601951e1d9859e32c340b1bf877595acce83a916ad11bc5edfeee44ece36_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abde731c1ec495ef8f2025417d71a969196e36f2295ae03e681219be7f04f54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde731c1ec495ef8f2025417d71a969196e36f2295ae03e681219be7f04f54e->enter($__internal_abde731c1ec495ef8f2025417d71a969196e36f2295ae03e681219be7f04f54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9c222bc94d7d6c2bc41ef497c5c817ccf93e18277992386c1004210c78b9d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c222bc94d7d6c2bc41ef497c5c817ccf93e18277992386c1004210c78b9d7e->enter($__internal_f9c222bc94d7d6c2bc41ef497c5c817ccf93e18277992386c1004210c78b9d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9c222bc94d7d6c2bc41ef497c5c817ccf93e18277992386c1004210c78b9d7e->leave($__internal_f9c222bc94d7d6c2bc41ef497c5c817ccf93e18277992386c1004210c78b9d7e_prof);

        
        $__internal_abde731c1ec495ef8f2025417d71a969196e36f2295ae03e681219be7f04f54e->leave($__internal_abde731c1ec495ef8f2025417d71a969196e36f2295ae03e681219be7f04f54e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_495ca5d55bb5e3c87f06323db1e8a4b4b6c23acebda13f09714abba355141b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495ca5d55bb5e3c87f06323db1e8a4b4b6c23acebda13f09714abba355141b90->enter($__internal_495ca5d55bb5e3c87f06323db1e8a4b4b6c23acebda13f09714abba355141b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab85873945426f27d9b7b803b689b0453a6b606ecfbfc9c32825374c62f59f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab85873945426f27d9b7b803b689b0453a6b606ecfbfc9c32825374c62f59f4d->enter($__internal_ab85873945426f27d9b7b803b689b0453a6b606ecfbfc9c32825374c62f59f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab85873945426f27d9b7b803b689b0453a6b606ecfbfc9c32825374c62f59f4d->leave($__internal_ab85873945426f27d9b7b803b689b0453a6b606ecfbfc9c32825374c62f59f4d_prof);

        
        $__internal_495ca5d55bb5e3c87f06323db1e8a4b4b6c23acebda13f09714abba355141b90->leave($__internal_495ca5d55bb5e3c87f06323db1e8a4b4b6c23acebda13f09714abba355141b90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_074a324ce762ea3a1f4ee5fc79e333a6f5ae98a906c564d71f502dfeae34f85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074a324ce762ea3a1f4ee5fc79e333a6f5ae98a906c564d71f502dfeae34f85b->enter($__internal_074a324ce762ea3a1f4ee5fc79e333a6f5ae98a906c564d71f502dfeae34f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7375c6cf33270adefe8d6f76cb097d715adf1e95de7baaa24fda9c7b2fb29896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7375c6cf33270adefe8d6f76cb097d715adf1e95de7baaa24fda9c7b2fb29896->enter($__internal_7375c6cf33270adefe8d6f76cb097d715adf1e95de7baaa24fda9c7b2fb29896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7375c6cf33270adefe8d6f76cb097d715adf1e95de7baaa24fda9c7b2fb29896->leave($__internal_7375c6cf33270adefe8d6f76cb097d715adf1e95de7baaa24fda9c7b2fb29896_prof);

        
        $__internal_074a324ce762ea3a1f4ee5fc79e333a6f5ae98a906c564d71f502dfeae34f85b->leave($__internal_074a324ce762ea3a1f4ee5fc79e333a6f5ae98a906c564d71f502dfeae34f85b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
