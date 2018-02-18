<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1500a5efeac2d510c2245a9e905fef8b3be10ca5c9344a0f37022d4a76ece121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1500a5efeac2d510c2245a9e905fef8b3be10ca5c9344a0f37022d4a76ece121->enter($__internal_1500a5efeac2d510c2245a9e905fef8b3be10ca5c9344a0f37022d4a76ece121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1500a5efeac2d510c2245a9e905fef8b3be10ca5c9344a0f37022d4a76ece121->leave($__internal_1500a5efeac2d510c2245a9e905fef8b3be10ca5c9344a0f37022d4a76ece121_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_837ca97ecf587410099cf6a460b5889ae38b05a90d6a077567e7d89b67630ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837ca97ecf587410099cf6a460b5889ae38b05a90d6a077567e7d89b67630ae5->enter($__internal_837ca97ecf587410099cf6a460b5889ae38b05a90d6a077567e7d89b67630ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_837ca97ecf587410099cf6a460b5889ae38b05a90d6a077567e7d89b67630ae5->leave($__internal_837ca97ecf587410099cf6a460b5889ae38b05a90d6a077567e7d89b67630ae5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a07ea550335bcf0dd1dcafdc826744491956218ee6ec22f00ec5d579343023b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a07ea550335bcf0dd1dcafdc826744491956218ee6ec22f00ec5d579343023b->enter($__internal_5a07ea550335bcf0dd1dcafdc826744491956218ee6ec22f00ec5d579343023b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a07ea550335bcf0dd1dcafdc826744491956218ee6ec22f00ec5d579343023b->leave($__internal_5a07ea550335bcf0dd1dcafdc826744491956218ee6ec22f00ec5d579343023b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6886dca630fddcc9fc39f7bdc0222006c19c12d672f24d518eceafa2182a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6886dca630fddcc9fc39f7bdc0222006c19c12d672f24d518eceafa2182a588->enter($__internal_d6886dca630fddcc9fc39f7bdc0222006c19c12d672f24d518eceafa2182a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6886dca630fddcc9fc39f7bdc0222006c19c12d672f24d518eceafa2182a588->leave($__internal_d6886dca630fddcc9fc39f7bdc0222006c19c12d672f24d518eceafa2182a588_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
