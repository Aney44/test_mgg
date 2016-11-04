<?php

/* AcmeBlogBundle:Page:editPage.html.twig */
class __TwigTemplate_74450e4bd824bb1543270003ddfbc293275e4a1f3e0964b4e03c2695ecab215f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AcmeBlog/layout.html.twig", "AcmeBlogBundle:Page:editPage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AcmeBlog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceefda33d9b5ac54d1b3031d60ba1cd934954dd8fd60e9954993f59273ed4dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceefda33d9b5ac54d1b3031d60ba1cd934954dd8fd60e9954993f59273ed4dfe->enter($__internal_ceefda33d9b5ac54d1b3031d60ba1cd934954dd8fd60e9954993f59273ed4dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBlogBundle:Page:editPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceefda33d9b5ac54d1b3031d60ba1cd934954dd8fd60e9954993f59273ed4dfe->leave($__internal_ceefda33d9b5ac54d1b3031d60ba1cd934954dd8fd60e9954993f59273ed4dfe_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e7037ed2e3704edecef7fa9826397f17f8d4487cbd8327cf9ceedfa35933efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7037ed2e3704edecef7fa9826397f17f8d4487cbd8327cf9ceedfa35933efe->enter($__internal_6e7037ed2e3704edecef7fa9826397f17f8d4487cbd8327cf9ceedfa35933efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AcmeBlogBundle:Page:editPage.html.twig"));

        // line 4
        echo "
    <h1 class=\"title\">Edit #";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "title", array()), "html", null, true);
        echo "</h1>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_post_page", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"submit\">

    </form>

    <p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_get_page", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()))), "html", null, true);
        echo "\">
            Go back
        </a>
    </p>
";
        
        $__internal_6e7037ed2e3704edecef7fa9826397f17f8d4487cbd8327cf9ceedfa35933efe->leave($__internal_6e7037ed2e3704edecef7fa9826397f17f8d4487cbd8327cf9ceedfa35933efe_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Page:editPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  57 => 9,  50 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@AcmeBlog/layout.html.twig\" %}

{% block content %}

    <h1 class=\"title\">Edit #{{ form.vars.data.id }} - {{ form.vars.data.title }}</h1>

    <form action=\"{{ url('api_post_page', {'id': form.vars.data.id}) }}\" method=\"POST\" {{ form_enctype(form) }}>

        {{ form_widget(form) }}
        <input type=\"submit\" value=\"submit\">

    </form>

    <p>
        <a href=\"{{ path('api_get_page', { 'id': form.vars.data.id }) }}\">
            Go back
        </a>
    </p>
{% endblock %}
", "AcmeBlogBundle:Page:editPage.html.twig", "/home/andrew/server/mgg/src/Acme/BlogBundle/Resources/views/Page/editPage.html.twig");
    }
}
