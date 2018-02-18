<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6259d45332f045434d0753aa266557841758535ce954263d9b58b83cc3679ee7 extends Twig_Template
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
        $__internal_06daccf47341d730c034c51271698c1cb86efa2f42e4d48f9701cd4ea0d7fcce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06daccf47341d730c034c51271698c1cb86efa2f42e4d48f9701cd4ea0d7fcce->enter($__internal_06daccf47341d730c034c51271698c1cb86efa2f42e4d48f9701cd4ea0d7fcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06daccf47341d730c034c51271698c1cb86efa2f42e4d48f9701cd4ea0d7fcce->leave($__internal_06daccf47341d730c034c51271698c1cb86efa2f42e4d48f9701cd4ea0d7fcce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e3808ff34efb8ae7c2be6dc1afd0ae6933f3b48adabdb405e54a8a9ba247b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3808ff34efb8ae7c2be6dc1afd0ae6933f3b48adabdb405e54a8a9ba247b94->enter($__internal_3e3808ff34efb8ae7c2be6dc1afd0ae6933f3b48adabdb405e54a8a9ba247b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e3808ff34efb8ae7c2be6dc1afd0ae6933f3b48adabdb405e54a8a9ba247b94->leave($__internal_3e3808ff34efb8ae7c2be6dc1afd0ae6933f3b48adabdb405e54a8a9ba247b94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_912e86ce629cca7272e5fc32eb6201df0a519421e44b4971b6a5dc073c6589f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e86ce629cca7272e5fc32eb6201df0a519421e44b4971b6a5dc073c6589f5->enter($__internal_912e86ce629cca7272e5fc32eb6201df0a519421e44b4971b6a5dc073c6589f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_912e86ce629cca7272e5fc32eb6201df0a519421e44b4971b6a5dc073c6589f5->leave($__internal_912e86ce629cca7272e5fc32eb6201df0a519421e44b4971b6a5dc073c6589f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75f48a6401aacdaefdaac88ab8bca13bae3067dd466cd705530a521a2493a2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f48a6401aacdaefdaac88ab8bca13bae3067dd466cd705530a521a2493a2cc->enter($__internal_75f48a6401aacdaefdaac88ab8bca13bae3067dd466cd705530a521a2493a2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75f48a6401aacdaefdaac88ab8bca13bae3067dd466cd705530a521a2493a2cc->leave($__internal_75f48a6401aacdaefdaac88ab8bca13bae3067dd466cd705530a521a2493a2cc_prof);

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
