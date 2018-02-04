<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5d7aa702775310489fbd45c9dfd0b08eee3f7c34745ebe188f2dc6871234f344 extends Twig_Template
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
        $__internal_0cb8a6d33d41bb97708dda1c3149d2201cafac8d51109c64c22d08631f2b15b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb8a6d33d41bb97708dda1c3149d2201cafac8d51109c64c22d08631f2b15b0->enter($__internal_0cb8a6d33d41bb97708dda1c3149d2201cafac8d51109c64c22d08631f2b15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb8a6d33d41bb97708dda1c3149d2201cafac8d51109c64c22d08631f2b15b0->leave($__internal_0cb8a6d33d41bb97708dda1c3149d2201cafac8d51109c64c22d08631f2b15b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bda96035d6c807a9a712fd3695ab91aa2f316140602987078c8947288ce42c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda96035d6c807a9a712fd3695ab91aa2f316140602987078c8947288ce42c7f->enter($__internal_bda96035d6c807a9a712fd3695ab91aa2f316140602987078c8947288ce42c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bda96035d6c807a9a712fd3695ab91aa2f316140602987078c8947288ce42c7f->leave($__internal_bda96035d6c807a9a712fd3695ab91aa2f316140602987078c8947288ce42c7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38a3ad324847bc8b1e06a708b6267521c7936eb28f1116987e632916239abf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a3ad324847bc8b1e06a708b6267521c7936eb28f1116987e632916239abf31->enter($__internal_38a3ad324847bc8b1e06a708b6267521c7936eb28f1116987e632916239abf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38a3ad324847bc8b1e06a708b6267521c7936eb28f1116987e632916239abf31->leave($__internal_38a3ad324847bc8b1e06a708b6267521c7936eb28f1116987e632916239abf31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be23cc38cac35c0c158699a19244a12c64b8fc54f1d2c665db726d14ca8a79db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be23cc38cac35c0c158699a19244a12c64b8fc54f1d2c665db726d14ca8a79db->enter($__internal_be23cc38cac35c0c158699a19244a12c64b8fc54f1d2c665db726d14ca8a79db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_be23cc38cac35c0c158699a19244a12c64b8fc54f1d2c665db726d14ca8a79db->leave($__internal_be23cc38cac35c0c158699a19244a12c64b8fc54f1d2c665db726d14ca8a79db_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
