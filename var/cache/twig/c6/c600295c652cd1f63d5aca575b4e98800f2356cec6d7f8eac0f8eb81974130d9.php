<?php

/* annonce/edit.html.twig */
class __TwigTemplate_8f6dd6f753be596303adbfc41908e352f2c826248a24c98ea371a6311fdd4160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "annonce/edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53c2c8ff40ab086dfca41aaf41078c59160374ce9a57cf37362c162cac486906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c2c8ff40ab086dfca41aaf41078c59160374ce9a57cf37362c162cac486906->enter($__internal_53c2c8ff40ab086dfca41aaf41078c59160374ce9a57cf37362c162cac486906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $__internal_062ae2c20b64dfa1f1e3970dbdc54032aa15d25c151d9147bc64aab47c36fafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062ae2c20b64dfa1f1e3970dbdc54032aa15d25c151d9147bc64aab47c36fafc->enter($__internal_062ae2c20b64dfa1f1e3970dbdc54032aa15d25c151d9147bc64aab47c36fafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonce/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53c2c8ff40ab086dfca41aaf41078c59160374ce9a57cf37362c162cac486906->leave($__internal_53c2c8ff40ab086dfca41aaf41078c59160374ce9a57cf37362c162cac486906_prof);

        
        $__internal_062ae2c20b64dfa1f1e3970dbdc54032aa15d25c151d9147bc64aab47c36fafc->leave($__internal_062ae2c20b64dfa1f1e3970dbdc54032aa15d25c151d9147bc64aab47c36fafc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_18a774c5a4aedabd99cd14466c42a11f5f8d452f7668f3eaf2862ddc7d97b295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a774c5a4aedabd99cd14466c42a11f5f8d452f7668f3eaf2862ddc7d97b295->enter($__internal_18a774c5a4aedabd99cd14466c42a11f5f8d452f7668f3eaf2862ddc7d97b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_71a6c426ed8d27086e74736066637fb83af5cbfd24ea48f7242da0a4e4c39d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a6c426ed8d27086e74736066637fb83af5cbfd24ea48f7242da0a4e4c39d2f->enter($__internal_71a6c426ed8d27086e74736066637fb83af5cbfd24ea48f7242da0a4e4c39d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
                    <div class=\"comment-form\">
                        <h4>Post A Reply</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">
                                      <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Full Name:\">
                                    </div>
                                 </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" placeholder=\"Enter Address:\">

                          </div>

                                    </div>

                                    </div>

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number:\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

                          <button type=\"submit\" class=\"btn btn-default\">Post Reply</button>

                        </form>

                    </div>
                    ";
        
        $__internal_71a6c426ed8d27086e74736066637fb83af5cbfd24ea48f7242da0a4e4c39d2f->leave($__internal_71a6c426ed8d27086e74736066637fb83af5cbfd24ea48f7242da0a4e4c39d2f_prof);

        
        $__internal_18a774c5a4aedabd99cd14466c42a11f5f8d452f7668f3eaf2862ddc7d97b295->leave($__internal_18a774c5a4aedabd99cd14466c42a11f5f8d452f7668f3eaf2862ddc7d97b295_prof);

    }

    public function getTemplateName()
    {
        return "annonce/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    
                    <div class=\"comment-form\">
                        <h4>Post A Reply</h4>
                        <form role=\"form\" action=\"#\" method=\"post\" novalidate id=\"comment-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">
                                      <input type=\"text\" class=\"form-control\" name=\"name\" autocomplete=\"off\" placeholder=\"Full Name:\">
                                    </div>
                                 </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-5\">
                                    <div class=\"form-group\">

                            <input type=\"email\" class=\"form-control\" name=\"email\" autocomplete=\"off\" placeholder=\"Enter Address:\">

                          </div>

                                    </div>

                                    </div>

                            <div class=\"row\">

                                <div class=\"col-md-6 col-lg-5\">

                            <div class=\"form-group\">

                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone Number:\">

                          </div>

                            </div>

                                    </div>

                            <div class=\"form-group\">

                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Message:\" rows=\"3\"></textarea>

                          </div>

                          <button type=\"submit\" class=\"btn btn-default\">Post Reply</button>

                        </form>

                    </div>
                    {% endblock %}", "annonce/edit.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet\\templates\\annonce\\edit.html.twig");
    }
}
