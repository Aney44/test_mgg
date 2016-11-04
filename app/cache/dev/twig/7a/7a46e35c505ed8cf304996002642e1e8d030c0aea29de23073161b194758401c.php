<?php

/* AcmeBlogBundle:Page:getPages.html.twig */
class __TwigTemplate_bd8635ba2de9cde5fcf2c3d17447edef671d9bae5c75a68f50240e8efc47059c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AcmeBlog/layout.html.twig", "AcmeBlogBundle:Page:getPages.html.twig", 1);
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
        $__internal_bd0752619f42cbb439099d2682baa18e14b721700322a823a753726dc6e9ef81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0752619f42cbb439099d2682baa18e14b721700322a823a753726dc6e9ef81->enter($__internal_bd0752619f42cbb439099d2682baa18e14b721700322a823a753726dc6e9ef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBlogBundle:Page:getPages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0752619f42cbb439099d2682baa18e14b721700322a823a753726dc6e9ef81->leave($__internal_bd0752619f42cbb439099d2682baa18e14b721700322a823a753726dc6e9ef81_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0de8627059707281b7d257ae60556acdfe8506b207289f270d28f56eb5ba3154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de8627059707281b7d257ae60556acdfe8506b207289f270d28f56eb5ba3154->enter($__internal_0de8627059707281b7d257ae60556acdfe8506b207289f270d28f56eb5ba3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AcmeBlogBundle:Page:getPages.html.twig"));

        // line 4
        echo "
    <h1 class=\"title\">All pages</h1>

    <ul id=\"todo-list\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "            <li>
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo " -
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_get_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</a> -
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "body", array()), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <li>empty</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

";
        
        $__internal_0de8627059707281b7d257ae60556acdfe8506b207289f270d28f56eb5ba3154->leave($__internal_0de8627059707281b7d257ae60556acdfe8506b207289f270d28f56eb5ba3154_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Page:getPages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  72 => 15,  64 => 12,  58 => 11,  54 => 10,  51 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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

    <h1 class=\"title\">All pages</h1>

    <ul id=\"todo-list\">
        {% for page in pages %}
            <li>
                {{ page.id }} -
                <a href=\"{{ path('api_get_page', {'id': page.id}) }}\"> {{ page.title }}</a> -
                {{ page.body }}
            </li>
        {% else %}
            <li>empty</li>
        {% endfor %}
    </ul>

{% endblock %}
", "AcmeBlogBundle:Page:getPages.html.twig", "/home/andrew/server/mgg/src/Acme/BlogBundle/Resources/views/Page/getPages.html.twig");
    }
}
