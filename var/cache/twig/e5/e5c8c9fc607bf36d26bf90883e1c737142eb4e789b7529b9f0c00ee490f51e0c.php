<?php

/* header.html.twig */
class __TwigTemplate_85f67f375c0ea161233f37b734ab3b7cad4e2a9453f1639268b9fe9630058869 extends Twig_Template
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
        echo "<header>


<!-- Fixed navbar -->

<nav class=\"navbar main-menu navbar-default navbar-fixed-top\" role=\"navigation\">

  <div class=\"container\">

    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
      <a class=\"navbar-brand logo\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" title=\"logo\">
         <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
      ";
        // line 20
        echo "      </a> </div>
    <div class=\"navbar-collapse collapse pull-left\">
      <ul class=\"nav navbar-nav menu\" id=\"menu\">
        <!-- <li class=\"dropdown\">  class=\"dropdown-toggle\"-->
        <li><a href=\"#\" role=\"button\" aria-expanded=\"false\">Accueil</a></li>
        <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">News <span class=\"caret\"></span></a>
            <div class=\"dropdown-menu\">
                <div class=\"container\"> 
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"tabbable tabs-left\">
                            <ul class=\"nav nav-tabs\">
                              <li class=\"active\"><a href=\"#Actualites\" data-toggle=\"tab\">Actualité<i class=\"arrow_carrot-right\"></i></a></li>
                              <li><a href=\"#Sport\" data-toggle=\"tab\">Sport <i class=\"arrow_carrot-right\"></i></a></li>
                              <li><a href=\"#Culture\" data-toggle=\"tab\">Culture <i class=\"arrow_carrot-right\"></i></a></li>
                              <li><a href=\"#Sortie\" data-toggle=\"tab\">Sortie <i class=\"arrow_carrot-right\"></i></a></li>
                              <li><a href=\"#Insolite\" data-toggle=\"tab\">Insolite  <i class=\"arrow_carrot-right\"></i></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"Photography\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post1.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Travel The World</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post6.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Google Play Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post4.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Business Plan</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post8.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Best Mobile Apps</h3>
                                                </div>
                                            </div>
                                    </div>       
                                </div>
                                <div class=\"tab-pane\" id=\"Travel\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post5.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>LifeStyle</h3>
                                                </div>
                                            </div>
                                    </div>
                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post2.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Mobile reviews</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post7.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Apple Probook</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post4.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Business Call</h3>
                                                </div>
                                            </div>
                                    </div>
                                </div>  
                                <div class=\"tab-pane\" id=\"Music\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post6.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Android Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post1.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Canan Digital Cam</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post3.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Classical Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post8.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>IPhone Tunes</h3>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"Apps\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post1.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Android Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post6.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Canan Digital Cam</h3>
                                                </div>
                                            </div>
                                    </div>
                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post8.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Classical Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post3.png "), "html", null, true);
        echo "\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>IPhone Tunes</h3>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>              
        </li>

        <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>               
                <div class=\"dropdown-menu\">
                    <div class=\"container\">
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"col-md-4 col-xs-12 col-sm-6 sub-menu\">
                            <h3>Rubriques </h3>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"#\">Matériels </a></li>
                                <li><a href=\"#\">Véhicule </a></li>
                                <li><a href=\"#\">Informatique </a></li>
                                <li><a href=\"#\">Service </a></li>
                                <li><a href=\"#\">Vétements </a></li>
                                <li><a href=\"#\">Autres </a></li>
                            </ul>
                        </div>
                        
                        <div class=\"col-md-4 col-sm-6 sub-menu hidden-xs\">
                            <h3>Dernières annonces</h3>
                            <ul class=\"list-unstyled\">
                               ";
        // line 204
        echo "     
                                <li><a href=\"single.html\">TEST</a></li>
                                <li><a href=\"single.html\"></a></li>
                                <li><a href=\"single.html\"></a></li>
                                <li><a href=\"single.html\"></a></li>
                                <li><a href=\"single.html\"></a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 col-sm-6 sub-menu  hidden-xs\">
                            <h3>Suivez-nous</h3>
                            <p>Vous pouvez également maintenant nous suivre sur les réseaux sociaux</p>
                            <br/>
                             <ul class=\"list-inline store-icon\">
                              <li><a href=\"\"><i class=\"fa fa-facebook\"></i> Facebook </a></li>
                              <li><a href=\"\"><i class=\"fa fa-twitter\"></i> Twitter </a></li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                </div>              
            </li>
         <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Chroniques<span class=\"caret\"></span></a>               
                <div class=\"dropdown-menu\">
                    <div class=\"container\">
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"col-md-4 col-xs-12 col-sm-6 sub-menu\">
                            <h3>Rubriques</h3>
                            <ul class=\"list-unstyled\">
                              <li><a href=\"#\">Actualité</a></li>
                                <li><a href=\"#\">Sport  </a></li>
                                <li><a href=\"#\">Culture </a></li>
                                <li><a href=\"#\">Sortie </a></li>
                                <li><a href=\"#\">Insolite</a></li>
                            </ul>
                        </div>
                     
                        <div class=\"col-md-4 col-sm-6 sub-menu hidden-xs\">
                            <h3>Dernières chroniques</h3>
                            <ul class=\"list-unstyled\">
                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>
                              <li><a href=\"single.html\">Match With the Size  </a></li>
                              <li><a href=\"single.html\">The Heading Text Size</a></li>
                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>
                              <li><a href=\"single.html\">Match With the Image  </a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 col-sm-6 sub-menu  hidden-xs\">
                            <h3>Suivez-nous</h3>
                            <p>Vous pouvez également maintenant nous suivre sur les réseaux sociaux</p>
                            <br/>
                            <ul class=\"list-inline store-icon\">
                              <li><a href=\"\"><i class=\"fa fa-facebook\"></i> Facebook </a></li>
                              <li><a href=\"\"><i class=\"fa fa-twitter\"></i> Twitter </a></li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                </div>              
            </li>
          <li class=\"dropdown\">
\t\t<li><a href=\"";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messProfilToUs");
        echo "\">Contact</a></li>
\t\t";
        // line 266
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            echo " 
\t\t\t<li><a href=\"";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\" class=\"inscription\">Deconnexion</a></li>

\t\t ";
        } else {
            // line 269
            echo " 
\t\t\t<li><a href=\"";
            // line 270
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\" class=\"connexion\">Connexion</a></li>
\t\t\t<li><a href=\"";
            // line 271
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\" class=\"connexion\">Inscription</a></li>
\t\t";
        }
        // line 272
        echo "  
          
      </ul>
    </div>
    <ul class=\"nav navbar-nav navbar-right menu social-icons\">
        <li class=\"dropdown mega-dropdown search\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-search\"></i></a>
          <div class=\"dropdown-menu\">
                    <div class=\"container\">
                        <div class=\"row\">
                        <div class=\"col-md-6 pull-right\">
                    <div class=\"mega-dropdown-menu\">
                        <form class=\"search-form\" action=\"search.html\">
                            <div class=\"form-group\">
                        <div class=\"col-lg-12\">
                            <div class=\"input-group\">
                              <input type=\"text\" class=\"form-control\" placeholder=\"Recherche...\">
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                              </span>
                            </div><!-- /input-group -->

                          </div>
                          </div>
                      </form>
                    </div>
                    </div>
                    </div>

                    </div>   
                </div>
        </li>
\t\t";
        // line 304
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            echo " 
\t\t\t";
            // line 308
            echo "\t\t
\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"";
            // line 312
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "id", array()))), "html", null, true);
            echo "\" >Mon tableau de bord</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une annonce</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une news</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une chronique</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"";
            // line 318
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\"><i class=\"fa fa-times\"></i></a></li>
\t\t\t\t  
\t\t";
        } else {
            // line 323
            echo " 
\t\t\t";
            // line 326
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\"><i class=\"fa fa-user\"></i></a></li>
\t\t\t
\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Mon tableau de bord<i class=\"arrow_carrot-right\"></i></a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">lire les annonces</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">lire les news</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">lire les chroniques</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"signin.html\">Connexion</a></li>
\t\t\t\t\t\t\t  <li><a href=\"signup.html\">Inscription</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t";
        }
        // line 340
        echo " 
\t\t
\t\t ";
        // line 342
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "admin", array())) {
            // line 343
            echo "                    ";
            $this->loadTemplate("admin/headerAdmin.html.twig", "header.html.twig", 343)->display($context);
            echo " 
                 ";
        }
        // line 345
        echo "         </ul>
    <!--/.nav-collapse --> 
  </div>
</nav>
</header>
 
";
        // line 366
        echo "  ";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 366,  468 => 345,  462 => 343,  460 => 342,  456 => 340,  437 => 326,  434 => 323,  428 => 321,  422 => 318,  413 => 312,  408 => 310,  404 => 308,  400 => 304,  366 => 272,  361 => 271,  357 => 270,  354 => 269,  348 => 267,  344 => 266,  340 => 265,  277 => 204,  240 => 168,  229 => 160,  218 => 152,  207 => 144,  194 => 134,  183 => 126,  172 => 118,  161 => 110,  148 => 100,  137 => 92,  126 => 84,  115 => 76,  102 => 66,  91 => 58,  80 => 50,  69 => 42,  45 => 20,  41 => 18,  37 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\header.html.twig");
    }
}
