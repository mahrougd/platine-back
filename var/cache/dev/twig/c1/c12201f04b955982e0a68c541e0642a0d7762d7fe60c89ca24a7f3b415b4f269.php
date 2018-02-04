<?php

/* base.html.twig */
class __TwigTemplate_b163ea85c57982485d7f46c98cdfab97159c8bf8956c8dd4c3ea10f75302ed61 extends Twig_Template
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
        $__internal_34836fb9a5d199e952953af0dae364478506ea5194f917fe58ee857891e93247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34836fb9a5d199e952953af0dae364478506ea5194f917fe58ee857891e93247->enter($__internal_34836fb9a5d199e952953af0dae364478506ea5194f917fe58ee857891e93247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_34836fb9a5d199e952953af0dae364478506ea5194f917fe58ee857891e93247->leave($__internal_34836fb9a5d199e952953af0dae364478506ea5194f917fe58ee857891e93247_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7736ac20ef90c839e6b4a804786c283ba31a045c06fb3bbd7482a8167915d018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7736ac20ef90c839e6b4a804786c283ba31a045c06fb3bbd7482a8167915d018->enter($__internal_7736ac20ef90c839e6b4a804786c283ba31a045c06fb3bbd7482a8167915d018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7736ac20ef90c839e6b4a804786c283ba31a045c06fb3bbd7482a8167915d018->leave($__internal_7736ac20ef90c839e6b4a804786c283ba31a045c06fb3bbd7482a8167915d018_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_497a713fc58ae71e5cfd604aa446223a3e048785ad324b874044d77599016b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497a713fc58ae71e5cfd604aa446223a3e048785ad324b874044d77599016b05->enter($__internal_497a713fc58ae71e5cfd604aa446223a3e048785ad324b874044d77599016b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_497a713fc58ae71e5cfd604aa446223a3e048785ad324b874044d77599016b05->leave($__internal_497a713fc58ae71e5cfd604aa446223a3e048785ad324b874044d77599016b05_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4e790bab2526774b194626105231d0e0a294ae1092a1771524a426688c528e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e790bab2526774b194626105231d0e0a294ae1092a1771524a426688c528e9->enter($__internal_f4e790bab2526774b194626105231d0e0a294ae1092a1771524a426688c528e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4e790bab2526774b194626105231d0e0a294ae1092a1771524a426688c528e9->leave($__internal_f4e790bab2526774b194626105231d0e0a294ae1092a1771524a426688c528e9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa826c13bab17b7ba647a99d060bed7301834cb80bd5d1999b7d92615c61a626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa826c13bab17b7ba647a99d060bed7301834cb80bd5d1999b7d92615c61a626->enter($__internal_aa826c13bab17b7ba647a99d060bed7301834cb80bd5d1999b7d92615c61a626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa826c13bab17b7ba647a99d060bed7301834cb80bd5d1999b7d92615c61a626->leave($__internal_aa826c13bab17b7ba647a99d060bed7301834cb80bd5d1999b7d92615c61a626_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/home/douae/platine-back/app/Resources/views/base.html.twig");
    }
}
