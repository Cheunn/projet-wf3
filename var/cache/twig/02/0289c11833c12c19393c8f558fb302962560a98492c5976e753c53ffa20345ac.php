<?php

/* layout.html.twig */
class __TwigTemplate_8e0b4353f747531bb1a4ab164a4c71f545dc96dec34bdea9fcaae83df3d41d5e extends Twig_Template
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
<<<<<<< HEAD
        $__internal_b884ad824b9c09438aac06e6148d31206a06bcd4357aa6407ad747ffaed92cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b884ad824b9c09438aac06e6148d31206a06bcd4357aa6407ad747ffaed92cbf->enter($__internal_b884ad824b9c09438aac06e6148d31206a06bcd4357aa6407ad747ffaed92cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_4da380e64f3afe4f86addc31a1fa74d6e51a047cbe0d66b01e7700a97ba62406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da380e64f3afe4f86addc31a1fa74d6e51a047cbe0d66b01e7700a97ba62406->enter($__internal_4da380e64f3afe4f86addc31a1fa74d6e51a047cbe0d66b01e7700a97ba62406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));
=======
        $__internal_24c377b4a7eae389d79847e0a3c6b1fb9cedaa8b13b37bee4ef8f537da568c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c377b4a7eae389d79847e0a3c6b1fb9cedaa8b13b37bee4ef8f537da568c2c->enter($__internal_24c377b4a7eae389d79847e0a3c6b1fb9cedaa8b13b37bee4ef8f537da568c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_10e2c93230bde033f114aa125b716abc7ef15774a9f523e6e414c79fdecfc3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e2c93230bde033f114aa125b716abc7ef15774a9f523e6e414c79fdecfc3b1->enter($__internal_10e2c93230bde033f114aa125b716abc7ef15774a9f523e6e414c79fdecfc3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

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
        
<<<<<<< HEAD
        $__internal_b884ad824b9c09438aac06e6148d31206a06bcd4357aa6407ad747ffaed92cbf->leave($__internal_b884ad824b9c09438aac06e6148d31206a06bcd4357aa6407ad747ffaed92cbf_prof);

        
        $__internal_4da380e64f3afe4f86addc31a1fa74d6e51a047cbe0d66b01e7700a97ba62406->leave($__internal_4da380e64f3afe4f86addc31a1fa74d6e51a047cbe0d66b01e7700a97ba62406_prof);
=======
        $__internal_24c377b4a7eae389d79847e0a3c6b1fb9cedaa8b13b37bee4ef8f537da568c2c->leave($__internal_24c377b4a7eae389d79847e0a3c6b1fb9cedaa8b13b37bee4ef8f537da568c2c_prof);

        
        $__internal_10e2c93230bde033f114aa125b716abc7ef15774a9f523e6e414c79fdecfc3b1->leave($__internal_10e2c93230bde033f114aa125b716abc7ef15774a9f523e6e414c79fdecfc3b1_prof);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3a3f31c9a6d4c7fcf5b1c9fbbd758a5f50b8b797efd3cf34edbdea77a564a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3f31c9a6d4c7fcf5b1c9fbbd758a5f50b8b797efd3cf34edbdea77a564a2bb->enter($__internal_3a3f31c9a6d4c7fcf5b1c9fbbd758a5f50b8b797efd3cf34edbdea77a564a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56e28c80372a53f407de7da5f7754c0781b1d605b128aee4156260e04baac9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e28c80372a53f407de7da5f7754c0781b1d605b128aee4156260e04baac9e0->enter($__internal_56e28c80372a53f407de7da5f7754c0781b1d605b128aee4156260e04baac9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_56e28c80372a53f407de7da5f7754c0781b1d605b128aee4156260e04baac9e0->leave($__internal_56e28c80372a53f407de7da5f7754c0781b1d605b128aee4156260e04baac9e0_prof);

        
        $__internal_3a3f31c9a6d4c7fcf5b1c9fbbd758a5f50b8b797efd3cf34edbdea77a564a2bb->leave($__internal_3a3f31c9a6d4c7fcf5b1c9fbbd758a5f50b8b797efd3cf34edbdea77a564a2bb_prof);
=======
        $__internal_3e65e5ce023a332af3ff540d9fdf079e602e80b2df0bf318593384740538d7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e65e5ce023a332af3ff540d9fdf079e602e80b2df0bf318593384740538d7ee->enter($__internal_3e65e5ce023a332af3ff540d9fdf079e602e80b2df0bf318593384740538d7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fb7dedb16521e1014faa8c52e805f103cc63fe3e1a247bfe81d8bc6e3a88942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb7dedb16521e1014faa8c52e805f103cc63fe3e1a247bfe81d8bc6e3a88942->enter($__internal_1fb7dedb16521e1014faa8c52e805f103cc63fe3e1a247bfe81d8bc6e3a88942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_1fb7dedb16521e1014faa8c52e805f103cc63fe3e1a247bfe81d8bc6e3a88942->leave($__internal_1fb7dedb16521e1014faa8c52e805f103cc63fe3e1a247bfe81d8bc6e3a88942_prof);

        
        $__internal_3e65e5ce023a332af3ff540d9fdf079e602e80b2df0bf318593384740538d7ee->leave($__internal_3e65e5ce023a332af3ff540d9fdf079e602e80b2df0bf318593384740538d7ee_prof);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f12269fceb6a83bc3b1eaa354e7c6767722090ac55a06bc6ce39fa56b7303523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12269fceb6a83bc3b1eaa354e7c6767722090ac55a06bc6ce39fa56b7303523->enter($__internal_f12269fceb6a83bc3b1eaa354e7c6767722090ac55a06bc6ce39fa56b7303523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_03c1409911af307b632929b20023012d3d0c6f95ad57fb8ae3f06c3e28e8293e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c1409911af307b632929b20023012d3d0c6f95ad57fb8ae3f06c3e28e8293e->enter($__internal_03c1409911af307b632929b20023012d3d0c6f95ad57fb8ae3f06c3e28e8293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_03c1409911af307b632929b20023012d3d0c6f95ad57fb8ae3f06c3e28e8293e->leave($__internal_03c1409911af307b632929b20023012d3d0c6f95ad57fb8ae3f06c3e28e8293e_prof);

        
        $__internal_f12269fceb6a83bc3b1eaa354e7c6767722090ac55a06bc6ce39fa56b7303523->leave($__internal_f12269fceb6a83bc3b1eaa354e7c6767722090ac55a06bc6ce39fa56b7303523_prof);
=======
        $__internal_ecfe56c04d04fe7d25a4e1b6020bf2fbcde95779adcbbf200485308c659880fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfe56c04d04fe7d25a4e1b6020bf2fbcde95779adcbbf200485308c659880fa->enter($__internal_ecfe56c04d04fe7d25a4e1b6020bf2fbcde95779adcbbf200485308c659880fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42522fd036af5e5bd5a0c3758d9548044dd552f4e3d88d54ef18acbd62b94975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42522fd036af5e5bd5a0c3758d9548044dd552f4e3d88d54ef18acbd62b94975->enter($__internal_42522fd036af5e5bd5a0c3758d9548044dd552f4e3d88d54ef18acbd62b94975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_42522fd036af5e5bd5a0c3758d9548044dd552f4e3d88d54ef18acbd62b94975->leave($__internal_42522fd036af5e5bd5a0c3758d9548044dd552f4e3d88d54ef18acbd62b94975_prof);

        
        $__internal_ecfe56c04d04fe7d25a4e1b6020bf2fbcde95779adcbbf200485308c659880fa->leave($__internal_ecfe56c04d04fe7d25a4e1b6020bf2fbcde95779adcbbf200485308c659880fa_prof);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_6900022a776768307769c6bc58c93aa8586eb26870ce38d373e5437805d567a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6900022a776768307769c6bc58c93aa8586eb26870ce38d373e5437805d567a5->enter($__internal_6900022a776768307769c6bc58c93aa8586eb26870ce38d373e5437805d567a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15689c2aec177e76f053dd1b92f7b6930b4278be14adfc03bf9c0fb58f74e602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15689c2aec177e76f053dd1b92f7b6930b4278be14adfc03bf9c0fb58f74e602->enter($__internal_15689c2aec177e76f053dd1b92f7b6930b4278be14adfc03bf9c0fb58f74e602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));
=======
        $__internal_932b4ca8a3940e99ce49149b44632dcdaf1e0a27c7eaaf8a95e58745f1838d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932b4ca8a3940e99ce49149b44632dcdaf1e0a27c7eaaf8a95e58745f1838d42->enter($__internal_932b4ca8a3940e99ce49149b44632dcdaf1e0a27c7eaaf8a95e58745f1838d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04b85fba437ad1f1370631372c7d8b046d5412c4537c76d09fae31c18c35f2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b85fba437ad1f1370631372c7d8b046d5412c4537c76d09fae31c18c35f2e5->enter($__internal_04b85fba437ad1f1370631372c7d8b046d5412c4537c76d09fae31c18c35f2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

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
        
<<<<<<< HEAD
        $__internal_15689c2aec177e76f053dd1b92f7b6930b4278be14adfc03bf9c0fb58f74e602->leave($__internal_15689c2aec177e76f053dd1b92f7b6930b4278be14adfc03bf9c0fb58f74e602_prof);

        
        $__internal_6900022a776768307769c6bc58c93aa8586eb26870ce38d373e5437805d567a5->leave($__internal_6900022a776768307769c6bc58c93aa8586eb26870ce38d373e5437805d567a5_prof);
=======
        $__internal_04b85fba437ad1f1370631372c7d8b046d5412c4537c76d09fae31c18c35f2e5->leave($__internal_04b85fba437ad1f1370631372c7d8b046d5412c4537c76d09fae31c18c35f2e5_prof);

        
        $__internal_932b4ca8a3940e99ce49149b44632dcdaf1e0a27c7eaaf8a95e58745f1838d42->leave($__internal_932b4ca8a3940e99ce49149b44632dcdaf1e0a27c7eaaf8a95e58745f1838d42_prof);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

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
", "layout.html.twig", "C:\\xampp\\htdocs\\projet_v3\\templates\\layout.html.twig");
    }
}
