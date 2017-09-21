<?php

/* index.html.twig */
class __TwigTemplate_733f4c1e9e89bf58aef67e453a76da9651e85327fff8d3c1db71244463e81c03 extends Twig_Template
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
        $__internal_4e3b2405d5377a606d21b49cb319cf6872075ad68745f694a714524b42569f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3b2405d5377a606d21b49cb319cf6872075ad68745f694a714524b42569f73->enter($__internal_4e3b2405d5377a606d21b49cb319cf6872075ad68745f694a714524b42569f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_1ad6f0b285a64b9c6ce993acc5be7da75115c55af196b4467dc0ac67d3c8ba05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad6f0b285a64b9c6ce993acc5be7da75115c55af196b4467dc0ac67d3c8ba05->enter($__internal_1ad6f0b285a64b9c6ce993acc5be7da75115c55af196b4467dc0ac67d3c8ba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3b2405d5377a606d21b49cb319cf6872075ad68745f694a714524b42569f73->leave($__internal_4e3b2405d5377a606d21b49cb319cf6872075ad68745f694a714524b42569f73_prof);

        
        $__internal_1ad6f0b285a64b9c6ce993acc5be7da75115c55af196b4467dc0ac67d3c8ba05->leave($__internal_1ad6f0b285a64b9c6ce993acc5be7da75115c55af196b4467dc0ac67d3c8ba05_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9748c40a72e19da6ab9403a4a70031a10deab0cedb0e997d7e0f9b47523bc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9748c40a72e19da6ab9403a4a70031a10deab0cedb0e997d7e0f9b47523bc2b->enter($__internal_f9748c40a72e19da6ab9403a4a70031a10deab0cedb0e997d7e0f9b47523bc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_598e024d9aa6f6c3ee3d972643f501cb8d41f84e313b081ba41475c00897b3ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598e024d9aa6f6c3ee3d972643f501cb8d41f84e313b081ba41475c00897b3ab->enter($__internal_598e024d9aa6f6c3ee3d972643f501cb8d41f84e313b081ba41475c00897b3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <h2 class=\"heading\">Annonce à la une</h2>
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
            ";
        // line 96
        echo "            <h3><a href=\"\">Test text annonce Size Should Match With the Size Of The Image</a></h3>
            <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Market Research</a> </div>
            <ul class=\"list-inline tags\">
                               
      
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
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
        echo "\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is long Blog Heading Text Size for recent articles</a></h4>
                    <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
                  </div>
                </div>
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp2.jpg"), "html", null, true);
        echo "\" alt=\"author\" /> </a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
                    <p><a href=\"#\">Photography</a> &bull; 3 hours ago</p>
                  </div>
                </div>
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"#\"> <img src=\"";
        // line 133
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
              <div class=\"panel-heading\">Chroniques</div>
              <div class=\"panel-body nopadding\">
               
                  
                   ";
        // line 148
        $this->loadTemplate("aside.html.twig", "index.html.twig", 148)->display($context);
        echo "  
                   
               
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
        // line 172
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
        // line 254
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
        // line 272
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

              <div class=\"post-type post-img\"> <a href=\"";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 1));
        echo "\"><img src=\"assets/images/post/m2.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              
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
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => 8));
        echo "\">The Heading Text Size Should Match</a></h3>
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
        
        $__internal_598e024d9aa6f6c3ee3d972643f501cb8d41f84e313b081ba41475c00897b3ab->leave($__internal_598e024d9aa6f6c3ee3d972643f501cb8d41f84e313b081ba41475c00897b3ab_prof);

        
        $__internal_f9748c40a72e19da6ab9403a4a70031a10deab0cedb0e997d7e0f9b47523bc2b->leave($__internal_f9748c40a72e19da6ab9403a4a70031a10deab0cedb0e997d7e0f9b47523bc2b_prof);

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
        return array (  403 => 301,  381 => 282,  368 => 272,  347 => 254,  262 => 172,  235 => 148,  217 => 133,  207 => 126,  197 => 119,  172 => 96,  143 => 69,  136 => 65,  119 => 51,  110 => 45,  101 => 39,  92 => 33,  83 => 27,  74 => 21,  65 => 15,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"heading\">Annonce à la une</h2>
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
            <h3><a href=\"\">Test text annonce Size Should Match With the Size Of The Image</a></h3>
            <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <div class=\"post-category\"> <a href=\"#\"><span>&nbsp;</span> Market Research</a> </div>
            <ul class=\"list-inline tags\">
                               
      
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
              <div class=\"panel-heading\">Chroniques</div>
              <div class=\"panel-body nopadding\">
               
                  
                   {% include 'aside.html.twig'%}  
                   
               
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
              <div class=\"post-type post-img\"> <a href=\"#\"><img src=\"assets/images/post/post-1.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
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
                <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: 1}) }}\">The Heading Text Size Should Match</a></h3>
                <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. </p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a> </div>
            </div>
          </div>
        </article>
        <article class=\"post vt-post\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">

              <div class=\"post-type post-img\"> <a href=\"{{ path('single_annonce', {id: 1}) }}\"><img src=\"assets/images/post/m2.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> </div>
              
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
                <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: 8} ) }}\">The Heading Text Size Should Match</a></h3>
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
", "index.html.twig", "C:\\xampp\\htdocs\\projet_v2\\templates\\index.html.twig");
    }
}
