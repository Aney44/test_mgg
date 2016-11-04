<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_97a4f43e9327b70f154d1077f997b23e6e2d622e5dc3ad5c80fbb90762807a60 extends Twig_Template
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
        $__internal_61dd1f5f4254f30c1629742e27823ce3f36a0a339c64f24c624953d14053bcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dd1f5f4254f30c1629742e27823ce3f36a0a339c64f24c624953d14053bcd1->enter($__internal_61dd1f5f4254f30c1629742e27823ce3f36a0a339c64f24c624953d14053bcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61dd1f5f4254f30c1629742e27823ce3f36a0a339c64f24c624953d14053bcd1->leave($__internal_61dd1f5f4254f30c1629742e27823ce3f36a0a339c64f24c624953d14053bcd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02de03f9d80c202559a7c240f4aa7b0256d585eab0bae90ee5c4923da67f0991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02de03f9d80c202559a7c240f4aa7b0256d585eab0bae90ee5c4923da67f0991->enter($__internal_02de03f9d80c202559a7c240f4aa7b0256d585eab0bae90ee5c4923da67f0991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_02de03f9d80c202559a7c240f4aa7b0256d585eab0bae90ee5c4923da67f0991->leave($__internal_02de03f9d80c202559a7c240f4aa7b0256d585eab0bae90ee5c4923da67f0991_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7d370cc4074aa81b95d6b6a37bbee0bfe44d4121abda9fe0d70c2b3a230228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7d370cc4074aa81b95d6b6a37bbee0bfe44d4121abda9fe0d70c2b3a230228->enter($__internal_2a7d370cc4074aa81b95d6b6a37bbee0bfe44d4121abda9fe0d70c2b3a230228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a7d370cc4074aa81b95d6b6a37bbee0bfe44d4121abda9fe0d70c2b3a230228->leave($__internal_2a7d370cc4074aa81b95d6b6a37bbee0bfe44d4121abda9fe0d70c2b3a230228_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a5abc9851060623ad14d8d5ca2432f2d14b471e029b174acc8aa8559858aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a5abc9851060623ad14d8d5ca2432f2d14b471e029b174acc8aa8559858aec->enter($__internal_a2a5abc9851060623ad14d8d5ca2432f2d14b471e029b174acc8aa8559858aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a2a5abc9851060623ad14d8d5ca2432f2d14b471e029b174acc8aa8559858aec->leave($__internal_a2a5abc9851060623ad14d8d5ca2432f2d14b471e029b174acc8aa8559858aec_prof);

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
