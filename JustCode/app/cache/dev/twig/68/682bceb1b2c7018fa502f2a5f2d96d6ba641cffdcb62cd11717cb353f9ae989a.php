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
        $__internal_e4edf6c18aa2695159d8fec5dc12b33509506333bcff435bf0960198df353876 = $this->env->getExtension("native_profiler");
        $__internal_e4edf6c18aa2695159d8fec5dc12b33509506333bcff435bf0960198df353876->enter($__internal_e4edf6c18aa2695159d8fec5dc12b33509506333bcff435bf0960198df353876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4edf6c18aa2695159d8fec5dc12b33509506333bcff435bf0960198df353876->leave($__internal_e4edf6c18aa2695159d8fec5dc12b33509506333bcff435bf0960198df353876_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8371fd0440fd4d48dcae2297688671bfb9b290e8bd34f6c599080a7916a871b1 = $this->env->getExtension("native_profiler");
        $__internal_8371fd0440fd4d48dcae2297688671bfb9b290e8bd34f6c599080a7916a871b1->enter($__internal_8371fd0440fd4d48dcae2297688671bfb9b290e8bd34f6c599080a7916a871b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Esto es el índice.</h1>
    <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("homepage");
        // line 9
        echo "\">Home</a>
        </li>
        
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("compilator");
        // line 14
        echo "\">Compilador</a>
        </li>
        
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("testType");
        // line 19
        echo "\">Tipo Test</a>
        </li>
        
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("verdaderofalso");
        // line 24
        echo "\">Verdadero y falso</a>
        </li>
        
        </ul>

";
        
        $__internal_8371fd0440fd4d48dcae2297688671bfb9b290e8bd34f6c599080a7916a871b1->leave($__internal_8371fd0440fd4d48dcae2297688671bfb9b290e8bd34f6c599080a7916a871b1_prof);

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
        return array (  68 => 24,  66 => 22,  61 => 19,  59 => 17,  54 => 14,  52 => 12,  47 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
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
/*         </ul>*/
/* */
/* {% endblock %}*/
