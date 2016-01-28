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
        $__internal_4759c7da5105cc7da3c23d5415e5c1ed03fb38814e3c865613a2ccc09062a00d = $this->env->getExtension("native_profiler");
        $__internal_4759c7da5105cc7da3c23d5415e5c1ed03fb38814e3c865613a2ccc09062a00d->enter($__internal_4759c7da5105cc7da3c23d5415e5c1ed03fb38814e3c865613a2ccc09062a00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4759c7da5105cc7da3c23d5415e5c1ed03fb38814e3c865613a2ccc09062a00d->leave($__internal_4759c7da5105cc7da3c23d5415e5c1ed03fb38814e3c865613a2ccc09062a00d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e04ec67ae6c9fe517df27dd6ab4921fdac9e3dee36e0b6055c723b09c067cfa = $this->env->getExtension("native_profiler");
        $__internal_8e04ec67ae6c9fe517df27dd6ab4921fdac9e3dee36e0b6055c723b09c067cfa->enter($__internal_8e04ec67ae6c9fe517df27dd6ab4921fdac9e3dee36e0b6055c723b09c067cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idrespuestas</th>
                <th>Textorespuesta</th>
                <th>Correcta</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "idrespuestas", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "idrespuestas", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuesta"], "textoRespuesta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["respuesta"], "correcta", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_show", array("id" => $this->getAttribute($context["respuesta"], "idrespuestas", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestas_edit", array("id" => $this->getAttribute($context["respuesta"], "idrespuestas", array()))), "html", null, true);
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
        
        $__internal_8e04ec67ae6c9fe517df27dd6ab4921fdac9e3dee36e0b6055c723b09c067cfa->leave($__internal_8e04ec67ae6c9fe517df27dd6ab4921fdac9e3dee36e0b6055c723b09c067cfa_prof);

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
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <th>Idrespuestas</th>*/
/*                 <th>Textorespuesta</th>*/
/*                 <th>Correcta</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for respuesta in respuestas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('respuestas_show', { 'id': respuesta.idrespuestas }) }}">{{ respuesta.idrespuestas }}</a></td>*/
/*                 <td>{{ respuesta.textoRespuesta }}</td>*/
/*                 <td>{% if respuesta.correcta %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('respuestas_show', { 'id': respuesta.idrespuestas }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('respuestas_edit', { 'id': respuesta.idrespuestas }) }}">edit</a>*/
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
