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
        $__internal_869c04719e59da4974782e166c593afe97282e568a4918fde49daa5e1c252428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869c04719e59da4974782e166c593afe97282e568a4918fde49daa5e1c252428->enter($__internal_869c04719e59da4974782e166c593afe97282e568a4918fde49daa5e1c252428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_b6c5ba4f105defd880710efdf1e4286fd9ee358453131bc1073b5c5702158f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c5ba4f105defd880710efdf1e4286fd9ee358453131bc1073b5c5702158f7a->enter($__internal_b6c5ba4f105defd880710efdf1e4286fd9ee358453131bc1073b5c5702158f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869c04719e59da4974782e166c593afe97282e568a4918fde49daa5e1c252428->leave($__internal_869c04719e59da4974782e166c593afe97282e568a4918fde49daa5e1c252428_prof);

        
        $__internal_b6c5ba4f105defd880710efdf1e4286fd9ee358453131bc1073b5c5702158f7a->leave($__internal_b6c5ba4f105defd880710efdf1e4286fd9ee358453131bc1073b5c5702158f7a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_acaf2a0cdd67b4e1563215a02a544c72ba7037756ba58a3f73f3b133ab7a3275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acaf2a0cdd67b4e1563215a02a544c72ba7037756ba58a3f73f3b133ab7a3275->enter($__internal_acaf2a0cdd67b4e1563215a02a544c72ba7037756ba58a3f73f3b133ab7a3275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_005baecf08bbedc0d68a71807ccf655080dd506aa7ca767cb2c45fa603c5a5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005baecf08bbedc0d68a71807ccf655080dd506aa7ca767cb2c45fa603c5a5f8->enter($__internal_005baecf08bbedc0d68a71807ccf655080dd506aa7ca767cb2c45fa603c5a5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                <option  class=\"form-control \" value=\"asso\" >Association</option>
                <option  class=\"form-control \" value=\"user\">Particulier</option>
            
            </select>
        </div>
        
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"name\" value=\"\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"pseudo\" id=\"pseudo\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
                
                <!-- <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone\" value=\"\"> -->
                <input type=tel size=2  maxlength=\"2\" placeholder=\"06\" name=\"phone1\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone2\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone3\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone4\">
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar\" value=\"\"></div>

        \t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"\"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"\">
            
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"\">description</textarea></div>
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
        
        $__internal_005baecf08bbedc0d68a71807ccf655080dd506aa7ca767cb2c45fa603c5a5f8->leave($__internal_005baecf08bbedc0d68a71807ccf655080dd506aa7ca767cb2c45fa603c5a5f8_prof);

        
        $__internal_acaf2a0cdd67b4e1563215a02a544c72ba7037756ba58a3f73f3b133ab7a3275->leave($__internal_acaf2a0cdd67b4e1563215a02a544c72ba7037756ba58a3f73f3b133ab7a3275_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f99cded7affd5ba07e4bc06111e937a948429fddaf6f60def0f83d7b630a818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f99cded7affd5ba07e4bc06111e937a948429fddaf6f60def0f83d7b630a818->enter($__internal_3f99cded7affd5ba07e4bc06111e937a948429fddaf6f60def0f83d7b630a818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5589a6c7ef6da16fc8f3f80b01ea8f8faff08e2b8ff134d25347c5f09f443fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5589a6c7ef6da16fc8f3f80b01ea8f8faff08e2b8ff134d25347c5f09f443fa->enter($__internal_e5589a6c7ef6da16fc8f3f80b01ea8f8faff08e2b8ff134d25347c5f09f443fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
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
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("APIautoCompletion");
        echo "', 
                                method  : \"POST\", 
                                data    : { \"codePostal\": \$('input[name=\"postal_code\"]').val() },
                                datatype: 'json'
                        
                        })

                        .done(function(data)
                        {
";
        // line 144
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
        
        $__internal_e5589a6c7ef6da16fc8f3f80b01ea8f8faff08e2b8ff134d25347c5f09f443fa->leave($__internal_e5589a6c7ef6da16fc8f3f80b01ea8f8faff08e2b8ff134d25347c5f09f443fa_prof);

        
        $__internal_3f99cded7affd5ba07e4bc06111e937a948429fddaf6f60def0f83d7b630a818->leave($__internal_3f99cded7affd5ba07e4bc06111e937a948429fddaf6f60def0f83d7b630a818_prof);

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
        return array (  212 => 144,  200 => 134,  167 => 105,  158 => 104,  50 => 4,  41 => 3,  11 => 1,);
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
                <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                <option  class=\"form-control \" value=\"asso\" >Association</option>
                <option  class=\"form-control \" value=\"user\">Particulier</option>
            
            </select>
        </div>
        
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"name\" value=\"\"></div>
        <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"pseudo\" id=\"pseudo\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"\"></div>
        <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
                
                <!-- <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone\" value=\"\"> -->
                <input type=tel size=2  maxlength=\"2\" placeholder=\"06\" name=\"phone1\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone2\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone3\"> -  
                <input type=tel size=2 maxlength=\"2\" placeholder=\"--\" name=\"phone4\">
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"civility\" class=\"form-control \" name=\"civility\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar\" value=\"\"></div>

        \t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"\"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"\">
            
        </div>
        
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"\">
        </div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"\"></div>
        <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"\"></div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  value=\"\">description</textarea></div>
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
