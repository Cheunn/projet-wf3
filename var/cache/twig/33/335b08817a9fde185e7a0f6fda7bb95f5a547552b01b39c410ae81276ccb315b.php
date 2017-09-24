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
        $__internal_bc74eb6c33d274ba190ecb2eb74e93b36c6f973957894a71a6cd4b1574c344b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc74eb6c33d274ba190ecb2eb74e93b36c6f973957894a71a6cd4b1574c344b8->enter($__internal_bc74eb6c33d274ba190ecb2eb74e93b36c6f973957894a71a6cd4b1574c344b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_0bc253f9bc034f3d011172821a3318d223d8e78bb429e25653512970c713d01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc253f9bc034f3d011172821a3318d223d8e78bb429e25653512970c713d01b->enter($__internal_0bc253f9bc034f3d011172821a3318d223d8e78bb429e25653512970c713d01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc74eb6c33d274ba190ecb2eb74e93b36c6f973957894a71a6cd4b1574c344b8->leave($__internal_bc74eb6c33d274ba190ecb2eb74e93b36c6f973957894a71a6cd4b1574c344b8_prof);

        
        $__internal_0bc253f9bc034f3d011172821a3318d223d8e78bb429e25653512970c713d01b->leave($__internal_0bc253f9bc034f3d011172821a3318d223d8e78bb429e25653512970c713d01b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_7bec2dad7dfdd99c0d73b468cc5bda273930e20c38735b39c9bc7673f051e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bec2dad7dfdd99c0d73b468cc5bda273930e20c38735b39c9bc7673f051e6be->enter($__internal_7bec2dad7dfdd99c0d73b468cc5bda273930e20c38735b39c9bc7673f051e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e66749242ddf395654955f15bac37d8d41cf7f3c2d751707a2f4c3f5eab352d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66749242ddf395654955f15bac37d8d41cf7f3c2d751707a2f4c3f5eab352d5->enter($__internal_e66749242ddf395654955f15bac37d8d41cf7f3c2d751707a2f4c3f5eab352d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e66749242ddf395654955f15bac37d8d41cf7f3c2d751707a2f4c3f5eab352d5->leave($__internal_e66749242ddf395654955f15bac37d8d41cf7f3c2d751707a2f4c3f5eab352d5_prof);

        
        $__internal_7bec2dad7dfdd99c0d73b468cc5bda273930e20c38735b39c9bc7673f051e6be->leave($__internal_7bec2dad7dfdd99c0d73b468cc5bda273930e20c38735b39c9bc7673f051e6be_prof);

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
