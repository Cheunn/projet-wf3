<?php

/* header.html.twig */
class __TwigTemplate_4b6f6789bc804928b9c980f95691ddc80e793e3557e1704f66a0aa0f2ecf6d1c extends Twig_Template
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
        $__internal_5639b83e6723196574d978657483df69017e49cd67c506fa8b7ce5d225f5b9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5639b83e6723196574d978657483df69017e49cd67c506fa8b7ce5d225f5b9df->enter($__internal_5639b83e6723196574d978657483df69017e49cd67c506fa8b7ce5d225f5b9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_c526a2d8ee428e3e6e0724b544d433b1d13368d3cbeecd9a2852e0116ad314ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c526a2d8ee428e3e6e0724b544d433b1d13368d3cbeecd9a2852e0116ad314ab->enter($__internal_c526a2d8ee428e3e6e0724b544d433b1d13368d3cbeecd9a2852e0116ad314ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>

<!-- Preloader
    <div id=\"preloader\">
        <div id=\"status\">
            <div class='spinner-wrap'>
                <div class='leftside'></div>
                <div class='rightside'></div>
            <div class='spinner'>
                <div class='bounce1'></div>
                <div class='bounce2'></div>
                
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
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" title=\"logo\">
         <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
      ";
        // line 27
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
        // line 49
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
        // line 57
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
        // line 65
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
        // line 73
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
        // line 83
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
        // line 91
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
        // line 99
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
        // line 107
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
        // line 117
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
        // line 125
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
        // line 133
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
        // line 141
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
        // line 151
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
        // line 159
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
        // line 167
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
        // line 175
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
                                <li><a href=\"#\">Msqdq</a></li>
                                <li><a href=\"#\">Travel </a></li>
                                <li><a href=\"#\">Music </a></li>
                                <li><a href=\"#\">LifeStyle </a></li>
                                <li><a href=\"#\">Apps </a></li>
                                <li><a href=\"#\">Business </a></li>
                            </ul>
                        </div>
                   
                        <div class=\"col-md-4 col-sm-6 sub-menu hidden-xs\">
                            <h3>Recent Post Menu</h3>
                            <ul class=\"list-unstyled\">
                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>
                                <li><a href=\"single.html\">Match With the Size  </a></li>
                                <li><a href=\"single.html\">The Heading Text Size</a></li>
                                <li><a href=\"single.html\">Lorem ipsum dolor sit </a></li>
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
         <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Chroniques<span class=\"caret\"></span></a>               
                <div class=\"dropdown-menu\">
                    <div class=\"container\">
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"col-md-4 col-xs-12 col-sm-6 sub-menu\">
                            <h3>Categories</h3>
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
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messProfilToUs");
        echo "\">Contact</a></li>
\t\t";
        // line 273
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t<li><a href=\"";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\" class=\"inscription\">Deconnexion</a></li>

\t\t ";
        } else {
            // line 276
            echo " 
\t\t\t<li><a href=\"";
            // line 277
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\" class=\"connexion\">Connexion</a></li>
\t\t\t<li><a href=\"";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\" class=\"connexion\">Inscription</a></li>
\t\t";
        }
        // line 279
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
        // line 312
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t";
            // line 316
            echo "\t\t
\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "id", array()))), "html", null, true);
            echo "\" >Mon tableau de bord</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une annonce</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une news</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une chronique</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"";
            // line 326
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"";
            // line 329
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\"><i class=\"fa fa-times\"></i></a></li>
\t\t\t\t  
\t\t";
        } else {
            // line 331
            echo " 
\t\t\t";
            // line 334
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
        // line 348
        echo " 
\t\t
\t\t ";
        // line 350
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
            // line 351
            echo "                    ";
            $this->loadTemplate("admin/headerAdmin.html.twig", "header.html.twig", 351)->display($context);
            echo " 
                 ";
        }
        // line 353
        echo "         </ul>
    <!--/.nav-collapse --> 
  </div>
</nav>
</header>
 
";
        // line 374
        echo "  ";
        
        $__internal_5639b83e6723196574d978657483df69017e49cd67c506fa8b7ce5d225f5b9df->leave($__internal_5639b83e6723196574d978657483df69017e49cd67c506fa8b7ce5d225f5b9df_prof);

        
        $__internal_c526a2d8ee428e3e6e0724b544d433b1d13368d3cbeecd9a2852e0116ad314ab->leave($__internal_c526a2d8ee428e3e6e0724b544d433b1d13368d3cbeecd9a2852e0116ad314ab_prof);

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
        return array (  490 => 374,  482 => 353,  476 => 351,  474 => 350,  470 => 348,  451 => 334,  448 => 331,  442 => 329,  436 => 326,  427 => 320,  422 => 318,  418 => 316,  414 => 312,  379 => 279,  374 => 278,  370 => 277,  367 => 276,  361 => 274,  357 => 273,  353 => 272,  253 => 175,  242 => 167,  231 => 159,  220 => 151,  207 => 141,  196 => 133,  185 => 125,  174 => 117,  161 => 107,  150 => 99,  139 => 91,  128 => 83,  115 => 73,  104 => 65,  93 => 57,  82 => 49,  58 => 27,  54 => 25,  50 => 24,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>

<!-- Preloader
    <div id=\"preloader\">
        <div id=\"status\">
            <div class='spinner-wrap'>
                <div class='leftside'></div>
                <div class='rightside'></div>
            <div class='spinner'>
                <div class='bounce1'></div>
                <div class='bounce2'></div>
                
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
      <a class=\"navbar-brand logo\" href=\"{{ path('homepage') }}\" title=\"logo\">
         <img src=\"{{ asset ('assets/images/logo.png') }}\" alt=\"logo\" />
      {#yGrekinf#}
      </a> </div>
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
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post1.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Travel The World</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post6.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Google Play Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post4.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Business Plan</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post8.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Best Mobile Apps</h3>
                                                </div>
                                            </div>
                                    </div>       
                                </div>
                                <div class=\"tab-pane\" id=\"Travel\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post5.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>LifeStyle</h3>
                                                </div>
                                            </div>
                                    </div>
                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post2.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Mobile reviews</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post7.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Apple Probook</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post4.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Business Call</h3>
                                                </div>
                                            </div>
                                    </div>
                                </div>  
                                <div class=\"tab-pane\" id=\"Music\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post6.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Android Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post1.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Canan Digital Cam</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post3.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Classical Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post8.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>IPhone Tunes</h3>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"Apps\">
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post1.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Android Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post6.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Canan Digital Cam</h3>
                                                </div>
                                            </div>
                                    </div>
                                   <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post8.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
                                                <div class=\"caption\">
                                                    <h3>Classical Music</h3>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">
                                            <div class=\"thumbnail\">
                                                <a href=\"single.html\"><img src=\"{{ asset('assets/images/feature-posts/feature-post3.png ') }}\"  alt=\"Generic placeholder thumbnail\"></a>
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
                                <li><a href=\"#\">Msqdq</a></li>
                                <li><a href=\"#\">Travel </a></li>
                                <li><a href=\"#\">Music </a></li>
                                <li><a href=\"#\">LifeStyle </a></li>
                                <li><a href=\"#\">Apps </a></li>
                                <li><a href=\"#\">Business </a></li>
                            </ul>
                        </div>
                   
                        <div class=\"col-md-4 col-sm-6 sub-menu hidden-xs\">
                            <h3>Recent Post Menu</h3>
                            <ul class=\"list-unstyled\">
                              <li><a href=\"single.html\">Should Be A Large Heading </a></li>
                                <li><a href=\"single.html\">Match With the Size  </a></li>
                                <li><a href=\"single.html\">The Heading Text Size</a></li>
                                <li><a href=\"single.html\">Lorem ipsum dolor sit </a></li>
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
         <li class=\"dropdown mega-dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Chroniques<span class=\"caret\"></span></a>               
                <div class=\"dropdown-menu\">
                    <div class=\"container\">
                    <div class=\"mega-dropdown-menu\">
                        <div class=\"col-md-4 col-xs-12 col-sm-6 sub-menu\">
                            <h3>Categories</h3>
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
       
           
\t\t<li><a href=\"{{ path('messProfilToUs') }}\">Contact</a></li>
\t\t{% if user_manager.user %} 
\t\t\t<li><a href=\"{{ path('deconnexion') }}\" class=\"inscription\">Deconnexion</a></li>

\t\t {% else %} 
\t\t\t<li><a href=\"{{ path('connexion') }}\" class=\"connexion\">Connexion</a></li>
\t\t\t<li><a href=\"{{ path('inscription') }}\" class=\"connexion\">Inscription</a></li>
\t\t{% endif %}  
          
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
             
\t\t{% if user_manager.user %} 
\t\t\t{#
\t\t\t<li><a href=\"#\"><i>{{user_manager.username}}</i></a></li>
\t\t\t<li><a href=\"{{ path('deconnexion') }}\"><i class=\"fa fa-times\"></i></a></li> #}
\t\t
\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">{{user_manager.username}} <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"{{ path('profilUser', {id: user_manager.id}) }}\" >Mon tableau de bord</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une annonce</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une news</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une chronique</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"{{ path('deconnexion') }}\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"{{ path('deconnexion') }}\"><i class=\"fa fa-times\"></i></a></li>
\t\t\t\t  
\t\t{% else %} 
\t\t\t{# <li><a href=\"{{ path('connexion') }}\"><i class=\"fa fa-user\"></i></a></li>
\t\t\t#}
\t\t\t<li><a href=\"{{ path('connexion') }}\"><i class=\"fa fa-user\"></i></a></li>
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
\t\t{% endif %} 
\t\t
\t\t {% if user_manager.admin %}
                    {% include 'admin/headerAdmin.html.twig'%} 
                 {% endif %}
         </ul>
    <!--/.nav-collapse --> 
  </div>
</nav>
</header>
 
{#  <!-- Preloader -->
  
  <div id=\"preloader\">
    <div id=\"status\">
      <div class='spinner-wrap'>
        <div class='leftside'></div>
        <div class='rightside'></div>
        <div class='spinner'>
          <div class='bounce1'></div>
          <div class='bounce2'></div>
          <div class='bounce3'></div>
        </div>
      </div>
    </div>
  </div>#}
  ", "header.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\templates\\header.html.twig");
    }
}
