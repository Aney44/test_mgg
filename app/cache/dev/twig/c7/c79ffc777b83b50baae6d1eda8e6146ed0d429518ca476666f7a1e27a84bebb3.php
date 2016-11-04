<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5e31fea12abee18bf7ab2cf3c34e81e4df636ab46f5bb0c2189f76bfa0135ea1 extends Twig_Template
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
        $__internal_f455b4f37c851a38df25baff2367643e5f72e52669d6c3d8b48d15f33f2eb3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f455b4f37c851a38df25baff2367643e5f72e52669d6c3d8b48d15f33f2eb3bc->enter($__internal_f455b4f37c851a38df25baff2367643e5f72e52669d6c3d8b48d15f33f2eb3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f455b4f37c851a38df25baff2367643e5f72e52669d6c3d8b48d15f33f2eb3bc->leave($__internal_f455b4f37c851a38df25baff2367643e5f72e52669d6c3d8b48d15f33f2eb3bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
