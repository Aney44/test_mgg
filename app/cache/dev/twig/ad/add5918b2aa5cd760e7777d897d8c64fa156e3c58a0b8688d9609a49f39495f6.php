<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_58eab79c40b4cc02527466e2fc0ed4a9a1058e81d4040dbf1053eff320261ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d8d1001b77beb3c5709957b1d6503eac8a243dcecf517cbe2a28a5786f40bbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d1001b77beb3c5709957b1d6503eac8a243dcecf517cbe2a28a5786f40bbe7->enter($__internal_d8d1001b77beb3c5709957b1d6503eac8a243dcecf517cbe2a28a5786f40bbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d1001b77beb3c5709957b1d6503eac8a243dcecf517cbe2a28a5786f40bbe7->leave($__internal_d8d1001b77beb3c5709957b1d6503eac8a243dcecf517cbe2a28a5786f40bbe7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35d7e080c6bb158f439306a3e1a8c2f5030b97e339b471237a549acfe01b3d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d7e080c6bb158f439306a3e1a8c2f5030b97e339b471237a549acfe01b3d7a->enter($__internal_35d7e080c6bb158f439306a3e1a8c2f5030b97e339b471237a549acfe01b3d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_35d7e080c6bb158f439306a3e1a8c2f5030b97e339b471237a549acfe01b3d7a->leave($__internal_35d7e080c6bb158f439306a3e1a8c2f5030b97e339b471237a549acfe01b3d7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
