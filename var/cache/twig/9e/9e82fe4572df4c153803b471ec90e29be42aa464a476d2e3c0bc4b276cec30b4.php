<?php

/* chroniques.html.twig */
class __TwigTemplate_163e1bb570f009b4c1ee0b7d1059541bd0e0b3b976b42ffef4ac81385c311a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "chroniques.html.twig", 1);
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
        $__internal_693c2ff1366b4755d659ffc044e49863aa693ffea42e6ef592ac1de84a9438a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693c2ff1366b4755d659ffc044e49863aa693ffea42e6ef592ac1de84a9438a5->enter($__internal_693c2ff1366b4755d659ffc044e49863aa693ffea42e6ef592ac1de84a9438a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chroniques.html.twig"));

        $__internal_db0d2114493f4aa847759655aac00e874be2aaf0b4ffe8547f822c4f77f50193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0d2114493f4aa847759655aac00e874be2aaf0b4ffe8547f822c4f77f50193->enter($__internal_db0d2114493f4aa847759655aac00e874be2aaf0b4ffe8547f822c4f77f50193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "chroniques.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693c2ff1366b4755d659ffc044e49863aa693ffea42e6ef592ac1de84a9438a5->leave($__internal_693c2ff1366b4755d659ffc044e49863aa693ffea42e6ef592ac1de84a9438a5_prof);

        
        $__internal_db0d2114493f4aa847759655aac00e874be2aaf0b4ffe8547f822c4f77f50193->leave($__internal_db0d2114493f4aa847759655aac00e874be2aaf0b4ffe8547f822c4f77f50193_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_cfbdccfc0814300a32480547141bd7f1942439af8f3e7ff2201f34652360ad35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbdccfc0814300a32480547141bd7f1942439af8f3e7ff2201f34652360ad35->enter($__internal_cfbdccfc0814300a32480547141bd7f1942439af8f3e7ff2201f34652360ad35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2d87dacc97ac35acfa5c5d3b24d7475c60cd62a79b5e2e6a9824737d72c3b962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d87dacc97ac35acfa5c5d3b24d7475c60cd62a79b5e2e6a9824737d72c3b962->enter($__internal_2d87dacc97ac35acfa5c5d3b24d7475c60cd62a79b5e2e6a9824737d72c3b962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<section class=\"innercontent\">
    <div class=\"container\">
        <h2 class=\"heading\">Chronique</h2>
         <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chroniques"] ?? $this->getContext($context, "chroniques")));
        foreach ($context['_seq'] as $context["_key"] => $context["chronique"]) {
            echo " 
                <article class=\"post vt-post\">
                     \t\t
                    <div class=\"row\">
                        \t
                                  <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
                    \t\t\t<div class=\"post-type post-img\">
                                   <a href=\"#\"><img src=\"assets/images/post/m1.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> 
                                   </div>
                    \t\t\t<div class=\"author-info author-info-2\">
                       <ul class=\"list-inline\">
                        
                        <li>
                            <div class=\"info\">
                            <p>Posted on:</p>
                           <strong>Mar 21, 2015</strong></div>
                        </li>
                                           <li>
                             <div class=\"info\">
                            <p>Comments:</p>
                                 <strong>127</strong></div>
                         </li>
                       </ul>
                    </div>
                  </div>
                         <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
                    <div class=\"caption\">
                     <h3 class=\"md-heading\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single_chronique", array("id" => $this->getAttribute($context["chronique"], "id_post", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "post_title", array()), "html", null, true);
            echo "</a></h3>
                     <p> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["chronique"], "paragraph_1", array()), "html", null, true);
            echo "</p>
                      <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a>
                   </div>

                 </div>
              </div>
                 </article>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chronique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            
               \t<div class=\"pagination-wrap\">
                  \t\t<ul class=\"pagination\">
\t\t\t\t\t<li>
\t\t\t\t\t  <a href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Previous</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t<li><a href=\"#\">...</a></li>
\t\t\t\t\t<li><a href=\"#\">17</a></li>
\t\t\t\t\t<li  class=\"active\">
\t\t\t\t\t  <a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Next</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
            <div class=\"clearfix\"></div>
            </div>
          
            <aside class=\"col-md-4 col-lg-4\">
            \t<div class=\"row\">
       ";
        // line 86
        echo "               
               
                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                      <div class=\"panel panel-default theme-panel\">
                     <div class=\"panel-heading\">Categories</div>
                  <div class=\"panel-body nopadding\">
                <div class=\"list-group\"> 
                  
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " 
                     <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chronique_rubrique", array("rubrique" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        
                </div>
              </div>
                    </div>
                </div>
               
               
               <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Recent Articles</div>
                    <div class=\"panel-body nopadding\">
                    ";
        // line 119
        echo "                        </div>
                      </div>
                    </div>
              
                </div>
             </aside>
           </div>      
      </div>
    </section>
";
        
        $__internal_2d87dacc97ac35acfa5c5d3b24d7475c60cd62a79b5e2e6a9824737d72c3b962->leave($__internal_2d87dacc97ac35acfa5c5d3b24d7475c60cd62a79b5e2e6a9824737d72c3b962_prof);

        
        $__internal_cfbdccfc0814300a32480547141bd7f1942439af8f3e7ff2201f34652360ad35->leave($__internal_cfbdccfc0814300a32480547141bd7f1942439af8f3e7ff2201f34652360ad35_prof);

    }

    public function getTemplateName()
    {
        return "chroniques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 119,  163 => 97,  153 => 95,  147 => 94,  137 => 86,  109 => 45,  95 => 37,  89 => 36,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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

<section class=\"innercontent\">
    <div class=\"container\">
        <h2 class=\"heading\">Chronique</h2>
         <div class=\"row\">
            <div class=\"col-md-8 col-lg-8\">
                {% for chronique in chroniques %} 
                <article class=\"post vt-post\">
                     \t\t
                    <div class=\"row\">
                        \t
                                  <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-4\">
                    \t\t\t<div class=\"post-type post-img\">
                                   <a href=\"#\"><img src=\"assets/images/post/m1.jpg\" class=\"img-responsive\" alt=\"image post\" /></a> 
                                   </div>
                    \t\t\t<div class=\"author-info author-info-2\">
                       <ul class=\"list-inline\">
                        
                        <li>
                            <div class=\"info\">
                            <p>Posted on:</p>
                           <strong>Mar 21, 2015</strong></div>
                        </li>
                                           <li>
                             <div class=\"info\">
                            <p>Comments:</p>
                                 <strong>127</strong></div>
                         </li>
                       </ul>
                    </div>
                  </div>
                         <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-8\">
                    <div class=\"caption\">
                     <h3 class=\"md-heading\"><a href=\"{{ path('single_chronique', {id: chronique.id_post}) }}\"> {{chronique.post_title}}</a></h3>
                     <p> {{chronique.paragraph_1}}</p>
                      <a class=\"btn btn-default\" href=\"#\" role=\"button\">Read More</a>
                   </div>

                 </div>
              </div>
                 </article>
                 {% endfor %}
            
               \t<div class=\"pagination-wrap\">
                  \t\t<ul class=\"pagination\">
\t\t\t\t\t<li>
\t\t\t\t\t  <a href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Previous</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t<li><a href=\"#\">...</a></li>
\t\t\t\t\t<li><a href=\"#\">17</a></li>
\t\t\t\t\t<li  class=\"active\">
\t\t\t\t\t  <a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t<span aria-hidden=\"true\">Next</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
            <div class=\"clearfix\"></div>
            </div>
          
            <aside class=\"col-md-4 col-lg-4\">
            \t<div class=\"row\">
       {#         <div class=\"col-sm-12 col-md-12 col-lg-12\">
                  <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Subscribe us</div>
                    <div class=\"panel-body\">
                      <form action=\"#\" method=\"post\">
                      <div class=\"form-group\">
                          <input type=\"text\" class=\"form-control\" placeholder=\"@ Email\">
                        </div>
                       <div class=\"form-group\">
                        \t<button class=\"btn btn-default btn-lg pull-right\" type=\"button\">Subscribe</button>
                        </div>
                        </form>
                    </div>
                </div>
               </div>#}
               
               
                <div class=\"col-sm-12 col-md-12 col-lg-12\">
                      <div class=\"panel panel-default theme-panel\">
                     <div class=\"panel-heading\">Categories</div>
                  <div class=\"panel-body nopadding\">
                <div class=\"list-group\"> 
                  
                    {% for category in categories %} 
                     <a href=\"{{ path('chronique_rubrique', {rubrique: category.name}) }}\" class=\"list-group-item\">{{ category.name }}</a>
                    {% endfor %}
        
                </div>
              </div>
                    </div>
                </div>
               
               
               <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <div class=\"panel panel-default theme-panel\">
                  <div class=\"panel-heading\">Recent Articles</div>
                    <div class=\"panel-body nopadding\">
                    {# {% for annonce in annonces %} 
                            <div class=\"panel-body nopadding\">
                             <div class=\"media\">
                               <div class=\"media-left\"> <a href=\"{{ path('single_annonce', {id: annonce.id_post}) }}\"> <img src=\"{{ asset ('assets/images/post/rp1.jpg') }}\" alt=\"author\" /></a> </div>
                               <div class=\"media-body\">
                                 <h4 class=\"media-heading\"><a href=\"{{ path('single_annonce', {id: annonce.id_post}) }}\">{{ annonce.post_title }}</a></h4>
                                 <p><a href=\"#\">LifeStyle</a> &bull; 5 hours ago</p>
                               </div>
                             </div>
                            </div>
                         {% endfor %}#}
                        </div>
                      </div>
                    </div>
              
                </div>
             </aside>
           </div>      
      </div>
    </section>
{% endblock %}

", "chroniques.html.twig", "C:\\xampp\\htdocs\\projet_fin\\projet3\\templates\\chroniques.html.twig");
    }
}
