<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_7c621f86ff4883a2c97f1a349f2f4d664f2d4944e8a9fd363e0acc1419680fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_4760b6a5f4543e4ee622878695ac0914ad2cd3f15ad7929c32e1f6ead1654e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4760b6a5f4543e4ee622878695ac0914ad2cd3f15ad7929c32e1f6ead1654e08->enter($__internal_4760b6a5f4543e4ee622878695ac0914ad2cd3f15ad7929c32e1f6ead1654e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_4a2c02c45812611ec0860d982597c7d840f056a9be11050a85cf8519a5af7675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2c02c45812611ec0860d982597c7d840f056a9be11050a85cf8519a5af7675->enter($__internal_4a2c02c45812611ec0860d982597c7d840f056a9be11050a85cf8519a5af7675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_b193fb8a214325cd6969a890547f1e884a259a25932e30ca1bcb10039454dc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b193fb8a214325cd6969a890547f1e884a259a25932e30ca1bcb10039454dc2e->enter($__internal_b193fb8a214325cd6969a890547f1e884a259a25932e30ca1bcb10039454dc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_c82ffdacc41c8728ebc10316d8ff5a80bbb368a850e8bde532b3549c142c4cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82ffdacc41c8728ebc10316d8ff5a80bbb368a850e8bde532b3549c142c4cf2->enter($__internal_c82ffdacc41c8728ebc10316d8ff5a80bbb368a850e8bde532b3549c142c4cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
<<<<<<< HEAD
                $__internal_4c66fe23b16cfc2ebfc0b2d977fe4e10135184fdfdca857d0b36864a638f4b59 = array("collector" => $this->getAttribute(                // line 13
=======
                $__internal_6ab059663747d857d81f6162c8c32bc31ba6ed888f4472f843760c9a780a332a = array("collector" => $this->getAttribute(                // line 13
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4
($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 15
($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 18
($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 19
($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")));
<<<<<<< HEAD
                if (!is_array($__internal_4c66fe23b16cfc2ebfc0b2d977fe4e10135184fdfdca857d0b36864a638f4b59)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_4c66fe23b16cfc2ebfc0b2d977fe4e10135184fdfdca857d0b36864a638f4b59);
=======
                if (!is_array($__internal_6ab059663747d857d81f6162c8c32bc31ba6ed888f4472f843760c9a780a332a)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_6ab059663747d857d81f6162c8c32bc31ba6ed888f4472f843760c9a780a332a);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
<<<<<<< HEAD
        $__internal_4760b6a5f4543e4ee622878695ac0914ad2cd3f15ad7929c32e1f6ead1654e08->leave($__internal_4760b6a5f4543e4ee622878695ac0914ad2cd3f15ad7929c32e1f6ead1654e08_prof);

        
        $__internal_4a2c02c45812611ec0860d982597c7d840f056a9be11050a85cf8519a5af7675->leave($__internal_4a2c02c45812611ec0860d982597c7d840f056a9be11050a85cf8519a5af7675_prof);
=======
        $__internal_b193fb8a214325cd6969a890547f1e884a259a25932e30ca1bcb10039454dc2e->leave($__internal_b193fb8a214325cd6969a890547f1e884a259a25932e30ca1bcb10039454dc2e_prof);

        
        $__internal_c82ffdacc41c8728ebc10316d8ff5a80bbb368a850e8bde532b3549c142c4cf2->leave($__internal_c82ffdacc41c8728ebc10316d8ff5a80bbb368a850e8bde532b3549c142c4cf2_prof);
>>>>>>> 3db2386a41bdd3a47b14fdf5a469b32e904befc4

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\xampp\\htdocs\\projet_v3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}
