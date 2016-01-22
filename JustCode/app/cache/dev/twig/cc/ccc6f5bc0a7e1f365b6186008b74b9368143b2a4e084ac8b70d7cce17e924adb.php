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
        $__internal_ef7c5e0e221d5b7024e1d007936832fed14d379825a9efec02561633f1ece362 = $this->env->getExtension("native_profiler");
        $__internal_ef7c5e0e221d5b7024e1d007936832fed14d379825a9efec02561633f1ece362->enter($__internal_ef7c5e0e221d5b7024e1d007936832fed14d379825a9efec02561633f1ece362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/actividades.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
        
    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_ef7c5e0e221d5b7024e1d007936832fed14d379825a9efec02561633f1ece362->leave($__internal_ef7c5e0e221d5b7024e1d007936832fed14d379825a9efec02561633f1ece362_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d6676388c6f42adbaf0e9eedf0984fc4619fbb04743a5f651616b53ddd9a5e0 = $this->env->getExtension("native_profiler");
        $__internal_0d6676388c6f42adbaf0e9eedf0984fc4619fbb04743a5f651616b53ddd9a5e0->enter($__internal_0d6676388c6f42adbaf0e9eedf0984fc4619fbb04743a5f651616b53ddd9a5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0d6676388c6f42adbaf0e9eedf0984fc4619fbb04743a5f651616b53ddd9a5e0->leave($__internal_0d6676388c6f42adbaf0e9eedf0984fc4619fbb04743a5f651616b53ddd9a5e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_205ac7a8c89bcb187abc38b65134e61de59d1c924d73d0483f316115704adbef = $this->env->getExtension("native_profiler");
        $__internal_205ac7a8c89bcb187abc38b65134e61de59d1c924d73d0483f316115704adbef->enter($__internal_205ac7a8c89bcb187abc38b65134e61de59d1c924d73d0483f316115704adbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_205ac7a8c89bcb187abc38b65134e61de59d1c924d73d0483f316115704adbef->leave($__internal_205ac7a8c89bcb187abc38b65134e61de59d1c924d73d0483f316115704adbef_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_964e0692690e7f3fd1a7b13f815d847799ba6ea44a8df2f7809b3dac832204dc = $this->env->getExtension("native_profiler");
        $__internal_964e0692690e7f3fd1a7b13f815d847799ba6ea44a8df2f7809b3dac832204dc->enter($__internal_964e0692690e7f3fd1a7b13f815d847799ba6ea44a8df2f7809b3dac832204dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_964e0692690e7f3fd1a7b13f815d847799ba6ea44a8df2f7809b3dac832204dc->leave($__internal_964e0692690e7f3fd1a7b13f815d847799ba6ea44a8df2f7809b3dac832204dc_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5a87eb8de86c51ca229b7b9b0057a31c3cc703caa4d8482f3f8ef40c149e9cf = $this->env->getExtension("native_profiler");
        $__internal_b5a87eb8de86c51ca229b7b9b0057a31c3cc703caa4d8482f3f8ef40c149e9cf->enter($__internal_b5a87eb8de86c51ca229b7b9b0057a31c3cc703caa4d8482f3f8ef40c149e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b5a87eb8de86c51ca229b7b9b0057a31c3cc703caa4d8482f3f8ef40c149e9cf->leave($__internal_b5a87eb8de86c51ca229b7b9b0057a31c3cc703caa4d8482f3f8ef40c149e9cf_prof);

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
        return array (  144 => 29,  133 => 28,  122 => 6,  110 => 5,  101 => 30,  98 => 29,  96 => 28,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  53 => 12,  49 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/actividades.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />*/
/*         <script src="{{ asset('js/menu.js') }}"></script>*/
/*         */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
