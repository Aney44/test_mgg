<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_071d9b068381f6f68c3e45ee55c95e9d452b14c7f5266e62039aa00176511359 extends Twig_Template
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
        $__internal_b7c3c2efd296276f91ac9ac0ed8b972fcc53453e7bbd52dcc0eab3c290aebeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c3c2efd296276f91ac9ac0ed8b972fcc53453e7bbd52dcc0eab3c290aebeae->enter($__internal_b7c3c2efd296276f91ac9ac0ed8b972fcc53453e7bbd52dcc0eab3c290aebeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b7c3c2efd296276f91ac9ac0ed8b972fcc53453e7bbd52dcc0eab3c290aebeae->leave($__internal_b7c3c2efd296276f91ac9ac0ed8b972fcc53453e7bbd52dcc0eab3c290aebeae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
