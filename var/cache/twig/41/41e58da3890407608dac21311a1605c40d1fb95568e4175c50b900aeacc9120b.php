<?php

/* admin/headerAdmin.html.twig */
class __TwigTemplate_2b4172196b0d2f58a660ea4f3d69697c44881b0b8aac31a3160168ed3b5f27a5 extends Twig_Template
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
        return array (  80 => 48,  72 => 43,  64 => 38,  56 => 33,  48 => 27,  42 => 22,  37 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/headerAdmin.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\headerAdmin.html.twig");
    }
}
