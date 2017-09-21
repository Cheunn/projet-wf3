<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f993b83f49a15dd4796a9fe1938cb5c74ed0d6a6e5f2771d78c440e24c41d9f9 extends Twig_Template
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
        $__internal_ce3e6c05a0d8ae7c7720a4122b62bdd3d775af1235b829c15b09e28bc017e17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3e6c05a0d8ae7c7720a4122b62bdd3d775af1235b829c15b09e28bc017e17e->enter($__internal_ce3e6c05a0d8ae7c7720a4122b62bdd3d775af1235b829c15b09e28bc017e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3392579fb0f43e33ae15befd7d6fcbdc39cc209e343214dc3156ebd9018d6e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3392579fb0f43e33ae15befd7d6fcbdc39cc209e343214dc3156ebd9018d6e20->enter($__internal_3392579fb0f43e33ae15befd7d6fcbdc39cc209e343214dc3156ebd9018d6e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3e6c05a0d8ae7c7720a4122b62bdd3d775af1235b829c15b09e28bc017e17e->leave($__internal_ce3e6c05a0d8ae7c7720a4122b62bdd3d775af1235b829c15b09e28bc017e17e_prof);

        
        $__internal_3392579fb0f43e33ae15befd7d6fcbdc39cc209e343214dc3156ebd9018d6e20->leave($__internal_3392579fb0f43e33ae15befd7d6fcbdc39cc209e343214dc3156ebd9018d6e20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d05768cbc5e5eaf7b67aabf34ecf131e57375a7ff42e20f552435e51e78f0742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05768cbc5e5eaf7b67aabf34ecf131e57375a7ff42e20f552435e51e78f0742->enter($__internal_d05768cbc5e5eaf7b67aabf34ecf131e57375a7ff42e20f552435e51e78f0742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5353141e4ddb1159d14a500f9fbe15543acec2309e6e9dcfee189b4ac0f54c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5353141e4ddb1159d14a500f9fbe15543acec2309e6e9dcfee189b4ac0f54c7c->enter($__internal_5353141e4ddb1159d14a500f9fbe15543acec2309e6e9dcfee189b4ac0f54c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5353141e4ddb1159d14a500f9fbe15543acec2309e6e9dcfee189b4ac0f54c7c->leave($__internal_5353141e4ddb1159d14a500f9fbe15543acec2309e6e9dcfee189b4ac0f54c7c_prof);

        
        $__internal_d05768cbc5e5eaf7b67aabf34ecf131e57375a7ff42e20f552435e51e78f0742->leave($__internal_d05768cbc5e5eaf7b67aabf34ecf131e57375a7ff42e20f552435e51e78f0742_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_666bbb8f2d273ceb5b228b849a44670da8caa14b0591cb3422a21001aa18e49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666bbb8f2d273ceb5b228b849a44670da8caa14b0591cb3422a21001aa18e49c->enter($__internal_666bbb8f2d273ceb5b228b849a44670da8caa14b0591cb3422a21001aa18e49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f832c4a5fe512cbcae4856cb396a5796b09bf9abfdb5c871eaa7ab9e8be9115e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f832c4a5fe512cbcae4856cb396a5796b09bf9abfdb5c871eaa7ab9e8be9115e->enter($__internal_f832c4a5fe512cbcae4856cb396a5796b09bf9abfdb5c871eaa7ab9e8be9115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f832c4a5fe512cbcae4856cb396a5796b09bf9abfdb5c871eaa7ab9e8be9115e->leave($__internal_f832c4a5fe512cbcae4856cb396a5796b09bf9abfdb5c871eaa7ab9e8be9115e_prof);

        
        $__internal_666bbb8f2d273ceb5b228b849a44670da8caa14b0591cb3422a21001aa18e49c->leave($__internal_666bbb8f2d273ceb5b228b849a44670da8caa14b0591cb3422a21001aa18e49c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a66a8cae2b60b53fddd014089b69ff9a37bcbfd15a419ca21bb30b6372f8ebc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66a8cae2b60b53fddd014089b69ff9a37bcbfd15a419ca21bb30b6372f8ebc4->enter($__internal_a66a8cae2b60b53fddd014089b69ff9a37bcbfd15a419ca21bb30b6372f8ebc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_829cca5a6034fcda6e5024ee5b2d571db6e0ed97bf637c2acf9461f1ebea4e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829cca5a6034fcda6e5024ee5b2d571db6e0ed97bf637c2acf9461f1ebea4e74->enter($__internal_829cca5a6034fcda6e5024ee5b2d571db6e0ed97bf637c2acf9461f1ebea4e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_829cca5a6034fcda6e5024ee5b2d571db6e0ed97bf637c2acf9461f1ebea4e74->leave($__internal_829cca5a6034fcda6e5024ee5b2d571db6e0ed97bf637c2acf9461f1ebea4e74_prof);

        
        $__internal_a66a8cae2b60b53fddd014089b69ff9a37bcbfd15a419ca21bb30b6372f8ebc4->leave($__internal_a66a8cae2b60b53fddd014089b69ff9a37bcbfd15a419ca21bb30b6372f8ebc4_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
