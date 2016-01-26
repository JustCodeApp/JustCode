<?php

/* respuestascorrectas/index.html.twig */
class __TwigTemplate_ffc2e00b7f701fd58b963a8b4ae7aed17b1df8125c92203f2bbca31d59f91d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "respuestascorrectas/index.html.twig", 1);
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
        $__internal_7944d660e7e6e5f8eee760dc3a03a277c008323f0814748b65b59a9d53e29920 = $this->env->getExtension("native_profiler");
        $__internal_7944d660e7e6e5f8eee760dc3a03a277c008323f0814748b65b59a9d53e29920->enter($__internal_7944d660e7e6e5f8eee760dc3a03a277c008323f0814748b65b59a9d53e29920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "respuestascorrectas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7944d660e7e6e5f8eee760dc3a03a277c008323f0814748b65b59a9d53e29920->leave($__internal_7944d660e7e6e5f8eee760dc3a03a277c008323f0814748b65b59a9d53e29920_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c84ed9701851ef677a39adc139a387ed1b1a8ad49f020fac63e6560fc15263ab = $this->env->getExtension("native_profiler");
        $__internal_c84ed9701851ef677a39adc139a387ed1b1a8ad49f020fac63e6560fc15263ab->enter($__internal_c84ed9701851ef677a39adc139a387ed1b1a8ad49f020fac63e6560fc15263ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestascorrectas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Respuestaok</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["respuestascorrectas"]) ? $context["respuestascorrectas"] : $this->getContext($context, "respuestascorrectas")));
        foreach ($context['_seq'] as $context["_key"] => $context["respuestascorrecta"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestascorrectas_show", array("id" => $this->getAttribute($context["respuestascorrecta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuestascorrecta"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["respuestascorrecta"], "respuestaOk", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestascorrectas_show", array("id" => $this->getAttribute($context["respuestascorrecta"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestascorrectas_edit", array("id" => $this->getAttribute($context["respuestascorrecta"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuestascorrecta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("respuestascorrectas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_c84ed9701851ef677a39adc139a387ed1b1a8ad49f020fac63e6560fc15263ab->leave($__internal_c84ed9701851ef677a39adc139a387ed1b1a8ad49f020fac63e6560fc15263ab_prof);

    }

    public function getTemplateName()
    {
        return "respuestascorrectas/index.html.twig";
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
/*     <h1>Respuestascorrectas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Respuestaok</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for respuestascorrecta in respuestascorrectas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('respuestascorrectas_show', { 'id': respuestascorrecta.id }) }}">{{ respuestascorrecta.id }}</a></td>*/
/*                 <td>{{ respuestascorrecta.respuestaOk }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('respuestascorrectas_show', { 'id': respuestascorrecta.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('respuestascorrectas_edit', { 'id': respuestascorrecta.id }) }}">edit</a>*/
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
/*             <a href="{{ path('respuestascorrectas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
