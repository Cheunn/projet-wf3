<?php

/* admin/annonce/list.html.twig */
class __TwigTemplate_8c00beb97827991b8f9f2ada08d3416e3e89a4b88f0abc4f0aff3c898db4297c extends Twig_Template
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
        $__internal_d2b621302ec0881c454d056b27adc4663d5ca00dd9790285f0173df0102d4a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b621302ec0881c454d056b27adc4663d5ca00dd9790285f0173df0102d4a68->enter($__internal_d2b621302ec0881c454d056b27adc4663d5ca00dd9790285f0173df0102d4a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $__internal_4a91d0075f292e276e6b1339454aa79587c6bb16962c7ce2a6b7e8f85540cbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a91d0075f292e276e6b1339454aa79587c6bb16962c7ce2a6b7e8f85540cbf0->enter($__internal_4a91d0075f292e276e6b1339454aa79587c6bb16962c7ce2a6b7e8f85540cbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b621302ec0881c454d056b27adc4663d5ca00dd9790285f0173df0102d4a68->leave($__internal_d2b621302ec0881c454d056b27adc4663d5ca00dd9790285f0173df0102d4a68_prof);

        
        $__internal_4a91d0075f292e276e6b1339454aa79587c6bb16962c7ce2a6b7e8f85540cbf0->leave($__internal_4a91d0075f292e276e6b1339454aa79587c6bb16962c7ce2a6b7e8f85540cbf0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e258ac028f7e93261d22194cf5d2bb6211d340fd963c3fe6e5832869e7c6d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e258ac028f7e93261d22194cf5d2bb6211d340fd963c3fe6e5832869e7c6d031->enter($__internal_e258ac028f7e93261d22194cf5d2bb6211d340fd963c3fe6e5832869e7c6d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a55ca08448c7914f4b409a4a31e87b7bed6d9f1ceb99002e4621678e3d001dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55ca08448c7914f4b409a4a31e87b7bed6d9f1ceb99002e4621678e3d001dd9->enter($__internal_a55ca08448c7914f4b409a4a31e87b7bed6d9f1ceb99002e4621678e3d001dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new Twig_Error_Runtime('Variable "annonces" does not exist.', 22, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "id_post", array()), "html", null, true);
            echo "</td>";
            // line 25
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "post_title", array()), "html", null, true);
            echo "</td>";
            // line 26
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "paragraphe_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "paragraphe_2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "url_img_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "url_img_2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "url_img_3", array()), "html", null, true);
            echo "</td>
             ";
            // line 32
            echo "             ";
            // line 33
            echo "                <td>                    
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonce_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                       <hr>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_annonce_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["annonce"], "id_post", array()))), "html", null, true);
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
        
        $__internal_a55ca08448c7914f4b409a4a31e87b7bed6d9f1ceb99002e4621678e3d001dd9->leave($__internal_a55ca08448c7914f4b409a4a31e87b7bed6d9f1ceb99002e4621678e3d001dd9_prof);

        
        $__internal_e258ac028f7e93261d22194cf5d2bb6211d340fd963c3fe6e5832869e7c6d031->leave($__internal_e258ac028f7e93261d22194cf5d2bb6211d340fd963c3fe6e5832869e7c6d031_prof);

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
", "admin/annonce/list.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\admin\\annonce\\list.html.twig");
    }
}
