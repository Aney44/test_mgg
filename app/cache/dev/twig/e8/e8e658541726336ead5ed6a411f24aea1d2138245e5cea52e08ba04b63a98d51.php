<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_379e9d3a0ba7581be040205238769ac85b1fc1417787a1be816fb4469580f4e1 extends Twig_Template
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
        $__internal_86258cf6b23fbb06570e69904b02b4abae47981e4257e7d97772aa8f6c31bd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86258cf6b23fbb06570e69904b02b4abae47981e4257e7d97772aa8f6c31bd5b->enter($__internal_86258cf6b23fbb06570e69904b02b4abae47981e4257e7d97772aa8f6c31bd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_86258cf6b23fbb06570e69904b02b4abae47981e4257e7d97772aa8f6c31bd5b->leave($__internal_86258cf6b23fbb06570e69904b02b4abae47981e4257e7d97772aa8f6c31bd5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
