<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7861d5ef8f68d967ada9e015482723e7c10217fe59a02006185d5e719b03f73b extends Twig_Template
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
        $__internal_9a37e1cb9c4426d98715a8ba56e05026f691e623a58e66a1007a8a4a7836f83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a37e1cb9c4426d98715a8ba56e05026f691e623a58e66a1007a8a4a7836f83c->enter($__internal_9a37e1cb9c4426d98715a8ba56e05026f691e623a58e66a1007a8a4a7836f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9a37e1cb9c4426d98715a8ba56e05026f691e623a58e66a1007a8a4a7836f83c->leave($__internal_9a37e1cb9c4426d98715a8ba56e05026f691e623a58e66a1007a8a4a7836f83c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
