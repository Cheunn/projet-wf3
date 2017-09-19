<?php

/* header.html.twig */
class __TwigTemplate_d71b1f4d744d92689659d2dfbba15604f4f6eaca94821226f477fc814210f7b5 extends Twig_Template
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
        $__internal_f89931d601f3ee85fc71fb731c7507644845fe487aea3120036d6b01270ffc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89931d601f3ee85fc71fb731c7507644845fe487aea3120036d6b01270ffc7b->enter($__internal_f89931d601f3ee85fc71fb731c7507644845fe487aea3120036d6b01270ffc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_4621c77241147542b9064368c9701ac44ae8d497f1c46a516f1748b46b497154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4621c77241147542b9064368c9701ac44ae8d497f1c46a516f1748b46b497154->enter($__internal_4621c77241147542b9064368c9701ac44ae8d497f1c46a516f1748b46b497154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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
                <div class='bounce3'></div>
            </div>
            </div>
        </div>
    </div> 
     -->

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

      <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" title=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" /></a> </div>

    <div class=\"navbar-collapse collapse pull-left\">

      <ul class=\"nav navbar-nav menu\" id=\"menu\">

        <!-- <li class=\"dropdown\">  class=\"dropdown-toggle\"--><li><a href=\"#\" role=\"button\" aria-expanded=\"false\">Accueil</a></li>

            <!-- TO DELETE -->
            <!-- <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"index.html\">Home 1</a></li>
                <li><a href=\"index-2.html\">Home 2</a></li>
            </ul> 
        </li> -->

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">News <span class=\"caret\"></span></a>

            <div class=\"dropdown-menu\">

                <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"tabbable tabs-left\">

                            <ul class=\"nav nav-tabs\">

                              <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Travel <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Sport\" data-toggle=\"tab\">Sport <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Apps\" data-toggle=\"tab\">Apps <i class=\"arrow_carrot-right\"></i></a></li>
                              
                              <li><a href=\"#Photography\" data-toggle=\"tab\">Photography <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Music\" data-toggle=\"tab\">Music <i class=\"arrow_carrot-right\"></i></a></li>

                            </ul>

                            <div class=\"tab-content\">

                                <div class=\"tab-pane active\" id=\"Photography\">

                                    <div class=\"col-sm-6 col-xs-12 col-md-3\">

                                            <div class=\"thumbnail\">

                                                <a href=\"single.html\"><img src=\"";
        // line 88
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
        // line 104
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
        // line 120
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
        // line 136
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
        // line 156
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
        // line 172
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
        // line 188
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
        // line 204
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
        // line 224
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
        // line 240
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
        // line 256
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
        // line 272
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
        // line 292
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
        // line 308
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
        // line 324
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
        // line 340
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

                <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

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

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

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

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

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

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

                            </ul>

                        </div>

                    </div>

                    </div>   

                </div>              

            </li>

          <li class=\"dropdown\">

        

\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t";
        // line 575
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t<li><a href=\"";
            // line 576
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\" class=\"inscription\">Deconnexion</a></li>

\t\t ";
        } else {
            // line 578
            echo " 
\t\t\t<li><a href=\"";
            // line 579
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\" class=\"connexion\">Connexion</a></li>
\t\t\t<li><a href=\"";
            // line 580
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\" class=\"connexion\">Inscription</a></li>
\t\t";
        }
        // line 581
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
        // line 629
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t";
            // line 633
            echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 635
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Mon tableau de bord<i class=\"arrow_carrot-right\"></i></a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une annonce</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une news</a></li>
\t\t\t\t\t\t\t  <li><a href=\"single.html\">Poster une chronique</a></li>
\t\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t\t  <li><a href=\"";
            // line 643
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"";
            // line 646
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\"><i class=\"fa fa-times\"></i></a></li>
\t\t\t\t  
\t\t";
        } else {
            // line 648
            echo " 
\t\t\t";
            // line 651
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
        // line 665
        echo " 

      </ul>

    <!--/.nav-collapse --> 

 ";
        // line 672
        echo "
</nav>

</header>
 
";
        // line 692
        echo "  ";
        
        $__internal_f89931d601f3ee85fc71fb731c7507644845fe487aea3120036d6b01270ffc7b->leave($__internal_f89931d601f3ee85fc71fb731c7507644845fe487aea3120036d6b01270ffc7b_prof);

        
        $__internal_4621c77241147542b9064368c9701ac44ae8d497f1c46a516f1748b46b497154->leave($__internal_4621c77241147542b9064368c9701ac44ae8d497f1c46a516f1748b46b497154_prof);

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
        return array (  794 => 692,  787 => 672,  779 => 665,  760 => 651,  757 => 648,  751 => 646,  745 => 643,  734 => 635,  730 => 633,  726 => 629,  676 => 581,  671 => 580,  667 => 579,  664 => 578,  658 => 576,  654 => 575,  416 => 340,  397 => 324,  378 => 308,  359 => 292,  336 => 272,  317 => 256,  298 => 240,  279 => 224,  256 => 204,  237 => 188,  218 => 172,  199 => 156,  176 => 136,  157 => 120,  138 => 104,  119 => 88,  65 => 39,  25 => 1,);
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
                <div class='bounce3'></div>
            </div>
            </div>
        </div>
    </div> 
     -->

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

      <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\" title=\"logo\"><img src=\"{{ asset ('assets/images/logo.png') }}\" alt=\"logo\" /></a> </div>

    <div class=\"navbar-collapse collapse pull-left\">

      <ul class=\"nav navbar-nav menu\" id=\"menu\">

        <!-- <li class=\"dropdown\">  class=\"dropdown-toggle\"--><li><a href=\"#\" role=\"button\" aria-expanded=\"false\">Accueil</a></li>

            <!-- TO DELETE -->
            <!-- <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"index.html\">Home 1</a></li>
                <li><a href=\"index-2.html\">Home 2</a></li>
            </ul> 
        </li> -->

        <li class=\"dropdown mega-dropdown\">

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">News <span class=\"caret\"></span></a>

            <div class=\"dropdown-menu\">

                <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"tabbable tabs-left\">

                            <ul class=\"nav nav-tabs\">

                              <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Travel <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Sport\" data-toggle=\"tab\">Sport <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Apps\" data-toggle=\"tab\">Apps <i class=\"arrow_carrot-right\"></i></a></li>
                              
                              <li><a href=\"#Photography\" data-toggle=\"tab\">Photography <i class=\"arrow_carrot-right\"></i></a></li>

                              <li><a href=\"#Music\" data-toggle=\"tab\">Music <i class=\"arrow_carrot-right\"></i></a></li>

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

                <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>               

                <div class=\"dropdown-menu\">

                    <div class=\"container\">

                    <div class=\"mega-dropdown-menu\">

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

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

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

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

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Categories</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\">Photography </a></li>

                                <li><a href=\"#\">Travel </a></li>

                                <li><a href=\"#\">Music </a></li>

                                <li><a href=\"#\">LifeStyle </a></li>

                                <li><a href=\"#\">Apps </a></li>

                                <li><a href=\"#\">Business </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-xs-12 col-sm-6 sub-menu\">

                            <h3>Social Menu</h3>

                            <ul class=\"list-unstyled\">

                              <li><a href=\"#\"><i class=\"fa fa-facebook-square\"></i> Facebook </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\"></i> Google Plus </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i> Twitter </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-pinterest-square\"></i> Pinterest </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i> Linkedin </a></li>

                                <li><a href=\"#\"><i class=\"fa fa-tumblr-square\"></i> Tumblr </a></li>

                            </ul>

                        </div>

                        <div class=\"col-md-3 col-sm-6 sub-menu hidden-xs\">

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

                        <div class=\"col-md-3 col-sm-6 sub-menu  hidden-xs\">

                            <h3>About Us</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lectus congue mi viverra congue in sed leo.</p>

                            <br/>

                            <ul class=\"list-inline store-icon\">

                              <li><a href=\"\"><i class=\"fa fa-android\"></i> Google Play</a></li>

                              <li><a href=\"\"><i class=\"fa fa-apple\"></i> Apple Store</a></li>

                            </ul>

                        </div>

                    </div>

                    </div>   

                </div>              

            </li>

          <li class=\"dropdown\">

        

\t\t<li><a href=\"contact.html\">Contact</a></li>
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
\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">{{user_manager.username}} <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t <li class=\"active\"><a href=\"#Travel\" data-toggle=\"tab\">Mon tableau de bord<i class=\"arrow_carrot-right\"></i></a></li>
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

      </ul>

    <!--/.nav-collapse --> 

 {# </div>#}

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
  ", "header.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\header.html.twig");
    }
}
