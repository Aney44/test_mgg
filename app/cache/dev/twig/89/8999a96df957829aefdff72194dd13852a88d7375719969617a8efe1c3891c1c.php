<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0962751dbce9bda17246467fdcca7b6837a79e64791bf18bdd4d103cbfd2624a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abde01457863694728988c08275dffab71cc159406b1ac1864aea76b1d4ad8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde01457863694728988c08275dffab71cc159406b1ac1864aea76b1d4ad8c9->enter($__internal_abde01457863694728988c08275dffab71cc159406b1ac1864aea76b1d4ad8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_abde01457863694728988c08275dffab71cc159406b1ac1864aea76b1d4ad8c9->leave($__internal_abde01457863694728988c08275dffab71cc159406b1ac1864aea76b1d4ad8c9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e1e65f9f5a47aece3b1a3b97930cf62a1913e4135fe48826a0121dfc6689e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1e65f9f5a47aece3b1a3b97930cf62a1913e4135fe48826a0121dfc6689e16->enter($__internal_1e1e65f9f5a47aece3b1a3b97930cf62a1913e4135fe48826a0121dfc6689e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_1e1e65f9f5a47aece3b1a3b97930cf62a1913e4135fe48826a0121dfc6689e16->leave($__internal_1e1e65f9f5a47aece3b1a3b97930cf62a1913e4135fe48826a0121dfc6689e16_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
