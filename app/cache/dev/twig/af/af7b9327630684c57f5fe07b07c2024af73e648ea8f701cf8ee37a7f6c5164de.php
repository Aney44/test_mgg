<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_b464d822dfeceba0c145e388cd1f30e2dffcbf9ace61240ef808a7c354bc2ff9 extends Twig_Template
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
        $__internal_9ed211fd8cdba37d14d533ab1cea1c18ef8f25032a8f79a81190ccadf62f6a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed211fd8cdba37d14d533ab1cea1c18ef8f25032a8f79a81190ccadf62f6a6e->enter($__internal_9ed211fd8cdba37d14d533ab1cea1c18ef8f25032a8f79a81190ccadf62f6a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9ed211fd8cdba37d14d533ab1cea1c18ef8f25032a8f79a81190ccadf62f6a6e->leave($__internal_9ed211fd8cdba37d14d533ab1cea1c18ef8f25032a8f79a81190ccadf62f6a6e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c3996b2abf8836f7a1c3daa4b614122214ba3bfffd28278aa1cfb3f7fb5684ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3996b2abf8836f7a1c3daa4b614122214ba3bfffd28278aa1cfb3f7fb5684ed->enter($__internal_c3996b2abf8836f7a1c3daa4b614122214ba3bfffd28278aa1cfb3f7fb5684ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c3996b2abf8836f7a1c3daa4b614122214ba3bfffd28278aa1cfb3f7fb5684ed->leave($__internal_c3996b2abf8836f7a1c3daa4b614122214ba3bfffd28278aa1cfb3f7fb5684ed_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7865008e7f5f9e41d1e08a3dcbb6e5d742200e0b53751dcb904c4ac9fa7bd19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7865008e7f5f9e41d1e08a3dcbb6e5d742200e0b53751dcb904c4ac9fa7bd19a->enter($__internal_7865008e7f5f9e41d1e08a3dcbb6e5d742200e0b53751dcb904c4ac9fa7bd19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7865008e7f5f9e41d1e08a3dcbb6e5d742200e0b53751dcb904c4ac9fa7bd19a->leave($__internal_7865008e7f5f9e41d1e08a3dcbb6e5d742200e0b53751dcb904c4ac9fa7bd19a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_763c8aa600ce320f926a0edd71fd4b9eb30a3cd16bfe75de661788e16ccae057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763c8aa600ce320f926a0edd71fd4b9eb30a3cd16bfe75de661788e16ccae057->enter($__internal_763c8aa600ce320f926a0edd71fd4b9eb30a3cd16bfe75de661788e16ccae057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_763c8aa600ce320f926a0edd71fd4b9eb30a3cd16bfe75de661788e16ccae057->leave($__internal_763c8aa600ce320f926a0edd71fd4b9eb30a3cd16bfe75de661788e16ccae057_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/andrew/server/mgg/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
