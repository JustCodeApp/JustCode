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
        $__internal_94c1ce326863f43c23e6758bc1ea8ad644dcdb8826b1c668bd8140a04812d5bc = $this->env->getExtension("native_profiler");
        $__internal_94c1ce326863f43c23e6758bc1ea8ad644dcdb8826b1c668bd8140a04812d5bc->enter($__internal_94c1ce326863f43c23e6758bc1ea8ad644dcdb8826b1c668bd8140a04812d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c1ce326863f43c23e6758bc1ea8ad644dcdb8826b1c668bd8140a04812d5bc->leave($__internal_94c1ce326863f43c23e6758bc1ea8ad644dcdb8826b1c668bd8140a04812d5bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80469456a59b04d1b7ca4c605aa1b50d8c7d33eafba855b2b432f3be44d54951 = $this->env->getExtension("native_profiler");
        $__internal_80469456a59b04d1b7ca4c605aa1b50d8c7d33eafba855b2b432f3be44d54951->enter($__internal_80469456a59b04d1b7ca4c605aa1b50d8c7d33eafba855b2b432f3be44d54951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80469456a59b04d1b7ca4c605aa1b50d8c7d33eafba855b2b432f3be44d54951->leave($__internal_80469456a59b04d1b7ca4c605aa1b50d8c7d33eafba855b2b432f3be44d54951_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6ec00057c131927db4dc5cae16d803b3ada44cc531eb076c9efdafaeb8a5043 = $this->env->getExtension("native_profiler");
        $__internal_a6ec00057c131927db4dc5cae16d803b3ada44cc531eb076c9efdafaeb8a5043->enter($__internal_a6ec00057c131927db4dc5cae16d803b3ada44cc531eb076c9efdafaeb8a5043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6ec00057c131927db4dc5cae16d803b3ada44cc531eb076c9efdafaeb8a5043->leave($__internal_a6ec00057c131927db4dc5cae16d803b3ada44cc531eb076c9efdafaeb8a5043_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b94d992cb92682812b23b43ac8c22f172352f6b8c9c40686785aaf96ab5663d4 = $this->env->getExtension("native_profiler");
        $__internal_b94d992cb92682812b23b43ac8c22f172352f6b8c9c40686785aaf96ab5663d4->enter($__internal_b94d992cb92682812b23b43ac8c22f172352f6b8c9c40686785aaf96ab5663d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b94d992cb92682812b23b43ac8c22f172352f6b8c9c40686785aaf96ab5663d4->leave($__internal_b94d992cb92682812b23b43ac8c22f172352f6b8c9c40686785aaf96ab5663d4_prof);

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
