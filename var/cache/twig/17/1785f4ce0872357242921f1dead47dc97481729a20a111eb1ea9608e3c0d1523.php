<?php

/* layout.html.twig */
class __TwigTemplate_63792f1ca49800d6d2ccc4c1dbf2300f419429309cd691ac691a2e642dad19c5 extends Twig_Template
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
        $__internal_aaee8c77a84b7761142e3a0bc9fa8903821947c9185abab6ec319fb735c2443f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaee8c77a84b7761142e3a0bc9fa8903821947c9185abab6ec319fb735c2443f->enter($__internal_aaee8c77a84b7761142e3a0bc9fa8903821947c9185abab6ec319fb735c2443f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_91ba7e86f760badee4e79214abcdb8f5523dac1aaa6dd14c172f9ffb27cef5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ba7e86f760badee4e79214abcdb8f5523dac1aaa6dd14c172f9ffb27cef5b6->enter($__internal_91ba7e86f760badee4e79214abcdb8f5523dac1aaa6dd14c172f9ffb27cef5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_aaee8c77a84b7761142e3a0bc9fa8903821947c9185abab6ec319fb735c2443f->leave($__internal_aaee8c77a84b7761142e3a0bc9fa8903821947c9185abab6ec319fb735c2443f_prof);

        
        $__internal_91ba7e86f760badee4e79214abcdb8f5523dac1aaa6dd14c172f9ffb27cef5b6->leave($__internal_91ba7e86f760badee4e79214abcdb8f5523dac1aaa6dd14c172f9ffb27cef5b6_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f06d53dd880c7c233b925668966fe1bf24ce9e8ba0aa72432e5f26efc024728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f06d53dd880c7c233b925668966fe1bf24ce9e8ba0aa72432e5f26efc024728->enter($__internal_0f06d53dd880c7c233b925668966fe1bf24ce9e8ba0aa72432e5f26efc024728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c6dbcd424474b1335819266e15ca5f88515dcc5e03675fcd41a5e67a1aaaf8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6dbcd424474b1335819266e15ca5f88515dcc5e03675fcd41a5e67a1aaaf8b->enter($__internal_0c6dbcd424474b1335819266e15ca5f88515dcc5e03675fcd41a5e67a1aaaf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_0c6dbcd424474b1335819266e15ca5f88515dcc5e03675fcd41a5e67a1aaaf8b->leave($__internal_0c6dbcd424474b1335819266e15ca5f88515dcc5e03675fcd41a5e67a1aaaf8b_prof);

        
        $__internal_0f06d53dd880c7c233b925668966fe1bf24ce9e8ba0aa72432e5f26efc024728->leave($__internal_0f06d53dd880c7c233b925668966fe1bf24ce9e8ba0aa72432e5f26efc024728_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd0b5a9869b68f7ee7b60c6db102ca7c8c3b6d23d28ac189f84a4b89203f2920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0b5a9869b68f7ee7b60c6db102ca7c8c3b6d23d28ac189f84a4b89203f2920->enter($__internal_fd0b5a9869b68f7ee7b60c6db102ca7c8c3b6d23d28ac189f84a4b89203f2920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_22c429438a24bae989b20099245b16ee282b43c7074d70b83a9a3e9265d3d136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c429438a24bae989b20099245b16ee282b43c7074d70b83a9a3e9265d3d136->enter($__internal_22c429438a24bae989b20099245b16ee282b43c7074d70b83a9a3e9265d3d136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_22c429438a24bae989b20099245b16ee282b43c7074d70b83a9a3e9265d3d136->leave($__internal_22c429438a24bae989b20099245b16ee282b43c7074d70b83a9a3e9265d3d136_prof);

        
        $__internal_fd0b5a9869b68f7ee7b60c6db102ca7c8c3b6d23d28ac189f84a4b89203f2920->leave($__internal_fd0b5a9869b68f7ee7b60c6db102ca7c8c3b6d23d28ac189f84a4b89203f2920_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e65ca1250b9c79401115b41f4880feb0acaa0a4220daa1146f3c1e0a54297ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65ca1250b9c79401115b41f4880feb0acaa0a4220daa1146f3c1e0a54297ee3->enter($__internal_e65ca1250b9c79401115b41f4880feb0acaa0a4220daa1146f3c1e0a54297ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf1340350266e1756fe9794139fdf739215db8eee11c9780ae7b8107d06a991e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1340350266e1756fe9794139fdf739215db8eee11c9780ae7b8107d06a991e->enter($__internal_bf1340350266e1756fe9794139fdf739215db8eee11c9780ae7b8107d06a991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bf1340350266e1756fe9794139fdf739215db8eee11c9780ae7b8107d06a991e->leave($__internal_bf1340350266e1756fe9794139fdf739215db8eee11c9780ae7b8107d06a991e_prof);

        
        $__internal_e65ca1250b9c79401115b41f4880feb0acaa0a4220daa1146f3c1e0a54297ee3->leave($__internal_e65ca1250b9c79401115b41f4880feb0acaa0a4220daa1146f3c1e0a54297ee3_prof);

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
", "layout.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\layout.html.twig");
    }
}
