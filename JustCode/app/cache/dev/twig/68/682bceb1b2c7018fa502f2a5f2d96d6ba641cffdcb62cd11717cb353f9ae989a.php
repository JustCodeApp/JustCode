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
        $__internal_4a83ad484ef8cb9a24fb7add289535e8a1891fc0da7d420007e4fcd384490bd8 = $this->env->getExtension("native_profiler");
        $__internal_4a83ad484ef8cb9a24fb7add289535e8a1891fc0da7d420007e4fcd384490bd8->enter($__internal_4a83ad484ef8cb9a24fb7add289535e8a1891fc0da7d420007e4fcd384490bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a83ad484ef8cb9a24fb7add289535e8a1891fc0da7d420007e4fcd384490bd8->leave($__internal_4a83ad484ef8cb9a24fb7add289535e8a1891fc0da7d420007e4fcd384490bd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_711fe557b03f3773be8968f0847adff2e2e68c60a066c3ef9c53800c8a129e63 = $this->env->getExtension("native_profiler");
        $__internal_711fe557b03f3773be8968f0847adff2e2e68c60a066c3ef9c53800c8a129e63->enter($__internal_711fe557b03f3773be8968f0847adff2e2e68c60a066c3ef9c53800c8a129e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_711fe557b03f3773be8968f0847adff2e2e68c60a066c3ef9c53800c8a129e63->leave($__internal_711fe557b03f3773be8968f0847adff2e2e68c60a066c3ef9c53800c8a129e63_prof);

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
/*         */
/*     </ul>*/
/* {% endblock %}*/
