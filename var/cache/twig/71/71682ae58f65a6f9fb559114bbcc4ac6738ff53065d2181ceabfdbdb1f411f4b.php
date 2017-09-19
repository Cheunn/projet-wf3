<?php

/* admin/annonce/list.html.twig */
class __TwigTemplate_bb553cf2856d1c25f9d7320c76ca2244d9d7760c4f254f79995c489dd549680e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/annonce/list.html.twig", 1);
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
        $__internal_57c42ba9deceeb8021ce82e51d4fbf7a6d0c5b7d5776092b9f94bde7f97e2ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c42ba9deceeb8021ce82e51d4fbf7a6d0c5b7d5776092b9f94bde7f97e2ead->enter($__internal_57c42ba9deceeb8021ce82e51d4fbf7a6d0c5b7d5776092b9f94bde7f97e2ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $__internal_d193c4e4532aefe89b2b98b471008f2c4543ff4533889d7f265e9355b4d5b1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d193c4e4532aefe89b2b98b471008f2c4543ff4533889d7f265e9355b4d5b1be->enter($__internal_d193c4e4532aefe89b2b98b471008f2c4543ff4533889d7f265e9355b4d5b1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c42ba9deceeb8021ce82e51d4fbf7a6d0c5b7d5776092b9f94bde7f97e2ead->leave($__internal_57c42ba9deceeb8021ce82e51d4fbf7a6d0c5b7d5776092b9f94bde7f97e2ead_prof);

        
        $__internal_d193c4e4532aefe89b2b98b471008f2c4543ff4533889d7f265e9355b4d5b1be->leave($__internal_d193c4e4532aefe89b2b98b471008f2c4543ff4533889d7f265e9355b4d5b1be_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c29263ac09f2ecd0d874c1a2cce7d5210f01582aeefb0854e3f5fe93c71d34a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29263ac09f2ecd0d874c1a2cce7d5210f01582aeefb0854e3f5fe93c71d34a5->enter($__internal_c29263ac09f2ecd0d874c1a2cce7d5210f01582aeefb0854e3f5fe93c71d34a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7b117a2c710335ba3865bf9e78a54aac2c12ce5ac8b1c87dfc82c56d29500bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b117a2c710335ba3865bf9e78a54aac2c12ce5ac8b1c87dfc82c56d29500bfb->enter($__internal_7b117a2c710335ba3865bf9e78a54aac2c12ce5ac8b1c87dfc82c56d29500bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">

    <h1>Annonces</h1>
    
    <p><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonce_edit");
        echo "\">Ajouter un annonce</a></p>
    
    <table class=\"table\">
        <tr>
            <th>Id </th>
            <th>Titre </th>
            <th>Texte 1 </th>
            <th>Texte 2 </th>
            <th>Img 1 </th>
            <th>Img 2 </th>
            <th>Img 3 </th>
            ";
        // line 20
        echo "            <th width=\"120px\"></th>
        </tr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id_post", array()), "html", null, true);
            echo "</td>";
            // line 25
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "post_title", array()), "html", null, true);
            echo "</td>";
            // line 26
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "paragraphe_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "paragraphe_2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "url_img_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "url_img_2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "url_img_3", array()), "html", null, true);
            echo "</td>
             ";
            // line 32
            echo "             ";
            // line 33
            echo "                <td>                    
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonce_edit", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                       <hr>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonce_delete", array("id" => $this->getAttribute($context["annonce"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </table>
    </div>
";
        
        $__internal_7b117a2c710335ba3865bf9e78a54aac2c12ce5ac8b1c87dfc82c56d29500bfb->leave($__internal_7b117a2c710335ba3865bf9e78a54aac2c12ce5ac8b1c87dfc82c56d29500bfb_prof);

        
        $__internal_c29263ac09f2ecd0d874c1a2cce7d5210f01582aeefb0854e3f5fe93c71d34a5->leave($__internal_c29263ac09f2ecd0d874c1a2cce7d5210f01582aeefb0854e3f5fe93c71d34a5_prof);

    }

    public function getTemplateName()
    {
        return "admin/annonce/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  132 => 44,  121 => 38,  114 => 34,  111 => 33,  109 => 32,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  88 => 26,  84 => 25,  81 => 24,  78 => 23,  73 => 22,  69 => 20,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Annonces</h1>
    
    <p><a href=\"{{ path('admin_annonce_edit') }}\">Ajouter un annonce</a></p>
    
    <table class=\"table\">
        <tr>
            <th>Id </th>
            <th>Titre </th>
            <th>Texte 1 </th>
            <th>Texte 2 </th>
            <th>Img 1 </th>
            <th>Img 2 </th>
            <th>Img 3 </th>
            {#<th>Auteur</th>#}
            <th width=\"120px\"></th>
        </tr>
        {% for annonce in annonces %}
            <tr>
                <td>{{ annonce.id_post }}</td>{# en php : \$article->getId() #}
                <td>{{ annonce.post_title }}</td>{# en php : \$article->getId() #}
                <td>{{ annonce.paragraphe_1}}</td>
                <td>{{ annonce.paragraphe_2}}</td>
                <td>{{ annonce.url_img_1}}</td>
                <td>{{ annonce.url_img_2}}</td>
                <td>{{ annonce.url_img_3}}</td>
             {# <td>{{ article.categoryName }}</td> #}
             {# <td>{{ article.authorName }}</td> #}
                <td>                    
                    <a href=\"{{ path('admin_annonce_edit', {id: annonce.id_post}) }}\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                       <hr>
                    <a href=\"{{ path('admin_annonce_delete', {id: annonce.id_post}) }}\" class=\"btn btn-danger\">
                        Supprimer
                    </a>
                </td>
            </tr>
        {% else %}
            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        {% endfor %}
    </table>
    </div>
{% endblock %}
", "admin/annonce/list.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\admin\\annonce\\list.html.twig");
    }
}
