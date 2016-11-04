<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6f4325e9d28774774f71adac653dfc8ff7b320e714de1108ed9a317dabb113fb extends Twig_Template
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
        $__internal_74f5e35a3d375ce9a78d1576513623052edb93daeb238e978345d9b9b68a433f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f5e35a3d375ce9a78d1576513623052edb93daeb238e978345d9b9b68a433f->enter($__internal_74f5e35a3d375ce9a78d1576513623052edb93daeb238e978345d9b9b68a433f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_74f5e35a3d375ce9a78d1576513623052edb93daeb238e978345d9b9b68a433f->leave($__internal_74f5e35a3d375ce9a78d1576513623052edb93daeb238e978345d9b9b68a433f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
