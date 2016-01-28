<?php

/* niveles/index.html.twig */
class __TwigTemplate_e703c964081ecf30153f4b1f80331a338812e4f26540c755045e5e0f3047b242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "niveles/index.html.twig", 1);
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
        $__internal_abab611ad8d7293e061be7cdf2c2e643cb66bd5c4fda79fe16dabf97abfa2800 = $this->env->getExtension("native_profiler");
        $__internal_abab611ad8d7293e061be7cdf2c2e643cb66bd5c4fda79fe16dabf97abfa2800->enter($__internal_abab611ad8d7293e061be7cdf2c2e643cb66bd5c4fda79fe16dabf97abfa2800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "niveles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abab611ad8d7293e061be7cdf2c2e643cb66bd5c4fda79fe16dabf97abfa2800->leave($__internal_abab611ad8d7293e061be7cdf2c2e643cb66bd5c4fda79fe16dabf97abfa2800_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_179d42116b37ced957b3e1dec4885e3796504d7a4c2ee1e13f4658112dc835e6 = $this->env->getExtension("native_profiler");
        $__internal_179d42116b37ced957b3e1dec4885e3796504d7a4c2ee1e13f4658112dc835e6->enter($__internal_179d42116b37ced957b3e1dec4885e3796504d7a4c2ee1e13f4658112dc835e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Niveles list</h1>

    <table>
        <thead>
            <tr>
                <th>Idniveles</th>
                <th>Textonivel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveles"]) ? $context["niveles"] : $this->getContext($context, "niveles")));
        foreach ($context['_seq'] as $context["_key"] => $context["nivele"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("niveles_show", array("id" => $this->getAttribute($context["nivele"], "idniveles", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nivele"], "idniveles", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["nivele"], "textoNivel", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("niveles_show", array("id" => $this->getAttribute($context["nivele"], "idniveles", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("niveles_edit", array("id" => $this->getAttribute($context["nivele"], "idniveles", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nivele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("niveles_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_179d42116b37ced957b3e1dec4885e3796504d7a4c2ee1e13f4658112dc835e6->leave($__internal_179d42116b37ced957b3e1dec4885e3796504d7a4c2ee1e13f4658112dc835e6_prof);

    }

    public function getTemplateName()
    {
        return "niveles/index.html.twig";
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
/*     <h1>Niveles list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idniveles</th>*/
/*                 <th>Textonivel</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for nivele in niveles %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('niveles_show', { 'id': nivele.idniveles }) }}">{{ nivele.idniveles }}</a></td>*/
/*                 <td>{{ nivele.textoNivel }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('niveles_show', { 'id': nivele.idniveles }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('niveles_edit', { 'id': nivele.idniveles }) }}">edit</a>*/
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
/*             <a href="{{ path('niveles_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
