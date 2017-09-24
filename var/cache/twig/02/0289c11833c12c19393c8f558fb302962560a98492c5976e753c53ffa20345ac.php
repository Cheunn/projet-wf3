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
        $__internal_f7ddf638df1f729fcb8a5a7595208e9382137816f723615eaa88ff55ab17eaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ddf638df1f729fcb8a5a7595208e9382137816f723615eaa88ff55ab17eaf8->enter($__internal_f7ddf638df1f729fcb8a5a7595208e9382137816f723615eaa88ff55ab17eaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_11c573a3e1d529c06e723fca0bb1dab6d145026fbd7edc6eb8b7b28912015aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c573a3e1d529c06e723fca0bb1dab6d145026fbd7edc6eb8b7b28912015aa1->enter($__internal_11c573a3e1d529c06e723fca0bb1dab6d145026fbd7edc6eb8b7b28912015aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 31
        $this->loadTemplate("header.html.twig", "layout.html.twig", 31)->display($context);
        // line 32
        echo " 
";
        // line 48
        echo "  
         
        <div class=\"container\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                echo " 
                    ";
                // line 53
                if (($context["type"] == "error")) {
                    echo " ";
                    $context["type"] = "danger";
                    echo " ";
                }
                // line 54
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
            // line 57
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "        </div>
           
        ";
        // line 62
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 62)->display($context);
        // line 63
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "        

    </body>
</html>
";
        
        $__internal_f7ddf638df1f729fcb8a5a7595208e9382137816f723615eaa88ff55ab17eaf8->leave($__internal_f7ddf638df1f729fcb8a5a7595208e9382137816f723615eaa88ff55ab17eaf8_prof);

        
        $__internal_11c573a3e1d529c06e723fca0bb1dab6d145026fbd7edc6eb8b7b28912015aa1->leave($__internal_11c573a3e1d529c06e723fca0bb1dab6d145026fbd7edc6eb8b7b28912015aa1_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_895c06229a28aac39e8534254d47352e34d9651a2e5e919607dc0f132eb96c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895c06229a28aac39e8534254d47352e34d9651a2e5e919607dc0f132eb96c59->enter($__internal_895c06229a28aac39e8534254d47352e34d9651a2e5e919607dc0f132eb96c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a13ffb53be4ad966980c30af1e14346ee9baada466d5f480ccfb5660f0b0741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a13ffb53be4ad966980c30af1e14346ee9baada466d5f480ccfb5660f0b0741->enter($__internal_9a13ffb53be4ad966980c30af1e14346ee9baada466d5f480ccfb5660f0b0741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_9a13ffb53be4ad966980c30af1e14346ee9baada466d5f480ccfb5660f0b0741->leave($__internal_9a13ffb53be4ad966980c30af1e14346ee9baada466d5f480ccfb5660f0b0741_prof);

        
        $__internal_895c06229a28aac39e8534254d47352e34d9651a2e5e919607dc0f132eb96c59->leave($__internal_895c06229a28aac39e8534254d47352e34d9651a2e5e919607dc0f132eb96c59_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_74784db25d09da386f05773c19e7f381bfe942f2b75c9c67112f80f5a345e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74784db25d09da386f05773c19e7f381bfe942f2b75c9c67112f80f5a345e7f1->enter($__internal_74784db25d09da386f05773c19e7f381bfe942f2b75c9c67112f80f5a345e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_176f65685ce6fcafd7f98b4b4156a98ad7268add0ee01c6d2a83fb2e9f6d5523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176f65685ce6fcafd7f98b4b4156a98ad7268add0ee01c6d2a83fb2e9f6d5523->enter($__internal_176f65685ce6fcafd7f98b4b4156a98ad7268add0ee01c6d2a83fb2e9f6d5523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_176f65685ce6fcafd7f98b4b4156a98ad7268add0ee01c6d2a83fb2e9f6d5523->leave($__internal_176f65685ce6fcafd7f98b4b4156a98ad7268add0ee01c6d2a83fb2e9f6d5523_prof);

        
        $__internal_74784db25d09da386f05773c19e7f381bfe942f2b75c9c67112f80f5a345e7f1->leave($__internal_74784db25d09da386f05773c19e7f381bfe942f2b75c9c67112f80f5a345e7f1_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c58874655d11a5883edc056b6273eb3f251eff06476b405668c9593bb691de70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58874655d11a5883edc056b6273eb3f251eff06476b405668c9593bb691de70->enter($__internal_c58874655d11a5883edc056b6273eb3f251eff06476b405668c9593bb691de70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42dc1f5924dc3958d324311bfeabc7d380efbc7bbe7c897ed81dda84362c84a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dc1f5924dc3958d324311bfeabc7d380efbc7bbe7c897ed81dda84362c84a2->enter($__internal_42dc1f5924dc3958d324311bfeabc7d380efbc7bbe7c897ed81dda84362c84a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
                 <!-- Bootstrap core JavaScript
        ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap -->\t
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-3.3.4/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <!-- owl-carousel -->
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <!-- masonry -->
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/masonry/masonry.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form Validation -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- custom -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_42dc1f5924dc3958d324311bfeabc7d380efbc7bbe7c897ed81dda84362c84a2->leave($__internal_42dc1f5924dc3958d324311bfeabc7d380efbc7bbe7c897ed81dda84362c84a2_prof);

        
        $__internal_c58874655d11a5883edc056b6273eb3f251eff06476b405668c9593bb691de70->leave($__internal_c58874655d11a5883edc056b6273eb3f251eff06476b405668c9593bb691de70_prof);

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
        return array (  221 => 79,  216 => 77,  211 => 75,  206 => 73,  201 => 71,  197 => 70,  192 => 68,  186 => 64,  177 => 63,  160 => 59,  142 => 14,  128 => 81,  125 => 63,  123 => 62,  119 => 60,  117 => 59,  114 => 58,  108 => 57,  96 => 54,  90 => 53,  83 => 52,  79 => 51,  74 => 48,  71 => 32,  69 => 31,  54 => 19,  50 => 18,  43 => 14,  28 => 1,);
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
        
        
        {% include 'header.html.twig' %}
 
{#  <!-- Preloader -->
  
  <div id=\"preloader\">
    <div id=\"status\">
      <div class='spinner-wrap'>
        <div class='leftside'></div>
        <div class='rightside'></div>
        <div class='spinner'>
          <div class='bounce1'></div>
          <div class='bounce2'></div>
          <div class='bounce3'></div>
        </div>
      </div>
    </div>
  </div>#}
  
         
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
