<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_28b17a7ae186a08e14913b2819f6549225569e20dc1e5c023e55a68e75761979 extends Twig_Template
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
        $__internal_d977990d1d8febae1ed6cb347a2544b3895adad7f1aaa0a0cf738ef3e17dc903 = $this->env->getExtension("native_profiler");
        $__internal_d977990d1d8febae1ed6cb347a2544b3895adad7f1aaa0a0cf738ef3e17dc903->enter($__internal_d977990d1d8febae1ed6cb347a2544b3895adad7f1aaa0a0cf738ef3e17dc903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d977990d1d8febae1ed6cb347a2544b3895adad7f1aaa0a0cf738ef3e17dc903->leave($__internal_d977990d1d8febae1ed6cb347a2544b3895adad7f1aaa0a0cf738ef3e17dc903_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
