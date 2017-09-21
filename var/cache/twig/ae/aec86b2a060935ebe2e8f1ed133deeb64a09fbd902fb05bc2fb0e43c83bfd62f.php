<?php

/* user/login.html.twig */
class __TwigTemplate_a1569eef5ae37c362f545f718ac3d67b378ec3ed1e61ec746b5c239ec7811331 extends Twig_Template
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
        $__internal_54b523d143c3613e4a45bfbaa85644730d27829eb6ed4ab7464ca88b604bf8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b523d143c3613e4a45bfbaa85644730d27829eb6ed4ab7464ca88b604bf8b4->enter($__internal_54b523d143c3613e4a45bfbaa85644730d27829eb6ed4ab7464ca88b604bf8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_e672e0118e2838fad3ce5083e0437014b2ba812cb024bf01342dde3f150a36fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e672e0118e2838fad3ce5083e0437014b2ba812cb024bf01342dde3f150a36fd->enter($__internal_e672e0118e2838fad3ce5083e0437014b2ba812cb024bf01342dde3f150a36fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b523d143c3613e4a45bfbaa85644730d27829eb6ed4ab7464ca88b604bf8b4->leave($__internal_54b523d143c3613e4a45bfbaa85644730d27829eb6ed4ab7464ca88b604bf8b4_prof);

        
        $__internal_e672e0118e2838fad3ce5083e0437014b2ba812cb024bf01342dde3f150a36fd->leave($__internal_e672e0118e2838fad3ce5083e0437014b2ba812cb024bf01342dde3f150a36fd_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0baf4dc8a9be00f7717f41f6ffa1c2785c9ac75cca693530542fcbcc9dd05c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0baf4dc8a9be00f7717f41f6ffa1c2785c9ac75cca693530542fcbcc9dd05c0->enter($__internal_f0baf4dc8a9be00f7717f41f6ffa1c2785c9ac75cca693530542fcbcc9dd05c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6327da62a717f0652907a5b64a6056b645c266cedf1d16d0b8f615804b354cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6327da62a717f0652907a5b64a6056b645c266cedf1d16d0b8f615804b354cd0->enter($__internal_6327da62a717f0652907a5b64a6056b645c266cedf1d16d0b8f615804b354cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6327da62a717f0652907a5b64a6056b645c266cedf1d16d0b8f615804b354cd0->leave($__internal_6327da62a717f0652907a5b64a6056b645c266cedf1d16d0b8f615804b354cd0_prof);

        
        $__internal_f0baf4dc8a9be00f7717f41f6ffa1c2785c9ac75cca693530542fcbcc9dd05c0->leave($__internal_f0baf4dc8a9be00f7717f41f6ffa1c2785c9ac75cca693530542fcbcc9dd05c0_prof);

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
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\templates\\user\\login.html.twig");
    }
}
