<?php

/* index.html.twig */
class __TwigTemplate_0c6014adf2d775efe677a097209272d0c6417c31f269828ccd58537cac0d9211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "</div> 

<section id=\"feature-posts\" class=\"section\">
  <div class=\"feature-posts-grid\" id=\"feature-posts-grid\">
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post1.png"), "html", null, true);
        echo "\" alt=\"Canan Digital Photography\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces");
        echo "\" title=\"Canan Digital Photography\">Associations</a></h3>
       ";
        // line 12
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post5.png"), "html", null, true);
        echo "\" alt=\"Travel The World\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Travel The World\">News</a></h3>
       ";
        // line 18
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post6.png"), "html", null, true);
        echo "\" alt=\"Google Play Music\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces");
        echo "\" title=\"Google play Music\">Annonces</a></h3>
      ";
        // line 24
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/chronique.jpeg"), "html", null, true);
        echo "\" alt=\"Best Mobile Apps\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Mobile Apps\">Chroniques</a></h3>
       ";
        // line 30
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post3.png"), "html", null, true);
        echo "\" alt=\"gallery\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Partenaires</a></h3>
       ";
        // line 36
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post7.png"), "html", null, true);
        echo "\" alt=\"Best Feature Products\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Feature Products\">Contact</a></h3>
      ";
        // line 42
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post2.png"), "html", null, true);
        echo "\" alt=\"Tablet Vs SmartPhones\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Tablet Vs SmartPhones\">Qui sommes-nous ?</a></h3>
       ";
        // line 48
        echo "      </div>
    </article>
  </div>
</section>
      
<section class=\"content\">
  <div class=\"container\">
    <h2 class=\"heading\">News</h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <article class=\"post\">
          <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/post.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
          <div class=\"author-info\">
            <ul class=\"list-inline\">
              <li>
                <div class=\"icon-box\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>
                <div class=\"info\">
                  <p>Posted by:</p>
                  <a href=\"author.html\">Waqas Hussain</a> </div>
              </li>
              <li>
                <div class=\"icon-box\"><i class=\"fa fa-calendar\"></i></div>
                <div class=\"info\">
                  <p>Posted on:</p>
                  <strong>Mar 21, 2015</strong></div>
              </li>
              <li>
                <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>
                <div class=\"info\">
                  <p>Comments:</p>
                  <strong>127</strong></div>
              </li>
              <li>
                <div class=\"icon-box\"><i class=\"fa fa-eye\"></i></div>
                <div class=\"info\">
                  <p>Total View:</p>
                  <strong>4289</strong></div>
              </li>
            </ul>
          </div>
          <div class=\"caption\">
            ";
        // line 90
        echo "            <h3><a href=\"\">Jeux Paralympiques Paris 2024</a></h3>
            <p>
                Les Mouvements Olympiques et Paralympiques Français ne font qu’un pour la candidature de Paris aux Jeux de 2024. 
                Le Comité Paralympique et Sportif Français (CPSF) et le CNOSF sont présents au Conseil d’Administration de Paris 2024. 
                Marie-Amélie Le Fur, championne Paralympique du 100 m, co-préside la commission des athlètes de Paris 2024 avec un autre champion Olympique, le judoka Teddy Riner. 
                Ils siègent au Conseil d’administration de Paris 2024, tout comme deux autres anciens champions, Marie-José Pérec (athlétisme) représentant le CNOSF et Cyril Moré (escrime en fauteuil) représentant le CPSF.
                <br>(src)  http://paris2024.org/fr/article/lhistoire-des-jeux-paralympiques
            </p>
         
            <ul class=\"list-inline tags\">            
              <li><a href=\"#\">Sport</a></li>
              <li><a href=\"#\">Lifestyle</a></li>
              <li><a href=\"#\">Paris</a></li>
              <li><a href=\"#\">2024</a></li>
              <li><a href=\"#\">Jeux</a></li>
            </ul>
            <a class=\"btn btn-default btn-lg\" href=\"#\" role=\"button\">Read More</a> </div>
        </article>
            
        ";
        // line 110
        echo "        
           
     <div class=\"clearfix\"></div>
      </div>
     
      <aside class=\"col-md-4 col-lg-4\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Annonces récentes </div>
              
              ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo " 
               <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
            echo "\" alt=\"author\" /></a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "post_title", array()), "html", null, true);
            echo "</a></h4>
                    <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
                  </div>
                </div>
               </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                     
            </div>
          </div>  
      </aside>
    </div>
              
    <div class=\"row\">
      <div class=\"col-md-12\">
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/m1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                <div class=\"icon-box\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>
                <div class=\"info\">
                  <p>Posted by:</p>
                  <a href=\"author.html\">Waqas Hussain</a> </div>
              </li>
                </ul>
              </div>
            </div>
              
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">Évaluateurs Tourisme et Handicap : Pourquoi pas vous ?</a></h3>
                <p> Le Comité Régional du Tourisme et la DIRECCTE Auvergne-Rhône-Alpes recherchent des évaluateurs tourisme et handicap.
                    Devenez évaluateur de la marque nationale Tourisme et Handicap en Auvergne-Rhône-Alpes !
                    Vous cherchez à agir en faveur des personnes en situation de handicap ? A favoriser l’accessibilité des sites touristiques ? Devenez évaluateur de la marque nationale.
                    Qu’est ce que la marque Tourisme et Handicap ? 
                    <br> (src) https://www.handirect.fr/evaluateurs-tourisme-et-handicap/
                </p>
                <a class=\"btn btn-default btn-lg\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
      </div>
      <div class=\"col-md-12\">
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/m2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                  <div class=\"icon-box\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>
                  <div class=\"info\">
                  <p>Posted by:</p>
                  <a href=\"author.html\">Waqas Hussain</a> </div>
              </li>
                </ul>
              </div>
            </div>
              
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. </p>
                <a class=\"btn btn-default btn-lg\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
      </div>
    </div>            
                         
    <h2 class=\"heading\">Chroniques </h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <div class=\"row\">
          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/post-1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted by:</p>
                      <a href=\"author.html\">Waqas Hussain</a> </div>
                  </li>
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                </ul>
              </div>
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Featured image</a> </div>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"assets/images/post/post-1.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                    <div class=\"info\">
                      <p>Posted by:</p>
                      <a href=\"author.html\">Waqas Hussain</a> </div>
                  </li>
                </ul>
              </div>
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Featured image</a> </div>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
        </div>
        <div class=\"clearfix\"></div>
      </div>
      <aside class=\"col-md-4 col-lg-4\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Search Post</div>
              <div class=\"panel-body\">
                <form action=\"#\" method=\"post\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </span> </div>
                </form>
              </div>
            </div>
          </div>
          
            ";
        // line 280
        echo "            <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Chroniques</div>
              <div class=\"panel-body nopadding\">
                                 
                   ";
        // line 285
        $this->loadTemplate("aside.html.twig", "index.html.twig", 285)->display($context);
        echo "  
                   ";
        // line 287
        echo "               
              </div>
            </div>
          </div>
        ";
        // line 292
        echo "        </div>
      </aside>
    </div>
    <h2 class=\"heading\">Annonces </h2>
   
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        
       <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/m1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                    <div class=\"info\">
                      <p>Comments:</p>
                      <strong>127</strong></div>
                  </li>
                </ul>
              </div>
            </div>
              
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. </p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
                
       <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/m1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                    <div class=\"info\">
                      <p>Comments:</p>
                      <strong>127</strong></div>
                  </li>
                </ul>
              </div>
            </div>
              
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. </p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
                
                
        <div class=\"pagination-wrap\">
          <ul class=\"pagination\">
            <li> <a href=\"#\" aria-label=\"Previous\"> <span aria-hidden=\"true\">Previous</span> </a> </li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\">2</a></li>
            <li><a href=\"#\">...</a></li>
            <li  class=\"active\"> <a href=\"#\" aria-label=\"Next\"> <span aria-hidden=\"true\">Next</span> </a> </li>
          </ul>
        </div>
        <div class=\"clearfix\"></div>
      </div>
      <aside class=\"col-md-4 col-lg-4\">
           <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Tags</div>
              <div class=\"panel-body\">
                <ul class=\"list-inline tags\">
                  <li><a href=\"#\">LifeStyle</a></li>
                  <li class=\"big\"><a href=\"#\">Music</a></li>
                  <li><a href=\"#\">SmartPhones</a></li>
                  <li><a href=\"#\">Business</a></li>
                  <li><a href=\"#\">Travel</a></li>
                  <li class=\"big\"><a href=\"#\">Business</a></li>
                  <li class=\"small\"><a href=\"#\">LifeStyle</a></li>
                  <li><a href=\"#\">SmartPhones</a></li>
                  <li><a href=\"#\">Fireworks</a></li>
                  <li class=\"big\"><a href=\"#\">Travel</a></li>
                  <li><a href=\"#\">Fireworks</a></li>
                  <li class=\"small\"><a href=\"#\">Music</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>


<!-- Footer -->

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 351,  457 => 332,  444 => 322,  422 => 303,  409 => 292,  403 => 287,  399 => 285,  392 => 280,  323 => 213,  305 => 198,  291 => 187,  279 => 178,  260 => 162,  246 => 151,  234 => 142,  221 => 131,  207 => 126,  200 => 124,  192 => 121,  179 => 110,  158 => 90,  129 => 63,  122 => 59,  109 => 48,  103 => 44,  99 => 42,  93 => 38,  89 => 36,  83 => 32,  79 => 30,  73 => 26,  69 => 24,  65 => 22,  60 => 20,  56 => 18,  50 => 14,  46 => 12,  42 => 10,  37 => 8,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\templates\\index.html.twig");
    }
}
