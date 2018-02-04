<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d30be78087fb6ea0ba6ee57d744156a369732eff925a2710db50fb5ca86f0843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1cd93463dac19fb15342514e0f94a989bf0928f7cd982de7d931b70bf4adb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cd93463dac19fb15342514e0f94a989bf0928f7cd982de7d931b70bf4adb77->enter($__internal_a1cd93463dac19fb15342514e0f94a989bf0928f7cd982de7d931b70bf4adb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1cd93463dac19fb15342514e0f94a989bf0928f7cd982de7d931b70bf4adb77->leave($__internal_a1cd93463dac19fb15342514e0f94a989bf0928f7cd982de7d931b70bf4adb77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be7b8d7419ed69fa376edd53d724c0aac240b9ac139976f5c3cf3bd4acc4669e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7b8d7419ed69fa376edd53d724c0aac240b9ac139976f5c3cf3bd4acc4669e->enter($__internal_be7b8d7419ed69fa376edd53d724c0aac240b9ac139976f5c3cf3bd4acc4669e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be7b8d7419ed69fa376edd53d724c0aac240b9ac139976f5c3cf3bd4acc4669e->leave($__internal_be7b8d7419ed69fa376edd53d724c0aac240b9ac139976f5c3cf3bd4acc4669e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4459975d62c94e1171bca2670b8b5d09992781567642947a223e68b4d59f4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4459975d62c94e1171bca2670b8b5d09992781567642947a223e68b4d59f4b9->enter($__internal_e4459975d62c94e1171bca2670b8b5d09992781567642947a223e68b4d59f4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4459975d62c94e1171bca2670b8b5d09992781567642947a223e68b4d59f4b9->leave($__internal_e4459975d62c94e1171bca2670b8b5d09992781567642947a223e68b4d59f4b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1463149e2cae1968c9706416e85e272d830a9cdd30ec90075ca365884ee6651a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1463149e2cae1968c9706416e85e272d830a9cdd30ec90075ca365884ee6651a->enter($__internal_1463149e2cae1968c9706416e85e272d830a9cdd30ec90075ca365884ee6651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1463149e2cae1968c9706416e85e272d830a9cdd30ec90075ca365884ee6651a->leave($__internal_1463149e2cae1968c9706416e85e272d830a9cdd30ec90075ca365884ee6651a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
