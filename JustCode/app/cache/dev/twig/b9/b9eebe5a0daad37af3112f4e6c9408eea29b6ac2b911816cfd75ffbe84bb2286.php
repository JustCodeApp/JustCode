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
        $__internal_a640ef333191749ebea50151dca137075130249f50ef7f26680f4f2658c5100c = $this->env->getExtension("native_profiler");
        $__internal_a640ef333191749ebea50151dca137075130249f50ef7f26680f4f2658c5100c->enter($__internal_a640ef333191749ebea50151dca137075130249f50ef7f26680f4f2658c5100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a640ef333191749ebea50151dca137075130249f50ef7f26680f4f2658c5100c->leave($__internal_a640ef333191749ebea50151dca137075130249f50ef7f26680f4f2658c5100c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49dde92ebd732ec9fd130f983460e66b5232da0b29782dac18d505e8bb63dc5a = $this->env->getExtension("native_profiler");
        $__internal_49dde92ebd732ec9fd130f983460e66b5232da0b29782dac18d505e8bb63dc5a->enter($__internal_49dde92ebd732ec9fd130f983460e66b5232da0b29782dac18d505e8bb63dc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49dde92ebd732ec9fd130f983460e66b5232da0b29782dac18d505e8bb63dc5a->leave($__internal_49dde92ebd732ec9fd130f983460e66b5232da0b29782dac18d505e8bb63dc5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7c6584f61952dda7ddfcb05829cdfb06d29d06f0275593b073e171b2e1fc8d8 = $this->env->getExtension("native_profiler");
        $__internal_d7c6584f61952dda7ddfcb05829cdfb06d29d06f0275593b073e171b2e1fc8d8->enter($__internal_d7c6584f61952dda7ddfcb05829cdfb06d29d06f0275593b073e171b2e1fc8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7c6584f61952dda7ddfcb05829cdfb06d29d06f0275593b073e171b2e1fc8d8->leave($__internal_d7c6584f61952dda7ddfcb05829cdfb06d29d06f0275593b073e171b2e1fc8d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09af580a110be48bb978af9fc7fc8f3814b4bed2ad0aa2be8e8cec99909a6fb2 = $this->env->getExtension("native_profiler");
        $__internal_09af580a110be48bb978af9fc7fc8f3814b4bed2ad0aa2be8e8cec99909a6fb2->enter($__internal_09af580a110be48bb978af9fc7fc8f3814b4bed2ad0aa2be8e8cec99909a6fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09af580a110be48bb978af9fc7fc8f3814b4bed2ad0aa2be8e8cec99909a6fb2->leave($__internal_09af580a110be48bb978af9fc7fc8f3814b4bed2ad0aa2be8e8cec99909a6fb2_prof);

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
