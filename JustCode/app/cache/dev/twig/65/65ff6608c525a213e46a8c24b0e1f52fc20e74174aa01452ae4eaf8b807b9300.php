<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_70397bcf554fe5e02986b40fa67853db28656a3cd1ee9fc2680082884bc02a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad94e8d707b05f13f2f0bb43c2a5cf1a68d2621817b5bf8e8235bb5bdb0264e = $this->env->getExtension("native_profiler");
        $__internal_3ad94e8d707b05f13f2f0bb43c2a5cf1a68d2621817b5bf8e8235bb5bdb0264e->enter($__internal_3ad94e8d707b05f13f2f0bb43c2a5cf1a68d2621817b5bf8e8235bb5bdb0264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3ad94e8d707b05f13f2f0bb43c2a5cf1a68d2621817b5bf8e8235bb5bdb0264e->leave($__internal_3ad94e8d707b05f13f2f0bb43c2a5cf1a68d2621817b5bf8e8235bb5bdb0264e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
