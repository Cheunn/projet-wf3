<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_044abb5a2c3fba2edfd20526203ce752441b2ea6a51d6bdf672307c04ef74be6 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b350420fce63a5174947ec57340a4b5dd29e525da03267be5ef0e01b3ecc4a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b350420fce63a5174947ec57340a4b5dd29e525da03267be5ef0e01b3ecc4a56->enter($__internal_b350420fce63a5174947ec57340a4b5dd29e525da03267be5ef0e01b3ecc4a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_36e06f6d293036c6f95c89299b7394552bef0e225b502441b82dd1f8de1a5c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e06f6d293036c6f95c89299b7394552bef0e225b502441b82dd1f8de1a5c42->enter($__internal_36e06f6d293036c6f95c89299b7394552bef0e225b502441b82dd1f8de1a5c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_350b775ab7d482454bed5b1c1d5d521a673167681fb3e41918bfeb8a43973cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350b775ab7d482454bed5b1c1d5d521a673167681fb3e41918bfeb8a43973cc3->enter($__internal_350b775ab7d482454bed5b1c1d5d521a673167681fb3e41918bfeb8a43973cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_730532660d588e17cf778bb1aaeaf4f3e2725149b171604562d70c733b1013db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730532660d588e17cf778bb1aaeaf4f3e2725149b171604562d70c733b1013db->enter($__internal_730532660d588e17cf778bb1aaeaf4f3e2725149b171604562d70c733b1013db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter(($context["additional_classes"] ?? $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter(($context["block_attrs"] ?? $this->getContext($context, "block_attrs")), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || ($context["link"] ?? $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD
        $__internal_b350420fce63a5174947ec57340a4b5dd29e525da03267be5ef0e01b3ecc4a56->leave($__internal_b350420fce63a5174947ec57340a4b5dd29e525da03267be5ef0e01b3ecc4a56_prof);

        
        $__internal_36e06f6d293036c6f95c89299b7394552bef0e225b502441b82dd1f8de1a5c42->leave($__internal_36e06f6d293036c6f95c89299b7394552bef0e225b502441b82dd1f8de1a5c42_prof);
=======
        $__internal_350b775ab7d482454bed5b1c1d5d521a673167681fb3e41918bfeb8a43973cc3->leave($__internal_350b775ab7d482454bed5b1c1d5d521a673167681fb3e41918bfeb8a43973cc3_prof);

        
        $__internal_730532660d588e17cf778bb1aaeaf4f3e2725149b171604562d70c733b1013db->leave($__internal_730532660d588e17cf778bb1aaeaf4f3e2725149b171604562d70c733b1013db_prof);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "C:\\xampp\\htdocs\\projet_v3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
    }
}
