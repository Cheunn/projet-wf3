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
        $__internal_291ae8a31900eedb258eb650545956a9015a3a5665a184439b9e7c3bed8958c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291ae8a31900eedb258eb650545956a9015a3a5665a184439b9e7c3bed8958c1->enter($__internal_291ae8a31900eedb258eb650545956a9015a3a5665a184439b9e7c3bed8958c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $__internal_be25623fab0330666af780e2ac859adec815908bafba9b20664c442d6207c502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be25623fab0330666af780e2ac859adec815908bafba9b20664c442d6207c502->enter($__internal_be25623fab0330666af780e2ac859adec815908bafba9b20664c442d6207c502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291ae8a31900eedb258eb650545956a9015a3a5665a184439b9e7c3bed8958c1->leave($__internal_291ae8a31900eedb258eb650545956a9015a3a5665a184439b9e7c3bed8958c1_prof);

        
        $__internal_be25623fab0330666af780e2ac859adec815908bafba9b20664c442d6207c502->leave($__internal_be25623fab0330666af780e2ac859adec815908bafba9b20664c442d6207c502_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_13c72de45ad1c008bbbace69e0b53e7b3069ee91fcddab8776caafd7613c5f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c72de45ad1c008bbbace69e0b53e7b3069ee91fcddab8776caafd7613c5f84->enter($__internal_13c72de45ad1c008bbbace69e0b53e7b3069ee91fcddab8776caafd7613c5f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f9b0d0ebf51f193674f59301d2b6fdfc00660c3533f66c0eac201f7ee043558a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b0d0ebf51f193674f59301d2b6fdfc00660c3533f66c0eac201f7ee043558a->enter($__internal_f9b0d0ebf51f193674f59301d2b6fdfc00660c3533f66c0eac201f7ee043558a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Annonces Postées</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockSesPosts');\"><a href=\"#\">Ses Posts</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses Commentaires ok</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockCommentsAvis');\"><a href=\"#\">Avis des internautes</a></li>
                  

                    </ul>

                </div></div>

                   
                    <div id=\"IdProfilBlockSesPosts\" class=\"related-post\" >    Ses Posts          </div>   
                    
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >  Annonce spostées22    </div> 
                      
                    <div id=\"IdProfilBlockComments\" class=\"related-post\" >  ses commantaires      </div>  
                                    
                   
                        
                   
                        ";
        // line 150
        echo "                   
                    
                    
                  
                                    
                     <div id=\"IdProfilBlockCommentsAvis\" class=\"related-post\" >  
                        
                        ";
        // line 178
        echo "                        <div class=\"comment-count\"><h4>";
        echo twig_escape_filter($this->env, (isset($context["nbCommentaires"]) || array_key_exists("nbCommentaires", $context) ? $context["nbCommentaires"] : (function () { throw new Twig_Error_Runtime('Variable "nbCommentaires" does not exist.', 178, $this->getSourceContext()); })()), "html", null, true);
        echo " Commentaire(s)</h4></div>

                         ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getMyComments"]) || array_key_exists("getMyComments", $context) ? $context["getMyComments"] : (function () { throw new Twig_Error_Runtime('Variable "getMyComments" does not exist.', 180, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["getMyComment"]) {
            echo " 
                        <div class=\"comment-list\">  
                            <div class=\"media\">
                            <div class=\"media-left\">
                              <a href=\"#\"><img class=\"media-object\" src=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/comment-thumbnail.png "), "html", null, true);
            echo "\" alt=\"placeholder image\"></a>
                           </div>

                          <div class=\"media-body\"><p>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "comment", array()), "html", null, true);
            echo " </p>
                                                    <ul class=\"list-inline\">
                                                        <li><a class=\"media-heading\" href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profilUser", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "id_member_noteur", array()))), "html", null, true);
            echo "\">De : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "username", array()), "html", null, true);
            echo "</a></li>
                                                        <li> le :";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["getMyComment"], "date_create", array()), "html", null, true);
            echo "</li>
                                                        <li><a class=\"reply-btn\" href=\"";
            // line 191
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
        // line 197
        echo "                        
                    </div>
                        
                        

                       <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">          
                        
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

                   

                </article>

            <div class=\"clearfix\"></div>

            </div>

            <aside class=\"col-md-4 col-lg-4\">

            \t

                <div class=\"row\">
                    
                 
                 ";
        // line 240
        if (array_key_exists("modeadmin", $context)) {
            // line 241
            echo "                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                            
                                ";
            // line 244
            if (((isset($context["messageCheck"]) || array_key_exists("messageCheck", $context) ? $context["messageCheck"] : (function () { throw new Twig_Error_Runtime('Variable "messageCheck" does not exist.', 244, $this->getSourceContext()); })()) == "OK")) {
                // line 245
                echo "                                         <div class=\"panel-heading\">Consulter mes messages</div>
                                             <div class=\"panel-body\">
                                        ";
                // line 247
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 247, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    echo " 
                                              <p><a href=\"";
                    // line 248
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
                // line 249
                echo " 
                                ";
            } else {
                // line 251
                echo "                                            <div class=\"panel-heading\">Aucun Message reçu</div>
                                             <div class=\"panel-body\">
                                ";
            }
            // line 254
            echo "
                                </div>
                            </div>
                         </div> 
                     </div> 
                ";
        } else {
            // line 259
            echo " 
                    
                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                             <div class=\"panel-heading\">Donner une note</div>
                                 <div class=\"panel-body\">
                                         ";
            // line 266
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
        // line 293
        echo "    
            </aside>

           </div>

       

      </div>

    </section>

    
";
        
        $__internal_f9b0d0ebf51f193674f59301d2b6fdfc00660c3533f66c0eac201f7ee043558a->leave($__internal_f9b0d0ebf51f193674f59301d2b6fdfc00660c3533f66c0eac201f7ee043558a_prof);

        
        $__internal_13c72de45ad1c008bbbace69e0b53e7b3069ee91fcddab8776caafd7613c5f84->leave($__internal_13c72de45ad1c008bbbace69e0b53e7b3069ee91fcddab8776caafd7613c5f84_prof);

    }

    // line 307
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e645ea70fea7f28b3f1689889505b740359915125bcb2505159b6688d5d95ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e645ea70fea7f28b3f1689889505b740359915125bcb2505159b6688d5d95ff4->enter($__internal_e645ea70fea7f28b3f1689889505b740359915125bcb2505159b6688d5d95ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e33b8c05185a0922b5e7e27cbbe5531ce9eea638ea36be401689e1aaa840cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e33b8c05185a0922b5e7e27cbbe5531ce9eea638ea36be401689e1aaa840cf4->enter($__internal_2e33b8c05185a0922b5e7e27cbbe5531ce9eea638ea36be401689e1aaa840cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 308
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
        
        $__internal_2e33b8c05185a0922b5e7e27cbbe5531ce9eea638ea36be401689e1aaa840cf4->leave($__internal_2e33b8c05185a0922b5e7e27cbbe5531ce9eea638ea36be401689e1aaa840cf4_prof);

        
        $__internal_e645ea70fea7f28b3f1689889505b740359915125bcb2505159b6688d5d95ff4->leave($__internal_e645ea70fea7f28b3f1689889505b740359915125bcb2505159b6688d5d95ff4_prof);

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
        return array (  435 => 308,  426 => 307,  404 => 293,  374 => 266,  366 => 259,  358 => 254,  353 => 251,  349 => 249,  335 => 248,  329 => 247,  325 => 245,  323 => 244,  318 => 241,  316 => 240,  271 => 197,  259 => 191,  255 => 190,  249 => 189,  244 => 187,  238 => 184,  229 => 180,  223 => 178,  214 => 150,  192 => 110,  188 => 109,  183 => 106,  175 => 99,  163 => 90,  154 => 83,  152 => 82,  139 => 72,  130 => 66,  121 => 60,  112 => 54,  97 => 42,  81 => 29,  72 => 23,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Annonces Postées</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockSesPosts');\"><a href=\"#\">Ses Posts</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses Commentaires ok</a></li>
                        <li onclick=\"afficher_div('IdProfilBlockCommentsAvis');\"><a href=\"#\">Avis des internautes</a></li>
                  

                    </ul>

                </div></div>

                   
                    <div id=\"IdProfilBlockSesPosts\" class=\"related-post\" >    Ses Posts          </div>   
                    
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >  Annonce spostées22    </div> 
                      
                    <div id=\"IdProfilBlockComments\" class=\"related-post\" >  ses commantaires      </div>  
                                    
                   
                        
                   
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
\t\t\t\t</div>
                            {% endfor %}
                        
\t\t\t</div>
                        #}
                   
                    
                    
                  
                                    
                     <div id=\"IdProfilBlockCommentsAvis\" class=\"related-post\" >  
                        
                        {#
                            
                            <h4>{{ nbCommentaires }} Commentaire(s)</h4>                       
                            </div>

                                {% for getMyComment in getMyComments %} 
                                       <div class=\"media\">
                                           <div class=\"media-left\">
                                                <a href=\"#\"> <img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"> </a></div>
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
                           
                         </div> #}
                        <div class=\"comment-count\"><h4>{{ nbCommentaires }} Commentaire(s)</h4></div>

                         {% for getMyComment in getMyComments %} 
                        <div class=\"comment-list\">  
                            <div class=\"media\">
                            <div class=\"media-left\">
                              <a href=\"#\"><img class=\"media-object\" src=\"{{ asset('assets/images/comment-thumbnail.png ') }}\" alt=\"placeholder image\"></a>
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
                        
                        

                       <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">          
                        
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
