<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e015407930b448ce8e9af53b594b454e3f6bbe4ec5906f6ccbc7b88cf15750c0 extends Twig_Template
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
        $__internal_73ab62b1d234df603c071aa30fdc50498b3adc005444a35549ce88e229f9a930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ab62b1d234df603c071aa30fdc50498b3adc005444a35549ce88e229f9a930->enter($__internal_73ab62b1d234df603c071aa30fdc50498b3adc005444a35549ce88e229f9a930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_73ab62b1d234df603c071aa30fdc50498b3adc005444a35549ce88e229f9a930->leave($__internal_73ab62b1d234df603c071aa30fdc50498b3adc005444a35549ce88e229f9a930_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
