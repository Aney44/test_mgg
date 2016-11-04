<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fa020e65eee68e98a3c19fd8d4b5ce5f1f8eaa4c8d198b167105dd7d57a59d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_36f06e7826d1003dc4dea2fde5e3cb9024b015cfd22a4d9419eed4d36c8daa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f06e7826d1003dc4dea2fde5e3cb9024b015cfd22a4d9419eed4d36c8daa89->enter($__internal_36f06e7826d1003dc4dea2fde5e3cb9024b015cfd22a4d9419eed4d36c8daa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f06e7826d1003dc4dea2fde5e3cb9024b015cfd22a4d9419eed4d36c8daa89->leave($__internal_36f06e7826d1003dc4dea2fde5e3cb9024b015cfd22a4d9419eed4d36c8daa89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6525dbf8e31782e21a145b2b18f7d40da810ad47e4d9dff0a06e4accaee2898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6525dbf8e31782e21a145b2b18f7d40da810ad47e4d9dff0a06e4accaee2898->enter($__internal_d6525dbf8e31782e21a145b2b18f7d40da810ad47e4d9dff0a06e4accaee2898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d6525dbf8e31782e21a145b2b18f7d40da810ad47e4d9dff0a06e4accaee2898->leave($__internal_d6525dbf8e31782e21a145b2b18f7d40da810ad47e4d9dff0a06e4accaee2898_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
