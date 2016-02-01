<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f3abb62c3bd42d3b0e52aae5696aac162e8914c23cdebc2ed6d6c8110fda889b extends Twig_Template
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
        $__internal_c5624087c438ae16c8fb5e02cf9896dee655af098df9e0b2a327d4793b35cd6b = $this->env->getExtension("native_profiler");
        $__internal_c5624087c438ae16c8fb5e02cf9896dee655af098df9e0b2a327d4793b35cd6b->enter($__internal_c5624087c438ae16c8fb5e02cf9896dee655af098df9e0b2a327d4793b35cd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c5624087c438ae16c8fb5e02cf9896dee655af098df9e0b2a327d4793b35cd6b->leave($__internal_c5624087c438ae16c8fb5e02cf9896dee655af098df9e0b2a327d4793b35cd6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
