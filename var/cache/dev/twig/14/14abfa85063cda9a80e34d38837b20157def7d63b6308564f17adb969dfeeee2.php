<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_21b9f3a82acdc7f61ba244cb0dbbbd0c469ad117b450b08f5db5f4af9ba22c94 extends Twig_Template
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
        $__internal_c5e573e050a95c6dc6bf00f698c0182768dacd2a20c915f5b9d681626857bef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e573e050a95c6dc6bf00f698c0182768dacd2a20c915f5b9d681626857bef3->enter($__internal_c5e573e050a95c6dc6bf00f698c0182768dacd2a20c915f5b9d681626857bef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c5e573e050a95c6dc6bf00f698c0182768dacd2a20c915f5b9d681626857bef3->leave($__internal_c5e573e050a95c6dc6bf00f698c0182768dacd2a20c915f5b9d681626857bef3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
