<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b65ec5e47a443e0f04562c51d7d085e19eedcc462dfe81ec806101d1e0d1a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_459e45e34624eff1e770a4374efb7d151e4d653f7617deb129807b385fca9e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459e45e34624eff1e770a4374efb7d151e4d653f7617deb129807b385fca9e01->enter($__internal_459e45e34624eff1e770a4374efb7d151e4d653f7617deb129807b385fca9e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459e45e34624eff1e770a4374efb7d151e4d653f7617deb129807b385fca9e01->leave($__internal_459e45e34624eff1e770a4374efb7d151e4d653f7617deb129807b385fca9e01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7863bc724c677966665820eb6a5c9fd37301e06976eb6131886057c596975a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7863bc724c677966665820eb6a5c9fd37301e06976eb6131886057c596975a->enter($__internal_2a7863bc724c677966665820eb6a5c9fd37301e06976eb6131886057c596975a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2a7863bc724c677966665820eb6a5c9fd37301e06976eb6131886057c596975a->leave($__internal_2a7863bc724c677966665820eb6a5c9fd37301e06976eb6131886057c596975a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c9f7cb96656705bde700967426a1d2169d03d227ce35e2de3fe3cbc6dc40ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9f7cb96656705bde700967426a1d2169d03d227ce35e2de3fe3cbc6dc40ff0->enter($__internal_7c9f7cb96656705bde700967426a1d2169d03d227ce35e2de3fe3cbc6dc40ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7c9f7cb96656705bde700967426a1d2169d03d227ce35e2de3fe3cbc6dc40ff0->leave($__internal_7c9f7cb96656705bde700967426a1d2169d03d227ce35e2de3fe3cbc6dc40ff0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
