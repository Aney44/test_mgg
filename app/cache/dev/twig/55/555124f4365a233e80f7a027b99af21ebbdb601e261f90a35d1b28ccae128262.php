<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_a5c769b9a4ae7d4aa6d01ff0f2c432aa513a3b39ea5811ae9b40ce53ca9258d0 extends Twig_Template
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
        $__internal_3df32110084f711ce09180efac42a9e955d0d5db03f02e40ae8143285de8f2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df32110084f711ce09180efac42a9e955d0d5db03f02e40ae8143285de8f2b0->enter($__internal_3df32110084f711ce09180efac42a9e955d0d5db03f02e40ae8143285de8f2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_3df32110084f711ce09180efac42a9e955d0d5db03f02e40ae8143285de8f2b0->leave($__internal_3df32110084f711ce09180efac42a9e955d0d5db03f02e40ae8143285de8f2b0_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
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
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "/home/andrew/server/mgg/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
