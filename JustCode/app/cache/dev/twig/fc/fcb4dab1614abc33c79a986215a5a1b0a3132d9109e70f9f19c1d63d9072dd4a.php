<?php

/* respuestas/new.html.twig */
class __TwigTemplate_90c5002559bea85d7ac37b7b70698ec149ff4a6061a58f3163d8ff4844fdc8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "respuestas/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf65a6059433c23a563a19e4af8028465978f9e58c8e650560cd714a90f4b55f = $this->env->getExtension("native_profiler");
        $__internal_cf65a6059433c23a563a19e4af8028465978f9e58c8e650560cd714a90f4b55f->enter($__internal_cf65a6059433c23a563a19e4af8028465978f9e58c8e650560cd714a90f4b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf65a6059433c23a563a19e4af8028465978f9e58c8e650560cd714a90f4b55f->leave($__internal_cf65a6059433c23a563a19e4af8028465978f9e58c8e650560cd714a90f4b55f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9be39455453db5c26536092ca8136763c73502e82918a53225f68c78ea94b825 = $this->env->getExtension("native_profiler");
        $__internal_9be39455453db5c26536092ca8136763c73502e82918a53225f68c78ea94b825->enter($__internal_9be39455453db5c26536092ca8136763c73502e82918a53225f68c78ea94b825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("respuestas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9be39455453db5c26536092ca8136763c73502e82918a53225f68c78ea94b825->leave($__internal_9be39455453db5c26536092ca8136763c73502e82918a53225f68c78ea94b825_prof);

    }

    public function getTemplateName()
    {
        return "respuestas/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Respuestas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
