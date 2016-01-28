<?php

/* preguntas/show.html.twig */
class __TwigTemplate_f7202c826a0131fd03f65ff91b4e128b678b70c7920a5d715b5a4c9caa3121d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "preguntas/show.html.twig", 1);
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
        $__internal_a21d8a79271772bf87e1aa1694e3bd8621306cf8f41be480bd0ac8a2cff7c154 = $this->env->getExtension("native_profiler");
        $__internal_a21d8a79271772bf87e1aa1694e3bd8621306cf8f41be480bd0ac8a2cff7c154->enter($__internal_a21d8a79271772bf87e1aa1694e3bd8621306cf8f41be480bd0ac8a2cff7c154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preguntas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21d8a79271772bf87e1aa1694e3bd8621306cf8f41be480bd0ac8a2cff7c154->leave($__internal_a21d8a79271772bf87e1aa1694e3bd8621306cf8f41be480bd0ac8a2cff7c154_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f8595536bba2e0d0d12cff314bd66f13e289c253bd1b58365656dd98a3d470 = $this->env->getExtension("native_profiler");
        $__internal_73f8595536bba2e0d0d12cff314bd66f13e289c253bd1b58365656dd98a3d470->enter($__internal_73f8595536bba2e0d0d12cff314bd66f13e289c253bd1b58365656dd98a3d470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preguntas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpreguntas</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "idpreguntas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enunciado</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "enunciado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("preguntas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_edit", array("id" => $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "idpreguntas", array()))), "html", null, true);
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
        
        $__internal_73f8595536bba2e0d0d12cff314bd66f13e289c253bd1b58365656dd98a3d470->leave($__internal_73f8595536bba2e0d0d12cff314bd66f13e289c253bd1b58365656dd98a3d470_prof);

    }

    public function getTemplateName()
    {
        return "preguntas/show.html.twig";
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
/*     <h1>Preguntas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idpreguntas</th>*/
/*                 <td>{{ pregunta.idpreguntas }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Enunciado</th>*/
/*                 <td>{{ pregunta.enunciado }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('preguntas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('preguntas_edit', { 'id': pregunta.idpreguntas }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
