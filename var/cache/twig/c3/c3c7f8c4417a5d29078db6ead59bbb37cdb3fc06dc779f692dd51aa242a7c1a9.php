<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eeb508065ec1fead3d121d29694ad99fa4efd64d69c7345173ac7edd56a70c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efecd40c756399fec992c4b5649a62e72dac6063b2c5847de858f08b95da9a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efecd40c756399fec992c4b5649a62e72dac6063b2c5847de858f08b95da9a81->enter($__internal_efecd40c756399fec992c4b5649a62e72dac6063b2c5847de858f08b95da9a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f93f8054b09730d9946a6b6aa02b973079d5f073dbfda25cfe2fff0be1bdbd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93f8054b09730d9946a6b6aa02b973079d5f073dbfda25cfe2fff0be1bdbd35->enter($__internal_f93f8054b09730d9946a6b6aa02b973079d5f073dbfda25cfe2fff0be1bdbd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efecd40c756399fec992c4b5649a62e72dac6063b2c5847de858f08b95da9a81->leave($__internal_efecd40c756399fec992c4b5649a62e72dac6063b2c5847de858f08b95da9a81_prof);

        
        $__internal_f93f8054b09730d9946a6b6aa02b973079d5f073dbfda25cfe2fff0be1bdbd35->leave($__internal_f93f8054b09730d9946a6b6aa02b973079d5f073dbfda25cfe2fff0be1bdbd35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_060234908870b3b272df4a51dc3738c9d73aca676ce41dcd8ba033084a4b2f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060234908870b3b272df4a51dc3738c9d73aca676ce41dcd8ba033084a4b2f9c->enter($__internal_060234908870b3b272df4a51dc3738c9d73aca676ce41dcd8ba033084a4b2f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_86b887161b21c34f89c942d5705e1b301f37148f6e54561c054a1b0de34acb07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b887161b21c34f89c942d5705e1b301f37148f6e54561c054a1b0de34acb07->enter($__internal_86b887161b21c34f89c942d5705e1b301f37148f6e54561c054a1b0de34acb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_86b887161b21c34f89c942d5705e1b301f37148f6e54561c054a1b0de34acb07->leave($__internal_86b887161b21c34f89c942d5705e1b301f37148f6e54561c054a1b0de34acb07_prof);

        
        $__internal_060234908870b3b272df4a51dc3738c9d73aca676ce41dcd8ba033084a4b2f9c->leave($__internal_060234908870b3b272df4a51dc3738c9d73aca676ce41dcd8ba033084a4b2f9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
