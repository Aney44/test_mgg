<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e48a7e9f39d3cfb2da70e5e9289351dc5a46f734df05bb7b96254c496aa9675e extends Twig_Template
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
        $__internal_9f16396a37ece6df47fa65df931d4a3bc32c91cea5d3ae6c040653e0c8f5680a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f16396a37ece6df47fa65df931d4a3bc32c91cea5d3ae6c040653e0c8f5680a->enter($__internal_9f16396a37ece6df47fa65df931d4a3bc32c91cea5d3ae6c040653e0c8f5680a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9f16396a37ece6df47fa65df931d4a3bc32c91cea5d3ae6c040653e0c8f5680a->leave($__internal_9f16396a37ece6df47fa65df931d4a3bc32c91cea5d3ae6c040653e0c8f5680a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
