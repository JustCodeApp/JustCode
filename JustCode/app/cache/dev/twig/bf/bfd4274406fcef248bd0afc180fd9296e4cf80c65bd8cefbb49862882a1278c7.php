<?php

/* :preguntas:show.html.twig */
class __TwigTemplate_f7202c826a0131fd03f65ff91b4e128b678b70c7920a5d715b5a4c9caa3121d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":preguntas:show.html.twig", 1);
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
        $__internal_7a15a076ff10f7f29d3f8a3ed6e635dbf4c01ec93ab4ddb5e33f9f3fe7f3065b = $this->env->getExtension("native_profiler");
        $__internal_7a15a076ff10f7f29d3f8a3ed6e635dbf4c01ec93ab4ddb5e33f9f3fe7f3065b->enter($__internal_7a15a076ff10f7f29d3f8a3ed6e635dbf4c01ec93ab4ddb5e33f9f3fe7f3065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":preguntas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a15a076ff10f7f29d3f8a3ed6e635dbf4c01ec93ab4ddb5e33f9f3fe7f3065b->leave($__internal_7a15a076ff10f7f29d3f8a3ed6e635dbf4c01ec93ab4ddb5e33f9f3fe7f3065b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dd8411e096f598c03531cdd2780167eafdaf186dd2442b00281e35f55000430 = $this->env->getExtension("native_profiler");
        $__internal_8dd8411e096f598c03531cdd2780167eafdaf186dd2442b00281e35f55000430->enter($__internal_8dd8411e096f598c03531cdd2780167eafdaf186dd2442b00281e35f55000430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preguntas</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enunciado</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "enunciado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dificultad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "dificultad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idnivel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "idNivel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcorrecta</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "idCorrecta", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("preguntas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preguntas_edit", array("id" => $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : $this->getContext($context, "pregunta")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8dd8411e096f598c03531cdd2780167eafdaf186dd2442b00281e35f55000430->leave($__internal_8dd8411e096f598c03531cdd2780167eafdaf186dd2442b00281e35f55000430_prof);

    }

    public function getTemplateName()
    {
        return ":preguntas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Preguntas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ pregunta.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Enunciado</th>*/
/*                 <td>{{ pregunta.enunciado }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dificultad</th>*/
/*                 <td>{{ pregunta.dificultad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idnivel</th>*/
/*                 <td>{{ pregunta.idNivel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idcorrecta</th>*/
/*                 <td>{{ pregunta.idCorrecta }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('preguntas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('preguntas_edit', { 'id': pregunta.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
