<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e2ce138134e3339c130f29a7f40a92f07ed0a3edf6f98d82f596cd940c2347a extends Twig_Template
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
        $__internal_0133074c1dc0fc0961a5a99668ffc18cd0d4b48dc11946e58638f261719d8f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0133074c1dc0fc0961a5a99668ffc18cd0d4b48dc11946e58638f261719d8f53->enter($__internal_0133074c1dc0fc0961a5a99668ffc18cd0d4b48dc11946e58638f261719d8f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0133074c1dc0fc0961a5a99668ffc18cd0d4b48dc11946e58638f261719d8f53->leave($__internal_0133074c1dc0fc0961a5a99668ffc18cd0d4b48dc11946e58638f261719d8f53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
