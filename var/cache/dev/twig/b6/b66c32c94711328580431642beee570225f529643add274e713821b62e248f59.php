<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d12cf324fcf950368bd932cc944759642d0d2d4d5f0dae1d33552cd54b28c7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12cf324fcf950368bd932cc944759642d0d2d4d5f0dae1d33552cd54b28c7a6->enter($__internal_d12cf324fcf950368bd932cc944759642d0d2d4d5f0dae1d33552cd54b28c7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12cf324fcf950368bd932cc944759642d0d2d4d5f0dae1d33552cd54b28c7a6->leave($__internal_d12cf324fcf950368bd932cc944759642d0d2d4d5f0dae1d33552cd54b28c7a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf0c071aa03d199c79efcf0117def021ef959aa607bd7024fa90dc6a22fcab8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0c071aa03d199c79efcf0117def021ef959aa607bd7024fa90dc6a22fcab8c->enter($__internal_cf0c071aa03d199c79efcf0117def021ef959aa607bd7024fa90dc6a22fcab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf0c071aa03d199c79efcf0117def021ef959aa607bd7024fa90dc6a22fcab8c->leave($__internal_cf0c071aa03d199c79efcf0117def021ef959aa607bd7024fa90dc6a22fcab8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5547dd92ca4801f19d6921f3d6b406182f94281192fb75f0b725657588b6b9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5547dd92ca4801f19d6921f3d6b406182f94281192fb75f0b725657588b6b9f1->enter($__internal_5547dd92ca4801f19d6921f3d6b406182f94281192fb75f0b725657588b6b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5547dd92ca4801f19d6921f3d6b406182f94281192fb75f0b725657588b6b9f1->leave($__internal_5547dd92ca4801f19d6921f3d6b406182f94281192fb75f0b725657588b6b9f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72ae9afc03532334f8f744c5ee57f71065916364ec3eb7b39bbf3f22b579b7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ae9afc03532334f8f744c5ee57f71065916364ec3eb7b39bbf3f22b579b7cf->enter($__internal_72ae9afc03532334f8f744c5ee57f71065916364ec3eb7b39bbf3f22b579b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72ae9afc03532334f8f744c5ee57f71065916364ec3eb7b39bbf3f22b579b7cf->leave($__internal_72ae9afc03532334f8f744c5ee57f71065916364ec3eb7b39bbf3f22b579b7cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
