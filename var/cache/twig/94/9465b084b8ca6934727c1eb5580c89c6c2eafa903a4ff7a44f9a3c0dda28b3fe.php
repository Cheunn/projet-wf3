<?php

/* admin/tag/tag.html.twig */
class __TwigTemplate_577cc4fb97077acd129c7a567fe47ecc19aef07a316ef34328e506f4d8d09ace extends Twig_Template
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
        $__internal_b8e75d8fab30daf0945e66fc1a9c265a21ec8f7ed654ed6938d52411ea04dc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e75d8fab30daf0945e66fc1a9c265a21ec8f7ed654ed6938d52411ea04dc68->enter($__internal_b8e75d8fab30daf0945e66fc1a9c265a21ec8f7ed654ed6938d52411ea04dc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tag/tag.html.twig"));

        $__internal_7a09b0444e148ff84e85f62917bf52a1372d91e2d92015844fdb5cb874b22aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a09b0444e148ff84e85f62917bf52a1372d91e2d92015844fdb5cb874b22aea->enter($__internal_7a09b0444e148ff84e85f62917bf52a1372d91e2d92015844fdb5cb874b22aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tag/tag.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tag"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag", array("idtag" => $this->getAttribute($context["tag"], "idtag", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>

 <p><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_edit");
        echo "\">Ajouter un Tag</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Idtag</th>
            <th>Name</th>
            <th></th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tag"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "idtag", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</td>
               
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_edit", array("idtag" => $this->getAttribute($context["tag"], "idtag", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_delete", array("idtag" => $this->getAttribute($context["tag"], "idtag", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tables>";
        
        $__internal_b8e75d8fab30daf0945e66fc1a9c265a21ec8f7ed654ed6938d52411ea04dc68->leave($__internal_b8e75d8fab30daf0945e66fc1a9c265a21ec8f7ed654ed6938d52411ea04dc68_prof);

        
        $__internal_7a09b0444e148ff84e85f62917bf52a1372d91e2d92015844fdb5cb874b22aea->leave($__internal_7a09b0444e148ff84e85f62917bf52a1372d91e2d92015844fdb5cb874b22aea_prof);

    }

    public function getTemplateName()
    {
        return "admin/tag/tag.html.twig";
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
    {% for tag in tag %}
        <li><a href=\"{{ path('admin_tag', {idtag: tag.idtag}) }}\">{{ tag.name }}</a></li>
    {% endfor %}
</ul>

 <p><a href=\"{{ path('admin_tag_edit') }}\">Ajouter un Tag</a></p>
 
 
 
 <table class=\"table\">
        <tr>
            <th>Idtag</th>
            <th>Name</th>
            <th></th>
        </tr>
        {% for tag in tag %}
            <tr>
                <td>{{ tag.idtag }}</td>
                <td>{{ tag.name }}</td>
               
                <td><a href=\"{{ path('admin_tag_edit', {idtag: tag.idtag}) }}\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"{{ path('admin_tag_delete', {idtag: tag.idtag}) }}\" class=\"btn btn-danger\">Supprimer</a></td>
             </tr>
             
                 {% else %}
            <tr><td colspan=\"5\" style=\"text-align: center\">Aucun résultat</td></tr>
        {% endfor %}
    </tables>", "admin/tag/tag.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\admin\\tag\\tag.html.twig");
    }
}
