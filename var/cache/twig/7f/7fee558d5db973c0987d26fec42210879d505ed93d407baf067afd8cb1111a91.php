<?php

/* index.html.twig */
class __TwigTemplate_d3d4a36a8b92e4ee7ffcc5fa6d00392fa8aea01be1dd3a74a56e5b2d57920d67 extends Twig_Template
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
        $__internal_fb3e899c66c7cf1ac866696bfb0cc347bd48a189beaf061631285adabbfd6227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3e899c66c7cf1ac866696bfb0cc347bd48a189beaf061631285adabbfd6227->enter($__internal_fb3e899c66c7cf1ac866696bfb0cc347bd48a189beaf061631285adabbfd6227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_e98795b642bab6f5745dc753b736bf7f12b13b74e9c169e8dcfb0cf456fe3f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98795b642bab6f5745dc753b736bf7f12b13b74e9c169e8dcfb0cf456fe3f93->enter($__internal_e98795b642bab6f5745dc753b736bf7f12b13b74e9c169e8dcfb0cf456fe3f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3e899c66c7cf1ac866696bfb0cc347bd48a189beaf061631285adabbfd6227->leave($__internal_fb3e899c66c7cf1ac866696bfb0cc347bd48a189beaf061631285adabbfd6227_prof);

        
        $__internal_e98795b642bab6f5745dc753b736bf7f12b13b74e9c169e8dcfb0cf456fe3f93->leave($__internal_e98795b642bab6f5745dc753b736bf7f12b13b74e9c169e8dcfb0cf456fe3f93_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b096ad55b95753184ea52d5434d431ee72c65e3edf35b40b0b3fc052127af952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b096ad55b95753184ea52d5434d431ee72c65e3edf35b40b0b3fc052127af952->enter($__internal_b096ad55b95753184ea52d5434d431ee72c65e3edf35b40b0b3fc052127af952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2e0c45e16993d6f282c572e74dd0efa3a87e58eba26d5646d2e0b43cd5544f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0c45e16993d6f282c572e74dd0efa3a87e58eba26d5646d2e0b43cd5544f03->enter($__internal_2e0c45e16993d6f282c572e74dd0efa3a87e58eba26d5646d2e0b43cd5544f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "</div> 

  <div class=\"feature-posts-grid\" id=\"feature-posts-grid\">
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/association.jpg"), "html", null, true);
        echo "\" alt=\"Canan Digital Photography\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"\" title=\"Canan Digital Photography\">Associations</a></h3>
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
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces");
        echo "\" class=\"thumbnail\"> <img src=\"";
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
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chroniques");
        echo "\" class=\"thumbnail\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/chronique.png"), "html", null, true);
        echo "\" alt=\"Best Mobile Apps\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chroniques");
        echo "\" title=\"Best Mobile Apps\">Chroniques</a></h3>
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
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messProfilToUs");
        echo "\" class=\"thumbnail\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post7.png"), "html", null, true);
        echo "\" alt=\"Best Feature Products\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messProfilToUs");
        echo "\" title=\"Best Feature Products\">Contact</a></h3>
      ";
        // line 41
        echo "      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\" class=\"thumbnail\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/about-us.jpg"), "html", null, true);
        echo "\" alt=\"Tablet Vs SmartPhones\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\" title=\"Tablet Vs SmartPhones\">Qui sommes-nous ?</a></h3>
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
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo " 
               <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
            echo "\" alt=\"author\" /></a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 142
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
        // line 147
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
        // line 158
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
        // line 167
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
        // line 178
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
        // line 193
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
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author.jpg"), "html", null, true);
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
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\">Musique et handicap, c’est possible ?</a></h3>
                <p> Les ateliers avec des personnes handicapées sont très « prenants » ; ils demandent une forte énergie et une grande expérience personnelles… 
                    L’animateur se remet constamment en cause ; 
                    il lui arrive d’être découragé car l’enfant réagit rarement comme il le souhaite ou encore refuse de rentrer dans la « bulle » musicale qu’il a créée. 
                
                    <br> (src) http://stephane.hanquet.fr/surdite/musique-et-handicap-article-ufcv/
                </p>
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
            
        ";
        // line 233
        echo "          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 235
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
            
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
        ";
        // line 258
        echo "               
        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author.jpg"), "html", null, true);
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
              
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
        </div>
        <div class=\"clearfix\"></div>
      </div>
      <aside class=\"col-md-4 col-lg-4\">
        <div class=\"row\">
                    
            ";
        // line 289
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
                <div class=\"list-group\"> 
                  
                    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " 
                        <a href=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chronique_rubrique", array("rubrique" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "        
                </div>
              </div>
            </div>
          </div>
        ";
        // line 315
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
        // line 325
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
        // line 344
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
        // line 354
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
        // line 373
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
        
        $__internal_2e0c45e16993d6f282c572e74dd0efa3a87e58eba26d5646d2e0b43cd5544f03->leave($__internal_2e0c45e16993d6f282c572e74dd0efa3a87e58eba26d5646d2e0b43cd5544f03_prof);

        
        $__internal_b096ad55b95753184ea52d5434d431ee72c65e3edf35b40b0b3fc052127af952->leave($__internal_b096ad55b95753184ea52d5434d431ee72c65e3edf35b40b0b3fc052127af952_prof);

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
        return array (  549 => 373,  527 => 354,  514 => 344,  492 => 325,  480 => 315,  473 => 309,  463 => 307,  457 => 306,  438 => 289,  408 => 261,  403 => 258,  378 => 235,  374 => 233,  352 => 213,  338 => 202,  326 => 193,  308 => 178,  294 => 167,  282 => 158,  269 => 147,  255 => 142,  248 => 140,  240 => 137,  211 => 110,  190 => 90,  161 => 63,  154 => 59,  140 => 47,  136 => 45,  129 => 43,  125 => 41,  121 => 39,  114 => 37,  110 => 35,  104 => 31,  100 => 29,  96 => 27,  89 => 25,  85 => 23,  81 => 21,  74 => 19,  70 => 17,  64 => 13,  60 => 11,  54 => 7,  49 => 4,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
{# Ajout de div julien #}
</div> 

  <div class=\"feature-posts-grid\" id=\"feature-posts-grid\">
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/association.jpg') }}\" alt=\"Canan Digital Photography\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"\" title=\"Canan Digital Photography\">Associations</a></h3>
       {# <p>Photography</p>#}
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/news.jpg') }}\" alt=\"Travel The World\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Travel The World\">News</a></h3>
       {# <p>Travel</p>#}
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"{{ path('annonces')}}\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/petites-annonces.jpg') }}\" alt=\"Google Play Music\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"{{ path('annonces')}}\" title=\"Google play Music\">Petites annonces</a></h3>
      {#  <p>Music</p>#}
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"{{ path('chroniques')}}\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/chronique.png') }}\" alt=\"Best Mobile Apps\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"{{ path('chroniques')}}\" title=\"Best Mobile Apps\">Chroniques</a></h3>
       {# <p>apps</p>#}
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/partenaire.jpg') }}\" alt=\"gallery\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Partenaires</a></h3>
       {# <p>LifeStyle</p>#}
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"{{ path('messProfilToUs') }}\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post7.png') }}\" alt=\"Best Feature Products\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"{{ path('messProfilToUs') }}\" title=\"Best Feature Products\">Contact</a></h3>
      {#  <p>Products</p>#}
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"{{ path('about')}}\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/about-us.jpg') }}\" alt=\"Tablet Vs SmartPhones\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"{{ path('about')}}\" title=\"Tablet Vs SmartPhones\">Qui sommes-nous ?</a></h3>
       {# <p>SmartPhones</p>#}
      </div>
    </article>
  </div>
</section>
      
<section class=\"content\">
  <div class=\"container\">
    <h2 class=\"heading\">News</h2>
                               
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <article class=\"post\">
          <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"{{ asset ('assets/images/post/post.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
          <div class=\"author-info\">
            <ul class=\"list-inline\">
              <li>
                <div class=\"icon-box\"><img src=\"{{ asset ('assets/images/post/author.png') }}\" class=\"img-responsive\" alt=\"image post\" /></div>
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
            {# POUR LE MOMENT ID 1 EN TESTE #}
            <h3><a href=\"\">Jeux Paralympiques Paris 2024</a></h3>
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
            
        {#      #}
        
           
     <div class=\"clearfix\"></div>
      </div>
     
      <aside class=\"col-md-4 col-lg-4\">
         <div class=\"row\">
             
   
                    
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
              
              
              {% for annonce in annonces %} 
               <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"{{ path('single_annonce', {id: annonce.id_post}) }}\"> <img src=\"{{ asset ('assets/images/post/rp1.jpg') }}\" alt=\"author\" /></a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"{{ path('single_annonce', {id: annonce.id_post}) }}\">{{ annonce.post_title }}</a></h4>
                    <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
                  </div>
                </div>
               </div>
              {% endfor %}                     
            </div>
          </div>  
      </aside>
    </div>
              
    <div class=\"row\">
      <div class=\"col-md-12\">
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"{{ asset ('assets/images/post/m1.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                <div class=\"icon-box\"><img src=\"{{ asset ('assets/images/post/author.png') }}\" class=\"img-responsive\" alt=\"image post\" /></div>
                <div class=\"info\">
                  <p>Posted by:</p>
                  <a href=\"author.html\">Waqas Hussain</a> </div>
              </li>
                </ul>
              </div>
            </div>
              
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: 1}) }}\">Évaluateurs Tourisme et Handicap : Pourquoi pas vous ?</a></h3>
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
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"{{ asset ('assets/images/post/m2.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              <div class=\"author-info author-info-2\">
                <ul class=\"list-inline\">
                  <li>
                    <div class=\"info\">
                      <p>Posted on:</p>
                      <strong>Mar 21, 2015</strong></div>
                  </li>
                  <li>
                  <div class=\"icon-box\"><img src=\"{{ asset ('assets/images/post/author.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></div>
                  <div class=\"info\">
                  <p>Posted by:</p>
                  <a href=\"author.html\">Waqas Hussain</a> </div>
              </li>
                </ul>
              </div>
            </div>
              
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
             <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: 1}) }}\">Musique et handicap, c’est possible ?</a></h3>
                <p> Les ateliers avec des personnes handicapées sont très « prenants » ; ils demandent une forte énergie et une grande expérience personnelles… 
                    L’animateur se remet constamment en cause ; 
                    il lui arrive d’être découragé car l’enfant réagit rarement comme il le souhaite ou encore refuse de rentrer dans la « bulle » musicale qu’il a créée. 
                
                    <br> (src) http://stephane.hanquet.fr/surdite/musique-et-handicap-article-ufcv/
                </p>
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
            
        {#{% for chronique in chroniques %}#}
          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"{{ asset ('assets/images/post/post-1.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
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
            
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
        {#{% endfor %}#}
               
        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"{{ asset ('assets/images/post/author.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
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
              
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
        </div>
        <div class=\"clearfix\"></div>
      </div>
      <aside class=\"col-md-4 col-lg-4\">
        <div class=\"row\">
                    
            {#            #}
            <div class=\"col-sm-6 col-md-12 col-lg-12\">
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
                <div class=\"list-group\"> 
                  
                    {% for category in categories %} 
                        <a href=\"{{ path('chronique_rubrique', {rubrique: category.name}) }}\" class=\"list-group-item\">{{ category.name }}</a>
                    {% endfor %}
        
                </div>
              </div>
            </div>
          </div>
        {#            #}
        </div>
      </aside>
    </div>
    <h2 class=\"heading\">Annonces </h2>
   
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"><a href=\"#\"><img src=\"{{ asset ('assets/images/post/m1.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
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
                <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: 1}) }}\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla.</p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
                
       <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"><a href=\"#\"><img src=\"{{ asset ('assets/images/post/m1.jpg') }}\" class=\"img-responsive\" alt=\"image post\" /></a></div>
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
                <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: 1}) }}\">The Heading Text Size Should Match</a></h3>
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

{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\index.html.twig");
    }
}
