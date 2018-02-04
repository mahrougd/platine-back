<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_66ba52351e2fef3eb59a79d7329e5e4e3899c555378d35355092ac7e16409afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c7eb7759fe0d8a3afbcab7eb745fe3af5f92afc015b44e29c53ad1ca4d8a5a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7eb7759fe0d8a3afbcab7eb745fe3af5f92afc015b44e29c53ad1ca4d8a5a6a->enter($__internal_c7eb7759fe0d8a3afbcab7eb745fe3af5f92afc015b44e29c53ad1ca4d8a5a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7eb7759fe0d8a3afbcab7eb745fe3af5f92afc015b44e29c53ad1ca4d8a5a6a->leave($__internal_c7eb7759fe0d8a3afbcab7eb745fe3af5f92afc015b44e29c53ad1ca4d8a5a6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_825892961407e4ccfe3d48bba2ad7f267dc7fa17ceabaefb53e3f59c142acdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825892961407e4ccfe3d48bba2ad7f267dc7fa17ceabaefb53e3f59c142acdef->enter($__internal_825892961407e4ccfe3d48bba2ad7f267dc7fa17ceabaefb53e3f59c142acdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_825892961407e4ccfe3d48bba2ad7f267dc7fa17ceabaefb53e3f59c142acdef->leave($__internal_825892961407e4ccfe3d48bba2ad7f267dc7fa17ceabaefb53e3f59c142acdef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bfe3cbc0864c37596c925e1eb66f318356dc13ec0ac8d74a3961e28aa836088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfe3cbc0864c37596c925e1eb66f318356dc13ec0ac8d74a3961e28aa836088->enter($__internal_1bfe3cbc0864c37596c925e1eb66f318356dc13ec0ac8d74a3961e28aa836088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bfe3cbc0864c37596c925e1eb66f318356dc13ec0ac8d74a3961e28aa836088->leave($__internal_1bfe3cbc0864c37596c925e1eb66f318356dc13ec0ac8d74a3961e28aa836088_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ae36cb3d5827a03136874ce622b91c53f699ef433f3320a6bd6fc56f20d7e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae36cb3d5827a03136874ce622b91c53f699ef433f3320a6bd6fc56f20d7e96->enter($__internal_2ae36cb3d5827a03136874ce622b91c53f699ef433f3320a6bd6fc56f20d7e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2ae36cb3d5827a03136874ce622b91c53f699ef433f3320a6bd6fc56f20d7e96->leave($__internal_2ae36cb3d5827a03136874ce622b91c53f699ef433f3320a6bd6fc56f20d7e96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
