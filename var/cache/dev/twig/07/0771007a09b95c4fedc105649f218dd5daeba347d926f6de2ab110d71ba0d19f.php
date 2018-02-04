<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fc1e4352312bd850b230056cf35200c1db9749fefbc53d3d93ac51a4b0692eb extends Twig_Template
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
        $__internal_32f4a7d04f3137cd0d95f1bb2a822a506afe7d12ca7ed47266b563cc5d024a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f4a7d04f3137cd0d95f1bb2a822a506afe7d12ca7ed47266b563cc5d024a34->enter($__internal_32f4a7d04f3137cd0d95f1bb2a822a506afe7d12ca7ed47266b563cc5d024a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_32f4a7d04f3137cd0d95f1bb2a822a506afe7d12ca7ed47266b563cc5d024a34->leave($__internal_32f4a7d04f3137cd0d95f1bb2a822a506afe7d12ca7ed47266b563cc5d024a34_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_743a1a504fc02b082bab08e3e6f7cdb19862ba7f2ebd068d62ffbafc3bffa06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743a1a504fc02b082bab08e3e6f7cdb19862ba7f2ebd068d62ffbafc3bffa06c->enter($__internal_743a1a504fc02b082bab08e3e6f7cdb19862ba7f2ebd068d62ffbafc3bffa06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_743a1a504fc02b082bab08e3e6f7cdb19862ba7f2ebd068d62ffbafc3bffa06c->leave($__internal_743a1a504fc02b082bab08e3e6f7cdb19862ba7f2ebd068d62ffbafc3bffa06c_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
