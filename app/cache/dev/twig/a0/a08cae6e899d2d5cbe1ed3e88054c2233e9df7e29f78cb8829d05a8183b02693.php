<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_de27e9a72fd657e726c9445d9df96efae395a0b76a56806fa35ea837b5594555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1f186133b9cb980e5a7d517a23d8bd7add1692e29cead3404379e977ff1647fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f186133b9cb980e5a7d517a23d8bd7add1692e29cead3404379e977ff1647fc->enter($__internal_1f186133b9cb980e5a7d517a23d8bd7add1692e29cead3404379e977ff1647fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f186133b9cb980e5a7d517a23d8bd7add1692e29cead3404379e977ff1647fc->leave($__internal_1f186133b9cb980e5a7d517a23d8bd7add1692e29cead3404379e977ff1647fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69e9e1c5385410a932290b1e503c4698d3b71ae37698011d59f4b45ed2d451db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e9e1c5385410a932290b1e503c4698d3b71ae37698011d59f4b45ed2d451db->enter($__internal_69e9e1c5385410a932290b1e503c4698d3b71ae37698011d59f4b45ed2d451db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_69e9e1c5385410a932290b1e503c4698d3b71ae37698011d59f4b45ed2d451db->leave($__internal_69e9e1c5385410a932290b1e503c4698d3b71ae37698011d59f4b45ed2d451db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
