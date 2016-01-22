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
        $__internal_ac426108327c91fd0c44b19d73fec601ad5464f630fece7cb5efe47a34170d74 = $this->env->getExtension("native_profiler");
        $__internal_ac426108327c91fd0c44b19d73fec601ad5464f630fece7cb5efe47a34170d74->enter($__internal_ac426108327c91fd0c44b19d73fec601ad5464f630fece7cb5efe47a34170d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac426108327c91fd0c44b19d73fec601ad5464f630fece7cb5efe47a34170d74->leave($__internal_ac426108327c91fd0c44b19d73fec601ad5464f630fece7cb5efe47a34170d74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62e4ba87600bc87d4d9e24af64e3ce2eae4d7832f821ae6d060fbba3f7daecd9 = $this->env->getExtension("native_profiler");
        $__internal_62e4ba87600bc87d4d9e24af64e3ce2eae4d7832f821ae6d060fbba3f7daecd9->enter($__internal_62e4ba87600bc87d4d9e24af64e3ce2eae4d7832f821ae6d060fbba3f7daecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62e4ba87600bc87d4d9e24af64e3ce2eae4d7832f821ae6d060fbba3f7daecd9->leave($__internal_62e4ba87600bc87d4d9e24af64e3ce2eae4d7832f821ae6d060fbba3f7daecd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53195bcf455a3940539b4b3b9bbdd9f9213e33fa51a7140d6294422ca49e6c38 = $this->env->getExtension("native_profiler");
        $__internal_53195bcf455a3940539b4b3b9bbdd9f9213e33fa51a7140d6294422ca49e6c38->enter($__internal_53195bcf455a3940539b4b3b9bbdd9f9213e33fa51a7140d6294422ca49e6c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53195bcf455a3940539b4b3b9bbdd9f9213e33fa51a7140d6294422ca49e6c38->leave($__internal_53195bcf455a3940539b4b3b9bbdd9f9213e33fa51a7140d6294422ca49e6c38_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3d50e39d91d3c3b3afef8a56cd40b92f080c10c6ce6cb8159b9ae9fa6f35208 = $this->env->getExtension("native_profiler");
        $__internal_a3d50e39d91d3c3b3afef8a56cd40b92f080c10c6ce6cb8159b9ae9fa6f35208->enter($__internal_a3d50e39d91d3c3b3afef8a56cd40b92f080c10c6ce6cb8159b9ae9fa6f35208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3d50e39d91d3c3b3afef8a56cd40b92f080c10c6ce6cb8159b9ae9fa6f35208->leave($__internal_a3d50e39d91d3c3b3afef8a56cd40b92f080c10c6ce6cb8159b9ae9fa6f35208_prof);

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
