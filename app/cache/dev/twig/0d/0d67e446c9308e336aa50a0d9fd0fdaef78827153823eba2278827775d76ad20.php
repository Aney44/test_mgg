<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_d512aa3c92cdaab53764c53c9b7861af708bdf3cd8284d68a4aaaf4ebf1a0e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_94f3ad9fb8213f4bf214d42cbd8073e5e3d54d0e7a9add6b98df6ca24694ad4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f3ad9fb8213f4bf214d42cbd8073e5e3d54d0e7a9add6b98df6ca24694ad4a->enter($__internal_94f3ad9fb8213f4bf214d42cbd8073e5e3d54d0e7a9add6b98df6ca24694ad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f3ad9fb8213f4bf214d42cbd8073e5e3d54d0e7a9add6b98df6ca24694ad4a->leave($__internal_94f3ad9fb8213f4bf214d42cbd8073e5e3d54d0e7a9add6b98df6ca24694ad4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dd26248e78f803c213914daa03a2567befdcea6cb96575916ac25486d50654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd26248e78f803c213914daa03a2567befdcea6cb96575916ac25486d50654b->enter($__internal_2dd26248e78f803c213914daa03a2567befdcea6cb96575916ac25486d50654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2dd26248e78f803c213914daa03a2567befdcea6cb96575916ac25486d50654b->leave($__internal_2dd26248e78f803c213914daa03a2567befdcea6cb96575916ac25486d50654b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
