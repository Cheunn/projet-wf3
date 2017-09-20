<?php

/* user/register2.html.twig */
class __TwigTemplate_81bd54c0b08d08339500a48e5db8137d0d373ef96338f3bd63acde8d97b77955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/register2.html.twig", 1);
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
        $__internal_53daf036da1e788166d33aa4bdce249e91c8692b4d2a5fadee9e649e68872661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53daf036da1e788166d33aa4bdce249e91c8692b4d2a5fadee9e649e68872661->enter($__internal_53daf036da1e788166d33aa4bdce249e91c8692b4d2a5fadee9e649e68872661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register2.html.twig"));

        $__internal_4d43d84d6472b71c779ff6292b03fe279652ff5a4d7badcf53857daa9b82ad06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d43d84d6472b71c779ff6292b03fe279652ff5a4d7badcf53857daa9b82ad06->enter($__internal_4d43d84d6472b71c779ff6292b03fe279652ff5a4d7badcf53857daa9b82ad06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53daf036da1e788166d33aa4bdce249e91c8692b4d2a5fadee9e649e68872661->leave($__internal_53daf036da1e788166d33aa4bdce249e91c8692b4d2a5fadee9e649e68872661_prof);

        
        $__internal_4d43d84d6472b71c779ff6292b03fe279652ff5a4d7badcf53857daa9b82ad06->leave($__internal_4d43d84d6472b71c779ff6292b03fe279652ff5a4d7badcf53857daa9b82ad06_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ff10754c4403860afa3f1bcd4a74d459e4a9bd991ac8ae02f652259d1fbf701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff10754c4403860afa3f1bcd4a74d459e4a9bd991ac8ae02f652259d1fbf701->enter($__internal_6ff10754c4403860afa3f1bcd4a74d459e4a9bd991ac8ae02f652259d1fbf701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d9847459382f79272ea6108ad554db5ce3457de85c08b084ae662ee5aef2671e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9847459382f79272ea6108ad554db5ce3457de85c08b084ae662ee5aef2671e->enter($__internal_d9847459382f79272ea6108ad554db5ce3457de85c08b084ae662ee5aef2671e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

\t\t

<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">

        \t<div class=\"col-md-12\">

            <h2 class=\"heading\">SignUp</h2>

            \t<div class=\"row\">

                \t<div class=\"col-md-6 col-md-offset-3\">

                    <div class=\"panel panel-default x-panel\">

  <div class=\"panel-body\">
      

    <form  class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" >   
      
\t\t <div class=\"form-group\">
\t\t
            <select id=\"role\" class=\"form-control \" name=\"role\"> 
                <!-- <option  value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 32, $this->getSourceContext()); })()), "role", array()), "html", null, true);
        echo "\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                <option  name=\"text\" class=\"form-control\" value=\"asso\"  >Association </option>
                <option  name=\"text\" class=\"form-control\" value=\"user\"  >Particulier  </option> -->
            
            </select>
        </div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Nom de l'association\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none; text-align: center\">
                
                 <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "\"> 
         
           
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->getSourceContext()); })()), "civility", array()), "html", null, true);
        echo "\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <!--<input type=\"file\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar (JPG, PNG ou GIF | max. 15 Ko)\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"> -->
            
                <small class=\"\">Avatar(JPG, PNG ou GIF | max. 15 Ko) : </small> 
                <input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\">
                ";
        // line 67
        echo "         
        </div>
\t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 70, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
        echo "\">
            
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 74, $this->getSourceContext()); })()), "town", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 76, $this->getSourceContext()); })()), "url_web_orga", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->getSourceContext()); })()), "url_fb", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "\">description</textarea></div>
\t\t
        <div class=\"form-group\"><input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"Register 2\"></div>

    </form>


  </div>

</div>

                    </div>

                    

                </div>

            </div>

        </div>

      </div>

    </section>
    

";
        
        $__internal_d9847459382f79272ea6108ad554db5ce3457de85c08b084ae662ee5aef2671e->leave($__internal_d9847459382f79272ea6108ad554db5ce3457de85c08b084ae662ee5aef2671e_prof);

        
        $__internal_6ff10754c4403860afa3f1bcd4a74d459e4a9bd991ac8ae02f652259d1fbf701->leave($__internal_6ff10754c4403860afa3f1bcd4a74d459e4a9bd991ac8ae02f652259d1fbf701_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e12b02accfcbfb570d5ddfb0fbf73ec3e5332e504f57f209f09809d7226eead7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12b02accfcbfb570d5ddfb0fbf73ec3e5332e504f57f209f09809d7226eead7->enter($__internal_e12b02accfcbfb570d5ddfb0fbf73ec3e5332e504f57f209f09809d7226eead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a01fa336e415fbd34f3fbc3254073e1960a5c51d0ed4640afc2a4f7424bc44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a01fa336e415fbd34f3fbc3254073e1960a5c51d0ed4640afc2a4f7424bc44d->enter($__internal_6a01fa336e415fbd34f3fbc3254073e1960a5c51d0ed4640afc2a4f7424bc44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t <script type=\"text/javascript\">
\t\t if (\$('#role').val() == 'user') 
         {\t
\t\t\t\t\t\t\$('.user-element').show();
\t\t\t\t\t\t\$('.commun-element').show();
\t\t\t\t\t\t  \$('#role').html('<option  name=\"text\" class=\"form-control\" value=\"asso\"   >Association </option>
\t\t\t\t\t\t  <option  name=\"text\" class=\"form-control\" value=\"user\" selected >Particulier  </option>');
\t\t\t\t} else 
\t\t\t\t{
\t\t\t\t\t\t\t\$('.commun-element').show();
\t\t\t\t\t\t\t\$('.asso-element').show();
\t\t\t\t\t\t\t \$('#role').html('<option  name=\"text\" class=\"form-control\" value=\"asso\"  selected >Association </option>
\t\t\t\t\t\t  <option  name=\"text\" class=\"form-control\" value=\"user\"  >Particulier  </option>');
\t\t\t\t}
\t\t}
                 
                 
                 function envoyerCP()
                 {
                     console.log({ \"codePostal\": \$('input[name=\"postal_code\"]').val() });
                     
                        \$.ajax
                        ({
                                //url: \"APIautoCompletion.php\",  
                                url : '";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("APIautoCompletion");
        echo "', 
                                method  : \"POST\", 
                                data    : { \"codePostal\": \$('input[name=\"postal_code\"]').val() },
                                datatype: 'json'
                        
                        })

                        .done(function(data)
                        {
";
        // line 146
        echo "                                console.log(data);
                                console.log(data.reponse);
                                //Init contenu ville
                                \$('input[name=\"town\"]').val('');
                                if (data.reponse == \"ERROR\")
                                {
                                        \$('input[name=\"postal_code\"]').val('CP INEXISTANT')
                                        \$('input[name=\"postal_code\"]').css('color','red')
                                } 
                                else \$('input[name=\"town\"]').val(data.VILLE)


                        })

                        .fail(function( jqXHR, textStatus )
                        {
                                console.log( \"Request failed: \" + textStatus );
                        });
                    }
\t</script>
";
        
        $__internal_6a01fa336e415fbd34f3fbc3254073e1960a5c51d0ed4640afc2a4f7424bc44d->leave($__internal_6a01fa336e415fbd34f3fbc3254073e1960a5c51d0ed4640afc2a4f7424bc44d_prof);

        
        $__internal_e12b02accfcbfb570d5ddfb0fbf73ec3e5332e504f57f209f09809d7226eead7->leave($__internal_e12b02accfcbfb570d5ddfb0fbf73ec3e5332e504f57f209f09809d7226eead7_prof);

    }

    public function getTemplateName()
    {
        return "user/register2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 146,  248 => 136,  215 => 107,  206 => 106,  169 => 78,  165 => 77,  161 => 76,  156 => 74,  150 => 71,  146 => 70,  141 => 67,  134 => 62,  122 => 53,  114 => 48,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 38,  80 => 32,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block  content  %}


\t\t

<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">

        \t<div class=\"col-md-12\">

            <h2 class=\"heading\">SignUp</h2>

            \t<div class=\"row\">

                \t<div class=\"col-md-6 col-md-offset-3\">

                    <div class=\"panel panel-default x-panel\">

  <div class=\"panel-body\">
      

    <form  class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" >   
      
\t\t <div class=\"form-group\">
\t\t
            <select id=\"role\" class=\"form-control \" name=\"role\"> 
                <!-- <option  value=\"{{ user.role }}\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                <option  name=\"text\" class=\"form-control\" value=\"asso\"  >Association </option>
                <option  name=\"text\" class=\"form-control\" value=\"user\"  >Particulier  </option> -->
            
            </select>
        </div>
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
        <div class=\"form-group\"><input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"Register 2\"></div>

    </form>


  </div>

</div>

                    </div>

                    

                </div>

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
\t <script type=\"text/javascript\">
\t\t if (\$('#role').val() == 'user') 
         {\t
\t\t\t\t\t\t\$('.user-element').show();
\t\t\t\t\t\t\$('.commun-element').show();
\t\t\t\t\t\t  \$('#role').html('<option  name=\"text\" class=\"form-control\" value=\"asso\"   >Association </option>
\t\t\t\t\t\t  <option  name=\"text\" class=\"form-control\" value=\"user\" selected >Particulier  </option>');
\t\t\t\t} else 
\t\t\t\t{
\t\t\t\t\t\t\t\$('.commun-element').show();
\t\t\t\t\t\t\t\$('.asso-element').show();
\t\t\t\t\t\t\t \$('#role').html('<option  name=\"text\" class=\"form-control\" value=\"asso\"  selected >Association </option>
\t\t\t\t\t\t  <option  name=\"text\" class=\"form-control\" value=\"user\"  >Particulier  </option>');
\t\t\t\t}
\t\t}
                 
                 
                 function envoyerCP()
                 {
                     console.log({ \"codePostal\": \$('input[name=\"postal_code\"]').val() });
                     
                        \$.ajax
                        ({
                                //url: \"APIautoCompletion.php\",  
                                url : '{{ path('APIautoCompletion') }}', 
                                method  : \"POST\", 
                                data    : { \"codePostal\": \$('input[name=\"postal_code\"]').val() },
                                datatype: 'json'
                        
                        })

                        .done(function(data)
                        {
{#                                data = JSON.parse(data2)#}
                                console.log(data);
                                console.log(data.reponse);
                                //Init contenu ville
                                \$('input[name=\"town\"]').val('');
                                if (data.reponse == \"ERROR\")
                                {
                                        \$('input[name=\"postal_code\"]').val('CP INEXISTANT')
                                        \$('input[name=\"postal_code\"]').css('color','red')
                                } 
                                else \$('input[name=\"town\"]').val(data.VILLE)


                        })

                        .fail(function( jqXHR, textStatus )
                        {
                                console.log( \"Request failed: \" + textStatus );
                        });
                    }
\t</script>
{% endblock %}", "user/register2.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\register2.html.twig");
    }
}
