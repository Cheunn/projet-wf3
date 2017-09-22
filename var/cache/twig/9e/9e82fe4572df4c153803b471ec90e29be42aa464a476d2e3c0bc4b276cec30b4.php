<?php

/* chroniques.html.twig */
class __TwigTemplate_163e1bb570f009b4c1ee0b7d1059541bd0e0b3b976b42ffef4ac81385c311a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "chroniques.html.twig", 1);
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
        $__internal_7e51310a21b4154cbba220801dca7b34831ecd2fc69db8e49fc30be7531d8c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e51310a21b4154cbba220801dca7b34831ecd2fc69db8e49fc30be7531d8c7c->enter($__internal_7e51310a21b4154cbba220801dca7b34831ecd2fc69db8e49fc30be7531d8c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chroniques.html.twig"));

        $__internal_f7cdc00f3d489a1e29847c30ebefe83fe513363cdfbcb4e1ab8edae010d6b96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cdc00f3d489a1e29847c30ebefe83fe513363cdfbcb4e1ab8edae010d6b96f->enter($__internal_f7cdc00f3d489a1e29847c30ebefe83fe513363cdfbcb4e1ab8edae010d6b96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chroniques.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e51310a21b4154cbba220801dca7b34831ecd2fc69db8e49fc30be7531d8c7c->leave($__internal_7e51310a21b4154cbba220801dca7b34831ecd2fc69db8e49fc30be7531d8c7c_prof);

        
        $__internal_f7cdc00f3d489a1e29847c30ebefe83fe513363cdfbcb4e1ab8edae010d6b96f->leave($__internal_f7cdc00f3d489a1e29847c30ebefe83fe513363cdfbcb4e1ab8edae010d6b96f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_abea865f88455e900a4732e86ce17323c5190783612a054991da74356884e52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abea865f88455e900a4732e86ce17323c5190783612a054991da74356884e52a->enter($__internal_abea865f88455e900a4732e86ce17323c5190783612a054991da74356884e52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53bae1f8add0fea995451797d51324fda88d100e84716cef965c69eb0eea6284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bae1f8add0fea995451797d51324fda88d100e84716cef965c69eb0eea6284->enter($__internal_53bae1f8add0fea995451797d51324fda88d100e84716cef965c69eb0eea6284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<section class=\"innercontent\">
    <div class=\"container\">
        <h2 class=\"heading\">Chronique - XXX</h2>
         <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chroniques"] ?? $this->getContext($context, "chroniques")));
        foreach ($context['_seq'] as $context["_key"] => $context["chronique"]) {
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
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_chronique", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "post_title", array()), "html", null, true);
            echo "</a></h3>
                     <p> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_1", array()), "html", null, true);
            echo "</p>
                      <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a>
                   </div>

                 </div>
              </div>
                 </article>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chronique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        // line 85
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
        <p><a href=\"#\">Chroniques</a> &bull; 2 hours ago</p>
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
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " 
                     <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chronique_rubrique", array("rubrique" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        
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
        
        $__internal_53bae1f8add0fea995451797d51324fda88d100e84716cef965c69eb0eea6284->leave($__internal_53bae1f8add0fea995451797d51324fda88d100e84716cef965c69eb0eea6284_prof);

        
        $__internal_abea865f88455e900a4732e86ce17323c5190783612a054991da74356884e52a->leave($__internal_abea865f88455e900a4732e86ce17323c5190783612a054991da74356884e52a_prof);

    }

    public function getTemplateName()
    {
        return "chroniques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 135,  192 => 133,  186 => 132,  137 => 85,  109 => 45,  95 => 37,  89 => 36,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
        <h2 class=\"heading\">Chronique - XXX</h2>
         <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                {% for chronique in chroniques %} 
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
                     <h3 class=\"md-heading\"><a href=\"{{ path('single_chronique', {id: chronique.id_post}) }}\"> {{chronique.post_title}}</a></h3>
                     <p> {{chronique.paragraph_1}}</p>
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
        <p><a href=\"#\">Chroniques</a> &bull; 2 hours ago</p>
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
                  
                    {% for category in categories %} 
                     <a href=\"{{ path('chronique_rubrique', {rubrique: category.name}) }}\" class=\"list-group-item\">{{ category.name }}</a>
                    {% endfor %}
        
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

", "chroniques.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\chroniques.html.twig");
    }
}
