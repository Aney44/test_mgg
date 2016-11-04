<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_035a978167b7e25b7af547bfac8b70525ec6dfc736b5bf46c3bc39bae3e5d4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_73039b7f329e1468ffdad53ec20375db1b601940543479d29b5049aa0fc80243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73039b7f329e1468ffdad53ec20375db1b601940543479d29b5049aa0fc80243->enter($__internal_73039b7f329e1468ffdad53ec20375db1b601940543479d29b5049aa0fc80243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73039b7f329e1468ffdad53ec20375db1b601940543479d29b5049aa0fc80243->leave($__internal_73039b7f329e1468ffdad53ec20375db1b601940543479d29b5049aa0fc80243_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6f5bbd44fbc7abe5ce9af1ab70f770a4d28b3259cee30dd238f20972733a3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f5bbd44fbc7abe5ce9af1ab70f770a4d28b3259cee30dd238f20972733a3fe->enter($__internal_c6f5bbd44fbc7abe5ce9af1ab70f770a4d28b3259cee30dd238f20972733a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c6f5bbd44fbc7abe5ce9af1ab70f770a4d28b3259cee30dd238f20972733a3fe->leave($__internal_c6f5bbd44fbc7abe5ce9af1ab70f770a4d28b3259cee30dd238f20972733a3fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
