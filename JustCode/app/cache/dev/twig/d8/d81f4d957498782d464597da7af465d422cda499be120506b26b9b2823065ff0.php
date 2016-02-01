<?php

/* :respuestas:show.html.twig */
class __TwigTemplate_e11a30ed02c5257d71d2c93bc6989e6648f8c002fce0cacb3e2a97c34bee8edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":respuestas:show.html.twig", 1);
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
        $__internal_dbffa1db6160ec49186f792b7b3063126beae6fc1003f5c7c5db3a4f475d00c1 = $this->env->getExtension("native_profiler");
        $__internal_dbffa1db6160ec49186f792b7b3063126beae6fc1003f5c7c5db3a4f475d00c1->enter($__internal_dbffa1db6160ec49186f792b7b3063126beae6fc1003f5c7c5db3a4f475d00c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":respuestas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbffa1db6160ec49186f792b7b3063126beae6fc1003f5c7c5db3a4f475d00c1->leave($__internal_dbffa1db6160ec49186f792b7b3063126beae6fc1003f5c7c5db3a4f475d00c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9bb71aa41f779234f5e271976927bfe5116c9c0fa8e8aa471fd232166980c7b = $this->env->getExtension("native_profiler");
        $__internal_c9bb71aa41f779234f5e271976927bfe5116c9c0fa8e8aa471fd232166980c7b->enter($__internal_c9bb71aa41f779234f5e271976927bfe5116c9c0fa8e8aa471fd232166980c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enunciado</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "enunciado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("respuestas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_edit", array("id" => $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c9bb71aa41f779234f5e271976927bfe5116c9c0fa8e8aa471fd232166980c7b->leave($__internal_c9bb71aa41f779234f5e271976927bfe5116c9c0fa8e8aa471fd232166980c7b_prof);

    }

    public function getTemplateName()
    {
        return ":respuestas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Respuestas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ respuesta.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Enunciado</th>*/
/*                 <td>{{ respuesta.enunciado }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_edit', { 'id': respuesta.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
