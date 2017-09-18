<?php

/* user/register.html.twig */
class __TwigTemplate_3b88c3c01e3c2a1f168f8fa7f6a5949eb6a47fb982ffdf52b0accbc6e4bcd753 extends Twig_Template
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
        $__internal_951b0bd6831817af686e6d5424498b31bb8df4e306ea778ad23e7cfec3d72941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951b0bd6831817af686e6d5424498b31bb8df4e306ea778ad23e7cfec3d72941->enter($__internal_951b0bd6831817af686e6d5424498b31bb8df4e306ea778ad23e7cfec3d72941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_566437059d72cca802f4a9d87ddfa915c59cf7c76a1204c1d23ff5c60542eaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566437059d72cca802f4a9d87ddfa915c59cf7c76a1204c1d23ff5c60542eaa8->enter($__internal_566437059d72cca802f4a9d87ddfa915c59cf7c76a1204c1d23ff5c60542eaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951b0bd6831817af686e6d5424498b31bb8df4e306ea778ad23e7cfec3d72941->leave($__internal_951b0bd6831817af686e6d5424498b31bb8df4e306ea778ad23e7cfec3d72941_prof);

        
        $__internal_566437059d72cca802f4a9d87ddfa915c59cf7c76a1204c1d23ff5c60542eaa8->leave($__internal_566437059d72cca802f4a9d87ddfa915c59cf7c76a1204c1d23ff5c60542eaa8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0048c4bbe63ee58df65d5ae00f9f0dba5d84d9f12b3c8fbfe5a2b1c05c68c78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0048c4bbe63ee58df65d5ae00f9f0dba5d84d9f12b3c8fbfe5a2b1c05c68c78f->enter($__internal_0048c4bbe63ee58df65d5ae00f9f0dba5d84d9f12b3c8fbfe5a2b1c05c68c78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1ce48274defc881d76f492a1ee02e2f5ce0b5926ca725e4f3ac09b11e492e742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce48274defc881d76f492a1ee02e2f5ce0b5926ca725e4f3ac09b11e492e742->enter($__internal_1ce48274defc881d76f492a1ee02e2f5ce0b5926ca725e4f3ac09b11e492e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone\" value=\"\">
                <input type=tel size=2> -  <input type=tel size=2> -  <input type=tel size=2> -  <input type=tel size=2>
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"role\" class=\"form-control \" name=\"civility\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar\" value=\"\"></div>

        \t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"\"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal_code\" value=\"\">
            
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
        
        $__internal_1ce48274defc881d76f492a1ee02e2f5ce0b5926ca725e4f3ac09b11e492e742->leave($__internal_1ce48274defc881d76f492a1ee02e2f5ce0b5926ca725e4f3ac09b11e492e742_prof);

        
        $__internal_0048c4bbe63ee58df65d5ae00f9f0dba5d84d9f12b3c8fbfe5a2b1c05c68c78f->leave($__internal_0048c4bbe63ee58df65d5ae00f9f0dba5d84d9f12b3c8fbfe5a2b1c05c68c78f_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fa29797bb36e5ac4a992a69f13dd3855ca328db1344a8b0c9ebf502d0881dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa29797bb36e5ac4a992a69f13dd3855ca328db1344a8b0c9ebf502d0881dbf->enter($__internal_2fa29797bb36e5ac4a992a69f13dd3855ca328db1344a8b0c9ebf502d0881dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a88ee4e139de3556a80cc244101c980afe1c7306af7d5336911093bad5dc0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a88ee4e139de3556a80cc244101c980afe1c7306af7d5336911093bad5dc0d7->enter($__internal_0a88ee4e139de3556a80cc244101c980afe1c7306af7d5336911093bad5dc0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
\t <script type=\"text/javascript\">
\t\t \$('#role').change(function(event){
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
\t</script>
";
        
        $__internal_0a88ee4e139de3556a80cc244101c980afe1c7306af7d5336911093bad5dc0d7->leave($__internal_0a88ee4e139de3556a80cc244101c980afe1c7306af7d5336911093bad5dc0d7_prof);

        
        $__internal_2fa29797bb36e5ac4a992a69f13dd3855ca328db1344a8b0c9ebf502d0881dbf->leave($__internal_2fa29797bb36e5ac4a992a69f13dd3855ca328db1344a8b0c9ebf502d0881dbf_prof);

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
        return array (  163 => 101,  154 => 100,  50 => 4,  41 => 3,  11 => 1,);
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
                <input type=\"tel\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone\" value=\"\">
                <input type=tel size=2> -  <input type=tel size=2> -  <input type=tel size=2> -  <input type=tel size=2>
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\">
            <select id=\"role\" class=\"form-control \" name=\"civility\"> 
                    <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                    <option  class=\"form-control \" value=\"Mr\" >Homme</option>
                    <option  class=\"form-control \" value=\"Mme\">Femme</option>

            </select>
        </div>
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_img\" id=\"url_img\" tabindex=\"1\" class=\"form-control\" placeholder=\"Avatar\" value=\"\"></div>

        \t\t
        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"\"></div>

        <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal_code\" value=\"\">
            
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
    
\t <script type=\"text/javascript\">
\t\t \$('#role').change(function(event){
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
\t</script>
{% endblock %}", "user/register.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\user\\register.html.twig");
    }
}
