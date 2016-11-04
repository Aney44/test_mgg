<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_93009820d9530630e059fefe140bc62d116538c1c8016fdee20a8a8ec05367db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62dace6dcf988eda260e222f9f7e9d4ea219c6e8373133d38c1a14c7c857d9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dace6dcf988eda260e222f9f7e9d4ea219c6e8373133d38c1a14c7c857d9f4->enter($__internal_62dace6dcf988eda260e222f9f7e9d4ea219c6e8373133d38c1a14c7c857d9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62dace6dcf988eda260e222f9f7e9d4ea219c6e8373133d38c1a14c7c857d9f4->leave($__internal_62dace6dcf988eda260e222f9f7e9d4ea219c6e8373133d38c1a14c7c857d9f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9259a6c1de78d0f67a0efbfdd7d27b628767b115e8c5434e1aaf7d4340387fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9259a6c1de78d0f67a0efbfdd7d27b628767b115e8c5434e1aaf7d4340387fbc->enter($__internal_9259a6c1de78d0f67a0efbfdd7d27b628767b115e8c5434e1aaf7d4340387fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_9259a6c1de78d0f67a0efbfdd7d27b628767b115e8c5434e1aaf7d4340387fbc->leave($__internal_9259a6c1de78d0f67a0efbfdd7d27b628767b115e8c5434e1aaf7d4340387fbc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a67d4045152e065ccd11e5dd2a44f26f9d0c27006c0597522adbaff73ef1586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67d4045152e065ccd11e5dd2a44f26f9d0c27006c0597522adbaff73ef1586d->enter($__internal_a67d4045152e065ccd11e5dd2a44f26f9d0c27006c0597522adbaff73ef1586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a67d4045152e065ccd11e5dd2a44f26f9d0c27006c0597522adbaff73ef1586d->leave($__internal_a67d4045152e065ccd11e5dd2a44f26f9d0c27006c0597522adbaff73ef1586d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09e3e66635e2d0f6e4934144052e19a615f10a344f7c2bde3b86c051c68e5f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e3e66635e2d0f6e4934144052e19a615f10a344f7c2bde3b86c051c68e5f1c->enter($__internal_09e3e66635e2d0f6e4934144052e19a615f10a344f7c2bde3b86c051c68e5f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09e3e66635e2d0f6e4934144052e19a615f10a344f7c2bde3b86c051c68e5f1c->leave($__internal_09e3e66635e2d0f6e4934144052e19a615f10a344f7c2bde3b86c051c68e5f1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/andrew/server/mgg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
