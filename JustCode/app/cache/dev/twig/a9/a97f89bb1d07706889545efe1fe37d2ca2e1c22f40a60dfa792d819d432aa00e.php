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
        $__internal_f71a1404008136465f53f7544e0c957052d55d855961a2b23ba3b2f2a0db55df = $this->env->getExtension("native_profiler");
        $__internal_f71a1404008136465f53f7544e0c957052d55d855961a2b23ba3b2f2a0db55df->enter($__internal_f71a1404008136465f53f7544e0c957052d55d855961a2b23ba3b2f2a0db55df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "preguntas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f71a1404008136465f53f7544e0c957052d55d855961a2b23ba3b2f2a0db55df->leave($__internal_f71a1404008136465f53f7544e0c957052d55d855961a2b23ba3b2f2a0db55df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8df4e351c3551560f34959b2d804e3fe0a0cc449a1c04be77605849360b350c = $this->env->getExtension("native_profiler");
        $__internal_a8df4e351c3551560f34959b2d804e3fe0a0cc449a1c04be77605849360b350c->enter($__internal_a8df4e351c3551560f34959b2d804e3fe0a0cc449a1c04be77605849360b350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preguntas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idpreguntas</th>
                <th>Enunciado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_show", array("id" => $this->getAttribute($context["pregunta"], "idpreguntas", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "idpreguntas", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "enunciado", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_show", array("id" => $this->getAttribute($context["pregunta"], "idpreguntas", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_edit", array("id" => $this->getAttribute($context["pregunta"], "idpreguntas", array()))), "html", null, true);
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
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("preguntas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a8df4e351c3551560f34959b2d804e3fe0a0cc449a1c04be77605849360b350c->leave($__internal_a8df4e351c3551560f34959b2d804e3fe0a0cc449a1c04be77605849360b350c_prof);

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
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Idpreguntas</th>*/
/*                 <th>Enunciado</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pregunta in preguntas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('preguntas_show', { 'id': pregunta.idpreguntas }) }}">{{ pregunta.idpreguntas }}</a></td>*/
/*                 <td>{{ pregunta.enunciado }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('preguntas_show', { 'id': pregunta.idpreguntas }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('preguntas_edit', { 'id': pregunta.idpreguntas }) }}">edit</a>*/
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
