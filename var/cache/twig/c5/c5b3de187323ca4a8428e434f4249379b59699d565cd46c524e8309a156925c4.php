<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_22bf76e2dc5d041d69701bbbf0a825bfa7b4ef1e1b4390b975a7c45bd3f65ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86e69874153284af572c81a2a680a2c742b63d800b9e4ef71ca418dc880f453f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e69874153284af572c81a2a680a2c742b63d800b9e4ef71ca418dc880f453f->enter($__internal_86e69874153284af572c81a2a680a2c742b63d800b9e4ef71ca418dc880f453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d2a7d43d0573af85f488ee2b146d5575866e53f58ccca2ba02c12a59e2e14cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a7d43d0573af85f488ee2b146d5575866e53f58ccca2ba02c12a59e2e14cb2->enter($__internal_d2a7d43d0573af85f488ee2b146d5575866e53f58ccca2ba02c12a59e2e14cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e69874153284af572c81a2a680a2c742b63d800b9e4ef71ca418dc880f453f->leave($__internal_86e69874153284af572c81a2a680a2c742b63d800b9e4ef71ca418dc880f453f_prof);

        
        $__internal_d2a7d43d0573af85f488ee2b146d5575866e53f58ccca2ba02c12a59e2e14cb2->leave($__internal_d2a7d43d0573af85f488ee2b146d5575866e53f58ccca2ba02c12a59e2e14cb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cfa77c71bfdc7a3bbf7f46d09fc6ae18ea21549c1ce3d327e360aca83db91af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa77c71bfdc7a3bbf7f46d09fc6ae18ea21549c1ce3d327e360aca83db91af9->enter($__internal_cfa77c71bfdc7a3bbf7f46d09fc6ae18ea21549c1ce3d327e360aca83db91af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ecedda8735259ee8fb8af315ba21db2d2babdb3696883c94a4ad0961b63a3584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecedda8735259ee8fb8af315ba21db2d2babdb3696883c94a4ad0961b63a3584->enter($__internal_ecedda8735259ee8fb8af315ba21db2d2babdb3696883c94a4ad0961b63a3584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ecedda8735259ee8fb8af315ba21db2d2babdb3696883c94a4ad0961b63a3584->leave($__internal_ecedda8735259ee8fb8af315ba21db2d2babdb3696883c94a4ad0961b63a3584_prof);

        
        $__internal_cfa77c71bfdc7a3bbf7f46d09fc6ae18ea21549c1ce3d327e360aca83db91af9->leave($__internal_cfa77c71bfdc7a3bbf7f46d09fc6ae18ea21549c1ce3d327e360aca83db91af9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1a1dd858fa391aafcd1dbd629047cf586f7df6ddf93bf624c2c88e22d706cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a1dd858fa391aafcd1dbd629047cf586f7df6ddf93bf624c2c88e22d706cbc->enter($__internal_f1a1dd858fa391aafcd1dbd629047cf586f7df6ddf93bf624c2c88e22d706cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c33a9dbffc4e5fc8a5ebb92ff45e4143b3ecfb6afd95560dc23d923af8f35a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c33a9dbffc4e5fc8a5ebb92ff45e4143b3ecfb6afd95560dc23d923af8f35a3->enter($__internal_4c33a9dbffc4e5fc8a5ebb92ff45e4143b3ecfb6afd95560dc23d923af8f35a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_4c33a9dbffc4e5fc8a5ebb92ff45e4143b3ecfb6afd95560dc23d923af8f35a3->leave($__internal_4c33a9dbffc4e5fc8a5ebb92ff45e4143b3ecfb6afd95560dc23d923af8f35a3_prof);

        
        $__internal_f1a1dd858fa391aafcd1dbd629047cf586f7df6ddf93bf624c2c88e22d706cbc->leave($__internal_f1a1dd858fa391aafcd1dbd629047cf586f7df6ddf93bf624c2c88e22d706cbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\projet-wf3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
