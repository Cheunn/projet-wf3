<?php

/* annonces.html.twig */
class __TwigTemplate_7503304688bd29b0c0617c403fa56232918637c5deca0e34acf00ddb2965238c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "annonces.html.twig", 1);
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
        $__internal_adfd65a4e6fd7712be4cc064f3dbb5f60d940af468f0baca132d588653113d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfd65a4e6fd7712be4cc064f3dbb5f60d940af468f0baca132d588653113d87->enter($__internal_adfd65a4e6fd7712be4cc064f3dbb5f60d940af468f0baca132d588653113d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces.html.twig"));

        $__internal_a5fee087069bb30b284d18aa590350168268c1cc5aae546c57c9cca1c366bcb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fee087069bb30b284d18aa590350168268c1cc5aae546c57c9cca1c366bcb7->enter($__internal_a5fee087069bb30b284d18aa590350168268c1cc5aae546c57c9cca1c366bcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfd65a4e6fd7712be4cc064f3dbb5f60d940af468f0baca132d588653113d87->leave($__internal_adfd65a4e6fd7712be4cc064f3dbb5f60d940af468f0baca132d588653113d87_prof);

        
        $__internal_a5fee087069bb30b284d18aa590350168268c1cc5aae546c57c9cca1c366bcb7->leave($__internal_a5fee087069bb30b284d18aa590350168268c1cc5aae546c57c9cca1c366bcb7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_86287b895f19ea98ee655184f85345948890702295bb991ff0445df7118b7998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86287b895f19ea98ee655184f85345948890702295bb991ff0445df7118b7998->enter($__internal_86287b895f19ea98ee655184f85345948890702295bb991ff0445df7118b7998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df1b7aab8c2b5945b29ae8b702208648fe40ae4699d36a50127f9013ed4ce439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1b7aab8c2b5945b29ae8b702208648fe40ae4699d36a50127f9013ed4ce439->enter($__internal_df1b7aab8c2b5945b29ae8b702208648fe40ae4699d36a50127f9013ed4ce439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<section class=\"innercontent\">
    <div class=\"container\">
    <h2 class=\"heading\">Annonces - Rubriques</h2>
         <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo " 
                <article class=\"post vt-post\">
                     \t\t
                    <div class=\"row\">
                        \t
                                  <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
                    \t\t\t<div class=\"post-type post-img\">
                                   <a href=\"#\"><img src=\"assets/images/post/m1.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> 
                                   </div>
                    \t\t\t<div class=\"author-info author-info-2\">
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
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "post_title", array()), "html", null, true);
            echo "</a></h3>
            <p> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "paragraphe_1", array()), "html", null, true);
            echo "</p>
             <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a>
          </div>

          </div>
          </div>
                 </article>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            
               \t<div class=\"pagination-wrap\">
                  \t\t<ul class=\"pagination\">
\t\t\t\t\t<li>
\t\t\t\t\t  <a href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Previous</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t<li><a href=\"#\">...</a></li>
\t\t\t\t\t<li><a href=\"#\">17</a></li>
\t\t\t\t\t<li  class=\"active\">
\t\t\t\t\t  <a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Next</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
            <div class=\"clearfix\"></div>
            </div>
            <aside class=\"col-md-4 col-lg-4\">
            \t
                <div class=\"row\">
            ";
        // line 86
        echo "               </div>
                      <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Recent Articles</div>
                    <div class=\"panel-body nopadding\">
                      <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"#\">
          <img src=\"assets/images/post/rp1.jpg\" alt=\"author\" />
        </a>
      </div>
      <div class=\"media-body\">
        <h4 class=\"media-heading\"><a href=\"#\">this is long Blog Heading Text Size for recent articles</a></h4>
       <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
      </div>
    </div>
    <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"#\">
          <img src=\"assets/images/post/rp2.jpg\" alt=\"author\" />
        </a>
      </div>
      <div class=\"media-body\">
      <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
        <p><a href=\"#\">Photography</a> &bull; 3 hours ago</p>
      </div>
    </div>
                        <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"#\">
          <img src=\"assets/images/post/rp3.jpg\" alt=\"author\" />
        </a>
      </div>
      <div class=\"media-body\">
        <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
        <p><a href=\"#\">Products</a> &bull; 2 hours ago</p>
      </div>
    </div>
                    </div>
                </div>
                           </div>
                       <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Categories</div>
                    <div class=\"panel-body nopadding\">
                      <div class=\"list-group\">
                      <a href=\"#\" class=\"list-group-item\">LifeStyle</a>
  <a href=\"#\" class=\"list-group-item\">SmartPhones</a>
  <a href=\"#\" class=\"list-group-item\">Business</a>
  <a href=\"#\" class=\"list-group-item\">Graphic Design</a>
  <a href=\"#\" class=\"list-group-item\">Agriculture</a>
                   <a href=\"#\" class=\"list-group-item\">Music</a>
  <a href=\"#\" class=\"list-group-item\">Travel</a>
</div>
                    </div>
                </div>
               </div>
                      
                       <div class=\"col-sm-12 col-md-12 col-lg-12\">
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
                       <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Archives</div>
                    <div class=\"panel-body nopadding\">
                      <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item\">January 2014</a>
                        <a href=\"#\" class=\"list-group-item\">February 2014</a>
                        <a href=\"#\" class=\"list-group-item\">March 2014</a>
                        <a href=\"#\" class=\"list-group-item\">April 2014</a>
                        <a href=\"#\" class=\"list-group-item\">May 2014</a>
                </div>
                    </div>
                </div>
               </div>
               </div>
         
            </aside>
           </div>      
      </div>
    </section>
";
        
        $__internal_df1b7aab8c2b5945b29ae8b702208648fe40ae4699d36a50127f9013ed4ce439->leave($__internal_df1b7aab8c2b5945b29ae8b702208648fe40ae4699d36a50127f9013ed4ce439_prof);

        
        $__internal_86287b895f19ea98ee655184f85345948890702295bb991ff0445df7118b7998->leave($__internal_86287b895f19ea98ee655184f85345948890702295bb991ff0445df7118b7998_prof);

    }

    public function getTemplateName()
    {
        return "annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 86,  110 => 46,  96 => 38,  90 => 37,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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

<section class=\"innercontent\">
    <div class=\"container\">
    <h2 class=\"heading\">Annonces - Rubriques</h2>
         <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                {% for annonce in annonces %} 
                <article class=\"post vt-post\">
                     \t\t
                    <div class=\"row\">
                        \t
                                  <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
                    \t\t\t<div class=\"post-type post-img\">
                                   <a href=\"#\"><img src=\"assets/images/post/m1.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> 
                                   </div>
                    \t\t\t<div class=\"author-info author-info-2\">
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
            <h3 class=\"md-heading\"><a href=\"{{ path('single_annonce', {id: annonce.id_post}) }}\">{{ annonce.post_title }}</a></h3>
            <p> {{ annonce.paragraphe_1 }}</p>
             <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a>
          </div>

          </div>
          </div>
                 </article>
                 {% endfor %}
            
               \t<div class=\"pagination-wrap\">
                  \t\t<ul class=\"pagination\">
\t\t\t\t\t<li>
\t\t\t\t\t  <a href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Previous</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t<li><a href=\"#\">...</a></li>
\t\t\t\t\t<li><a href=\"#\">17</a></li>
\t\t\t\t\t<li  class=\"active\">
\t\t\t\t\t  <a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Next</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
            <div class=\"clearfix\"></div>
            </div>
            <aside class=\"col-md-4 col-lg-4\">
            \t
                <div class=\"row\">
            {#    <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Subscribe us</div>
                    <div class=\"panel-body\">
                      <form action=\"#\" method=\"post\">
                      <div class=\"form-group\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"@ Email\">
                        </div>
                       <div class=\"form-group\">
                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Subscribe</button>
                        </div>
                        </form>
                    </div>
                </div>#}
               </div>
                      <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Recent Articles</div>
                    <div class=\"panel-body nopadding\">
                      <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"#\">
          <img src=\"assets/images/post/rp1.jpg\" alt=\"author\" />
        </a>
      </div>
      <div class=\"media-body\">
        <h4 class=\"media-heading\"><a href=\"#\">this is long Blog Heading Text Size for recent articles</a></h4>
       <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
      </div>
    </div>
    <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"#\">
          <img src=\"assets/images/post/rp2.jpg\" alt=\"author\" />
        </a>
      </div>
      <div class=\"media-body\">
      <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
        <p><a href=\"#\">Photography</a> &bull; 3 hours ago</p>
      </div>
    </div>
                        <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"#\">
          <img src=\"assets/images/post/rp3.jpg\" alt=\"author\" />
        </a>
      </div>
      <div class=\"media-body\">
        <h4 class=\"media-heading\"><a href=\"#\">this is Blog Heading Text Size</a></h4>
        <p><a href=\"#\">Products</a> &bull; 2 hours ago</p>
      </div>
    </div>
                    </div>
                </div>
                           </div>
                       <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Categories</div>
                    <div class=\"panel-body nopadding\">
                      <div class=\"list-group\">
                      <a href=\"#\" class=\"list-group-item\">LifeStyle</a>
  <a href=\"#\" class=\"list-group-item\">SmartPhones</a>
  <a href=\"#\" class=\"list-group-item\">Business</a>
  <a href=\"#\" class=\"list-group-item\">Graphic Design</a>
  <a href=\"#\" class=\"list-group-item\">Agriculture</a>
                   <a href=\"#\" class=\"list-group-item\">Music</a>
  <a href=\"#\" class=\"list-group-item\">Travel</a>
</div>
                    </div>
                </div>
               </div>
                      
                       <div class=\"col-sm-12 col-md-12 col-lg-12\">
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
                       <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Archives</div>
                    <div class=\"panel-body nopadding\">
                      <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item\">January 2014</a>
                        <a href=\"#\" class=\"list-group-item\">February 2014</a>
                        <a href=\"#\" class=\"list-group-item\">March 2014</a>
                        <a href=\"#\" class=\"list-group-item\">April 2014</a>
                        <a href=\"#\" class=\"list-group-item\">May 2014</a>
                </div>
                    </div>
                </div>
               </div>
               </div>
         
            </aside>
           </div>      
      </div>
    </section>
{% endblock %}

", "annonces.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\annonces.html.twig");
    }
}
