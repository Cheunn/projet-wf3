<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1f8aae8e81fd3508f73acad0ea2a453794c77e991149df6bc0ff8f51bc3c3f3e extends Twig_Template
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
        $__internal_7699aeec84b910b7ef2955b4d90d94feac3d2114f5ee5b6d4b256e3337906235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7699aeec84b910b7ef2955b4d90d94feac3d2114f5ee5b6d4b256e3337906235->enter($__internal_7699aeec84b910b7ef2955b4d90d94feac3d2114f5ee5b6d4b256e3337906235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_538d3a3c794acb117797622f39cb008ce78980e3df0aad0c75d8487f6a345661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538d3a3c794acb117797622f39cb008ce78980e3df0aad0c75d8487f6a345661->enter($__internal_538d3a3c794acb117797622f39cb008ce78980e3df0aad0c75d8487f6a345661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_7699aeec84b910b7ef2955b4d90d94feac3d2114f5ee5b6d4b256e3337906235->leave($__internal_7699aeec84b910b7ef2955b4d90d94feac3d2114f5ee5b6d4b256e3337906235_prof);

        
        $__internal_538d3a3c794acb117797622f39cb008ce78980e3df0aad0c75d8487f6a345661->leave($__internal_538d3a3c794acb117797622f39cb008ce78980e3df0aad0c75d8487f6a345661_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
