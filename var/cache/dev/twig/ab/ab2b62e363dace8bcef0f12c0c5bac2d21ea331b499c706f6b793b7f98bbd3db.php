<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_64180bc5d592cec1aee10e0424950d82cbd57a14a4bdca8402996a233b7bbc00 extends Twig_Template
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
        $__internal_9f880a530b0962405a5756ff2e6d85f66f815fd00922ab046f34da8e3f9c703a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f880a530b0962405a5756ff2e6d85f66f815fd00922ab046f34da8e3f9c703a->enter($__internal_9f880a530b0962405a5756ff2e6d85f66f815fd00922ab046f34da8e3f9c703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f880a530b0962405a5756ff2e6d85f66f815fd00922ab046f34da8e3f9c703a->leave($__internal_9f880a530b0962405a5756ff2e6d85f66f815fd00922ab046f34da8e3f9c703a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_445547c5b96b8c2cee4d20efdb44eefe52b468bbf894cf4fbe90c37771c372c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445547c5b96b8c2cee4d20efdb44eefe52b468bbf894cf4fbe90c37771c372c1->enter($__internal_445547c5b96b8c2cee4d20efdb44eefe52b468bbf894cf4fbe90c37771c372c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_445547c5b96b8c2cee4d20efdb44eefe52b468bbf894cf4fbe90c37771c372c1->leave($__internal_445547c5b96b8c2cee4d20efdb44eefe52b468bbf894cf4fbe90c37771c372c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2465d8f54806e4aad2d9efb65a1751cf53884132c945320e46f1a784873e86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2465d8f54806e4aad2d9efb65a1751cf53884132c945320e46f1a784873e86a->enter($__internal_e2465d8f54806e4aad2d9efb65a1751cf53884132c945320e46f1a784873e86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2465d8f54806e4aad2d9efb65a1751cf53884132c945320e46f1a784873e86a->leave($__internal_e2465d8f54806e4aad2d9efb65a1751cf53884132c945320e46f1a784873e86a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1fb6b94fe064b5d06e5aafd315a4e2284e63578ffcfac1e9c4006b639e25d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fb6b94fe064b5d06e5aafd315a4e2284e63578ffcfac1e9c4006b639e25d0e->enter($__internal_a1fb6b94fe064b5d06e5aafd315a4e2284e63578ffcfac1e9c4006b639e25d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a1fb6b94fe064b5d06e5aafd315a4e2284e63578ffcfac1e9c4006b639e25d0e->leave($__internal_a1fb6b94fe064b5d06e5aafd315a4e2284e63578ffcfac1e9c4006b639e25d0e_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
