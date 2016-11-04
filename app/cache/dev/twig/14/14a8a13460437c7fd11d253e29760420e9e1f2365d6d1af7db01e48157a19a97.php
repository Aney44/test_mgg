<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8a4f38093e90cebfb1e5e32456e2e3134409b902274e2a9621805170f357b12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_606d6d8767fe5af345ebd38c379e974ec2d220adf719e09ced442c268b1198a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606d6d8767fe5af345ebd38c379e974ec2d220adf719e09ced442c268b1198a3->enter($__internal_606d6d8767fe5af345ebd38c379e974ec2d220adf719e09ced442c268b1198a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606d6d8767fe5af345ebd38c379e974ec2d220adf719e09ced442c268b1198a3->leave($__internal_606d6d8767fe5af345ebd38c379e974ec2d220adf719e09ced442c268b1198a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fccb927f5f753916d18ff49e0f4fd688e1ad51ff804bdd349013280e7d9d2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fccb927f5f753916d18ff49e0f4fd688e1ad51ff804bdd349013280e7d9d2e6->enter($__internal_7fccb927f5f753916d18ff49e0f4fd688e1ad51ff804bdd349013280e7d9d2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_7fccb927f5f753916d18ff49e0f4fd688e1ad51ff804bdd349013280e7d9d2e6->leave($__internal_7fccb927f5f753916d18ff49e0f4fd688e1ad51ff804bdd349013280e7d9d2e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e351d1d3635a6cb25488688d5ced1adf320ec535619b1f26c99644f7641f1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e351d1d3635a6cb25488688d5ced1adf320ec535619b1f26c99644f7641f1d1->enter($__internal_9e351d1d3635a6cb25488688d5ced1adf320ec535619b1f26c99644f7641f1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e351d1d3635a6cb25488688d5ced1adf320ec535619b1f26c99644f7641f1d1->leave($__internal_9e351d1d3635a6cb25488688d5ced1adf320ec535619b1f26c99644f7641f1d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a81eb7977105eb03acdd8bea9c98795660d91fc4038afdb662191f2dfda722c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81eb7977105eb03acdd8bea9c98795660d91fc4038afdb662191f2dfda722c2->enter($__internal_a81eb7977105eb03acdd8bea9c98795660d91fc4038afdb662191f2dfda722c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a81eb7977105eb03acdd8bea9c98795660d91fc4038afdb662191f2dfda722c2->leave($__internal_a81eb7977105eb03acdd8bea9c98795660d91fc4038afdb662191f2dfda722c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
