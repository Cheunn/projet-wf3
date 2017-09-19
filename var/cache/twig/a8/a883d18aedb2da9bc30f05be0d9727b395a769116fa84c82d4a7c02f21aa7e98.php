<?php

/* layout.html.twig */
class __TwigTemplate_41115b98840b60026bc6e314301c591cbebd81937560f82a8078e75b8954ee32 extends Twig_Template
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
        $__internal_039234a27abcc292f80fe7e68d9256b38465adb0646bb609af8c60c4cc10e743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039234a27abcc292f80fe7e68d9256b38465adb0646bb609af8c60c4cc10e743->enter($__internal_039234a27abcc292f80fe7e68d9256b38465adb0646bb609af8c60c4cc10e743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_50416053d843959bb6476e27055d14c852383e57067d235be447582b28eeb46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50416053d843959bb6476e27055d14c852383e57067d235be447582b28eeb46f->enter($__internal_50416053d843959bb6476e27055d14c852383e57067d235be447582b28eeb46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_039234a27abcc292f80fe7e68d9256b38465adb0646bb609af8c60c4cc10e743->leave($__internal_039234a27abcc292f80fe7e68d9256b38465adb0646bb609af8c60c4cc10e743_prof);

        
        $__internal_50416053d843959bb6476e27055d14c852383e57067d235be447582b28eeb46f->leave($__internal_50416053d843959bb6476e27055d14c852383e57067d235be447582b28eeb46f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdc3f27b99650bd0c06f984f03d0b990714c7d59ec5576a663916037eb9d0e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc3f27b99650bd0c06f984f03d0b990714c7d59ec5576a663916037eb9d0e22->enter($__internal_bdc3f27b99650bd0c06f984f03d0b990714c7d59ec5576a663916037eb9d0e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a527522b74a72db0bffb06d96e96f07a5460e53a84be6ef7606efdfeb508ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a527522b74a72db0bffb06d96e96f07a5460e53a84be6ef7606efdfeb508ae5->enter($__internal_7a527522b74a72db0bffb06d96e96f07a5460e53a84be6ef7606efdfeb508ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_7a527522b74a72db0bffb06d96e96f07a5460e53a84be6ef7606efdfeb508ae5->leave($__internal_7a527522b74a72db0bffb06d96e96f07a5460e53a84be6ef7606efdfeb508ae5_prof);

        
        $__internal_bdc3f27b99650bd0c06f984f03d0b990714c7d59ec5576a663916037eb9d0e22->leave($__internal_bdc3f27b99650bd0c06f984f03d0b990714c7d59ec5576a663916037eb9d0e22_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_d52e506acab8c68edfbaff3286c21a698660ec02efab7926a519641ea2e66480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52e506acab8c68edfbaff3286c21a698660ec02efab7926a519641ea2e66480->enter($__internal_d52e506acab8c68edfbaff3286c21a698660ec02efab7926a519641ea2e66480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33be822c72e990f7269f580e990a6175e0a5b977a9c784973fdfadabd2a0b631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33be822c72e990f7269f580e990a6175e0a5b977a9c784973fdfadabd2a0b631->enter($__internal_33be822c72e990f7269f580e990a6175e0a5b977a9c784973fdfadabd2a0b631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_33be822c72e990f7269f580e990a6175e0a5b977a9c784973fdfadabd2a0b631->leave($__internal_33be822c72e990f7269f580e990a6175e0a5b977a9c784973fdfadabd2a0b631_prof);

        
        $__internal_d52e506acab8c68edfbaff3286c21a698660ec02efab7926a519641ea2e66480->leave($__internal_d52e506acab8c68edfbaff3286c21a698660ec02efab7926a519641ea2e66480_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9aaa69fa238463b723afb3aaee666d325aa5ff02cf9ac39b1f8c4893900f4e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aaa69fa238463b723afb3aaee666d325aa5ff02cf9ac39b1f8c4893900f4e6b->enter($__internal_9aaa69fa238463b723afb3aaee666d325aa5ff02cf9ac39b1f8c4893900f4e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c6d01946c2d6981b2907493086f0f97304aeb06e9763aa9f9bf469c1777b1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6d01946c2d6981b2907493086f0f97304aeb06e9763aa9f9bf469c1777b1bb->enter($__internal_3c6d01946c2d6981b2907493086f0f97304aeb06e9763aa9f9bf469c1777b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3c6d01946c2d6981b2907493086f0f97304aeb06e9763aa9f9bf469c1777b1bb->leave($__internal_3c6d01946c2d6981b2907493086f0f97304aeb06e9763aa9f9bf469c1777b1bb_prof);

        
        $__internal_9aaa69fa238463b723afb3aaee666d325aa5ff02cf9ac39b1f8c4893900f4e6b->leave($__internal_9aaa69fa238463b723afb3aaee666d325aa5ff02cf9ac39b1f8c4893900f4e6b_prof);

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
        return array (  215 => 60,  210 => 58,  205 => 56,  200 => 54,  195 => 52,  191 => 51,  186 => 49,  180 => 45,  171 => 44,  154 => 40,  136 => 14,  122 => 62,  119 => 44,  117 => 43,  113 => 41,  111 => 40,  108 => 39,  102 => 38,  90 => 35,  84 => 34,  77 => 33,  73 => 32,  67 => 29,  54 => 19,  50 => 18,  43 => 14,  28 => 1,);
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
", "layout.html.twig", "C:\\xampp\\htdocs\\dev\\templates\\layout.html.twig");
    }
}
