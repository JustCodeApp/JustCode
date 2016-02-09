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
        $__internal_efb1ac84e8235fac0fbef64bd4941e218d674c58c11a6d3d433d84f6fa037d21 = $this->env->getExtension("native_profiler");
        $__internal_efb1ac84e8235fac0fbef64bd4941e218d674c58c11a6d3d433d84f6fa037d21->enter($__internal_efb1ac84e8235fac0fbef64bd4941e218d674c58c11a6d3d433d84f6fa037d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb1ac84e8235fac0fbef64bd4941e218d674c58c11a6d3d433d84f6fa037d21->leave($__internal_efb1ac84e8235fac0fbef64bd4941e218d674c58c11a6d3d433d84f6fa037d21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4fe2ea92b12d4e3f0f290066c2bb91ebe0b59faa9e71352439608ca50cf873f = $this->env->getExtension("native_profiler");
        $__internal_b4fe2ea92b12d4e3f0f290066c2bb91ebe0b59faa9e71352439608ca50cf873f->enter($__internal_b4fe2ea92b12d4e3f0f290066c2bb91ebe0b59faa9e71352439608ca50cf873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4fe2ea92b12d4e3f0f290066c2bb91ebe0b59faa9e71352439608ca50cf873f->leave($__internal_b4fe2ea92b12d4e3f0f290066c2bb91ebe0b59faa9e71352439608ca50cf873f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_070c39eaabd3b37af4923f5c8d728e2df72fedea69041d5b68ce18d24164470a = $this->env->getExtension("native_profiler");
        $__internal_070c39eaabd3b37af4923f5c8d728e2df72fedea69041d5b68ce18d24164470a->enter($__internal_070c39eaabd3b37af4923f5c8d728e2df72fedea69041d5b68ce18d24164470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_070c39eaabd3b37af4923f5c8d728e2df72fedea69041d5b68ce18d24164470a->leave($__internal_070c39eaabd3b37af4923f5c8d728e2df72fedea69041d5b68ce18d24164470a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab8fcdda7c646d565f2f74742d3b33649da61444781a8382174377783303188e = $this->env->getExtension("native_profiler");
        $__internal_ab8fcdda7c646d565f2f74742d3b33649da61444781a8382174377783303188e->enter($__internal_ab8fcdda7c646d565f2f74742d3b33649da61444781a8382174377783303188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab8fcdda7c646d565f2f74742d3b33649da61444781a8382174377783303188e->leave($__internal_ab8fcdda7c646d565f2f74742d3b33649da61444781a8382174377783303188e_prof);

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
