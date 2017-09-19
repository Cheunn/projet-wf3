<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_51192590fa504e9b679cac0b7aa7b27a071a40b4364eb476da751d764df19fe1 extends Twig_Template
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
        $__internal_b8d896eca96b51af947daa41894d6c3a4aaf3d01b922a793d0c44d8df197d8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d896eca96b51af947daa41894d6c3a4aaf3d01b922a793d0c44d8df197d8eb->enter($__internal_b8d896eca96b51af947daa41894d6c3a4aaf3d01b922a793d0c44d8df197d8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a611d58026ea760cebc71580e4302acfd89fa5fd3bf4d205a49f48eb512a3315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a611d58026ea760cebc71580e4302acfd89fa5fd3bf4d205a49f48eb512a3315->enter($__internal_a611d58026ea760cebc71580e4302acfd89fa5fd3bf4d205a49f48eb512a3315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d896eca96b51af947daa41894d6c3a4aaf3d01b922a793d0c44d8df197d8eb->leave($__internal_b8d896eca96b51af947daa41894d6c3a4aaf3d01b922a793d0c44d8df197d8eb_prof);

        
        $__internal_a611d58026ea760cebc71580e4302acfd89fa5fd3bf4d205a49f48eb512a3315->leave($__internal_a611d58026ea760cebc71580e4302acfd89fa5fd3bf4d205a49f48eb512a3315_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55256861369a2533278359faadf6f561c0ba8c57ae5331917cdf4ce22b95afc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55256861369a2533278359faadf6f561c0ba8c57ae5331917cdf4ce22b95afc0->enter($__internal_55256861369a2533278359faadf6f561c0ba8c57ae5331917cdf4ce22b95afc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_095aa5cc8ba69084820dd7c96d973b7951b43de0d17a4645fc89c185c36eab86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095aa5cc8ba69084820dd7c96d973b7951b43de0d17a4645fc89c185c36eab86->enter($__internal_095aa5cc8ba69084820dd7c96d973b7951b43de0d17a4645fc89c185c36eab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_095aa5cc8ba69084820dd7c96d973b7951b43de0d17a4645fc89c185c36eab86->leave($__internal_095aa5cc8ba69084820dd7c96d973b7951b43de0d17a4645fc89c185c36eab86_prof);

        
        $__internal_55256861369a2533278359faadf6f561c0ba8c57ae5331917cdf4ce22b95afc0->leave($__internal_55256861369a2533278359faadf6f561c0ba8c57ae5331917cdf4ce22b95afc0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4507d2778bd76d1e4ef67dcf1e34ded86e588209d1f1d1536fed11bd9f874c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4507d2778bd76d1e4ef67dcf1e34ded86e588209d1f1d1536fed11bd9f874c89->enter($__internal_4507d2778bd76d1e4ef67dcf1e34ded86e588209d1f1d1536fed11bd9f874c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49e90c893ab270bd4e6e3e5e85a267de41fa05a1c072235f58e2f74550ac355a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e90c893ab270bd4e6e3e5e85a267de41fa05a1c072235f58e2f74550ac355a->enter($__internal_49e90c893ab270bd4e6e3e5e85a267de41fa05a1c072235f58e2f74550ac355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49e90c893ab270bd4e6e3e5e85a267de41fa05a1c072235f58e2f74550ac355a->leave($__internal_49e90c893ab270bd4e6e3e5e85a267de41fa05a1c072235f58e2f74550ac355a_prof);

        
        $__internal_4507d2778bd76d1e4ef67dcf1e34ded86e588209d1f1d1536fed11bd9f874c89->leave($__internal_4507d2778bd76d1e4ef67dcf1e34ded86e588209d1f1d1536fed11bd9f874c89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a540944eeb8fa643b9fd702b82c91888b03b5bff66314b26c577976bbbf8f088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a540944eeb8fa643b9fd702b82c91888b03b5bff66314b26c577976bbbf8f088->enter($__internal_a540944eeb8fa643b9fd702b82c91888b03b5bff66314b26c577976bbbf8f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e9197fc99f94aa6ce51dd3772231a29e39010c7660c29e20d1080f6c6a03651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9197fc99f94aa6ce51dd3772231a29e39010c7660c29e20d1080f6c6a03651->enter($__internal_2e9197fc99f94aa6ce51dd3772231a29e39010c7660c29e20d1080f6c6a03651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e9197fc99f94aa6ce51dd3772231a29e39010c7660c29e20d1080f6c6a03651->leave($__internal_2e9197fc99f94aa6ce51dd3772231a29e39010c7660c29e20d1080f6c6a03651_prof);

        
        $__internal_a540944eeb8fa643b9fd702b82c91888b03b5bff66314b26c577976bbbf8f088->leave($__internal_a540944eeb8fa643b9fd702b82c91888b03b5bff66314b26c577976bbbf8f088_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projet_v2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
