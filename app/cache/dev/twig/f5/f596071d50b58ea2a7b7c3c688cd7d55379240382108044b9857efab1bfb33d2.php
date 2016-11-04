<?php

/* AcmeApiClientBundle::index.html.twig */
class __TwigTemplate_2cb867422d5ab462c092e9bad5cb6090532fee5702f6804f16d652a4228b7d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5a039840e5c790c865d29d926e24dde92b45afab88c2a1af77afe18bee69669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a039840e5c790c865d29d926e24dde92b45afab88c2a1af77afe18bee69669->enter($__internal_f5a039840e5c790c865d29d926e24dde92b45afab88c2a1af77afe18bee69669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeApiClientBundle::index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\" data-framework=\"angularjs\">
<head>
    <meta charset=\"utf-8\">
    <title>Symfony2 Rest Api Client</title>
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "37e4ab3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_37e4ab3_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/styles_main_1.css");
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\"/>
    ";
        } else {
            // asset "37e4ab3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_37e4ab3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/styles.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    <script>
        var root_path = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("", null, true), "html", null, true);
        echo "\";
        var assets_path = root_path + \"bundles/acmeapiclient/partials\";
        var assets_path2 = root_path + \"bundles/restusers/partials\";
        var photo_path = root_path + \"bundles/restusers/photo/\";

    </script>
</head>

<body ng-app=\"ApiClient\">

<header>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#/\">
                    Rest Api Client2
                </a>
            </div>
            <div class=\"navbar-header pull-right\" role=\"navigation\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nelmio_api_doc_index");
        echo "\" class=\"btn btn-sm btn-danger nav-button-margin\" target=\"_blank\"> Documentation</a>

            </div>
        </div>
    </nav>
</header>

<div ng-view class=\"container\">
    <!-- ANGULAR CONTENT GOES HERE -->
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/sha1.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/sha512.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/enc-base64-min.js\"></script>

";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1849b73_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_angular_1.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_angular-route_2.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_angular-cookies_3.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_lodash_4.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_restangular_5.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_ui-bootstrap-tpls_6.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_app_7.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_app-controller_8.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
            // asset "1849b73_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client_app-services_9.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
        } else {
            // asset "1849b73"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1849b73") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client.js");
            // line 58
            echo "
<script src=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>

";
        }
        unset($context["asset_url"]);
        // line 62
        echo "


</body>

</html>
";
        
        $__internal_f5a039840e5c790c865d29d926e24dde92b45afab88c2a1af77afe18bee69669->leave($__internal_f5a039840e5c790c865d29d926e24dde92b45afab88c2a1af77afe18bee69669_prof);

    }

    public function getTemplateName()
    {
        return "AcmeApiClientBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 62,  189 => 59,  186 => 58,  178 => 59,  175 => 58,  168 => 59,  165 => 58,  158 => 59,  155 => 58,  148 => 59,  145 => 58,  138 => 59,  135 => 58,  128 => 59,  125 => 58,  118 => 59,  115 => 58,  108 => 59,  105 => 58,  98 => 59,  95 => 58,  91 => 47,  72 => 31,  50 => 12,  47 => 11,  33 => 9,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\" data-framework=\"angularjs\">
<head>
    <meta charset=\"utf-8\">
    <title>Symfony2 Rest Api Client</title>
    {% stylesheets output='js/styles'
    \"@AcmeApiClientBundle/Resources/public/css/main.css\"
    %}
    <link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\"/>
    {% endstylesheets %}
    <script>
        var root_path = \"{{ asset('', null, true) }}\";
        var assets_path = root_path + \"bundles/acmeapiclient/partials\";
        var assets_path2 = root_path + \"bundles/restusers/partials\";
        var photo_path = root_path + \"bundles/restusers/photo/\";

    </script>
</head>

<body ng-app=\"ApiClient\">

<header>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#/\">
                    Rest Api Client2
                </a>
            </div>
            <div class=\"navbar-header pull-right\" role=\"navigation\">
                <a href=\"{{ path('nelmio_api_doc_index') }}\" class=\"btn btn-sm btn-danger nav-button-margin\" target=\"_blank\"> Documentation</a>

            </div>
        </div>
    </nav>
</header>

<div ng-view class=\"container\">
    <!-- ANGULAR CONTENT GOES HERE -->
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/sha1.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/sha512.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/enc-base64-min.js\"></script>

{% javascripts output='js/client'
\"@AcmeApiClientBundle/Resources/public/components/angular/angular.js\"
\"@AcmeApiClientBundle/Resources/public/components/angular-route/angular-route.js\"
\"@AcmeApiClientBundle/Resources/public/components/angular-cookies/angular-cookies.js\"
\"@AcmeApiClientBundle/Resources/public/components/lodash/dist/lodash.js\"
\"@AcmeApiClientBundle/Resources/public/components/restangular/dist/restangular.js\"
\"@AcmeApiClientBundle/Resources/public/components/angular-bootstrap/ui-bootstrap-tpls.js\"
\"@AcmeApiClientBundle/Resources/public/js/app.js\"
\"@AcmeApiClientBundle/Resources/public/js/app-controller.js\"
\"@AcmeApiClientBundle/Resources/public/js/app-services.js\"
%}

<script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>

{% endjavascripts %}



</body>

</html>
", "AcmeApiClientBundle::index.html.twig", "/home/andrew/server/mgg/src/Acme/ApiClientBundle/Resources/views/index.html.twig");
    }
}
