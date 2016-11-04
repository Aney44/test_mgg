<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_616f2cc3e882125c95a08463622e5df624626e1713ec2cd90d78522b3488095d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c94b36defa8ab87f8dd5e6e9362022ecbe230fec2b320906c519c1273e5e31a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94b36defa8ab87f8dd5e6e9362022ecbe230fec2b320906c519c1273e5e31a4->enter($__internal_c94b36defa8ab87f8dd5e6e9362022ecbe230fec2b320906c519c1273e5e31a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c94b36defa8ab87f8dd5e6e9362022ecbe230fec2b320906c519c1273e5e31a4->leave($__internal_c94b36defa8ab87f8dd5e6e9362022ecbe230fec2b320906c519c1273e5e31a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b03d24e24c03d5e114c7c239eafb2ce4dcf6d55866264f585618f0a2bce4fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b03d24e24c03d5e114c7c239eafb2ce4dcf6d55866264f585618f0a2bce4fef->enter($__internal_9b03d24e24c03d5e114c7c239eafb2ce4dcf6d55866264f585618f0a2bce4fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9b03d24e24c03d5e114c7c239eafb2ce4dcf6d55866264f585618f0a2bce4fef->leave($__internal_9b03d24e24c03d5e114c7c239eafb2ce4dcf6d55866264f585618f0a2bce4fef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bec764b4585ebb2e31f78bd5c59786f7f4ab7e632d5c9cd430117b145428f309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec764b4585ebb2e31f78bd5c59786f7f4ab7e632d5c9cd430117b145428f309->enter($__internal_bec764b4585ebb2e31f78bd5c59786f7f4ab7e632d5c9cd430117b145428f309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        echo "Web Configurator Bundle";
        
        $__internal_bec764b4585ebb2e31f78bd5c59786f7f4ab7e632d5c9cd430117b145428f309->leave($__internal_bec764b4585ebb2e31f78bd5c59786f7f4ab7e632d5c9cd430117b145428f309_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_641780b3a076a4608eaaa2210085eb7b322464427c27b58f69841313427c1c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641780b3a076a4608eaaa2210085eb7b322464427c27b58f69841313427c1c49->enter($__internal_641780b3a076a4608eaaa2210085eb7b322464427c27b58f69841313427c1c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_641780b3a076a4608eaaa2210085eb7b322464427c27b58f69841313427c1c49->leave($__internal_641780b3a076a4608eaaa2210085eb7b322464427c27b58f69841313427c1c49_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d38691ddd48db6f2c1e37e0083333bde136f6e070077af1f686b95e9b702b2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38691ddd48db6f2c1e37e0083333bde136f6e070077af1f686b95e9b702b2dc->enter($__internal_d38691ddd48db6f2c1e37e0083333bde136f6e070077af1f686b95e9b702b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        
        $__internal_d38691ddd48db6f2c1e37e0083333bde136f6e070077af1f686b95e9b702b2dc->leave($__internal_d38691ddd48db6f2c1e37e0083333bde136f6e070077af1f686b95e9b702b2dc_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/andrew/server/mgg/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
