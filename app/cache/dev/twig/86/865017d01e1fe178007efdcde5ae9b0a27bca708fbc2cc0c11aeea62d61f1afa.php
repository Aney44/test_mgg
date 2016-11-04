<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_27dfac8bb0b3d9b6a26f54292604aadcda12c2f71a690e474ca6f722fdb84e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f90efa5b2b5a19a708e2dfe9e4faab8a3b150a26584167c4447cd904c3292c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90efa5b2b5a19a708e2dfe9e4faab8a3b150a26584167c4447cd904c3292c05->enter($__internal_f90efa5b2b5a19a708e2dfe9e4faab8a3b150a26584167c4447cd904c3292c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f90efa5b2b5a19a708e2dfe9e4faab8a3b150a26584167c4447cd904c3292c05->leave($__internal_f90efa5b2b5a19a708e2dfe9e4faab8a3b150a26584167c4447cd904c3292c05_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3319cd93ac3395bf0d4b1c7a9715cf2e3d5b213ff464bbbbc91c54573bfb3e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3319cd93ac3395bf0d4b1c7a9715cf2e3d5b213ff464bbbbc91c54573bfb3e5d->enter($__internal_3319cd93ac3395bf0d4b1c7a9715cf2e3d5b213ff464bbbbc91c54573bfb3e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3319cd93ac3395bf0d4b1c7a9715cf2e3d5b213ff464bbbbc91c54573bfb3e5d->leave($__internal_3319cd93ac3395bf0d4b1c7a9715cf2e3d5b213ff464bbbbc91c54573bfb3e5d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ee14e8441364c69a5bddf9784e6aa6c44e1b7c7b76aaf402dd81804d5b8fad90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee14e8441364c69a5bddf9784e6aa6c44e1b7c7b76aaf402dd81804d5b8fad90->enter($__internal_ee14e8441364c69a5bddf9784e6aa6c44e1b7c7b76aaf402dd81804d5b8fad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ee14e8441364c69a5bddf9784e6aa6c44e1b7c7b76aaf402dd81804d5b8fad90->leave($__internal_ee14e8441364c69a5bddf9784e6aa6c44e1b7c7b76aaf402dd81804d5b8fad90_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2794af2646267df8bb24483e325eb9be349df369d6d60cde8e7dd444b24045a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2794af2646267df8bb24483e325eb9be349df369d6d60cde8e7dd444b24045a3->enter($__internal_2794af2646267df8bb24483e325eb9be349df369d6d60cde8e7dd444b24045a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_2794af2646267df8bb24483e325eb9be349df369d6d60cde8e7dd444b24045a3->leave($__internal_2794af2646267df8bb24483e325eb9be349df369d6d60cde8e7dd444b24045a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
