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
        $__internal_0f9a53e647329b5592609210c029ae97a863db58a75a2bd379f6b20a7d8dff5b = $this->env->getExtension("native_profiler");
        $__internal_0f9a53e647329b5592609210c029ae97a863db58a75a2bd379f6b20a7d8dff5b->enter($__internal_0f9a53e647329b5592609210c029ae97a863db58a75a2bd379f6b20a7d8dff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9a53e647329b5592609210c029ae97a863db58a75a2bd379f6b20a7d8dff5b->leave($__internal_0f9a53e647329b5592609210c029ae97a863db58a75a2bd379f6b20a7d8dff5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca36dd748745851f598ec97c7686dbf6c0c23156347985d39805d72cb7946a4f = $this->env->getExtension("native_profiler");
        $__internal_ca36dd748745851f598ec97c7686dbf6c0c23156347985d39805d72cb7946a4f->enter($__internal_ca36dd748745851f598ec97c7686dbf6c0c23156347985d39805d72cb7946a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca36dd748745851f598ec97c7686dbf6c0c23156347985d39805d72cb7946a4f->leave($__internal_ca36dd748745851f598ec97c7686dbf6c0c23156347985d39805d72cb7946a4f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9138ba7ad907eb2a166312dedcb3b7f3d563d5e3d9375978faf022460977ecf0 = $this->env->getExtension("native_profiler");
        $__internal_9138ba7ad907eb2a166312dedcb3b7f3d563d5e3d9375978faf022460977ecf0->enter($__internal_9138ba7ad907eb2a166312dedcb3b7f3d563d5e3d9375978faf022460977ecf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9138ba7ad907eb2a166312dedcb3b7f3d563d5e3d9375978faf022460977ecf0->leave($__internal_9138ba7ad907eb2a166312dedcb3b7f3d563d5e3d9375978faf022460977ecf0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6da0c9a54414ede072a21a5cfafed07528fa8833eb54476e4d8aa460c9a5ffa = $this->env->getExtension("native_profiler");
        $__internal_a6da0c9a54414ede072a21a5cfafed07528fa8833eb54476e4d8aa460c9a5ffa->enter($__internal_a6da0c9a54414ede072a21a5cfafed07528fa8833eb54476e4d8aa460c9a5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a6da0c9a54414ede072a21a5cfafed07528fa8833eb54476e4d8aa460c9a5ffa->leave($__internal_a6da0c9a54414ede072a21a5cfafed07528fa8833eb54476e4d8aa460c9a5ffa_prof);

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
