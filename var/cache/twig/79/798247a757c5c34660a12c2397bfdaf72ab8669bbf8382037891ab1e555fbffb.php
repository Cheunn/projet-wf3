<?php

/* header.html.twig */
class __TwigTemplate_b2f625c012870f62cb0b48827a5137691629ba5386f8723de1c555f0954e54ed extends Twig_Template
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
        $__internal_e8e9bf071b7048d059f196ba5876316dcde294639120d9397ba5490394ea45c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e9bf071b7048d059f196ba5876316dcde294639120d9397ba5490394ea45c7->enter($__internal_e8e9bf071b7048d059f196ba5876316dcde294639120d9397ba5490394ea45c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_b4ffe40a754ceb625fd98787576cf3ff1d1e90b09d068f6e5b180f17f7345e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ffe40a754ceb625fd98787576cf3ff1d1e90b09d068f6e5b180f17f7345e3a->enter($__internal_b4ffe40a754ceb625fd98787576cf3ff1d1e90b09d068f6e5b180f17f7345e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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
        // line 38
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
        // line 87
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
        // line 103
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
        // line 119
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
        // line 135
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
        // line 155
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
        // line 171
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
        // line 187
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
        // line 203
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
        // line 223
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
        // line 239
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
        // line 255
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
        // line 271
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
        // line 291
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
        // line 307
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
        // line 323
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
        // line 339
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
        // line 574
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 574, $this->getSourceContext()); })()), "user", array())) {
            echo " 
\t\t\t<li><a href=\"";
            // line 575
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
            echo "\" class=\"inscription\">Deconnexion</a></li>

\t\t ";
        } else {
            // line 577
            echo " 
\t\t\t<li><a href=\"";
            // line 578
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("connexion");
            echo "\" class=\"connexion\">Connexion</a></li>
\t\t\t<li><a href=\"";
            // line 579
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
            echo "\" class=\"connexion\">Inscription</a></li>
\t\t";
        }
        // line 580
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 629, $this->getSourceContext()); })()), "user", array())) {
            echo " 
\t\t\t";
            // line 633
            echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 635
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 635, $this->getSourceContext()); })()), "username", array()), "html", null, true);
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

  </div>

</nav>

</header>
 
";
        // line 693
        echo "  ";
        
        $__internal_e8e9bf071b7048d059f196ba5876316dcde294639120d9397ba5490394ea45c7->leave($__internal_e8e9bf071b7048d059f196ba5876316dcde294639120d9397ba5490394ea45c7_prof);

        
        $__internal_b4ffe40a754ceb625fd98787576cf3ff1d1e90b09d068f6e5b180f17f7345e3a->leave($__internal_b4ffe40a754ceb625fd98787576cf3ff1d1e90b09d068f6e5b180f17f7345e3a_prof);

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
        return array (  794 => 693,  779 => 665,  760 => 651,  757 => 648,  751 => 646,  745 => 643,  734 => 635,  730 => 633,  726 => 629,  675 => 580,  670 => 579,  666 => 578,  663 => 577,  657 => 575,  653 => 574,  415 => 339,  396 => 323,  377 => 307,  358 => 291,  335 => 271,  316 => 255,  297 => 239,  278 => 223,  255 => 203,  236 => 187,  217 => 171,  198 => 155,  175 => 135,  156 => 119,  137 => 103,  118 => 87,  64 => 38,  25 => 1,);
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

                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<span class=\"caret\"></span></a>               

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
  ", "header.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\header.html.twig");
    }
}
