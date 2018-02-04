<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3220d21018a82a6b0032cbb1fe1721da33902d35253b6dae3228d5c428cdea4f extends Twig_Template
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
        $__internal_164382d15ec01d4dab509ec1f90d6c9a8966de50c5816a9cbb4078bdf5aae405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164382d15ec01d4dab509ec1f90d6c9a8966de50c5816a9cbb4078bdf5aae405->enter($__internal_164382d15ec01d4dab509ec1f90d6c9a8966de50c5816a9cbb4078bdf5aae405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_164382d15ec01d4dab509ec1f90d6c9a8966de50c5816a9cbb4078bdf5aae405->leave($__internal_164382d15ec01d4dab509ec1f90d6c9a8966de50c5816a9cbb4078bdf5aae405_prof);

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
", "@Framework/Form/url_widget.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
