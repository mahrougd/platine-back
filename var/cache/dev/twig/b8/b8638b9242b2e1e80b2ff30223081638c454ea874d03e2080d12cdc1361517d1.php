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
        $__internal_84ed86808b821fae83857f97183ebaa6681010fc67c6947d46e8f4c5d2846106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ed86808b821fae83857f97183ebaa6681010fc67c6947d46e8f4c5d2846106->enter($__internal_84ed86808b821fae83857f97183ebaa6681010fc67c6947d46e8f4c5d2846106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84ed86808b821fae83857f97183ebaa6681010fc67c6947d46e8f4c5d2846106->leave($__internal_84ed86808b821fae83857f97183ebaa6681010fc67c6947d46e8f4c5d2846106_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad4ce06bd0194731acd0dce24a04d01037903384f5c715468569f26571a1c3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4ce06bd0194731acd0dce24a04d01037903384f5c715468569f26571a1c3c1->enter($__internal_ad4ce06bd0194731acd0dce24a04d01037903384f5c715468569f26571a1c3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad4ce06bd0194731acd0dce24a04d01037903384f5c715468569f26571a1c3c1->leave($__internal_ad4ce06bd0194731acd0dce24a04d01037903384f5c715468569f26571a1c3c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0416d62249c777a2cab2632b385970b63223d0b0a37ad63e2ed3cb4437ee0724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0416d62249c777a2cab2632b385970b63223d0b0a37ad63e2ed3cb4437ee0724->enter($__internal_0416d62249c777a2cab2632b385970b63223d0b0a37ad63e2ed3cb4437ee0724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0416d62249c777a2cab2632b385970b63223d0b0a37ad63e2ed3cb4437ee0724->leave($__internal_0416d62249c777a2cab2632b385970b63223d0b0a37ad63e2ed3cb4437ee0724_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd08c5ee2b8e770b91f0b07aaa87bede065427de3711c88efd1e74e52169fe15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd08c5ee2b8e770b91f0b07aaa87bede065427de3711c88efd1e74e52169fe15->enter($__internal_cd08c5ee2b8e770b91f0b07aaa87bede065427de3711c88efd1e74e52169fe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd08c5ee2b8e770b91f0b07aaa87bede065427de3711c88efd1e74e52169fe15->leave($__internal_cd08c5ee2b8e770b91f0b07aaa87bede065427de3711c88efd1e74e52169fe15_prof);

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
