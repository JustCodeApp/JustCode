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
        $__internal_3dc1f86086c4191a63e77b99486d3f7b1b239ae40d9aa2e94a35fce636760628 = $this->env->getExtension("native_profiler");
        $__internal_3dc1f86086c4191a63e77b99486d3f7b1b239ae40d9aa2e94a35fce636760628->enter($__internal_3dc1f86086c4191a63e77b99486d3f7b1b239ae40d9aa2e94a35fce636760628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc1f86086c4191a63e77b99486d3f7b1b239ae40d9aa2e94a35fce636760628->leave($__internal_3dc1f86086c4191a63e77b99486d3f7b1b239ae40d9aa2e94a35fce636760628_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f637a2dbb38887a764ef7f952f4b5d1e38e1ad5c1c82469699a71e622697e86b = $this->env->getExtension("native_profiler");
        $__internal_f637a2dbb38887a764ef7f952f4b5d1e38e1ad5c1c82469699a71e622697e86b->enter($__internal_f637a2dbb38887a764ef7f952f4b5d1e38e1ad5c1c82469699a71e622697e86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas list</h1>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Textorespuesta</th>
                <th>Idpregunta</th>
                <th>Incorrecta</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRespuesta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "idPregunta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["respuesta"], "incorrecta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("respuestas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f637a2dbb38887a764ef7f952f4b5d1e38e1ad5c1c82469699a71e622697e86b->leave($__internal_f637a2dbb38887a764ef7f952f4b5d1e38e1ad5c1c82469699a71e622697e86b_prof);

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
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Respuestas list</h1>*/
/* */
/*     <table border="1">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Textorespuesta</th>*/
/*                 <th>Idpregunta</th>*/
/*                 <th>Incorrecta</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for respuesta in respuestas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('respuestas_show', { 'id': respuesta.id }) }}">{{ respuesta.id }}</a></td>*/
/*                 <td>{{ respuesta.textoRespuesta }}</td>*/
/*                 <td>{{ respuesta.idPregunta }}</td>*/
/*                 <td>{% if respuesta.incorrecta %}Yes{% else %}No{% endif %}</td>*/
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
