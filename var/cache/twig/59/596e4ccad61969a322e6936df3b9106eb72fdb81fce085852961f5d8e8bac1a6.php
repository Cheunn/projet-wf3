<?php

/* header.html.twig */
class __TwigTemplate_2ce520461dfa3a42db747134b02f4fac0a4115cc4adce58256905d84e5753fbd extends Twig_Template
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
        $__internal_15b0cc0e10e94e44067971c14833dad07266553e2146c1575a435d8e1441b9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b0cc0e10e94e44067971c14833dad07266553e2146c1575a435d8e1441b9e2->enter($__internal_15b0cc0e10e94e44067971c14833dad07266553e2146c1575a435d8e1441b9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_124c3aa58edb6b857259532e97fd9c784fbd603c6e6818ac0f5ef98f7bc1afe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124c3aa58edb6b857259532e97fd9c784fbd603c6e6818ac0f5ef98f7bc1afe4->enter($__internal_124c3aa58edb6b857259532e97fd9c784fbd603c6e6818ac0f5ef98f7bc1afe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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
                                <li><a href=\"";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "}\">Annonce 1</a></li>
                                <li><a href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "}\">Annonce 1</a></li>
                                <li><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "}\">Annonce 1</a></li>
                                <li><a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "}\">Annonce 1</a></li>
                                <li><a href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "}\">Annonce 1</a></li>
                                <li><a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "}\">Annonce 1</a></li>
                                
                               ";
        // line 212
        echo "                                ";
        // line 217
        echo "                            </ul>
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
                              ";
        // line 256
        echo "                            </ul>
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
        // line 311
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t";
            // line 315
            echo "\t\t
\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "id", array()))), "html", null, true);
            echo "\" >Mon tableau de bord</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_annonce_edit");
            echo "\">Poster une annonce</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
            // line 322
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_chronique_edit");
            echo "\">Poster une chronique</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"";
            // line 324
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"";
            // line 327
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\"><i class=\"fa fa-times\"></i></a></li>
\t\t\t\t  
\t\t";
        } else {
            // line 329
            echo " 
\t\t\t";
            // line 332
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
        // line 346
        echo " 
\t\t
\t\t ";
        // line 348
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "admin", array())) {
            // line 349
            echo "                    ";
            $this->loadTemplate("admin/headerAdmin.html.twig", "header.html.twig", 349)->display($context);
            echo " 
                 ";
        }
        // line 351
        echo "         </ul>
    <!--/.nav-collapse --> 
  </div>
</nav>
</header>
 
";
        // line 372
        echo "  ";
        
        $__internal_15b0cc0e10e94e44067971c14833dad07266553e2146c1575a435d8e1441b9e2->leave($__internal_15b0cc0e10e94e44067971c14833dad07266553e2146c1575a435d8e1441b9e2_prof);

        
        $__internal_124c3aa58edb6b857259532e97fd9c784fbd603c6e6818ac0f5ef98f7bc1afe4->leave($__internal_124c3aa58edb6b857259532e97fd9c784fbd603c6e6818ac0f5ef98f7bc1afe4_prof);

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
        return array (  505 => 372,  497 => 351,  491 => 349,  489 => 348,  485 => 346,  466 => 332,  463 => 329,  457 => 327,  451 => 324,  446 => 322,  442 => 321,  437 => 319,  432 => 317,  428 => 315,  424 => 311,  390 => 279,  385 => 278,  381 => 277,  378 => 276,  372 => 274,  368 => 273,  364 => 272,  346 => 256,  310 => 217,  308 => 212,  303 => 207,  299 => 206,  295 => 205,  291 => 204,  287 => 203,  283 => 202,  246 => 168,  235 => 160,  224 => 152,  213 => 144,  200 => 134,  189 => 126,  178 => 118,  167 => 110,  154 => 100,  143 => 92,  132 => 84,  121 => 76,  108 => 66,  97 => 58,  86 => 50,  75 => 42,  51 => 20,  47 => 18,  43 => 17,  25 => 1,);
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
                                <li><a href=\"{{ path('single_annonce', {id : 1})}}}\">Annonce 1</a></li>
                                <li><a href=\"{{ path('single_annonce', {id : 1})}}}\">Annonce 1</a></li>
                                <li><a href=\"{{ path('single_annonce', {id : 1})}}}\">Annonce 1</a></li>
                                <li><a href=\"{{ path('single_annonce', {id : 1})}}}\">Annonce 1</a></li>
                                <li><a href=\"{{ path('single_annonce', {id : 1})}}}\">Annonce 1</a></li>
                                <li><a href=\"{{ path('single_annonce', {id : 1})}}}\">Annonce 1</a></li>
                                
                               {#{% for annonceHeader in annoncesHeader %} 
                                <li><a href=\"{{ path('single_annonce', {id: annonceHeader.id_post}) }}\">{{ annonceHeader.post_title }}</a></li>
                               {% endfor %}#}
                                {#<li><a href=\"single.html\">TEST</a></li>
                                <li><a href=\"single.html\"></a></li>
                                <li><a href=\"single.html\"></a></li>
                                <li><a href=\"single.html\"></a></li>
                                <li><a href=\"single.html\"></a></li>#}
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
                              {#<li><a href=\"{{ path('single_chronique', {id : 1})}}}\">Chronique 1</a></li>
                              <li><a href=\"{{ path('single_chronique', {id : 1})}}}\">Chronique 1</a></li>
                              <li><a href=\"{{ path('single_chronique', {id : 1})}}}\">Chronique 1</a></li>
                              <li><a href=\"{{ path('single_chronique', {id : 1})}}}\">Chronique 1</a></li>
                              <li><a href=\"{{ path('single_chronique', {id : 1})}}}\">Chronique 1</a></li>#}
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
\t\t\t\t\t\t\t  <li><a href=\"{{path('user_annonce_edit')}}\">Poster une annonce</a></li>
\t\t\t\t\t\t\t  <li><a href=\"{{path('user_chronique_edit')}}\">Poster une chronique</a></li>
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
  ", "header.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\header.html.twig");
    }
}
