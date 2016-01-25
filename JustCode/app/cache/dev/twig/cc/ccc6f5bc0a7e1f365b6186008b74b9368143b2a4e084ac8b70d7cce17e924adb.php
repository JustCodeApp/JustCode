<?php

/* base.html.twig */
class __TwigTemplate_91b107a744f236b36a103bfb7c45adbb7d67428eba83064e0834ae7433bda8b0 extends Twig_Template
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
        $__internal_5e5a8fb1b56268b90baeacb64ab2626ad36358a8d83b7869718d5a463afb5a60 = $this->env->getExtension("native_profiler");
        $__internal_5e5a8fb1b56268b90baeacb64ab2626ad36358a8d83b7869718d5a463afb5a60->enter($__internal_5e5a8fb1b56268b90baeacb64ab2626ad36358a8d83b7869718d5a463afb5a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        <!-- Otros importes -->
        ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "principal")) {
            // line 22
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actividades.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footer.css"), "html", null, true);
            echo "\" />
            
        ";
        }
        // line 27
        echo "
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "principal")) {
            // line 31
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 33
        echo "    </head>
    <body>
        <!-- Menú -->
";
        // line 36
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "just_codeactividades_homepage") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "principal"))) {
            // line 37
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
            // line 46
            echo $this->env->getExtension('routing')->getUrl("homepage");
            // line 48
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
        // line 60
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>";
        
        $__internal_5e5a8fb1b56268b90baeacb64ab2626ad36358a8d83b7869718d5a463afb5a60->leave($__internal_5e5a8fb1b56268b90baeacb64ab2626ad36358a8d83b7869718d5a463afb5a60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c00dff81835141231049d2424701392be9c21a3fb0b1e37c378ed30751d41112 = $this->env->getExtension("native_profiler");
        $__internal_c00dff81835141231049d2424701392be9c21a3fb0b1e37c378ed30751d41112->enter($__internal_c00dff81835141231049d2424701392be9c21a3fb0b1e37c378ed30751d41112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c00dff81835141231049d2424701392be9c21a3fb0b1e37c378ed30751d41112->leave($__internal_c00dff81835141231049d2424701392be9c21a3fb0b1e37c378ed30751d41112_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd5f659fe86209dad5f2988dbe6f60e1de19bffd59d6f6c0949f1c78a73186d1 = $this->env->getExtension("native_profiler");
        $__internal_cd5f659fe86209dad5f2988dbe6f60e1de19bffd59d6f6c0949f1c78a73186d1->enter($__internal_cd5f659fe86209dad5f2988dbe6f60e1de19bffd59d6f6c0949f1c78a73186d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd5f659fe86209dad5f2988dbe6f60e1de19bffd59d6f6c0949f1c78a73186d1->leave($__internal_cd5f659fe86209dad5f2988dbe6f60e1de19bffd59d6f6c0949f1c78a73186d1_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_6939268ed5dd0a2fb303094cc9acc56b2368e965355cf74ae7c5c8eeafd59bf9 = $this->env->getExtension("native_profiler");
        $__internal_6939268ed5dd0a2fb303094cc9acc56b2368e965355cf74ae7c5c8eeafd59bf9->enter($__internal_6939268ed5dd0a2fb303094cc9acc56b2368e965355cf74ae7c5c8eeafd59bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6939268ed5dd0a2fb303094cc9acc56b2368e965355cf74ae7c5c8eeafd59bf9->leave($__internal_6939268ed5dd0a2fb303094cc9acc56b2368e965355cf74ae7c5c8eeafd59bf9_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e810dc78ab5e0f8c1856eda2461c6526cfb92f51638a4c136cab27686c221bd9 = $this->env->getExtension("native_profiler");
        $__internal_e810dc78ab5e0f8c1856eda2461c6526cfb92f51638a4c136cab27686c221bd9->enter($__internal_e810dc78ab5e0f8c1856eda2461c6526cfb92f51638a4c136cab27686c221bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e810dc78ab5e0f8c1856eda2461c6526cfb92f51638a4c136cab27686c221bd9->leave($__internal_e810dc78ab5e0f8c1856eda2461c6526cfb92f51638a4c136cab27686c221bd9_prof);

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
        return array (  194 => 61,  183 => 60,  172 => 6,  160 => 5,  152 => 62,  149 => 61,  146 => 60,  130 => 48,  128 => 46,  117 => 37,  115 => 36,  110 => 33,  104 => 31,  102 => 30,  97 => 28,  94 => 27,  88 => 24,  84 => 23,  79 => 22,  77 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <!-- Otros importes -->*/
/*         {% if (app.request.get('_route') != 'principal') %}*/
/*             <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('css/actividades.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />*/
/*             */
/*         {% endif %}*/
/* */
/*         <script src="{{ asset('js/menu.js') }}"></script>*/
/* */
/*         {% if (app.request.get('_route') == 'principal') %}*/
/*             <link href="{{ asset('css/index.css') }}" rel="stylesheet">*/
/*         {% endif %}*/
/*     </head>*/
/*     <body>*/
/*         <!-- Menú -->*/
/* {% if (app.request.get('_route') != 'just_codeactividades_homepage' and app.request.get('_route') != 'principal') %}*/
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
