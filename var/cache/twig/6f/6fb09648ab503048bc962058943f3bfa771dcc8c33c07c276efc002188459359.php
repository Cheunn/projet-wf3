<?php

/* single_annonce.html.twig */
class __TwigTemplate_11a60b595798266b89ab0f14bbaf062aca1bf8c761dd713f6f9b9e72510b2bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "single_annonce.html.twig", 1);
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
        $__internal_7a7c78645c0c5f0cc49ca679f38b28f07c61bbc3e7d98e733d9aebe6b92798e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7c78645c0c5f0cc49ca679f38b28f07c61bbc3e7d98e733d9aebe6b92798e6->enter($__internal_7a7c78645c0c5f0cc49ca679f38b28f07c61bbc3e7d98e733d9aebe6b92798e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "single_annonce.html.twig"));

        $__internal_ee48dcf323bb40967ff0bfaebd32ec8b7612e3cf71f236492a652a920e389aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee48dcf323bb40967ff0bfaebd32ec8b7612e3cf71f236492a652a920e389aa1->enter($__internal_ee48dcf323bb40967ff0bfaebd32ec8b7612e3cf71f236492a652a920e389aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "single_annonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7c78645c0c5f0cc49ca679f38b28f07c61bbc3e7d98e733d9aebe6b92798e6->leave($__internal_7a7c78645c0c5f0cc49ca679f38b28f07c61bbc3e7d98e733d9aebe6b92798e6_prof);

        
        $__internal_ee48dcf323bb40967ff0bfaebd32ec8b7612e3cf71f236492a652a920e389aa1->leave($__internal_ee48dcf323bb40967ff0bfaebd32ec8b7612e3cf71f236492a652a920e389aa1_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_865bad622823abf7c2375c97907012ea0eb0a46b3668f3770ae3ffc35a12e282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865bad622823abf7c2375c97907012ea0eb0a46b3668f3770ae3ffc35a12e282->enter($__internal_865bad622823abf7c2375c97907012ea0eb0a46b3668f3770ae3ffc35a12e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_19a25ae32719b638e45475814a5ac25d27217285ca3ec594e778ef530cf56f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a25ae32719b638e45475814a5ac25d27217285ca3ec594e778ef530cf56f2f->enter($__internal_19a25ae32719b638e45475814a5ac25d27217285ca3ec594e778ef530cf56f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "                 

<section class=\"innercontent\">

    <div class=\"container\">
    <h2 class=\"heading\">Annonce</h2>
   
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                <article class=\"post\">
                   <div class=\"post-type post-img\">
                   <a href=\"#\"><img src=\"assets/images/post/post-2.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> 
                   </div>
                    <div class=\"author-info\">
                       <ul class=\"list-inline\">
                        <li>
                            <div class=\"icon-box\"><img src=\"assets/images/post/author.png\" class=\"img-responsive\" alt=\"image post\" /></div>
                            <div class=\"info\">
                            <p>Posted by:</p>
                            <a href=\"author.html\">Waqas Hussain</a>
                            </div>    
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
            <h3><a href=\"#\"> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "post_title", array()), "html", null, true);
        echo "  </a></h3>
            <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "paragraphe_1", array()), "html", null, true);
        echo "</p>
                
            <hr>
            
            <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "paragraphe_2", array()), "html", null, true);
        echo "</p>
               <ul class=\"list-inline img-grid\">
                   <li class=\"col-sm-4 col-md-4 col-lg-4\"><a href=\"#\"><img src=\"assets/images/feature-posts/feature-post6.png\" class=\"img-responsive\" alt=\"\" /> </a></li>
                   <li class=\"col-sm-4 col-md-4 col-lg-4\"><a href=\"#\"><img src=\"assets/images/feature-posts/feature-post1.png\" class=\"img-responsive\" alt=\"\" /> </a></li>
                   <li class=\"col-sm-4 col-md-4 col-lg-4\"><a href=\"#\"><img src=\"assets/images/feature-posts/feature-post8.png\" class=\"img-responsive\" alt=\"\" /> </a></li>
               </ul>
            
            
        
            <blockquote>
                  <h6>Description de l'annonceur : </h6>
                <em>\" Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. \"</em>
            </blockquote>
             
          </div>
              <div class=\"line-block\">
                   
              <ul class=\"list-inline tags\">
                 <li><a href=\"#\">Test</a></li>
                  <li><a href=\"#\">Products</a></li>
                  <li><a href=\"#\">Marketing</a></li>
                  <li><a href=\"#\">Business</a></li>
                  <li><a href=\"#\">Photoshop</a></li>
                  <li><a href=\"#\">LifeStyle</a></li>

              </ul>
               </div>
                    <div class=\"share-this\">
                        <div class=\"row\">
                            <div class=\"col-xs-5 col-sm-4 col-md-5 col-lg-4\"><p>Share this post with:</p></div>
                                <div class=\"col-xs-7 col-sm-8 col-md-7 col-lg-8 nopadding\">
                                    <ul class=\"list-inline\">
                                     
                                          <li><a href=\"#\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                          <li><a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                          <li><a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class=\"related-post\">
                        <div class=\"row\">
                            <div class=\"col-md-12\"><h4>Annonces similaires</h4></div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                  <a href=\"#\"><img src=\"assets/images/post/related-post1.png\" alt=\"related post\"></a>
                                  <div class=\"caption\">
                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>
                                  </div>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <a href=\"#\"><img src=\"assets/images/post/related-post2.png\" alt=\"related post\"></a>
                                  <div class=\"caption\">
                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>
                                  </div>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"assets/images/post/related-post3.png\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class=\"comment-list\">

                 

                    </div>
                     <div class=\"comment-form\">
                        <h4>Send A Message</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                           <div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Full Name:\">

                           </div>

                                    </div>

                            </div>

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">
                       
                                    </div>
                                    </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                            <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number:\">
                          </div>
                            </div>
                                    </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>
                          </div>
                          <button type=\"submit\" class=\"btn btn-default\">Post Reply</button>
                        </form>
                    </div>
                  
                </article>
            <div class=\"clearfix\"></div>
            </div>
            <aside class=\"col-md-4 col-lg-4\">
           \t
                <div class=\"row\">
                <div class=\"col-sm-6 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Annonces récentes</div>
                    <div class=\"panel-body nopadding\">
              ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo " 
               <div class=\"panel-body nopadding\">
                <div class=\"media\">
                  <div class=\"media-left\"> <a href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_annonce", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
            echo "\" alt=\"author\" /></a> </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading\"><a href=\"";
            // line 190
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
        // line 196
        echo "                </div>
                           </div>
";
        // line 213
        echo "                       
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
                
                <div class=\"col-sm-6 col-md-12 col-lg-12\">
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
        
        $__internal_19a25ae32719b638e45475814a5ac25d27217285ca3ec594e778ef530cf56f2f->leave($__internal_19a25ae32719b638e45475814a5ac25d27217285ca3ec594e778ef530cf56f2f_prof);

        
        $__internal_865bad622823abf7c2375c97907012ea0eb0a46b3668f3770ae3ffc35a12e282->leave($__internal_865bad622823abf7c2375c97907012ea0eb0a46b3668f3770ae3ffc35a12e282_prof);

    }

    public function getTemplateName()
    {
        return "single_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 213,  271 => 196,  257 => 190,  250 => 188,  242 => 185,  105 => 51,  98 => 47,  94 => 46,  49 => 3,  40 => 2,  11 => 1,);
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
    <h2 class=\"heading\">Annonce</h2>
   
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                <article class=\"post\">
                   <div class=\"post-type post-img\">
                   <a href=\"#\"><img src=\"assets/images/post/post-2.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> 
                   </div>
                    <div class=\"author-info\">
                       <ul class=\"list-inline\">
                        <li>
                            <div class=\"icon-box\"><img src=\"assets/images/post/author.png\" class=\"img-responsive\" alt=\"image post\" /></div>
                            <div class=\"info\">
                            <p>Posted by:</p>
                            <a href=\"author.html\">Waqas Hussain</a>
                            </div>    
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
            <h3><a href=\"#\"> {{ annonce.post_title }}  </a></h3>
            <p>{{ annonce.paragraphe_1 }}</p>
                
            <hr>
            
            <p>{{ annonce.paragraphe_2 }}</p>
               <ul class=\"list-inline img-grid\">
                   <li class=\"col-sm-4 col-md-4 col-lg-4\"><a href=\"#\"><img src=\"assets/images/feature-posts/feature-post6.png\" class=\"img-responsive\" alt=\"\" /> </a></li>
                   <li class=\"col-sm-4 col-md-4 col-lg-4\"><a href=\"#\"><img src=\"assets/images/feature-posts/feature-post1.png\" class=\"img-responsive\" alt=\"\" /> </a></li>
                   <li class=\"col-sm-4 col-md-4 col-lg-4\"><a href=\"#\"><img src=\"assets/images/feature-posts/feature-post8.png\" class=\"img-responsive\" alt=\"\" /> </a></li>
               </ul>
            
            
        
            <blockquote>
                  <h6>Description de l'annonceur : </h6>
                <em>\" Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. \"</em>
            </blockquote>
             
          </div>
              <div class=\"line-block\">
                   
              <ul class=\"list-inline tags\">
                 <li><a href=\"#\">Test</a></li>
                  <li><a href=\"#\">Products</a></li>
                  <li><a href=\"#\">Marketing</a></li>
                  <li><a href=\"#\">Business</a></li>
                  <li><a href=\"#\">Photoshop</a></li>
                  <li><a href=\"#\">LifeStyle</a></li>

              </ul>
               </div>
                    <div class=\"share-this\">
                        <div class=\"row\">
                            <div class=\"col-xs-5 col-sm-4 col-md-5 col-lg-4\"><p>Share this post with:</p></div>
                                <div class=\"col-xs-7 col-sm-8 col-md-7 col-lg-8 nopadding\">
                                    <ul class=\"list-inline\">
                                     
                                          <li><a href=\"#\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
                                          <li><a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                                          <li><a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class=\"related-post\">
                        <div class=\"row\">
                            <div class=\"col-md-12\"><h4>Annonces similaires</h4></div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                  <a href=\"#\"><img src=\"assets/images/post/related-post1.png\" alt=\"related post\"></a>
                                  <div class=\"caption\">
                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>
                                  </div>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <a href=\"#\"><img src=\"assets/images/post/related-post2.png\" alt=\"related post\"></a>
                                  <div class=\"caption\">
                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>
                                  </div>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"assets/images/post/related-post3.png\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class=\"comment-list\">

                 

                    </div>
                     <div class=\"comment-form\">
                        <h4>Send A Message</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                           <div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Full Name:\">

                           </div>

                                    </div>

                            </div>

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">
                       
                                    </div>
                                    </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                            <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number:\">
                          </div>
                            </div>
                                    </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>
                          </div>
                          <button type=\"submit\" class=\"btn btn-default\">Post Reply</button>
                        </form>
                    </div>
                  
                </article>
            <div class=\"clearfix\"></div>
            </div>
            <aside class=\"col-md-4 col-lg-4\">
           \t
                <div class=\"row\">
                <div class=\"col-sm-6 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Annonces récentes</div>
                    <div class=\"panel-body nopadding\">
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
{#
                       <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Chroniques</div>

                    <div class=\"panel-body nopadding\">

{#                      include 'aside.html.twig'%} 

                    </div>
                </div>
               </div>
#}
                       
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
                
                <div class=\"col-sm-6 col-md-12 col-lg-12\">
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
", "single_annonce.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet2\\templates\\single_annonce.html.twig");
    }
}
