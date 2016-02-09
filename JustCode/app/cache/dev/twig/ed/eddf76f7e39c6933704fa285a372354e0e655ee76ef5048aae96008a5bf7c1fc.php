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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aa8f6cdb1e20ae2a4c2bf887f7ae668d6907ef3bc73b467dcc97838ee795458 = $this->env->getExtension("native_profiler");
        $__internal_8aa8f6cdb1e20ae2a4c2bf887f7ae668d6907ef3bc73b467dcc97838ee795458->enter($__internal_8aa8f6cdb1e20ae2a4c2bf887f7ae668d6907ef3bc73b467dcc97838ee795458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:testType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa8f6cdb1e20ae2a4c2bf887f7ae668d6907ef3bc73b467dcc97838ee795458->leave($__internal_8aa8f6cdb1e20ae2a4c2bf887f7ae668d6907ef3bc73b467dcc97838ee795458_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a589b15e717f8a7ae334149a1ff8e1fbd18097b0b7baf76b9f21e4d7120c9dd = $this->env->getExtension("native_profiler");
        $__internal_6a589b15e717f8a7ae334149a1ff8e1fbd18097b0b7baf76b9f21e4d7120c9dd->enter($__internal_6a589b15e717f8a7ae334149a1ff8e1fbd18097b0b7baf76b9f21e4d7120c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <h2>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")), "html", null, true);
        echo "</h2>
    <form>
    <div class=\"col-md-4 test\">
    <div class=\"col-md-6\">

    <div class=\"funkyradio\">
    <div class=\"row\">
        
        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio1\" value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")), 0, array()), "enunciado", array()), "html", null, true);
        echo "' class=\"radios\"/>
            <label for=\"radio1\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")), 0, array()), "enunciado", array()), "html", null, true);
        echo "</label>
        </div>

        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio2\" value='";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")), 1, array()), "enunciado", array()), "html", null, true);
        echo "' class=\"radios\"/>
            <label for=\"radio2\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")), 1, array()), "enunciado", array()), "html", null, true);
        echo "</label>
        </div>

        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio3\" value='";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correcta"]) ? $context["correcta"] : $this->getContext($context, "correcta")), 0, array()), "respuestaOk", array()), "html", null, true);
        echo "' class=\"radios\"/>
            <label for=\"radio3\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correcta"]) ? $context["correcta"] : $this->getContext($context, "correcta")), 0, array()), "respuestaOk", array()), "html", null, true);
        echo "</label>
        </div>
        <div class=\"funkyradio-primary\">
            <input type=\"radio\" name=\"radio\" id=\"radio4\" value='";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")), 2, array()), "enunciado", array()), "html", null, true);
        echo "' class=\"radios\"/>
            <label for=\"radio4\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["respuestas"]) ? $context["respuestas"] : $this->getContext($context, "respuestas")), 2, array()), "enunciado", array()), "html", null, true);
        echo "</label>
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
        
        $__internal_6a589b15e717f8a7ae334149a1ff8e1fbd18097b0b7baf76b9f21e4d7120c9dd->leave($__internal_6a589b15e717f8a7ae334149a1ff8e1fbd18097b0b7baf76b9f21e4d7120c9dd_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5efb51fb1fa3843e4119d3605f6fec61290b067bf60926f83437400a903a2d7 = $this->env->getExtension("native_profiler");
        $__internal_e5efb51fb1fa3843e4119d3605f6fec61290b067bf60926f83437400a903a2d7->enter($__internal_e5efb51fb1fa3843e4119d3605f6fec61290b067bf60926f83437400a903a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo " <script type=\"text/javascript\">
     var correcte = '";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correcta"]) ? $context["correcta"] : $this->getContext($context, "correcta")), 0, array()), "respuestaOk", array()), "html", null, true);
        echo "';
         \$(document).ready(function(){
           \$('.radios').click(function(){
               var radio_selec = \$(this).val();
               if(radio_selec == correcte){
                   alert('CORRECTO');
               }else{
                   alert('ERROR');
               }
           });
  
        });
     
 </script>

";
        
        $__internal_e5efb51fb1fa3843e4119d3605f6fec61290b067bf60926f83437400a903a2d7->leave($__internal_e5efb51fb1fa3843e4119d3605f6fec61290b067bf60926f83437400a903a2d7_prof);

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
        return array (  176 => 99,  173 => 98,  167 => 97,  106 => 43,  102 => 42,  96 => 39,  92 => 38,  85 => 34,  81 => 33,  74 => 29,  70 => 28,  58 => 19,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/*     <h2>{{ preguntas}}</h2>*/
/*     <form>*/
/*     <div class="col-md-4 test">*/
/*     <div class="col-md-6">*/
/* */
/*     <div class="funkyradio">*/
/*     <div class="row">*/
/*         */
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio1" value='{{respuestas.0.enunciado}}' class="radios"/>*/
/*             <label for="radio1">{{respuestas.0.enunciado}}</label>*/
/*         </div>*/
/* */
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio2" value='{{respuestas.1.enunciado}}' class="radios"/>*/
/*             <label for="radio2">{{respuestas.1.enunciado}}</label>*/
/*         </div>*/
/* */
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio3" value='{{correcta.0.respuestaOk}}' class="radios"/>*/
/*             <label for="radio3">{{correcta.0.respuestaOk}}</label>*/
/*         </div>*/
/*         <div class="funkyradio-primary">*/
/*             <input type="radio" name="radio" id="radio4" value='{{respuestas.2.enunciado}}' class="radios"/>*/
/*             <label for="radio4">{{respuestas.2.enunciado}}</label>*/
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
/* {% block javascripts %}*/
/*  <script type="text/javascript">*/
/*      var correcte = '{{correcta.0.respuestaOk}}';*/
/*          $(document).ready(function(){*/
/*            $('.radios').click(function(){*/
/*                var radio_selec = $(this).val();*/
/*                if(radio_selec == correcte){*/
/*                    alert('CORRECTO');*/
/*                }else{*/
/*                    alert('ERROR');*/
/*                }*/
/*            });*/
/*   */
/*         });*/
/*      */
/*  </script>*/
/* */
/* {% endblock %}*/
