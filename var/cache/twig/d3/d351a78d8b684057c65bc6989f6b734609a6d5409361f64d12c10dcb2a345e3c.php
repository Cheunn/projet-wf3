<?php

/* user/consultProfil.html.twig */
class __TwigTemplate_f2203b51a1bfa29d934e8325b5f4682c11adaaa2728876199f65a146f7fceb93 extends Twig_Template
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
        $__internal_5551dac829f567ac44d5dcf6c3ff3737a3d14182544a1101d49264fc578f0cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5551dac829f567ac44d5dcf6c3ff3737a3d14182544a1101d49264fc578f0cf2->enter($__internal_5551dac829f567ac44d5dcf6c3ff3737a3d14182544a1101d49264fc578f0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $__internal_5dea16d3cfa05390e374befd40111324bfc9cde11da35f4f953c9f0c7a2716f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dea16d3cfa05390e374befd40111324bfc9cde11da35f4f953c9f0c7a2716f1->enter($__internal_5dea16d3cfa05390e374befd40111324bfc9cde11da35f4f953c9f0c7a2716f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/consultProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5551dac829f567ac44d5dcf6c3ff3737a3d14182544a1101d49264fc578f0cf2->leave($__internal_5551dac829f567ac44d5dcf6c3ff3737a3d14182544a1101d49264fc578f0cf2_prof);

        
        $__internal_5dea16d3cfa05390e374befd40111324bfc9cde11da35f4f953c9f0c7a2716f1->leave($__internal_5dea16d3cfa05390e374befd40111324bfc9cde11da35f4f953c9f0c7a2716f1_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3e9bed42df96aca7c4233c1030a00638ac6e95917667f90a4b5f18b81dc8aa06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9bed42df96aca7c4233c1030a00638ac6e95917667f90a4b5f18b81dc8aa06->enter($__internal_3e9bed42df96aca7c4233c1030a00638ac6e95917667f90a4b5f18b81dc8aa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3e8a2905a1c1436f7e02f4dff4d15a4afe7669df1bbde77d794ae1522c961b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8a2905a1c1436f7e02f4dff4d15a4afe7669df1bbde77d794ae1522c961b2c->enter($__internal_3e8a2905a1c1436f7e02f4dff4d15a4afe7669df1bbde77d794ae1522c961b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " </a>

                            </div>    

                        </li>

                        <li>

                           

                            <div class=\"info\">

                            <p>Inscrit le :</p>
                                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "date_create", array()), "html", null, true);
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

                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">

                                <div class=\"thumbnail\">

                                  <a href=\"#\"><img src=\"";
        // line 141
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
        // line 157
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
        // line 173
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
        // line 207
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

                              

                          </div>

                        </div>

                        <div class=\"media\">

                          <div class=\"media-left\">

                            <a href=\"#\">

                              <img class=\"media-object\" src=\"";
        // line 284
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
        // line 312
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
        // line 342
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

                <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                 ";
        // line 435
        if (array_key_exists("modeadmin", $context)) {
            // line 436
            echo "                  <div class=\"panel-heading\">Consulter mes messages</div>

                    <div class=\"panel-body\">

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

                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>

                        </div>

                        </form>
                       
                    </div>

                </div>

               </div>
               ";
        } else {
            // line 470
            echo " 
                   
                   <div class=\"panel-heading\">Donner une note</div>

                    <div class=\"panel-body\">

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

                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>

                        </div>

                        </form>
                       
                    </div>

                </div>

               </div>
               ";
        }
        // line 506
        echo "    
            </aside>

           </div>

       

      </div>

    </section>

    
";
        
        $__internal_3e8a2905a1c1436f7e02f4dff4d15a4afe7669df1bbde77d794ae1522c961b2c->leave($__internal_3e8a2905a1c1436f7e02f4dff4d15a4afe7669df1bbde77d794ae1522c961b2c_prof);

        
        $__internal_3e9bed42df96aca7c4233c1030a00638ac6e95917667f90a4b5f18b81dc8aa06->leave($__internal_3e9bed42df96aca7c4233c1030a00638ac6e95917667f90a4b5f18b81dc8aa06_prof);

    }

    // line 520
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76a463389501d3e01a257afae18f573bf3450fe6546dd928c4d92566d4e017d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a463389501d3e01a257afae18f573bf3450fe6546dd928c4d92566d4e017d4->enter($__internal_76a463389501d3e01a257afae18f573bf3450fe6546dd928c4d92566d4e017d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_531f17fbc9c7b6b3e0d35ee1a208a9b8687fb38ff0f1fb26e87ca8d8ddeb957c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531f17fbc9c7b6b3e0d35ee1a208a9b8687fb38ff0f1fb26e87ca8d8ddeb957c->enter($__internal_531f17fbc9c7b6b3e0d35ee1a208a9b8687fb38ff0f1fb26e87ca8d8ddeb957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 521
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
        
        $__internal_531f17fbc9c7b6b3e0d35ee1a208a9b8687fb38ff0f1fb26e87ca8d8ddeb957c->leave($__internal_531f17fbc9c7b6b3e0d35ee1a208a9b8687fb38ff0f1fb26e87ca8d8ddeb957c_prof);

        
        $__internal_76a463389501d3e01a257afae18f573bf3450fe6546dd928c4d92566d4e017d4->leave($__internal_76a463389501d3e01a257afae18f573bf3450fe6546dd928c4d92566d4e017d4_prof);

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
        return array (  639 => 521,  630 => 520,  608 => 506,  569 => 470,  532 => 436,  530 => 435,  434 => 342,  401 => 312,  370 => 284,  335 => 252,  287 => 207,  250 => 173,  231 => 157,  212 => 141,  184 => 115,  178 => 112,  169 => 105,  157 => 96,  148 => 89,  146 => 88,  103 => 48,  87 => 35,  78 => 29,  50 => 3,  41 => 2,  11 => 1,);
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

                <div class=\"col-sm-6 col-md-12 col-lg-12\">

                <div class=\"panel panel-default theme-panel\">

                 {% if modeadmin is defined %}
                  <div class=\"panel-heading\">Consulter mes messages</div>

                    <div class=\"panel-body\">

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

                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>

                        </div>

                        </form>
                       
                    </div>

                </div>

               </div>
               {% else %} 
                   
                   <div class=\"panel-heading\">Donner une note</div>

                    <div class=\"panel-body\">

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

                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Envoyer</button>

                        </div>

                        </form>
                       
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
{% endblock %}", "user/consultProfil.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\user\\consultProfil.html.twig");
    }
}
