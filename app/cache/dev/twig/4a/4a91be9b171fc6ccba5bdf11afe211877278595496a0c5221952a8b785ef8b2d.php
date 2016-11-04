<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b3139a90bdf82782b11244605c4a621d8d0ac7b304e85bc586069f59bbc8ab1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a9eebd591a633297e65c20d461964f2c031638de3c2a758bddf0299c917b9fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9eebd591a633297e65c20d461964f2c031638de3c2a758bddf0299c917b9fee->enter($__internal_a9eebd591a633297e65c20d461964f2c031638de3c2a758bddf0299c917b9fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9eebd591a633297e65c20d461964f2c031638de3c2a758bddf0299c917b9fee->leave($__internal_a9eebd591a633297e65c20d461964f2c031638de3c2a758bddf0299c917b9fee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73c948c3341a185d7eae95c358c513ca445543ed8abc1d8b9211316ed33e8717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c948c3341a185d7eae95c358c513ca445543ed8abc1d8b9211316ed33e8717->enter($__internal_73c948c3341a185d7eae95c358c513ca445543ed8abc1d8b9211316ed33e8717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_73c948c3341a185d7eae95c358c513ca445543ed8abc1d8b9211316ed33e8717->leave($__internal_73c948c3341a185d7eae95c358c513ca445543ed8abc1d8b9211316ed33e8717_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
