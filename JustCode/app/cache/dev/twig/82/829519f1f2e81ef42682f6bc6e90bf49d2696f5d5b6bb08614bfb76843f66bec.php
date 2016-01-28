<?php

/* niveles/show.html.twig */
class __TwigTemplate_2329a2cc263ada44efbf73f49fefe0c29ad3a4370dca5c6dcf3e32a5c63bc6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "niveles/show.html.twig", 1);
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
        $__internal_149bb5b3f370b53630660232ebf3c85767278a25e4fe1b5bb14a7e445bb3295d = $this->env->getExtension("native_profiler");
        $__internal_149bb5b3f370b53630660232ebf3c85767278a25e4fe1b5bb14a7e445bb3295d->enter($__internal_149bb5b3f370b53630660232ebf3c85767278a25e4fe1b5bb14a7e445bb3295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "niveles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149bb5b3f370b53630660232ebf3c85767278a25e4fe1b5bb14a7e445bb3295d->leave($__internal_149bb5b3f370b53630660232ebf3c85767278a25e4fe1b5bb14a7e445bb3295d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeda2f615936e3a0dd43d3736030d26a56ade28b0e17131ace45af5f08f6ed1c = $this->env->getExtension("native_profiler");
        $__internal_aeda2f615936e3a0dd43d3736030d26a56ade28b0e17131ace45af5f08f6ed1c->enter($__internal_aeda2f615936e3a0dd43d3736030d26a56ade28b0e17131ace45af5f08f6ed1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Niveles</h1>

    <table>
        <tbody>
            <tr>
                <th>Idniveles</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nivele"]) ? $context["nivele"] : $this->getContext($context, "nivele")), "idniveles", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textonivel</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nivele"]) ? $context["nivele"] : $this->getContext($context, "nivele")), "textoNivel", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("niveles_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("niveles_edit", array("id" => $this->getAttribute((isset($context["nivele"]) ? $context["nivele"] : $this->getContext($context, "nivele")), "idniveles", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aeda2f615936e3a0dd43d3736030d26a56ade28b0e17131ace45af5f08f6ed1c->leave($__internal_aeda2f615936e3a0dd43d3736030d26a56ade28b0e17131ace45af5f08f6ed1c_prof);

    }

    public function getTemplateName()
    {
        return "niveles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Niveles</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idniveles</th>*/
/*                 <td>{{ nivele.idniveles }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Textonivel</th>*/
/*                 <td>{{ nivele.textoNivel }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('niveles_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('niveles_edit', { 'id': nivele.idniveles }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
