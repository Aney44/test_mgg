<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_be73217dd8525047a328493d7fcde28b2561f9e460774afd9e06f7fdb6b30579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1313bb8e2b0d62a801130c132714d2cc8f3294f8a8bf68cfab83382b3467efac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1313bb8e2b0d62a801130c132714d2cc8f3294f8a8bf68cfab83382b3467efac->enter($__internal_1313bb8e2b0d62a801130c132714d2cc8f3294f8a8bf68cfab83382b3467efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1313bb8e2b0d62a801130c132714d2cc8f3294f8a8bf68cfab83382b3467efac->leave($__internal_1313bb8e2b0d62a801130c132714d2cc8f3294f8a8bf68cfab83382b3467efac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_031f54a7bd39fc759e967e74d977569fef27502a2ae0ab15ad6f5353af36023d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031f54a7bd39fc759e967e74d977569fef27502a2ae0ab15ad6f5353af36023d->enter($__internal_031f54a7bd39fc759e967e74d977569fef27502a2ae0ab15ad6f5353af36023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_031f54a7bd39fc759e967e74d977569fef27502a2ae0ab15ad6f5353af36023d->leave($__internal_031f54a7bd39fc759e967e74d977569fef27502a2ae0ab15ad6f5353af36023d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a71925eabaf1823264183a3f205490d40437fca7683db46face87f3555d41ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71925eabaf1823264183a3f205490d40437fca7683db46face87f3555d41ab6->enter($__internal_a71925eabaf1823264183a3f205490d40437fca7683db46face87f3555d41ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a71925eabaf1823264183a3f205490d40437fca7683db46face87f3555d41ab6->leave($__internal_a71925eabaf1823264183a3f205490d40437fca7683db46face87f3555d41ab6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b05185d16caef874451a66e55411d9eca89789257c401b0ef6f7ecf0a67c990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b05185d16caef874451a66e55411d9eca89789257c401b0ef6f7ecf0a67c990->enter($__internal_3b05185d16caef874451a66e55411d9eca89789257c401b0ef6f7ecf0a67c990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3b05185d16caef874451a66e55411d9eca89789257c401b0ef6f7ecf0a67c990->leave($__internal_3b05185d16caef874451a66e55411d9eca89789257c401b0ef6f7ecf0a67c990_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
