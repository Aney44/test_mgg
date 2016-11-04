<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6e14578532a76ca3f67604dfbc3558283796818bd45914343e4e733c1517cf2a extends Twig_Template
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
        $__internal_23929a29dca2caabf89a1f026602ed791b113058cb6aa9555927390dc1ef8908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23929a29dca2caabf89a1f026602ed791b113058cb6aa9555927390dc1ef8908->enter($__internal_23929a29dca2caabf89a1f026602ed791b113058cb6aa9555927390dc1ef8908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_23929a29dca2caabf89a1f026602ed791b113058cb6aa9555927390dc1ef8908->leave($__internal_23929a29dca2caabf89a1f026602ed791b113058cb6aa9555927390dc1ef8908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
