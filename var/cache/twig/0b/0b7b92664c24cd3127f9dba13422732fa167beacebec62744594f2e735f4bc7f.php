<?php

/* layout.html.twig */
class __TwigTemplate_fc6cd4b9cd5e2f828e7bd05790039ebd149a4484af12b96b34937646798b35fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bbdc702e6e393e644175208bac691ad689dba94b26f0ac82a1f34320a8f830e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbdc702e6e393e644175208bac691ad689dba94b26f0ac82a1f34320a8f830e->enter($__internal_5bbdc702e6e393e644175208bac691ad689dba94b26f0ac82a1f34320a8f830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_53545e3de7db402152bf1866c04b478fb5501c17886079f56dabfce678627bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53545e3de7db402152bf1866c04b478fb5501c17886079f56dabfce678627bd5->enter($__internal_53545e3de7db402152bf1866c04b478fb5501c17886079f56dabfce678627bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

    <head>
       


        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"HANDICAP\">
        <meta name=\"author\" content=\"WF3\">
        <!-- Favicon -->
        <link rel=\"icon\" href=\"assets/icon/favicon.ico\">

        <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo " - projet wf3 </title>

        <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src=\"assets/js/html5shiv.min.js\"></script>
              <script src=\"assets/js/respond.min.js\"></script>
            <![endif]-->

    </head>
    
    <body>
         ";
        // line 31
        $this->loadTemplate("header.html.twig", "layout.html.twig", 31)->display($context);
        echo "  
         
        <div class=\"container\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                echo " 
                    ";
                // line 36
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 37
                echo "                    <div class=\"aler alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo $context["flash"];
                echo " </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "        </div>
           
        ";
        // line 45
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 45)->display($context);
        echo "    
    </body>
</html>
";
        
        $__internal_5bbdc702e6e393e644175208bac691ad689dba94b26f0ac82a1f34320a8f830e->leave($__internal_5bbdc702e6e393e644175208bac691ad689dba94b26f0ac82a1f34320a8f830e_prof);

        
        $__internal_53545e3de7db402152bf1866c04b478fb5501c17886079f56dabfce678627bd5->leave($__internal_53545e3de7db402152bf1866c04b478fb5501c17886079f56dabfce678627bd5_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ca407106feb05fb9adc24d78119ab9700a6e08bfca58d764a4d9b42db8f9e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca407106feb05fb9adc24d78119ab9700a6e08bfca58d764a4d9b42db8f9e27->enter($__internal_8ca407106feb05fb9adc24d78119ab9700a6e08bfca58d764a4d9b42db8f9e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6690df0a6d3f6a0f4dcd983a7f2c429446fc0562d76b37a1393b2aad6f8b3439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6690df0a6d3f6a0f4dcd983a7f2c429446fc0562d76b37a1393b2aad6f8b3439->enter($__internal_6690df0a6d3f6a0f4dcd983a7f2c429446fc0562d76b37a1393b2aad6f8b3439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_6690df0a6d3f6a0f4dcd983a7f2c429446fc0562d76b37a1393b2aad6f8b3439->leave($__internal_6690df0a6d3f6a0f4dcd983a7f2c429446fc0562d76b37a1393b2aad6f8b3439_prof);

        
        $__internal_8ca407106feb05fb9adc24d78119ab9700a6e08bfca58d764a4d9b42db8f9e27->leave($__internal_8ca407106feb05fb9adc24d78119ab9700a6e08bfca58d764a4d9b42db8f9e27_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6012fafabab28401bf7100f64ddf832123ef2b748f5e45d3d20752fdd66058f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6012fafabab28401bf7100f64ddf832123ef2b748f5e45d3d20752fdd66058f->enter($__internal_e6012fafabab28401bf7100f64ddf832123ef2b748f5e45d3d20752fdd66058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_525b933015a8e9106afea5d8e143d437bb39e2d8334b9ad959bf318758d0e9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525b933015a8e9106afea5d8e143d437bb39e2d8334b9ad959bf318758d0e9b1->enter($__internal_525b933015a8e9106afea5d8e143d437bb39e2d8334b9ad959bf318758d0e9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_525b933015a8e9106afea5d8e143d437bb39e2d8334b9ad959bf318758d0e9b1->leave($__internal_525b933015a8e9106afea5d8e143d437bb39e2d8334b9ad959bf318758d0e9b1_prof);

        
        $__internal_e6012fafabab28401bf7100f64ddf832123ef2b748f5e45d3d20752fdd66058f->leave($__internal_e6012fafabab28401bf7100f64ddf832123ef2b748f5e45d3d20752fdd66058f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  132 => 16,  118 => 45,  114 => 43,  112 => 42,  109 => 41,  103 => 40,  91 => 37,  85 => 36,  78 => 35,  74 => 34,  68 => 31,  55 => 21,  51 => 20,  44 => 16,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

    <head>
       


        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"HANDICAP\">
        <meta name=\"author\" content=\"WF3\">
        <!-- Favicon -->
        <link rel=\"icon\" href=\"assets/icon/favicon.ico\">

        <title>{% block title '' %} - projet wf3 </title>

        <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/bootstrap-3.3.4/css/bootstrap.min.css') }}\" type='text/css'>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/css\">
         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src=\"assets/js/html5shiv.min.js\"></script>
              <script src=\"assets/js/respond.min.js\"></script>
            <![endif]-->

    </head>
    
    <body>
         {% include 'header.html.twig'%}  
         
        <div class=\"container\">
            {% for type, flashes in app.session.flashbag.all %}
                {% for  flash in flashes %} 
                    {% if type == 'error' %} {% set type = 'danger' %} {% endif %}
                    <div class=\"aler alert-{{type}}\"> {{ flash | raw }} </div>

                {% endfor %}
            {% endfor %}

            {% block content %}{% endblock %}
        </div>
           
        {% include 'footer.html.twig'%}    
    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\layout.html.twig");
    }
}
