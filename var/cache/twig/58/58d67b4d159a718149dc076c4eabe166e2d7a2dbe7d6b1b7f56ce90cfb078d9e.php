<?php

/* layout.html.twig */
class __TwigTemplate_1c8b11adb1ffdcecf6b4e181bc77e9d9ee1fe70e3642a0a932135e9ef142b7d3 extends Twig_Template
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
        $__internal_dce28c8c9068d19253f5cb42bb5d7ba5dfb2d8b88ba9b8d7a43befdb6282789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce28c8c9068d19253f5cb42bb5d7ba5dfb2d8b88ba9b8d7a43befdb6282789e->enter($__internal_dce28c8c9068d19253f5cb42bb5d7ba5dfb2d8b88ba9b8d7a43befdb6282789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_d7cbac42f5ea71b9e99d49fc523225846624cd98996a2e5d94f9d6fc1530b394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cbac42f5ea71b9e99d49fc523225846624cd98996a2e5d94f9d6fc1530b394->enter($__internal_d7cbac42f5ea71b9e99d49fc523225846624cd98996a2e5d94f9d6fc1530b394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array()));
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
        
        $__internal_dce28c8c9068d19253f5cb42bb5d7ba5dfb2d8b88ba9b8d7a43befdb6282789e->leave($__internal_dce28c8c9068d19253f5cb42bb5d7ba5dfb2d8b88ba9b8d7a43befdb6282789e_prof);

        
        $__internal_d7cbac42f5ea71b9e99d49fc523225846624cd98996a2e5d94f9d6fc1530b394->leave($__internal_d7cbac42f5ea71b9e99d49fc523225846624cd98996a2e5d94f9d6fc1530b394_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fb130a9aae45ac8e126a5d950d58a79631453bc7c777bf38fd944c5e15ab8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb130a9aae45ac8e126a5d950d58a79631453bc7c777bf38fd944c5e15ab8c1->enter($__internal_9fb130a9aae45ac8e126a5d950d58a79631453bc7c777bf38fd944c5e15ab8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e8bf5b258b973df0e1579c3e565fe119c8cb01486a91792b2ef222ae465508e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8bf5b258b973df0e1579c3e565fe119c8cb01486a91792b2ef222ae465508e->enter($__internal_6e8bf5b258b973df0e1579c3e565fe119c8cb01486a91792b2ef222ae465508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_6e8bf5b258b973df0e1579c3e565fe119c8cb01486a91792b2ef222ae465508e->leave($__internal_6e8bf5b258b973df0e1579c3e565fe119c8cb01486a91792b2ef222ae465508e_prof);

        
        $__internal_9fb130a9aae45ac8e126a5d950d58a79631453bc7c777bf38fd944c5e15ab8c1->leave($__internal_9fb130a9aae45ac8e126a5d950d58a79631453bc7c777bf38fd944c5e15ab8c1_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4971cf93b3d1ba9d8a37d1d42b607b07df279bc0178cad274af01cdb11a994e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4971cf93b3d1ba9d8a37d1d42b607b07df279bc0178cad274af01cdb11a994e->enter($__internal_e4971cf93b3d1ba9d8a37d1d42b607b07df279bc0178cad274af01cdb11a994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0e968c42af33978d28a4c947b504155c211efb7b76856784bd69a9958a8908ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e968c42af33978d28a4c947b504155c211efb7b76856784bd69a9958a8908ac->enter($__internal_0e968c42af33978d28a4c947b504155c211efb7b76856784bd69a9958a8908ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0e968c42af33978d28a4c947b504155c211efb7b76856784bd69a9958a8908ac->leave($__internal_0e968c42af33978d28a4c947b504155c211efb7b76856784bd69a9958a8908ac_prof);

        
        $__internal_e4971cf93b3d1ba9d8a37d1d42b607b07df279bc0178cad274af01cdb11a994e->leave($__internal_e4971cf93b3d1ba9d8a37d1d42b607b07df279bc0178cad274af01cdb11a994e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c162cd0907956d152b035890673c2a683e8a20fccd021fb3b3cb5f56e832724f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c162cd0907956d152b035890673c2a683e8a20fccd021fb3b3cb5f56e832724f->enter($__internal_c162cd0907956d152b035890673c2a683e8a20fccd021fb3b3cb5f56e832724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b0c485d592d538c84e61aba5028f1e5985690dffb1e320f4c6fb7013d0d7100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0c485d592d538c84e61aba5028f1e5985690dffb1e320f4c6fb7013d0d7100->enter($__internal_7b0c485d592d538c84e61aba5028f1e5985690dffb1e320f4c6fb7013d0d7100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b0c485d592d538c84e61aba5028f1e5985690dffb1e320f4c6fb7013d0d7100->leave($__internal_7b0c485d592d538c84e61aba5028f1e5985690dffb1e320f4c6fb7013d0d7100_prof);

        
        $__internal_c162cd0907956d152b035890673c2a683e8a20fccd021fb3b3cb5f56e832724f->leave($__internal_c162cd0907956d152b035890673c2a683e8a20fccd021fb3b3cb5f56e832724f_prof);

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
", "layout.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\layout.html.twig");
    }
}
