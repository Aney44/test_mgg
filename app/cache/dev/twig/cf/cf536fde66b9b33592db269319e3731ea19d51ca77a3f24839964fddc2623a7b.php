<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ba057191f11e13d4812722799a9db0436eb7a10ce84a844d4a1c9035b354aac5 extends Twig_Template
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
        $__internal_b4cdf36380d1b913cdc8b702de15689e2d0c58bc70f24793906724929e764841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cdf36380d1b913cdc8b702de15689e2d0c58bc70f24793906724929e764841->enter($__internal_b4cdf36380d1b913cdc8b702de15689e2d0c58bc70f24793906724929e764841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b4cdf36380d1b913cdc8b702de15689e2d0c58bc70f24793906724929e764841->leave($__internal_b4cdf36380d1b913cdc8b702de15689e2d0c58bc70f24793906724929e764841_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
