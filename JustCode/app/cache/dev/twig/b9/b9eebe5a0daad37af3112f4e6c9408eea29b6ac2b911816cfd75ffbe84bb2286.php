<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_486c7abc77e7509109775df6fd528a79814fa4291c686ff4229262697f0708db extends Twig_Template
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
        $__internal_171e84f8e3571acdf4def2b03519b1c374cb5ddf33135c697634b0abadce2c00 = $this->env->getExtension("native_profiler");
        $__internal_171e84f8e3571acdf4def2b03519b1c374cb5ddf33135c697634b0abadce2c00->enter($__internal_171e84f8e3571acdf4def2b03519b1c374cb5ddf33135c697634b0abadce2c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171e84f8e3571acdf4def2b03519b1c374cb5ddf33135c697634b0abadce2c00->leave($__internal_171e84f8e3571acdf4def2b03519b1c374cb5ddf33135c697634b0abadce2c00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a063c3605d41e11b4146f06fe5bc65e9e310fab1a23ecdf96daf8c419cc10fb = $this->env->getExtension("native_profiler");
        $__internal_0a063c3605d41e11b4146f06fe5bc65e9e310fab1a23ecdf96daf8c419cc10fb->enter($__internal_0a063c3605d41e11b4146f06fe5bc65e9e310fab1a23ecdf96daf8c419cc10fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a063c3605d41e11b4146f06fe5bc65e9e310fab1a23ecdf96daf8c419cc10fb->leave($__internal_0a063c3605d41e11b4146f06fe5bc65e9e310fab1a23ecdf96daf8c419cc10fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce68e54fb02dc3d88242c766af2efe06705766ee12c65f7f82b45af0fd301f22 = $this->env->getExtension("native_profiler");
        $__internal_ce68e54fb02dc3d88242c766af2efe06705766ee12c65f7f82b45af0fd301f22->enter($__internal_ce68e54fb02dc3d88242c766af2efe06705766ee12c65f7f82b45af0fd301f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce68e54fb02dc3d88242c766af2efe06705766ee12c65f7f82b45af0fd301f22->leave($__internal_ce68e54fb02dc3d88242c766af2efe06705766ee12c65f7f82b45af0fd301f22_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0159d397598e5c65d8c2e2f03512d4de01c570ef252439710126b833a9cb011 = $this->env->getExtension("native_profiler");
        $__internal_d0159d397598e5c65d8c2e2f03512d4de01c570ef252439710126b833a9cb011->enter($__internal_d0159d397598e5c65d8c2e2f03512d4de01c570ef252439710126b833a9cb011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0159d397598e5c65d8c2e2f03512d4de01c570ef252439710126b833a9cb011->leave($__internal_d0159d397598e5c65d8c2e2f03512d4de01c570ef252439710126b833a9cb011_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
