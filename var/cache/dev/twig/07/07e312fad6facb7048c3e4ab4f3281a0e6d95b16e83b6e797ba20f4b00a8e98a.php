<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7c4c4c9a0815998a8f16644ca2ed89b58f38b2a8ffad9c34d7f9f8d8ce512cd5 extends Twig_Template
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
        $__internal_b593f207fc17e711bcc0bbd93eea9aed5754052c210e5d6cc4949520019208c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b593f207fc17e711bcc0bbd93eea9aed5754052c210e5d6cc4949520019208c0->enter($__internal_b593f207fc17e711bcc0bbd93eea9aed5754052c210e5d6cc4949520019208c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b593f207fc17e711bcc0bbd93eea9aed5754052c210e5d6cc4949520019208c0->leave($__internal_b593f207fc17e711bcc0bbd93eea9aed5754052c210e5d6cc4949520019208c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
