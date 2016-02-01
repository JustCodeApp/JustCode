<?php

/* :respuestascorrectas:edit.html.twig */
class __TwigTemplate_d5aca0c2b72cd79fa6b93eed4f20e5aadd70cf2e22271d1e50da0319f07ee95b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":respuestascorrectas:edit.html.twig", 1);
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
        $__internal_8aea834d662ad921224426ef3f47d3459e2a04a4b535b1898d3c8f517e73887c = $this->env->getExtension("native_profiler");
        $__internal_8aea834d662ad921224426ef3f47d3459e2a04a4b535b1898d3c8f517e73887c->enter($__internal_8aea834d662ad921224426ef3f47d3459e2a04a4b535b1898d3c8f517e73887c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":respuestascorrectas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aea834d662ad921224426ef3f47d3459e2a04a4b535b1898d3c8f517e73887c->leave($__internal_8aea834d662ad921224426ef3f47d3459e2a04a4b535b1898d3c8f517e73887c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1cebd6edcd12226a8270ed07de4b6ad56567baf49cb19575ee896c50a7bc205 = $this->env->getExtension("native_profiler");
        $__internal_e1cebd6edcd12226a8270ed07de4b6ad56567baf49cb19575ee896c50a7bc205->enter($__internal_e1cebd6edcd12226a8270ed07de4b6ad56567baf49cb19575ee896c50a7bc205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestascorrectas edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("respuestascorrectas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e1cebd6edcd12226a8270ed07de4b6ad56567baf49cb19575ee896c50a7bc205->leave($__internal_e1cebd6edcd12226a8270ed07de4b6ad56567baf49cb19575ee896c50a7bc205_prof);

    }

    public function getTemplateName()
    {
        return ":respuestascorrectas:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Respuestascorrectas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestascorrectas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
