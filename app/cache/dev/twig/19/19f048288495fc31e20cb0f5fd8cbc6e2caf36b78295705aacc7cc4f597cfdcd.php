<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_eaa5e740fc3fe63cc6a627bdc43c65baac22152c3ceb083709a2efcdaeca60cd extends Twig_Template
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
        $__internal_d1c92ef95a69f3028afbe1010c77f5cec5c7b831bce8a13f2bcfe6123a62c66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c92ef95a69f3028afbe1010c77f5cec5c7b831bce8a13f2bcfe6123a62c66d->enter($__internal_d1c92ef95a69f3028afbe1010c77f5cec5c7b831bce8a13f2bcfe6123a62c66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d1c92ef95a69f3028afbe1010c77f5cec5c7b831bce8a13f2bcfe6123a62c66d->leave($__internal_d1c92ef95a69f3028afbe1010c77f5cec5c7b831bce8a13f2bcfe6123a62c66d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}