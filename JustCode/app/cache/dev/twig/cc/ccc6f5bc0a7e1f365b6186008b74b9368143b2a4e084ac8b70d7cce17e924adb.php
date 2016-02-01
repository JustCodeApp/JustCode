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
        $__internal_d955fe23449bab377ee9b332709ee849fe779b103bdd8343452f891024053024 = $this->env->getExtension("native_profiler");
        $__internal_d955fe23449bab377ee9b332709ee849fe779b103bdd8343452f891024053024->enter($__internal_d955fe23449bab377ee9b332709ee849fe779b103bdd8343452f891024053024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <!-- FOS BUNDLE PARA URL EN JAVASCRIPT -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        
        <!-- Scripts (java) -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "principal")) {
            // line 37
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 39
        echo "    </head>
    <body>
        <!-- Menú -->
";
        // line 42
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "just_codeactividades_homepage") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "principal"))) {
            // line 43
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
            // line 52
            echo $this->env->getExtension('routing')->getUrl("homepage");
            // line 54
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
        // line 66
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>";
        
        $__internal_d955fe23449bab377ee9b332709ee849fe779b103bdd8343452f891024053024->leave($__internal_d955fe23449bab377ee9b332709ee849fe779b103bdd8343452f891024053024_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_749e8d630a986350e506b5c8837d3eaf9a79107fc0bab580412559ef3a4389be = $this->env->getExtension("native_profiler");
        $__internal_749e8d630a986350e506b5c8837d3eaf9a79107fc0bab580412559ef3a4389be->enter($__internal_749e8d630a986350e506b5c8837d3eaf9a79107fc0bab580412559ef3a4389be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_749e8d630a986350e506b5c8837d3eaf9a79107fc0bab580412559ef3a4389be->leave($__internal_749e8d630a986350e506b5c8837d3eaf9a79107fc0bab580412559ef3a4389be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35674e5a76490f6a79899d2857e7e9d4b77b073f6f17d9eadeb2a9598bd6f88f = $this->env->getExtension("native_profiler");
        $__internal_35674e5a76490f6a79899d2857e7e9d4b77b073f6f17d9eadeb2a9598bd6f88f->enter($__internal_35674e5a76490f6a79899d2857e7e9d4b77b073f6f17d9eadeb2a9598bd6f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35674e5a76490f6a79899d2857e7e9d4b77b073f6f17d9eadeb2a9598bd6f88f->leave($__internal_35674e5a76490f6a79899d2857e7e9d4b77b073f6f17d9eadeb2a9598bd6f88f_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_55599b518a289da5150a0208305372d8e25e86b363790afb19b8a41ccb96f538 = $this->env->getExtension("native_profiler");
        $__internal_55599b518a289da5150a0208305372d8e25e86b363790afb19b8a41ccb96f538->enter($__internal_55599b518a289da5150a0208305372d8e25e86b363790afb19b8a41ccb96f538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55599b518a289da5150a0208305372d8e25e86b363790afb19b8a41ccb96f538->leave($__internal_55599b518a289da5150a0208305372d8e25e86b363790afb19b8a41ccb96f538_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30f2a23c2f0e7e5c4b810e4493a63fcd4390cfaa942f7077c500ac968901d7d7 = $this->env->getExtension("native_profiler");
        $__internal_30f2a23c2f0e7e5c4b810e4493a63fcd4390cfaa942f7077c500ac968901d7d7->enter($__internal_30f2a23c2f0e7e5c4b810e4493a63fcd4390cfaa942f7077c500ac968901d7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30f2a23c2f0e7e5c4b810e4493a63fcd4390cfaa942f7077c500ac968901d7d7->leave($__internal_30f2a23c2f0e7e5c4b810e4493a63fcd4390cfaa942f7077c500ac968901d7d7_prof);

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
        return array (  209 => 67,  198 => 66,  187 => 6,  175 => 5,  167 => 68,  164 => 67,  161 => 66,  145 => 54,  143 => 52,  132 => 43,  130 => 42,  125 => 39,  119 => 37,  117 => 36,  112 => 34,  108 => 33,  102 => 30,  98 => 29,  94 => 27,  88 => 24,  84 => 23,  79 => 22,  77 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         */
/*         <!-- FOS BUNDLE PARA URL EN JAVASCRIPT -->*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         */
/*         <!-- Scripts (java) -->*/
/*         <script src="{{ asset('js/menu.js') }}"></script>*/
/*         <script src="{{ asset('js/ajax.js') }}"></script>*/
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
