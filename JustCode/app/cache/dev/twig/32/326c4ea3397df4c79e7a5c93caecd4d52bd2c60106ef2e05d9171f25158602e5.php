<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1c4e475fa96393b324c3ee503980cc7efec0aa71e2e0f2bf6e3f594a585ad61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69808e01ab374993ab7c70e6aa585c689dfecf500961d1db50eb054fa3bf63ac = $this->env->getExtension("native_profiler");
        $__internal_69808e01ab374993ab7c70e6aa585c689dfecf500961d1db50eb054fa3bf63ac->enter($__internal_69808e01ab374993ab7c70e6aa585c689dfecf500961d1db50eb054fa3bf63ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69808e01ab374993ab7c70e6aa585c689dfecf500961d1db50eb054fa3bf63ac->leave($__internal_69808e01ab374993ab7c70e6aa585c689dfecf500961d1db50eb054fa3bf63ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b62a67cf964f8d09ef59912f6afe0682cc84279bcbdae946e8d60defddf926dd = $this->env->getExtension("native_profiler");
        $__internal_b62a67cf964f8d09ef59912f6afe0682cc84279bcbdae946e8d60defddf926dd->enter($__internal_b62a67cf964f8d09ef59912f6afe0682cc84279bcbdae946e8d60defddf926dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b62a67cf964f8d09ef59912f6afe0682cc84279bcbdae946e8d60defddf926dd->leave($__internal_b62a67cf964f8d09ef59912f6afe0682cc84279bcbdae946e8d60defddf926dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e6e856cebd977920545c6bc2289e4ce5d6109fb93bc32c275a27dc9b486fadc = $this->env->getExtension("native_profiler");
        $__internal_3e6e856cebd977920545c6bc2289e4ce5d6109fb93bc32c275a27dc9b486fadc->enter($__internal_3e6e856cebd977920545c6bc2289e4ce5d6109fb93bc32c275a27dc9b486fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e6e856cebd977920545c6bc2289e4ce5d6109fb93bc32c275a27dc9b486fadc->leave($__internal_3e6e856cebd977920545c6bc2289e4ce5d6109fb93bc32c275a27dc9b486fadc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b133c5fb6bd7124e001b772912e2fe3fce297a29b35075b99f6f6d8c5d570b27 = $this->env->getExtension("native_profiler");
        $__internal_b133c5fb6bd7124e001b772912e2fe3fce297a29b35075b99f6f6d8c5d570b27->enter($__internal_b133c5fb6bd7124e001b772912e2fe3fce297a29b35075b99f6f6d8c5d570b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b133c5fb6bd7124e001b772912e2fe3fce297a29b35075b99f6f6d8c5d570b27->leave($__internal_b133c5fb6bd7124e001b772912e2fe3fce297a29b35075b99f6f6d8c5d570b27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
