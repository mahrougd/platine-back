<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f0e813d3b2e2b1cd3f438eebce67ea0c9472233ea868f05f6b1f19f33c0ff3c5 extends Twig_Template
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
        $__internal_8afb939d3dbff6fc0e9be24966ddc673044945928bd7d1c0609f843131f4136b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afb939d3dbff6fc0e9be24966ddc673044945928bd7d1c0609f843131f4136b->enter($__internal_8afb939d3dbff6fc0e9be24966ddc673044945928bd7d1c0609f843131f4136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8afb939d3dbff6fc0e9be24966ddc673044945928bd7d1c0609f843131f4136b->leave($__internal_8afb939d3dbff6fc0e9be24966ddc673044945928bd7d1c0609f843131f4136b_prof);

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
", "@Framework/Form/reset_widget.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
