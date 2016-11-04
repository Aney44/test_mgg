<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_99896a2f961ed62821de21d297fa59bb9909feda0a18b707d1fdd08f1a4cb28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_326217ae3459a894aa129f64ad733d41c4b83e226514db2f63a9695179cf12ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326217ae3459a894aa129f64ad733d41c4b83e226514db2f63a9695179cf12ec->enter($__internal_326217ae3459a894aa129f64ad733d41c4b83e226514db2f63a9695179cf12ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326217ae3459a894aa129f64ad733d41c4b83e226514db2f63a9695179cf12ec->leave($__internal_326217ae3459a894aa129f64ad733d41c4b83e226514db2f63a9695179cf12ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da05380e87b9071fa32c775615a3046427641ad60bd848feed60a8a4d45b80e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da05380e87b9071fa32c775615a3046427641ad60bd848feed60a8a4d45b80e3->enter($__internal_da05380e87b9071fa32c775615a3046427641ad60bd848feed60a8a4d45b80e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_da05380e87b9071fa32c775615a3046427641ad60bd848feed60a8a4d45b80e3->leave($__internal_da05380e87b9071fa32c775615a3046427641ad60bd848feed60a8a4d45b80e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
