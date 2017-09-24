<?php

/* annonces.html.twig */
class __TwigTemplate_e33a7a8c5e37cd19d76067ba69e0b9149f609fa9a3b643583b977e883e8bd880 extends Twig_Template
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
        $__internal_d759dad9cc7056bb9f3887916d20b0c8404d45f99965ff35b49bbe9cab5446ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d759dad9cc7056bb9f3887916d20b0c8404d45f99965ff35b49bbe9cab5446ed->enter($__internal_d759dad9cc7056bb9f3887916d20b0c8404d45f99965ff35b49bbe9cab5446ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces.html.twig"));

        $__internal_fb6a843a13584a14d0ae5ecaaa4addc40e808ec08de6caaa8801cebf3ee2cf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6a843a13584a14d0ae5ecaaa4addc40e808ec08de6caaa8801cebf3ee2cf59->enter($__internal_fb6a843a13584a14d0ae5ecaaa4addc40e808ec08de6caaa8801cebf3ee2cf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d759dad9cc7056bb9f3887916d20b0c8404d45f99965ff35b49bbe9cab5446ed->leave($__internal_d759dad9cc7056bb9f3887916d20b0c8404d45f99965ff35b49bbe9cab5446ed_prof);

        
        $__internal_fb6a843a13584a14d0ae5ecaaa4addc40e808ec08de6caaa8801cebf3ee2cf59->leave($__internal_fb6a843a13584a14d0ae5ecaaa4addc40e808ec08de6caaa8801cebf3ee2cf59_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_821ea41695a539a26646d852315b41ed7dc08f4994055c76f1bf495a601aad76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821ea41695a539a26646d852315b41ed7dc08f4994055c76f1bf495a601aad76->enter($__internal_821ea41695a539a26646d852315b41ed7dc08f4994055c76f1bf495a601aad76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eba48c8d8b9eeb448d0a4141080b8c3289ccf843f51f256e4868730df5baf558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba48c8d8b9eeb448d0a4141080b8c3289ccf843f51f256e4868730df5baf558->enter($__internal_eba48c8d8b9eeb448d0a4141080b8c3289ccf843f51f256e4868730df5baf558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                  
                   ";
        // line 137
        echo "        
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
        
        $__internal_eba48c8d8b9eeb448d0a4141080b8c3289ccf843f51f256e4868730df5baf558->leave($__internal_eba48c8d8b9eeb448d0a4141080b8c3289ccf843f51f256e4868730df5baf558_prof);

        
        $__internal_821ea41695a539a26646d852315b41ed7dc08f4994055c76f1bf495a601aad76->leave($__internal_821ea41695a539a26646d852315b41ed7dc08f4994055c76f1bf495a601aad76_prof);

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
        return array (  188 => 137,  138 => 86,  110 => 46,  96 => 38,  90 => 37,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
                  
                   {# {% for categoryAnnonce in categoriesAnnonce %} 
                     <a href=\"{{ path('annonce_rubrique', {rubrique: category.name}) }}\" class=\"list-group-item\">{{ category.name }}</a>
                    {% endfor %}#}
        
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

", "annonces.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\annonces.html.twig");
    }
}
