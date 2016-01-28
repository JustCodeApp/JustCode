<?php

/* JustCodeactividadesBundle:Default:index.html.twig */
class __TwigTemplate_241fc420a541710ddfbb204a3755db23bb2973d18629c04b7f9f2264558c4e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JustCodeactividadesBundle:Default:index.html.twig", 1);
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
        $__internal_80fc921cdc6bb9d7755b7f0c0212ce843a2d5041e3d56a2fe61091e2399e5839 = $this->env->getExtension("native_profiler");
        $__internal_80fc921cdc6bb9d7755b7f0c0212ce843a2d5041e3d56a2fe61091e2399e5839->enter($__internal_80fc921cdc6bb9d7755b7f0c0212ce843a2d5041e3d56a2fe61091e2399e5839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fc921cdc6bb9d7755b7f0c0212ce843a2d5041e3d56a2fe61091e2399e5839->leave($__internal_80fc921cdc6bb9d7755b7f0c0212ce843a2d5041e3d56a2fe61091e2399e5839_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c51bfb2fef53f4e6f13e686aaa705840ce5a7a7ffa202ffd750fbf1e22495e2 = $this->env->getExtension("native_profiler");
        $__internal_8c51bfb2fef53f4e6f13e686aaa705840ce5a7a7ffa202ffd750fbf1e22495e2->enter($__internal_8c51bfb2fef53f4e6f13e686aaa705840ce5a7a7ffa202ffd750fbf1e22495e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Esto es el índice.</h1>
    <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("homepage");
        // line 8
        echo "\">Home</a>
        </li>
        
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("compilator");
        // line 13
        echo "\">Compilador</a>
        </li>
        
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("testType");
        // line 18
        echo "\">Tipo Test</a>
        </li>
        
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("verdaderofalso");
        // line 23
        echo "\">Verdadero y falso</a>
        </li>
        
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveles"]) ? $context["niveles"] : $this->getContext($context, "niveles")));
        foreach ($context['_seq'] as $context["_key"] => $context["nivele"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("niveles_show", array("id" => $this->getAttribute($context["nivele"], "idniveles", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nivele"], "idniveles", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["nivele"], "textoNivel", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("niveles_show", array("id" => $this->getAttribute($context["nivele"], "idniveles", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 36
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
        // line 42
        echo "
        </ul>
";
        
        $__internal_8c51bfb2fef53f4e6f13e686aaa705840ce5a7a7ffa202ffd750fbf1e22495e2->leave($__internal_8c51bfb2fef53f4e6f13e686aaa705840ce5a7a7ffa202ffd750fbf1e22495e2_prof);

    }

    public function getTemplateName()
    {
        return "JustCodeactividadesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  98 => 36,  92 => 33,  85 => 29,  79 => 28,  76 => 27,  72 => 26,  67 => 23,  65 => 21,  60 => 18,  58 => 16,  53 => 13,  51 => 11,  46 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Esto es el índice.</h1>*/
/*     <ul class="nav navbar-nav">*/
/*         <li><a href="{{ */
/*         url('homepage') */
/*         }}">Home</a>*/
/*         </li>*/
/*         */
/*         <li><a href="{{ */
/*         url('compilator') */
/*         }}">Compilador</a>*/
/*         </li>*/
/*         */
/*         <li><a href="{{ */
/*         url('testType') */
/*         }}">Tipo Test</a>*/
/*         </li>*/
/*         */
/*         <li><a href="{{ */
/*         url('verdaderofalso') */
/*         }}">Verdadero y falso</a>*/
/*         </li>*/
/*         */
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
/* */
/*         </ul>*/
/* {% endblock %}*/
