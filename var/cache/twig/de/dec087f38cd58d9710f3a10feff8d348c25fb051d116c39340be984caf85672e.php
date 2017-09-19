<?php

/* user/profilUser.html.twig */
class __TwigTemplate_321e2c70a197652d749e8d284acb9ae0106129375b26dae265590adada392235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/profilUser.html.twig", 1);
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
        $__internal_b47be18febc1185ead6565b5621453da89c21961ca95f8c4516a1da6a8beb464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47be18febc1185ead6565b5621453da89c21961ca95f8c4516a1da6a8beb464->enter($__internal_b47be18febc1185ead6565b5621453da89c21961ca95f8c4516a1da6a8beb464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profilUser.html.twig"));

        $__internal_dc979bfbce12b930c956a8328be211e3dcb39846699f053370edbfd24bcd2326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc979bfbce12b930c956a8328be211e3dcb39846699f053370edbfd24bcd2326->enter($__internal_dc979bfbce12b930c956a8328be211e3dcb39846699f053370edbfd24bcd2326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profilUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47be18febc1185ead6565b5621453da89c21961ca95f8c4516a1da6a8beb464->leave($__internal_b47be18febc1185ead6565b5621453da89c21961ca95f8c4516a1da6a8beb464_prof);

        
        $__internal_dc979bfbce12b930c956a8328be211e3dcb39846699f053370edbfd24bcd2326->leave($__internal_dc979bfbce12b930c956a8328be211e3dcb39846699f053370edbfd24bcd2326_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_22b46f17ca40258257e8d4c4bcd114d1faff35acab0654b6cad21abc36efc72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b46f17ca40258257e8d4c4bcd114d1faff35acab0654b6cad21abc36efc72e->enter($__internal_22b46f17ca40258257e8d4c4bcd114d1faff35acab0654b6cad21abc36efc72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2eb1472bb2b5cb81c0d1b4a458d830aa44f7ee3ae78f52ec7430eb8176ab78e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb1472bb2b5cb81c0d1b4a458d830aa44f7ee3ae78f52ec7430eb8176ab78e1->enter($__internal_2eb1472bb2b5cb81c0d1b4a458d830aa44f7ee3ae78f52ec7430eb8176ab78e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "                   

<section class=\"innercontent\">

    <div class=\"container\">

    \t ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 9, $this->getSourceContext()); })()), "admin", array())) {
            // line 10
            echo "                    <h2 class=\"heading\">MON TABLEAU DE BORD </h2>
         ";
        } else {
            // line 12
            echo "                     <h2 class=\"heading\">CONSULTATION PROFIL  </h2>
         ";
        }
        // line 14
        echo "       
   

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author_1.png "), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            <p>user:</p>

                           <a href=\"author.html\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " </a>

                            </div>    

                        </li>

                        <li>

                            <div class=\"icon-box\"><i class=\"fa fa-calendar\"></i></div>

                            <div class=\"info\">

                            <p>Date d'inscription :</p>

                                <strong>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->getSourceContext()); })()), "date_create", array()), "html", null, true);
        echo " </strong></div>

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

             ";
        // line 85
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user_manager"]) || array_key_exists("user_manager", $context) ? $context["user_manager"] : (function () { throw new Twig_Error_Runtime('Variable "user_manager" does not exist.', 85, $this->getSourceContext()); })()), "admin", array())) {
            // line 86
            echo "          
                    <div class=\"caption\">

            
                    <div class=\"line-block\">

                    

              <ul class=\"list-inline tags administration\">

                 <li><a href=\"#\">Photography</a></li>

                  <li><a href=\"#\">Products</a></li>

                  <li><a href=\"#\">Marketing</a></li>

                  <li><a href=\"#\">Business</a></li>

                  <li><a href=\"#\">Photoshop</a></li>

                  <li><a href=\"#\">LifeStyle</a></li>

              </ul>

                    </div>

                 
             ";
        }
        // line 114
        echo "             
                    <div class=\"related-post\">

                        <div class=\"row\">

                            <div class=\"col-md-12\"><h4>Related Topics</h4></div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                  <a href=\"#\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post1.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post2.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post3.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class=\"comment-count\">

                        <h4>32 Comments</h4>

                        <p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

                    </div>

                    <div class=\"comment-list\">

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                            </a>

                          </div>

                          <div class=\"media-body\">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                              

                          </div>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                            </a>

</div>

                          <div class=\"media-body\">

                            

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                            <div class=\"media nested-first\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                                

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

                            <div class=\"media\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

</div>

                        </div>

                    </div>

                    <div class=\"comment-form\">

                        <h4>Post A Reply</h4>

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

                          <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" placeholder=\"Enter Address:\">

                          </div>

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

                </div>

               </div>

                       <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Recent Articles</div>

                    <div class=\"panel-body nopadding\">

                      <div class=\"media\">

      <div class=\"media-left\">

        <a href=\"#\">

          <img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp1.jpg"), "html", null, true);
        echo "\" alt=\"author\" />

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

          <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp2.jpg "), "html", null, true);
        echo "\" alt=\"author\" />

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

          <img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/rp3.jpg "), "html", null, true);
        echo "\" alt=\"author\" />

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

                       <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Chroniques</div>

                     ";
        // line 498
        echo "
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
        
        $__internal_2eb1472bb2b5cb81c0d1b4a458d830aa44f7ee3ae78f52ec7430eb8176ab78e1->leave($__internal_2eb1472bb2b5cb81c0d1b4a458d830aa44f7ee3ae78f52ec7430eb8176ab78e1_prof);

        
        $__internal_22b46f17ca40258257e8d4c4bcd114d1faff35acab0654b6cad21abc36efc72e->leave($__internal_22b46f17ca40258257e8d4c4bcd114d1faff35acab0654b6cad21abc36efc72e_prof);

    }

    public function getTemplateName()
    {
        return "user/profilUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 498,  565 => 469,  540 => 447,  515 => 425,  366 => 279,  333 => 249,  302 => 221,  267 => 189,  232 => 157,  213 => 141,  194 => 125,  181 => 114,  151 => 86,  149 => 85,  112 => 51,  95 => 37,  86 => 31,  67 => 14,  63 => 12,  59 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
                   

<section class=\"innercontent\">

    <div class=\"container\">

    \t {% if user_manager.admin %}
                    <h2 class=\"heading\">MON TABLEAU DE BORD </h2>
         {% else %}
                     <h2 class=\"heading\">CONSULTATION PROFIL  </h2>
         {% endif %}
       
   

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"{{ asset('assets/images/post/author_1.png ') }}\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            <p>user:</p>

                           <a href=\"author.html\">{{user.name}} </a>

                            </div>    

                        </li>

                        <li>

                            <div class=\"icon-box\"><i class=\"fa fa-calendar\"></i></div>

                            <div class=\"info\">

                            <p>Date d'inscription :</p>

                                <strong>{{user.date_create}} </strong></div>

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

             {% if user_manager.admin %}
          
                    <div class=\"caption\">

            
                    <div class=\"line-block\">

                    

              <ul class=\"list-inline tags administration\">

                 <li><a href=\"#\">Photography</a></li>

                  <li><a href=\"#\">Products</a></li>

                  <li><a href=\"#\">Marketing</a></li>

                  <li><a href=\"#\">Business</a></li>

                  <li><a href=\"#\">Photoshop</a></li>

                  <li><a href=\"#\">LifeStyle</a></li>

              </ul>

                    </div>

                 
             {% endif %}
             
                    <div class=\"related-post\">

                        <div class=\"row\">

                            <div class=\"col-md-12\"><h4>Related Topics</h4></div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                  <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post1.png ') }}\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post2.png ') }}\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                    <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post3.png ') }}\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class=\"comment-count\">

                        <h4>32 Comments</h4>

                        <p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

                    </div>

                    <div class=\"comment-list\">

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                            </a>

                          </div>

                          <div class=\"media-body\">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                              

                          </div>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                            </a>

</div>

                          <div class=\"media-body\">

                            

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

                              <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

                                </ul>

                            <div class=\"media nested-first\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                                

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

                            <div class=\"media\">

                              <div class=\"media-left\">

                                <a href=\"#\">

                                  <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

                                </a>

                              </div>

                              <div class=\"media-body\">

                               <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>

                                  <ul class=\"list-inline\">

                                  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

                                  <li>3 hours ago</li>

                                </ul>

                              </div>

</div>

</div>

                        </div>

                    </div>

                    <div class=\"comment-form\">

                        <h4>Post A Reply</h4>

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

                          <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" placeholder=\"Enter Address:\">

                          </div>

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

                </div>

               </div>

                       <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Recent Articles</div>

                    <div class=\"panel-body nopadding\">

                      <div class=\"media\">

      <div class=\"media-left\">

        <a href=\"#\">

          <img src=\"{{ asset('assets/images/post/rp1.jpg') }}\" alt=\"author\" />

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

          <img src=\"{{ asset('assets/images/post/rp2.jpg ') }}\" alt=\"author\" />

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

          <img src=\"{{ asset('assets/images/post/rp3.jpg ') }}\" alt=\"author\" />

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

                       <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                  <div class=\"panel-heading\">Chroniques</div>

                     {# {% include 'aside.html.twig'%} #}

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
", "user/profilUser.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\profilUser.html.twig");
    }
}
