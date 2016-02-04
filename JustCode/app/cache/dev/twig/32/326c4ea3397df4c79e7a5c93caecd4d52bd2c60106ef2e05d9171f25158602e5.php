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
        $__internal_57c46d8dc71d7c3da66a0b477d5d5c30111f5a1eee1c2298dd7db0b7a66d2bcd = $this->env->getExtension("native_profiler");
        $__internal_57c46d8dc71d7c3da66a0b477d5d5c30111f5a1eee1c2298dd7db0b7a66d2bcd->enter($__internal_57c46d8dc71d7c3da66a0b477d5d5c30111f5a1eee1c2298dd7db0b7a66d2bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c46d8dc71d7c3da66a0b477d5d5c30111f5a1eee1c2298dd7db0b7a66d2bcd->leave($__internal_57c46d8dc71d7c3da66a0b477d5d5c30111f5a1eee1c2298dd7db0b7a66d2bcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_059d6bd23040750b24451711f841972e5e72b7a5c77e6f18f3473d5ea23f7c7d = $this->env->getExtension("native_profiler");
        $__internal_059d6bd23040750b24451711f841972e5e72b7a5c77e6f18f3473d5ea23f7c7d->enter($__internal_059d6bd23040750b24451711f841972e5e72b7a5c77e6f18f3473d5ea23f7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_059d6bd23040750b24451711f841972e5e72b7a5c77e6f18f3473d5ea23f7c7d->leave($__internal_059d6bd23040750b24451711f841972e5e72b7a5c77e6f18f3473d5ea23f7c7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a6888c1cecee3f78307329506a910640ae49e6381e13031d618199dfa1c7cfe = $this->env->getExtension("native_profiler");
        $__internal_9a6888c1cecee3f78307329506a910640ae49e6381e13031d618199dfa1c7cfe->enter($__internal_9a6888c1cecee3f78307329506a910640ae49e6381e13031d618199dfa1c7cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a6888c1cecee3f78307329506a910640ae49e6381e13031d618199dfa1c7cfe->leave($__internal_9a6888c1cecee3f78307329506a910640ae49e6381e13031d618199dfa1c7cfe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_508a058d311be0a7a2ec4701be99354b22c36dbbb2ca0e13428b2e39ae1c762e = $this->env->getExtension("native_profiler");
        $__internal_508a058d311be0a7a2ec4701be99354b22c36dbbb2ca0e13428b2e39ae1c762e->enter($__internal_508a058d311be0a7a2ec4701be99354b22c36dbbb2ca0e13428b2e39ae1c762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_508a058d311be0a7a2ec4701be99354b22c36dbbb2ca0e13428b2e39ae1c762e->leave($__internal_508a058d311be0a7a2ec4701be99354b22c36dbbb2ca0e13428b2e39ae1c762e_prof);

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
