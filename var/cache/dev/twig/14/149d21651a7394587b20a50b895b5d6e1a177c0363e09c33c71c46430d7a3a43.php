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
        $__internal_ec84d743a1f609304315d7bbee6bcbe1fdc32575df2e19eee0fbf2da5d4c856b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec84d743a1f609304315d7bbee6bcbe1fdc32575df2e19eee0fbf2da5d4c856b->enter($__internal_ec84d743a1f609304315d7bbee6bcbe1fdc32575df2e19eee0fbf2da5d4c856b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec84d743a1f609304315d7bbee6bcbe1fdc32575df2e19eee0fbf2da5d4c856b->leave($__internal_ec84d743a1f609304315d7bbee6bcbe1fdc32575df2e19eee0fbf2da5d4c856b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d08d3359b950648a86aaa649ebe2e6b43c2358fde1b8b77f108fb93e08d0c3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08d3359b950648a86aaa649ebe2e6b43c2358fde1b8b77f108fb93e08d0c3fb->enter($__internal_d08d3359b950648a86aaa649ebe2e6b43c2358fde1b8b77f108fb93e08d0c3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d08d3359b950648a86aaa649ebe2e6b43c2358fde1b8b77f108fb93e08d0c3fb->leave($__internal_d08d3359b950648a86aaa649ebe2e6b43c2358fde1b8b77f108fb93e08d0c3fb_prof);

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
