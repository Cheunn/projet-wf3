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
        $__internal_5be1a17f91c4d8dc7ee0c5cdcc581df34e68246f069b1e3c287ffedfac4f2186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be1a17f91c4d8dc7ee0c5cdcc581df34e68246f069b1e3c287ffedfac4f2186->enter($__internal_5be1a17f91c4d8dc7ee0c5cdcc581df34e68246f069b1e3c287ffedfac4f2186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/headerAdmin.html.twig"));

        $__internal_967a96e4152d037327103678ce977f13dc5b546b8af84fc349dc2898e05dbbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967a96e4152d037327103678ce977f13dc5b546b8af84fc349dc2898e05dbbd7->enter($__internal_967a96e4152d037327103678ce977f13dc5b546b8af84fc349dc2898e05dbbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/headerAdmin.html.twig"));

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
        
        $__internal_5be1a17f91c4d8dc7ee0c5cdcc581df34e68246f069b1e3c287ffedfac4f2186->leave($__internal_5be1a17f91c4d8dc7ee0c5cdcc581df34e68246f069b1e3c287ffedfac4f2186_prof);

        
        $__internal_967a96e4152d037327103678ce977f13dc5b546b8af84fc349dc2898e05dbbd7->leave($__internal_967a96e4152d037327103678ce977f13dc5b546b8af84fc349dc2898e05dbbd7_prof);

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

        
        
   ", "admin/headerAdmin.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\headerAdmin.html.twig");
    }
}
