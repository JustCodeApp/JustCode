<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1e154781d58cc12ea18da644ef225e61dde914bcf358388d17f41fd6235e2366 extends Twig_Template
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
        $__internal_a5f117a4bdbb6f313a63eafd090bf240ccd84c915e3fcbf612fe700e38c23320 = $this->env->getExtension("native_profiler");
        $__internal_a5f117a4bdbb6f313a63eafd090bf240ccd84c915e3fcbf612fe700e38c23320->enter($__internal_a5f117a4bdbb6f313a63eafd090bf240ccd84c915e3fcbf612fe700e38c23320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5f117a4bdbb6f313a63eafd090bf240ccd84c915e3fcbf612fe700e38c23320->leave($__internal_a5f117a4bdbb6f313a63eafd090bf240ccd84c915e3fcbf612fe700e38c23320_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
