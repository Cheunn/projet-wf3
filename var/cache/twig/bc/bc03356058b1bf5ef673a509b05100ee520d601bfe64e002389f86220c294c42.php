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
        $__internal_4b1e037fe564f421bc5e3b409ba2c0acd56cee7c93fc5551a2170a20b93cf677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1e037fe564f421bc5e3b409ba2c0acd56cee7c93fc5551a2170a20b93cf677->enter($__internal_4b1e037fe564f421bc5e3b409ba2c0acd56cee7c93fc5551a2170a20b93cf677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_0526adfdc0b2ca83b6dcfc25607320a6e0eb284169233cb86d270196d2cc0cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0526adfdc0b2ca83b6dcfc25607320a6e0eb284169233cb86d270196d2cc0cf9->enter($__internal_0526adfdc0b2ca83b6dcfc25607320a6e0eb284169233cb86d270196d2cc0cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1e037fe564f421bc5e3b409ba2c0acd56cee7c93fc5551a2170a20b93cf677->leave($__internal_4b1e037fe564f421bc5e3b409ba2c0acd56cee7c93fc5551a2170a20b93cf677_prof);

        
        $__internal_0526adfdc0b2ca83b6dcfc25607320a6e0eb284169233cb86d270196d2cc0cf9->leave($__internal_0526adfdc0b2ca83b6dcfc25607320a6e0eb284169233cb86d270196d2cc0cf9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_045cd429bbfff7560d5c6efd2dcce66723c03912f97bfafa763740e1a8421b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045cd429bbfff7560d5c6efd2dcce66723c03912f97bfafa763740e1a8421b2e->enter($__internal_045cd429bbfff7560d5c6efd2dcce66723c03912f97bfafa763740e1a8421b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bb43e91d0f526db6a48f057394cda5e36f1450d29952109d366a5c41b6cf8d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb43e91d0f526db6a48f057394cda5e36f1450d29952109d366a5c41b6cf8d05->enter($__internal_bb43e91d0f526db6a48f057394cda5e36f1450d29952109d366a5c41b6cf8d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

\t\t

<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">      \t<div class=\"col-md-12\">        <h2 class=\"heading\">SignUp</h2>\t<div class=\"row\">

                \t<div class=\"col-md-6 col-md-offset-3\">

                    <div class=\"panel panel-default x-panel\">

    <div class=\"panel-body\">

    <form  class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" >   
        ";
        // line 21
        if (array_key_exists("createprofil", $context)) {
            echo "  
            <div class=\"form-group\"><select id=\"role\" class=\"form-control \" name=\"role\" > 
                        <option  value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->getSourceContext()); })()), "role", array()), "html", null, true);
            echo "\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                        <option  class=\"form-control \" value=\"asso\" >Association</option>
                        <option  class=\"form-control \" value=\"user\">Particulier</option></select></div>
            <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Nom de l'association\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->getSourceContext()); })()), "email", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->getSourceContext()); })()), "civility", array()), "html", null, true);
            echo "\"> 
                        <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                        <option   class=\"form-control \" value=\"Mr\" >Homme</option>
                        <option    class=\"form-control \" value=\"Mme\">Femme</option></select></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><small class=\"\">Avatar : </small><input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\"> </div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->getSourceContext()); })()), "town", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "url_web_orga", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->getSourceContext()); })()), "url_fb", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  >";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 44, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</textarea></div>
            
 
          
        ";
        } elseif (        // line 48
array_key_exists("roleuser", $context)) {
            // line 49
            echo "
            USER DESCIPTION : ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 50, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "
         
            <input type='hidden' name=\"password\" id=\"password\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->getSourceContext()); })()), "password", array()), "html", null, true);
            echo "\" >
            <input type=\"text\" tabindex=\"1\" class=\"form-control\" readonly=\"readonly\" name=\"role\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->getSourceContext()); })()), "role", array()), "html", null, true);
            echo "\" >
            <div class=\"form-group form-element \" ><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\"  readonly=\"readonly\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 54, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "\"></div> 
            <div class=\"form-group form-element \" ><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" readonly=\"readonly\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->getSourceContext()); })()), "email", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element user-element\"  ><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 56, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element user-element\"  ><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
            echo "\"></div> 
            <div class=\"form-group form-element commun-element\"><select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 58, $this->getSourceContext()); })()), "civility", array()), "html", null, true);
            echo "\"> 
                        <option  class=\"form-control \" value=\"Mr\" ";
            // line 59
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->getSourceContext()); })()), "civility", array()) == "Mr")) {
                echo " selected ";
            }
            echo " >Homme</option>
                        <option  class=\"form-control \" value=\"Mme\" ";
            // line 60
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 60, $this->getSourceContext()); })()), "civility", array()) == "Mme")) {
                echo " selected ";
            }
            echo " >Femme</option></select>
            </div> 
            <div class=\"form-group form-element commun-element\" ><input type=\"text\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\" ><small class=\"\">Avatar : </small><input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\"> </div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 65, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 66, $this->getSourceContext()); })()), "town", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  >";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 67, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</textarea></div>
            
        ";
        } elseif (        // line 69
array_key_exists("roleasso", $context)) {
            echo " 
            ASSO
            <input type='hidden' name=\"password\" id=\"password\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->getSourceContext()); })()), "password", array()), "html", null, true);
            echo "\" >
             <input type=\"text\" tabindex=\"1\" class=\"form-control\" readonly=\"readonly\" name=\"role\"  value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 72, $this->getSourceContext()); })()), "role", array()), "html", null, true);
            echo "\" >
            <div class=\"form-group form-element asso-element\"  ><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" readonly=\"readonly\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 73, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\" ><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" readonly=\"readonly\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 74, $this->getSourceContext()); })()), "email", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><small class=\"\">Avatar : </small><input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\"> </div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->getSourceContext()); })()), "adress", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->getSourceContext()); })()), "postal_code", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 79, $this->getSourceContext()); })()), "town", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element asso-element\"  ><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 80, $this->getSourceContext()); })()), "url_web_orga", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element asso-element\"  ><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 81, $this->getSourceContext()); })()), "url_fb", array()), "html", null, true);
            echo "\"></div>
            <div class=\"form-group form-element commun-element\"  ><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  >";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 82, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</textarea></div>
        ";
        }
        // line 84
        echo "        
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
        
        $__internal_bb43e91d0f526db6a48f057394cda5e36f1450d29952109d366a5c41b6cf8d05->leave($__internal_bb43e91d0f526db6a48f057394cda5e36f1450d29952109d366a5c41b6cf8d05_prof);

        
        $__internal_045cd429bbfff7560d5c6efd2dcce66723c03912f97bfafa763740e1a8421b2e->leave($__internal_045cd429bbfff7560d5c6efd2dcce66723c03912f97bfafa763740e1a8421b2e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3beb19fe8c63af95cec4dbc8775d5bd1a3f1813e69f6baf5f0ca78b233c18032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3beb19fe8c63af95cec4dbc8775d5bd1a3f1813e69f6baf5f0ca78b233c18032->enter($__internal_3beb19fe8c63af95cec4dbc8775d5bd1a3f1813e69f6baf5f0ca78b233c18032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3329d782554eae15f242537e397a41fb5a2fc0ed426f4a4002f02119281426f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3329d782554eae15f242537e397a41fb5a2fc0ed426f4a4002f02119281426f5->enter($__internal_3329d782554eae15f242537e397a41fb5a2fc0ed426f4a4002f02119281426f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
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
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("APIautoCompletion");
        echo "', 
                                method  : \"POST\", 
                                data    : { \"codePostal\": \$('input[name=\"postal_code\"]').val() },
                                datatype: 'json'
                        
                        })

                        .done(function(data)
                        {
";
        // line 151
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
        
        $__internal_3329d782554eae15f242537e397a41fb5a2fc0ed426f4a4002f02119281426f5->leave($__internal_3329d782554eae15f242537e397a41fb5a2fc0ed426f4a4002f02119281426f5_prof);

        
        $__internal_3beb19fe8c63af95cec4dbc8775d5bd1a3f1813e69f6baf5f0ca78b233c18032->leave($__internal_3beb19fe8c63af95cec4dbc8775d5bd1a3f1813e69f6baf5f0ca78b233c18032_prof);

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
        return array (  354 => 151,  342 => 141,  309 => 112,  300 => 111,  265 => 84,  260 => 82,  256 => 81,  252 => 80,  248 => 79,  244 => 78,  240 => 77,  235 => 75,  231 => 74,  227 => 73,  223 => 72,  219 => 71,  214 => 69,  209 => 67,  205 => 66,  201 => 65,  197 => 64,  192 => 62,  185 => 60,  179 => 59,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  159 => 54,  155 => 53,  151 => 52,  146 => 50,  143 => 49,  141 => 48,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  106 => 34,  102 => 33,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  74 => 23,  69 => 21,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block  content  %}


\t\t

<section class=\"innercontent\">

    <div class=\"container\">

    \t<div class=\"row\">      \t<div class=\"col-md-12\">        <h2 class=\"heading\">SignUp</h2>\t<div class=\"row\">

                \t<div class=\"col-md-6 col-md-offset-3\">

                    <div class=\"panel panel-default x-panel\">

    <div class=\"panel-body\">

    <form  class=\"entry-form\" action=\"\" method=\"post\" role=\"form\" >   
        {% if createprofil is defined %}  
            <div class=\"form-group\"><select id=\"role\" class=\"form-control \" name=\"role\" > 
                        <option  value=\"{{ user.role }}\" class=\"disabled selected hidden\" name=\"text\">Qui êtes-vous?</option> 
                        <option  class=\"form-control \" value=\"asso\" >Association</option>
                        <option  class=\"form-control \" value=\"user\">Particulier</option></select></div>
            <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"{{ user.firstname }}\"></div>
            <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"{{ user.lastname }}\"></div>
            <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Nom de l'association\" value=\"{{ user.name }}\"></div>
            <div class=\"form-group form-element user-element\"  style=\"display:none;\"><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" placeholder=\"Pseudo\" value=\"{{ user.name }}\"></div>
            <div class=\"form-group form-element commun-element\" style=\"display:none;\"><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" placeholder=\"Email Address (champ obligatoire)\" value=\"{{ user.email }}\"></div>
            <div class=\"form-group form-element commun-element\" style=\"display:none;\" ><input type=\"password\" name=\"password\" id=\"password\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Password (champ obligatoire)\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" tabindex=\"2\" class=\"form-control user\" placeholder=\"Confirm Password(champ obligatoire) \"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"{{ user.phone }}\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"{{ user.civility }}\"> 
                        <option  value=\"\" class=\"disabled selected hidden\" name=\"text\">Civilité?</option> 
                        <option   class=\"form-control \" value=\"Mr\" >Homme</option>
                        <option    class=\"form-control \" value=\"Mme\">Femme</option></select></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><small class=\"\">Avatar : </small><input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\"> </div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"{{ user.adress }}\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"{{ user.postal_code }}\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"{{ user.town }}\"></div>
            <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"{{ user.url_web_orga }}\"></div>
            <div class=\"form-group form-element asso-element\"  style=\"display:none;\"><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"{{ user.url_fb }}\"></div>
            <div class=\"form-group form-element commun-element\"  style=\"display:none;\"><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  >{{ user.description }}</textarea></div>
            
 
          
        {% elseif roleuser is defined %}

            USER DESCIPTION : {{ user.description }}
         
            <input type='hidden' name=\"password\" id=\"password\" value=\"{{ user.password }}\" >
            <input type=\"text\" tabindex=\"1\" class=\"form-control\" readonly=\"readonly\" name=\"role\" value=\"{{ user.role}}\" >
            <div class=\"form-group form-element \" ><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\"  readonly=\"readonly\" value=\"{{ user.name }}\"></div> 
            <div class=\"form-group form-element \" ><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" readonly=\"readonly\" value=\"{{ user.email }}\"></div>
            <div class=\"form-group form-element user-element\"  ><input type=\"text\" name=\"firstname\" id=\"firstname\" tabindex=\"1\" class=\"form-control\" placeholder=\"firstname\" value=\"{{ user.firstname }}\"></div>
            <div class=\"form-group form-element user-element\"  ><input type=\"text\" name=\"lastname\" id=\"lastname\" tabindex=\"1\" class=\"form-control\" placeholder=\"lastname\" value=\"{{ user.lastname }}\"></div> 
            <div class=\"form-group form-element commun-element\"><select id=\"civility\" class=\"form-control \" name=\"civility\" value=\"{{ user.civility }}\"> 
                        <option  class=\"form-control \" value=\"Mr\" {% if user.civility == \"Mr\" %} selected {% endif %} >Homme</option>
                        <option  class=\"form-control \" value=\"Mme\" {% if user.civility == \"Mme\" %} selected {% endif %} >Femme</option></select>
            </div> 
            <div class=\"form-group form-element commun-element\" ><input type=\"text\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"{{ user.phone }}\"></div>
            <div class=\"form-group form-element commun-element\" ><small class=\"\">Avatar : </small><input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\"> </div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"{{ user.adress }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"{{ user.postal_code }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"{{ user.town }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  >{{ user.description }}</textarea></div>
            
        {% elseif roleasso is defined %} 
            ASSO
            <input type='hidden' name=\"password\" id=\"password\" value=\"{{ user.password }}\" >
             <input type=\"text\" tabindex=\"1\" class=\"form-control\" readonly=\"readonly\" name=\"role\"  value=\"{{ user.role}}\" >
            <div class=\"form-group form-element asso-element\"  ><input type=\"text\" name=\"name\" id=\"name\" tabindex=\"1\" class=\"form-control\" readonly=\"readonly\" value=\"{{ user.name }}\"></div>
            <div class=\"form-group form-element commun-element\" ><input type=\"email\" name=\"email\" id=\"email\" tabindex=\"1\" class=\"form-control user\" readonly=\"readonly\" value=\"{{ user.email }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"phone\" id=\"phone\" tabindex=\"1\" class=\"form-control\" placeholder=\"phone \" value=\"{{ user.phone }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><small class=\"\">Avatar : </small><input class=\"btn-file btn-default btn-block\" type=\"file\"  name=\"url_img\" id=\"url_img\" tabindex=\"1\"  value=\"\"> </div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"adress\" id=\"adress\" tabindex=\"1\" class=\"form-control\" placeholder=\"adress\" value=\"{{ user.adress }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" onBlur=\"envoyerCP()\" name=\"postal_code\" id=\"postal_code\" tabindex=\"1\" class=\"form-control\" placeholder=\"postal code\" value=\"{{ user.postal_code }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><input type=\"text\" name=\"town\" id=\"town\" tabindex=\"1\" class=\"form-control\" placeholder=\"city\" value=\"{{ user.town }}\"></div>
            <div class=\"form-group form-element asso-element\"  ><input type=\"text\" name=\"url_web_orga\" id=\"url_web_orga\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_web_orga\" value=\"{{ user.url_web_orga }}\"></div>
            <div class=\"form-group form-element asso-element\"  ><input type=\"text\" name=\"url_fb\" id=\"url_fb\" tabindex=\"1\" class=\"form-control\" placeholder=\"url_fb\" value=\"{{ user.url_fb }}\"></div>
            <div class=\"form-group form-element commun-element\"  ><textarea name=\"description\" id=\"description\" tabindex=\"1\" class=\"form-control\"  >{{ user.description }}</textarea></div>
        {% endif %}
        
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
