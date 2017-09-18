<?php

/* annonce/edit.html.twig */
class __TwigTemplate_ee19d871053f8dfb25392c1a86f263e13dbbdae2d120ecd7351322303fe78e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "annonce/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3df0fd9b9d0d28e3a38129394432cfdd3064f25f23f30d3363d69dc301895797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df0fd9b9d0d28e3a38129394432cfdd3064f25f23f30d3363d69dc301895797->enter($__internal_3df0fd9b9d0d28e3a38129394432cfdd3064f25f23f30d3363d69dc301895797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $__internal_4beb23421d99af41ea14a9de010f2e63370c36ff52708a7378abcb5028972d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4beb23421d99af41ea14a9de010f2e63370c36ff52708a7378abcb5028972d6e->enter($__internal_4beb23421d99af41ea14a9de010f2e63370c36ff52708a7378abcb5028972d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3df0fd9b9d0d28e3a38129394432cfdd3064f25f23f30d3363d69dc301895797->leave($__internal_3df0fd9b9d0d28e3a38129394432cfdd3064f25f23f30d3363d69dc301895797_prof);

        
        $__internal_4beb23421d99af41ea14a9de010f2e63370c36ff52708a7378abcb5028972d6e->leave($__internal_4beb23421d99af41ea14a9de010f2e63370c36ff52708a7378abcb5028972d6e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b95b624e875eaddfb5791b4d9592bace250c6cc47d331b03ccfe952b2f51e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b95b624e875eaddfb5791b4d9592bace250c6cc47d331b03ccfe952b2f51e88->enter($__internal_8b95b624e875eaddfb5791b4d9592bace250c6cc47d331b03ccfe952b2f51e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_116bdd3a80f6d10e4c18e5e56f65b0a0a45e46e0669cece9634bdaac7c8a1905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116bdd3a80f6d10e4c18e5e56f65b0a0a45e46e0669cece9634bdaac7c8a1905->enter($__internal_116bdd3a80f6d10e4c18e5e56f65b0a0a45e46e0669cece9634bdaac7c8a1905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
                    <div class=\"comment-form\">
                        <h4>Post A Reply</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">
                                      <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Full Name:\">
                                    </div>
                                 </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" placeholder=\"Enter Address:\">

                          </div>

                                    </div>

                                    </div>

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number:\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

                          <button type=\"submit\" class=\"btn btn-default\">Post Reply</button>

                        </form>

                    </div>
                    ";
        
        $__internal_116bdd3a80f6d10e4c18e5e56f65b0a0a45e46e0669cece9634bdaac7c8a1905->leave($__internal_116bdd3a80f6d10e4c18e5e56f65b0a0a45e46e0669cece9634bdaac7c8a1905_prof);

        
        $__internal_8b95b624e875eaddfb5791b4d9592bace250c6cc47d331b03ccfe952b2f51e88->leave($__internal_8b95b624e875eaddfb5791b4d9592bace250c6cc47d331b03ccfe952b2f51e88_prof);

    }

    public function getTemplateName()
    {
        return "annonce/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    
                    <div class=\"comment-form\">
                        <h4>Post A Reply</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">
                                      <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Full Name:\">
                                    </div>
                                 </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" placeholder=\"Enter Address:\">

                          </div>

                                    </div>

                                    </div>

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number:\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

                          <button type=\"submit\" class=\"btn btn-default\">Post Reply</button>

                        </form>

                    </div>
                    {% endblock %}", "annonce/edit.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\annonce\\edit.html.twig");
    }
}
