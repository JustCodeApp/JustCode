<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_32699000e4369f69acc98b84062694253087cf5201bbd1cdf53fc1782d2ac790 extends Twig_Template
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
        $__internal_fc869b285c29e05797354f13ba38c73329b5e050b8bad0f2fdd37c4cea97b55a = $this->env->getExtension("native_profiler");
        $__internal_fc869b285c29e05797354f13ba38c73329b5e050b8bad0f2fdd37c4cea97b55a->enter($__internal_fc869b285c29e05797354f13ba38c73329b5e050b8bad0f2fdd37c4cea97b55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc869b285c29e05797354f13ba38c73329b5e050b8bad0f2fdd37c4cea97b55a->leave($__internal_fc869b285c29e05797354f13ba38c73329b5e050b8bad0f2fdd37c4cea97b55a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
