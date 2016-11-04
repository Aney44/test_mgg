<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_98ee888128ad04eb16a51e7ebfcfebd528f3aa7c5629f890320fb19b169e2bae extends Twig_Template
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
        $__internal_e6f239f3240251e98fef85adae7341cfaea5987daabe3dd8bb9010a839651287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f239f3240251e98fef85adae7341cfaea5987daabe3dd8bb9010a839651287->enter($__internal_e6f239f3240251e98fef85adae7341cfaea5987daabe3dd8bb9010a839651287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e6f239f3240251e98fef85adae7341cfaea5987daabe3dd8bb9010a839651287->leave($__internal_e6f239f3240251e98fef85adae7341cfaea5987daabe3dd8bb9010a839651287_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
