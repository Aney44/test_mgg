<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4225c073fcbc832a6a9d4d61c00ca709c17c29f9bc6329576f5d8d55a7602d15 extends Twig_Template
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
        $__internal_2ff325b2440eb32591d3bc12927214abc286c6851927f56b3ca94216c698d436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff325b2440eb32591d3bc12927214abc286c6851927f56b3ca94216c698d436->enter($__internal_2ff325b2440eb32591d3bc12927214abc286c6851927f56b3ca94216c698d436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2ff325b2440eb32591d3bc12927214abc286c6851927f56b3ca94216c698d436->leave($__internal_2ff325b2440eb32591d3bc12927214abc286c6851927f56b3ca94216c698d436_prof);

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
", "@Framework/Form/hidden_row.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
