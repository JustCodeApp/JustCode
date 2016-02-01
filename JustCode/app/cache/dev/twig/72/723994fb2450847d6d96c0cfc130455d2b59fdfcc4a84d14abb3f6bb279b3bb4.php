<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f3d519026d1cf39bc8aa6a64e6465e66eedab1bfcfbe0471644ae4206e2f18f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_43fbcf9bc2596501acd0edee8ccd1f75c8184eddd2be2b103576af9aaaa864d7 = $this->env->getExtension("native_profiler");
        $__internal_43fbcf9bc2596501acd0edee8ccd1f75c8184eddd2be2b103576af9aaaa864d7->enter($__internal_43fbcf9bc2596501acd0edee8ccd1f75c8184eddd2be2b103576af9aaaa864d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43fbcf9bc2596501acd0edee8ccd1f75c8184eddd2be2b103576af9aaaa864d7->leave($__internal_43fbcf9bc2596501acd0edee8ccd1f75c8184eddd2be2b103576af9aaaa864d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d4f18555b82d92914fcd77d7e78a6b18e570228d05fa5f373949d3a72154db2 = $this->env->getExtension("native_profiler");
        $__internal_8d4f18555b82d92914fcd77d7e78a6b18e570228d05fa5f373949d3a72154db2->enter($__internal_8d4f18555b82d92914fcd77d7e78a6b18e570228d05fa5f373949d3a72154db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d4f18555b82d92914fcd77d7e78a6b18e570228d05fa5f373949d3a72154db2->leave($__internal_8d4f18555b82d92914fcd77d7e78a6b18e570228d05fa5f373949d3a72154db2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5d70b1b7fdeabfa46b92dd4710068dd2242c99c8728d88deb9e3ecf9860f8ef = $this->env->getExtension("native_profiler");
        $__internal_c5d70b1b7fdeabfa46b92dd4710068dd2242c99c8728d88deb9e3ecf9860f8ef->enter($__internal_c5d70b1b7fdeabfa46b92dd4710068dd2242c99c8728d88deb9e3ecf9860f8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c5d70b1b7fdeabfa46b92dd4710068dd2242c99c8728d88deb9e3ecf9860f8ef->leave($__internal_c5d70b1b7fdeabfa46b92dd4710068dd2242c99c8728d88deb9e3ecf9860f8ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
