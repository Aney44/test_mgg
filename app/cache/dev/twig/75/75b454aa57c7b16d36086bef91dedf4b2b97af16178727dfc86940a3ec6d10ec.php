<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_85680158b4ef0e2c940a9fc4ea9592a72cd3144985357e4e2490c4084240a655 extends Twig_Template
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
        $__internal_a908749afa37aa8ba7e5926cb8efeda6a1e053e7aa796d31502c88b9f69207c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a908749afa37aa8ba7e5926cb8efeda6a1e053e7aa796d31502c88b9f69207c9->enter($__internal_a908749afa37aa8ba7e5926cb8efeda6a1e053e7aa796d31502c88b9f69207c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a908749afa37aa8ba7e5926cb8efeda6a1e053e7aa796d31502c88b9f69207c9->leave($__internal_a908749afa37aa8ba7e5926cb8efeda6a1e053e7aa796d31502c88b9f69207c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
