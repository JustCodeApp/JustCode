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
        $__internal_06c1cc96ebf78ebff6f1437e851059d80e420c76f45ca7df323222ff2b855748 = $this->env->getExtension("native_profiler");
        $__internal_06c1cc96ebf78ebff6f1437e851059d80e420c76f45ca7df323222ff2b855748->enter($__internal_06c1cc96ebf78ebff6f1437e851059d80e420c76f45ca7df323222ff2b855748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c1cc96ebf78ebff6f1437e851059d80e420c76f45ca7df323222ff2b855748->leave($__internal_06c1cc96ebf78ebff6f1437e851059d80e420c76f45ca7df323222ff2b855748_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81f7c75d879e7e5a35d5c0422cef4f9c56ccd86fbcbbd490f871ef57c21714e2 = $this->env->getExtension("native_profiler");
        $__internal_81f7c75d879e7e5a35d5c0422cef4f9c56ccd86fbcbbd490f871ef57c21714e2->enter($__internal_81f7c75d879e7e5a35d5c0422cef4f9c56ccd86fbcbbd490f871ef57c21714e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idrespuestas</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "idrespuestas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textorespuesta</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "textoRespuesta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correcta</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "correcta", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("respuestas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_edit", array("id" => $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "idrespuestas", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_81f7c75d879e7e5a35d5c0422cef4f9c56ccd86fbcbbd490f871ef57c21714e2->leave($__internal_81f7c75d879e7e5a35d5c0422cef4f9c56ccd86fbcbbd490f871ef57c21714e2_prof);

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
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Idrespuestas</th>*/
/*                 <td>{{ respuesta.idrespuestas }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Textorespuesta</th>*/
/*                 <td>{{ respuesta.textoRespuesta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correcta</th>*/
/*                 <td>{% if respuesta.correcta %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_edit', { 'id': respuesta.idrespuestas }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
