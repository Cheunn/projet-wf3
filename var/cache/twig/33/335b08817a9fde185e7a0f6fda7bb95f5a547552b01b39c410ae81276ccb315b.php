<?php

/* user/login.html.twig */
class __TwigTemplate_74ad9e45bb7d1b107254735530613034c8c190abd6a37a6b65e130100a0647ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "user/login.html.twig", 2);
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
        $__internal_15dd81d905dd813056773d9c64ab381ed893e35f09c566602ac511f4127d9f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dd81d905dd813056773d9c64ab381ed893e35f09c566602ac511f4127d9f56->enter($__internal_15dd81d905dd813056773d9c64ab381ed893e35f09c566602ac511f4127d9f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_be42328df3670fdabd41efa60a0a280943ac9859d53e0ef2e6a6485cc8a5dd94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be42328df3670fdabd41efa60a0a280943ac9859d53e0ef2e6a6485cc8a5dd94->enter($__internal_be42328df3670fdabd41efa60a0a280943ac9859d53e0ef2e6a6485cc8a5dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dd81d905dd813056773d9c64ab381ed893e35f09c566602ac511f4127d9f56->leave($__internal_15dd81d905dd813056773d9c64ab381ed893e35f09c566602ac511f4127d9f56_prof);

        
        $__internal_be42328df3670fdabd41efa60a0a280943ac9859d53e0ef2e6a6485cc8a5dd94->leave($__internal_be42328df3670fdabd41efa60a0a280943ac9859d53e0ef2e6a6485cc8a5dd94_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_77858b234de14d64b11c6e9f04fdd586e1d541bdeb907ec21a28f1bd06fe2352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77858b234de14d64b11c6e9f04fdd586e1d541bdeb907ec21a28f1bd06fe2352->enter($__internal_77858b234de14d64b11c6e9f04fdd586e1d541bdeb907ec21a28f1bd06fe2352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0d0ced9703c9c67751be8bf44ecb294ebbd3a7dcff58fc232d115ad416b547b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0ced9703c9c67751be8bf44ecb294ebbd3a7dcff58fc232d115ad416b547b4->enter($__internal_0d0ced9703c9c67751be8bf44ecb294ebbd3a7dcff58fc232d115ad416b547b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    

\t\t

<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">

        \t<div class=\"col-md-12\">

            <h2 class=\"heading\">SignIn</h2>

            \t<div class=\"row\">

                \t<div class=\"col-md-6 col-md-offset-3\">

                    <div class=\"panel panel-default x-panel\">

  <div class=\"panel-body\">

    \t<form class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" autocomplete=\"off\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email Address\" value=\"\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

                                    <div class=\"row\">

                                    <div class=\"col-md-6\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">

\t\t\t\t\t\t\t\t\t\t<label for=\"remember\"> Remember Me</label>

\t\t\t\t\t\t\t\t\t</div>

                                    <div class=\"col-md-6\">

                                    <a href=\"\" tabindex=\"5\" class=\"forgot-password pull-right\">Forgot Password?</a>

                                    </div>

                                    </div>

                                    </div>

                                    

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"SignIn\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</form>

                                <p class=\"text-center\"><strong>Signin with</strong></p>

\t\t<ul class=\"list-inline use-to\">

          <li><a href=\"#\" class=\"btn btn-lg fb\">FaceBook</a></li>

          <li><a href=\"#\" class=\"btn btn-lg twt\">Twitter</a></li>

          <li><a href=\"#\" class=\"btn btn-lg gplus\">Google+</a></li>

        </ul>\t\t\t\t\t

  </div>

</div>



                    \t

                    </div>

                    

                </div>

            </div>

        </div>

      </div>

    </section>
";
        
        $__internal_0d0ced9703c9c67751be8bf44ecb294ebbd3a7dcff58fc232d115ad416b547b4->leave($__internal_0d0ced9703c9c67751be8bf44ecb294ebbd3a7dcff58fc232d115ad416b547b4_prof);

        
        $__internal_77858b234de14d64b11c6e9f04fdd586e1d541bdeb907ec21a28f1bd06fe2352->leave($__internal_77858b234de14d64b11c6e9f04fdd586e1d541bdeb907ec21a28f1bd06fe2352_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout.html.twig\" %}

{% block content %}
    

\t\t

<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">

        \t<div class=\"col-md-12\">

            <h2 class=\"heading\">SignIn</h2>

            \t<div class=\"row\">

                \t<div class=\"col-md-6 col-md-offset-3\">

                    <div class=\"panel panel-default x-panel\">

  <div class=\"panel-body\">

    \t<form class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" autocomplete=\"off\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email Address\" value=\"\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

                                    <div class=\"row\">

                                    <div class=\"col-md-6\">

\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">

\t\t\t\t\t\t\t\t\t\t<label for=\"remember\"> Remember Me</label>

\t\t\t\t\t\t\t\t\t</div>

                                    <div class=\"col-md-6\">

                                    <a href=\"\" tabindex=\"5\" class=\"forgot-password pull-right\">Forgot Password?</a>

                                    </div>

                                    </div>

                                    </div>

                                    

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"SignIn\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</form>

                                <p class=\"text-center\"><strong>Signin with</strong></p>

\t\t<ul class=\"list-inline use-to\">

          <li><a href=\"#\" class=\"btn btn-lg fb\">FaceBook</a></li>

          <li><a href=\"#\" class=\"btn btn-lg twt\">Twitter</a></li>

          <li><a href=\"#\" class=\"btn btn-lg gplus\">Google+</a></li>

        </ul>\t\t\t\t\t

  </div>

</div>



                    \t

                    </div>

                    

                </div>

            </div>

        </div>

      </div>

    </section>
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\login.html.twig");
    }
}
