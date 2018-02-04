<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_62a10e200f7a70a0fd4359fa40354d38ae6d4f533de2d52f1ff4d3fc67174289 extends Twig_Template
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
        $__internal_a551bdf23a81c42015b580e73613ca91d64c2f704523a8c621e1aaa7763d1a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a551bdf23a81c42015b580e73613ca91d64c2f704523a8c621e1aaa7763d1a0f->enter($__internal_a551bdf23a81c42015b580e73613ca91d64c2f704523a8c621e1aaa7763d1a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a551bdf23a81c42015b580e73613ca91d64c2f704523a8c621e1aaa7763d1a0f->leave($__internal_a551bdf23a81c42015b580e73613ca91d64c2f704523a8c621e1aaa7763d1a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
