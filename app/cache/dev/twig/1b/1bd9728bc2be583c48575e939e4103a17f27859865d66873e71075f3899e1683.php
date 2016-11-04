<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c3ea3803378d06b6708c634d0fc1961ffc12950b428d7be94a125bb4381953a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c6812154d3715c3f18df151efcf501d891d33b91a7dd3e9f71dbbaca2512d3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6812154d3715c3f18df151efcf501d891d33b91a7dd3e9f71dbbaca2512d3e1->enter($__internal_c6812154d3715c3f18df151efcf501d891d33b91a7dd3e9f71dbbaca2512d3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6812154d3715c3f18df151efcf501d891d33b91a7dd3e9f71dbbaca2512d3e1->leave($__internal_c6812154d3715c3f18df151efcf501d891d33b91a7dd3e9f71dbbaca2512d3e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1a4f1aee49a230c6f17acc34a6040508f165a5e9183dd303dbe283a691db2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a4f1aee49a230c6f17acc34a6040508f165a5e9183dd303dbe283a691db2af->enter($__internal_d1a4f1aee49a230c6f17acc34a6040508f165a5e9183dd303dbe283a691db2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d1a4f1aee49a230c6f17acc34a6040508f165a5e9183dd303dbe283a691db2af->leave($__internal_d1a4f1aee49a230c6f17acc34a6040508f165a5e9183dd303dbe283a691db2af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
