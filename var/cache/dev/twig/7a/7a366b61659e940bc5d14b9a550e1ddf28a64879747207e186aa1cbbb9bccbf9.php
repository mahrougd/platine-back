<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d80f5488a760cbb06855744c9b6b151a0ef2c891c65aff590a206b2f7f9a65b0 extends Twig_Template
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
        $__internal_37bd468289b453c1b9e8423858610ea2dd59e0117c15399dba6e75d0a9770caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bd468289b453c1b9e8423858610ea2dd59e0117c15399dba6e75d0a9770caa->enter($__internal_37bd468289b453c1b9e8423858610ea2dd59e0117c15399dba6e75d0a9770caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_37bd468289b453c1b9e8423858610ea2dd59e0117c15399dba6e75d0a9770caa->leave($__internal_37bd468289b453c1b9e8423858610ea2dd59e0117c15399dba6e75d0a9770caa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
