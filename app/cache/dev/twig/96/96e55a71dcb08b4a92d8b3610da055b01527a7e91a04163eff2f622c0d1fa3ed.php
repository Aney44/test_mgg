<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_568e6ebc14cce3b862f38346b05703478366b668f206a14dc660702ae2a3026a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_8fded6fd063458ec539301f7e627d0c26d359cdf9902ed2b683ad98ae5edf584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fded6fd063458ec539301f7e627d0c26d359cdf9902ed2b683ad98ae5edf584->enter($__internal_8fded6fd063458ec539301f7e627d0c26d359cdf9902ed2b683ad98ae5edf584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fded6fd063458ec539301f7e627d0c26d359cdf9902ed2b683ad98ae5edf584->leave($__internal_8fded6fd063458ec539301f7e627d0c26d359cdf9902ed2b683ad98ae5edf584_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a72bcee4d0ac246cc0c8b78631f31f53e546403e847f5a028e50af1ee1243813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72bcee4d0ac246cc0c8b78631f31f53e546403e847f5a028e50af1ee1243813->enter($__internal_a72bcee4d0ac246cc0c8b78631f31f53e546403e847f5a028e50af1ee1243813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:checkEmail.html.twig"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a72bcee4d0ac246cc0c8b78631f31f53e546403e847f5a028e50af1ee1243813->leave($__internal_a72bcee4d0ac246cc0c8b78631f31f53e546403e847f5a028e50af1ee1243813_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
