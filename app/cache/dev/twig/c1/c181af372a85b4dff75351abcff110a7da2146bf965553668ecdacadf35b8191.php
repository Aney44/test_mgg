<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_aa0b52ceb25fa155ad85c43e91f84d39f460ac62d4809844b278aa81f2296ebf extends Twig_Template
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
        $__internal_bce1cad8108e829c9d6c7f4fa67a6459aa994dba1f194aedd733007430dc2c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce1cad8108e829c9d6c7f4fa67a6459aa994dba1f194aedd733007430dc2c62->enter($__internal_bce1cad8108e829c9d6c7f4fa67a6459aa994dba1f194aedd733007430dc2c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_bce1cad8108e829c9d6c7f4fa67a6459aa994dba1f194aedd733007430dc2c62->leave($__internal_bce1cad8108e829c9d6c7f4fa67a6459aa994dba1f194aedd733007430dc2c62_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
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
", "NelmioApiDocBundle:Components:motd.html.twig", "/home/andrew/server/mgg/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}