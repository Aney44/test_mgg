<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_59b85aaf7f0f695fd30a14e8a22339a19626bccbd7f6f78e1617e2ccfbb690a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_441624f2a39238c1c83ec4167a93f2837acec31fa44de3f664f1571dbd89509f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441624f2a39238c1c83ec4167a93f2837acec31fa44de3f664f1571dbd89509f->enter($__internal_441624f2a39238c1c83ec4167a93f2837acec31fa44de3f664f1571dbd89509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_441624f2a39238c1c83ec4167a93f2837acec31fa44de3f664f1571dbd89509f->leave($__internal_441624f2a39238c1c83ec4167a93f2837acec31fa44de3f664f1571dbd89509f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52c17ace046be6b2391586766aa4d3baabfc8e952a2c23245847824c8ccae3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c17ace046be6b2391586766aa4d3baabfc8e952a2c23245847824c8ccae3f1->enter($__internal_52c17ace046be6b2391586766aa4d3baabfc8e952a2c23245847824c8ccae3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_52c17ace046be6b2391586766aa4d3baabfc8e952a2c23245847824c8ccae3f1->leave($__internal_52c17ace046be6b2391586766aa4d3baabfc8e952a2c23245847824c8ccae3f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffc1b3df53fced3a5cc1ba3219e1b06ec4c1edc0f63efc7222b1d7a47865268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffc1b3df53fced3a5cc1ba3219e1b06ec4c1edc0f63efc7222b1d7a47865268->enter($__internal_8ffc1b3df53fced3a5cc1ba3219e1b06ec4c1edc0f63efc7222b1d7a47865268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8ffc1b3df53fced3a5cc1ba3219e1b06ec4c1edc0f63efc7222b1d7a47865268->leave($__internal_8ffc1b3df53fced3a5cc1ba3219e1b06ec4c1edc0f63efc7222b1d7a47865268_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
