<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_4a39ba62a4911b105dfac5a02d19aaa2239574e7f8895fb8dbcc0d3d3e0e9ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527fefd24263094469e0ed212c84df4fdb35c72c2eee0e9a2e4da1ed18b7ba6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527fefd24263094469e0ed212c84df4fdb35c72c2eee0e9a2e4da1ed18b7ba6e->enter($__internal_527fefd24263094469e0ed212c84df4fdb35c72c2eee0e9a2e4da1ed18b7ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e31089673d991d497355af7a4d8746fdcab00932bdb3054f545bd559674cd1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31089673d991d497355af7a4d8746fdcab00932bdb3054f545bd559674cd1fa->enter($__internal_e31089673d991d497355af7a4d8746fdcab00932bdb3054f545bd559674cd1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_527fefd24263094469e0ed212c84df4fdb35c72c2eee0e9a2e4da1ed18b7ba6e->leave($__internal_527fefd24263094469e0ed212c84df4fdb35c72c2eee0e9a2e4da1ed18b7ba6e_prof);

        
        $__internal_e31089673d991d497355af7a4d8746fdcab00932bdb3054f545bd559674cd1fa->leave($__internal_e31089673d991d497355af7a4d8746fdcab00932bdb3054f545bd559674cd1fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
