<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0f15d8b739f402b414d9c5f6ff4c376981bfbaaa77e23fee08d5d89cc4ace48a extends Twig_Template
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
        $__internal_83c484e2de173d98d873b4110d11ff77a6e53e0cb393be9ed32e6c9ef8d84b34 = $this->env->getExtension("native_profiler");
        $__internal_83c484e2de173d98d873b4110d11ff77a6e53e0cb393be9ed32e6c9ef8d84b34->enter($__internal_83c484e2de173d98d873b4110d11ff77a6e53e0cb393be9ed32e6c9ef8d84b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_83c484e2de173d98d873b4110d11ff77a6e53e0cb393be9ed32e6c9ef8d84b34->leave($__internal_83c484e2de173d98d873b4110d11ff77a6e53e0cb393be9ed32e6c9ef8d84b34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
