<?php

/* user/login.html.twig */
class __TwigTemplate_7b5792583521714714cc89c15c39448c2bdcb5bc06b22c6ea0148101c63f30d1 extends Twig_Template
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
        $__internal_2c45716b0cd1769886198353747184347b47c6f5d3cd71c828a2d09a3e307b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c45716b0cd1769886198353747184347b47c6f5d3cd71c828a2d09a3e307b22->enter($__internal_2c45716b0cd1769886198353747184347b47c6f5d3cd71c828a2d09a3e307b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_2b30f7b572aa1fbf5613e90beb6351174ca2da4bd23e3e8468b89f973ee14e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b30f7b572aa1fbf5613e90beb6351174ca2da4bd23e3e8468b89f973ee14e2d->enter($__internal_2b30f7b572aa1fbf5613e90beb6351174ca2da4bd23e3e8468b89f973ee14e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c45716b0cd1769886198353747184347b47c6f5d3cd71c828a2d09a3e307b22->leave($__internal_2c45716b0cd1769886198353747184347b47c6f5d3cd71c828a2d09a3e307b22_prof);

        
        $__internal_2b30f7b572aa1fbf5613e90beb6351174ca2da4bd23e3e8468b89f973ee14e2d->leave($__internal_2b30f7b572aa1fbf5613e90beb6351174ca2da4bd23e3e8468b89f973ee14e2d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_467ec75b459411429de71cd0e33d0cef87963246433d1610e7b8f7add7a3c782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467ec75b459411429de71cd0e33d0cef87963246433d1610e7b8f7add7a3c782->enter($__internal_467ec75b459411429de71cd0e33d0cef87963246433d1610e7b8f7add7a3c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_71a09abdba677ec34458dfa1f18e90c22826330d86fafc3f3a01b24bf89e9477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a09abdba677ec34458dfa1f18e90c22826330d86fafc3f3a01b24bf89e9477->enter($__internal_71a09abdba677ec34458dfa1f18e90c22826330d86fafc3f3a01b24bf89e9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_71a09abdba677ec34458dfa1f18e90c22826330d86fafc3f3a01b24bf89e9477->leave($__internal_71a09abdba677ec34458dfa1f18e90c22826330d86fafc3f3a01b24bf89e9477_prof);

        
        $__internal_467ec75b459411429de71cd0e33d0cef87963246433d1610e7b8f7add7a3c782->leave($__internal_467ec75b459411429de71cd0e33d0cef87963246433d1610e7b8f7add7a3c782_prof);

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
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\projet_v2\\templates\\user\\login.html.twig");
    }
}
