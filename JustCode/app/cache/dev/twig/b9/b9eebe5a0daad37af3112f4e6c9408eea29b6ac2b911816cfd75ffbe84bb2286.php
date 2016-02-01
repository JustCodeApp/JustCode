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
        $__internal_1dec2b2c28d7eb53cec3dc0002b5531ad7c93e22a85a3cf073b372f6ea8ab7f5 = $this->env->getExtension("native_profiler");
        $__internal_1dec2b2c28d7eb53cec3dc0002b5531ad7c93e22a85a3cf073b372f6ea8ab7f5->enter($__internal_1dec2b2c28d7eb53cec3dc0002b5531ad7c93e22a85a3cf073b372f6ea8ab7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dec2b2c28d7eb53cec3dc0002b5531ad7c93e22a85a3cf073b372f6ea8ab7f5->leave($__internal_1dec2b2c28d7eb53cec3dc0002b5531ad7c93e22a85a3cf073b372f6ea8ab7f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ce42aa6edac2afb2e13893d154e530cc252f155ab8c8eb0e75b2d4036d88d9f = $this->env->getExtension("native_profiler");
        $__internal_4ce42aa6edac2afb2e13893d154e530cc252f155ab8c8eb0e75b2d4036d88d9f->enter($__internal_4ce42aa6edac2afb2e13893d154e530cc252f155ab8c8eb0e75b2d4036d88d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ce42aa6edac2afb2e13893d154e530cc252f155ab8c8eb0e75b2d4036d88d9f->leave($__internal_4ce42aa6edac2afb2e13893d154e530cc252f155ab8c8eb0e75b2d4036d88d9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d18796e2de286324d1ce778f2ab206e87bfa17a71dbab2abf0d861760236e481 = $this->env->getExtension("native_profiler");
        $__internal_d18796e2de286324d1ce778f2ab206e87bfa17a71dbab2abf0d861760236e481->enter($__internal_d18796e2de286324d1ce778f2ab206e87bfa17a71dbab2abf0d861760236e481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d18796e2de286324d1ce778f2ab206e87bfa17a71dbab2abf0d861760236e481->leave($__internal_d18796e2de286324d1ce778f2ab206e87bfa17a71dbab2abf0d861760236e481_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0b56a9d56a859538ef01422a54c38f968d67f14786d140d353e86d734c68a22 = $this->env->getExtension("native_profiler");
        $__internal_c0b56a9d56a859538ef01422a54c38f968d67f14786d140d353e86d734c68a22->enter($__internal_c0b56a9d56a859538ef01422a54c38f968d67f14786d140d353e86d734c68a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0b56a9d56a859538ef01422a54c38f968d67f14786d140d353e86d734c68a22->leave($__internal_c0b56a9d56a859538ef01422a54c38f968d67f14786d140d353e86d734c68a22_prof);

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
