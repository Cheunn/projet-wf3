<?php

/* user/register.html.twig */
class __TwigTemplate_73ea4775aca89d085b7373b3bbb362556e6d0bb086c807a232027b838ff781a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/register.html.twig", 1);
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
        $__internal_c4d9b0018b12a37ae33bd871447a3766af2b0934135b8b7284a82af49cc4ce6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d9b0018b12a37ae33bd871447a3766af2b0934135b8b7284a82af49cc4ce6c->enter($__internal_c4d9b0018b12a37ae33bd871447a3766af2b0934135b8b7284a82af49cc4ce6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_420738d0d98fb9fce0ee92b70ef3e7650ebb9981d0f0c64bd87d588521962990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420738d0d98fb9fce0ee92b70ef3e7650ebb9981d0f0c64bd87d588521962990->enter($__internal_420738d0d98fb9fce0ee92b70ef3e7650ebb9981d0f0c64bd87d588521962990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d9b0018b12a37ae33bd871447a3766af2b0934135b8b7284a82af49cc4ce6c->leave($__internal_c4d9b0018b12a37ae33bd871447a3766af2b0934135b8b7284a82af49cc4ce6c_prof);

        
        $__internal_420738d0d98fb9fce0ee92b70ef3e7650ebb9981d0f0c64bd87d588521962990->leave($__internal_420738d0d98fb9fce0ee92b70ef3e7650ebb9981d0f0c64bd87d588521962990_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ec1c1051e5db4bb88016666ce62bbac311129056c3077cebc77fcc6940a77db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec1c1051e5db4bb88016666ce62bbac311129056c3077cebc77fcc6940a77db->enter($__internal_5ec1c1051e5db4bb88016666ce62bbac311129056c3077cebc77fcc6940a77db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6504d52f2d10aa75787958983997b447c52fe0ea33eb965784ed0d39da704626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6504d52f2d10aa75787958983997b447c52fe0ea33eb965784ed0d39da704626->enter($__internal_6504d52f2d10aa75787958983997b447c52fe0ea33eb965784ed0d39da704626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <option  value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 32, $this->getSourceContext()); })()), "role", array()), "html", null, true);
        echo "\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                <option  class=\"form-control \" value=\"asso\" >Association</option>
                <option  class=\"form-control \" value=\"user\">Particulier</option>
            
            </select>
        </div>
        
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"name\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"pseudo\" id=\"pseudo\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "pseudo", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none; text-align: center\">
                
                 <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 49, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "\"> 
                <!--<span style=\"text-align: left;\"> Phone </span>
                <input type=tel size=2  maxlength=\"2\" placeholder=\"--\" name=\"phone1\" style=\"text-align: center;\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone2\" style=\"text-align: center;\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone3\" style=\"text-align: center;\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone4\" style=\"text-align: center;\"> - 
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone5\" style=\"text-align: center;\"> -->
           
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->getSourceContext()); })()), "civility", array()), "html", null, true);
        echo "\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <!--<input type=\"file\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar (JPG, PNG ou GIF | max. 15 Ko)\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 68, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"> -->
            <div class=\"form-control\">
               Avatar(JPG, PNG ou GIF | max. 15 Ko) :<input type=\"file\"   name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 70, $this->getSourceContext()); })()), "url_img", array()), "html", null, true);
        echo "\">
            </div>
        </div>
\t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 74, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
        echo "\">
            
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->getSourceContext()); })()), "town", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 80, $this->getSourceContext()); })()), "url_web_orga", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 81, $this->getSourceContext()); })()), "url_fb", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 82, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "\">description</textarea></div>
\t\t
        <div class=\"form-group\"><input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"btn btn-default btn-lg\" value=\"Register Now\"></div>

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
        
        $__internal_6504d52f2d10aa75787958983997b447c52fe0ea33eb965784ed0d39da704626->leave($__internal_6504d52f2d10aa75787958983997b447c52fe0ea33eb965784ed0d39da704626_prof);

        
        $__internal_5ec1c1051e5db4bb88016666ce62bbac311129056c3077cebc77fcc6940a77db->leave($__internal_5ec1c1051e5db4bb88016666ce62bbac311129056c3077cebc77fcc6940a77db_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92393969106213aa9435a69eba72fb9e845e4f19acb2bb97e63302dc4d987aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92393969106213aa9435a69eba72fb9e845e4f19acb2bb97e63302dc4d987aa4->enter($__internal_92393969106213aa9435a69eba72fb9e845e4f19acb2bb97e63302dc4d987aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ad25ea7ffe1cb0040e0918a5e8d3f093ab7a8af44f804562501243cb31cf246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad25ea7ffe1cb0040e0918a5e8d3f093ab7a8af44f804562501243cb31cf246->enter($__internal_1ad25ea7ffe1cb0040e0918a5e8d3f093ab7a8af44f804562501243cb31cf246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.microsoft.com/ajax/jquery.ui/1.8.10/jquery-ui.js\"></script>
        <link rel=\"Stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css\" />
\t <script type=\"text/javascript\">
\t\t \$('#role').change(function(event)
                 {
                     var \$this = \$(this);
                     
                     \$('.form-element').hide();

                     if (\$this.val() == 'user') {\t
\t\t\t\t\t\t\t\$('.user-element').show();
\t\t\t\t\t\t\t\$('.commun-element').show();
                     } else {
\t\t\t\t\t\t\t\$('.commun-element').show();
\t\t\t\t\t\t\t\$('.asso-element').show();
                     }
                 });
                 
                 
                 function envoyerCP()
                 {
                     console.log({ \"codePostal\": \$('input[name=\"postal_code\"]').val() });
                     
                        \$.ajax
                        ({
                                //url: \"APIautoCompletion.php\",  
                                url : '";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("APIautoCompletion");
        echo "', 
                                method  : \"POST\", 
                                data    : { \"codePostal\": \$('input[name=\"postal_code\"]').val() },
                                datatype: 'json'
                        
                        })

                        .done(function(data)
                        {
";
        // line 150
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
        
        $__internal_1ad25ea7ffe1cb0040e0918a5e8d3f093ab7a8af44f804562501243cb31cf246->leave($__internal_1ad25ea7ffe1cb0040e0918a5e8d3f093ab7a8af44f804562501243cb31cf246_prof);

        
        $__internal_92393969106213aa9435a69eba72fb9e845e4f19acb2bb97e63302dc4d987aa4->leave($__internal_92393969106213aa9435a69eba72fb9e845e4f19acb2bb97e63302dc4d987aa4_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 150,  254 => 140,  221 => 111,  212 => 110,  175 => 82,  171 => 81,  167 => 80,  162 => 78,  156 => 75,  152 => 74,  145 => 70,  140 => 68,  128 => 59,  115 => 49,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  80 => 32,  50 => 4,  41 => 3,  11 => 1,);
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
                <option  value=\"{{ user.role }}\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                <option  class=\"form-control \" value=\"asso\" >Association</option>
                <option  class=\"form-control \" value=\"user\">Particulier</option>
            
            </select>
        </div>
        
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"{{ user.firstname }}\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"{{ user.lastname }}\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"name\" value=\"{{ user.name }}\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"pseudo\" id=\"pseudo\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"{{ user.pseudo }}\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"{{ user.email }}\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none; text-align: center\">
                
                 <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"{{ user.phone }}\"> 
                <!--<span style=\"text-align: left;\"> Phone </span>
                <input type=tel size=2  maxlength=\"2\" placeholder=\"--\" name=\"phone1\" style=\"text-align: center;\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone2\" style=\"text-align: center;\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone3\" style=\"text-align: center;\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone4\" style=\"text-align: center;\"> - 
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone5\" style=\"text-align: center;\"> -->
           
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
            <div class=\"form-control\">
               Avatar(JPG, PNG ou GIF | max. 15 Ko) :<input type=\"file\"   name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"{{ user.url_img }}\">
            </div>
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
\t\t \$('#role').change(function(event)
                 {
                     var \$this = \$(this);
                     
                     \$('.form-element').hide();

                     if (\$this.val() == 'user') {\t
\t\t\t\t\t\t\t\$('.user-element').show();
\t\t\t\t\t\t\t\$('.commun-element').show();
                     } else {
\t\t\t\t\t\t\t\$('.commun-element').show();
\t\t\t\t\t\t\t\$('.asso-element').show();
                     }
                 });
                 
                 
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
{% endblock %}", "user/register.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\user\\register.html.twig");
    }
}
