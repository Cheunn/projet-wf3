<?php

/* user/chronique/list.html.twig */
class __TwigTemplate_4e8ab4de7330c86e29e842d56aec525943bcd647f078972c77ddb8d40664bed9 extends Twig_Template
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
        $__internal_93bd5794f00fad40f126e3da1696e0f706fd21769c28d66192fb9d5061767d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bd5794f00fad40f126e3da1696e0f706fd21769c28d66192fb9d5061767d29->enter($__internal_93bd5794f00fad40f126e3da1696e0f706fd21769c28d66192fb9d5061767d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/list.html.twig"));

        $__internal_973c5443a3284d674aace99e695f0639ef0d1fae06b2f8f582fedd4c18b50f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973c5443a3284d674aace99e695f0639ef0d1fae06b2f8f582fedd4c18b50f55->enter($__internal_973c5443a3284d674aace99e695f0639ef0d1fae06b2f8f582fedd4c18b50f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/chronique/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bd5794f00fad40f126e3da1696e0f706fd21769c28d66192fb9d5061767d29->leave($__internal_93bd5794f00fad40f126e3da1696e0f706fd21769c28d66192fb9d5061767d29_prof);

        
        $__internal_973c5443a3284d674aace99e695f0639ef0d1fae06b2f8f582fedd4c18b50f55->leave($__internal_973c5443a3284d674aace99e695f0639ef0d1fae06b2f8f582fedd4c18b50f55_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe5711f8aa725e842d509525c59695d6e4e1b32cb007be46ea376d1eac8e1ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5711f8aa725e842d509525c59695d6e4e1b32cb007be46ea376d1eac8e1ffe->enter($__internal_fe5711f8aa725e842d509525c59695d6e4e1b32cb007be46ea376d1eac8e1ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_36f6d8656320d11b042b5a43b8e4e740f2d2e03c229fb8985028d93af2581ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f6d8656320d11b042b5a43b8e4e740f2d2e03c229fb8985028d93af2581ea6->enter($__internal_36f6d8656320d11b042b5a43b8e4e740f2d2e03c229fb8985028d93af2581ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_36f6d8656320d11b042b5a43b8e4e740f2d2e03c229fb8985028d93af2581ea6->leave($__internal_36f6d8656320d11b042b5a43b8e4e740f2d2e03c229fb8985028d93af2581ea6_prof);

        
        $__internal_fe5711f8aa725e842d509525c59695d6e4e1b32cb007be46ea376d1eac8e1ffe->leave($__internal_fe5711f8aa725e842d509525c59695d6e4e1b32cb007be46ea376d1eac8e1ffe_prof);

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

", "user/chronique/list.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\user\\chronique\\list.html.twig");
    }
}
