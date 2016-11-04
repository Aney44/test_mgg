<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_2f4981a4966353e3ff714aefacaf7b82ee3feaf2572324e095107ae85272398e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e2fc882082780116bbde4145e1996487f1fee140b0e8d40f3d1f53f43d3158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e2fc882082780116bbde4145e1996487f1fee140b0e8d40f3d1f53f43d3158->enter($__internal_39e2fc882082780116bbde4145e1996487f1fee140b0e8d40f3d1f53f43d3158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e2fc882082780116bbde4145e1996487f1fee140b0e8d40f3d1f53f43d3158->leave($__internal_39e2fc882082780116bbde4145e1996487f1fee140b0e8d40f3d1f53f43d3158_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0e345c794d0bf5f3edeee40e106de71888d766544da1266628d391a4ba59ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e345c794d0bf5f3edeee40e106de71888d766544da1266628d391a4ba59ff7->enter($__internal_e0e345c794d0bf5f3edeee40e106de71888d766544da1266628d391a4ba59ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "NelmioApiDocBundle::resource.html.twig"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_e0e345c794d0bf5f3edeee40e106de71888d766544da1266628d391a4ba59ff7->leave($__internal_e0e345c794d0bf5f3edeee40e106de71888d766544da1266628d391a4ba59ff7_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/home/andrew/server/mgg/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
