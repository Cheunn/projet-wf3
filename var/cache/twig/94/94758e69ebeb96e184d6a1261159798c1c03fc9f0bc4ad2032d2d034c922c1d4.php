<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_022988cb4a7fdab49c2a83380bbb8ea6e10459e302db6bddb9ee24a747b46372 extends Twig_Template
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
        $__internal_622321df1d2a0e8aa3a8e50c2a8fac994c04afbacb8351482fb9387ddba8ab71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622321df1d2a0e8aa3a8e50c2a8fac994c04afbacb8351482fb9387ddba8ab71->enter($__internal_622321df1d2a0e8aa3a8e50c2a8fac994c04afbacb8351482fb9387ddba8ab71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_05344ed80ae0fae61e377236045aa1262f81c056c57a092dc5848df69bd50d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05344ed80ae0fae61e377236045aa1262f81c056c57a092dc5848df69bd50d2b->enter($__internal_05344ed80ae0fae61e377236045aa1262f81c056c57a092dc5848df69bd50d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622321df1d2a0e8aa3a8e50c2a8fac994c04afbacb8351482fb9387ddba8ab71->leave($__internal_622321df1d2a0e8aa3a8e50c2a8fac994c04afbacb8351482fb9387ddba8ab71_prof);

        
        $__internal_05344ed80ae0fae61e377236045aa1262f81c056c57a092dc5848df69bd50d2b->leave($__internal_05344ed80ae0fae61e377236045aa1262f81c056c57a092dc5848df69bd50d2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8d1ee6b6bdb91cfaceab9a80c7c3d99745cc78ed56a34ea6c41d5c0e83f5573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d1ee6b6bdb91cfaceab9a80c7c3d99745cc78ed56a34ea6c41d5c0e83f5573->enter($__internal_f8d1ee6b6bdb91cfaceab9a80c7c3d99745cc78ed56a34ea6c41d5c0e83f5573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_921b503ccc510a10c23f5a387e8e3a0c099d166f70b1e8b391010be0f11c0dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921b503ccc510a10c23f5a387e8e3a0c099d166f70b1e8b391010be0f11c0dd9->enter($__internal_921b503ccc510a10c23f5a387e8e3a0c099d166f70b1e8b391010be0f11c0dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_921b503ccc510a10c23f5a387e8e3a0c099d166f70b1e8b391010be0f11c0dd9->leave($__internal_921b503ccc510a10c23f5a387e8e3a0c099d166f70b1e8b391010be0f11c0dd9_prof);

        
        $__internal_f8d1ee6b6bdb91cfaceab9a80c7c3d99745cc78ed56a34ea6c41d5c0e83f5573->leave($__internal_f8d1ee6b6bdb91cfaceab9a80c7c3d99745cc78ed56a34ea6c41d5c0e83f5573_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63403fcf9609f0d595c975279a0573adac68d2b937dbeb91ae2f5e5153811814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63403fcf9609f0d595c975279a0573adac68d2b937dbeb91ae2f5e5153811814->enter($__internal_63403fcf9609f0d595c975279a0573adac68d2b937dbeb91ae2f5e5153811814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_667b013cad25b5abe90ca9406c9e7e08e1278e5be83fd4cd0cd85033ff0094e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667b013cad25b5abe90ca9406c9e7e08e1278e5be83fd4cd0cd85033ff0094e4->enter($__internal_667b013cad25b5abe90ca9406c9e7e08e1278e5be83fd4cd0cd85033ff0094e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_667b013cad25b5abe90ca9406c9e7e08e1278e5be83fd4cd0cd85033ff0094e4->leave($__internal_667b013cad25b5abe90ca9406c9e7e08e1278e5be83fd4cd0cd85033ff0094e4_prof);

        
        $__internal_63403fcf9609f0d595c975279a0573adac68d2b937dbeb91ae2f5e5153811814->leave($__internal_63403fcf9609f0d595c975279a0573adac68d2b937dbeb91ae2f5e5153811814_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9aee718d89285c597071d7d5adcc42bfc93859c6162c32b8d28d5ef2ac3002a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aee718d89285c597071d7d5adcc42bfc93859c6162c32b8d28d5ef2ac3002a5->enter($__internal_9aee718d89285c597071d7d5adcc42bfc93859c6162c32b8d28d5ef2ac3002a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95f69bacc29c120000ef9c390d94f8d3a4a4ff0e84659d923b1d6dc7da436c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f69bacc29c120000ef9c390d94f8d3a4a4ff0e84659d923b1d6dc7da436c77->enter($__internal_95f69bacc29c120000ef9c390d94f8d3a4a4ff0e84659d923b1d6dc7da436c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_95f69bacc29c120000ef9c390d94f8d3a4a4ff0e84659d923b1d6dc7da436c77->leave($__internal_95f69bacc29c120000ef9c390d94f8d3a4a4ff0e84659d923b1d6dc7da436c77_prof);

        
        $__internal_9aee718d89285c597071d7d5adcc42bfc93859c6162c32b8d28d5ef2ac3002a5->leave($__internal_9aee718d89285c597071d7d5adcc42bfc93859c6162c32b8d28d5ef2ac3002a5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
