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
        $__internal_fac97112da44415bdf589385aa59515949f8f54693de428b62c083314062acf3 = $this->env->getExtension("native_profiler");
        $__internal_fac97112da44415bdf589385aa59515949f8f54693de428b62c083314062acf3->enter($__internal_fac97112da44415bdf589385aa59515949f8f54693de428b62c083314062acf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac97112da44415bdf589385aa59515949f8f54693de428b62c083314062acf3->leave($__internal_fac97112da44415bdf589385aa59515949f8f54693de428b62c083314062acf3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13778d04054130864fb23c05e527cca03d0ea2f3b50991863c164ee6f9855257 = $this->env->getExtension("native_profiler");
        $__internal_13778d04054130864fb23c05e527cca03d0ea2f3b50991863c164ee6f9855257->enter($__internal_13778d04054130864fb23c05e527cca03d0ea2f3b50991863c164ee6f9855257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        <br>
        
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveles"]) ? $context["niveles"] : $this->getContext($context, "niveles")));
        foreach ($context['_seq'] as $context["_key"] => $context["nivele"]) {
            // line 29
            echo "            
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["nivele"], "textoNivel", array()), "html", null, true);
            echo "
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nivele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        </ul>
";
        
        $__internal_13778d04054130864fb23c05e527cca03d0ea2f3b50991863c164ee6f9855257->leave($__internal_13778d04054130864fb23c05e527cca03d0ea2f3b50991863c164ee6f9855257_prof);

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
        return array (  90 => 33,  81 => 30,  78 => 29,  74 => 28,  67 => 23,  65 => 21,  60 => 18,  58 => 16,  53 => 13,  51 => 11,  46 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <br>*/
/*         */
/*         {% for nivele in niveles %}*/
/*             */
/*             {{ nivele.textoNivel }}*/
/*             */
/*         {% endfor %}*/
/* */
/*         </ul>*/
/* {% endblock %}*/
