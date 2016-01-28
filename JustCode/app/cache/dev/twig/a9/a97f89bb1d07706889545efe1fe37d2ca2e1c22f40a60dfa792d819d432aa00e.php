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
        $__internal_c2168d6e828eb39c6f4324b1db63756a03691aaaa0494a5bd6ee997c87653bdf = $this->env->getExtension("native_profiler");
        $__internal_c2168d6e828eb39c6f4324b1db63756a03691aaaa0494a5bd6ee997c87653bdf->enter($__internal_c2168d6e828eb39c6f4324b1db63756a03691aaaa0494a5bd6ee997c87653bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preguntas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2168d6e828eb39c6f4324b1db63756a03691aaaa0494a5bd6ee997c87653bdf->leave($__internal_c2168d6e828eb39c6f4324b1db63756a03691aaaa0494a5bd6ee997c87653bdf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e4b2b6929497175645c113c446979e0b9cf94641396a4f67d9814c5be01718d = $this->env->getExtension("native_profiler");
        $__internal_7e4b2b6929497175645c113c446979e0b9cf94641396a4f67d9814c5be01718d->enter($__internal_7e4b2b6929497175645c113c446979e0b9cf94641396a4f67d9814c5be01718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_show", array("id" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "enunciado", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "dificultad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "idNivel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "idCorrecta", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_show", array("id" => $this->getAttribute($context["pregunta"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
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
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("preguntas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7e4b2b6929497175645c113c446979e0b9cf94641396a4f67d9814c5be01718d->leave($__internal_7e4b2b6929497175645c113c446979e0b9cf94641396a4f67d9814c5be01718d_prof);

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
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Actions</th>*/
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
