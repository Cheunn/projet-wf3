<?php

/* user/login.html.twig */
class __TwigTemplate_a709d4cb613a1a20cd963b5e210142108a037d5f736c440ca57c5cb5045dc0ac extends Twig_Template
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
        $__internal_3ccd1fa413b5310eaa46266fc7722520b6a3a64c1e7a2acbfab5a045dea549ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccd1fa413b5310eaa46266fc7722520b6a3a64c1e7a2acbfab5a045dea549ad->enter($__internal_3ccd1fa413b5310eaa46266fc7722520b6a3a64c1e7a2acbfab5a045dea549ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_c20d0bad99c4e4e229555d93ac47e260b720f1ac7351829b66d3d24dcdbc3dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20d0bad99c4e4e229555d93ac47e260b720f1ac7351829b66d3d24dcdbc3dc7->enter($__internal_c20d0bad99c4e4e229555d93ac47e260b720f1ac7351829b66d3d24dcdbc3dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ccd1fa413b5310eaa46266fc7722520b6a3a64c1e7a2acbfab5a045dea549ad->leave($__internal_3ccd1fa413b5310eaa46266fc7722520b6a3a64c1e7a2acbfab5a045dea549ad_prof);

        
        $__internal_c20d0bad99c4e4e229555d93ac47e260b720f1ac7351829b66d3d24dcdbc3dc7->leave($__internal_c20d0bad99c4e4e229555d93ac47e260b720f1ac7351829b66d3d24dcdbc3dc7_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5f4f1ba95bf6c900282b9ff8a2a79ad89ee8085826470a34e9610bf44d5d33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f4f1ba95bf6c900282b9ff8a2a79ad89ee8085826470a34e9610bf44d5d33c->enter($__internal_b5f4f1ba95bf6c900282b9ff8a2a79ad89ee8085826470a34e9610bf44d5d33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4e27be0760ea11be37b63b3240451cad3cdce7f011d4885701c45eceab77176a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e27be0760ea11be37b63b3240451cad3cdce7f011d4885701c45eceab77176a->enter($__internal_4e27be0760ea11be37b63b3240451cad3cdce7f011d4885701c45eceab77176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4e27be0760ea11be37b63b3240451cad3cdce7f011d4885701c45eceab77176a->leave($__internal_4e27be0760ea11be37b63b3240451cad3cdce7f011d4885701c45eceab77176a_prof);

        
        $__internal_b5f4f1ba95bf6c900282b9ff8a2a79ad89ee8085826470a34e9610bf44d5d33c->leave($__internal_b5f4f1ba95bf6c900282b9ff8a2a79ad89ee8085826470a34e9610bf44d5d33c_prof);

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
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\user\\login.html.twig");
    }
}
