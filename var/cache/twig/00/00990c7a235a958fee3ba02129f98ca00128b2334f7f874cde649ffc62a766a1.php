<?php

/* admin/handicap/handicap.html.twig */
class __TwigTemplate_c85f1f693788e2def45bdfc1e1fb3fdbe25f984af9aa83efe3d6361ce5f8af24 extends Twig_Template
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
        $__internal_6a04bfc7a873c731c4e2057aad4bbdf258a9fb6bd581cd7cc4c668f957db59a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a04bfc7a873c731c4e2057aad4bbdf258a9fb6bd581cd7cc4c668f957db59a2->enter($__internal_6a04bfc7a873c731c4e2057aad4bbdf258a9fb6bd581cd7cc4c668f957db59a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/handicap/handicap.html.twig"));

        $__internal_a0b98ef81f1d3a318f0354497fc21da170d6e2cfd98bf2d9b7881bc40c576be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b98ef81f1d3a318f0354497fc21da170d6e2cfd98bf2d9b7881bc40c576be0->enter($__internal_a0b98ef81f1d3a318f0354497fc21da170d6e2cfd98bf2d9b7881bc40c576be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/handicap/handicap.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["handicap"]);
        foreach ($context['_seq'] as $context["_key"] => $context["handicap"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("handicap", array("id" => $this->getAttribute($context["handicap"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handicap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>

 <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_handicap_edit");
        echo "\">Ajouter un handicap</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th></th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["handicap"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["handicap"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["handicap"], "name", array()), "html", null, true);
            echo "</td>
               
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_handicap_edit", array("id" => $this->getAttribute($context["handicap"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_handicap_delete", array("id" => $this->getAttribute($context["handicap"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handicap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tables>";
        
        $__internal_6a04bfc7a873c731c4e2057aad4bbdf258a9fb6bd581cd7cc4c668f957db59a2->leave($__internal_6a04bfc7a873c731c4e2057aad4bbdf258a9fb6bd581cd7cc4c668f957db59a2_prof);

        
        $__internal_a0b98ef81f1d3a318f0354497fc21da170d6e2cfd98bf2d9b7881bc40c576be0->leave($__internal_a0b98ef81f1d3a318f0354497fc21da170d6e2cfd98bf2d9b7881bc40c576be0_prof);

    }

    public function getTemplateName()
    {
        return "admin/handicap/handicap.html.twig";
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
    {% for handicap in handicap %}
        <li><a href=\"{{ path('handicap', {id: handicap.id}) }}\">{{ handicap.name }}</a></li>
    {% endfor %}
</ul>

 <p><a href=\"{{ path('admin_handicap_edit') }}\">Ajouter un handicap</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th></th>
        </tr>
        {% for handicap in handicap %}
            <tr>
                <td>{{ handicap.id }}</td>
                <td>{{ handicap.name }}</td>
               
                <td><a href=\"{{ path('admin_handicap_edit', {id: handicap.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"{{ path('admin_handicap_delete', {id: handicap.id}) }}\" class=\"btn btn-danger\">Supprimer</a></td>
             </tr>
             
                 {% else %}
            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        {% endfor %}
    </tables>", "admin/handicap/handicap.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\admin\\handicap\\handicap.html.twig");
    }
}
