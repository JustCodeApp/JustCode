<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_52d0ce06cf105ab0e7aed35f413cb611fd3ac856dac8c2fb497d3069d8628ea8 extends Twig_Template
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
        $__internal_65e8ff281f5fcea1b3c4d20417faf91d646cf268be9596bb547666e49bed0d74 = $this->env->getExtension("native_profiler");
        $__internal_65e8ff281f5fcea1b3c4d20417faf91d646cf268be9596bb547666e49bed0d74->enter($__internal_65e8ff281f5fcea1b3c4d20417faf91d646cf268be9596bb547666e49bed0d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_65e8ff281f5fcea1b3c4d20417faf91d646cf268be9596bb547666e49bed0d74->leave($__internal_65e8ff281f5fcea1b3c4d20417faf91d646cf268be9596bb547666e49bed0d74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
