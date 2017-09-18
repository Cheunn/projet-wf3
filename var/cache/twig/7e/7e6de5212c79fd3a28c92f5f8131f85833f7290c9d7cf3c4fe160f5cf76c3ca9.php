<?php

/* admin/annonce/edit.html.twig */
class __TwigTemplate_8311028933e2e1f4b6493387991613fdf895c9c19b142ff8029da3a6ebb94ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/annonce/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48b8711e6c4aca7644aee3cd314b93fa492a90559c5323da2abc0ec98d785382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b8711e6c4aca7644aee3cd314b93fa492a90559c5323da2abc0ec98d785382->enter($__internal_48b8711e6c4aca7644aee3cd314b93fa492a90559c5323da2abc0ec98d785382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/edit.html.twig"));

        $__internal_03a789d238963a2eaf25b6e963e870b67fbfd2eeccb4fb57813ba35a6f3af5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a789d238963a2eaf25b6e963e870b67fbfd2eeccb4fb57813ba35a6f3af5ce->enter($__internal_03a789d238963a2eaf25b6e963e870b67fbfd2eeccb4fb57813ba35a6f3af5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b8711e6c4aca7644aee3cd314b93fa492a90559c5323da2abc0ec98d785382->leave($__internal_48b8711e6c4aca7644aee3cd314b93fa492a90559c5323da2abc0ec98d785382_prof);

        
        $__internal_03a789d238963a2eaf25b6e963e870b67fbfd2eeccb4fb57813ba35a6f3af5ce->leave($__internal_03a789d238963a2eaf25b6e963e870b67fbfd2eeccb4fb57813ba35a6f3af5ce_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_63354e230aa385e7cf500849f9d87d65a50ff8649b6ecb6f3b3d9f440424da23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63354e230aa385e7cf500849f9d87d65a50ff8649b6ecb6f3b3d9f440424da23->enter($__internal_63354e230aa385e7cf500849f9d87d65a50ff8649b6ecb6f3b3d9f440424da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5b4f4032d8ac04f23fcb753bd407cb1ee806d568477c05042745521dac894b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4f4032d8ac04f23fcb753bd407cb1ee806d568477c05042745521dac894b83->enter($__internal_5b4f4032d8ac04f23fcb753bd407cb1ee806d568477c05042745521dac894b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h1>";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 5, $this->getSourceContext()); })()), "id_post", array())) {
            echo " Modification ";
        } else {
            echo " Création ";
        }
        echo " annonce</h1>

        <form method=\"post\">
            <div class=\"form-group\">
                <label>Titre</label>
                <input type=\"text\" name=\"post_title\" class=\"form-control\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 10, $this->getSourceContext()); })()), "post_title", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Contenu</label>
                 <textarea name=\"paragraphe_1\" class=\"form-control\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 14, $this->getSourceContext()); })()), "paragraphe_1", array()), "html", null, true);
        echo "</textarea>
                  <hr>
                 <textarea name=\"paragraphe_2\" class=\"form-control\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 16, $this->getSourceContext()); })()), "paragraphe_2", array()), "html", null, true);
        echo "</textarea>
            </div>
            <div class=\"form-group\">
                <label>url images</label>
                    <input name=\"url_img_1\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 20, $this->getSourceContext()); })()), "url_img_1", array()), "html", null, true);
        echo "\">
                    <hr>
                    <input name=\"url_img_2\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 22, $this->getSourceContext()); })()), "url_img_2", array()), "html", null, true);
        echo "\">
                    <hr>
                    <input name=\"url_img_3\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 24, $this->getSourceContext()); })()), "url_img_3", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Categorie </label>
                <select name=\"category_id_category\" class=\"form-control\">
                    <option value=\"\">Choisissez une rubrique</option>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "                        <option 
                            value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id_category", array()), "html", null, true);
            echo "\"
                            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id_category", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new Twig_Error_Runtime('Variable "annonce" does not exist.', 33, $this->getSourceContext()); })()), "category_id_category", array()))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Enregistrer</button>
          
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonces");
        echo "\" class=\"btn btn-default btn-block\">Annuler</a>
            <hr>
        </form>
    </div>
";
        
        $__internal_5b4f4032d8ac04f23fcb753bd407cb1ee806d568477c05042745521dac894b83->leave($__internal_5b4f4032d8ac04f23fcb753bd407cb1ee806d568477c05042745521dac894b83_prof);

        
        $__internal_63354e230aa385e7cf500849f9d87d65a50ff8649b6ecb6f3b3d9f440424da23->leave($__internal_63354e230aa385e7cf500849f9d87d65a50ff8649b6ecb6f3b3d9f440424da23_prof);

    }

    public function getTemplateName()
    {
        return "admin/annonce/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  128 => 37,  119 => 34,  113 => 33,  109 => 32,  106 => 31,  102 => 30,  93 => 24,  88 => 22,  83 => 20,  76 => 16,  71 => 14,  64 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
        <h1>{% if annonce.id_post %} Modification {% else %} Création {% endif %} annonce</h1>

        <form method=\"post\">
            <div class=\"form-group\">
                <label>Titre</label>
                <input type=\"text\" name=\"post_title\" class=\"form-control\" value=\"{{ annonce.post_title }}\">
            </div>
            <div class=\"form-group\">
                <label>Contenu</label>
                 <textarea name=\"paragraphe_1\" class=\"form-control\">{{ annonce.paragraphe_1 }}</textarea>
                  <hr>
                 <textarea name=\"paragraphe_2\" class=\"form-control\">{{ annonce.paragraphe_2 }}</textarea>
            </div>
            <div class=\"form-group\">
                <label>url images</label>
                    <input name=\"url_img_1\" class=\"form-control\" value=\"{{ annonce.url_img_1 }}\">
                    <hr>
                    <input name=\"url_img_2\" class=\"form-control\" value=\"{{ annonce.url_img_2 }}\">
                    <hr>
                    <input name=\"url_img_3\" class=\"form-control\" value=\"{{ annonce.url_img_3 }}\">
            </div>
            <div class=\"form-group\">
                <label>Categorie </label>
                <select name=\"category_id_category\" class=\"form-control\">
                    <option value=\"\">Choisissez une rubrique</option>
                    {% for category in categories %}
                        <option 
                            value=\"{{ category.id_category }}\"
                            {% if category.id_category == annonce.category_id_category %}selected{% endif %}>
                            {{ category.name }}
                        </option>
                    {% endfor %}
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Enregistrer</button>
          
            <a href=\"{{ path('admin_annonces') }}\" class=\"btn btn-default btn-block\">Annuler</a>
            <hr>
        </form>
    </div>
{% endblock %}", "admin/annonce/edit.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\admin\\annonce\\edit.html.twig");
    }
}
