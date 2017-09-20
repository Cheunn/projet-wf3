<?php

/* user/chronique/edit.html.twig */
class __TwigTemplate_a1b060ef2aff99525337f0c1c22b66a44b8a7f4d3b859bc9001b630fe018c9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/chronique/edit.html.twig", 1);
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
        $__internal_ad4ecd9a8b207d7963b3c7dc60b2acd1ff1a4d2785974340deca1be6585e9528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4ecd9a8b207d7963b3c7dc60b2acd1ff1a4d2785974340deca1be6585e9528->enter($__internal_ad4ecd9a8b207d7963b3c7dc60b2acd1ff1a4d2785974340deca1be6585e9528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/edit.html.twig"));

        $__internal_761f0a21f242316e0a94565ec0e947e129fdfee33f459205d477491ff36bb778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761f0a21f242316e0a94565ec0e947e129fdfee33f459205d477491ff36bb778->enter($__internal_761f0a21f242316e0a94565ec0e947e129fdfee33f459205d477491ff36bb778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4ecd9a8b207d7963b3c7dc60b2acd1ff1a4d2785974340deca1be6585e9528->leave($__internal_ad4ecd9a8b207d7963b3c7dc60b2acd1ff1a4d2785974340deca1be6585e9528_prof);

        
        $__internal_761f0a21f242316e0a94565ec0e947e129fdfee33f459205d477491ff36bb778->leave($__internal_761f0a21f242316e0a94565ec0e947e129fdfee33f459205d477491ff36bb778_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c2571c2b952536fd144ce8259429634abaabfe8f872bb64e5a3593b3059c574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2571c2b952536fd144ce8259429634abaabfe8f872bb64e5a3593b3059c574->enter($__internal_1c2571c2b952536fd144ce8259429634abaabfe8f872bb64e5a3593b3059c574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8cb949a16b34796c3ea26569147686b540886655b41cde1cacbea0b54fe79103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb949a16b34796c3ea26569147686b540886655b41cde1cacbea0b54fe79103->enter($__internal_8cb949a16b34796c3ea26569147686b540886655b41cde1cacbea0b54fe79103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>";
        if ($this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "id_post", array())) {
            echo "Modification";
        } else {
            echo "Création";
        }
        echo " chronique</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Titre</label>
            <input type=\"text\" name=\"post_title\" class=\"form-control\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "post_title", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>paragraphe 1</label>
            <textarea name=\"paragraph_1\" class=\"form-control\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "paragraph_1", array()), "html", null, true);
        echo "</textarea>
            <label>paragraphe 2</label>
            <textarea name=\"paragraph_2\" class=\"form-control\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "paragraph_2", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label>Image</label>
            <input type=\"text\" name=\"url_img_1\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "url_img_1", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Date</label>
            <input type=\"text\" name=\"post_date\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "post_date", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Catégorie</label>
            <select name=\"category\" class=\"form-control\">
                <option value=\"\">Choisissez une catégorie</option>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "                    <option 
                        value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id_category", array()), "html", null, true);
            echo "\"
                        ";
            // line 31
            if (($this->getAttribute($context["category"], "id_category", array()) == $this->getAttribute(($context["chronique"] ?? $this->getContext($context, "chronique")), "category_id_category", array()))) {
                echo "selected";
            }
            echo ">
                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <select name=\"post_type\" class=\"form-control\">
                <option value=\"chronique\">Chronique</option>
                <option value=\"news\">News</option>
            </select>
        </div>
        <div class=\"form-group\">
            <select name=\"type\" class=\"form-control\">
                <option value=\"user_chronique\">Chronique membre</option>
                <option value=\"asso_chronique\">Chronique association</option>
                <option value=\"news\">News</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_chroniques");
        echo "\" class=\"btn btn-default\">Annuler</a>
        <br><br>
    </form>
";
        
        $__internal_8cb949a16b34796c3ea26569147686b540886655b41cde1cacbea0b54fe79103->leave($__internal_8cb949a16b34796c3ea26569147686b540886655b41cde1cacbea0b54fe79103_prof);

        
        $__internal_1c2571c2b952536fd144ce8259429634abaabfe8f872bb64e5a3593b3059c574->leave($__internal_1c2571c2b952536fd144ce8259429634abaabfe8f872bb64e5a3593b3059c574_prof);

    }

    public function getTemplateName()
    {
        return "user/chronique/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  122 => 35,  113 => 32,  107 => 31,  103 => 30,  100 => 29,  96 => 28,  87 => 22,  80 => 18,  73 => 14,  68 => 12,  61 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{% if chronique.id_post %}Modification{% else %}Création{% endif %} chronique</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Titre</label>
            <input type=\"text\" name=\"post_title\" class=\"form-control\" value=\"{{ chronique.post_title }}\">
        </div>
        <div class=\"form-group\">
            <label>paragraphe 1</label>
            <textarea name=\"paragraph_1\" class=\"form-control\">{{ chronique.paragraph_1 }}</textarea>
            <label>paragraphe 2</label>
            <textarea name=\"paragraph_2\" class=\"form-control\">{{ chronique.paragraph_2 }}</textarea>
        </div>
        <div class=\"form-group\">
            <label>Image</label>
            <input type=\"text\" name=\"url_img_1\" class=\"form-control\" value=\"{{ chronique.url_img_1 }}\">
        </div>
        <div class=\"form-group\">
            <label>Date</label>
            <input type=\"text\" name=\"post_date\" class=\"form-control\" value=\"{{ chronique.post_date }}\">
        </div>
        <div class=\"form-group\">
            <label>Catégorie</label>
            <select name=\"category\" class=\"form-control\">
                <option value=\"\">Choisissez une catégorie</option>
                {% for category in categories %}
                    <option 
                        value=\"{{ category.id_category }}\"
                        {% if category.id_category == chronique.category_id_category %}selected{% endif %}>
                        {{ category.name }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group\">
            <select name=\"post_type\" class=\"form-control\">
                <option value=\"chronique\">Chronique</option>
                <option value=\"news\">News</option>
            </select>
        </div>
        <div class=\"form-group\">
            <select name=\"type\" class=\"form-control\">
                <option value=\"user_chronique\">Chronique membre</option>
                <option value=\"asso_chronique\">Chronique association</option>
                <option value=\"news\">News</option>
            </select>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        <a href=\"{{ path('admin_chroniques') }}\" class=\"btn btn-default\">Annuler</a>
        <br><br>
    </form>
{% endblock %}
", "user/chronique/edit.html.twig", "C:\\xampp\\htdocs\\projet_v2\\templates\\user\\chronique\\edit.html.twig");
    }
}
