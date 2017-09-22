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
        $__internal_f4452bb0004a196552b72f296ec1c521af01d0ba634093352efd40c84daab3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4452bb0004a196552b72f296ec1c521af01d0ba634093352efd40c84daab3cb->enter($__internal_f4452bb0004a196552b72f296ec1c521af01d0ba634093352efd40c84daab3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $__internal_c055fea83455258b114693a9c8d792b664744e743e18873433edc3a9d50ed7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c055fea83455258b114693a9c8d792b664744e743e18873433edc3a9d50ed7ac->enter($__internal_c055fea83455258b114693a9c8d792b664744e743e18873433edc3a9d50ed7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4452bb0004a196552b72f296ec1c521af01d0ba634093352efd40c84daab3cb->leave($__internal_f4452bb0004a196552b72f296ec1c521af01d0ba634093352efd40c84daab3cb_prof);

        
        $__internal_c055fea83455258b114693a9c8d792b664744e743e18873433edc3a9d50ed7ac->leave($__internal_c055fea83455258b114693a9c8d792b664744e743e18873433edc3a9d50ed7ac_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3863a8604fdff3d045ce60108674748abec7e142dc6b08ef13ae4c2250b42e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3863a8604fdff3d045ce60108674748abec7e142dc6b08ef13ae4c2250b42e1->enter($__internal_b3863a8604fdff3d045ce60108674748abec7e142dc6b08ef13ae4c2250b42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2d79b8d443801ddf500a63e9fc7efd2c9f0b764e67ff36248856efec2525f7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d79b8d443801ddf500a63e9fc7efd2c9f0b764e67ff36248856efec2525f7ee->enter($__internal_2d79b8d443801ddf500a63e9fc7efd2c9f0b764e67ff36248856efec2525f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Ses annonces</a></li>

                        <li onclick=\"afficher_div('IdProfilBlockChronique');\"><a href=\"#\">Ses chroniques</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses commentaires</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockAvis');\"><a href=\"#\">Avis</a></li>

                  

                    </ul>

                </div></div>

           
             
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >

                        <div class=\"row\">
                            
                        
                                    

                        <div class=\"col-md-12\"><h4></h4></div>
                            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 139, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                                          ";
            // line 140
            echo " 

                                <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                    <div class=\"thumbnail\">

                                        <a href=\"#\"><img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/related-post1.png "), "html", null, true);
            echo "\" alt=\"related post\"></a>

                                        <div class=\"caption\">

                                            <a href=\"#\">teste</a>

                                        </div>

                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                        
                                         

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
        // line 182
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
        // line 227
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
        // line 259
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
        // line 287
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
        // line 317
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

                    <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">

                        <h4>Enntrez votre Message</h4>

                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                           <div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">

                           </div>

                                    </div>

                            </div>


                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

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
        // line 407
        if (array_key_exists("modeadmin", $context)) {
            // line 408
            echo "                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                             <div class=\"panel-heading\">Consulter mes messages</div>
                                 <div class=\"panel-body\">
                                    ";
            // line 412
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 412, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                echo " 
                                           <p><a href=\"";
                // line 413
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
            // line 414
            echo "  

                                </div>
                            </div>
                         </div> 
                     </div> 
                ";
        } else {
            // line 420
            echo " 
                    
                    <div class=\"col-sm-6 col-md-12 col-lg-12\">
                        <div class=\"panel panel-default theme-panel\">  
                             <div class=\"panel-heading\">Donner une note</div>
                                 <div class=\"panel-body\">
                                         ";
            // line 427
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
        // line 454
        echo "    
            </aside>

           </div>

       

      </div>

    </section>

    
";
        
        $__internal_2d79b8d443801ddf500a63e9fc7efd2c9f0b764e67ff36248856efec2525f7ee->leave($__internal_2d79b8d443801ddf500a63e9fc7efd2c9f0b764e67ff36248856efec2525f7ee_prof);

        
        $__internal_b3863a8604fdff3d045ce60108674748abec7e142dc6b08ef13ae4c2250b42e1->leave($__internal_b3863a8604fdff3d045ce60108674748abec7e142dc6b08ef13ae4c2250b42e1_prof);

    }

    // line 468
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e34a5f5e86215d78c833fd38abb7aa947848c368cd9d7282c54ab9f92ac1762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e34a5f5e86215d78c833fd38abb7aa947848c368cd9d7282c54ab9f92ac1762->enter($__internal_8e34a5f5e86215d78c833fd38abb7aa947848c368cd9d7282c54ab9f92ac1762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8cf3e681be2ae42315566e58dbca004de285dd5595d955af5a0fd05e257d2919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf3e681be2ae42315566e58dbca004de285dd5595d955af5a0fd05e257d2919->enter($__internal_8cf3e681be2ae42315566e58dbca004de285dd5595d955af5a0fd05e257d2919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 469
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
                 // #IdProfilBlockComments, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockAvis,  #IdProfilBlockChronique     
                 id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';;
                       \$('#IdProfilBlockAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockComments') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockAvis') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockChronique';id='IdProfilBlockAvis'; }
                    
                if (id == 'IdProfilBlockChronique') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockAvis';id='IdProfilBlockChronique'; }
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
        
        $__internal_8cf3e681be2ae42315566e58dbca004de285dd5595d955af5a0fd05e257d2919->leave($__internal_8cf3e681be2ae42315566e58dbca004de285dd5595d955af5a0fd05e257d2919_prof);

        
        $__internal_8e34a5f5e86215d78c833fd38abb7aa947848c368cd9d7282c54ab9f92ac1762->leave($__internal_8e34a5f5e86215d78c833fd38abb7aa947848c368cd9d7282c54ab9f92ac1762_prof);

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
        return array (  626 => 469,  617 => 468,  595 => 454,  565 => 427,  557 => 420,  548 => 414,  534 => 413,  528 => 412,  522 => 408,  520 => 407,  427 => 317,  394 => 287,  363 => 259,  328 => 227,  280 => 182,  253 => 157,  236 => 146,  228 => 140,  222 => 139,  196 => 115,  190 => 112,  181 => 105,  169 => 96,  160 => 89,  158 => 88,  145 => 78,  136 => 72,  127 => 66,  118 => 60,  103 => 48,  87 => 35,  78 => 29,  50 => 3,  41 => 2,  11 => 1,);
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
                        <li onclick=\"afficher_div('IdProfilBlockAnnonces');\"><a href=\"#\">Ses annonces</a></li>

                        <li onclick=\"afficher_div('IdProfilBlockChronique');\"><a href=\"#\">Ses chroniques</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockComments');\"><a href=\"#\">Ses commentaires</a></li>
                        
                        <li onclick=\"afficher_div('IdProfilBlockAvis');\"><a href=\"#\">Avis</a></li>

                  

                    </ul>

                </div></div>

           
             
                    <div id=\"IdProfilBlockAnnonces\" class=\"related-post\" >

                        <div class=\"row\">
                            
                        
                                    

                        <div class=\"col-md-12\"><h4></h4></div>
                            {% for message in messages %} 
                                          {# <p><a href=\"{{ path('LireMessage', {id: message.idmessage}) }}\"> {{ message.id_member_send }} - {{ message.date }}/ {{ message.title }}</a> </p>     #} 

                                <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                    <div class=\"thumbnail\">

                                        <a href=\"#\"><img src=\"{{ asset('assets/images/post/related-post1.png ') }}\" alt=\"related post\"></a>

                                        <div class=\"caption\">

                                            <a href=\"#\">teste</a>

                                        </div>

                                    </div>
                                </div>
                            {% endfor %}
                                        
                                         

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

                    <div id=\"IdProfilBlockMessage\" class=\"comment-form consultProfilBlocMessageInterne\">

                        <h4>Enntrez votre Message</h4>

                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                           <div class=\"form-group\">

                             <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Nom:\">

                           </div>

                                    </div>

                            </div>


                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Sujet :\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

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
                             <div class=\"panel-heading\">Consulter mes messages</div>
                                 <div class=\"panel-body\">
                                    {% for message in messages %} 
                                           <p><a href=\"{{ path('LireMessage', {id: message.idmessage}) }}\"> {{ message.id_member_send }} - {{ message.date }}/ {{ message.title }}</a> </p>     
                                     {% endfor %}  

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
                 // #IdProfilBlockComments, #IdProfilBlockAnnonces, #IdProfilBlockMessage, #IdProfilBlockAvis,  #IdProfilBlockChronique     
                 id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';;
                       \$('#IdProfilBlockAnnonces').hide(); \$('#id1').hide(); \$('#id2').hide(); \$('#id3').hide(); \$('#id4').hide();
                       
                
                       
                        
                if (id === 'IdProfilBlockAnnonces') 
                    {    console.log('coucou0');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique'; id='IdProfilBlockAnnonces'; }
                    
                if (id == 'IdProfilBlockComments') 
                    {    console.log('coucou1');
                        id1 = 'IdProfilBlockAnnonces';id2 = 'IdProfilBlockMessage';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockComments'; }
                    
                if (id == 'IdProfilBlockMessage') {
                     console.log('coucou2');
                    id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockAvis';id4 = 'IdProfilBlockChronique';id='IdProfilBlockMessage'; }
                    
                if (id == 'IdProfilBlockAvis') 
                {    console.log('coucou3');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockChronique';id='IdProfilBlockAvis'; }
                    
                if (id == 'IdProfilBlockChronique') 
                    {    console.log('coucou4');
                        id1 = 'IdProfilBlockComments';id2 = 'IdProfilBlockAnnonces';id3 = 'IdProfilBlockMessage';id4 = 'IdProfilBlockAvis';id='IdProfilBlockChronique'; }
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
