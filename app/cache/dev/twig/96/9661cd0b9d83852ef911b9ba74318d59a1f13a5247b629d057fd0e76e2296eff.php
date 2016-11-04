<?php

/* @AcmeBlog/layout.html.twig */
class __TwigTemplate_11b5099a684227fe997f781fb7fcdbf7ebbc2e7afcc19b65db89f4d74b6c68c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@AcmeBlog/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2ba3d85ce8bbde376db0a1e01585ce9c3aaad3afa54fb83bbd868041fdbd332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ba3d85ce8bbde376db0a1e01585ce9c3aaad3afa54fb83bbd868041fdbd332->enter($__internal_c2ba3d85ce8bbde376db0a1e01585ce9c3aaad3afa54fb83bbd868041fdbd332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AcmeBlog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ba3d85ce8bbde376db0a1e01585ce9c3aaad3afa54fb83bbd868041fdbd332->leave($__internal_c2ba3d85ce8bbde376db0a1e01585ce9c3aaad3afa54fb83bbd868041fdbd332_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f257ff41d9655b0340c1a2cf40e3b13feac4930fb89365458e6a0071e21314c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f257ff41d9655b0340c1a2cf40e3b13feac4930fb89365458e6a0071e21314c->enter($__internal_6f257ff41d9655b0340c1a2cf40e3b13feac4930fb89365458e6a0071e21314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AcmeBlog/layout.html.twig"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/acmeblog/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f257ff41d9655b0340c1a2cf40e3b13feac4930fb89365458e6a0071e21314c->leave($__internal_6f257ff41d9655b0340c1a2cf40e3b13feac4930fb89365458e6a0071e21314c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d85466397c4226cb856faaedb28b14a683acbb58e59278d97416099e0350139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d85466397c4226cb856faaedb28b14a683acbb58e59278d97416099e0350139->enter($__internal_2d85466397c4226cb856faaedb28b14a683acbb58e59278d97416099e0350139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AcmeBlog/layout.html.twig"));

        echo "Blog Bundle";
        
        $__internal_2d85466397c4226cb856faaedb28b14a683acbb58e59278d97416099e0350139->leave($__internal_2d85466397c4226cb856faaedb28b14a683acbb58e59278d97416099e0350139_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf304e35429ee8ebc60cf5bb80d5221d492b835eec99350086bbd0f65a9c11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf304e35429ee8ebc60cf5bb80d5221d492b835eec99350086bbd0f65a9c11a->enter($__internal_8cf304e35429ee8ebc60cf5bb80d5221d492b835eec99350086bbd0f65a9c11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AcmeBlog/layout.html.twig"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div class=\"block\">
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "    </div>

";
        
        $__internal_8cf304e35429ee8ebc60cf5bb80d5221d492b835eec99350086bbd0f65a9c11a->leave($__internal_8cf304e35429ee8ebc60cf5bb80d5221d492b835eec99350086bbd0f65a9c11a_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_d511462ca60e6834ff4b3609b7c028cc13b2d77fe05d4e6fe80db7b09ca56902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d511462ca60e6834ff4b3609b7c028cc13b2d77fe05d4e6fe80db7b09ca56902->enter($__internal_d511462ca60e6834ff4b3609b7c028cc13b2d77fe05d4e6fe80db7b09ca56902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@AcmeBlog/layout.html.twig"));

        // line 19
        echo "
        ";
        
        $__internal_d511462ca60e6834ff4b3609b7c028cc13b2d77fe05d4e6fe80db7b09ca56902->leave($__internal_d511462ca60e6834ff4b3609b7c028cc13b2d77fe05d4e6fe80db7b09ca56902_prof);

    }

    public function getTemplateName()
    {
        return "@AcmeBlog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 19,  105 => 18,  96 => 21,  94 => 18,  90 => 16,  81 => 13,  78 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/acmeblog/css/demo.css') }}\" />
{% endblock %}

{% block title 'Blog Bundle' %}

{% block body %}

    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"flash-message\">
            <em>Notice</em>: {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"block\">
        {% block content %}

        {% endblock %}
    </div>

{% endblock %}
", "@AcmeBlog/layout.html.twig", "/home/andrew/server/mgg/src/Acme/BlogBundle/Resources/views/layout.html.twig");
    }
}
