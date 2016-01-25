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
        $__internal_35a840ef7236cfdd44d51e6f7879b4d28f8871e21618b85901dd0dd88f83b296 = $this->env->getExtension("native_profiler");
        $__internal_35a840ef7236cfdd44d51e6f7879b4d28f8871e21618b85901dd0dd88f83b296->enter($__internal_35a840ef7236cfdd44d51e6f7879b4d28f8871e21618b85901dd0dd88f83b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a840ef7236cfdd44d51e6f7879b4d28f8871e21618b85901dd0dd88f83b296->leave($__internal_35a840ef7236cfdd44d51e6f7879b4d28f8871e21618b85901dd0dd88f83b296_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6149551ea8cd026f646f96b44d05be7b81b79ddcbe159c6be01788745b78da6 = $this->env->getExtension("native_profiler");
        $__internal_d6149551ea8cd026f646f96b44d05be7b81b79ddcbe159c6be01788745b78da6->enter($__internal_d6149551ea8cd026f646f96b44d05be7b81b79ddcbe159c6be01788745b78da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        </ul>
";
        
        $__internal_d6149551ea8cd026f646f96b44d05be7b81b79ddcbe159c6be01788745b78da6->leave($__internal_d6149551ea8cd026f646f96b44d05be7b81b79ddcbe159c6be01788745b78da6_prof);

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
        return array (  67 => 23,  65 => 21,  60 => 18,  58 => 16,  53 => 13,  51 => 11,  46 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*         </ul>*/
/* {% endblock %}*/
