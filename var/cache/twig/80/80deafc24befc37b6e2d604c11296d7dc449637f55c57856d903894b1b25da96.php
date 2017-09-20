<?php

/* user/chronique/list.html.twig */
class __TwigTemplate_483f361c8a66b147694a3e99ed98011c29fd02057c0b1c3344a7e42a7a3b6bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/chronique/list.html.twig", 1);
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
        $__internal_a895e39c7e8a8ac1e6942a3d964455ff7603fedc473accead4fd8fc292a3c335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a895e39c7e8a8ac1e6942a3d964455ff7603fedc473accead4fd8fc292a3c335->enter($__internal_a895e39c7e8a8ac1e6942a3d964455ff7603fedc473accead4fd8fc292a3c335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/list.html.twig"));

        $__internal_324bdb2300af23219e28a7f9b92c646b5dae1ea3933a8dd284239d1045f8f606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324bdb2300af23219e28a7f9b92c646b5dae1ea3933a8dd284239d1045f8f606->enter($__internal_324bdb2300af23219e28a7f9b92c646b5dae1ea3933a8dd284239d1045f8f606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a895e39c7e8a8ac1e6942a3d964455ff7603fedc473accead4fd8fc292a3c335->leave($__internal_a895e39c7e8a8ac1e6942a3d964455ff7603fedc473accead4fd8fc292a3c335_prof);

        
        $__internal_324bdb2300af23219e28a7f9b92c646b5dae1ea3933a8dd284239d1045f8f606->leave($__internal_324bdb2300af23219e28a7f9b92c646b5dae1ea3933a8dd284239d1045f8f606_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7893acbb6bd20a826e1c89c782854b2a07f4f24facc0be1899c6f06c0681627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7893acbb6bd20a826e1c89c782854b2a07f4f24facc0be1899c6f06c0681627->enter($__internal_a7893acbb6bd20a826e1c89c782854b2a07f4f24facc0be1899c6f06c0681627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8a4e5ebbca4f4fbe90e27e87832a13797ac3447c47c5d0b3b4bbe56fb345d42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4e5ebbca4f4fbe90e27e87832a13797ac3447c47c5d0b3b4bbe56fb345d42d->enter($__internal_8a4e5ebbca4f4fbe90e27e87832a13797ac3447c47c5d0b3b4bbe56fb345d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">

    <h1>Mes Chroniques</h1>
    
    <p><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_chronique_edit");
        echo "\">Ajouter une chronique</a></p>
    
    <table class=\"table\">
        <tr>
            <th>Titre</th>
            <th>Paragraphe 1</th>
            <th>Paragraphe 2</th>
            <th>Catégorie</th>
            <th>Img 1</th>
            <th>Img 2</th>
            <th width=\"120px\"></th>
        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chroniques"] ?? $this->getContext($context, "chroniques")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chronique"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "post_title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "category_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "url_img_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "url_img_2", array()), "html", null, true);
            echo "</td>
                <td>                    
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_chronique_edit", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                       <hr>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_chronique_delete", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chronique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>
    </div>
";
        
        $__internal_8a4e5ebbca4f4fbe90e27e87832a13797ac3447c47c5d0b3b4bbe56fb345d42d->leave($__internal_8a4e5ebbca4f4fbe90e27e87832a13797ac3447c47c5d0b3b4bbe56fb345d42d_prof);

        
        $__internal_a7893acbb6bd20a826e1c89c782854b2a07f4f24facc0be1899c6f06c0681627->leave($__internal_a7893acbb6bd20a826e1c89c782854b2a07f4f24facc0be1899c6f06c0681627_prof);

    }

    public function getTemplateName()
    {
        return "user/chronique/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  121 => 39,  110 => 33,  103 => 29,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  70 => 20,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Mes Chroniques</h1>
    
    <p><a href=\"{{ path('user_chronique_edit') }}\">Ajouter une chronique</a></p>
    
    <table class=\"table\">
        <tr>
            <th>Titre</th>
            <th>Paragraphe 1</th>
            <th>Paragraphe 2</th>
            <th>Catégorie</th>
            <th>Img 1</th>
            <th>Img 2</th>
            <th width=\"120px\"></th>
        </tr>
        {% for chronique in chroniques %}
            <tr>
                <td>{{ chronique.post_title }}</td>
                <td>{{ chronique.paragraph_1}}</td>
                <td>{{ chronique.paragraph_2}}</td>
                <td>{{ chronique.category_name}}</td>
                <td>{{ chronique.url_img_1}}</td>
                <td>{{ chronique.url_img_2}}</td>
                <td>                    
                    <a href=\"{{ path('user_chronique_edit', {id: chronique.id_post}) }}\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                       <hr>
                    <a href=\"{{ path('user_chronique_delete', {id: chronique.id_post}) }}\" class=\"btn btn-danger\">
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

", "user/chronique/list.html.twig", "C:\\xampp\\htdocs\\projet_v2\\templates\\user\\chronique\\list.html.twig");
    }
}
