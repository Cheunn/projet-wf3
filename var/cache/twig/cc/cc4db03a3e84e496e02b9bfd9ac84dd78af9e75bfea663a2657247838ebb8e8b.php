<?php

/* layout.html.twig */
class __TwigTemplate_3e4ac94129bfc2f1a68024e9c927fff7d809671b338e86e0cec50719e39f7b2a extends Twig_Template
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
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src=\"assets/js/html5shiv.min.js\"></script>
              <script src=\"assets/js/respond.min.js\"></script>
            <![endif]-->

    </head>
    
    <body>
        ";
        // line 33
        $this->loadTemplate("header.html.twig", "layout.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "        ";
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 35)->display($context);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
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
        return array (  87 => 34,  81 => 16,  75 => 36,  72 => 35,  69 => 34,  67 => 33,  53 => 22,  49 => 21,  45 => 20,  38 => 16,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet-wf3\\templates\\layout.html.twig");
    }
}
