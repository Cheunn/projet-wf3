<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d63d55e826c112c7390eb5309bab3f9f51c47bc350eeb604ae1502960828bfaf extends Twig_Template
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
        $__internal_1264ff5706206410cf79f988505a1d439cdb9d833493ada2d8e84940353d39aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1264ff5706206410cf79f988505a1d439cdb9d833493ada2d8e84940353d39aa->enter($__internal_1264ff5706206410cf79f988505a1d439cdb9d833493ada2d8e84940353d39aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea866a16070a598b4da804ad81ceef1e82576a8231eb1754855cbdce9f5a9227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea866a16070a598b4da804ad81ceef1e82576a8231eb1754855cbdce9f5a9227->enter($__internal_ea866a16070a598b4da804ad81ceef1e82576a8231eb1754855cbdce9f5a9227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1264ff5706206410cf79f988505a1d439cdb9d833493ada2d8e84940353d39aa->leave($__internal_1264ff5706206410cf79f988505a1d439cdb9d833493ada2d8e84940353d39aa_prof);

        
        $__internal_ea866a16070a598b4da804ad81ceef1e82576a8231eb1754855cbdce9f5a9227->leave($__internal_ea866a16070a598b4da804ad81ceef1e82576a8231eb1754855cbdce9f5a9227_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_acf0b89fae3baac3bfc6e3c515a1dddd195a04f41e5623496282ea13e37a0080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf0b89fae3baac3bfc6e3c515a1dddd195a04f41e5623496282ea13e37a0080->enter($__internal_acf0b89fae3baac3bfc6e3c515a1dddd195a04f41e5623496282ea13e37a0080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b54192f815e42e268e55020c5927ab05037c5906cd56f5b6179c2543d3174c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54192f815e42e268e55020c5927ab05037c5906cd56f5b6179c2543d3174c65->enter($__internal_b54192f815e42e268e55020c5927ab05037c5906cd56f5b6179c2543d3174c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b54192f815e42e268e55020c5927ab05037c5906cd56f5b6179c2543d3174c65->leave($__internal_b54192f815e42e268e55020c5927ab05037c5906cd56f5b6179c2543d3174c65_prof);

        
        $__internal_acf0b89fae3baac3bfc6e3c515a1dddd195a04f41e5623496282ea13e37a0080->leave($__internal_acf0b89fae3baac3bfc6e3c515a1dddd195a04f41e5623496282ea13e37a0080_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bf0c73f192ac09edd581e5a9ed4c312308260c1fdae8e18de8fcb7b43750b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf0c73f192ac09edd581e5a9ed4c312308260c1fdae8e18de8fcb7b43750b1e->enter($__internal_2bf0c73f192ac09edd581e5a9ed4c312308260c1fdae8e18de8fcb7b43750b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b499354a3184cbb94d03cd80a12acd9c1145304ac9efc629391e9cb9edfb77ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b499354a3184cbb94d03cd80a12acd9c1145304ac9efc629391e9cb9edfb77ce->enter($__internal_b499354a3184cbb94d03cd80a12acd9c1145304ac9efc629391e9cb9edfb77ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b499354a3184cbb94d03cd80a12acd9c1145304ac9efc629391e9cb9edfb77ce->leave($__internal_b499354a3184cbb94d03cd80a12acd9c1145304ac9efc629391e9cb9edfb77ce_prof);

        
        $__internal_2bf0c73f192ac09edd581e5a9ed4c312308260c1fdae8e18de8fcb7b43750b1e->leave($__internal_2bf0c73f192ac09edd581e5a9ed4c312308260c1fdae8e18de8fcb7b43750b1e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd6152fa96fdcbd258d47db560f0aba8a9d6b51717d72b333d461aab6a245833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6152fa96fdcbd258d47db560f0aba8a9d6b51717d72b333d461aab6a245833->enter($__internal_dd6152fa96fdcbd258d47db560f0aba8a9d6b51717d72b333d461aab6a245833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa1368f90b29e01648f15f9c80c9921cc05603d6689b0854e972b5678362e531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1368f90b29e01648f15f9c80c9921cc05603d6689b0854e972b5678362e531->enter($__internal_aa1368f90b29e01648f15f9c80c9921cc05603d6689b0854e972b5678362e531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_aa1368f90b29e01648f15f9c80c9921cc05603d6689b0854e972b5678362e531->leave($__internal_aa1368f90b29e01648f15f9c80c9921cc05603d6689b0854e972b5678362e531_prof);

        
        $__internal_dd6152fa96fdcbd258d47db560f0aba8a9d6b51717d72b333d461aab6a245833->leave($__internal_dd6152fa96fdcbd258d47db560f0aba8a9d6b51717d72b333d461aab6a245833_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
