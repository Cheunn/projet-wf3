<?php

/* admin/type/type.html.twig */
class __TwigTemplate_51e5ecea657185af1489dd3fa4048d9e91906f5b77735087e663034ed6dcf7a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9809e6927b84034b10a8ebce19ff95e0446196535178c5cf15172091cd4f646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9809e6927b84034b10a8ebce19ff95e0446196535178c5cf15172091cd4f646->enter($__internal_b9809e6927b84034b10a8ebce19ff95e0446196535178c5cf15172091cd4f646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/type/type.html.twig"));

        $__internal_01f4b86b19c312484eb8ce70205accc6bd8a5ad6ff45b62588dd854102da8402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f4b86b19c312484eb8ce70205accc6bd8a5ad6ff45b62588dd854102da8402->enter($__internal_01f4b86b19c312484eb8ce70205accc6bd8a5ad6ff45b62588dd854102da8402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/type/type.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["type"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type", array("id_type" => $this->getAttribute($context["type"], "id_type", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>

 <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit");
        echo "\">Ajouter un Type</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Id_Type</th>
            <th>Name</th>
            <th></th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["type"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id_type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "</td>
               
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id_type" => $this->getAttribute($context["type"], "id_type", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_delete", array("id_type" => $this->getAttribute($context["type"], "id_type", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a></td>
             </tr>
             
                 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tables>";
        
        $__internal_b9809e6927b84034b10a8ebce19ff95e0446196535178c5cf15172091cd4f646->leave($__internal_b9809e6927b84034b10a8ebce19ff95e0446196535178c5cf15172091cd4f646_prof);

        
        $__internal_01f4b86b19c312484eb8ce70205accc6bd8a5ad6ff45b62588dd854102da8402->leave($__internal_01f4b86b19c312484eb8ce70205accc6bd8a5ad6ff45b62588dd854102da8402_prof);

    }

    public function getTemplateName()
    {
        return "admin/type/type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  90 => 27,  81 => 23,  77 => 22,  72 => 20,  68 => 19,  65 => 18,  60 => 17,  47 => 7,  43 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav navbar-nav\">
    {% for type in type %}
        <li><a href=\"{{ path('admin_type', {id_type: type.id_type}) }}\">{{ type.name }}</a></li>
    {% endfor %}
</ul>

 <p><a href=\"{{ path('admin_type_edit') }}\">Ajouter un Type</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Id_Type</th>
            <th>Name</th>
            <th></th>
        </tr>
        {% for type in type %}
            <tr>
                <td>{{ type.id_type }}</td>
                <td>{{ type.name }}</td>
               
                <td><a href=\"{{ path('admin_type_edit', {id_type: type.id_type}) }}\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"{{ path('admin_type_delete', {id_type: type.id_type}) }}\" class=\"btn btn-danger\">Supprimer</a></td>
             </tr>
             
                 {% else %}
            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        {% endfor %}
    </tables>", "admin/type/type.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\type\\type.html.twig");
    }
}
