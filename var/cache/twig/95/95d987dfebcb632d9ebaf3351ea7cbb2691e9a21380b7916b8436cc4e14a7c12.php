<?php

/* admin/annonce/edit.html.twig */
class __TwigTemplate_43834ba1d89ed86da94b89a4f99f511e503d684f618f8c0cf74939ddc7a1b4b7 extends Twig_Template
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
        $__internal_fae753b2200c172202113ffd86ca9882a9fc1205b340bd23325f5dcf8dbdd623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae753b2200c172202113ffd86ca9882a9fc1205b340bd23325f5dcf8dbdd623->enter($__internal_fae753b2200c172202113ffd86ca9882a9fc1205b340bd23325f5dcf8dbdd623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/edit.html.twig"));

        $__internal_f5ff7bee8a40ed49c508de594f7dd31a4f6d8c277c23467b8a66528e445e69d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ff7bee8a40ed49c508de594f7dd31a4f6d8c277c23467b8a66528e445e69d5->enter($__internal_f5ff7bee8a40ed49c508de594f7dd31a4f6d8c277c23467b8a66528e445e69d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae753b2200c172202113ffd86ca9882a9fc1205b340bd23325f5dcf8dbdd623->leave($__internal_fae753b2200c172202113ffd86ca9882a9fc1205b340bd23325f5dcf8dbdd623_prof);

        
        $__internal_f5ff7bee8a40ed49c508de594f7dd31a4f6d8c277c23467b8a66528e445e69d5->leave($__internal_f5ff7bee8a40ed49c508de594f7dd31a4f6d8c277c23467b8a66528e445e69d5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_03244e336d621403851a97c2f192cac50cb8868f41afeed04539833be14dcfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03244e336d621403851a97c2f192cac50cb8868f41afeed04539833be14dcfe9->enter($__internal_03244e336d621403851a97c2f192cac50cb8868f41afeed04539833be14dcfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_913e01d10580ceed28af973416d34827ef8fefa4347e64c4cf51e5d9e6d73f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913e01d10580ceed28af973416d34827ef8fefa4347e64c4cf51e5d9e6d73f83->enter($__internal_913e01d10580ceed28af973416d34827ef8fefa4347e64c4cf51e5d9e6d73f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <h1>";
        // line 5
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id_post", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "post_title", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Contenu</label>
                 <textarea name=\"paragraphe_1\" class=\"form-control\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "paragraphe_1", array()), "html", null, true);
        echo "</textarea>
                  <hr>
                 <textarea name=\"paragraphe_2\" class=\"form-control\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "paragraphe_2", array()), "html", null, true);
        echo "</textarea>
            </div>
            <div class=\"form-group\">
                <label>url images</label>
                    <input name=\"url_img_1\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "url_img_1", array()), "html", null, true);
        echo "\">
                    <hr>
                    <input name=\"url_img_2\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "url_img_2", array()), "html", null, true);
        echo "\">
                    <hr>
                    <input name=\"url_img_3\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "url_img_3", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Categorie </label>
                <select name=\"category_id_category\" class=\"form-control\">
                    <option value=\"\">Choisissez une rubrique</option>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "                        <option 
                            value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id_category", array()), "html", null, true);
            echo "\"
                            ";
            // line 33
            if (($this->getAttribute($context["category"], "id_category", array()) == $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "category_id_category", array()))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
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
        
        $__internal_913e01d10580ceed28af973416d34827ef8fefa4347e64c4cf51e5d9e6d73f83->leave($__internal_913e01d10580ceed28af973416d34827ef8fefa4347e64c4cf51e5d9e6d73f83_prof);

        
        $__internal_03244e336d621403851a97c2f192cac50cb8868f41afeed04539833be14dcfe9->leave($__internal_03244e336d621403851a97c2f192cac50cb8868f41afeed04539833be14dcfe9_prof);

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
{% endblock %}", "admin/annonce/edit.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\admin\\annonce\\edit.html.twig");
    }
}
