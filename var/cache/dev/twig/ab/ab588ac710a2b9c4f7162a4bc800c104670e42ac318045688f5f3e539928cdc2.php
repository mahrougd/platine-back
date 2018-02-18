<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
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
        $__internal_9b9ba43d82d4378353897dc734ebaaf4993f5b01dfc8e6f8c2be867edbc566c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9ba43d82d4378353897dc734ebaaf4993f5b01dfc8e6f8c2be867edbc566c3->enter($__internal_9b9ba43d82d4378353897dc734ebaaf4993f5b01dfc8e6f8c2be867edbc566c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b9ba43d82d4378353897dc734ebaaf4993f5b01dfc8e6f8c2be867edbc566c3->leave($__internal_9b9ba43d82d4378353897dc734ebaaf4993f5b01dfc8e6f8c2be867edbc566c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1922be713ed09417efb7c47bccf665bb371b2d5b9212c38bd3c9626902b837ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1922be713ed09417efb7c47bccf665bb371b2d5b9212c38bd3c9626902b837ff->enter($__internal_1922be713ed09417efb7c47bccf665bb371b2d5b9212c38bd3c9626902b837ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1922be713ed09417efb7c47bccf665bb371b2d5b9212c38bd3c9626902b837ff->leave($__internal_1922be713ed09417efb7c47bccf665bb371b2d5b9212c38bd3c9626902b837ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35fd7eb6780fa8422c3cc5592a7b7b856a43bdca4e64a5505314a39d901ec35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fd7eb6780fa8422c3cc5592a7b7b856a43bdca4e64a5505314a39d901ec35c->enter($__internal_35fd7eb6780fa8422c3cc5592a7b7b856a43bdca4e64a5505314a39d901ec35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_35fd7eb6780fa8422c3cc5592a7b7b856a43bdca4e64a5505314a39d901ec35c->leave($__internal_35fd7eb6780fa8422c3cc5592a7b7b856a43bdca4e64a5505314a39d901ec35c_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
