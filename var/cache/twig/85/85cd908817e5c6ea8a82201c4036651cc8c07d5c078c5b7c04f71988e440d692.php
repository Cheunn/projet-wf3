<?php

/* user/consultProfil.html.twig */
class __TwigTemplate_e041a34019766c7a60b7f0b6be6f5efef956417cc5c423a03f71f470f888e69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/consultProfil.html.twig", 1);
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
        $__internal_faa95bef93d9ff2fb37707c06803f6aa5634b11044425e2cb4f15140660cf067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa95bef93d9ff2fb37707c06803f6aa5634b11044425e2cb4f15140660cf067->enter($__internal_faa95bef93d9ff2fb37707c06803f6aa5634b11044425e2cb4f15140660cf067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $__internal_3f8788d4d7d835c3f9a779c0e7ab2b20672430005bc8e0342b9fb75efc8473e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8788d4d7d835c3f9a779c0e7ab2b20672430005bc8e0342b9fb75efc8473e1->enter($__internal_3f8788d4d7d835c3f9a779c0e7ab2b20672430005bc8e0342b9fb75efc8473e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa95bef93d9ff2fb37707c06803f6aa5634b11044425e2cb4f15140660cf067->leave($__internal_faa95bef93d9ff2fb37707c06803f6aa5634b11044425e2cb4f15140660cf067_prof);

        
        $__internal_3f8788d4d7d835c3f9a779c0e7ab2b20672430005bc8e0342b9fb75efc8473e1->leave($__internal_3f8788d4d7d835c3f9a779c0e7ab2b20672430005bc8e0342b9fb75efc8473e1_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa5076a0d7499ced08167d5fc7975ccdd21eda46392e037c5b6b4a9869b151a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5076a0d7499ced08167d5fc7975ccdd21eda46392e037c5b6b4a9869b151a5->enter($__internal_fa5076a0d7499ced08167d5fc7975ccdd21eda46392e037c5b6b4a9869b151a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ff534e131bd6187fa1239d2d9735d0373d3eca7bac8b49d8edd5ca63f69e9040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff534e131bd6187fa1239d2d9735d0373d3eca7bac8b49d8edd5ca63f69e9040->enter($__internal_ff534e131bd6187fa1239d2d9735d0373d3eca7bac8b49d8edd5ca63f69e9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author_1.png "), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            

                           <a href=\"author.html\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->getSourceContext()); })()), "date_create", array()), "html", null, true);
        echo " </strong></div>
                        </li>

                        

                         <li>

                             <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>

                             <div class=\"info\">

                             <p>Note</p>
                                 <strong>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["myNote"]) || array_key_exists("myNote", $context) ? $context["myNote"] : (function () { throw new Twig_Error_Runtime('Variable "myNote" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
        echo " </strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["nbAnnoncesByUser"]) || array_key_exists("nbAnnoncesByUser", $context) ? $context["nbAnnoncesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbAnnoncesByUser" does not exist.', 66, $this->getSourceContext()); })()), "id_post", array()), "html", null, true);
        echo "        </strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["nbChroniquesByUser"]) || array_key_exists("nbChroniquesByUser", $context) ? $context["nbChroniquesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbChroniquesByUser" does not exist.', 72, $this->getSourceContext()); })()), "html", null, true);
        echo "   </strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["nbNewByUser"]) || array_key_exists("nbNewByUser", $context) ? $context["nbNewByUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbNewByUser" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong></div>
                        </li>

                       </ul>
                        
           

                    </div>
               
                        
            ";
        // line 88
        if (array_key_exists("modeadmin", $context)) {
            // line 89
            echo "

               <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">

                     <li><a  href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProfil");
            echo "\">Modifier Profil </a></li>
                        <li onclick=\"afficher_div('IdGererAnnonces');\"><a href=\"#\">Gerer mes Annonces</a></li>
                        <li onclick=\"afficher_div('IdGererChronique');\"><a href=\"#\">Gerer mes chroniques</a></li>   


                    </ul>

                </div></div>
            ";
        }
        // line 105
        echo "
            
             <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">
                     
                       ";
        // line 112
        if (array_key_exists("modeadmin", $context)) {
            echo "     
                       <li onclick=\"afficher_div('IdProfilBlockMessage');\"><a  href=\"#\">Envoyer message </a></li>
                        ";
        }
        // line 115
        echo "                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Annonces Postées</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockChronique');\"><a href=\"#\">Chroniques Postées</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses Commentaires</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockCommentsAvis');\"><a href=\"#\">Avis des internautes</a></li>

                  

                    </ul>

                </div></div>

                   
                    
                    
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >
                        <div class=\"row\">
                        <div class=\"col-md-12\"><h4></h4></div>
                              ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAnnoncesByUser"]) || array_key_exists("listeAnnoncesByUser", $context) ? $context["listeAnnoncesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "listeAnnoncesByUser" does not exist.', 132, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listeAnnonceByUser"]) {
            echo " 
                                <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                                    <div class=\"thumbnail\">
                                        <div class=\"caption\"><a href=\"#\"> ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listeAnnonceByUser"], "post_title", array()), "html", null, true);
            echo "</a></div>
                                         <a href=\"#\"><img src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post1.png "), "html", null, true);
            echo "\" alt=\"related post\"></a>
                                         <a href=\"#\"> De : ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listeAnnonceByUser"], "username", array()), "html", null, true);
            echo "  </a>
                                         <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["listeAnnonceByUser"], "member_id_member", array()))), "html", null, true);
            echo "\"> le : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listeAnnonceByUser"], "post_date", array()), "html", null, true);
            echo "  </a>
                                 </div></div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeAnnonceByUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                        </div></div>
                    
                                    
                    <div id=\"IdProfilBlockComments\" class=\"comment-list \"> 
\t\t\t<div class=\"comment-count \"><h4>32 Commentaires sur les annonces</h4></div>
                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCommentsAnnoncesByUser"]) || array_key_exists("listeCommentsAnnoncesByUser", $context) ? $context["listeCommentsAnnoncesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "listeCommentsAnnoncesByUser" does not exist.', 146, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentAnnoncesByUser"]) {
            echo " 
                                <div class=\"media\"><div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object\" src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
            echo "\" alt=\"placeholder image\"></a>
                                        </div>
                                        <div class=\"media-body\">
                                                         <p>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentAnnoncesByUser"], "comment", array()), "html", null, true);
            echo " </p>
                                                  <ul class=\"list-inline\">
                                                          <li><a class=\"media-heading\" href=\"#\">De : ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentAnnoncesByUser"], "username", array()), "html", null, true);
            echo "</a></li>
                                                          <li>3 hours ago</li>
                                                          <li><a class=\"reply-btn\" href=\"#\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentAnnoncesByUser"], "post_date", array()), "html", null, true);
            echo "</a></li>
                                                          <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                                        </ul>
\t\t\t\t</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentAnnoncesByUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                        </div><hr>
                        
                        \t\t\t<div class=\"comment-count \"><h4>32 Commentaires sur les annonces</h4></div>
                        ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCommentsChroniquesByUser"]) || array_key_exists("listeCommentsChroniquesByUser", $context) ? $context["listeCommentsChroniquesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "listeCommentsChroniquesByUser" does not exist.', 163, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentChroniqueByUser"]) {
            echo " 
                                <div class=\"media\"><div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object\" src=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
            echo "\" alt=\"placeholder image\"></a>
                                        </div>
                                        <div class=\"media-body\">comment
                                                <p>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentChroniqueByUser"], "comment", array()), "html", null, true);
            echo " </p>
                                                  <ul class=\"list-inline\">
                                                          <li><a class=\"media-heading\" href=\"#\">De : ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentChroniqueByUser"], "username", array()), "html", null, true);
            echo "</a></li>
                                                          <li>3 hours ago</li>
                                                          <li><a class=\"reply-btn\" href=\"#\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["commentChroniqueByUser"], "post_date", array()), "html", null, true);
            echo "</a></li>
                                                          <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                                        </ul>
\t\t\t\t</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentChroniqueByUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t</div>
                    </div>
                                    
                    <div id=\"IdProfilBlockCommentsAvis\" class=\"comment-list \">
                        
                        <div class=\"comment-count \">
                               
                        <h4>";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["nbCommentaires"]) || array_key_exists("nbCommentaires", $context) ? $context["nbCommentaires"] : (function () { throw new Twig_Error_Runtime('Variable "nbCommentaires" does not exist.', 184, $this->getSourceContext()); })()), "html", null, true);
        echo " Commentaire(s)</h4>                       
                        </div>
                        
                        
                         ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getMyComments"]) || array_key_exists("getMyComments", $context) ? $context["getMyComments"] : (function () { throw new Twig_Error_Runtime('Variable "getMyComments" does not exist.', 188, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["getMyComment"]) {
            echo " 
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                    <a href=\"#\"> <img class=\"media-object\" src=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
            echo "\" alt=\"placeholder image\"> </a></div>
                                    <div class=\"media-body\"><p>";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "comment", array()), "html", null, true);
            echo " </p>
                                    <ul class=\"list-inline\"><li><a class=\"media-heading\" href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "id_member_noteur", array()))), "html", null, true);
            echo "\">De : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "username", array()), "html", null, true);
            echo "</a></li><li> le :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "date_create", array()), "html", null, true);
            echo "</li>
                                    <li><a class=\"reply-btn\" href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "id_member_noteur", array()))), "html", null, true);
            echo "\">Post Reply</a></li></ul></div>
                                </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getMyComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                        
                        
                        

                    <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">
                        <h4>Enntrez votre Message</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                            <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">

                           </div>

                                    </div>

                            </div>


                            <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\"><input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\"></div></div>

                                    </div>

                            <div class=\"form-group\"><textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea></div>

                          <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>

                        </form>

                    </div>

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

            <aside class=\"col-md-4 col-lg-4\">

            \t

                <div class=\"row\">
                    
                 
                 ";
        // line 242
        if (array_key_exists("modeadmin", $context)) {
            // line 243
            echo "                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                            
                                ";
            // line 246
            if (((isset($context["messageCheck"]) || array_key_exists("messageCheck", $context) ? $context["messageCheck"] : (function () { throw new Twig_Error_Runtime('Variable "messageCheck" does not exist.', 246, $this->getSourceContext()); })()) == "OK")) {
                // line 247
                echo "                                         <div class=\"panel-heading\">Consulter mes messages</div>
                                             <div class=\"panel-body\">
                                        ";
                // line 249
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 249, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    echo " 
                                              <p><a href=\"";
                    // line 250
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LireMessage", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "idmessage", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "id_member_send", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "date", array()), "html", null, true);
                    echo "/ ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "title", array()), "html", null, true);
                    echo "</a> </p>     
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo " 
                                ";
            } else {
                // line 253
                echo "                                            <div class=\"panel-heading\">Aucun Message reçu</div>
                                             <div class=\"panel-body\">
                                ";
            }
            // line 256
            echo "
                                </div>
                            </div>
                         </div> 
                     </div> 
                ";
        } else {
            // line 261
            echo " 
                    
                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                             <div class=\"panel-heading\">Donner une note</div>
                                 <div class=\"panel-body\">
                                         ";
            // line 268
            echo "                                                 <form action=\"#\" method=\"post\">
                                           
                                            <div class=\"form-group\">
                                                    <select id=\"role\" class=\"form-control \" name=\"note\"> 
                                                          <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Donner une note</option> 
                                                          <option  class=\"form-control \" value=\"1\" >1</option>
                                                          <option  class=\"form-control \" value=\"2\" >2</option>
                                                          <option  class=\"form-control \" value=\"3\" >3</option>
                                                          <option  class=\"form-control \" value=\"4\" >4</option>
                                                          <option  class=\"form-control \" value=\"5\" >5</option>

                                                      </select>
                                             </div>
                                             <div class=\"form-group\">
                                                 <button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>
                                          </div>
                                        </form>
                                </div>
                            </div>
                         </div> 
                     </div> 
                                      
                   


                   
              
               ";
        }
        // line 295
        echo "    
            </aside>

           </div>

       

      </div>

    </section>

    
";
        
        $__internal_ff534e131bd6187fa1239d2d9735d0373d3eca7bac8b49d8edd5ca63f69e9040->leave($__internal_ff534e131bd6187fa1239d2d9735d0373d3eca7bac8b49d8edd5ca63f69e9040_prof);

        
        $__internal_fa5076a0d7499ced08167d5fc7975ccdd21eda46392e037c5b6b4a9869b151a5->leave($__internal_fa5076a0d7499ced08167d5fc7975ccdd21eda46392e037c5b6b4a9869b151a5_prof);

    }

    // line 309
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df0d15dae81562e3dd8c2a52242ae07b384ddb3fdada21598d31628495f898aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0d15dae81562e3dd8c2a52242ae07b384ddb3fdada21598d31628495f898aa->enter($__internal_df0d15dae81562e3dd8c2a52242ae07b384ddb3fdada21598d31628495f898aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4956cb4be7fb4510e607032cb9112fc9665095f763a33ebc9d4c43137b7c8bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4956cb4be7fb4510e607032cb9112fc9665095f763a33ebc9d4c43137b7c8bd4->enter($__internal_4956cb4be7fb4510e607032cb9112fc9665095f763a33ebc9d4c43137b7c8bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
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
                 // #IdProfilBlockCommentsAvis, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockComments,  #IdProfilBlockChronique     
                 id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique';;
                       \$('#IdProfilBlockAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockCommentsAvis') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique';id='IdProfilBlockCommentsAvis'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockComments') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockChronique') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockComments';id='IdProfilBlockChronique'; }
                     console.log(id);
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
        
        $__internal_4956cb4be7fb4510e607032cb9112fc9665095f763a33ebc9d4c43137b7c8bd4->leave($__internal_4956cb4be7fb4510e607032cb9112fc9665095f763a33ebc9d4c43137b7c8bd4_prof);

        
        $__internal_df0d15dae81562e3dd8c2a52242ae07b384ddb3fdada21598d31628495f898aa->leave($__internal_df0d15dae81562e3dd8c2a52242ae07b384ddb3fdada21598d31628495f898aa_prof);

    }

    public function getTemplateName()
    {
        return "user/consultProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 310,  532 => 309,  510 => 295,  480 => 268,  472 => 261,  464 => 256,  459 => 253,  455 => 251,  441 => 250,  435 => 249,  431 => 247,  429 => 246,  424 => 243,  422 => 242,  375 => 197,  366 => 194,  358 => 193,  354 => 192,  350 => 191,  342 => 188,  335 => 184,  326 => 177,  315 => 172,  310 => 170,  305 => 168,  299 => 165,  292 => 163,  287 => 160,  276 => 155,  271 => 153,  266 => 151,  260 => 148,  253 => 146,  246 => 141,  235 => 138,  231 => 137,  227 => 136,  223 => 135,  215 => 132,  196 => 115,  190 => 112,  181 => 105,  169 => 96,  160 => 89,  158 => 88,  145 => 78,  136 => 72,  127 => 66,  118 => 60,  103 => 48,  87 => 35,  78 => 29,  50 => 3,  41 => 2,  11 => 1,);
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
                                 <strong>{{ myNote }} </strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>{{ nbAnnoncesByUser.id_post }}        </strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>{{ nbChroniquesByUser }}   </strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>{{ nbNewByUser }}</strong></div>
                        </li>

                       </ul>
                        
           

                    </div>
               
                        
            {% if modeadmin is defined %}


               <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">

                     <li><a  href=\"{{ path('updateProfil') }}\">Modifier Profil </a></li>
                        <li onclick=\"afficher_div('IdGererAnnonces');\"><a href=\"#\">Gerer mes Annonces</a></li>
                        <li onclick=\"afficher_div('IdGererChronique');\"><a href=\"#\">Gerer mes chroniques</a></li>   


                    </ul>

                </div></div>
            {% endif %}

            
             <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">
                     
                       {% if modeadmin is defined %}     
                       <li onclick=\"afficher_div('IdProfilBlockMessage');\"><a  href=\"#\">Envoyer message </a></li>
                        {% endif %}
                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Annonces Postées</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockChronique');\"><a href=\"#\">Chroniques Postées</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses Commentaires</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockCommentsAvis');\"><a href=\"#\">Avis des internautes</a></li>

                  

                    </ul>

                </div></div>

                   
                    
                    
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >
                        <div class=\"row\">
                        <div class=\"col-md-12\"><h4></h4></div>
                              {% for listeAnnonceByUser in listeAnnoncesByUser %} 
                                <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
                                    <div class=\"thumbnail\">
                                        <div class=\"caption\"><a href=\"#\"> {{listeAnnonceByUser.post_title }}</a></div>
                                         <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post1.png ') }}\" alt=\"related post\"></a>
                                         <a href=\"#\"> De : {{listeAnnonceByUser.username }}  </a>
                                         <a href=\"{{ path('profilUser', {id: listeAnnonceByUser.member_id_member}) }}\"> le : {{listeAnnonceByUser.post_date }}  </a>
                                 </div></div>
                            {% endfor %}
                        </div></div>
                    
                                    
                    <div id=\"IdProfilBlockComments\" class=\"comment-list \"> 
\t\t\t<div class=\"comment-count \"><h4>32 Commentaires sur les annonces</h4></div>
                        {% for commentAnnoncesByUser in listeCommentsAnnoncesByUser %} 
                                <div class=\"media\"><div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"></a>
                                        </div>
                                        <div class=\"media-body\">
                                                         <p>{{commentAnnoncesByUser.comment }} </p>
                                                  <ul class=\"list-inline\">
                                                          <li><a class=\"media-heading\" href=\"#\">De : {{commentAnnoncesByUser.username }}</a></li>
                                                          <li>3 hours ago</li>
                                                          <li><a class=\"reply-btn\" href=\"#\">{{commentAnnoncesByUser.post_date }}</a></li>
                                                          <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                                        </ul>
\t\t\t\t</div>
                            {% endfor %}
                        </div><hr>
                        
                        \t\t\t<div class=\"comment-count \"><h4>32 Commentaires sur les annonces</h4></div>
                        {% for commentChroniqueByUser in listeCommentsChroniquesByUser %} 
                                <div class=\"media\"><div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"></a>
                                        </div>
                                        <div class=\"media-body\">comment
                                                <p>{{commentChroniqueByUser.comment }} </p>
                                                  <ul class=\"list-inline\">
                                                          <li><a class=\"media-heading\" href=\"#\">De : {{commentChroniqueByUser.username }}</a></li>
                                                          <li>3 hours ago</li>
                                                          <li><a class=\"reply-btn\" href=\"#\">{{commentChroniqueByUser.post_date }}</a></li>
                                                          <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                                        </ul>
\t\t\t\t</div>
                            {% endfor %}
\t\t\t</div>
                    </div>
                                    
                    <div id=\"IdProfilBlockCommentsAvis\" class=\"comment-list \">
                        
                        <div class=\"comment-count \">
                               
                        <h4>{{ nbCommentaires }} Commentaire(s)</h4>                       
                        </div>
                        
                        
                         {% for getMyComment in getMyComments %} 
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                    <a href=\"#\"> <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"> </a></div>
                                    <div class=\"media-body\"><p>{{ getMyComment.comment }} </p>
                                    <ul class=\"list-inline\"><li><a class=\"media-heading\" href=\"{{ path('profilUser', {id: getMyComment.id_member_noteur}) }}\">De : {{ getMyComment.username }}</a></li><li> le :{{ getMyComment.date_create }}</li>
                                    <li><a class=\"reply-btn\" href=\"{{ path('profilUser', {id: getMyComment.id_member_noteur}) }}\">Post Reply</a></li></ul></div>
                                </div>
                        {% endfor %}
                        
                        
                        

                    <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">
                        <h4>Enntrez votre Message</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                            <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">

                           </div>

                                    </div>

                            </div>


                            <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\"><input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\"></div></div>

                                    </div>

                            <div class=\"form-group\"><textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea></div>

                          <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>

                        </form>

                    </div>

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

            <aside class=\"col-md-4 col-lg-4\">

            \t

                <div class=\"row\">
                    
                 
                 {% if modeadmin is defined %}
                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                            
                                {% if messageCheck == 'OK' %}
                                         <div class=\"panel-heading\">Consulter mes messages</div>
                                             <div class=\"panel-body\">
                                        {% for message in messages %} 
                                              <p><a href=\"{{ path('LireMessage', {id: message.idmessage}) }}\"> {{ message.id_member_send }} - {{ message.date }}/ {{ message.title }}</a> </p>     
                                        {% endfor %} 
                                {%  else %}
                                            <div class=\"panel-heading\">Aucun Message reçu</div>
                                             <div class=\"panel-body\">
                                {% endif %}

                                </div>
                            </div>
                         </div> 
                     </div> 
                {% else %} 
                    
                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                             <div class=\"panel-heading\">Donner une note</div>
                                 <div class=\"panel-body\">
                                         {#<form action=\"{{ path('EnvoyerNote', {id: {{user.id_member}} }}\" method=\"post\"> #}
                                                 <form action=\"#\" method=\"post\">
                                           
                                            <div class=\"form-group\">
                                                    <select id=\"role\" class=\"form-control \" name=\"note\"> 
                                                          <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Donner une note</option> 
                                                          <option  class=\"form-control \" value=\"1\" >1</option>
                                                          <option  class=\"form-control \" value=\"2\" >2</option>
                                                          <option  class=\"form-control \" value=\"3\" >3</option>
                                                          <option  class=\"form-control \" value=\"4\" >4</option>
                                                          <option  class=\"form-control \" value=\"5\" >5</option>

                                                      </select>
                                             </div>
                                             <div class=\"form-group\">
                                                 <button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>
                                          </div>
                                        </form>
                                </div>
                            </div>
                         </div> 
                     </div> 
                                      
                   


                   
              
               {% endif %}    
            </aside>

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
                 // #IdProfilBlockCommentsAvis, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockComments,  #IdProfilBlockChronique     
                 id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique';;
                       \$('#IdProfilBlockAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockCommentsAvis') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique';id='IdProfilBlockCommentsAvis'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockChronique';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockComments') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockChronique') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockComments';id='IdProfilBlockChronique'; }
                     console.log(id);
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
{% endblock %}", "user/consultProfil.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\consultProfil.html.twig");
    }
}
