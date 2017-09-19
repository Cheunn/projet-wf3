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
        $__internal_01bd1e57e14b8f04fee57e56149a268c4eea6a77f2da474f3ea94f9d488555ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bd1e57e14b8f04fee57e56149a268c4eea6a77f2da474f3ea94f9d488555ed->enter($__internal_01bd1e57e14b8f04fee57e56149a268c4eea6a77f2da474f3ea94f9d488555ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_7a34778c093b2e490a3643c7a2047f19017d8c506ccf0da0143bc047d33667bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a34778c093b2e490a3643c7a2047f19017d8c506ccf0da0143bc047d33667bf->enter($__internal_7a34778c093b2e490a3643c7a2047f19017d8c506ccf0da0143bc047d33667bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_01bd1e57e14b8f04fee57e56149a268c4eea6a77f2da474f3ea94f9d488555ed->leave($__internal_01bd1e57e14b8f04fee57e56149a268c4eea6a77f2da474f3ea94f9d488555ed_prof);

        
        $__internal_7a34778c093b2e490a3643c7a2047f19017d8c506ccf0da0143bc047d33667bf->leave($__internal_7a34778c093b2e490a3643c7a2047f19017d8c506ccf0da0143bc047d33667bf_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e5e797a94bc01ea14bb7d38b5626ba6c183303b9987b51c18907bfe9268e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e5e797a94bc01ea14bb7d38b5626ba6c183303b9987b51c18907bfe9268e3b->enter($__internal_c5e5e797a94bc01ea14bb7d38b5626ba6c183303b9987b51c18907bfe9268e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8937dbf86cb5cbc8e3485f1de18553d93fd71b6b2b7976de65bd1918470ebba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8937dbf86cb5cbc8e3485f1de18553d93fd71b6b2b7976de65bd1918470ebba1->enter($__internal_8937dbf86cb5cbc8e3485f1de18553d93fd71b6b2b7976de65bd1918470ebba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_8937dbf86cb5cbc8e3485f1de18553d93fd71b6b2b7976de65bd1918470ebba1->leave($__internal_8937dbf86cb5cbc8e3485f1de18553d93fd71b6b2b7976de65bd1918470ebba1_prof);

        
        $__internal_c5e5e797a94bc01ea14bb7d38b5626ba6c183303b9987b51c18907bfe9268e3b->leave($__internal_c5e5e797a94bc01ea14bb7d38b5626ba6c183303b9987b51c18907bfe9268e3b_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5f9859eea45b7e0db3da6dd4cce2e215aa7610d355ffbd2e3c24d90fcbc81a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f9859eea45b7e0db3da6dd4cce2e215aa7610d355ffbd2e3c24d90fcbc81a8->enter($__internal_e5f9859eea45b7e0db3da6dd4cce2e215aa7610d355ffbd2e3c24d90fcbc81a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df8a7c27e587cccbd8aa5ea5de7abddc17e4913df3a1d98c7ac9dbe8c75620bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8a7c27e587cccbd8aa5ea5de7abddc17e4913df3a1d98c7ac9dbe8c75620bf->enter($__internal_df8a7c27e587cccbd8aa5ea5de7abddc17e4913df3a1d98c7ac9dbe8c75620bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_df8a7c27e587cccbd8aa5ea5de7abddc17e4913df3a1d98c7ac9dbe8c75620bf->leave($__internal_df8a7c27e587cccbd8aa5ea5de7abddc17e4913df3a1d98c7ac9dbe8c75620bf_prof);

        
        $__internal_e5f9859eea45b7e0db3da6dd4cce2e215aa7610d355ffbd2e3c24d90fcbc81a8->leave($__internal_e5f9859eea45b7e0db3da6dd4cce2e215aa7610d355ffbd2e3c24d90fcbc81a8_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb9c5e99882a99ed82fbb3ac9ce79f00e9256d28541ca759b325832a55142f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9c5e99882a99ed82fbb3ac9ce79f00e9256d28541ca759b325832a55142f07->enter($__internal_bb9c5e99882a99ed82fbb3ac9ce79f00e9256d28541ca759b325832a55142f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ebc02de94f48f1f3ec8d8e6e433929896c75a642ca5a2aeaad2e6a2699a3d41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc02de94f48f1f3ec8d8e6e433929896c75a642ca5a2aeaad2e6a2699a3d41a->enter($__internal_ebc02de94f48f1f3ec8d8e6e433929896c75a642ca5a2aeaad2e6a2699a3d41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ebc02de94f48f1f3ec8d8e6e433929896c75a642ca5a2aeaad2e6a2699a3d41a->leave($__internal_ebc02de94f48f1f3ec8d8e6e433929896c75a642ca5a2aeaad2e6a2699a3d41a_prof);

        
        $__internal_bb9c5e99882a99ed82fbb3ac9ce79f00e9256d28541ca759b325832a55142f07->leave($__internal_bb9c5e99882a99ed82fbb3ac9ce79f00e9256d28541ca759b325832a55142f07_prof);

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
", "layout.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\templates\\layout.html.twig");
    }
}
