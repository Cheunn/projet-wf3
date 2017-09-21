<?php

/* admin/headerAdmin.html.twig */
class __TwigTemplate_6d668acf8643c344bdb350fb9ef9afb3603d20206cca2297645c3c7bafb80a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cd27de0aaa4f076ec75df7ebca0704e51c965f7e61ba37b1d438eb932acb105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd27de0aaa4f076ec75df7ebca0704e51c965f7e61ba37b1d438eb932acb105->enter($__internal_1cd27de0aaa4f076ec75df7ebca0704e51c965f7e61ba37b1d438eb932acb105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/headerAdmin.html.twig"));

        $__internal_1f0b9ab95279efd2b6d5081c65a5a961f5b0617bf892db818fdc6ea9612169d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0b9ab95279efd2b6d5081c65a5a961f5b0617bf892db818fdc6ea9612169d6->enter($__internal_1f0b9ab95279efd2b6d5081c65a5a961f5b0617bf892db818fdc6ea9612169d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/headerAdmin.html.twig"));

        // line 1
        echo "

      

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle administration\" data-toggle=\"dropdown\">Administration<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    

                        <div class=\"mega-dropdown-menu\">
                            

                            <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories");
        echo "\" >Categories</a></h3>  
                                <ul class=\"list-unstyled\">                   
                                    ";
        // line 22
        echo "                                </ul>
                            </div>
                                
                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                ";
        // line 27
        echo "                                 <h3><a href=\"#\" >News A definir</a></h3> 
                            </div>
                                
                            
                                
                          <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonces");
        echo "\" >Annonces</a></h3>  
                     
                            </div>
                                
                          <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_chroniques");
        echo "\" >Chroniques</a></h3>  
                           
                            </div>
                                
                          <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag");
        echo "\" >Tag</a></h3>  
                           
                            </div>
                                
                             <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_handicap");
        echo "\" >handicap</a></h3>  
                           
                            </div>


                       

                    </div>

                 

                </div>              

            </li>

        
        
   ";
        
        $__internal_1cd27de0aaa4f076ec75df7ebca0704e51c965f7e61ba37b1d438eb932acb105->leave($__internal_1cd27de0aaa4f076ec75df7ebca0704e51c965f7e61ba37b1d438eb932acb105_prof);

        
        $__internal_1f0b9ab95279efd2b6d5081c65a5a961f5b0617bf892db818fdc6ea9612169d6->leave($__internal_1f0b9ab95279efd2b6d5081c65a5a961f5b0617bf892db818fdc6ea9612169d6_prof);

    }

    public function getTemplateName()
    {
        return "admin/headerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  78 => 43,  70 => 38,  62 => 33,  54 => 27,  48 => 22,  43 => 17,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

      

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle administration\" data-toggle=\"dropdown\">Administration<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    

                        <div class=\"mega-dropdown-menu\">
                            

                            <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"{{ path('admin_categories') }}\" >Categories</a></h3>  
                                <ul class=\"list-unstyled\">                   
                                    {#  {% for category in categories %}              
                                         <li><a href=\"#\">{{ category.name }}</a></li>
                                    {% endfor %}  #}
                                </ul>
                            </div>
                                
                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                {# <h3><a href=\"{{ path('admin_news') }}\" >News</a></h3> #}
                                 <h3><a href=\"#\" >News A definir</a></h3> 
                            </div>
                                
                            
                                
                          <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"{{ path('admin_annonces') }}\" >Annonces</a></h3>  
                     
                            </div>
                                
                          <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"{{ path('admin_chroniques') }}\" >Chroniques</a></h3>  
                           
                            </div>
                                
                          <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"{{ path('admin_tag') }}\" >Tag</a></h3>  
                           
                            </div>
                                
                             <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"{{ path('admin_handicap') }}\" >handicap</a></h3>  
                           
                            </div>


                       

                    </div>

                 

                </div>              

            </li>

        
        
   ", "admin/headerAdmin.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\admin\\headerAdmin.html.twig");
    }
}
