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
        $__internal_54c77be6b8f5586adaa719c2ed1baddabcce80103fd25159bc145e190398fb72 = $this->env->getExtension("native_profiler");
        $__internal_54c77be6b8f5586adaa719c2ed1baddabcce80103fd25159bc145e190398fb72->enter($__internal_54c77be6b8f5586adaa719c2ed1baddabcce80103fd25159bc145e190398fb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Bootstrap y Jquery -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
            <!-- Social Font Codes -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-codes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-embedded.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-ie7.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/socialIconsFont/creativeverse_social-ie7-codes.css"), "html", null, true);
        echo "\" />
    
        
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/circle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        
        <!-- Otros importes -->
        ";
        // line 25
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "principal") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login"))) {
            // line 26
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actividades.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footer.css"), "html", null, true);
            echo "\" />
            
        ";
        }
        // line 31
        echo "
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
    
        ";
        // line 34
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "principal") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login"))) {
            // line 35
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 37
        echo "    </head>
    <body>
        <!-- Menú -->
";
        // line 40
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "just_codeactividades_homepage") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "principal")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "fos_user_security_login"))) {
            // line 41
            echo "
    <!--<div class=\"navbar navbar-inverse navbar-fixed-top\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <div class=\"logo\"><a class=\"navbar-brand\" href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getUrl("homepage");
            // line 52
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
    </div>-->
    ";
        }
        // line 64
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
    
</html>";
        
        $__internal_54c77be6b8f5586adaa719c2ed1baddabcce80103fd25159bc145e190398fb72->leave($__internal_54c77be6b8f5586adaa719c2ed1baddabcce80103fd25159bc145e190398fb72_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d605a179081bc121539aa68e73d190808a6ef71ff3f6b10ad0fa21a1c6931188 = $this->env->getExtension("native_profiler");
        $__internal_d605a179081bc121539aa68e73d190808a6ef71ff3f6b10ad0fa21a1c6931188->enter($__internal_d605a179081bc121539aa68e73d190808a6ef71ff3f6b10ad0fa21a1c6931188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d605a179081bc121539aa68e73d190808a6ef71ff3f6b10ad0fa21a1c6931188->leave($__internal_d605a179081bc121539aa68e73d190808a6ef71ff3f6b10ad0fa21a1c6931188_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e5365dacb40d22e687fc6dee9c7ac740c3cb6c09f029296ef60f9fd3e698b1d = $this->env->getExtension("native_profiler");
        $__internal_9e5365dacb40d22e687fc6dee9c7ac740c3cb6c09f029296ef60f9fd3e698b1d->enter($__internal_9e5365dacb40d22e687fc6dee9c7ac740c3cb6c09f029296ef60f9fd3e698b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e5365dacb40d22e687fc6dee9c7ac740c3cb6c09f029296ef60f9fd3e698b1d->leave($__internal_9e5365dacb40d22e687fc6dee9c7ac740c3cb6c09f029296ef60f9fd3e698b1d_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5900341574d6c9061aceb729933dcc470689b3630091b2e2fdd6aa1608ff93 = $this->env->getExtension("native_profiler");
        $__internal_6d5900341574d6c9061aceb729933dcc470689b3630091b2e2fdd6aa1608ff93->enter($__internal_6d5900341574d6c9061aceb729933dcc470689b3630091b2e2fdd6aa1608ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d5900341574d6c9061aceb729933dcc470689b3630091b2e2fdd6aa1608ff93->leave($__internal_6d5900341574d6c9061aceb729933dcc470689b3630091b2e2fdd6aa1608ff93_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe41a5ebf9ae0bdddf29edf3b6285ea2ce138e890d2639fcc3a0bcc2c55b2696 = $this->env->getExtension("native_profiler");
        $__internal_fe41a5ebf9ae0bdddf29edf3b6285ea2ce138e890d2639fcc3a0bcc2c55b2696->enter($__internal_fe41a5ebf9ae0bdddf29edf3b6285ea2ce138e890d2639fcc3a0bcc2c55b2696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe41a5ebf9ae0bdddf29edf3b6285ea2ce138e890d2639fcc3a0bcc2c55b2696->leave($__internal_fe41a5ebf9ae0bdddf29edf3b6285ea2ce138e890d2639fcc3a0bcc2c55b2696_prof);

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
        return array (  204 => 66,  193 => 64,  182 => 7,  170 => 6,  161 => 67,  159 => 66,  156 => 65,  153 => 64,  137 => 52,  135 => 50,  124 => 41,  122 => 40,  117 => 37,  111 => 35,  109 => 34,  104 => 32,  101 => 31,  95 => 28,  91 => 27,  86 => 26,  84 => 25,  78 => 22,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  54 => 13,  50 => 12,  45 => 10,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }
}
/* */
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
/*     */
/*         */
/*         <link href="{{ asset('css/circle.css') }}" rel="stylesheet" type="text/css" />*/
/*         */
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
/*     <!--<div class="navbar navbar-inverse navbar-fixed-top" >*/
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
/*     </div>-->*/
/*     {% endif %}*/
/*         {% block body %}{% endblock %}*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/*     */
/* </html>*/
