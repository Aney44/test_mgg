<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_709fba18de64f840c6705338a9df2bda9d1cd0bd4475476e9ea632c70a44063f extends Twig_Template
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
        $__internal_6e4ffffe958c50a90fac72e35426f0c48c79ca13ea3b57c26a94e3f18d66ecc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4ffffe958c50a90fac72e35426f0c48c79ca13ea3b57c26a94e3f18d66ecc4->enter($__internal_6e4ffffe958c50a90fac72e35426f0c48c79ca13ea3b57c26a94e3f18d66ecc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6e4ffffe958c50a90fac72e35426f0c48c79ca13ea3b57c26a94e3f18d66ecc4->leave($__internal_6e4ffffe958c50a90fac72e35426f0c48c79ca13ea3b57c26a94e3f18d66ecc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
