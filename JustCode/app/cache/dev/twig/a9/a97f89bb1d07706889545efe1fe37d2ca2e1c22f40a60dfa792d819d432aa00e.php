<?php

/* preguntas/index.html.twig */
class __TwigTemplate_4dcefe03a07e50c4b7f536aa257cb802153464f89e5a2a0e77410d8fbbef8761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "preguntas/index.html.twig", 1);
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
        $__internal_54932ce4a44a59a0b91779436af7cc902a198e0dcbb525643cf5ad2d4712f870 = $this->env->getExtension("native_profiler");
        $__internal_54932ce4a44a59a0b91779436af7cc902a198e0dcbb525643cf5ad2d4712f870->enter($__internal_54932ce4a44a59a0b91779436af7cc902a198e0dcbb525643cf5ad2d4712f870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preguntas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54932ce4a44a59a0b91779436af7cc902a198e0dcbb525643cf5ad2d4712f870->leave($__internal_54932ce4a44a59a0b91779436af7cc902a198e0dcbb525643cf5ad2d4712f870_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd0568c8a28af12850d44d5331418b0fbd0695182d410a8fd21b94a8aa3e3823 = $this->env->getExtension("native_profiler");
        $__internal_cd0568c8a28af12850d44d5331418b0fbd0695182d410a8fd21b94a8aa3e3823->enter($__internal_cd0568c8a28af12850d44d5331418b0fbd0695182d410a8fd21b94a8aa3e3823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preguntas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Enunciado</th>
                <th>Dificultad</th>
                <th>Idnivel</th>
                <th>Idcorrecta</th>
                <th>Tipo</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_show", array("id" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "enunciado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "dificultad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "idNivel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "idCorrecta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "tipo", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_show", array("id" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_edit", array("id" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pregunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("preguntas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_cd0568c8a28af12850d44d5331418b0fbd0695182d410a8fd21b94a8aa3e3823->leave($__internal_cd0568c8a28af12850d44d5331418b0fbd0695182d410a8fd21b94a8aa3e3823_prof);

    }

    public function getTemplateName()
    {
        return "preguntas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  112 => 40,  100 => 34,  94 => 31,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Preguntas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Enunciado</th>*/
/*                 <th>Dificultad</th>*/
/*                 <th>Idnivel</th>*/
/*                 <th>Idcorrecta</th>*/
/*                 <th>Tipo</th>*/
/*                 <th>Actions</th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pregunta in preguntas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('preguntas_show', { 'id': pregunta.id }) }}">{{ pregunta.id }}</a></td>*/
/*                 <td>{{ pregunta.enunciado }}</td>*/
/*                 <td>{{ pregunta.dificultad }}</td>*/
/*                 <td>{{ pregunta.idNivel }}</td>*/
/*                 <td>{{ pregunta.idCorrecta }}</td>*/
/*                 <td>{{pregunta.tipo}}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('preguntas_show', { 'id': pregunta.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('preguntas_edit', { 'id': pregunta.id }) }}">edit</a>*/
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
/*             <a href="{{ path('preguntas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
