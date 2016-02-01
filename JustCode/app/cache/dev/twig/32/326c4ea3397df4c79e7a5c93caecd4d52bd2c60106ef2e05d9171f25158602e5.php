<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1c4e475fa96393b324c3ee503980cc7efec0aa71e2e0f2bf6e3f594a585ad61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00eb982f02e3747c40693fd4eda1e897d4a41618ef6edf4e97b4fd2e621931ec = $this->env->getExtension("native_profiler");
        $__internal_00eb982f02e3747c40693fd4eda1e897d4a41618ef6edf4e97b4fd2e621931ec->enter($__internal_00eb982f02e3747c40693fd4eda1e897d4a41618ef6edf4e97b4fd2e621931ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00eb982f02e3747c40693fd4eda1e897d4a41618ef6edf4e97b4fd2e621931ec->leave($__internal_00eb982f02e3747c40693fd4eda1e897d4a41618ef6edf4e97b4fd2e621931ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c632e39d3ba419082963b81d0d6a11341a88f199574256a514348315b9d11de = $this->env->getExtension("native_profiler");
        $__internal_7c632e39d3ba419082963b81d0d6a11341a88f199574256a514348315b9d11de->enter($__internal_7c632e39d3ba419082963b81d0d6a11341a88f199574256a514348315b9d11de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c632e39d3ba419082963b81d0d6a11341a88f199574256a514348315b9d11de->leave($__internal_7c632e39d3ba419082963b81d0d6a11341a88f199574256a514348315b9d11de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a78d7a0627ae76e0f1b62f53ccaae3aa89cf89fe1b6ae0cc838f0e5c45b73aa4 = $this->env->getExtension("native_profiler");
        $__internal_a78d7a0627ae76e0f1b62f53ccaae3aa89cf89fe1b6ae0cc838f0e5c45b73aa4->enter($__internal_a78d7a0627ae76e0f1b62f53ccaae3aa89cf89fe1b6ae0cc838f0e5c45b73aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a78d7a0627ae76e0f1b62f53ccaae3aa89cf89fe1b6ae0cc838f0e5c45b73aa4->leave($__internal_a78d7a0627ae76e0f1b62f53ccaae3aa89cf89fe1b6ae0cc838f0e5c45b73aa4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3421f8f4293f26d58878b898721da9d81980f3ecef0aaa427ba9e188e30a0e3 = $this->env->getExtension("native_profiler");
        $__internal_a3421f8f4293f26d58878b898721da9d81980f3ecef0aaa427ba9e188e30a0e3->enter($__internal_a3421f8f4293f26d58878b898721da9d81980f3ecef0aaa427ba9e188e30a0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a3421f8f4293f26d58878b898721da9d81980f3ecef0aaa427ba9e188e30a0e3->leave($__internal_a3421f8f4293f26d58878b898721da9d81980f3ecef0aaa427ba9e188e30a0e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
