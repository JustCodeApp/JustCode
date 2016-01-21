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
        $__internal_34aeafbcb21cc0853f89b668ff32f185c840550bf24e6f90fd3d32de31ef16ba = $this->env->getExtension("native_profiler");
        $__internal_34aeafbcb21cc0853f89b668ff32f185c840550bf24e6f90fd3d32de31ef16ba->enter($__internal_34aeafbcb21cc0853f89b668ff32f185c840550bf24e6f90fd3d32de31ef16ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34aeafbcb21cc0853f89b668ff32f185c840550bf24e6f90fd3d32de31ef16ba->leave($__internal_34aeafbcb21cc0853f89b668ff32f185c840550bf24e6f90fd3d32de31ef16ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_134559e61e67917e8f37da45feeb21352f893756eb1af227892ae2efe3d3e3e7 = $this->env->getExtension("native_profiler");
        $__internal_134559e61e67917e8f37da45feeb21352f893756eb1af227892ae2efe3d3e3e7->enter($__internal_134559e61e67917e8f37da45feeb21352f893756eb1af227892ae2efe3d3e3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_134559e61e67917e8f37da45feeb21352f893756eb1af227892ae2efe3d3e3e7->leave($__internal_134559e61e67917e8f37da45feeb21352f893756eb1af227892ae2efe3d3e3e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25a0aa886e9cb7b9b373fd1bd4562393ffcfca519a6093422ee54d832269e765 = $this->env->getExtension("native_profiler");
        $__internal_25a0aa886e9cb7b9b373fd1bd4562393ffcfca519a6093422ee54d832269e765->enter($__internal_25a0aa886e9cb7b9b373fd1bd4562393ffcfca519a6093422ee54d832269e765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25a0aa886e9cb7b9b373fd1bd4562393ffcfca519a6093422ee54d832269e765->leave($__internal_25a0aa886e9cb7b9b373fd1bd4562393ffcfca519a6093422ee54d832269e765_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7da55eff939210a8a32507473fd4ea7e4a2f4bf4a3db5aa490a6cf5daa8b0321 = $this->env->getExtension("native_profiler");
        $__internal_7da55eff939210a8a32507473fd4ea7e4a2f4bf4a3db5aa490a6cf5daa8b0321->enter($__internal_7da55eff939210a8a32507473fd4ea7e4a2f4bf4a3db5aa490a6cf5daa8b0321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7da55eff939210a8a32507473fd4ea7e4a2f4bf4a3db5aa490a6cf5daa8b0321->leave($__internal_7da55eff939210a8a32507473fd4ea7e4a2f4bf4a3db5aa490a6cf5daa8b0321_prof);

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
