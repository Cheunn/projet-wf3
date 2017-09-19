<?php

/* admin/annonce/list.html.twig */
class __TwigTemplate_8dcdf3687403d9a2f0315bc37ec59ae9c569f0d6f22e19181eda152f088678c2 extends Twig_Template
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
        $__internal_d8d24e2eb9237d991669b4172c6091e99e3a1225d6303bed5495c3c71c4c5bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d24e2eb9237d991669b4172c6091e99e3a1225d6303bed5495c3c71c4c5bbb->enter($__internal_d8d24e2eb9237d991669b4172c6091e99e3a1225d6303bed5495c3c71c4c5bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $__internal_c35a180b46297ff1930da61ac5873014722d3f9d76cd8af32e284e34f654efc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35a180b46297ff1930da61ac5873014722d3f9d76cd8af32e284e34f654efc6->enter($__internal_c35a180b46297ff1930da61ac5873014722d3f9d76cd8af32e284e34f654efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d24e2eb9237d991669b4172c6091e99e3a1225d6303bed5495c3c71c4c5bbb->leave($__internal_d8d24e2eb9237d991669b4172c6091e99e3a1225d6303bed5495c3c71c4c5bbb_prof);

        
        $__internal_c35a180b46297ff1930da61ac5873014722d3f9d76cd8af32e284e34f654efc6->leave($__internal_c35a180b46297ff1930da61ac5873014722d3f9d76cd8af32e284e34f654efc6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ecd9e55c70c772e5cc14241b6afd7b2340bb0d452f451137ec44e27a6104a837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd9e55c70c772e5cc14241b6afd7b2340bb0d452f451137ec44e27a6104a837->enter($__internal_ecd9e55c70c772e5cc14241b6afd7b2340bb0d452f451137ec44e27a6104a837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bac8d287eeb1acf1e781b81323f5e4d71661408368223e0eb2015177bf35c14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac8d287eeb1acf1e781b81323f5e4d71661408368223e0eb2015177bf35c14e->enter($__internal_bac8d287eeb1acf1e781b81323f5e4d71661408368223e0eb2015177bf35c14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bac8d287eeb1acf1e781b81323f5e4d71661408368223e0eb2015177bf35c14e->leave($__internal_bac8d287eeb1acf1e781b81323f5e4d71661408368223e0eb2015177bf35c14e_prof);

        
        $__internal_ecd9e55c70c772e5cc14241b6afd7b2340bb0d452f451137ec44e27a6104a837->leave($__internal_ecd9e55c70c772e5cc14241b6afd7b2340bb0d452f451137ec44e27a6104a837_prof);

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
", "admin/annonce/list.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\admin\\annonce\\list.html.twig");
    }
}
