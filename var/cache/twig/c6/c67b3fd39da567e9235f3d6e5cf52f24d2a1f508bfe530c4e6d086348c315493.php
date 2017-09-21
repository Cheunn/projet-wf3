<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_984824ab49876223771d9a05fca00154f9f0b6b15bc2df9bada697b59fcb9f9c extends Twig_Template
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
        $__internal_b36267fc7d3cd05eaf56b5c75feee6ffc233c75da2d13b4e5f2a5c98d285e6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36267fc7d3cd05eaf56b5c75feee6ffc233c75da2d13b4e5f2a5c98d285e6ac->enter($__internal_b36267fc7d3cd05eaf56b5c75feee6ffc233c75da2d13b4e5f2a5c98d285e6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8ff303d02c2d5ff3779a7d67c84d9619055a2d97d53cab6d5f8fa76316814280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff303d02c2d5ff3779a7d67c84d9619055a2d97d53cab6d5f8fa76316814280->enter($__internal_8ff303d02c2d5ff3779a7d67c84d9619055a2d97d53cab6d5f8fa76316814280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36267fc7d3cd05eaf56b5c75feee6ffc233c75da2d13b4e5f2a5c98d285e6ac->leave($__internal_b36267fc7d3cd05eaf56b5c75feee6ffc233c75da2d13b4e5f2a5c98d285e6ac_prof);

        
        $__internal_8ff303d02c2d5ff3779a7d67c84d9619055a2d97d53cab6d5f8fa76316814280->leave($__internal_8ff303d02c2d5ff3779a7d67c84d9619055a2d97d53cab6d5f8fa76316814280_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c59dcfbef6f1312fed8ce0ae0426ed42e9c9c732071bb4257d05e83fbddc646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c59dcfbef6f1312fed8ce0ae0426ed42e9c9c732071bb4257d05e83fbddc646->enter($__internal_6c59dcfbef6f1312fed8ce0ae0426ed42e9c9c732071bb4257d05e83fbddc646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_720154b483b6288f7dafa6049412d4bcb62cc76e27632d723b7e9b77a78da59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720154b483b6288f7dafa6049412d4bcb62cc76e27632d723b7e9b77a78da59d->enter($__internal_720154b483b6288f7dafa6049412d4bcb62cc76e27632d723b7e9b77a78da59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_720154b483b6288f7dafa6049412d4bcb62cc76e27632d723b7e9b77a78da59d->leave($__internal_720154b483b6288f7dafa6049412d4bcb62cc76e27632d723b7e9b77a78da59d_prof);

        
        $__internal_6c59dcfbef6f1312fed8ce0ae0426ed42e9c9c732071bb4257d05e83fbddc646->leave($__internal_6c59dcfbef6f1312fed8ce0ae0426ed42e9c9c732071bb4257d05e83fbddc646_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4990d65d297d678fa4e7a07cf14f0aa5a8dcafa86f125800e83a0ad8a09b9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4990d65d297d678fa4e7a07cf14f0aa5a8dcafa86f125800e83a0ad8a09b9de->enter($__internal_c4990d65d297d678fa4e7a07cf14f0aa5a8dcafa86f125800e83a0ad8a09b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0881954066b8346e637bec28ecdd03ac55cd68a38e28fe4222f836bcd44caebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0881954066b8346e637bec28ecdd03ac55cd68a38e28fe4222f836bcd44caebf->enter($__internal_0881954066b8346e637bec28ecdd03ac55cd68a38e28fe4222f836bcd44caebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0881954066b8346e637bec28ecdd03ac55cd68a38e28fe4222f836bcd44caebf->leave($__internal_0881954066b8346e637bec28ecdd03ac55cd68a38e28fe4222f836bcd44caebf_prof);

        
        $__internal_c4990d65d297d678fa4e7a07cf14f0aa5a8dcafa86f125800e83a0ad8a09b9de->leave($__internal_c4990d65d297d678fa4e7a07cf14f0aa5a8dcafa86f125800e83a0ad8a09b9de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b8612e9c504a6f0a49117b41d829770aaa15d8aded68542160370406569494e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8612e9c504a6f0a49117b41d829770aaa15d8aded68542160370406569494e->enter($__internal_2b8612e9c504a6f0a49117b41d829770aaa15d8aded68542160370406569494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66c0c1f7f7a8020c7a0c24b668dc393df01a9fefb7c4cd86a988bdd021681bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c0c1f7f7a8020c7a0c24b668dc393df01a9fefb7c4cd86a988bdd021681bab->enter($__internal_66c0c1f7f7a8020c7a0c24b668dc393df01a9fefb7c4cd86a988bdd021681bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66c0c1f7f7a8020c7a0c24b668dc393df01a9fefb7c4cd86a988bdd021681bab->leave($__internal_66c0c1f7f7a8020c7a0c24b668dc393df01a9fefb7c4cd86a988bdd021681bab_prof);

        
        $__internal_2b8612e9c504a6f0a49117b41d829770aaa15d8aded68542160370406569494e->leave($__internal_2b8612e9c504a6f0a49117b41d829770aaa15d8aded68542160370406569494e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
