<?php

/* user/login.html.twig */
class __TwigTemplate_46e4a2789502a7d2718011df5c4e29e00778e18d742ba585dd18f9b898d202cb extends Twig_Template
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
        $__internal_af86e31c83ddf3fa5f796d79387fe6ead6db70f6155f9acfde77d54aea226b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af86e31c83ddf3fa5f796d79387fe6ead6db70f6155f9acfde77d54aea226b89->enter($__internal_af86e31c83ddf3fa5f796d79387fe6ead6db70f6155f9acfde77d54aea226b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_09a027871646d694985396d8d8d97f4ea07227a5248c409a602cf08f5a3ba713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a027871646d694985396d8d8d97f4ea07227a5248c409a602cf08f5a3ba713->enter($__internal_09a027871646d694985396d8d8d97f4ea07227a5248c409a602cf08f5a3ba713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af86e31c83ddf3fa5f796d79387fe6ead6db70f6155f9acfde77d54aea226b89->leave($__internal_af86e31c83ddf3fa5f796d79387fe6ead6db70f6155f9acfde77d54aea226b89_prof);

        
        $__internal_09a027871646d694985396d8d8d97f4ea07227a5248c409a602cf08f5a3ba713->leave($__internal_09a027871646d694985396d8d8d97f4ea07227a5248c409a602cf08f5a3ba713_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec37d42c73d9e89a711406b82deeeb8947aa0e19f9a942875588b6f053257d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec37d42c73d9e89a711406b82deeeb8947aa0e19f9a942875588b6f053257d9c->enter($__internal_ec37d42c73d9e89a711406b82deeeb8947aa0e19f9a942875588b6f053257d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ffa54ac80e0a8cc022566b05d60ede242662d5146302da1dd93e08bceff8f2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa54ac80e0a8cc022566b05d60ede242662d5146302da1dd93e08bceff8f2c6->enter($__internal_ffa54ac80e0a8cc022566b05d60ede242662d5146302da1dd93e08bceff8f2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ffa54ac80e0a8cc022566b05d60ede242662d5146302da1dd93e08bceff8f2c6->leave($__internal_ffa54ac80e0a8cc022566b05d60ede242662d5146302da1dd93e08bceff8f2c6_prof);

        
        $__internal_ec37d42c73d9e89a711406b82deeeb8947aa0e19f9a942875588b6f053257d9c->leave($__internal_ec37d42c73d9e89a711406b82deeeb8947aa0e19f9a942875588b6f053257d9c_prof);

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
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\user\\login.html.twig");
    }
}
