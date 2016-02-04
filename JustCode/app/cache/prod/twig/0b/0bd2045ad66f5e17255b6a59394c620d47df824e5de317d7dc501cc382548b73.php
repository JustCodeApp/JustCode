<?php

/* base.html.twig */
class __TwigTemplate_26c646d6898ec299a9a80b280226ef76c5da7289d5b0257791bd2c544ecb6bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Bootstrap y Jquery -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
            <!-- Social Font Codes -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-codes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-embedded.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-ie7.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-ie7-codes.css"), "html", null, true);
        echo "\" />
        
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"css/circle.css\" rel=\"stylesheet\" type=\"text/css\" />
        \t<!-- Social Font Codes -->
        \t<link href=\"css/socialIconsFont/creativeverse_social-codes.css\" rel=\"stylesheet\" type=\"text/css\" />
        \t<link href=\"css/socialIconsFont/creativeverse_social-embedded.css\" rel=\"stylesheet\" type=\"text/css\" />
        \t<link href=\"css/socialIconsFont/creativeverse_social-ie7.css\" rel=\"stylesheet\" type=\"text/css\" />
        \t<link href=\"css/socialIconsFont/creativeverse_social-ie7-codes.css\" rel=\"stylesheet\" type=\"text/css\" />
     
        <!-- Otros importes -->
        ";
        // line 29
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "principal") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login"))) {
            // line 30
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actividades.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footer.css"), "html", null, true);
            echo "\" />
            
        ";
        }
        // line 35
        echo "
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
    
        ";
        // line 38
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "principal") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login"))) {
            // line 39
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 41
        echo "    </head>
    <body>
        <!-- Menú -->
";
        // line 44
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "just_codeactividades_homepage") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "principal")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login"))) {
            // line 45
            echo "
    <div class=\"navbar navbar-inverse navbar-fixed-top\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <div class=\"logo\"><a class=\"navbar-brand\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getUrl("homepage");
            // line 56
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoblanco.png"), "html", null, true);
            echo "\" /></a></div>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\">My progress</a></li>
                     <li><a href=\"#\">Settings</a></li>
                    <li><a href=\"#\">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
        }
        // line 68
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 69,  176 => 68,  171 => 6,  165 => 5,  160 => 70,  157 => 69,  154 => 68,  138 => 56,  136 => 54,  125 => 45,  123 => 44,  118 => 41,  112 => 39,  110 => 38,  105 => 36,  102 => 35,  96 => 32,  92 => 31,  87 => 30,  85 => 29,  73 => 20,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  50 => 12,  46 => 11,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!-- Bootstrap y Jquery -->*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/* */
/*         <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         */
/*             <!-- Social Font Codes -->*/
/*         <link href="{{ asset('css/socialIconsFont/creativeverse_social-codes.css')}}" rel="stylesheet" />*/
/*         <link rel="stylesheet" href="{{ asset('css/socialIconsFont/creativeverse_social-embedded.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/socialIconsFont/creativeverse_social-ie7.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/socialIconsFont/creativeverse_social-ie7-codes.css') }}" />*/
/*         */
/*             <link href="{{ asset('css/footer.css')}}" rel="stylesheet">*/
/*             <link href="css/circle.css" rel="stylesheet" type="text/css" />*/
/*         	<!-- Social Font Codes -->*/
/*         	<link href="css/socialIconsFont/creativeverse_social-codes.css" rel="stylesheet" type="text/css" />*/
/*         	<link href="css/socialIconsFont/creativeverse_social-embedded.css" rel="stylesheet" type="text/css" />*/
/*         	<link href="css/socialIconsFont/creativeverse_social-ie7.css" rel="stylesheet" type="text/css" />*/
/*         	<link href="css/socialIconsFont/creativeverse_social-ie7-codes.css" rel="stylesheet" type="text/css" />*/
/*      */
/*         <!-- Otros importes -->*/
/*         {% if (app.request.get('_route') != 'principal' and app.request.get('_route') != 'fos_user_security_login') %}*/
/*             <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('css/actividades.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />*/
/*             */
/*         {% endif %}*/
/* */
/*         <script src="{{ asset('js/menu.js') }}"></script>*/
/*     */
/*         {% if (app.request.get('_route') == 'principal' or app.request.get('_route') == 'fos_user_security_login') %}*/
/*             <link href="{{ asset('css/index.css') }}" rel="stylesheet">*/
/*         {% endif %}*/
/*     </head>*/
/*     <body>*/
/*         <!-- Menú -->*/
/* {% if (app.request.get('_route') != 'just_codeactividades_homepage' and app.request.get('_route') != 'principal' and app.request.get('_route') != 'fos_user_security_login') %}*/
/* */
/*     <div class="navbar navbar-inverse navbar-fixed-top" >*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <div class="logo"><a class="navbar-brand" href="{{ */
/*         url('homepage') */
/*         }}"><img src="{{ asset('img/logoblanco.png') }}" /></a></div>*/
/*             </div>*/
/*             <div class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="#">My progress</a></li>*/
/*                      <li><a href="#">Settings</a></li>*/
/*                     <li><a href="#">Log Out</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
