<?php

/* admin/chronique/list.html.twig */
class __TwigTemplate_cd269fed3bbaffb64016a9899df0adc77a601cd1d6760d1d91c446187c926b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/chronique/list.html.twig", 1);
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
        $__internal_ddba22e943f2792741a6570e6539c9db17798b17d12cda29e0750a0c6fa3e2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddba22e943f2792741a6570e6539c9db17798b17d12cda29e0750a0c6fa3e2cd->enter($__internal_ddba22e943f2792741a6570e6539c9db17798b17d12cda29e0750a0c6fa3e2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/chronique/list.html.twig"));

        $__internal_f83a98185d8b29ee05fbbbb3b8652e67852e0db3a278ff731ff0710c7c1a93e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83a98185d8b29ee05fbbbb3b8652e67852e0db3a278ff731ff0710c7c1a93e6->enter($__internal_f83a98185d8b29ee05fbbbb3b8652e67852e0db3a278ff731ff0710c7c1a93e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/chronique/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddba22e943f2792741a6570e6539c9db17798b17d12cda29e0750a0c6fa3e2cd->leave($__internal_ddba22e943f2792741a6570e6539c9db17798b17d12cda29e0750a0c6fa3e2cd_prof);

        
        $__internal_f83a98185d8b29ee05fbbbb3b8652e67852e0db3a278ff731ff0710c7c1a93e6->leave($__internal_f83a98185d8b29ee05fbbbb3b8652e67852e0db3a278ff731ff0710c7c1a93e6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_884f707b4e6dfc14f81879bd4cc71f3395e083e8c4254f1c609b44579806ca8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884f707b4e6dfc14f81879bd4cc71f3395e083e8c4254f1c609b44579806ca8f->enter($__internal_884f707b4e6dfc14f81879bd4cc71f3395e083e8c4254f1c609b44579806ca8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2b1257cd81ba6f33c71d734310823fae3f641ded833eaafea108d892a132c700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1257cd81ba6f33c71d734310823fae3f641ded833eaafea108d892a132c700->enter($__internal_2b1257cd81ba6f33c71d734310823fae3f641ded833eaafea108d892a132c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Chroniques</h1>
    
    <p><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_chronique_edit");
        echo "\">Ajouter une chronique</a></p>
    
    <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>paragraphe 1</th>            
            <th>paragraphe 2</th>
            <th>url img 1</th>            
            <th>ulr img 2</th>
            <th width=\"200px\"></th>
        </tr>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chroniques"]) ? $context["chroniques"] : $this->getContext($context, "chroniques")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chronique"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "id_post", array()), "html", null, true);
            echo "</td>";
            // line 22
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "post_title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "category_id_category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_2", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_chronique_edit", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_chronique_delete", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chronique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>
";
        
        $__internal_2b1257cd81ba6f33c71d734310823fae3f641ded833eaafea108d892a132c700->leave($__internal_2b1257cd81ba6f33c71d734310823fae3f641ded833eaafea108d892a132c700_prof);

        
        $__internal_884f707b4e6dfc14f81879bd4cc71f3395e083e8c4254f1c609b44579806ca8f->leave($__internal_884f707b4e6dfc14f81879bd4cc71f3395e083e8c4254f1c609b44579806ca8f_prof);

    }

    public function getTemplateName()
    {
        return "admin/chronique/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  123 => 38,  112 => 32,  106 => 29,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  80 => 22,  77 => 21,  74 => 20,  69 => 19,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Chroniques</h1>
    
    <p><a href=\"{{ path('admin_chronique_edit') }}\">Ajouter une chronique</a></p>
    
    <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>paragraphe 1</th>            
            <th>paragraphe 2</th>
            <th>url img 1</th>            
            <th>ulr img 2</th>
            <th width=\"200px\"></th>
        </tr>
        {% for chronique in chroniques %}
            <tr>
                <td>{{ chronique.id_post }}</td>{# en php : \$article->getId() #}
                <td>{{ chronique.post_title }}</td>
                <td>{{ chronique.category_id_category }}</td>
                <td>{{ chronique.paragraph_1 }}</td>
                <td>{{ chronique.paragraph_2 }}</td>
                <td>{{ chronique.url_img_1 }}</td>
                <td>{{ chronique.url_img_2 }}</td>
                <td>
                    <a href=\"{{ path('admin_chronique_edit', {id: chronique.id_post}) }}\" class=\"btn btn-primary\">
                        Modifier
                    </a>
                    <a href=\"{{ path('admin_chronique_delete', {id: chronique.id_post}) }}\" class=\"btn btn-danger\">
                        Supprimer
                    </a>
                </td>
            </tr>
        {% else %}
            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        {% endfor %}
    </table>
{% endblock %}
", "admin/chronique/list.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\chronique\\list.html.twig");
    }
}
