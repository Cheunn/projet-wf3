<?php

/* admin/headerAdmin.html.twig */
class __TwigTemplate_2649942595b345f2667442ff4a3163c6d918344578a9476c26f14a5442a2eb2c extends Twig_Template
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
        $__internal_a86b119066263ba46843379deaf5cc4fe29519807ba862fa9885c6f65a7c5c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86b119066263ba46843379deaf5cc4fe29519807ba862fa9885c6f65a7c5c2b->enter($__internal_a86b119066263ba46843379deaf5cc4fe29519807ba862fa9885c6f65a7c5c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/headerAdmin.html.twig"));

        $__internal_6653873689027d59d6afc71fd4845ab23d31eec12ec2025f2e965011ac8951ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6653873689027d59d6afc71fd4845ab23d31eec12ec2025f2e965011ac8951ec->enter($__internal_6653873689027d59d6afc71fd4845ab23d31eec12ec2025f2e965011ac8951ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/headerAdmin.html.twig"));

        // line 1
        echo "

      

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle administration\" data-toggle=\"dropdown\">Administration<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    

                        <div class=\"mega-dropdown-menu\">
                            

                            <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category");
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
        
        $__internal_a86b119066263ba46843379deaf5cc4fe29519807ba862fa9885c6f65a7c5c2b->leave($__internal_a86b119066263ba46843379deaf5cc4fe29519807ba862fa9885c6f65a7c5c2b_prof);

        
        $__internal_6653873689027d59d6afc71fd4845ab23d31eec12ec2025f2e965011ac8951ec->leave($__internal_6653873689027d59d6afc71fd4845ab23d31eec12ec2025f2e965011ac8951ec_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

      

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle administration\" data-toggle=\"dropdown\">Administration<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    

                        <div class=\"mega-dropdown-menu\">
                            

                            <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">
                                <h3><a href=\"{{ path('admin_category') }}\" >Categories</a></h3>  
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

        
        
   ", "admin/headerAdmin.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\headerAdmin.html.twig");
    }
}
