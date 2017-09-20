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
        $__internal_cab1527e601d122e674abdf5f1fc9e31da382e7e21f06eb67a69b6bc814d9555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab1527e601d122e674abdf5f1fc9e31da382e7e21f06eb67a69b6bc814d9555->enter($__internal_cab1527e601d122e674abdf5f1fc9e31da382e7e21f06eb67a69b6bc814d9555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_8125e7126225fee85c631dddde7d32460931a6a547f88289cbfbb18dfe5f5e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8125e7126225fee85c631dddde7d32460931a6a547f88289cbfbb18dfe5f5e2b->enter($__internal_8125e7126225fee85c631dddde7d32460931a6a547f88289cbfbb18dfe5f5e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cab1527e601d122e674abdf5f1fc9e31da382e7e21f06eb67a69b6bc814d9555->leave($__internal_cab1527e601d122e674abdf5f1fc9e31da382e7e21f06eb67a69b6bc814d9555_prof);

        
        $__internal_8125e7126225fee85c631dddde7d32460931a6a547f88289cbfbb18dfe5f5e2b->leave($__internal_8125e7126225fee85c631dddde7d32460931a6a547f88289cbfbb18dfe5f5e2b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c797bd8790513ad5ab18c1653ab352483c7bcfd406ff498a83622fb366f7d148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c797bd8790513ad5ab18c1653ab352483c7bcfd406ff498a83622fb366f7d148->enter($__internal_c797bd8790513ad5ab18c1653ab352483c7bcfd406ff498a83622fb366f7d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_562724dcbba4e789c63a72c0566a56352b225941d081331a73dc2a8b3060faf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562724dcbba4e789c63a72c0566a56352b225941d081331a73dc2a8b3060faf5->enter($__internal_562724dcbba4e789c63a72c0566a56352b225941d081331a73dc2a8b3060faf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Nom de l'association\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "name", array()), "html", null, true);
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
         
           
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 54, $this->getSourceContext()); })()), "civility", array()), "html", null, true);
        echo "\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <!--<input type=\"file\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar (JPG, PNG ou GIF | max. 15 Ko)\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 63, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\"> -->
            
                <small class=\"\">Avatar(JPG, PNG ou GIF | max. 15 Ko) : </small> 
                <input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\">
                ";
        // line 68
        echo "         
        </div>
\t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 72, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
        echo "\">
            
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->getSourceContext()); })()), "town", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->getSourceContext()); })()), "url_web_orga", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->getSourceContext()); })()), "url_fb", array()), "html", null, true);
        echo "\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 79, $this->getSourceContext()); })()), "description", array()), "html", null, true);
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
        
        $__internal_562724dcbba4e789c63a72c0566a56352b225941d081331a73dc2a8b3060faf5->leave($__internal_562724dcbba4e789c63a72c0566a56352b225941d081331a73dc2a8b3060faf5_prof);

        
        $__internal_c797bd8790513ad5ab18c1653ab352483c7bcfd406ff498a83622fb366f7d148->leave($__internal_c797bd8790513ad5ab18c1653ab352483c7bcfd406ff498a83622fb366f7d148_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b134b8a3d230f923c77d9ec6ecc6661da1d54cd753d384f10b5b8418725d76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b134b8a3d230f923c77d9ec6ecc6661da1d54cd753d384f10b5b8418725d76c->enter($__internal_8b134b8a3d230f923c77d9ec6ecc6661da1d54cd753d384f10b5b8418725d76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da38fd93d6c369ec6d26710706fc878854851885fd6599660bca18c91fe9d964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da38fd93d6c369ec6d26710706fc878854851885fd6599660bca18c91fe9d964->enter($__internal_da38fd93d6c369ec6d26710706fc878854851885fd6599660bca18c91fe9d964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
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
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("APIautoCompletion");
        echo "', 
                                method  : \"POST\", 
                                data    : { \"codePostal\": \$('input[name=\"postal_code\"]').val() },
                                datatype: 'json'
                        
                        })

                        .done(function(data)
                        {
";
        // line 147
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
        
        $__internal_da38fd93d6c369ec6d26710706fc878854851885fd6599660bca18c91fe9d964->leave($__internal_da38fd93d6c369ec6d26710706fc878854851885fd6599660bca18c91fe9d964_prof);

        
        $__internal_8b134b8a3d230f923c77d9ec6ecc6661da1d54cd753d384f10b5b8418725d76c->leave($__internal_8b134b8a3d230f923c77d9ec6ecc6661da1d54cd753d384f10b5b8418725d76c_prof);

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
        return array (  261 => 147,  249 => 137,  216 => 108,  207 => 107,  170 => 79,  166 => 78,  162 => 77,  157 => 75,  151 => 72,  147 => 71,  142 => 68,  135 => 63,  123 => 54,  115 => 49,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  80 => 32,  50 => 4,  41 => 3,  11 => 1,);
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
