<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f34e48bdb633e1adb931a5aecb4bfe33f435907de659c327af49c27fe060336c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1103db4868a07c53ae34f37e190b8470d1dc4d4c5d30771b18c5f5bfe8b585ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1103db4868a07c53ae34f37e190b8470d1dc4d4c5d30771b18c5f5bfe8b585ea->enter($__internal_1103db4868a07c53ae34f37e190b8470d1dc4d4c5d30771b18c5f5bfe8b585ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1103db4868a07c53ae34f37e190b8470d1dc4d4c5d30771b18c5f5bfe8b585ea->leave($__internal_1103db4868a07c53ae34f37e190b8470d1dc4d4c5d30771b18c5f5bfe8b585ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b002becc583134db63efc903affdbbda680cd43503454e4b3835992cc870c865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b002becc583134db63efc903affdbbda680cd43503454e4b3835992cc870c865->enter($__internal_b002becc583134db63efc903affdbbda680cd43503454e4b3835992cc870c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b002becc583134db63efc903affdbbda680cd43503454e4b3835992cc870c865->leave($__internal_b002becc583134db63efc903affdbbda680cd43503454e4b3835992cc870c865_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
