<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e73b429475d47f2889275115cdebc997917bedac0e84135c7258830e982e8688 extends Twig_Template
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
        $__internal_606c8a970a398dea072782c50ae3405c38e58bf200916ccb78175189825c8f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606c8a970a398dea072782c50ae3405c38e58bf200916ccb78175189825c8f42->enter($__internal_606c8a970a398dea072782c50ae3405c38e58bf200916ccb78175189825c8f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_679357bc47f59e44917e853630cc90e8b4796a187974fbae1ebbec3a8745098d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679357bc47f59e44917e853630cc90e8b4796a187974fbae1ebbec3a8745098d->enter($__internal_679357bc47f59e44917e853630cc90e8b4796a187974fbae1ebbec3a8745098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_606c8a970a398dea072782c50ae3405c38e58bf200916ccb78175189825c8f42->leave($__internal_606c8a970a398dea072782c50ae3405c38e58bf200916ccb78175189825c8f42_prof);

        
        $__internal_679357bc47f59e44917e853630cc90e8b4796a187974fbae1ebbec3a8745098d->leave($__internal_679357bc47f59e44917e853630cc90e8b4796a187974fbae1ebbec3a8745098d_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
