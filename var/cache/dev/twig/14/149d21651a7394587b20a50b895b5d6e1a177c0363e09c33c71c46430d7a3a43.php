<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf06e53981c3feba495ed71aa3aa3b836067202fa6bfcc8c977885b3fd4a529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf06e53981c3feba495ed71aa3aa3b836067202fa6bfcc8c977885b3fd4a529->enter($__internal_9cf06e53981c3feba495ed71aa3aa3b836067202fa6bfcc8c977885b3fd4a529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9cf06e53981c3feba495ed71aa3aa3b836067202fa6bfcc8c977885b3fd4a529->leave($__internal_9cf06e53981c3feba495ed71aa3aa3b836067202fa6bfcc8c977885b3fd4a529_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_25f8d63075531f48e537491814e712cbcaee873fdef8c0cf5f9edf688ffb0e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f8d63075531f48e537491814e712cbcaee873fdef8c0cf5f9edf688ffb0e03->enter($__internal_25f8d63075531f48e537491814e712cbcaee873fdef8c0cf5f9edf688ffb0e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_25f8d63075531f48e537491814e712cbcaee873fdef8c0cf5f9edf688ffb0e03->leave($__internal_25f8d63075531f48e537491814e712cbcaee873fdef8c0cf5f9edf688ffb0e03_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
