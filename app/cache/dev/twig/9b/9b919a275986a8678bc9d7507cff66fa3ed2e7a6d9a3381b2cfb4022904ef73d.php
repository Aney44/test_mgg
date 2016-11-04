<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c4170fb9f48fa1794840fdb6cabc566c330cd1e3cfe609c4153e0571dabfdce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d2d960308179fae3b3174c1a8edc8cf5ba676dbd1a84563454b1122ef9ddf272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d960308179fae3b3174c1a8edc8cf5ba676dbd1a84563454b1122ef9ddf272->enter($__internal_d2d960308179fae3b3174c1a8edc8cf5ba676dbd1a84563454b1122ef9ddf272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2d960308179fae3b3174c1a8edc8cf5ba676dbd1a84563454b1122ef9ddf272->leave($__internal_d2d960308179fae3b3174c1a8edc8cf5ba676dbd1a84563454b1122ef9ddf272_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_392043ccce41e09892e1b43a980d6cb63e4b3cc42a83fbea40a30c98a68ce4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392043ccce41e09892e1b43a980d6cb63e4b3cc42a83fbea40a30c98a68ce4c9->enter($__internal_392043ccce41e09892e1b43a980d6cb63e4b3cc42a83fbea40a30c98a68ce4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_392043ccce41e09892e1b43a980d6cb63e4b3cc42a83fbea40a30c98a68ce4c9->leave($__internal_392043ccce41e09892e1b43a980d6cb63e4b3cc42a83fbea40a30c98a68ce4c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
