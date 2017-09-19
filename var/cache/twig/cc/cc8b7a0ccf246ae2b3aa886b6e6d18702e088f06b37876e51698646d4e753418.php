<?php

/* index.html.twig */
class __TwigTemplate_69b2314802b243bd233ea03a5e9fc90fadb1db2ffae68096bdd7bc5bb1900d58 extends Twig_Template
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
        $__internal_75ed8ed009c07dc779bb5d0ae849009450573460f8347e3e3cc26b521886149f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ed8ed009c07dc779bb5d0ae849009450573460f8347e3e3cc26b521886149f->enter($__internal_75ed8ed009c07dc779bb5d0ae849009450573460f8347e3e3cc26b521886149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_c4a195cd9292b09289c985cb8b37b622942b7fe358e2ea3ef2ba6f63235a06c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a195cd9292b09289c985cb8b37b622942b7fe358e2ea3ef2ba6f63235a06c8->enter($__internal_c4a195cd9292b09289c985cb8b37b622942b7fe358e2ea3ef2ba6f63235a06c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75ed8ed009c07dc779bb5d0ae849009450573460f8347e3e3cc26b521886149f->leave($__internal_75ed8ed009c07dc779bb5d0ae849009450573460f8347e3e3cc26b521886149f_prof);

        
        $__internal_c4a195cd9292b09289c985cb8b37b622942b7fe358e2ea3ef2ba6f63235a06c8->leave($__internal_c4a195cd9292b09289c985cb8b37b622942b7fe358e2ea3ef2ba6f63235a06c8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc03c1c43960737a9c2e74851cfd5b9ace37fd456a1438c21f90ef623135cc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc03c1c43960737a9c2e74851cfd5b9ace37fd456a1438c21f90ef623135cc56->enter($__internal_fc03c1c43960737a9c2e74851cfd5b9ace37fd456a1438c21f90ef623135cc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9eec10250a1697990d9eed0987e66dd9116db6b5f4cb8fc365d6347af37a98ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eec10250a1697990d9eed0987e66dd9116db6b5f4cb8fc365d6347af37a98ec->enter($__internal_9eec10250a1697990d9eed0987e66dd9116db6b5f4cb8fc365d6347af37a98ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    

<section id=\"feature-posts\" class=\"section\">
  <div class=\"feature-posts-grid\" id=\"feature-posts-grid\">
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post1.png"), "html", null, true);
        echo "\" alt=\"Canan Digital Photography\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Canan Digital Photography</a></h3>
        <p>Photography</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post5.png"), "html", null, true);
        echo "\" alt=\"Travel The World\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Travel The World\">Travel The World</a></h3>
        <p>Travel</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post6.png"), "html", null, true);
        echo "\" alt=\"Google Play Music\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Google play Music\">Google Play Music</a></h3>
        <p>Music</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post8.png"), "html", null, true);
        echo "\" alt=\"Best Mobile Apps\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Mobile Apps\">Best Mobile Apps</a></h3>
        <p>apps</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post3.png"), "html", null, true);
        echo "\" alt=\"gallery\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Digital LifeStyle</a></h3>
        <p>LifeStyle</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post4.png"), "html", null, true);
        echo "\" alt=\"Free Business Plan\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Free Business Plan\">Free Business Plan </a></h3>
        <p>Business</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post7.png"), "html", null, true);
        echo "\" alt=\"Best Feature Products\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Feature Products\">Best Feature Products</a></h3>
        <p>Products</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/feature-posts/feature-post2.png"), "html", null, true);
        echo "\" alt=\"Tablet Vs SmartPhones\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Tablet Vs SmartPhones\">Tablet Vs SmartPhones</a></h3>
        <p>SmartPhones</p>
      </div>
    </article>
  </div>
</section>
<section class=\"content\">
  <div class=\"container\">
    <h2 class=\"heading\">What's New</h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <article class=\"post\">
          <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/post.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
          <div class=\"author-info\">
            <ul class=\"list-inline\">
              <li>
                <div class=\"icon-box\"><img src=\"";
        // line 69
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
            <h3><a href=\"single.html\">The Heading Text Size Should Match With the Size Of The Image</a></h3>
            <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Market Research</a> </div>
            <ul class=\"list-inline tags\">
              <li><a href=\"#\">Photography</a></li>
              <li><a href=\"#\">Products</a></li>
              <li><a href=\"#\">Marketing</a></li>
              <li><a href=\"#\">Business</a></li>
              <li><a href=\"#\">Photoshop</a></li>
              <li><a href=\"#\">LifeStyle</a></li>
            </ul>
            <a class=\"btn btn-default btn-lg\" href=\"#\" role=\"button\">Read More</a> </div>
        </article>
        <div class=\"clearfix\"></div>
      </div>
      <aside class=\"col-md-4 col-lg-4\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Recent Articles</div>
              <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
        echo "\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is long Blog Heading Text Size for recent articles</a></h4>
                    <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
                  </div>
                </div>
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp2.jpg"), "html", null, true);
        echo "\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
                    <p><a href=\"#\">Photography</a> &bull; 3 hours ago</p>
                  </div>
                </div>
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp3.jpg"), "html", null, true);
        echo "\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
                    <p><a href=\"#\">Products</a> &bull; 2 hours ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Categories</div>
              <div class=\"panel-body nopadding\">
                <div class=\"list-group\"> <a href=\"#\" class=\"list-group-item\">LifeStyle</a> <a href=\"#\" class=\"list-group-item\">SmartPhones</a> <a href=\"#\" class=\"list-group-item\">Business</a> <a href=\"#\" class=\"list-group-item\">Graphic Design</a> <a href=\"#\" class=\"list-group-item\">Agriculture</a> <a href=\"#\" class=\"list-group-item\">Music</a> <a href=\"#\" class=\"list-group-item\">Travel</a> </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div id=\"parallax-1\" class=\"bgParallax\" data-speed=\"15\">
          <div class=\"color-overlay black\">
            <h3><span>Hot News:</span> The Heading Text Size Should Match With the Size Of The Image</h3>
          </div>
        </div>
      </div>
    </div>
    <h2 class=\"heading\">Travel</h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <div class=\"row\">
          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 166
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
              <div class=\"post-type post-audio\">
                <iframe width=\"100\" height=\"200\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/201003535&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true\"></iframe>
              </div>
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
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Audio Post</a> </div>
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
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Archives</div>
              <div class=\"panel-body nopadding\">
                <div class=\"list-group\"> <a href=\"#\" class=\"list-group-item\">January 2014</a> <a href=\"#\" class=\"list-group-item\">February 2014</a> <a href=\"#\" class=\"list-group-item\">March 2014</a> <a href=\"#\" class=\"list-group-item\">April 2014</a> <a href=\"#\" class=\"list-group-item\">May 2014</a> </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
    <h2 class=\"heading\">Music</h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 250
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
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. </p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"";
        // line 277
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
                    <div class=\"info\">
                      <p>Comments:</p>
                      <strong>127</strong></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
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
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Subscribe us</div>
              <div class=\"panel-body\">
                <form action=\"#\" method=\"post\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"@ Email\">
                  </div>
                  <div class=\"form-group\">
                    <button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
<section class=\"sponsor\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2 class=\"heading\">Our Sponsor</h2>
        <div id=\"sponsor-carousel\">
          <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sponsor/themeforest.png"), "html", null, true);
        echo "\" alt=\"themeforest\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sponsor/themesafari.png"), "html", null, true);
        echo "\" alt=\"themesafari\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sponsor/mirchu-net.png"), "html", null, true);
        echo "\" alt=\"mirchu-net\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sponsor/smashing-magazine.png"), "html", null, true);
        echo "\" alt=\"smashing-magazine\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sponsor/behance.png"), "html", null, true);
        echo "\" alt=\"behance\"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->

";
        
        $__internal_9eec10250a1697990d9eed0987e66dd9116db6b5f4cb8fc365d6347af37a98ec->leave($__internal_9eec10250a1697990d9eed0987e66dd9116db6b5f4cb8fc365d6347af37a98ec_prof);

        
        $__internal_fc03c1c43960737a9c2e74851cfd5b9ace37fd456a1438c21f90ef623135cc56->leave($__internal_fc03c1c43960737a9c2e74851cfd5b9ace37fd456a1438c21f90ef623135cc56_prof);

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
        return array (  472 => 365,  468 => 364,  464 => 363,  460 => 362,  456 => 361,  369 => 277,  339 => 250,  252 => 166,  214 => 131,  204 => 124,  194 => 117,  143 => 69,  136 => 65,  119 => 51,  110 => 45,  101 => 39,  92 => 33,  83 => 27,  74 => 21,  65 => 15,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}

    

<section id=\"feature-posts\" class=\"section\">
  <div class=\"feature-posts-grid\" id=\"feature-posts-grid\">
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post1.png') }}\" alt=\"Canan Digital Photography\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Canan Digital Photography</a></h3>
        <p>Photography</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post5.png') }}\" alt=\"Travel The World\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Travel The World\">Travel The World</a></h3>
        <p>Travel</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post6.png') }}\" alt=\"Google Play Music\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Google play Music\">Google Play Music</a></h3>
        <p>Music</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post8.png') }}\" alt=\"Best Mobile Apps\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Mobile Apps\">Best Mobile Apps</a></h3>
        <p>apps</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post3.png') }}\" alt=\"gallery\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Canan Digital Photography\">Digital LifeStyle</a></h3>
        <p>LifeStyle</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post4.png') }}\" alt=\"Free Business Plan\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Free Business Plan\">Free Business Plan </a></h3>
        <p>Business</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post7.png') }}\" alt=\"Best Feature Products\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Best Feature Products\">Best Feature Products</a></h3>
        <p>Products</p>
      </div>
    </article>
    <article class=\"col-md-12 col-sm-12 nopadding item\"> <a href=\"single.html\" class=\"thumbnail\"> <img src=\"{{ asset ('assets/images/feature-posts/feature-post2.png') }}\" alt=\"Tablet Vs SmartPhones\"> </a>
      <div class=\"feature-text\">
        <h3><a href=\"single.html\" title=\"Tablet Vs SmartPhones\">Tablet Vs SmartPhones</a></h3>
        <p>SmartPhones</p>
      </div>
    </article>
  </div>
</section>
<section class=\"content\">
  <div class=\"container\">
    <h2 class=\"heading\">What's New</h2>
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
            <h3><a href=\"single.html\">The Heading Text Size Should Match With the Size Of The Image</a></h3>
            <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Market Research</a> </div>
            <ul class=\"list-inline tags\">
              <li><a href=\"#\">Photography</a></li>
              <li><a href=\"#\">Products</a></li>
              <li><a href=\"#\">Marketing</a></li>
              <li><a href=\"#\">Business</a></li>
              <li><a href=\"#\">Photoshop</a></li>
              <li><a href=\"#\">LifeStyle</a></li>
            </ul>
            <a class=\"btn btn-default btn-lg\" href=\"#\" role=\"button\">Read More</a> </div>
        </article>
        <div class=\"clearfix\"></div>
      </div>
      <aside class=\"col-md-4 col-lg-4\">
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Recent Articles</div>
              <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"{{ asset ('assets/images/post/rp1.jpg') }}\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is long Blog Heading Text Size for recent articles</a></h4>
                    <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
                  </div>
                </div>
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"{{ asset ('assets/images/post/rp2.jpg') }}\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
                    <p><a href=\"#\">Photography</a> &bull; 3 hours ago</p>
                  </div>
                </div>
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"{{ asset ('assets/images/post/rp3.jpg') }}\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
                    <p><a href=\"#\">Products</a> &bull; 2 hours ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Categories</div>
              <div class=\"panel-body nopadding\">
                <div class=\"list-group\"> <a href=\"#\" class=\"list-group-item\">LifeStyle</a> <a href=\"#\" class=\"list-group-item\">SmartPhones</a> <a href=\"#\" class=\"list-group-item\">Business</a> <a href=\"#\" class=\"list-group-item\">Graphic Design</a> <a href=\"#\" class=\"list-group-item\">Agriculture</a> <a href=\"#\" class=\"list-group-item\">Music</a> <a href=\"#\" class=\"list-group-item\">Travel</a> </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div id=\"parallax-1\" class=\"bgParallax\" data-speed=\"15\">
          <div class=\"color-overlay black\">
            <h3><span>Hot News:</span> The Heading Text Size Should Match With the Size Of The Image</h3>
          </div>
        </div>
      </div>
    </div>
    <h2 class=\"heading\">Travel</h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
        <div class=\"row\">
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
                <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Featured image</a> </div>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </article>
          </div>
          <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
            <article class=\"post\">
              <div class=\"post-type post-audio\">
                <iframe width=\"100\" height=\"200\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/201003535&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true\"></iframe>
              </div>
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
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Audio Post</a> </div>
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
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Archives</div>
              <div class=\"panel-body nopadding\">
                <div class=\"list-group\"> <a href=\"#\" class=\"list-group-item\">January 2014</a> <a href=\"#\" class=\"list-group-item\">February 2014</a> <a href=\"#\" class=\"list-group-item\">March 2014</a> <a href=\"#\" class=\"list-group-item\">April 2014</a> <a href=\"#\" class=\"list-group-item\">May 2014</a> </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
    <h2 class=\"heading\">Music</h2>
    <div class=\"row\">
      <div class=\"col-md-8 col-lg-8\">
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
                    <div class=\"info\">
                      <p>Comments:</p>
                      <strong>127</strong></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. </p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
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
                    <div class=\"info\">
                      <p>Comments:</p>
                      <strong>127</strong></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
              <div class=\"caption\">
                <h3 class=\"md-heading\"><a href=\"#\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
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
        <div class=\"row\">
          <div class=\"col-sm-6 col-md-12 col-lg-12\">
            <div class=\"panel panel-default theme-panel\">
              <div class=\"panel-heading\">Subscribe us</div>
              <div class=\"panel-body\">
                <form action=\"#\" method=\"post\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"@ Email\">
                  </div>
                  <div class=\"form-group\">
                    <button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
<section class=\"sponsor\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2 class=\"heading\">Our Sponsor</h2>
        <div id=\"sponsor-carousel\">
          <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('assets/images/sponsor/themeforest.png') }}\" alt=\"themeforest\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('assets/images/sponsor/themesafari.png') }}\" alt=\"themesafari\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('assets/images/sponsor/mirchu-net.png') }}\" alt=\"mirchu-net\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('assets/images/sponsor/smashing-magazine.png') }}\" alt=\"smashing-magazine\"></a></div>
          <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('assets/images/sponsor/behance.png') }}\" alt=\"behance\"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->

{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\index.html.twig");
    }
}
