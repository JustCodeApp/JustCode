<?php

/* :respuestascorrectas:show.html.twig */
class __TwigTemplate_2f80aa3032750bb6ecb3cb725be62f0d0ccf07f641b587c0d4348769b70201c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":respuestascorrectas:show.html.twig", 1);
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
        $__internal_b7fefe0555bbc49025003039e568f7058e9e28bc8fb4875ad698a1e75e6cf86c = $this->env->getExtension("native_profiler");
        $__internal_b7fefe0555bbc49025003039e568f7058e9e28bc8fb4875ad698a1e75e6cf86c->enter($__internal_b7fefe0555bbc49025003039e568f7058e9e28bc8fb4875ad698a1e75e6cf86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":respuestascorrectas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7fefe0555bbc49025003039e568f7058e9e28bc8fb4875ad698a1e75e6cf86c->leave($__internal_b7fefe0555bbc49025003039e568f7058e9e28bc8fb4875ad698a1e75e6cf86c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb527c600ca718709905e0596047a99460d5968caa60bc9edc0a42821f0aba3 = $this->env->getExtension("native_profiler");
        $__internal_9bb527c600ca718709905e0596047a99460d5968caa60bc9edc0a42821f0aba3->enter($__internal_9bb527c600ca718709905e0596047a99460d5968caa60bc9edc0a42821f0aba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Respuestascorrectas</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuestascorrecta"]) ? $context["respuestascorrecta"] : $this->getContext($context, "respuestascorrecta")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Respuestaok</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["respuestascorrecta"]) ? $context["respuestascorrecta"] : $this->getContext($context, "respuestascorrecta")), "respuestaOk", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("respuestascorrectas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuestascorrectas_edit", array("id" => $this->getAttribute((isset($context["respuestascorrecta"]) ? $context["respuestascorrecta"] : $this->getContext($context, "respuestascorrecta")), "id", array()))), "html", null, true);
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
        
        $__internal_9bb527c600ca718709905e0596047a99460d5968caa60bc9edc0a42821f0aba3->leave($__internal_9bb527c600ca718709905e0596047a99460d5968caa60bc9edc0a42821f0aba3_prof);

    }

    public function getTemplateName()
    {
        return ":respuestascorrectas:show.html.twig";
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
/*     <h1>Respuestascorrectas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ respuestascorrecta.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Respuestaok</th>*/
/*                 <td>{{ respuestascorrecta.respuestaOk }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('respuestascorrectas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('respuestascorrectas_edit', { 'id': respuestascorrecta.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
