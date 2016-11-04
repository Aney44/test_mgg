<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_dd5ebf4efcf715b9f4766ced972bf6cd19d53ed9e9697a99977a4b6fc5886841 extends Twig_Template
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
        $__internal_d83cf767ac2bd2a9c539b9c72fe0fc00d3af7defbabf0879070f4d190ef96c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83cf767ac2bd2a9c539b9c72fe0fc00d3af7defbabf0879070f4d190ef96c5b->enter($__internal_d83cf767ac2bd2a9c539b9c72fe0fc00d3af7defbabf0879070f4d190ef96c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d83cf767ac2bd2a9c539b9c72fe0fc00d3af7defbabf0879070f4d190ef96c5b->leave($__internal_d83cf767ac2bd2a9c539b9c72fe0fc00d3af7defbabf0879070f4d190ef96c5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
