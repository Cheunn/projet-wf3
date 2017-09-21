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
        $__internal_6085de2dd91f782a87b0a751471944c45750b2c88393ee8a39aee7f76f7ebee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6085de2dd91f782a87b0a751471944c45750b2c88393ee8a39aee7f76f7ebee7->enter($__internal_6085de2dd91f782a87b0a751471944c45750b2c88393ee8a39aee7f76f7ebee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/list.html.twig"));

        $__internal_c79f6058dfeeb17f7986ae4e1b01f32706e8747a0070b4f3f46fcae0b65f3156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79f6058dfeeb17f7986ae4e1b01f32706e8747a0070b4f3f46fcae0b65f3156->enter($__internal_c79f6058dfeeb17f7986ae4e1b01f32706e8747a0070b4f3f46fcae0b65f3156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6085de2dd91f782a87b0a751471944c45750b2c88393ee8a39aee7f76f7ebee7->leave($__internal_6085de2dd91f782a87b0a751471944c45750b2c88393ee8a39aee7f76f7ebee7_prof);

        
        $__internal_c79f6058dfeeb17f7986ae4e1b01f32706e8747a0070b4f3f46fcae0b65f3156->leave($__internal_c79f6058dfeeb17f7986ae4e1b01f32706e8747a0070b4f3f46fcae0b65f3156_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9652722018d0b082ed80ac93953f69e37e8e543884de3f1452a4f32c3525952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9652722018d0b082ed80ac93953f69e37e8e543884de3f1452a4f32c3525952->enter($__internal_d9652722018d0b082ed80ac93953f69e37e8e543884de3f1452a4f32c3525952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1890443e0b2fddbfb02216d006c7f2c8ffdc2a188e9df73b275b4dbe8d675d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1890443e0b2fddbfb02216d006c7f2c8ffdc2a188e9df73b275b4dbe8d675d68->enter($__internal_1890443e0b2fddbfb02216d006c7f2c8ffdc2a188e9df73b275b4dbe8d675d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <th width=\"120px\"></th>
        </tr>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chroniques"] ?? $this->getContext($context, "chroniques")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chronique"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "post_title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "category_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "url_img_1", array()), "html", null, true);
            echo "</td>
                <td>                    
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_chronique_edit", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                       <hr>
                    <a href=\"";
            // line 31
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
            // line 37
            echo "            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chronique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table>
    </div>
";
        
        $__internal_1890443e0b2fddbfb02216d006c7f2c8ffdc2a188e9df73b275b4dbe8d675d68->leave($__internal_1890443e0b2fddbfb02216d006c7f2c8ffdc2a188e9df73b275b4dbe8d675d68_prof);

        
        $__internal_d9652722018d0b082ed80ac93953f69e37e8e543884de3f1452a4f32c3525952->leave($__internal_d9652722018d0b082ed80ac93953f69e37e8e543884de3f1452a4f32c3525952_prof);

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
        return array (  123 => 39,  116 => 37,  105 => 31,  98 => 27,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  69 => 19,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
            <th width=\"120px\"></th>
        </tr>
        {% for chronique in chroniques %}
            <tr>
                <td>{{ chronique.post_title }}</td>
                <td>{{ chronique.paragraph_1}}</td>
                <td>{{ chronique.paragraph_2}}</td>
                <td>{{ chronique.category_name}}</td>
                <td>{{ chronique.url_img_1}}</td>
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
