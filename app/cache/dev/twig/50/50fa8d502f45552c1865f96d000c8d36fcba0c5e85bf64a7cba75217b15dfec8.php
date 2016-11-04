<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5571e171421f12288c0ef66d80cc8e54a89b15d5790326f1eec40470f661fbe3 extends Twig_Template
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
        $__internal_772ced7c7b4d0e02cd2f8fa4574cc6bf33179e1a8d27751c33cd4c3317e6a921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772ced7c7b4d0e02cd2f8fa4574cc6bf33179e1a8d27751c33cd4c3317e6a921->enter($__internal_772ced7c7b4d0e02cd2f8fa4574cc6bf33179e1a8d27751c33cd4c3317e6a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_772ced7c7b4d0e02cd2f8fa4574cc6bf33179e1a8d27751c33cd4c3317e6a921->leave($__internal_772ced7c7b4d0e02cd2f8fa4574cc6bf33179e1a8d27751c33cd4c3317e6a921_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
