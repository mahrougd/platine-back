<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_b3af72d557c66eec072e8a14038b0e352a4421a27a98398a5032bf6e903b91e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37ec27ea1dfd4eaf5cd75cb0c14dc6f97fd41281f10bf4c9c1f90d8a92d4d58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ec27ea1dfd4eaf5cd75cb0c14dc6f97fd41281f10bf4c9c1f90d8a92d4d58b->enter($__internal_37ec27ea1dfd4eaf5cd75cb0c14dc6f97fd41281f10bf4c9c1f90d8a92d4d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_37ec27ea1dfd4eaf5cd75cb0c14dc6f97fd41281f10bf4c9c1f90d8a92d4d58b->leave($__internal_37ec27ea1dfd4eaf5cd75cb0c14dc6f97fd41281f10bf4c9c1f90d8a92d4d58b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
