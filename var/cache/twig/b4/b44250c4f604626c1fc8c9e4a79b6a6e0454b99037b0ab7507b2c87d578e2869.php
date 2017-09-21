<?php

/* header.html.twig */
class __TwigTemplate_6bba5d8b3eac32269b762bb379bd1ed123b48866507be1868169cafbb925b609 extends Twig_Template
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
        $__internal_d68befbe244f36848b49917540cecefacb361a9ee3990fc77dc366e65eb0e7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68befbe244f36848b49917540cecefacb361a9ee3990fc77dc366e65eb0e7b0->enter($__internal_d68befbe244f36848b49917540cecefacb361a9ee3990fc77dc366e65eb0e7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_a1937eceab8ac0f73b05ccec719090c6204e5b260700ec6272227fa12da02f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1937eceab8ac0f73b05ccec719090c6204e5b260700ec6272227fa12da02f01->enter($__internal_a1937eceab8ac0f73b05ccec719090c6204e5b260700ec6272227fa12da02f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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
        // line 79
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
        // line 88
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
        // line 96
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
        // line 104
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
        // line 114
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
        // line 122
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
        // line 130
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
        // line 138
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
        // line 148
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
        // line 156
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
        // line 164
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
        // line 172
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
        // line 182
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
        // line 190
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
        // line 198
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
        // line 206
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
                        <div class=\"col-md-4 col-xs-12 col-sm-6 sub-menu\">
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
        // line 393
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t<li><a href=\"";
            // line 394
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\" class=\"inscription\">Deconnexion</a></li>

\t\t ";
        } else {
            // line 396
            echo " 
\t\t\t<li><a href=\"";
            // line 397
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\" class=\"connexion\">Connexion</a></li>
\t\t\t<li><a href=\"";
            // line 398
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\" class=\"connexion\">Inscription</a></li>
\t\t";
        }
        // line 399
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
        // line 447
        if ($this->getAttribute(($context["user_manager"] ?? $this->getContext($context, "user_manager")), "user", array())) {
            echo " 
\t\t\t";
            // line 451
            echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 453
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
            // line 461
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t  </li>
\t\t\t\t  <li><a href=\"";
            // line 464
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\"><i class=\"fa fa-times\"></i></a></li>
\t\t\t\t  
\t\t";
        } else {
            // line 466
            echo " 
\t\t\t";
            // line 469
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
        // line 483
        echo " 
      </ul>
    <!--/.nav-collapse --> 
 
</header>
 
";
        // line 504
        echo "  ";
        
        $__internal_d68befbe244f36848b49917540cecefacb361a9ee3990fc77dc366e65eb0e7b0->leave($__internal_d68befbe244f36848b49917540cecefacb361a9ee3990fc77dc366e65eb0e7b0_prof);

        
        $__internal_a1937eceab8ac0f73b05ccec719090c6204e5b260700ec6272227fa12da02f01->leave($__internal_a1937eceab8ac0f73b05ccec719090c6204e5b260700ec6272227fa12da02f01_prof);

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
        return array (  605 => 504,  597 => 483,  578 => 469,  575 => 466,  569 => 464,  563 => 461,  552 => 453,  548 => 451,  544 => 447,  494 => 399,  489 => 398,  485 => 397,  482 => 396,  476 => 394,  472 => 393,  282 => 206,  271 => 198,  260 => 190,  249 => 182,  236 => 172,  225 => 164,  214 => 156,  203 => 148,  190 => 138,  179 => 130,  168 => 122,  157 => 114,  144 => 104,  133 => 96,  122 => 88,  110 => 79,  65 => 39,  25 => 1,);
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
                        <div class=\"col-md-4 col-xs-12 col-sm-6 sub-menu\">
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
  ", "header.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\header.html.twig");
    }
}
