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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2beb8f049fc9b90c686cf3e3d03be145dda70359ee46e2229e0fe7aae7ac4e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2beb8f049fc9b90c686cf3e3d03be145dda70359ee46e2229e0fe7aae7ac4e81->enter($__internal_2beb8f049fc9b90c686cf3e3d03be145dda70359ee46e2229e0fe7aae7ac4e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profilUser.html.twig"));

        $__internal_5177fb89d0e8a8024f80580373da656fbc6229a125bf31a6d1241679e4919998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5177fb89d0e8a8024f80580373da656fbc6229a125bf31a6d1241679e4919998->enter($__internal_5177fb89d0e8a8024f80580373da656fbc6229a125bf31a6d1241679e4919998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profilUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2beb8f049fc9b90c686cf3e3d03be145dda70359ee46e2229e0fe7aae7ac4e81->leave($__internal_2beb8f049fc9b90c686cf3e3d03be145dda70359ee46e2229e0fe7aae7ac4e81_prof);

        
        $__internal_5177fb89d0e8a8024f80580373da656fbc6229a125bf31a6d1241679e4919998->leave($__internal_5177fb89d0e8a8024f80580373da656fbc6229a125bf31a6d1241679e4919998_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc682cbe6bb5ef830860ee0033799ff43a53b646397579b4bef98246dca2726a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc682cbe6bb5ef830860ee0033799ff43a53b646397579b4bef98246dca2726a->enter($__internal_dc682cbe6bb5ef830860ee0033799ff43a53b646397579b4bef98246dca2726a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_058e7b1fec53b8196729205906c6ba93a36cc41555bfa8b79ba6ebf177439b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058e7b1fec53b8196729205906c6ba93a36cc41555bfa8b79ba6ebf177439b4e->enter($__internal_058e7b1fec53b8196729205906c6ba93a36cc41555bfa8b79ba6ebf177439b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "                   

<section class=\"innercontent\">

    <div class=\"container\">

    \t
                   

   

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author_1.png "), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            

                           <a href=\"author.html\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->getSourceContext()); })()), "date_create", array()), "html", null, true);
        echo " </strong></div>
                        </li>

                        

                         <li>

                             <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>

                             <div class=\"info\">

                             <p>Note</p>
                                 <strong>4.5</strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>4289</strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>4289</strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>4289</strong></div>
                        </li>

                       </ul>

                    </div>
                        
             <div class=\"caption\"><div class=\"line-block\">
                    <ul class=\"list-inline tags\">                                      
                       <!-- <li onclick=\"afficher_div('IdModifierProfil');\"><a  href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProfil");
        echo "\">Modifier Profil </a></li> -->
                       <li><a  href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProfil");
        echo "\">Modifier Profil </a></li>
                        <li onclick=\"afficher_div('IdGererAnnonces');\"><a href=\"#\">Gerer mes Annonces</a></li>
                        <li onclick=\"afficher_div('IdGererChronique');\"><a href=\"#\">Gerer mes chroniques</a></li>                   
                                  
                  
                    </ul>
                </div></div>
                        
                        

           
             
                    <div id=\"IdGererAnnonces\" class=\"related-post\" >

                        <div class=\"row\">

                            <div class=\"col-md-12\"><h4></h4></div>

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                  <a href=\"#\"><img src=\"";
        // line 109
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
        // line 125
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
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post3.png "), "html", null, true);
        echo "\" alt=\"related post\"></a>

                                  <div class=\"caption\">

                                    <a href=\"#\">Cras sit amet nibh libero, in gravida nulla</a>

                                  </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    
                                    
                    <div id=\"IdProfilBlockAvis\" class=\"comment-list \">
                        
\t\t\t<div class=\"comment-count \">

\t\t\t\t<h4>32 Avis</h4>

\t\t\t\t<p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

\t\t\t</div>
\t\t\t

\t\t\t<div class=\"media\">

\t\t\t\t<div class=\"media-left\">

\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
        echo "\" alt=\"placeholder image\">

\t\t\t\t\t</a>

\t\t\t\t</div>

\t\t\t\t<div class=\"media-body\">

\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

\t\t\t\t\t  <ul class=\"list-inline\">

\t\t\t\t\t\t  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

\t\t\t\t\t\t  <li>3 hours ago</li>

\t\t\t\t\t\t  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

\t\t\t\t\t\t</ul>

\t\t\t\t  

\t\t\t\t</div>

\t\t\t</div>


                    </div>
                                    
                    <div id=\"IdProfilBlockComments\" class=\"comment-list \">
                        
                        <div class=\"comment-count \">

                        <h4>32 Comments</h4>

                        <p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"";
        // line 220
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
        // line 252
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
        // line 280
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
        // line 310
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

                    <div id=\"IdModifierProfil\" class=\"comment-form\">

                        <h4>Enntrez votre Message</h4>
                         <form  class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" >   
      
\t\t
         <div  id=\"role\" class=\"hidden\"  style=\"display:none;\"><input type=\"text\" name=\"role\"   value=\"";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 344, $this->getSourceContext()); })()), "role", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 345, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 346, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Nom de l'association\" value=\"";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 347, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"";
        // line 348
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 348, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 349, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none; text-align: center\">
        
                 <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 355, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "\"> 
       
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"";
        // line 359
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 359, $this->getSourceContext()); })()), "civility", array()), "html", null, true);
        echo "\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <!--<input type=\"file\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar (JPG, PNG ou GIF | max. 15 Ko)\" value=\"";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 368, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"> -->
            
                <small class=\"\">Avatar(JPG, PNG ou GIF | max. 15 Ko) : </small> 
                <input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\">
                ";
        // line 373
        echo "         
        </div>
\t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 376, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 377, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
        echo "\">
            
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 380, $this->getSourceContext()); })()), "town", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"";
        // line 382
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 382, $this->getSourceContext()); })()), "url_web_orga", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 383, $this->getSourceContext()); })()), "url_fb", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 384, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "\">description</textarea></div>
\t\t
        <div class=\"form-group\"><input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"Register Now\"></div>

    </form>

                    </div>

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

      
           </div>

       

      </div>

    </section>

    
";
        
        $__internal_058e7b1fec53b8196729205906c6ba93a36cc41555bfa8b79ba6ebf177439b4e->leave($__internal_058e7b1fec53b8196729205906c6ba93a36cc41555bfa8b79ba6ebf177439b4e_prof);

        
        $__internal_dc682cbe6bb5ef830860ee0033799ff43a53b646397579b4bef98246dca2726a->leave($__internal_dc682cbe6bb5ef830860ee0033799ff43a53b646397579b4bef98246dca2726a_prof);

    }

    // line 412
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3967a32a73bc62e1aacaebdc9eae85dab0609ff4ab267ec63a8451eee65ba7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3967a32a73bc62e1aacaebdc9eae85dab0609ff4ab267ec63a8451eee65ba7e1->enter($__internal_3967a32a73bc62e1aacaebdc9eae85dab0609ff4ab267ec63a8451eee65ba7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc291d31f662b8b866cd578f6f33454ba769b3cf61ba51c1806754193ab66100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc291d31f662b8b866cd578f6f33454ba769b3cf61ba51c1806754193ab66100->enter($__internal_cc291d31f662b8b866cd578f6f33454ba769b3cf61ba51c1806754193ab66100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 413
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t 
        <script type=\"text/javascript\">
                
            
        
               
                 
            function afficher_div(id)
            {
                 console.log(id);
                 // #IdProfilBlockComments, #IdGererAnnonces, #IdModifierProfil, #IdProfilBlockAvis,  #IdGererChronique     
                 id1 = 'IdProfilBlockComments';id2 = 'IdModifierProfil';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique';;
                       \$('#IdGererAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdGererAnnonces') 
                    {   
                        id1 = 'IdProfilBlockComments';id2 = 'IdModifierProfil';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique'; id='IdGererAnnonces'; }
                    
                if (id == 'IdProfilBlockComments') 
                    {   
                        id1 = 'IdGererAnnonces';id2 = 'IdModifierProfil';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdModifierProfil') 
                {
             
                      id1 = 'IdProfilBlockComments';id2 = 'IdGererAnnonces';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique';id='IdModifierProfil';

                     if (\$('#role').val() == 'user') 
                        {\t
                                    \$('.user-element').show();
                                    \$('.commun-element').show();
                        } else 
                        {
                                    \$('.commun-element').show();
                                    \$('.asso-element').show();
                        }
                }
                    
                if (id == 'IdProfilBlockAvis') 
                {    
                        id1 = 'IdProfilBlockComments';id2 = 'IdGererAnnonces';id3 = 'IdModifierProfil';id4 = 'IdGererChronique';id='IdProfilBlockAvis'; }
                    
                if (id == 'IdGererChronique') 
                    {    
                        id1 = 'IdProfilBlockComments';id2 = 'IdGererAnnonces';id3 = 'IdModifierProfil';id4 = 'IdProfilBlockAvis';id='IdGererChronique'; }
                    
                    
                    
                      document.getElementById(id).style.display = 'block';
                      document.getElementById(id1).style.display = 'none';
                       document.getElementById(id2).style.display = 'none';
                        document.getElementById(id3).style.display = 'none';
                         document.getElementById(id4).style.display = 'none';
                         
              
                      
                       console.log('fin');
           
           
            }
                  /*
                   * 
                   * 
                   if (document.getElementById(id).style.display == 'none')
                  {
                       document.getElementById(id).style.display = 'block';
                  }
                  else
                  {
                       document.getElementById(id).style.display = 'none';
                  }
                }
                 */
           
\t</script>
";
        
        $__internal_cc291d31f662b8b866cd578f6f33454ba769b3cf61ba51c1806754193ab66100->leave($__internal_cc291d31f662b8b866cd578f6f33454ba769b3cf61ba51c1806754193ab66100_prof);

        
        $__internal_3967a32a73bc62e1aacaebdc9eae85dab0609ff4ab267ec63a8451eee65ba7e1->leave($__internal_3967a32a73bc62e1aacaebdc9eae85dab0609ff4ab267ec63a8451eee65ba7e1_prof);

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
        return array (  561 => 413,  552 => 412,  515 => 384,  511 => 383,  507 => 382,  502 => 380,  496 => 377,  492 => 376,  487 => 373,  480 => 368,  468 => 359,  461 => 355,  452 => 349,  448 => 348,  444 => 347,  440 => 346,  436 => 345,  432 => 344,  395 => 310,  362 => 280,  331 => 252,  296 => 220,  248 => 175,  211 => 141,  192 => 125,  173 => 109,  148 => 87,  144 => 86,  102 => 47,  86 => 34,  77 => 28,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
                   

<section class=\"innercontent\">

    <div class=\"container\">

    \t
                   

   

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"{{ asset('assets/images/post/author_1.png ') }}\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            

                           <a href=\"author.html\">{{user.name}} </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>{{user.date_create}} </strong></div>
                        </li>

                        

                         <li>

                             <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>

                             <div class=\"info\">

                             <p>Note</p>
                                 <strong>4.5</strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>4289</strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>4289</strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>4289</strong></div>
                        </li>

                       </ul>

                    </div>
                        
             <div class=\"caption\"><div class=\"line-block\">
                    <ul class=\"list-inline tags\">                                      
                       <!-- <li onclick=\"afficher_div('IdModifierProfil');\"><a  href=\"{{ path('updateProfil') }}\">Modifier Profil </a></li> -->
                       <li><a  href=\"{{ path('updateProfil') }}\">Modifier Profil </a></li>
                        <li onclick=\"afficher_div('IdGererAnnonces');\"><a href=\"#\">Gerer mes Annonces</a></li>
                        <li onclick=\"afficher_div('IdGererChronique');\"><a href=\"#\">Gerer mes chroniques</a></li>                   
                                  
                  
                    </ul>
                </div></div>
                        
                        

           
             
                    <div id=\"IdGererAnnonces\" class=\"related-post\" >

                        <div class=\"row\">

                            <div class=\"col-md-12\"><h4></h4></div>

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
                    
                                    
                    <div id=\"IdProfilBlockAvis\" class=\"comment-list \">
                        
\t\t\t<div class=\"comment-count \">

\t\t\t\t<h4>32 Avis</h4>

\t\t\t\t<p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

\t\t\t</div>
\t\t\t

\t\t\t<div class=\"media\">

\t\t\t\t<div class=\"media-left\">

\t\t\t\t\t<a href=\"#\">

\t\t\t\t\t\t<img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\">

\t\t\t\t\t</a>

\t\t\t\t</div>

\t\t\t\t<div class=\"media-body\">

\t\t\t\t\t<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </p>

\t\t\t\t\t  <ul class=\"list-inline\">

\t\t\t\t\t\t  <li><a class=\"media-heading\" href=\"#\">Anonymous</a></li>

\t\t\t\t\t\t  <li>3 hours ago</li>

\t\t\t\t\t\t  <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>

\t\t\t\t\t\t</ul>

\t\t\t\t  

\t\t\t\t</div>

\t\t\t</div>


                    </div>
                                    
                    <div id=\"IdProfilBlockComments\" class=\"comment-list \">
                        
                        <div class=\"comment-count \">

                        <h4>32 Comments</h4>

                        <p><a href=\"#\">Sign in</a> to comment or comment as a guest.</p>

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

                    <div id=\"IdModifierProfil\" class=\"comment-form\">

                        <h4>Enntrez votre Message</h4>
                         <form  class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" >   
      
\t\t
         <div  id=\"role\" class=\"hidden\"  style=\"display:none;\"><input type=\"text\" name=\"role\"   value=\"{{ user.role }}\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"{{ user.firstname }}\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"{{ user.lastname }}\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Nom de l'association\" value=\"{{ user.name }}\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"{{ user.name }}\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"{{ user.email }}\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none; text-align: center\">
        
                 <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"{{ user.phone }}\"> 
       
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"{{ user.civility }}\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <!--<input type=\"file\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar (JPG, PNG ou GIF | max. 15 Ko)\" value=\"{{ user.firstname }}\"> -->
            
                <small class=\"\">Avatar(JPG, PNG ou GIF | max. 15 Ko) : </small> 
                <input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\">
                {# {{ user.url_img }}\" #}
         
        </div>
\t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"{{ user.adress }}\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"{{ user.postal_code }}\">
            
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"{{ user.town }}\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"{{ user.url_web_orga }}\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"{{ user.url_fb }}\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"{{ user.description }}\">description</textarea></div>
\t\t
        <div class=\"form-group\"><input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"Register Now\"></div>

    </form>

                    </div>

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

      
           </div>

       

      </div>

    </section>

    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t 
        <script type=\"text/javascript\">
                
            
        
               
                 
            function afficher_div(id)
            {
                 console.log(id);
                 // #IdProfilBlockComments, #IdGererAnnonces, #IdModifierProfil, #IdProfilBlockAvis,  #IdGererChronique     
                 id1 = 'IdProfilBlockComments';id2 = 'IdModifierProfil';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique';;
                       \$('#IdGererAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdGererAnnonces') 
                    {   
                        id1 = 'IdProfilBlockComments';id2 = 'IdModifierProfil';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique'; id='IdGererAnnonces'; }
                    
                if (id == 'IdProfilBlockComments') 
                    {   
                        id1 = 'IdGererAnnonces';id2 = 'IdModifierProfil';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdModifierProfil') 
                {
             
                      id1 = 'IdProfilBlockComments';id2 = 'IdGererAnnonces';id3 = 'IdProfilBlockAvis';id4 = 'IdGererChronique';id='IdModifierProfil';

                     if (\$('#role').val() == 'user') 
                        {\t
                                    \$('.user-element').show();
                                    \$('.commun-element').show();
                        } else 
                        {
                                    \$('.commun-element').show();
                                    \$('.asso-element').show();
                        }
                }
                    
                if (id == 'IdProfilBlockAvis') 
                {    
                        id1 = 'IdProfilBlockComments';id2 = 'IdGererAnnonces';id3 = 'IdModifierProfil';id4 = 'IdGererChronique';id='IdProfilBlockAvis'; }
                    
                if (id == 'IdGererChronique') 
                    {    
                        id1 = 'IdProfilBlockComments';id2 = 'IdGererAnnonces';id3 = 'IdModifierProfil';id4 = 'IdProfilBlockAvis';id='IdGererChronique'; }
                    
                    
                    
                      document.getElementById(id).style.display = 'block';
                      document.getElementById(id1).style.display = 'none';
                       document.getElementById(id2).style.display = 'none';
                        document.getElementById(id3).style.display = 'none';
                         document.getElementById(id4).style.display = 'none';
                         
              
                      
                       console.log('fin');
           
           
            }
                  /*
                   * 
                   * 
                   if (document.getElementById(id).style.display == 'none')
                  {
                       document.getElementById(id).style.display = 'block';
                  }
                  else
                  {
                       document.getElementById(id).style.display = 'none';
                  }
                }
                 */
           
\t</script>
{% endblock %}", "user/profilUser.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\profilUser.html.twig");
    }
}
