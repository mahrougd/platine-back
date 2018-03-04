<?php

/* ::base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63dd9e77ab9391937723f200bed7dc090c4fdd73f52920b97f26e0c46087a092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dd9e77ab9391937723f200bed7dc090c4fdd73f52920b97f26e0c46087a092->enter($__internal_63dd9e77ab9391937723f200bed7dc090c4fdd73f52920b97f26e0c46087a092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_63dd9e77ab9391937723f200bed7dc090c4fdd73f52920b97f26e0c46087a092->leave($__internal_63dd9e77ab9391937723f200bed7dc090c4fdd73f52920b97f26e0c46087a092_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0909ca17c72029cc0f15438dea0e9a6478aff5ebd52efdbdce9231459821e273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0909ca17c72029cc0f15438dea0e9a6478aff5ebd52efdbdce9231459821e273->enter($__internal_0909ca17c72029cc0f15438dea0e9a6478aff5ebd52efdbdce9231459821e273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0909ca17c72029cc0f15438dea0e9a6478aff5ebd52efdbdce9231459821e273->leave($__internal_0909ca17c72029cc0f15438dea0e9a6478aff5ebd52efdbdce9231459821e273_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54fed23bbd571873bfd7654fec216d4decdfdcc8ef7d737fabf53803923b6dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fed23bbd571873bfd7654fec216d4decdfdcc8ef7d737fabf53803923b6dca->enter($__internal_54fed23bbd571873bfd7654fec216d4decdfdcc8ef7d737fabf53803923b6dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54fed23bbd571873bfd7654fec216d4decdfdcc8ef7d737fabf53803923b6dca->leave($__internal_54fed23bbd571873bfd7654fec216d4decdfdcc8ef7d737fabf53803923b6dca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb28f6435302e45a74fea5e8aed243d16460f767bc17b1fe9f38476da5d1317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb28f6435302e45a74fea5e8aed243d16460f767bc17b1fe9f38476da5d1317->enter($__internal_fbb28f6435302e45a74fea5e8aed243d16460f767bc17b1fe9f38476da5d1317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fbb28f6435302e45a74fea5e8aed243d16460f767bc17b1fe9f38476da5d1317->leave($__internal_fbb28f6435302e45a74fea5e8aed243d16460f767bc17b1fe9f38476da5d1317_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42414ae6ea6fdb1f77b87eec8f2ab8771729218cde53e91ad6e68006d51caa44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42414ae6ea6fdb1f77b87eec8f2ab8771729218cde53e91ad6e68006d51caa44->enter($__internal_42414ae6ea6fdb1f77b87eec8f2ab8771729218cde53e91ad6e68006d51caa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42414ae6ea6fdb1f77b87eec8f2ab8771729218cde53e91ad6e68006d51caa44->leave($__internal_42414ae6ea6fdb1f77b87eec8f2ab8771729218cde53e91ad6e68006d51caa44_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/douae/platine-back/app/Resources/views/base.html.twig");
    }
}
