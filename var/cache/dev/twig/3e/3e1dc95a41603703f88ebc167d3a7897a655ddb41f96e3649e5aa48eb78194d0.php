<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e7f1bf453deb2fab0baca680c86f6c8aed7ee34f682bc17ea6818b244e421964 extends Twig_Template
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
        $__internal_27eba512ed93caa2fdd3a7c9647eeeadc03dd35b838caf242b62f2209ca00d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27eba512ed93caa2fdd3a7c9647eeeadc03dd35b838caf242b62f2209ca00d91->enter($__internal_27eba512ed93caa2fdd3a7c9647eeeadc03dd35b838caf242b62f2209ca00d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_27eba512ed93caa2fdd3a7c9647eeeadc03dd35b838caf242b62f2209ca00d91->leave($__internal_27eba512ed93caa2fdd3a7c9647eeeadc03dd35b838caf242b62f2209ca00d91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/douae/platine-back/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
