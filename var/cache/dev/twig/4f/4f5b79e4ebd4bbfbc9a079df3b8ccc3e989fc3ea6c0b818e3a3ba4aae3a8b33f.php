<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_256745554f04cfe790ef5d40e1da1c3674a582da1973d7786a8b99432a698a91 extends Twig_Template
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
        $__internal_e1a1d6ccd6da9a18973ceca5805bc183b6d6dfdd651eaed86d909d4b4a0a1410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a1d6ccd6da9a18973ceca5805bc183b6d6dfdd651eaed86d909d4b4a0a1410->enter($__internal_e1a1d6ccd6da9a18973ceca5805bc183b6d6dfdd651eaed86d909d4b4a0a1410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e1a1d6ccd6da9a18973ceca5805bc183b6d6dfdd651eaed86d909d4b4a0a1410->leave($__internal_e1a1d6ccd6da9a18973ceca5805bc183b6d6dfdd651eaed86d909d4b4a0a1410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/douae/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
