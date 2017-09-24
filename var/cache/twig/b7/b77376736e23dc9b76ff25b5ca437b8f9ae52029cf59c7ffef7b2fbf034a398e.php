<?php

/* user/login.html.twig */
class __TwigTemplate_2acc89cbddc9089954a84b8cbb6c3c0832e70eaf1df971d6172771550bda7297 extends Twig_Template
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
        $__internal_2dad86d196f65d419c54822c19b07dfbe2910621f53858f29d92e2a0a8e72def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dad86d196f65d419c54822c19b07dfbe2910621f53858f29d92e2a0a8e72def->enter($__internal_2dad86d196f65d419c54822c19b07dfbe2910621f53858f29d92e2a0a8e72def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_a99e3e181838c08d2c24c9e7b2474103495ad828f4419aad8def40fb199b3313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99e3e181838c08d2c24c9e7b2474103495ad828f4419aad8def40fb199b3313->enter($__internal_a99e3e181838c08d2c24c9e7b2474103495ad828f4419aad8def40fb199b3313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dad86d196f65d419c54822c19b07dfbe2910621f53858f29d92e2a0a8e72def->leave($__internal_2dad86d196f65d419c54822c19b07dfbe2910621f53858f29d92e2a0a8e72def_prof);

        
        $__internal_a99e3e181838c08d2c24c9e7b2474103495ad828f4419aad8def40fb199b3313->leave($__internal_a99e3e181838c08d2c24c9e7b2474103495ad828f4419aad8def40fb199b3313_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4ab270ff6cc32547ac2317d3d6f435b3f2a016224f5b8ded69b6692ea1d5c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ab270ff6cc32547ac2317d3d6f435b3f2a016224f5b8ded69b6692ea1d5c35->enter($__internal_e4ab270ff6cc32547ac2317d3d6f435b3f2a016224f5b8ded69b6692ea1d5c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_14f2060da67439d3c9c12e7c2c64e2c94d4fe35eccd9b84af3073f35bb88576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f2060da67439d3c9c12e7c2c64e2c94d4fe35eccd9b84af3073f35bb88576e->enter($__internal_14f2060da67439d3c9c12e7c2c64e2c94d4fe35eccd9b84af3073f35bb88576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_14f2060da67439d3c9c12e7c2c64e2c94d4fe35eccd9b84af3073f35bb88576e->leave($__internal_14f2060da67439d3c9c12e7c2c64e2c94d4fe35eccd9b84af3073f35bb88576e_prof);

        
        $__internal_e4ab270ff6cc32547ac2317d3d6f435b3f2a016224f5b8ded69b6692ea1d5c35->leave($__internal_e4ab270ff6cc32547ac2317d3d6f435b3f2a016224f5b8ded69b6692ea1d5c35_prof);

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
{% endblock %}", "user/login.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\user\\login.html.twig");
    }
}
