<?php

/* Contact.html.twig */
class __TwigTemplate_8b7ae82de6432fc6c03c11949c715d3070944f31e4777f6b248b1602449d3eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Contact.html.twig", 1);
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
        $__internal_30d9e4b413562efb19545bd2d0ade3af3ddd13d908b27352d95741de1d4f3c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d9e4b413562efb19545bd2d0ade3af3ddd13d908b27352d95741de1d4f3c19->enter($__internal_30d9e4b413562efb19545bd2d0ade3af3ddd13d908b27352d95741de1d4f3c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Contact.html.twig"));

        $__internal_50458eda0bef4d0a0b59ed3e50b81128cb742d9d8370eb5db7d51de3d20cfd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50458eda0bef4d0a0b59ed3e50b81128cb742d9d8370eb5db7d51de3d20cfd03->enter($__internal_50458eda0bef4d0a0b59ed3e50b81128cb742d9d8370eb5db7d51de3d20cfd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d9e4b413562efb19545bd2d0ade3af3ddd13d908b27352d95741de1d4f3c19->leave($__internal_30d9e4b413562efb19545bd2d0ade3af3ddd13d908b27352d95741de1d4f3c19_prof);

        
        $__internal_50458eda0bef4d0a0b59ed3e50b81128cb742d9d8370eb5db7d51de3d20cfd03->leave($__internal_50458eda0bef4d0a0b59ed3e50b81128cb742d9d8370eb5db7d51de3d20cfd03_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c75560ba51a56dd35ac4937297bfb7a1d9537def5e8b8ab162965a7522570bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75560ba51a56dd35ac4937297bfb7a1d9537def5e8b8ab162965a7522570bea->enter($__internal_c75560ba51a56dd35ac4937297bfb7a1d9537def5e8b8ab162965a7522570bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f39661284be4853ae17ede6f5c5aa5cea852b14fe28fd7229b74fee5ad231d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39661284be4853ae17ede6f5c5aa5cea852b14fe28fd7229b74fee5ad231d25->enter($__internal_f39661284be4853ae17ede6f5c5aa5cea852b14fe28fd7229b74fee5ad231d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "                   


<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">

        \t<div class=\"col-md-12\">

            <h2 class=\"heading\">Contactez nous :)</h2>

            \t<div class=\"row\">

                \t<div class=\"col-md-8 col-lg-8\">

                    <div class=\"panel panel-default x-panel\">

  \t\t\t\t\t\t<div class=\"panel-body\">

                    \t<div class=\"reg-form box\">

\t\t\t<div id=\"message\"></div>

                <form method=\"post\" action=\"#\" id=\"contact-form\">

                <div class=\"row\">

                \t<div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" name=\"yourname\" id=\"yourname\" placeholder=\"Votre nom\">

                        </div>

                    </div>

                    <div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Sujet\">

                        </div>

                    </div>

                </div>

                <div class=\"row\">

                \t<div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"youremail\" placeholder=\"Votre Email\">

                        </div>

                    </div>

                    

                    <div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Téléphone\">

                        </div>

                    </div>

                </div>

                <div class=\"row\">

                \t<div class=\"col-md-12\">

                        <div class=\"form-group\">

                        \t<textarea class=\"form-control\" rows=\"3\" name=\"message\" placeholder=\"Votre Message\"></textarea>

                        </div>

                    </div>

                    

                </div>

                

                  <button type=\"submit\" name=\"submit\" class=\"btn btn-default\">ENVOYER MESSAGE</button>

                </form>

                </div>

                </div>

                \t</div>

                    <div class=\"clearfix\"></div>

                    </div>

                    <aside class=\"col-md-4 col-lg-4\">

                    

                <div class=\"row\">

                <div class=\"col-sm-12 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Webforce3</div>

                    <div class=\"panel-body\">

                      <ul class=\"list-unstyled address-list\">

                          <li><i class=\"fa fa-phone fa-fw\"></i>82 Avenue Denfert-Rochereau, 75014 Paris</li>

                          <li><i class=\"fa fa-mobile fa-fw\"></i> +33 01 45 45 45 54 </li>

                          <li><i class=\"fa fa-at fa-fw\"></i> <a href=\"#\">info@tooto.net</a></li>

                          <li><i class=\"fa fa-globe fa-fw\"></i> <a href=\"#\">www.tooto.comt</a></li>

                        </ul>

                    </div>

                </div>

               </div>

                   <div class=\"col-sm-12 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Suivez nous ! </div>

                    <div class=\"panel-body\">

                      <ul class=\"list-inline follow-me\">

                          <li><a class=\"facebook\" target=\"_blank\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>

                        <li><a class=\"twitter\" target=\"_blank\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>

\t                    <li><a class=\"google-plus\" target=\"_blank\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>

\t                \t<li><a class=\"behance\" target=\"_blank\" href=\"#\"><i class=\"fa fa-behance\"></i></a></li>

\t                    <li><a class=\"tumblr\" target=\"_blank\" href=\"#\"><i class=\"fa fa-tumblr\"></i></a></li>

\t                    <li><a class=\"pinterest\" target=\"_blank\" href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>

                        </ul>

                    </div>

                </div>

               </div> 

                    </div>

                    

                    

                    </aside>

                </div>

            </div>

        </div>

      </div>

    </section>

<section class=\"map\">

<div id=\"contact_map\" class=\"wow fadeInUp\" data-wow-duration=\"0.9s\" data-wow-delay=\"0.9s\"></div>

</section>


    

    
";
        
        $__internal_f39661284be4853ae17ede6f5c5aa5cea852b14fe28fd7229b74fee5ad231d25->leave($__internal_f39661284be4853ae17ede6f5c5aa5cea852b14fe28fd7229b74fee5ad231d25_prof);

        
        $__internal_c75560ba51a56dd35ac4937297bfb7a1d9537def5e8b8ab162965a7522570bea->leave($__internal_c75560ba51a56dd35ac4937297bfb7a1d9537def5e8b8ab162965a7522570bea_prof);

    }

    public function getTemplateName()
    {
        return "Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
                   


<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">

        \t<div class=\"col-md-12\">

            <h2 class=\"heading\">Contactez nous :)</h2>

            \t<div class=\"row\">

                \t<div class=\"col-md-8 col-lg-8\">

                    <div class=\"panel panel-default x-panel\">

  \t\t\t\t\t\t<div class=\"panel-body\">

                    \t<div class=\"reg-form box\">

\t\t\t<div id=\"message\"></div>

                <form method=\"post\" action=\"#\" id=\"contact-form\">

                <div class=\"row\">

                \t<div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" name=\"yourname\" id=\"yourname\" placeholder=\"Votre nom\">

                        </div>

                    </div>

                    <div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"Sujet\">

                        </div>

                    </div>

                </div>

                <div class=\"row\">

                \t<div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" id=\"youremail\" placeholder=\"Votre Email\">

                        </div>

                    </div>

                    

                    <div class=\"col-md-6\">

                        <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"Téléphone\">

                        </div>

                    </div>

                </div>

                <div class=\"row\">

                \t<div class=\"col-md-12\">

                        <div class=\"form-group\">

                        \t<textarea class=\"form-control\" rows=\"3\" name=\"message\" placeholder=\"Votre Message\"></textarea>

                        </div>

                    </div>

                    

                </div>

                

                  <button type=\"submit\" name=\"submit\" class=\"btn btn-default\">ENVOYER MESSAGE</button>

                </form>

                </div>

                </div>

                \t</div>

                    <div class=\"clearfix\"></div>

                    </div>

                    <aside class=\"col-md-4 col-lg-4\">

                    

                <div class=\"row\">

                <div class=\"col-sm-12 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Webforce3</div>

                    <div class=\"panel-body\">

                      <ul class=\"list-unstyled address-list\">

                          <li><i class=\"fa fa-phone fa-fw\"></i>82 Avenue Denfert-Rochereau, 75014 Paris</li>

                          <li><i class=\"fa fa-mobile fa-fw\"></i> +33 01 45 45 45 54 </li>

                          <li><i class=\"fa fa-at fa-fw\"></i> <a href=\"#\">info@tooto.net</a></li>

                          <li><i class=\"fa fa-globe fa-fw\"></i> <a href=\"#\">www.tooto.comt</a></li>

                        </ul>

                    </div>

                </div>

               </div>

                   <div class=\"col-sm-12 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Suivez nous ! </div>

                    <div class=\"panel-body\">

                      <ul class=\"list-inline follow-me\">

                          <li><a class=\"facebook\" target=\"_blank\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>

                        <li><a class=\"twitter\" target=\"_blank\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>

\t                    <li><a class=\"google-plus\" target=\"_blank\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>

\t                \t<li><a class=\"behance\" target=\"_blank\" href=\"#\"><i class=\"fa fa-behance\"></i></a></li>

\t                    <li><a class=\"tumblr\" target=\"_blank\" href=\"#\"><i class=\"fa fa-tumblr\"></i></a></li>

\t                    <li><a class=\"pinterest\" target=\"_blank\" href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>

                        </ul>

                    </div>

                </div>

               </div> 

                    </div>

                    

                    

                    </aside>

                </div>

            </div>

        </div>

      </div>

    </section>

<section class=\"map\">

<div id=\"contact_map\" class=\"wow fadeInUp\" data-wow-duration=\"0.9s\" data-wow-delay=\"0.9s\"></div>

</section>


    

    
{% endblock %}
", "Contact.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\Contact.html.twig");
    }
}
