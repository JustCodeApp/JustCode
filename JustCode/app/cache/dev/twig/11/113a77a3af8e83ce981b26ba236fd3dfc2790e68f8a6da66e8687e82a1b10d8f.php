<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3472ddc9777d117c2051be23f4f05a1d663bdaa2986479c6c1c4e22754e5c0f2 extends Twig_Template
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
        $__internal_1eda08eccad678e10b0f50fc551b1a6d57ae622372fc050becbb7bb9af7b0063 = $this->env->getExtension("native_profiler");
        $__internal_1eda08eccad678e10b0f50fc551b1a6d57ae622372fc050becbb7bb9af7b0063->enter($__internal_1eda08eccad678e10b0f50fc551b1a6d57ae622372fc050becbb7bb9af7b0063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1eda08eccad678e10b0f50fc551b1a6d57ae622372fc050becbb7bb9af7b0063->leave($__internal_1eda08eccad678e10b0f50fc551b1a6d57ae622372fc050becbb7bb9af7b0063_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
