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
        $__internal_93101dddb9a66a07a28f65b18799400160783b91d6cd42e321f89cebc003d65a = $this->env->getExtension("native_profiler");
        $__internal_93101dddb9a66a07a28f65b18799400160783b91d6cd42e321f89cebc003d65a->enter($__internal_93101dddb9a66a07a28f65b18799400160783b91d6cd42e321f89cebc003d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93101dddb9a66a07a28f65b18799400160783b91d6cd42e321f89cebc003d65a->leave($__internal_93101dddb9a66a07a28f65b18799400160783b91d6cd42e321f89cebc003d65a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffa8a5b477a53ce26bd34c043bdfc76168017634931082c3dade800e2f10586b = $this->env->getExtension("native_profiler");
        $__internal_ffa8a5b477a53ce26bd34c043bdfc76168017634931082c3dade800e2f10586b->enter($__internal_ffa8a5b477a53ce26bd34c043bdfc76168017634931082c3dade800e2f10586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Textorespuesta</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "textoRespuesta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idpregunta</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "idPregunta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Incorrecta</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "incorrecta", array())) {
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("respuestas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_edit", array("id" => $this->getAttribute((isset($context["respuesta"]) ? $context["respuesta"] : $this->getContext($context, "respuesta")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ffa8a5b477a53ce26bd34c043bdfc76168017634931082c3dade800e2f10586b->leave($__internal_ffa8a5b477a53ce26bd34c043bdfc76168017634931082c3dade800e2f10586b_prof);

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
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Textorespuesta</th>*/
/*                 <td>{{ respuesta.textoRespuesta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idpregunta</th>*/
/*                 <td>{{ respuesta.idPregunta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Incorrecta</th>*/
/*                 <td>{% if respuesta.incorrecta %}Yes{% else %}No{% endif %}</td>*/
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
