<?php

/* preguntas/edit.html.twig */
class __TwigTemplate_221641d908f7156532685864969623e01384792d8f1405ab3b323cfccc70ec14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "preguntas/edit.html.twig", 1);
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
        $__internal_2cae33f2b5bc02793e3d278c647bbd336e051a0d70ac5d876934d1f489359088 = $this->env->getExtension("native_profiler");
        $__internal_2cae33f2b5bc02793e3d278c647bbd336e051a0d70ac5d876934d1f489359088->enter($__internal_2cae33f2b5bc02793e3d278c647bbd336e051a0d70ac5d876934d1f489359088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preguntas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cae33f2b5bc02793e3d278c647bbd336e051a0d70ac5d876934d1f489359088->leave($__internal_2cae33f2b5bc02793e3d278c647bbd336e051a0d70ac5d876934d1f489359088_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c86edd70e91f9039c11bf094a42a148b4986e44042911cc6f62ddda99624953 = $this->env->getExtension("native_profiler");
        $__internal_6c86edd70e91f9039c11bf094a42a148b4986e44042911cc6f62ddda99624953->enter($__internal_6c86edd70e91f9039c11bf094a42a148b4986e44042911cc6f62ddda99624953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preguntas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("preguntas_index");
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
        
        $__internal_6c86edd70e91f9039c11bf094a42a148b4986e44042911cc6f62ddda99624953->leave($__internal_6c86edd70e91f9039c11bf094a42a148b4986e44042911cc6f62ddda99624953_prof);

    }

    public function getTemplateName()
    {
        return "preguntas/edit.html.twig";
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
/*     <h1>Preguntas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('preguntas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
