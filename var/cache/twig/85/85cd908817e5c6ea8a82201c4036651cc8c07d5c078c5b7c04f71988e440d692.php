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
        $__internal_a36329d9c1fc2d951b3e753762b97f7a933ef62a09c4ac61935f0bf97692e3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36329d9c1fc2d951b3e753762b97f7a933ef62a09c4ac61935f0bf97692e3a8->enter($__internal_a36329d9c1fc2d951b3e753762b97f7a933ef62a09c4ac61935f0bf97692e3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $__internal_9b1a93f1c5c2d4df10e4f017688f41741399bd95a09936d5962c0f8dcd65b776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1a93f1c5c2d4df10e4f017688f41741399bd95a09936d5962c0f8dcd65b776->enter($__internal_9b1a93f1c5c2d4df10e4f017688f41741399bd95a09936d5962c0f8dcd65b776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36329d9c1fc2d951b3e753762b97f7a933ef62a09c4ac61935f0bf97692e3a8->leave($__internal_a36329d9c1fc2d951b3e753762b97f7a933ef62a09c4ac61935f0bf97692e3a8_prof);

        
        $__internal_9b1a93f1c5c2d4df10e4f017688f41741399bd95a09936d5962c0f8dcd65b776->leave($__internal_9b1a93f1c5c2d4df10e4f017688f41741399bd95a09936d5962c0f8dcd65b776_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a81a357d1104b2b1acf215aead63362fd8a02ceb92b714a4e2efba6dbce6134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a81a357d1104b2b1acf215aead63362fd8a02ceb92b714a4e2efba6dbce6134->enter($__internal_3a81a357d1104b2b1acf215aead63362fd8a02ceb92b714a4e2efba6dbce6134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_059d64d3a40d2351a3800046422701da54ed85a9361b331eb3675a62d0fdba47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059d64d3a40d2351a3800046422701da54ed85a9361b331eb3675a62d0fdba47->enter($__internal_059d64d3a40d2351a3800046422701da54ed85a9361b331eb3675a62d0fdba47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "                   

<section class=\"innercontent\">

    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-8 col-lg-8\">

                <article class=\"post\">

             

                    <div class=\"author-info\">

                       <ul class=\"list-inline\">  

                        <li>

                            <div class=\"icon-box\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/author_1.png "), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image post\" /></div>

                            <div class=\"info\">

                            

                           <a href=\"author.html\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "date_create", array()), "html", null, true);
        echo " </strong></div>
                        </li>

                        

                         <li>

                             <div class=\"icon-box\"><i class=\"fa fa-comments-o\"></i></div>

                             <div class=\"info\">

                             <p>Note</p>
                                 <strong>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["myNote"]) || array_key_exists("myNote", $context) ? $context["myNote"] : (function () { throw new Twig_Error_Runtime('Variable "myNote" does not exist.', 54, $this->getSourceContext()); })()), "html", null, true);
        echo " </strong></div>
                         </li>

                         <li>
                            <div class=\"info\">
                            <p>Annonces </p>
                                <strong>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["nbAnnoncesByUser"]) || array_key_exists("nbAnnoncesByUser", $context) ? $context["nbAnnoncesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbAnnoncesByUser" does not exist.', 60, $this->getSourceContext()); })()), "id_post", array()), "html", null, true);
        echo "        </strong></div>
                        </li>
                        
                        <li>
                            <div class=\"info\">
                            <p>Chroniques </p>
                                <strong>";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["nbChroniquesByUser"]) || array_key_exists("nbChroniquesByUser", $context) ? $context["nbChroniquesByUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbChroniquesByUser" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
        echo "   </strong></div>
                        </li>
                        
                         <li>
                            <div class=\"info\">
                            <p>News </p>
                                <strong>";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["nbNewByUser"]) || array_key_exists("nbNewByUser", $context) ? $context["nbNewByUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbNewByUser" does not exist.', 72, $this->getSourceContext()); })()), "html", null, true);
        echo "</strong></div>
                        </li>

                       </ul>
                        
           

                    </div>
               
                        
            ";
        // line 82
        if (array_key_exists("modeadmin", $context)) {
            // line 83
            echo "

               <div class=\"caption\">
                <div class=\"line-block\">

                    <ul class=\"list-inline tags\">

                     <li><a  href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateProfil");
            echo "\">Modifier Profil </a></li>
                        <li onclick=\"afficher_div('IdGererAnnonces');\"><a href=\"#\">Gerer mes Annonces</a></li>
                        <li onclick=\"afficher_div('IdGererChronique');\"><a href=\"#\">Gerer mes chroniques</a></li>   


                    </ul>

                </div></div>
            ";
        }
        // line 99
        echo "
            
             <div class=\"caption\">
                <div class=\"line-block\">
                    
                    
                    ";
        // line 106
        echo "
                    <ul class=\"list-inline tags\">
                     
                       ";
        // line 109
        if (array_key_exists("modeadmin", $context)) {
            echo " <li onclick=\"afficher_div('IdProfilBlockMessage');\"><a  href=\"#\">Envoyer message </a></li>";
        }
        // line 110
        echo "                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Annonces Postées ( a redefinir )</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockSesPosts');\"><a href=\"#\">Ses Posts</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses Interventions sur les posts</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockCommentsAvis');\"><a href=\"#\">Avis des internautes</a></li>
                  

                    </ul>

                </div></div>

                   
                    <div id=\"IdProfilBlockSesPosts\" class=\"related-post\" >    Ses Posts          </div>   
                    
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >  Annonce spostées22    </div> 
                    
                
                   
                        
                   <div id=\"IdProfilBlockComments\" class=\"related-post\" >  
                        <div class=\"comment-count\"><h4>";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["nbCommentaires"]) || array_key_exists("nbCommentaires", $context) ? $context["nbCommentaires"] : (function () { throw new Twig_Error_Runtime('Variable "nbCommentaires" does not exist.', 129, $this->getSourceContext()); })()), "html", null, true);
        echo " Commentaire(s)</h4>
                        </div>
                           ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCommentsFromUser"]) || array_key_exists("listeCommentsFromUser", $context) ? $context["listeCommentsFromUser"] : (function () { throw new Twig_Error_Runtime('Variable "listeCommentsFromUser" does not exist.', 131, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listeCommentFromUser"]) {
            echo " 
                                <div class=\"comment-list\">  
                                   <div class=\"media\">
                                     <div class=\"media-left\">
                                         <p>titre :";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listeCommentFromUser"], "annonce", array()), "post_title", array()), "html", null, true);
            echo " - type  :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listeCommentFromUser"], "annonce", array()), "paragraphe_2", array()), "html", null, true);
            echo " ( </p>  ";
            // line 136
            echo "                                        <a href=\"#\"><img class=\"media-object\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
            echo "\" alt=\"placeholder image\"></a>
                                    </div>
                                         <ul class=\"list-inline\">
                                            <li> titre :";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listeCommentFromUser"], "annonce", array()), "post_title", array()), "html", null, true);
            echo "</li>
                                            <li> le :";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["listeCommentFromUser"], "annonce", array()), "post_date", array()), "html", null, true);
            echo "</li>
                                            <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                        </ul>
                                   </div>
                                 <div class=\"media-body\">
                                     
                                       
                                 </div>
                               </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeCommentFromUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                       
                    </div>
                           ";
        // line 172
        echo "                    
                    <div id=\"IdProfilBlockMessage\" class=\"related-post\" > 
                             <h4>Entrez votre Message</h4>
                                <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                                    <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\">
                                     <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">
                                   </div>
                                      </div></div>
                                    <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\"><input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\"></div></div>
                                            </div>
                                    <div class=\"form-group\"><textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea></div>
                                  <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
                                </form>
                    
                    </div>                  
                   
                        
                   
                     
                   
                    
                    
                  
                                    
                     <div id=\"IdProfilBlockCommentsAvis\" class=\"related-post\" >  
                        <div class=\"comment-count\"><h4>";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["nbCommentaires"]) || array_key_exists("nbCommentaires", $context) ? $context["nbCommentaires"] : (function () { throw new Twig_Error_Runtime('Variable "nbCommentaires" does not exist.', 197, $this->getSourceContext()); })()), "html", null, true);
        echo " Commentaire(s)</h4>
                        </div>
                            ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getMyComments"]) || array_key_exists("getMyComments", $context) ? $context["getMyComments"] : (function () { throw new Twig_Error_Runtime('Variable "getMyComments" does not exist.', 199, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["getMyComment"]) {
            echo " 
                                <div class=\"comment-list\">  
                                   <div class=\"media\">
                                     <div class=\"media-left\">
                                     <a href=\"#\"><img class=\"media-object\" src=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
            echo "\" alt=\"placeholder image\"></a>
                                    </div>
                                   </div>
                                 <div class=\"media-body\"><p>";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "comment", array()), "html", null, true);
            echo " </p>
                                                           <ul class=\"list-inline\">
                                                               <li><a class=\"media-heading\" href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "id_member_noteur", array()))), "html", null, true);
            echo "\">De : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "username", array()), "html", null, true);
            echo "</a></li>
                                                               <li> le :";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "date_create", array()), "html", null, true);
            echo "</li>
                                                               <li><a class=\"reply-btn\" href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "id_member_noteur", array()))), "html", null, true);
            echo "\">Post Reply</a></li>
                                                           </ul>
                                 </div>
                               </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getMyComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                       
                    </div>
 
                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

            <aside class=\"col-md-4 col-lg-4\">

            \t

                <div class=\"row\">
                    
                 
                 ";
        // line 232
        if (array_key_exists("modeadmin", $context)) {
            // line 233
            echo "                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                            
                                ";
            // line 236
            if (((isset($context["messageCheck"]) || array_key_exists("messageCheck", $context) ? $context["messageCheck"] : (function () { throw new Twig_Error_Runtime('Variable "messageCheck" does not exist.', 236, $this->getSourceContext()); })()) == "OK")) {
                // line 237
                echo "                                         <div class=\"panel-heading\">Consulter mes messages</div>
                                             <div class=\"panel-body\">
                                        ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 239, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    echo " 
                                              <p><a href=\"";
                    // line 240
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
                // line 241
                echo " 
                                ";
            } else {
                // line 243
                echo "                                            <div class=\"panel-heading\">Aucun Message reçu</div>
                                             <div class=\"panel-body\">
                                ";
            }
            // line 246
            echo "
                                </div>
                            </div>
                         </div> 
                     </div> 
                ";
        } else {
            // line 251
            echo " 
                    
                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                             <div class=\"panel-heading\">Donner une note</div>
                                 <div class=\"panel-body\">
                                         ";
            // line 258
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
        // line 285
        echo "    
            </aside>

           </div>

       

      </div>

    </section>

    
";
        
        $__internal_059d64d3a40d2351a3800046422701da54ed85a9361b331eb3675a62d0fdba47->leave($__internal_059d64d3a40d2351a3800046422701da54ed85a9361b331eb3675a62d0fdba47_prof);

        
        $__internal_3a81a357d1104b2b1acf215aead63362fd8a02ceb92b714a4e2efba6dbce6134->leave($__internal_3a81a357d1104b2b1acf215aead63362fd8a02ceb92b714a4e2efba6dbce6134_prof);

    }

    // line 299
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17c34970d3583be13e4a99676020dac5b89353cbd95a110dd3874d0c6cdd8084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c34970d3583be13e4a99676020dac5b89353cbd95a110dd3874d0c6cdd8084->enter($__internal_17c34970d3583be13e4a99676020dac5b89353cbd95a110dd3874d0c6cdd8084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c677236c9ea2d9a3d96928d0d5c4b7208e42ac5b8f6c7dc9d1dcff8bbe1a5b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c677236c9ea2d9a3d96928d0d5c4b7208e42ac5b8f6c7dc9d1dcff8bbe1a5b45->enter($__internal_c677236c9ea2d9a3d96928d0d5c4b7208e42ac5b8f6c7dc9d1dcff8bbe1a5b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 300
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t 
        <script type=\"text/javascript\">
            
             \$('#IdProfilBlockCommentsAvis').hide(); 
                       \$('#IdProfilBlockAnnonces').hide(); 
                       \$('#IdProfilBlockMessage').hide(); 
                       \$('#IdProfilBlockComments').hide(); 
                       \$('#IdProfilBlockSesPosts').hide();
            function afficher_div(id)
            {
                 console.log(id);
                 // #IdProfilBlockCommentsAvis, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockComments,  #IdProfilBlockSesPosts     
                 //id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts';
                       \$('#IdProfilBlockCommentsAvis').hide(); 
                       \$('#IdProfilBlockAnnonces').hide(); 
                       \$('#IdProfilBlockMessage').hide(); 
                       \$('#IdProfilBlockComments').hide(); 
                       \$('#IdProfilBlockSesPosts').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockCommentsAvis') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts';id='IdProfilBlockCommentsAvis'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockComments') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockSesPosts';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockSesPosts') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockComments';id='IdProfilBlockSesPosts'; }
                     console.log(id);
                      document.getElementById(id).style.display = 'block';
                      document.getElementById(id1).style.display = 'none';
                       document.getElementById(id2).style.display = 'none';
                        document.getElementById(id3).style.display = 'none';
                         document.getElementById(id4).style.display = 'none';
                        \$('#id').show();   
                      \$('#id1').hide(); 
                       \$('#id2').hide(); 
                       \$('#id3').hide(); 
                       \$('#id4').hide();
                      
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
        
        $__internal_c677236c9ea2d9a3d96928d0d5c4b7208e42ac5b8f6c7dc9d1dcff8bbe1a5b45->leave($__internal_c677236c9ea2d9a3d96928d0d5c4b7208e42ac5b8f6c7dc9d1dcff8bbe1a5b45_prof);

        
        $__internal_17c34970d3583be13e4a99676020dac5b89353cbd95a110dd3874d0c6cdd8084->leave($__internal_17c34970d3583be13e4a99676020dac5b89353cbd95a110dd3874d0c6cdd8084_prof);

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
        return array (  475 => 300,  466 => 299,  444 => 285,  414 => 258,  406 => 251,  398 => 246,  393 => 243,  389 => 241,  375 => 240,  369 => 239,  365 => 237,  363 => 236,  358 => 233,  356 => 232,  336 => 214,  325 => 210,  321 => 209,  315 => 208,  310 => 206,  304 => 203,  295 => 199,  290 => 197,  263 => 172,  259 => 149,  243 => 140,  239 => 139,  232 => 136,  227 => 135,  218 => 131,  213 => 129,  192 => 110,  188 => 109,  183 => 106,  175 => 99,  163 => 90,  154 => 83,  152 => 82,  139 => 72,  130 => 66,  121 => 60,  112 => 54,  97 => 42,  81 => 29,  72 => 23,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block content %}
                   

<section class=\"innercontent\">

    <div class=\"container\">

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
                    
                    
                    {#   #IdProfilBlockCommentsAvis, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockComments,  #IdProfilBlockSesPosts   #}

                    <ul class=\"list-inline tags\">
                     
                       {% if modeadmin is defined %} <li onclick=\"afficher_div('IdProfilBlockMessage');\"><a  href=\"#\">Envoyer message </a></li>{% endif %}
                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Annonces Postées ( a redefinir )</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockSesPosts');\"><a href=\"#\">Ses Posts</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses Interventions sur les posts</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockCommentsAvis');\"><a href=\"#\">Avis des internautes</a></li>
                  

                    </ul>

                </div></div>

                   
                    <div id=\"IdProfilBlockSesPosts\" class=\"related-post\" >    Ses Posts          </div>   
                    
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >  Annonce spostées22    </div> 
                    
                
                   
                        
                   <div id=\"IdProfilBlockComments\" class=\"related-post\" >  
                        <div class=\"comment-count\"><h4>{{ nbCommentaires }} Commentaire(s)</h4>
                        </div>
                           {% for listeCommentFromUser in listeCommentsFromUser %} 
                                <div class=\"comment-list\">  
                                   <div class=\"media\">
                                     <div class=\"media-left\">
                                         <p>titre :{{ listeCommentFromUser.annonce.post_title }} - type  :{{ listeCommentFromUser.annonce.paragraphe_2 }} ( </p>  {# commentaire #}
                                        <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"></a>
                                    </div>
                                         <ul class=\"list-inline\">
                                            <li> titre :{{ listeCommentFromUser.annonce.post_title }}</li>
                                            <li> le :{{ listeCommentFromUser.annonce.post_date }}</li>
                                            <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                        </ul>
                                   </div>
                                 <div class=\"media-body\">
                                     
                                       
                                 </div>
                               </div>
                           {% endfor %}                       
                    </div>
                           {#
\t\t\t<div class=\"comment-count \"><h4>{{nbCommentairesFromUser }} Commentaires</h4></div>
                            {% for listeCommentFromUser in listeCommentsFromUser %} 
                                    <div class=\"media\"><div class=\"media-left\">
                                            <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"></a>
                                            </div>
                                            <div class=\"media-body\">
                                                             <p>{{listeCommentFromUser.commentannonce }} </p>
                                                      <ul class=\"list-inline\">
                                                              <li><a class=\"media-heading\" href=\"#\">De : {{listeCommentFromUser.username }}</a></li>
                                                              <li>le : {{listeCommentFromUser.post_date }}</li>
                                                              <li><a class=\"reply-btn\" href=\"#\">Title :{{listeCommentFromUser.title }}</a></li>
                                                              <li><a class=\"reply-btn\" href=\"#\">Title :{{listeCommentFromUser.type }}</a></li>
                                                              <li><a class=\"reply-btn\" href=\"#\">Post Reply</a></li>
                                                            </ul>
                                    </div>
                            {% endfor %}
                        
\t\t\t</div>
                       
                       #}
                    
                    <div id=\"IdProfilBlockMessage\" class=\"related-post\" > 
                             <h4>Entrez votre Message</h4>
                                <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                                    <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\">
                                     <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">
                                   </div>
                                      </div></div>
                                    <div class=\"row\"><div class=\"col-md-6 col-lg-5\"><div class=\"form-group\"><input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\"></div></div>
                                            </div>
                                    <div class=\"form-group\"><textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea></div>
                                  <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
                                </form>
                    
                    </div>                  
                   
                        
                   
                     
                   
                    
                    
                  
                                    
                     <div id=\"IdProfilBlockCommentsAvis\" class=\"related-post\" >  
                        <div class=\"comment-count\"><h4>{{ nbCommentaires }} Commentaire(s)</h4>
                        </div>
                            {% for getMyComment in getMyComments %} 
                                <div class=\"comment-list\">  
                                   <div class=\"media\">
                                     <div class=\"media-left\">
                                     <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"></a>
                                    </div>
                                   </div>
                                 <div class=\"media-body\"><p>{{ getMyComment.comment }} </p>
                                                           <ul class=\"list-inline\">
                                                               <li><a class=\"media-heading\" href=\"{{ path('profilUser', {id: getMyComment.id_member_noteur}) }}\">De : {{ getMyComment.username }}</a></li>
                                                               <li> le :{{ getMyComment.date_create }}</li>
                                                               <li><a class=\"reply-btn\" href=\"{{ path('profilUser', {id: getMyComment.id_member_noteur}) }}\">Post Reply</a></li>
                                                           </ul>
                                 </div>
                               </div>
                           {% endfor %}                       
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
            
             \$('#IdProfilBlockCommentsAvis').hide(); 
                       \$('#IdProfilBlockAnnonces').hide(); 
                       \$('#IdProfilBlockMessage').hide(); 
                       \$('#IdProfilBlockComments').hide(); 
                       \$('#IdProfilBlockSesPosts').hide();
            function afficher_div(id)
            {
                 console.log(id);
                 // #IdProfilBlockCommentsAvis, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockComments,  #IdProfilBlockSesPosts     
                 //id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts';
                       \$('#IdProfilBlockCommentsAvis').hide(); 
                       \$('#IdProfilBlockAnnonces').hide(); 
                       \$('#IdProfilBlockMessage').hide(); 
                       \$('#IdProfilBlockComments').hide(); 
                       \$('#IdProfilBlockSesPosts').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockCommentsAvis') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts';id='IdProfilBlockCommentsAvis'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockComments';id4 = 'IdProfilBlockSesPosts';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockComments') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockSesPosts';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockSesPosts') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockCommentsAvis';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockComments';id='IdProfilBlockSesPosts'; }
                     console.log(id);
                      document.getElementById(id).style.display = 'block';
                      document.getElementById(id1).style.display = 'none';
                       document.getElementById(id2).style.display = 'none';
                        document.getElementById(id3).style.display = 'none';
                         document.getElementById(id4).style.display = 'none';
                        \$('#id').show();   
                      \$('#id1').hide(); 
                       \$('#id2').hide(); 
                       \$('#id3').hide(); 
                       \$('#id4').hide();
                      
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
