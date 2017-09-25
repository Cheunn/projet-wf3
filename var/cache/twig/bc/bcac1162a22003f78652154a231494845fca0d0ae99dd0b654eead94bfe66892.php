<?php

/* admin/category/category.html.twig */
class __TwigTemplate_8f32da6a48852c70f294cd6338847bca9db5282a0b536ce067c9b3a5a1528ef7 extends Twig_Template
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
        $__internal_d23c5fa6a7a2b0ddb329b770bb6fbc272ee92be2a6ee9bd9b678fb7c77204226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23c5fa6a7a2b0ddb329b770bb6fbc272ee92be2a6ee9bd9b678fb7c77204226->enter($__internal_d23c5fa6a7a2b0ddb329b770bb6fbc272ee92be2a6ee9bd9b678fb7c77204226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/category.html.twig"));

        $__internal_28aa014dc785a0eea6d7648b591861178a8c6492f3897cd9ead6a01cacc8da02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28aa014dc785a0eea6d7648b591861178a8c6492f3897cd9ead6a01cacc8da02->enter($__internal_28aa014dc785a0eea6d7648b591861178a8c6492f3897cd9ead6a01cacc8da02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/category.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category", array("id_category" => $this->getAttribute($context["category"], "id_category", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>

 <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit");
        echo "\">Ajouter une category</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Id_category</th>
            <th>Name</th>
            <th></th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id_category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
               
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id_category" => $this->getAttribute($context["category"], "id_category", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                      ";
            // line 24
            echo "             </tr>
             
                 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>";
        
        $__internal_d23c5fa6a7a2b0ddb329b770bb6fbc272ee92be2a6ee9bd9b678fb7c77204226->leave($__internal_d23c5fa6a7a2b0ddb329b770bb6fbc272ee92be2a6ee9bd9b678fb7c77204226_prof);

        
        $__internal_28aa014dc785a0eea6d7648b591861178a8c6492f3897cd9ead6a01cacc8da02->leave($__internal_28aa014dc785a0eea6d7648b591861178a8c6492f3897cd9ead6a01cacc8da02_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  88 => 27,  81 => 24,  77 => 22,  72 => 20,  68 => 19,  65 => 18,  60 => 17,  47 => 7,  43 => 5,  32 => 3,  28 => 2,  25 => 1,);
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
    {% for category in categories %}
        <li><a href=\"{{ path('admin_category', {id_category: category.id_category}) }}\">{{ category.name }}</a></li>
    {% endfor %}
</ul>

 <p><a href=\"{{ path('admin_category_edit') }}\">Ajouter une category</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Id_category</th>
            <th>Name</th>
            <th></th>
        </tr>
        {% for category in categories %}
            <tr>
                <td>{{ category.id_category }}</td>
                <td>{{ category.name }}</td>
               
                <td><a href=\"{{ path('admin_category_edit', {id_category: category.id_category}) }}\" class=\"btn btn-primary\">Modifier</a>
                      {#  <a href=\"{{ path('admin_category_delete', {id_category: category.id_category}) }}\" class=\"btn btn-danger\">Supprimer</a></td>#}
             </tr>
             
                 {% else %}
            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        {% endfor %}
    </table>", "admin/category/category.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\category\\category.html.twig");
    }
}
