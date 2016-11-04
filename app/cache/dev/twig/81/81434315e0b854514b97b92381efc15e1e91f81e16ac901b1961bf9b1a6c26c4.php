<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ce297b221397abc0befa8a2a604182cc20ad4f612d16580607255b69829e4b45 extends Twig_Template
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
        $__internal_8c1c4e58d23525ef3d95380a3e2f4ce0daac44f8668f31d319ed7f18ed74d1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1c4e58d23525ef3d95380a3e2f4ce0daac44f8668f31d319ed7f18ed74d1d3->enter($__internal_8c1c4e58d23525ef3d95380a3e2f4ce0daac44f8668f31d319ed7f18ed74d1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8c1c4e58d23525ef3d95380a3e2f4ce0daac44f8668f31d319ed7f18ed74d1d3->leave($__internal_8c1c4e58d23525ef3d95380a3e2f4ce0daac44f8668f31d319ed7f18ed74d1d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
