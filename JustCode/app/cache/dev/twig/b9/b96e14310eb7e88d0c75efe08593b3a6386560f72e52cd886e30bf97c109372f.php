<?php

/* respuestas/index.html.twig */
class __TwigTemplate_6103cae3f3eb387fee2e4a0462585486fad4a8675add2ff4c2f04d622adf416b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "respuestas/index.html.twig", 1);
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
        $__internal_d3fee975878cfec6ea8f9178454d1e4f6ea650ac6cff64c8342a67c5b12e4371 = $this->env->getExtension("native_profiler");
        $__internal_d3fee975878cfec6ea8f9178454d1e4f6ea650ac6cff64c8342a67c5b12e4371->enter($__internal_d3fee975878cfec6ea8f9178454d1e4f6ea650ac6cff64c8342a67c5b12e4371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3fee975878cfec6ea8f9178454d1e4f6ea650ac6cff64c8342a67c5b12e4371->leave($__internal_d3fee975878cfec6ea8f9178454d1e4f6ea650ac6cff64c8342a67c5b12e4371_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b962333181c8f8137595b4f750259b84bc9b503c5f6beaa0d1bad5f3bb9f8dd1 = $this->env->getExtension("native_profiler");
        $__internal_b962333181c8f8137595b4f750259b84bc9b503c5f6beaa0d1bad5f3bb9f8dd1->enter($__internal_b962333181c8f8137595b4f750259b84bc9b503c5f6beaa0d1bad5f3bb9f8dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idpregunta</th>
                <th>Preguntaincorrecta</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "idPregunta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "preguntaIncorrecta", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_edit", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("respuestas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b962333181c8f8137595b4f750259b84bc9b503c5f6beaa0d1bad5f3bb9f8dd1->leave($__internal_b962333181c8f8137595b4f750259b84bc9b503c5f6beaa0d1bad5f3bb9f8dd1_prof);

    }

    public function getTemplateName()
    {
        return "respuestas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Respuestas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Idpregunta</th>*/
/*                 <th>Preguntaincorrecta</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for respuesta in respuestas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('respuestas_show', { 'id': respuesta.id }) }}">{{ respuesta.id }}</a></td>*/
/*                 <td>{{ respuesta.idPregunta }}</td>*/
/*                 <td>{{ respuesta.preguntaIncorrecta }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('respuestas_show', { 'id': respuesta.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('respuestas_edit', { 'id': respuesta.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
