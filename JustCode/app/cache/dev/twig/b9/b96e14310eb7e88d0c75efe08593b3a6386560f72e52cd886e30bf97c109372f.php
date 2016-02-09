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
        $__internal_7871301af85423ae3a71613248a83f7b67d0673839cbd089e60d8cf2bd684197 = $this->env->getExtension("native_profiler");
        $__internal_7871301af85423ae3a71613248a83f7b67d0673839cbd089e60d8cf2bd684197->enter($__internal_7871301af85423ae3a71613248a83f7b67d0673839cbd089e60d8cf2bd684197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7871301af85423ae3a71613248a83f7b67d0673839cbd089e60d8cf2bd684197->leave($__internal_7871301af85423ae3a71613248a83f7b67d0673839cbd089e60d8cf2bd684197_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cc9e57057dc2308e8918d831ecaa69ab2a40b354c0da9caf942c0d82ad9eed1 = $this->env->getExtension("native_profiler");
        $__internal_0cc9e57057dc2308e8918d831ecaa69ab2a40b354c0da9caf942c0d82ad9eed1->enter($__internal_0cc9e57057dc2308e8918d831ecaa69ab2a40b354c0da9caf942c0d82ad9eed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Enunciado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "enunciado", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
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
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("respuestas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0cc9e57057dc2308e8918d831ecaa69ab2a40b354c0da9caf942c0d82ad9eed1->leave($__internal_0cc9e57057dc2308e8918d831ecaa69ab2a40b354c0da9caf942c0d82ad9eed1_prof);

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
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Enunciado</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for respuesta in respuestas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('respuestas_show', { 'id': respuesta.id }) }}">{{ respuesta.id }}</a></td>*/
/*                 <td>{{ respuesta.enunciado }}</td>*/
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
