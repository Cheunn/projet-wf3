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
        $__internal_6761d8eb226969df7691ece409108fb4bd507e232c71ed00fdeb185c7a87f99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6761d8eb226969df7691ece409108fb4bd507e232c71ed00fdeb185c7a87f99a->enter($__internal_6761d8eb226969df7691ece409108fb4bd507e232c71ed00fdeb185c7a87f99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f29b46ade075c217d18ebceb9a4e35340d385dc40c60983705ae893197724ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29b46ade075c217d18ebceb9a4e35340d385dc40c60983705ae893197724ac8->enter($__internal_f29b46ade075c217d18ebceb9a4e35340d385dc40c60983705ae893197724ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6761d8eb226969df7691ece409108fb4bd507e232c71ed00fdeb185c7a87f99a->leave($__internal_6761d8eb226969df7691ece409108fb4bd507e232c71ed00fdeb185c7a87f99a_prof);

        
        $__internal_f29b46ade075c217d18ebceb9a4e35340d385dc40c60983705ae893197724ac8->leave($__internal_f29b46ade075c217d18ebceb9a4e35340d385dc40c60983705ae893197724ac8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_168e11516a304de9f6863eb3817f44fd39368b4fa61732fd043361a1da7c986f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168e11516a304de9f6863eb3817f44fd39368b4fa61732fd043361a1da7c986f->enter($__internal_168e11516a304de9f6863eb3817f44fd39368b4fa61732fd043361a1da7c986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dcb3ea9e04f8067a475207d528c800adf9ae1cf05e237f65ee470f2102e4da1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb3ea9e04f8067a475207d528c800adf9ae1cf05e237f65ee470f2102e4da1b->enter($__internal_dcb3ea9e04f8067a475207d528c800adf9ae1cf05e237f65ee470f2102e4da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dcb3ea9e04f8067a475207d528c800adf9ae1cf05e237f65ee470f2102e4da1b->leave($__internal_dcb3ea9e04f8067a475207d528c800adf9ae1cf05e237f65ee470f2102e4da1b_prof);

        
        $__internal_168e11516a304de9f6863eb3817f44fd39368b4fa61732fd043361a1da7c986f->leave($__internal_168e11516a304de9f6863eb3817f44fd39368b4fa61732fd043361a1da7c986f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82734b6f6a51d591b5670dff9a9e7fc6ab9072ad8084ccf7afe6d714f27cd74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82734b6f6a51d591b5670dff9a9e7fc6ab9072ad8084ccf7afe6d714f27cd74f->enter($__internal_82734b6f6a51d591b5670dff9a9e7fc6ab9072ad8084ccf7afe6d714f27cd74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2064d005e24ab4a94d88c7ecb6a67227a9e458c18503a86333aa2838dae2f24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2064d005e24ab4a94d88c7ecb6a67227a9e458c18503a86333aa2838dae2f24b->enter($__internal_2064d005e24ab4a94d88c7ecb6a67227a9e458c18503a86333aa2838dae2f24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2064d005e24ab4a94d88c7ecb6a67227a9e458c18503a86333aa2838dae2f24b->leave($__internal_2064d005e24ab4a94d88c7ecb6a67227a9e458c18503a86333aa2838dae2f24b_prof);

        
        $__internal_82734b6f6a51d591b5670dff9a9e7fc6ab9072ad8084ccf7afe6d714f27cd74f->leave($__internal_82734b6f6a51d591b5670dff9a9e7fc6ab9072ad8084ccf7afe6d714f27cd74f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3ff0e6194bc7447c47287ef18caf7ab212010be4c6b9ddf26b5f12daa48705c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ff0e6194bc7447c47287ef18caf7ab212010be4c6b9ddf26b5f12daa48705c->enter($__internal_e3ff0e6194bc7447c47287ef18caf7ab212010be4c6b9ddf26b5f12daa48705c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6560eda2f2f2823500bff3e9d2519f424219f49cf12e95093a3f94ad36d9175d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6560eda2f2f2823500bff3e9d2519f424219f49cf12e95093a3f94ad36d9175d->enter($__internal_6560eda2f2f2823500bff3e9d2519f424219f49cf12e95093a3f94ad36d9175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6560eda2f2f2823500bff3e9d2519f424219f49cf12e95093a3f94ad36d9175d->leave($__internal_6560eda2f2f2823500bff3e9d2519f424219f49cf12e95093a3f94ad36d9175d_prof);

        
        $__internal_e3ff0e6194bc7447c47287ef18caf7ab212010be4c6b9ddf26b5f12daa48705c->leave($__internal_e3ff0e6194bc7447c47287ef18caf7ab212010be4c6b9ddf26b5f12daa48705c_prof);

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
