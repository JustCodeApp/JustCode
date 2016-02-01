<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_dd0bc55be25604139fd2217c12e2f0c7d407186054cd31c168fb5c83064f7557 extends Twig_Template
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
        $__internal_a91319de05067c2509c818c887bfba3e0f1c7b784d0ead48a02dd35495163041 = $this->env->getExtension("native_profiler");
        $__internal_a91319de05067c2509c818c887bfba3e0f1c7b784d0ead48a02dd35495163041->enter($__internal_a91319de05067c2509c818c887bfba3e0f1c7b784d0ead48a02dd35495163041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a91319de05067c2509c818c887bfba3e0f1c7b784d0ead48a02dd35495163041->leave($__internal_a91319de05067c2509c818c887bfba3e0f1c7b784d0ead48a02dd35495163041_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
