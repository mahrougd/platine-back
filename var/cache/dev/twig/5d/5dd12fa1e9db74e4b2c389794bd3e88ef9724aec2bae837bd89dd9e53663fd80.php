<?php

/* base.html.twig */
class __TwigTemplate_d42d34d0c13e9470bbff7d58f2ec1b32fd420fa2c6e51b8cbfe38f9b7215eb04 extends Twig_Template
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
        $__internal_c979f717611bbfbafa7474fd679b67c035662a86d8fc51b1cfbdf6685348cb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c979f717611bbfbafa7474fd679b67c035662a86d8fc51b1cfbdf6685348cb8f->enter($__internal_c979f717611bbfbafa7474fd679b67c035662a86d8fc51b1cfbdf6685348cb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c979f717611bbfbafa7474fd679b67c035662a86d8fc51b1cfbdf6685348cb8f->leave($__internal_c979f717611bbfbafa7474fd679b67c035662a86d8fc51b1cfbdf6685348cb8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccbc3b7fef3335e2c0bad7a69b3d192137c671dded430aadcd5f0db90d4c9582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbc3b7fef3335e2c0bad7a69b3d192137c671dded430aadcd5f0db90d4c9582->enter($__internal_ccbc3b7fef3335e2c0bad7a69b3d192137c671dded430aadcd5f0db90d4c9582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ccbc3b7fef3335e2c0bad7a69b3d192137c671dded430aadcd5f0db90d4c9582->leave($__internal_ccbc3b7fef3335e2c0bad7a69b3d192137c671dded430aadcd5f0db90d4c9582_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47e7a83d5faee9dde4b1b8b0ea37e2a03469e0f57d41d4f8c4cbeb846472b88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e7a83d5faee9dde4b1b8b0ea37e2a03469e0f57d41d4f8c4cbeb846472b88b->enter($__internal_47e7a83d5faee9dde4b1b8b0ea37e2a03469e0f57d41d4f8c4cbeb846472b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47e7a83d5faee9dde4b1b8b0ea37e2a03469e0f57d41d4f8c4cbeb846472b88b->leave($__internal_47e7a83d5faee9dde4b1b8b0ea37e2a03469e0f57d41d4f8c4cbeb846472b88b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68d79f0551d5de0eb622d6f7e5926fdbe456855408a9139d3392f8a5d8ce06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68d79f0551d5de0eb622d6f7e5926fdbe456855408a9139d3392f8a5d8ce06c->enter($__internal_a68d79f0551d5de0eb622d6f7e5926fdbe456855408a9139d3392f8a5d8ce06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a68d79f0551d5de0eb622d6f7e5926fdbe456855408a9139d3392f8a5d8ce06c->leave($__internal_a68d79f0551d5de0eb622d6f7e5926fdbe456855408a9139d3392f8a5d8ce06c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80363964ca5a2152d623b461dad2c570092345afd6e3a19e6c92143527f45915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80363964ca5a2152d623b461dad2c570092345afd6e3a19e6c92143527f45915->enter($__internal_80363964ca5a2152d623b461dad2c570092345afd6e3a19e6c92143527f45915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80363964ca5a2152d623b461dad2c570092345afd6e3a19e6c92143527f45915->leave($__internal_80363964ca5a2152d623b461dad2c570092345afd6e3a19e6c92143527f45915_prof);

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
