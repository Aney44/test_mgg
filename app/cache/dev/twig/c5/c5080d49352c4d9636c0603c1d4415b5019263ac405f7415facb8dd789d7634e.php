<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_69aa09e8cb11a13dbac2130f03e3bf5d06e97ff890b9082f2d1bf46490c69a5a extends Twig_Template
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
        $__internal_8b786e62793dd2ab661e3aa842aefbe2562f83bcb2db363c38653e8395d0b0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b786e62793dd2ab661e3aa842aefbe2562f83bcb2db363c38653e8395d0b0cd->enter($__internal_8b786e62793dd2ab661e3aa842aefbe2562f83bcb2db363c38653e8395d0b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8b786e62793dd2ab661e3aa842aefbe2562f83bcb2db363c38653e8395d0b0cd->leave($__internal_8b786e62793dd2ab661e3aa842aefbe2562f83bcb2db363c38653e8395d0b0cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
