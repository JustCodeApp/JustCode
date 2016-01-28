<?php

/* respuestas/edit.html.twig */
class __TwigTemplate_7999d9d6fdc8a24a5e698407dcaea0ac97962fd9845704a18e77a3c1137904ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "respuestas/edit.html.twig", 1);
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
        $__internal_3b49e0a34cb1f031f8935dab77c21d4a4905f7c9a9c1b200cb5be32b02a96dde = $this->env->getExtension("native_profiler");
        $__internal_3b49e0a34cb1f031f8935dab77c21d4a4905f7c9a9c1b200cb5be32b02a96dde->enter($__internal_3b49e0a34cb1f031f8935dab77c21d4a4905f7c9a9c1b200cb5be32b02a96dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b49e0a34cb1f031f8935dab77c21d4a4905f7c9a9c1b200cb5be32b02a96dde->leave($__internal_3b49e0a34cb1f031f8935dab77c21d4a4905f7c9a9c1b200cb5be32b02a96dde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5721339c4acf64c537a29cb95097158ba62bf0e22df3c96b8b8705935bf74cc2 = $this->env->getExtension("native_profiler");
        $__internal_5721339c4acf64c537a29cb95097158ba62bf0e22df3c96b8b8705935bf74cc2->enter($__internal_5721339c4acf64c537a29cb95097158ba62bf0e22df3c96b8b8705935bf74cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("respuestas_index");
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
        
        $__internal_5721339c4acf64c537a29cb95097158ba62bf0e22df3c96b8b8705935bf74cc2->leave($__internal_5721339c4acf64c537a29cb95097158ba62bf0e22df3c96b8b8705935bf74cc2_prof);

    }

    public function getTemplateName()
    {
        return "respuestas/edit.html.twig";
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
/*     <h1>Respuestas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
