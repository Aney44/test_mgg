<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7a1264c1225893cf034a78e193a2c3e2c7608af5bffd7941edd2f30e4209bea0 extends Twig_Template
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
        $__internal_1ef4b56ba0f9c4aeb2936028013633e665b9e7cf41ce697dfc03389355008bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef4b56ba0f9c4aeb2936028013633e665b9e7cf41ce697dfc03389355008bdf->enter($__internal_1ef4b56ba0f9c4aeb2936028013633e665b9e7cf41ce697dfc03389355008bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1ef4b56ba0f9c4aeb2936028013633e665b9e7cf41ce697dfc03389355008bdf->leave($__internal_1ef4b56ba0f9c4aeb2936028013633e665b9e7cf41ce697dfc03389355008bdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
