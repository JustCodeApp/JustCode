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
        $__internal_d808bf34a720d6f9cfd06909e2c2d0c3511e2492ad277920f2344fc00de0afcb = $this->env->getExtension("native_profiler");
        $__internal_d808bf34a720d6f9cfd06909e2c2d0c3511e2492ad277920f2344fc00de0afcb->enter($__internal_d808bf34a720d6f9cfd06909e2c2d0c3511e2492ad277920f2344fc00de0afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d808bf34a720d6f9cfd06909e2c2d0c3511e2492ad277920f2344fc00de0afcb->leave($__internal_d808bf34a720d6f9cfd06909e2c2d0c3511e2492ad277920f2344fc00de0afcb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_010c265113ef6b2326c53ceff0ca9dde0838fc38be82caad13e45f28030c57fe = $this->env->getExtension("native_profiler");
        $__internal_010c265113ef6b2326c53ceff0ca9dde0838fc38be82caad13e45f28030c57fe->enter($__internal_010c265113ef6b2326c53ceff0ca9dde0838fc38be82caad13e45f28030c57fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_010c265113ef6b2326c53ceff0ca9dde0838fc38be82caad13e45f28030c57fe->leave($__internal_010c265113ef6b2326c53ceff0ca9dde0838fc38be82caad13e45f28030c57fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b74a47060cdb12af30aadead57a86398796900dd7cfd5b15d06686031ea91f9f = $this->env->getExtension("native_profiler");
        $__internal_b74a47060cdb12af30aadead57a86398796900dd7cfd5b15d06686031ea91f9f->enter($__internal_b74a47060cdb12af30aadead57a86398796900dd7cfd5b15d06686031ea91f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b74a47060cdb12af30aadead57a86398796900dd7cfd5b15d06686031ea91f9f->leave($__internal_b74a47060cdb12af30aadead57a86398796900dd7cfd5b15d06686031ea91f9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5c807e64a6eada8b33c2e7756440574069e02e4a7911d1b6ce9fd617b875cbc = $this->env->getExtension("native_profiler");
        $__internal_b5c807e64a6eada8b33c2e7756440574069e02e4a7911d1b6ce9fd617b875cbc->enter($__internal_b5c807e64a6eada8b33c2e7756440574069e02e4a7911d1b6ce9fd617b875cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b5c807e64a6eada8b33c2e7756440574069e02e4a7911d1b6ce9fd617b875cbc->leave($__internal_b5c807e64a6eada8b33c2e7756440574069e02e4a7911d1b6ce9fd617b875cbc_prof);

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
