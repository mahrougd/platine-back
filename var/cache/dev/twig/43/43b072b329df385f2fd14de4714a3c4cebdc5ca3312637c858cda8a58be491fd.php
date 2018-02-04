<?php

/* base.html.twig */
class __TwigTemplate_754e217ce325c07231619c449c6ec6cc8f5cadb5ff4a5469df950acb17fd6d3c extends Twig_Template
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
        $__internal_f91ce6e8e492a4980d470ec2b1c0ba5eb4e6cd5886fa41f46a07be671b2bdaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91ce6e8e492a4980d470ec2b1c0ba5eb4e6cd5886fa41f46a07be671b2bdaa8->enter($__internal_f91ce6e8e492a4980d470ec2b1c0ba5eb4e6cd5886fa41f46a07be671b2bdaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f91ce6e8e492a4980d470ec2b1c0ba5eb4e6cd5886fa41f46a07be671b2bdaa8->leave($__internal_f91ce6e8e492a4980d470ec2b1c0ba5eb4e6cd5886fa41f46a07be671b2bdaa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1a3e7454cd03e27ebd6366791b45755c5f59c8441b10ef2a445ce11c5a03ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a3e7454cd03e27ebd6366791b45755c5f59c8441b10ef2a445ce11c5a03ad2->enter($__internal_a1a3e7454cd03e27ebd6366791b45755c5f59c8441b10ef2a445ce11c5a03ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1a3e7454cd03e27ebd6366791b45755c5f59c8441b10ef2a445ce11c5a03ad2->leave($__internal_a1a3e7454cd03e27ebd6366791b45755c5f59c8441b10ef2a445ce11c5a03ad2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cc2c8f7741d8eb5d2b14aa406a73f561c565fe6735b4f9479c0f89d94358229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc2c8f7741d8eb5d2b14aa406a73f561c565fe6735b4f9479c0f89d94358229->enter($__internal_9cc2c8f7741d8eb5d2b14aa406a73f561c565fe6735b4f9479c0f89d94358229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9cc2c8f7741d8eb5d2b14aa406a73f561c565fe6735b4f9479c0f89d94358229->leave($__internal_9cc2c8f7741d8eb5d2b14aa406a73f561c565fe6735b4f9479c0f89d94358229_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3ddc0063f3620c5d51658d0f017841dd6b4111b71ff53e068c3ef7a4df68d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3ddc0063f3620c5d51658d0f017841dd6b4111b71ff53e068c3ef7a4df68d4->enter($__internal_1f3ddc0063f3620c5d51658d0f017841dd6b4111b71ff53e068c3ef7a4df68d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f3ddc0063f3620c5d51658d0f017841dd6b4111b71ff53e068c3ef7a4df68d4->leave($__internal_1f3ddc0063f3620c5d51658d0f017841dd6b4111b71ff53e068c3ef7a4df68d4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fabe9e392e427c683bdde70e64c276b3178fa16bf5140dc0661248237216cec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabe9e392e427c683bdde70e64c276b3178fa16bf5140dc0661248237216cec5->enter($__internal_fabe9e392e427c683bdde70e64c276b3178fa16bf5140dc0661248237216cec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fabe9e392e427c683bdde70e64c276b3178fa16bf5140dc0661248237216cec5->leave($__internal_fabe9e392e427c683bdde70e64c276b3178fa16bf5140dc0661248237216cec5_prof);

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
", "base.html.twig", "/home/douae/rest_api/app/Resources/views/base.html.twig");
    }
}
