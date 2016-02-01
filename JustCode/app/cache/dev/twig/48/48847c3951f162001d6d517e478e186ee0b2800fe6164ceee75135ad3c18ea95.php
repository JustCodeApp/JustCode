<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c67c5d31b340d4d330f3caeb70a5cb31b3334dfbefff2f8b931f6052de53fe93 extends Twig_Template
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
        $__internal_7658517437b3984f291ec83859fef41e1f1e39041858e829e3ccfc8bdf17fc1c = $this->env->getExtension("native_profiler");
        $__internal_7658517437b3984f291ec83859fef41e1f1e39041858e829e3ccfc8bdf17fc1c->enter($__internal_7658517437b3984f291ec83859fef41e1f1e39041858e829e3ccfc8bdf17fc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7658517437b3984f291ec83859fef41e1f1e39041858e829e3ccfc8bdf17fc1c->leave($__internal_7658517437b3984f291ec83859fef41e1f1e39041858e829e3ccfc8bdf17fc1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
