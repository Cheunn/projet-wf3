<?php

/* user/login.html.twig */
class __TwigTemplate_e0879cc6f3e40b071cbf61091e3f51e436f6063d6ccee2111dc5dc4d0b84e039 extends Twig_Template
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
        $__internal_5518526904297d74848a63d595cde7bd291003658f00fbcb89ecd46793bdba02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5518526904297d74848a63d595cde7bd291003658f00fbcb89ecd46793bdba02->enter($__internal_5518526904297d74848a63d595cde7bd291003658f00fbcb89ecd46793bdba02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_62de0ca5f76ddc57c88ad270b07ef98a30a2c5a03bb8dcc327efb30df23fcb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62de0ca5f76ddc57c88ad270b07ef98a30a2c5a03bb8dcc327efb30df23fcb57->enter($__internal_62de0ca5f76ddc57c88ad270b07ef98a30a2c5a03bb8dcc327efb30df23fcb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5518526904297d74848a63d595cde7bd291003658f00fbcb89ecd46793bdba02->leave($__internal_5518526904297d74848a63d595cde7bd291003658f00fbcb89ecd46793bdba02_prof);

        
        $__internal_62de0ca5f76ddc57c88ad270b07ef98a30a2c5a03bb8dcc327efb30df23fcb57->leave($__internal_62de0ca5f76ddc57c88ad270b07ef98a30a2c5a03bb8dcc327efb30df23fcb57_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9682c7b962869c689ac3112c877b049fc5cdecc025c8a572a7c50e98a971f5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9682c7b962869c689ac3112c877b049fc5cdecc025c8a572a7c50e98a971f5fd->enter($__internal_9682c7b962869c689ac3112c877b049fc5cdecc025c8a572a7c50e98a971f5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_04cd8498036709ca019b77162c8e76bc446f3d02a31649a718f9d4b68506660e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cd8498036709ca019b77162c8e76bc446f3d02a31649a718f9d4b68506660e->enter($__internal_04cd8498036709ca019b77162c8e76bc446f3d02a31649a718f9d4b68506660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_04cd8498036709ca019b77162c8e76bc446f3d02a31649a718f9d4b68506660e->leave($__internal_04cd8498036709ca019b77162c8e76bc446f3d02a31649a718f9d4b68506660e_prof);

        
        $__internal_9682c7b962869c689ac3112c877b049fc5cdecc025c8a572a7c50e98a971f5fd->leave($__internal_9682c7b962869c689ac3112c877b049fc5cdecc025c8a572a7c50e98a971f5fd_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\user\\login.html.twig");
    }
}
