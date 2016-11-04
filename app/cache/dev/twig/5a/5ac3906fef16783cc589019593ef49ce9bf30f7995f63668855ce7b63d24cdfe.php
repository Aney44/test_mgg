<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_04bcf85c05d6e0d4da42afd7788b0b8b75ad2966a80b8fed6fd54f89ffe7fd4f extends Twig_Template
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
        $__internal_10322611aa23afb7ff39de851383f166552ce0e85be408f201b5e2231c37c095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10322611aa23afb7ff39de851383f166552ce0e85be408f201b5e2231c37c095->enter($__internal_10322611aa23afb7ff39de851383f166552ce0e85be408f201b5e2231c37c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_10322611aa23afb7ff39de851383f166552ce0e85be408f201b5e2231c37c095->leave($__internal_10322611aa23afb7ff39de851383f166552ce0e85be408f201b5e2231c37c095_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
