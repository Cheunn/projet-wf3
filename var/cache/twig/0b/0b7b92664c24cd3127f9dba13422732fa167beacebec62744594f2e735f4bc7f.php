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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64c4263dbd1bb55a24f8801b6d2f51dc1e49d64827a7ddfb7f497776e01dc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64c4263dbd1bb55a24f8801b6d2f51dc1e49d64827a7ddfb7f497776e01dc71->enter($__internal_e64c4263dbd1bb55a24f8801b6d2f51dc1e49d64827a7ddfb7f497776e01dc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_3672898a59ef5e3c42070c3ff30bd6c2c3d50ce2035d53eee098ddd29afd1aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3672898a59ef5e3c42070c3ff30bd6c2c3d50ce2035d53eee098ddd29afd1aed->enter($__internal_3672898a59ef5e3c42070c3ff30bd6c2c3d50ce2035d53eee098ddd29afd1aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 46
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_e64c4263dbd1bb55a24f8801b6d2f51dc1e49d64827a7ddfb7f497776e01dc71->leave($__internal_e64c4263dbd1bb55a24f8801b6d2f51dc1e49d64827a7ddfb7f497776e01dc71_prof);

        
        $__internal_3672898a59ef5e3c42070c3ff30bd6c2c3d50ce2035d53eee098ddd29afd1aed->leave($__internal_3672898a59ef5e3c42070c3ff30bd6c2c3d50ce2035d53eee098ddd29afd1aed_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_25c150cfdabed4a9034b2d8a53e0dd6d1af715814327e3aadcc6b8d9eeced9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c150cfdabed4a9034b2d8a53e0dd6d1af715814327e3aadcc6b8d9eeced9a6->enter($__internal_25c150cfdabed4a9034b2d8a53e0dd6d1af715814327e3aadcc6b8d9eeced9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5cd00bfeccd4ac099f64325f95a73bcc1e6412151d741a28891d240d1b2215a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cd00bfeccd4ac099f64325f95a73bcc1e6412151d741a28891d240d1b2215a->enter($__internal_d5cd00bfeccd4ac099f64325f95a73bcc1e6412151d741a28891d240d1b2215a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_d5cd00bfeccd4ac099f64325f95a73bcc1e6412151d741a28891d240d1b2215a->leave($__internal_d5cd00bfeccd4ac099f64325f95a73bcc1e6412151d741a28891d240d1b2215a_prof);

        
        $__internal_25c150cfdabed4a9034b2d8a53e0dd6d1af715814327e3aadcc6b8d9eeced9a6->leave($__internal_25c150cfdabed4a9034b2d8a53e0dd6d1af715814327e3aadcc6b8d9eeced9a6_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8918e42240277a7e74c34a19c222bca3f3f09ad87b167a8db872ed1e5a5eef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8918e42240277a7e74c34a19c222bca3f3f09ad87b167a8db872ed1e5a5eef9->enter($__internal_d8918e42240277a7e74c34a19c222bca3f3f09ad87b167a8db872ed1e5a5eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_05b174754b5d8f4e255c745970a423666738f9746670bd080a77e367fad8f037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b174754b5d8f4e255c745970a423666738f9746670bd080a77e367fad8f037->enter($__internal_05b174754b5d8f4e255c745970a423666738f9746670bd080a77e367fad8f037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_05b174754b5d8f4e255c745970a423666738f9746670bd080a77e367fad8f037->leave($__internal_05b174754b5d8f4e255c745970a423666738f9746670bd080a77e367fad8f037_prof);

        
        $__internal_d8918e42240277a7e74c34a19c222bca3f3f09ad87b167a8db872ed1e5a5eef9->leave($__internal_d8918e42240277a7e74c34a19c222bca3f3f09ad87b167a8db872ed1e5a5eef9_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7cbaa997c40d9279a93e95ca045d9184518852203e8136940ef260f752324c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cbaa997c40d9279a93e95ca045d9184518852203e8136940ef260f752324c8->enter($__internal_e7cbaa997c40d9279a93e95ca045d9184518852203e8136940ef260f752324c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d51c872900bd60a4deb747633f819802593749fff8f0c4254021beb60a9b3842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51c872900bd60a4deb747633f819802593749fff8f0c4254021beb60a9b3842->enter($__internal_d51c872900bd60a4deb747633f819802593749fff8f0c4254021beb60a9b3842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "         <!-- Bootstrap core JavaScript
            ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap -->\t
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <!-- owl-carousel -->
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>

        <!-- masonry -->
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/masonry/masonry.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Form Validation -->
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

        <!-- custom -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_d51c872900bd60a4deb747633f819802593749fff8f0c4254021beb60a9b3842->leave($__internal_d51c872900bd60a4deb747633f819802593749fff8f0c4254021beb60a9b3842_prof);

        
        $__internal_e7cbaa997c40d9279a93e95ca045d9184518852203e8136940ef260f752324c8->leave($__internal_e7cbaa997c40d9279a93e95ca045d9184518852203e8136940ef260f752324c8_prof);

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
        return array (  217 => 64,  211 => 61,  205 => 58,  199 => 55,  194 => 53,  190 => 52,  185 => 50,  180 => 47,  171 => 46,  154 => 42,  136 => 16,  124 => 66,  121 => 46,  119 => 45,  115 => 43,  113 => 42,  110 => 41,  104 => 40,  92 => 37,  86 => 36,  79 => 35,  75 => 34,  69 => 31,  56 => 21,  52 => 20,  45 => 16,  28 => 1,);
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
        {% block javascripts %}
         <!-- Bootstrap core JavaScript
            ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src=\"{{ asset('assets/js/jquery-1.11.2.min.js') }}\"></script>
        <!-- bootstrap -->\t
        <script src=\"{{ asset('assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/modernizr.js') }}\"></script>
        <!-- owl-carousel -->
            <script src=\"{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}\"></script>

        <!-- masonry -->
            <script src=\"{{ asset('assets/plugins/masonry/masonry.min.js') }}\"></script>

        <!-- Form Validation -->
        <script src=\"{{ asset('assets/plugins/jquery-validate/jquery.validate.min.js') }}\"></script>

        <!-- custom -->
        <script src=\"{{ asset('assets/js/app.js') }}\"></script>
    {% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\layout.html.twig");
    }
}
