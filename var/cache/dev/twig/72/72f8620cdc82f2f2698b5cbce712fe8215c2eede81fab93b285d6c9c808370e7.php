<?php

/* ::base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
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
        $__internal_a40e031256f8d03e4cd2a48d8dd6903ddac11b7de983f0bdc376b7d42ee28761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40e031256f8d03e4cd2a48d8dd6903ddac11b7de983f0bdc376b7d42ee28761->enter($__internal_a40e031256f8d03e4cd2a48d8dd6903ddac11b7de983f0bdc376b7d42ee28761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a40e031256f8d03e4cd2a48d8dd6903ddac11b7de983f0bdc376b7d42ee28761->leave($__internal_a40e031256f8d03e4cd2a48d8dd6903ddac11b7de983f0bdc376b7d42ee28761_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d449fdd0a7712305be1ef3c243f303a80c4c747fe361666ffab1b6ee87e8ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d449fdd0a7712305be1ef3c243f303a80c4c747fe361666ffab1b6ee87e8ebe->enter($__internal_8d449fdd0a7712305be1ef3c243f303a80c4c747fe361666ffab1b6ee87e8ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8d449fdd0a7712305be1ef3c243f303a80c4c747fe361666ffab1b6ee87e8ebe->leave($__internal_8d449fdd0a7712305be1ef3c243f303a80c4c747fe361666ffab1b6ee87e8ebe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48b72a10d3a3a73058100ff83bfda85859f9a09750bf0d92ac44e9bf25660892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b72a10d3a3a73058100ff83bfda85859f9a09750bf0d92ac44e9bf25660892->enter($__internal_48b72a10d3a3a73058100ff83bfda85859f9a09750bf0d92ac44e9bf25660892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48b72a10d3a3a73058100ff83bfda85859f9a09750bf0d92ac44e9bf25660892->leave($__internal_48b72a10d3a3a73058100ff83bfda85859f9a09750bf0d92ac44e9bf25660892_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0fd80c98a29784565996631a20a603bac38e0dcba5e0dc1ce2838a89b9e19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0fd80c98a29784565996631a20a603bac38e0dcba5e0dc1ce2838a89b9e19b->enter($__internal_df0fd80c98a29784565996631a20a603bac38e0dcba5e0dc1ce2838a89b9e19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df0fd80c98a29784565996631a20a603bac38e0dcba5e0dc1ce2838a89b9e19b->leave($__internal_df0fd80c98a29784565996631a20a603bac38e0dcba5e0dc1ce2838a89b9e19b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a0c13ccf96073a56c694166247a24b1835ede3d9ed8f1d8de5562e1f3bd59ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0c13ccf96073a56c694166247a24b1835ede3d9ed8f1d8de5562e1f3bd59ba->enter($__internal_5a0c13ccf96073a56c694166247a24b1835ede3d9ed8f1d8de5562e1f3bd59ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a0c13ccf96073a56c694166247a24b1835ede3d9ed8f1d8de5562e1f3bd59ba->leave($__internal_5a0c13ccf96073a56c694166247a24b1835ede3d9ed8f1d8de5562e1f3bd59ba_prof);

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
", "::base.html.twig", "/home/douae/rest_api/app/Resources/views/base.html.twig");
    }
}
