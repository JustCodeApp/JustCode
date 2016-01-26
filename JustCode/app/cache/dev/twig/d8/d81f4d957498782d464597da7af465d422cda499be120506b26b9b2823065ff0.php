<?php

/* respuestas/show.html.twig */
class __TwigTemplate_e11a30ed02c5257d71d2c93bc6989e6648f8c002fce0cacb3e2a97c34bee8edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "respuestas/show.html.twig", 1);
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
        $__internal_15d08f019b734a644144aada2fc6c0a9094f7e663cb9ebc0ff88c4e473f971f3 = $this->env->getExtension("native_profiler");
        $__internal_15d08f019b734a644144aada2fc6c0a9094f7e663cb9ebc0ff88c4e473f971f3->enter($__internal_15d08f019b734a644144aada2fc6c0a9094f7e663cb9ebc0ff88c4e473f971f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15d08f019b734a644144aada2fc6c0a9094f7e663cb9ebc0ff88c4e473f971f3->leave($__internal_15d08f019b734a644144aada2fc6c0a9094f7e663cb9ebc0ff88c4e473f971f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_956a6055494f8ce445e55f74d4693a568fdb472a0d1c357bef75ee7ed279564d = $this->env->getExtension("native_profiler");
        $__internal_956a6055494f8ce445e55f74d4693a568fdb472a0d1c357bef75ee7ed279564d->enter($__internal_956a6055494f8ce445e55f74d4693a568fdb472a0d1c357bef75ee7ed279564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("respuestas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_edit", array("id" => $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_956a6055494f8ce445e55f74d4693a568fdb472a0d1c357bef75ee7ed279564d->leave($__internal_956a6055494f8ce445e55f74d4693a568fdb472a0d1c357bef75ee7ed279564d_prof);

    }

    public function getTemplateName()
    {
        return "respuestas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
