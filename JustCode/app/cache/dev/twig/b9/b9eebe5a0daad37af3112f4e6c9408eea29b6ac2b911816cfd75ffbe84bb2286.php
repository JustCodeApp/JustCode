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
        $__internal_6a8b34b8cc3f5a2c5e201e3dfd2693348aadf118efb2d266134a7bd472f3f8c3 = $this->env->getExtension("native_profiler");
        $__internal_6a8b34b8cc3f5a2c5e201e3dfd2693348aadf118efb2d266134a7bd472f3f8c3->enter($__internal_6a8b34b8cc3f5a2c5e201e3dfd2693348aadf118efb2d266134a7bd472f3f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8b34b8cc3f5a2c5e201e3dfd2693348aadf118efb2d266134a7bd472f3f8c3->leave($__internal_6a8b34b8cc3f5a2c5e201e3dfd2693348aadf118efb2d266134a7bd472f3f8c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7589b3895a7f017ddf665778bda85622a20cfc2f160bf183c638fa72785fd23 = $this->env->getExtension("native_profiler");
        $__internal_e7589b3895a7f017ddf665778bda85622a20cfc2f160bf183c638fa72785fd23->enter($__internal_e7589b3895a7f017ddf665778bda85622a20cfc2f160bf183c638fa72785fd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7589b3895a7f017ddf665778bda85622a20cfc2f160bf183c638fa72785fd23->leave($__internal_e7589b3895a7f017ddf665778bda85622a20cfc2f160bf183c638fa72785fd23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41953529e33aff71775e80c9abcb8024aab0cffe723c83bde569470d41d83485 = $this->env->getExtension("native_profiler");
        $__internal_41953529e33aff71775e80c9abcb8024aab0cffe723c83bde569470d41d83485->enter($__internal_41953529e33aff71775e80c9abcb8024aab0cffe723c83bde569470d41d83485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41953529e33aff71775e80c9abcb8024aab0cffe723c83bde569470d41d83485->leave($__internal_41953529e33aff71775e80c9abcb8024aab0cffe723c83bde569470d41d83485_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbf306904a610ae1fd1650ddfb7cff93b9b658c28ac14f80edc0c1592820326d = $this->env->getExtension("native_profiler");
        $__internal_cbf306904a610ae1fd1650ddfb7cff93b9b658c28ac14f80edc0c1592820326d->enter($__internal_cbf306904a610ae1fd1650ddfb7cff93b9b658c28ac14f80edc0c1592820326d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cbf306904a610ae1fd1650ddfb7cff93b9b658c28ac14f80edc0c1592820326d->leave($__internal_cbf306904a610ae1fd1650ddfb7cff93b9b658c28ac14f80edc0c1592820326d_prof);

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
