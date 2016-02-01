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
        $__internal_9025f3abcece9e7436fb2c5e138d6255e8d76c19cfce59c7051c8786186948fe = $this->env->getExtension("native_profiler");
        $__internal_9025f3abcece9e7436fb2c5e138d6255e8d76c19cfce59c7051c8786186948fe->enter($__internal_9025f3abcece9e7436fb2c5e138d6255e8d76c19cfce59c7051c8786186948fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9025f3abcece9e7436fb2c5e138d6255e8d76c19cfce59c7051c8786186948fe->leave($__internal_9025f3abcece9e7436fb2c5e138d6255e8d76c19cfce59c7051c8786186948fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4abb6edc9bb7385978944159680679e5365df4bb9ed53efa40bb60dafc96d9e2 = $this->env->getExtension("native_profiler");
        $__internal_4abb6edc9bb7385978944159680679e5365df4bb9ed53efa40bb60dafc96d9e2->enter($__internal_4abb6edc9bb7385978944159680679e5365df4bb9ed53efa40bb60dafc96d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4abb6edc9bb7385978944159680679e5365df4bb9ed53efa40bb60dafc96d9e2->leave($__internal_4abb6edc9bb7385978944159680679e5365df4bb9ed53efa40bb60dafc96d9e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3802d167c589e64c0b3d30840c63fcb5c76fff01f603c1390091b89f530e861 = $this->env->getExtension("native_profiler");
        $__internal_a3802d167c589e64c0b3d30840c63fcb5c76fff01f603c1390091b89f530e861->enter($__internal_a3802d167c589e64c0b3d30840c63fcb5c76fff01f603c1390091b89f530e861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3802d167c589e64c0b3d30840c63fcb5c76fff01f603c1390091b89f530e861->leave($__internal_a3802d167c589e64c0b3d30840c63fcb5c76fff01f603c1390091b89f530e861_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9013e43c68005189ee8873505d789127ad204026e8cbe6d621b33b1baf8059b5 = $this->env->getExtension("native_profiler");
        $__internal_9013e43c68005189ee8873505d789127ad204026e8cbe6d621b33b1baf8059b5->enter($__internal_9013e43c68005189ee8873505d789127ad204026e8cbe6d621b33b1baf8059b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9013e43c68005189ee8873505d789127ad204026e8cbe6d621b33b1baf8059b5->leave($__internal_9013e43c68005189ee8873505d789127ad204026e8cbe6d621b33b1baf8059b5_prof);

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
