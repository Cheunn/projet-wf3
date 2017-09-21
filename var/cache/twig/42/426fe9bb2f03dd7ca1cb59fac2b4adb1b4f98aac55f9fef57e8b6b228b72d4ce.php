<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_727aa495d36e4845853c052240afade8c4ba381ca8c6b3e81850e8338a0734ec extends Twig_Template
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
        $__internal_05c00b29e974b476ab7ba7e8768a1eddc7bf5cb3f2e39ea193afc20d4dca81c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c00b29e974b476ab7ba7e8768a1eddc7bf5cb3f2e39ea193afc20d4dca81c9->enter($__internal_05c00b29e974b476ab7ba7e8768a1eddc7bf5cb3f2e39ea193afc20d4dca81c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_98b2166af1d0f8391dbfd67d4f2e5cc670f9fecdaeca630eb12acea4a210b2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b2166af1d0f8391dbfd67d4f2e5cc670f9fecdaeca630eb12acea4a210b2f6->enter($__internal_98b2166af1d0f8391dbfd67d4f2e5cc670f9fecdaeca630eb12acea4a210b2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_05c00b29e974b476ab7ba7e8768a1eddc7bf5cb3f2e39ea193afc20d4dca81c9->leave($__internal_05c00b29e974b476ab7ba7e8768a1eddc7bf5cb3f2e39ea193afc20d4dca81c9_prof);

        
        $__internal_98b2166af1d0f8391dbfd67d4f2e5cc670f9fecdaeca630eb12acea4a210b2f6->leave($__internal_98b2166af1d0f8391dbfd67d4f2e5cc670f9fecdaeca630eb12acea4a210b2f6_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\projet_v2\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
