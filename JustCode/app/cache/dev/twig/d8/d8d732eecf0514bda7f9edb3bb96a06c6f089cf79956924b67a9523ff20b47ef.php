<?php

/* preguntas/new.html.twig */
class __TwigTemplate_9da44afbab19865eede1bdac542c5f144afd3ea96dcdedfc9acb9ae9a0e73540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "preguntas/new.html.twig", 1);
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
        $__internal_8c167371d4f69e829eaaf8c4951e98f2460977e3faa9341c514f0576bed2a708 = $this->env->getExtension("native_profiler");
        $__internal_8c167371d4f69e829eaaf8c4951e98f2460977e3faa9341c514f0576bed2a708->enter($__internal_8c167371d4f69e829eaaf8c4951e98f2460977e3faa9341c514f0576bed2a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preguntas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c167371d4f69e829eaaf8c4951e98f2460977e3faa9341c514f0576bed2a708->leave($__internal_8c167371d4f69e829eaaf8c4951e98f2460977e3faa9341c514f0576bed2a708_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87bc7ca49b22dacb185c1b00b664fbede7828e241e6ae97cfc9dc5722fdf17c6 = $this->env->getExtension("native_profiler");
        $__internal_87bc7ca49b22dacb185c1b00b664fbede7828e241e6ae97cfc9dc5722fdf17c6->enter($__internal_87bc7ca49b22dacb185c1b00b664fbede7828e241e6ae97cfc9dc5722fdf17c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preguntas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("preguntas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_87bc7ca49b22dacb185c1b00b664fbede7828e241e6ae97cfc9dc5722fdf17c6->leave($__internal_87bc7ca49b22dacb185c1b00b664fbede7828e241e6ae97cfc9dc5722fdf17c6_prof);

    }

    public function getTemplateName()
    {
        return "preguntas/new.html.twig";
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
/*     <h1>Preguntas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('preguntas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
