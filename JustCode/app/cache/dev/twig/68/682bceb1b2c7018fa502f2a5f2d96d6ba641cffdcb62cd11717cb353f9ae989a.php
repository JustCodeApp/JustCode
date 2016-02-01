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
        $__internal_12a6953586983d52373178dc4f6d6679b44aab1af6d9239c06cbcfd2608b4264 = $this->env->getExtension("native_profiler");
        $__internal_12a6953586983d52373178dc4f6d6679b44aab1af6d9239c06cbcfd2608b4264->enter($__internal_12a6953586983d52373178dc4f6d6679b44aab1af6d9239c06cbcfd2608b4264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a6953586983d52373178dc4f6d6679b44aab1af6d9239c06cbcfd2608b4264->leave($__internal_12a6953586983d52373178dc4f6d6679b44aab1af6d9239c06cbcfd2608b4264_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41ffffa581b28f5e2e39fd3fd22f41d6e0578cd6c3131dbc885bb52ca0a0fd8c = $this->env->getExtension("native_profiler");
        $__internal_41ffffa581b28f5e2e39fd3fd22f41d6e0578cd6c3131dbc885bb52ca0a0fd8c->enter($__internal_41ffffa581b28f5e2e39fd3fd22f41d6e0578cd6c3131dbc885bb52ca0a0fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("perfil");
        // line 28
        echo "\">Perfil</a>
        </li>
        
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("principal");
        // line 33
        echo "\">Principal</a>
        </li>

        </ul>
";
        
        $__internal_41ffffa581b28f5e2e39fd3fd22f41d6e0578cd6c3131dbc885bb52ca0a0fd8c->leave($__internal_41ffffa581b28f5e2e39fd3fd22f41d6e0578cd6c3131dbc885bb52ca0a0fd8c_prof);

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
        return array (  81 => 33,  79 => 31,  74 => 28,  72 => 26,  67 => 23,  65 => 21,  60 => 18,  58 => 16,  53 => 13,  51 => 11,  46 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <li><a href="{{ */
/*         url('perfil') */
/*         }}">Perfil</a>*/
/*         </li>*/
/*         */
/*         <li><a href="{{ */
/*         url('principal') */
/*         }}">Principal</a>*/
/*         </li>*/
/* */
/*         </ul>*/
/* {% endblock %}*/
