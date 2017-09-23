<?php

/* layout.html.twig */
class __TwigTemplate_17d4ea0c179ccc070c5feb0960816b4a5c4efca8966e146026cff67edd6f0f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72ea79464fb5d21641abe39b4a11ecdb636787a1c21c4ef6059cd0ca7c0cb024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ea79464fb5d21641abe39b4a11ecdb636787a1c21c4ef6059cd0ca7c0cb024->enter($__internal_72ea79464fb5d21641abe39b4a11ecdb636787a1c21c4ef6059cd0ca7c0cb024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_17c8287cddfd5c78234aeeb7a47707a88cf815145b6f3dbe77bf812c3c2a2c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c8287cddfd5c78234aeeb7a47707a88cf815145b6f3dbe77bf812c3c2a2c97->enter($__internal_17c8287cddfd5c78234aeeb7a47707a88cf815145b6f3dbe77bf812c3c2a2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icon/icon.png"), "html", null, true);
        echo "\">

        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo " - projet wf3 </title>

        <!-- Bootstrap core CSS -->

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 19
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
        // line 29
        $this->loadTemplate("header.html.twig", "layout.html.twig", 29)->display($context);
        echo "  
         
        <div class=\"container\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                echo " 
                    ";
                // line 34
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 35
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
            // line 38
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        </div>
           
        ";
        // line 43
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 43)->display($context);
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "        

    </body>
</html>
";
        
        $__internal_72ea79464fb5d21641abe39b4a11ecdb636787a1c21c4ef6059cd0ca7c0cb024->leave($__internal_72ea79464fb5d21641abe39b4a11ecdb636787a1c21c4ef6059cd0ca7c0cb024_prof);

        
        $__internal_17c8287cddfd5c78234aeeb7a47707a88cf815145b6f3dbe77bf812c3c2a2c97->leave($__internal_17c8287cddfd5c78234aeeb7a47707a88cf815145b6f3dbe77bf812c3c2a2c97_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_de35eac6f6e449036eb5f3189dbc7ed3aca36375cca52ebd5153d0332b0f4296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de35eac6f6e449036eb5f3189dbc7ed3aca36375cca52ebd5153d0332b0f4296->enter($__internal_de35eac6f6e449036eb5f3189dbc7ed3aca36375cca52ebd5153d0332b0f4296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1797f2f882f89eb735526574601acc5e6a238501612a7fcd7cf7823edaef9857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1797f2f882f89eb735526574601acc5e6a238501612a7fcd7cf7823edaef9857->enter($__internal_1797f2f882f89eb735526574601acc5e6a238501612a7fcd7cf7823edaef9857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_1797f2f882f89eb735526574601acc5e6a238501612a7fcd7cf7823edaef9857->leave($__internal_1797f2f882f89eb735526574601acc5e6a238501612a7fcd7cf7823edaef9857_prof);

        
        $__internal_de35eac6f6e449036eb5f3189dbc7ed3aca36375cca52ebd5153d0332b0f4296->leave($__internal_de35eac6f6e449036eb5f3189dbc7ed3aca36375cca52ebd5153d0332b0f4296_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_36ddd446810cef262db5e0636bfa53a664ac63052fbf4c50c859e4aabdd1ea9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ddd446810cef262db5e0636bfa53a664ac63052fbf4c50c859e4aabdd1ea9c->enter($__internal_36ddd446810cef262db5e0636bfa53a664ac63052fbf4c50c859e4aabdd1ea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9fe1ebf890999ba5e3bb90542fd75c95474b7e16c5597a1418c95300792b19be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe1ebf890999ba5e3bb90542fd75c95474b7e16c5597a1418c95300792b19be->enter($__internal_9fe1ebf890999ba5e3bb90542fd75c95474b7e16c5597a1418c95300792b19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9fe1ebf890999ba5e3bb90542fd75c95474b7e16c5597a1418c95300792b19be->leave($__internal_9fe1ebf890999ba5e3bb90542fd75c95474b7e16c5597a1418c95300792b19be_prof);

        
        $__internal_36ddd446810cef262db5e0636bfa53a664ac63052fbf4c50c859e4aabdd1ea9c->leave($__internal_36ddd446810cef262db5e0636bfa53a664ac63052fbf4c50c859e4aabdd1ea9c_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77a68ea6a3592cb25d5d6604acc4ab61c76f83bd81959fc33697ec3094755ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a68ea6a3592cb25d5d6604acc4ab61c76f83bd81959fc33697ec3094755ebe->enter($__internal_77a68ea6a3592cb25d5d6604acc4ab61c76f83bd81959fc33697ec3094755ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_acb91da0216441fdadd76a2aea51aaf5633b47a54f263c3436c391b0e717fee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb91da0216441fdadd76a2aea51aaf5633b47a54f263c3436c391b0e717fee3->enter($__internal_acb91da0216441fdadd76a2aea51aaf5633b47a54f263c3436c391b0e717fee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "
                 <!-- Bootstrap core JavaScript
        ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap -->\t
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <!-- owl-carousel -->
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <!-- masonry -->
\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/masonry/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form Validation -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- custom -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_acb91da0216441fdadd76a2aea51aaf5633b47a54f263c3436c391b0e717fee3->leave($__internal_acb91da0216441fdadd76a2aea51aaf5633b47a54f263c3436c391b0e717fee3_prof);

        
        $__internal_77a68ea6a3592cb25d5d6604acc4ab61c76f83bd81959fc33697ec3094755ebe->leave($__internal_77a68ea6a3592cb25d5d6604acc4ab61c76f83bd81959fc33697ec3094755ebe_prof);

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
        return array (  218 => 60,  213 => 58,  208 => 56,  203 => 54,  198 => 52,  194 => 51,  189 => 49,  183 => 45,  174 => 44,  157 => 40,  139 => 14,  125 => 62,  122 => 44,  120 => 43,  116 => 41,  114 => 40,  111 => 39,  105 => 38,  93 => 35,  87 => 34,  80 => 33,  76 => 32,  70 => 29,  57 => 19,  53 => 18,  46 => 14,  41 => 12,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
        <link rel=\"icon\" href=\"{{ asset('assets/icon/icon.png') }}\">

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
        {% block javascripts %}

                 <!-- Bootstrap core JavaScript
        ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src=\"{{ asset('assets/js/jquery-1.11.2.min.js') }}\"></script>
    <!-- bootstrap -->\t
    <script src=\"{{ asset('assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/modernizr.js') }}\"></script>
    <!-- owl-carousel -->
\t<script src=\"{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}\"></script>
    <!-- masonry -->
\t<script src=\"{{ asset('assets/plugins/masonry/masonry.min.js') }}\"></script>
    <!-- Form Validation -->
    <script src=\"{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}\"></script>
    <!-- custom -->
    <script src=\"{{ asset('assets/js/app.js') }}\"></script>
        {% endblock %}
        

    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\layout.html.twig");
    }
}
