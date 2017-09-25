<?php

/* index.html.twig */
class __TwigTemplate_2e8568aa0402e5bd49f2d13a2daf36dc699ab5b5bd06752f3ae0448ac6f3e015 extends Twig_Template
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

  <div class=\"feature-posts-grid\" id=\"feature-posts-grid\">
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/association.jpg"), "html", null, true);
        echo "\" alt=\"Canan Digital Photography\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces");
        echo "\" title=\"Canan Digital Photography\">Associations</a></h3>
       ";
        // line 11
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/news.jpg"), "html", null, true);
        echo "\" alt=\"Travel The World\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Travel The World\">News</a></h3>
       ";
        // line 17
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/petites-annonces.jpg"), "html", null, true);
        echo "\" alt=\"Google Play Music\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces");
        echo "\" title=\"Google play Music\">Petites annonces</a></h3>
      ";
        // line 23
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/chronique.png"), "html", null, true);
        echo "\" alt=\"Best Mobile Apps\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Mobile Apps\">Chroniques</a></h3>
       ";
        // line 29
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/partenaire.jpg"), "html", null, true);
        echo "\" alt=\"gallery\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Partenaires</a></h3>
       ";
        // line 35
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post7.png"), "html", null, true);
        echo "\" alt=\"Best Feature Products\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Feature Products\">Contact</a></h3>
      ";
        // line 41
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/about-us.jpg"), "html", null, true);
        echo "\" alt=\"Tablet Vs SmartPhones\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Tablet Vs SmartPhones\">Qui sommes-nous ?</a></h3>
       ";
        // line 47
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/post.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
          <div class=\"author-info\">
            <ul class=\"list-inline\">
              <li>
                <div class=\"icon-box\"><img src=\"";
        // line 62
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
        // line 89
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
        // line 109
        echo "        
           
     <div class=\"clearfix\"></div>
      </div>
     
      <aside class=\"col-md-4 col-lg-4\">
                 
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Annonces récentes </div>
              
              
               <div class=\"panel-body\">
                <form action=\"#\" method=\"post\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </span> </div>
                </form>
              </div>
              
              
              ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo " 
               <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
            echo "\" alt=\"author\" /></a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 138
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
        // line 143
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
        // line 154
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
        // line 163
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
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">Évaluateurs Tourisme et Handicap : Pourquoi pas vous ?</a></h3>
                <p> Le Comité Régional du Tourisme et la DIRECCTE Auvergne-Rhône-Alpes recherchent des évaluateurs tourisme et handicap.
                    Vous cherchez à agir en faveur des personnes en situation de handicap ? Devenez évaluateur de la marque nationale.
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
        // line 189
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
        // line 198
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
        // line 209
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
        // line 224
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
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/post-2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      
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
                    
            ";
        // line 276
        echo "            <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Chroniques</div>
              
              <div class=\"panel-body\">
                <form action=\"#\" method=\"post\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                    </span> </div>
                </form>
              </div>
              
              <div class=\"panel-body nopadding\">
                                                   
                   ";
        // line 292
        $this->loadTemplate("aside.html.twig", "index.html.twig", 292)->display($context);
        echo "  
                   ";
        // line 294
        echo "               
              </div>
            </div>
          </div>
        ";
        // line 299
        echo "        </div>
      </aside>
    </div>
    <h2 class=\"heading\">Annonces </h2>
   
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        
       <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"><a href=\"#\"><img src=\"";
        // line 310
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
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla.</p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
                
       <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"><a href=\"#\"><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/m1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a></div>
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
        // line 358
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla. </p>
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
        return array (  489 => 358,  467 => 339,  454 => 329,  432 => 310,  419 => 299,  413 => 294,  409 => 292,  391 => 276,  361 => 248,  334 => 224,  316 => 209,  302 => 198,  290 => 189,  272 => 174,  258 => 163,  246 => 154,  233 => 143,  219 => 138,  212 => 136,  204 => 133,  178 => 109,  157 => 89,  128 => 62,  121 => 58,  108 => 47,  102 => 43,  98 => 41,  92 => 37,  88 => 35,  82 => 31,  78 => 29,  72 => 25,  68 => 23,  64 => 21,  59 => 19,  55 => 17,  49 => 13,  45 => 11,  41 => 9,  36 => 7,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\index.html.twig");
    }
}
