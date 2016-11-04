<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_da9589b6deec817a47b2e7bdf809349fa59fa642ec7175ab1e7d1def587cdf2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed106c6b6236d2b7fa80331a395f9757e2825475fa28fbef485e9933d9e0a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed106c6b6236d2b7fa80331a395f9757e2825475fa28fbef485e9933d9e0a34->enter($__internal_9ed106c6b6236d2b7fa80331a395f9757e2825475fa28fbef485e9933d9e0a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed106c6b6236d2b7fa80331a395f9757e2825475fa28fbef485e9933d9e0a34->leave($__internal_9ed106c6b6236d2b7fa80331a395f9757e2825475fa28fbef485e9933d9e0a34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecc4e03ea9c5a54672803fd18b088a0ef3a8a3231b613819a1049c35161d91d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc4e03ea9c5a54672803fd18b088a0ef3a8a3231b613819a1049c35161d91d2->enter($__internal_ecc4e03ea9c5a54672803fd18b088a0ef3a8a3231b613819a1049c35161d91d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ecc4e03ea9c5a54672803fd18b088a0ef3a8a3231b613819a1049c35161d91d2->leave($__internal_ecc4e03ea9c5a54672803fd18b088a0ef3a8a3231b613819a1049c35161d91d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
