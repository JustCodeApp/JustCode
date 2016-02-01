<?php

/* JustCodeactividadesBundle:Default:testType.html.twig */
class __TwigTemplate_6581dbc5c3273b9a5e9dab7aa99da7ebac9f2c23184e897309257dce581ad0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JustCodeactividadesBundle:Default:testType.html.twig", 1);
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
        $__internal_f0bc13ebbd7062fd19faaf101739fc9914f0ba7861552a7b500ba109613b1d44 = $this->env->getExtension("native_profiler");
        $__internal_f0bc13ebbd7062fd19faaf101739fc9914f0ba7861552a7b500ba109613b1d44->enter($__internal_f0bc13ebbd7062fd19faaf101739fc9914f0ba7861552a7b500ba109613b1d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:testType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0bc13ebbd7062fd19faaf101739fc9914f0ba7861552a7b500ba109613b1d44->leave($__internal_f0bc13ebbd7062fd19faaf101739fc9914f0ba7861552a7b500ba109613b1d44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90a99cd173b35132d015db05cb483a7b09f4de084c8c46a5a6f3a8c2808cbcec = $this->env->getExtension("native_profiler");
        $__internal_90a99cd173b35132d015db05cb483a7b09f4de084c8c46a5a6f3a8c2808cbcec->enter($__internal_90a99cd173b35132d015db05cb483a7b09f4de084c8c46a5a6f3a8c2808cbcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"wrapper\">

<!-- Aquí empieza la actividad tipo test -->
<div class=\"row\">
    <div class=\"col-sm-2\">
</div>
<div class=\"col-sm-8\">
    <h3 class=\"nivel\">JAVA Level 1</h3>
    <h1 class=\"actividad\">Activity 03</h1>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>

    <h3 class=\"elegir\">Choose the correct answer</h3>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 19
            echo "
    <h2>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "enunciado", array()), "html", null, true);
            echo "</h2>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pregunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <form>
    <div class=\"col-md-4 test\">
    <div class=\"col-md-6\">

    <div class=\"funkyradio\">
    <div class=\"row\">
        
        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio1\" />
            <label for=\"radio1\">int i</label>
        </div>

        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio2\" />
            <label for=\"radio2\">int i = 5;</label>
        </div>

        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio3\" />
            <label for=\"radio3\">var i = 5;</label>
        </div>
        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio4\" />
            <label for=\"radio4\">\$i = 5;</label>
        </div>
    </div>

    </div>
    </div>
</div>


<div class=\"derecha\">
    <a href=\"#\" class=\"btn btn-lg btn-default \">Skip</a>
    <input type=\"submit\" value=\"Send\" class=\"btn btn-lg btn-warning\" />
</div>
    </form>

<div class=\"col-sm-2\"></div>


<!-- Footer     

    <footer>
        <div class\"container\">
            <div class=\"row\" style=\"margin-left:15px;margin-right:15px;\">
                <div class=\"col-md-2\"></div>
                <div class=\"col-md-1\">
                    <div class=\"circle-container\">
                        <img id=\"logo-footer\" src=\"img/isologo.png\">
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <ul class=\"footer-list\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Contacto</a></li>
                        <li><a href=\"#\">Log In</a></li> 
                        <li><a href=\"#\">Sing Up</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\"><p>All Rights Reserved ©2016</p></div>
                <div class=\"col-md-2\">
                    <div id=\"media-container\">
                        <ul class=\"cv-social-media\" id=\"media\">
                            <a class=\"animated fadeIn\" href=\"#\"><li id=\"facebook\" class=\"icon-facebook facebook\"></li></a>
                            <a class=\"animated fadeIn\" href=\"https://twitter.com/justcodeapp\" target=\"blank\"><li id=\"twitter\" class=\"icon-twitter\"></li></a>
                        </ul><
                    </div>
                </div>
                <div class=\"col-md-2\"></div>
            </div>
        </div>
    </footer>
-->
</div>

";
        
        $__internal_90a99cd173b35132d015db05cb483a7b09f4de084c8c46a5a6f3a8c2808cbcec->leave($__internal_90a99cd173b35132d015db05cb483a7b09f4de084c8c46a5a6f3a8c2808cbcec_prof);

    }

    public function getTemplateName()
    {
        return "JustCodeactividadesBundle:Default:testType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="wrapper">*/
/* */
/* <!-- Aquí empieza la actividad tipo test -->*/
/* <div class="row">*/
/*     <div class="col-sm-2">*/
/* </div>*/
/* <div class="col-sm-8">*/
/*     <h3 class="nivel">JAVA Level 1</h3>*/
/*     <h1 class="actividad">Activity 03</h1>*/
/* */
/*     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>*/
/* */
/*     <h3 class="elegir">Choose the correct answer</h3>*/
/*             {% for pregunta in preguntas %}*/
/* */
/*     <h2>{{ pregunta.enunciado }}</h2>*/
/*         {% endfor %}*/
/*     <form>*/
/*     <div class="col-md-4 test">*/
/*     <div class="col-md-6">*/
/* */
/*     <div class="funkyradio">*/
/*     <div class="row">*/
/*         */
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio1" />*/
/*             <label for="radio1">int i</label>*/
/*         </div>*/
/* */
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio2" />*/
/*             <label for="radio2">int i = 5;</label>*/
/*         </div>*/
/* */
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio3" />*/
/*             <label for="radio3">var i = 5;</label>*/
/*         </div>*/
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio4" />*/
/*             <label for="radio4">$i = 5;</label>*/
/*         </div>*/
/*     </div>*/
/* */
/*     </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="derecha">*/
/*     <a href="#" class="btn btn-lg btn-default ">Skip</a>*/
/*     <input type="submit" value="Send" class="btn btn-lg btn-warning" />*/
/* </div>*/
/*     </form>*/
/* */
/* <div class="col-sm-2"></div>*/
/* */
/* */
/* <!-- Footer     */
/* */
/*     <footer>*/
/*         <div class"container">*/
/*             <div class="row" style="margin-left:15px;margin-right:15px;">*/
/*                 <div class="col-md-2"></div>*/
/*                 <div class="col-md-1">*/
/*                     <div class="circle-container">*/
/*                         <img id="logo-footer" src="img/isologo.png">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-2">*/
/*                     <ul class="footer-list">*/
/*                         <li><a href="#">Home</a></li>*/
/*                         <li><a href="#">Contacto</a></li>*/
/*                         <li><a href="#">Log In</a></li> */
/*                         <li><a href="#">Sing Up</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="col-md-3"><p>All Rights Reserved ©2016</p></div>*/
/*                 <div class="col-md-2">*/
/*                     <div id="media-container">*/
/*                         <ul class="cv-social-media" id="media">*/
/*                             <a class="animated fadeIn" href="#"><li id="facebook" class="icon-facebook facebook"></li></a>*/
/*                             <a class="animated fadeIn" href="https://twitter.com/justcodeapp" target="blank"><li id="twitter" class="icon-twitter"></li></a>*/
/*                         </ul><*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-2"></div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* -->*/
/* </div>*/
/* */
/* {% endblock %}*/
