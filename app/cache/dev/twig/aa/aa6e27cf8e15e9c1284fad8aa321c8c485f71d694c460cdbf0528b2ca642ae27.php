<?php

/* AcmeBlogBundle:Page:getPage.html.twig */
class __TwigTemplate_a8b82651216334220cae9c26aec210af8be383708105cbfb7f954aae0354be28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AcmeBlog/layout.html.twig", "AcmeBlogBundle:Page:getPage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AcmeBlog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51cfb8918d0d48e1d1f9e2bf1728da3cfee95f18095c19d348af11810fa96c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cfb8918d0d48e1d1f9e2bf1728da3cfee95f18095c19d348af11810fa96c79->enter($__internal_51cfb8918d0d48e1d1f9e2bf1728da3cfee95f18095c19d348af11810fa96c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBlogBundle:Page:getPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51cfb8918d0d48e1d1f9e2bf1728da3cfee95f18095c19d348af11810fa96c79->leave($__internal_51cfb8918d0d48e1d1f9e2bf1728da3cfee95f18095c19d348af11810fa96c79_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_50f1916160f6d861361d0375f74a1db3ae262a0b8095b97d19d9a91d7f62e8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f1916160f6d861361d0375f74a1db3ae262a0b8095b97d19d9a91d7f62e8a0->enter($__internal_50f1916160f6d861361d0375f74a1db3ae262a0b8095b97d19d9a91d7f62e8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AcmeBlogBundle:Page:getPage.html.twig"));

        // line 4
        echo "
    <h1 class=\"title\">#";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</h1>

    <p>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "body", array()), "html", null, true);
        echo "
    </p>

    <p>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_edit_page", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </p>

    <p>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_get_pages");
        echo "\">
            Go back
        </a>
    </p>

";
        
        $__internal_50f1916160f6d861361d0375f74a1db3ae262a0b8095b97d19d9a91d7f62e8a0->leave($__internal_50f1916160f6d861361d0375f74a1db3ae262a0b8095b97d19d9a91d7f62e8a0_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Page:getPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  58 => 12,  51 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@AcmeBlog/layout.html.twig\" %}

{% block content %}

    <h1 class=\"title\">#{{ page.id }} - {{ page.title }}</h1>

    <p>
        {{ page.body }}
    </p>

    <p>
        <a href=\"{{ path('api_edit_page', {'id': page.id}) }}\">
            Edit
        </a>
    </p>

    <p>
        <a href=\"{{ path('api_get_pages') }}\">
            Go back
        </a>
    </p>

{% endblock %}
", "AcmeBlogBundle:Page:getPage.html.twig", "/home/andrew/server/mgg/src/Acme/BlogBundle/Resources/views/Page/getPage.html.twig");
    }
}
