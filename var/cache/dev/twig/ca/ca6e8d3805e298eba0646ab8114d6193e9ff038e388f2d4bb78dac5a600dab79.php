<?php

/* ::base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be937a2d4c07e8e8a61275708ea7e8d8ed1b8bb6406f04914cdb211427460a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be937a2d4c07e8e8a61275708ea7e8d8ed1b8bb6406f04914cdb211427460a99->enter($__internal_be937a2d4c07e8e8a61275708ea7e8d8ed1b8bb6406f04914cdb211427460a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_be937a2d4c07e8e8a61275708ea7e8d8ed1b8bb6406f04914cdb211427460a99->leave($__internal_be937a2d4c07e8e8a61275708ea7e8d8ed1b8bb6406f04914cdb211427460a99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35dc346b2b9fc36482747aa57f3d868e116583296ea5167e3e70d5bf81941c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35dc346b2b9fc36482747aa57f3d868e116583296ea5167e3e70d5bf81941c4c->enter($__internal_35dc346b2b9fc36482747aa57f3d868e116583296ea5167e3e70d5bf81941c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_35dc346b2b9fc36482747aa57f3d868e116583296ea5167e3e70d5bf81941c4c->leave($__internal_35dc346b2b9fc36482747aa57f3d868e116583296ea5167e3e70d5bf81941c4c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e50bda9888f6d186a37845649e0770533741cd3cdbef7e479a6895bd6a9e3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e50bda9888f6d186a37845649e0770533741cd3cdbef7e479a6895bd6a9e3ac->enter($__internal_9e50bda9888f6d186a37845649e0770533741cd3cdbef7e479a6895bd6a9e3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e50bda9888f6d186a37845649e0770533741cd3cdbef7e479a6895bd6a9e3ac->leave($__internal_9e50bda9888f6d186a37845649e0770533741cd3cdbef7e479a6895bd6a9e3ac_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6799a37cb27090fb090ce098b27e4d0f03eb3233e925cd2a0ac8dda3dcfa1d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6799a37cb27090fb090ce098b27e4d0f03eb3233e925cd2a0ac8dda3dcfa1d9a->enter($__internal_6799a37cb27090fb090ce098b27e4d0f03eb3233e925cd2a0ac8dda3dcfa1d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6799a37cb27090fb090ce098b27e4d0f03eb3233e925cd2a0ac8dda3dcfa1d9a->leave($__internal_6799a37cb27090fb090ce098b27e4d0f03eb3233e925cd2a0ac8dda3dcfa1d9a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19ab30258c9e3c3ba476a99864b235a576a828f7a892f67c579c606dee51d6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ab30258c9e3c3ba476a99864b235a576a828f7a892f67c579c606dee51d6f8->enter($__internal_19ab30258c9e3c3ba476a99864b235a576a828f7a892f67c579c606dee51d6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19ab30258c9e3c3ba476a99864b235a576a828f7a892f67c579c606dee51d6f8->leave($__internal_19ab30258c9e3c3ba476a99864b235a576a828f7a892f67c579c606dee51d6f8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/douae/platine-back/app/Resources/views/base.html.twig");
    }
}
