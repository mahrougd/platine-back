<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e0b84e6e7702a3a48285de66f6d2a7cdc0823de030edc7c318aa29ac6ec651da extends Twig_Template
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
        $__internal_69846f21710fcd327582ee30236fb0cec97dc85ab2689dca176b1d42738e9709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69846f21710fcd327582ee30236fb0cec97dc85ab2689dca176b1d42738e9709->enter($__internal_69846f21710fcd327582ee30236fb0cec97dc85ab2689dca176b1d42738e9709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_69846f21710fcd327582ee30236fb0cec97dc85ab2689dca176b1d42738e9709->leave($__internal_69846f21710fcd327582ee30236fb0cec97dc85ab2689dca176b1d42738e9709_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
