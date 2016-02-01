<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d1c4e475fa96393b324c3ee503980cc7efec0aa71e2e0f2bf6e3f594a585ad61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e1988690ea26d8a994664c422438e390f6849548813842d60ad544e9b3b3a7b2 = $this->env->getExtension("native_profiler");
        $__internal_e1988690ea26d8a994664c422438e390f6849548813842d60ad544e9b3b3a7b2->enter($__internal_e1988690ea26d8a994664c422438e390f6849548813842d60ad544e9b3b3a7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1988690ea26d8a994664c422438e390f6849548813842d60ad544e9b3b3a7b2->leave($__internal_e1988690ea26d8a994664c422438e390f6849548813842d60ad544e9b3b3a7b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e104451e1846e605bcfd75ff2d931ad5ca74b85dc77be522a01f3a9340adf96c = $this->env->getExtension("native_profiler");
        $__internal_e104451e1846e605bcfd75ff2d931ad5ca74b85dc77be522a01f3a9340adf96c->enter($__internal_e104451e1846e605bcfd75ff2d931ad5ca74b85dc77be522a01f3a9340adf96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e104451e1846e605bcfd75ff2d931ad5ca74b85dc77be522a01f3a9340adf96c->leave($__internal_e104451e1846e605bcfd75ff2d931ad5ca74b85dc77be522a01f3a9340adf96c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b5f49f0096737fcf6e7d82135ac23df9f84d9eba600cbdb0ee3c4edac140b1a = $this->env->getExtension("native_profiler");
        $__internal_2b5f49f0096737fcf6e7d82135ac23df9f84d9eba600cbdb0ee3c4edac140b1a->enter($__internal_2b5f49f0096737fcf6e7d82135ac23df9f84d9eba600cbdb0ee3c4edac140b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b5f49f0096737fcf6e7d82135ac23df9f84d9eba600cbdb0ee3c4edac140b1a->leave($__internal_2b5f49f0096737fcf6e7d82135ac23df9f84d9eba600cbdb0ee3c4edac140b1a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_046953ab6cad93eb40e6c85f5ad4cf9f1f2db4ea883890dd37d61966645d22b2 = $this->env->getExtension("native_profiler");
        $__internal_046953ab6cad93eb40e6c85f5ad4cf9f1f2db4ea883890dd37d61966645d22b2->enter($__internal_046953ab6cad93eb40e6c85f5ad4cf9f1f2db4ea883890dd37d61966645d22b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_046953ab6cad93eb40e6c85f5ad4cf9f1f2db4ea883890dd37d61966645d22b2->leave($__internal_046953ab6cad93eb40e6c85f5ad4cf9f1f2db4ea883890dd37d61966645d22b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
