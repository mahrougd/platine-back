<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0b2b5fcb12d35beac8828205fc1dff3082b3708495b4b5a6ca110ab624f5d485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c92701654c639cce23298212d88bfcc95eccbe4cfd763509bb75cf3bb41c6c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92701654c639cce23298212d88bfcc95eccbe4cfd763509bb75cf3bb41c6c77->enter($__internal_c92701654c639cce23298212d88bfcc95eccbe4cfd763509bb75cf3bb41c6c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92701654c639cce23298212d88bfcc95eccbe4cfd763509bb75cf3bb41c6c77->leave($__internal_c92701654c639cce23298212d88bfcc95eccbe4cfd763509bb75cf3bb41c6c77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67d6bd122a0ba343ad9ec6771bfcada4785c3d45be8223f834a32e3786d24a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d6bd122a0ba343ad9ec6771bfcada4785c3d45be8223f834a32e3786d24a8e->enter($__internal_67d6bd122a0ba343ad9ec6771bfcada4785c3d45be8223f834a32e3786d24a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67d6bd122a0ba343ad9ec6771bfcada4785c3d45be8223f834a32e3786d24a8e->leave($__internal_67d6bd122a0ba343ad9ec6771bfcada4785c3d45be8223f834a32e3786d24a8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17016579fd23a39bc0c08bc9d15ff5805cdcedf515c53d5b7279ee31f3c3f4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17016579fd23a39bc0c08bc9d15ff5805cdcedf515c53d5b7279ee31f3c3f4a7->enter($__internal_17016579fd23a39bc0c08bc9d15ff5805cdcedf515c53d5b7279ee31f3c3f4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17016579fd23a39bc0c08bc9d15ff5805cdcedf515c53d5b7279ee31f3c3f4a7->leave($__internal_17016579fd23a39bc0c08bc9d15ff5805cdcedf515c53d5b7279ee31f3c3f4a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cae7709d26785434445253ca968aec3b3df29f237d1466a2c3462db7afdc11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cae7709d26785434445253ca968aec3b3df29f237d1466a2c3462db7afdc11d->enter($__internal_5cae7709d26785434445253ca968aec3b3df29f237d1466a2c3462db7afdc11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5cae7709d26785434445253ca968aec3b3df29f237d1466a2c3462db7afdc11d->leave($__internal_5cae7709d26785434445253ca968aec3b3df29f237d1466a2c3462db7afdc11d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
