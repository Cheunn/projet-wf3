<?php

/* admin/tag/tag.html.twig */
class __TwigTemplate_e5681442e18b18cc8c42d1ff2291ac0652d391421738d12a629039a686f4a086 extends Twig_Template
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
        $__internal_6a3d88724c4539afc05ae725d30f1c1ddb81c306398918126c36715dd8881b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3d88724c4539afc05ae725d30f1c1ddb81c306398918126c36715dd8881b7c->enter($__internal_6a3d88724c4539afc05ae725d30f1c1ddb81c306398918126c36715dd8881b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tag/tag.html.twig"));

        $__internal_2f0c44c4e676feb77bedb052a77cd36feea304ee5a207042607b397999d3204e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0c44c4e676feb77bedb052a77cd36feea304ee5a207042607b397999d3204e->enter($__internal_2f0c44c4e676feb77bedb052a77cd36feea304ee5a207042607b397999d3204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tag/tag.html.twig"));

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
        
        $__internal_6a3d88724c4539afc05ae725d30f1c1ddb81c306398918126c36715dd8881b7c->leave($__internal_6a3d88724c4539afc05ae725d30f1c1ddb81c306398918126c36715dd8881b7c_prof);

        
        $__internal_2f0c44c4e676feb77bedb052a77cd36feea304ee5a207042607b397999d3204e->leave($__internal_2f0c44c4e676feb77bedb052a77cd36feea304ee5a207042607b397999d3204e_prof);

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
    </tables>", "admin/tag/tag.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\admin\\tag\\tag.html.twig");
    }
}
