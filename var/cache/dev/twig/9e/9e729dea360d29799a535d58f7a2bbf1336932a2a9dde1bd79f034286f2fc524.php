<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_187fb4c9680875f2c5e6659b6f863716c0eff833b3334b0819b76f1b0ec66c68 extends Twig_Template
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
        $__internal_740abe7138552ebb5b1803a6e4e12b96d0ca7499d77b1513291347ccacdee1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740abe7138552ebb5b1803a6e4e12b96d0ca7499d77b1513291347ccacdee1f7->enter($__internal_740abe7138552ebb5b1803a6e4e12b96d0ca7499d77b1513291347ccacdee1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_740abe7138552ebb5b1803a6e4e12b96d0ca7499d77b1513291347ccacdee1f7->leave($__internal_740abe7138552ebb5b1803a6e4e12b96d0ca7499d77b1513291347ccacdee1f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
