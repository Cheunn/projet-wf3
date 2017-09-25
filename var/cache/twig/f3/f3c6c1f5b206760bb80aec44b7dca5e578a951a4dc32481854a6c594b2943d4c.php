<?php

/* admin/annonce/list.html.twig */
class __TwigTemplate_92d886e4d27a308cce4b631e40cb53364d9ac85a1764931a5a54cc8e86980df2 extends Twig_Template
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
        $__internal_e0f09be527b954da5295211cd0db1803f40cae796dd2a24be5e23f3dccae9bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f09be527b954da5295211cd0db1803f40cae796dd2a24be5e23f3dccae9bd0->enter($__internal_e0f09be527b954da5295211cd0db1803f40cae796dd2a24be5e23f3dccae9bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $__internal_c4277615585892e6b9e89dba73765490c036e715041b15e34ead81398f374856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4277615585892e6b9e89dba73765490c036e715041b15e34ead81398f374856->enter($__internal_c4277615585892e6b9e89dba73765490c036e715041b15e34ead81398f374856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/annonce/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f09be527b954da5295211cd0db1803f40cae796dd2a24be5e23f3dccae9bd0->leave($__internal_e0f09be527b954da5295211cd0db1803f40cae796dd2a24be5e23f3dccae9bd0_prof);

        
        $__internal_c4277615585892e6b9e89dba73765490c036e715041b15e34ead81398f374856->leave($__internal_c4277615585892e6b9e89dba73765490c036e715041b15e34ead81398f374856_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_604a982d9c3dad4978173a0d7c619d372d52e65b68c61739b05ff983520e6080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604a982d9c3dad4978173a0d7c619d372d52e65b68c61739b05ff983520e6080->enter($__internal_604a982d9c3dad4978173a0d7c619d372d52e65b68c61739b05ff983520e6080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_503080e9341239391bdcb35d387e6f7985b2abc272f9e5e011c72db7206b0d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503080e9341239391bdcb35d387e6f7985b2abc272f9e5e011c72db7206b0d8c->enter($__internal_503080e9341239391bdcb35d387e6f7985b2abc272f9e5e011c72db7206b0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
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
        
        $__internal_503080e9341239391bdcb35d387e6f7985b2abc272f9e5e011c72db7206b0d8c->leave($__internal_503080e9341239391bdcb35d387e6f7985b2abc272f9e5e011c72db7206b0d8c_prof);

        
        $__internal_604a982d9c3dad4978173a0d7c619d372d52e65b68c61739b05ff983520e6080->leave($__internal_604a982d9c3dad4978173a0d7c619d372d52e65b68c61739b05ff983520e6080_prof);

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
", "admin/annonce/list.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\annonce\\list.html.twig");
    }
}
