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
        $__internal_e68377fb2f572e43730d39afd2b5ff56a453788d0f83206daa19be96e519fa05 = $this->env->getExtension("native_profiler");
        $__internal_e68377fb2f572e43730d39afd2b5ff56a453788d0f83206daa19be96e519fa05->enter($__internal_e68377fb2f572e43730d39afd2b5ff56a453788d0f83206daa19be96e519fa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68377fb2f572e43730d39afd2b5ff56a453788d0f83206daa19be96e519fa05->leave($__internal_e68377fb2f572e43730d39afd2b5ff56a453788d0f83206daa19be96e519fa05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f7f80714040afabd916dfd837a51aa8d37e0459bb1bdf52827ad723a0da2c93 = $this->env->getExtension("native_profiler");
        $__internal_5f7f80714040afabd916dfd837a51aa8d37e0459bb1bdf52827ad723a0da2c93->enter($__internal_5f7f80714040afabd916dfd837a51aa8d37e0459bb1bdf52827ad723a0da2c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f7f80714040afabd916dfd837a51aa8d37e0459bb1bdf52827ad723a0da2c93->leave($__internal_5f7f80714040afabd916dfd837a51aa8d37e0459bb1bdf52827ad723a0da2c93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cb232dc227e332fa49fdf675aa3b771974508b3449edb9d46b4a387c03ffd92 = $this->env->getExtension("native_profiler");
        $__internal_5cb232dc227e332fa49fdf675aa3b771974508b3449edb9d46b4a387c03ffd92->enter($__internal_5cb232dc227e332fa49fdf675aa3b771974508b3449edb9d46b4a387c03ffd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cb232dc227e332fa49fdf675aa3b771974508b3449edb9d46b4a387c03ffd92->leave($__internal_5cb232dc227e332fa49fdf675aa3b771974508b3449edb9d46b4a387c03ffd92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1000a3001124ee80c52465a0b163d6bfcb49d81434259912e595e02b0a20f842 = $this->env->getExtension("native_profiler");
        $__internal_1000a3001124ee80c52465a0b163d6bfcb49d81434259912e595e02b0a20f842->enter($__internal_1000a3001124ee80c52465a0b163d6bfcb49d81434259912e595e02b0a20f842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1000a3001124ee80c52465a0b163d6bfcb49d81434259912e595e02b0a20f842->leave($__internal_1000a3001124ee80c52465a0b163d6bfcb49d81434259912e595e02b0a20f842_prof);

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
