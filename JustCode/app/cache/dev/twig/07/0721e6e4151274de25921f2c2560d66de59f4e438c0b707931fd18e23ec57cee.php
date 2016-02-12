<?php

/* JustCodeactividadesBundle:Default:verdaderofalso.html.twig */
class __TwigTemplate_7a08ac81a2f782f5d1d29f49856c9255219e64baa80f3923040ba9123273ca2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JustCodeactividadesBundle:Default:verdaderofalso.html.twig", 1);
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
        $__internal_a7b059be29f61376edb29a9d253f01187ffd3917bfa3aa42da61fb4b0e10c69b = $this->env->getExtension("native_profiler");
        $__internal_a7b059be29f61376edb29a9d253f01187ffd3917bfa3aa42da61fb4b0e10c69b->enter($__internal_a7b059be29f61376edb29a9d253f01187ffd3917bfa3aa42da61fb4b0e10c69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:verdaderofalso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b059be29f61376edb29a9d253f01187ffd3917bfa3aa42da61fb4b0e10c69b->leave($__internal_a7b059be29f61376edb29a9d253f01187ffd3917bfa3aa42da61fb4b0e10c69b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fc0a6e28b6386801b449d67907ada55dfce4b348746c451481c0923ce727336 = $this->env->getExtension("native_profiler");
        $__internal_7fc0a6e28b6386801b449d67907ada55dfce4b348746c451481c0923ce727336->enter($__internal_7fc0a6e28b6386801b449d67907ada55dfce4b348746c451481c0923ce727336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"wrapper\">

<!-- Aquí empieza la actividad Verdadero/falso -->
<div class=\"row\">
    <div class=\"col-sm-2\">
</div>
<div class=\"col-sm-8\">
    <h3 class=\"nivel\">JAVA Level 1</h3>
    <h1 class=\"actividad\">Activity 03</h1>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>

    <h3 class=\"elegir\">True or False?</h3>
    
         <h1>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["preguntas"]) ? $context["preguntas"] : $this->getContext($context, "preguntas")), "html", null, true);
        echo "</h1>
    <form>

<br><br>
    
    <div class=\"row\">
        <div class=\"center\" data-toggle=\"buttons\">
            <div class=\"col-md-6\">
                  <label class=\"btn btn-info btn-circle btn-lg funkyradio\"><input type=\"radio\" name=\"q2\" value=\"Si\" id=\"boton\"><i class=\"glyphicon glyphicon-ok\"></i></label>
            </div>
            <div class=\"col-md-6\" id=\"divrojo\">
                  <label class=\"btn btn-danger funkyradio btn-circle btn-lg botonrojo\"><input type=\"radio\" name=\"q2\" value=\"No\" id=\"boton1\"><i class=\"glyphicon glyphicon-remove\"></i></label>
            </div>
        </div>
    </div>
        
        <div class=\"derecha\">
            <a href=\"#\" class=\"btn btn-lg btn-default \">Skip</a>
            <input type=\"submit\" value=\"Send\" class=\"btn btn-lg btn-warning\" />
        </div>
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
        
        $__internal_7fc0a6e28b6386801b449d67907ada55dfce4b348746c451481c0923ce727336->leave($__internal_7fc0a6e28b6386801b449d67907ada55dfce4b348746c451481c0923ce727336_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca7ecb707e49bc770b9349a4dc7515eb58c26de7dc05a8b501c68132936ec319 = $this->env->getExtension("native_profiler");
        $__internal_ca7ecb707e49bc770b9349a4dc7515eb58c26de7dc05a8b501c68132936ec319->enter($__internal_ca7ecb707e49bc770b9349a4dc7515eb58c26de7dc05a8b501c68132936ec319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo " <script type=\"text/javascript\">
  var correcte = '";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["correcta"]) ? $context["correcta"] : $this->getContext($context, "correcta")), 0, array()), "respuestaOk", array()), "html", null, true);
        echo "';
        \$(document).ready(function(){
          \$('#boton').change(function(){
              \$('#divrojo').prop('visibility','hidden');
          })
        });
     
 </script>

";
        
        $__internal_ca7ecb707e49bc770b9349a4dc7515eb58c26de7dc05a8b501c68132936ec319->leave($__internal_ca7ecb707e49bc770b9349a4dc7515eb58c26de7dc05a8b501c68132936ec319_prof);

    }

    public function getTemplateName()
    {
        return "JustCodeactividadesBundle:Default:verdaderofalso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 84,  134 => 83,  128 => 82,  58 => 19,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="wrapper">*/
/* */
/* <!-- Aquí empieza la actividad Verdadero/falso -->*/
/* <div class="row">*/
/*     <div class="col-sm-2">*/
/* </div>*/
/* <div class="col-sm-8">*/
/*     <h3 class="nivel">JAVA Level 1</h3>*/
/*     <h1 class="actividad">Activity 03</h1>*/
/* */
/*     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>*/
/* */
/*     <h3 class="elegir">True or False?</h3>*/
/*     */
/*          <h1>{{ preguntas }}</h1>*/
/*     <form>*/
/* */
/* <br><br>*/
/*     */
/*     <div class="row">*/
/*         <div class="center" data-toggle="buttons">*/
/*             <div class="col-md-6">*/
/*                   <label class="btn btn-info btn-circle btn-lg funkyradio"><input type="radio" name="q2" value="Si" id="boton"><i class="glyphicon glyphicon-ok"></i></label>*/
/*             </div>*/
/*             <div class="col-md-6" id="divrojo">*/
/*                   <label class="btn btn-danger funkyradio btn-circle btn-lg botonrojo"><input type="radio" name="q2" value="No" id="boton1"><i class="glyphicon glyphicon-remove"></i></label>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*         */
/*         <div class="derecha">*/
/*             <a href="#" class="btn btn-lg btn-default ">Skip</a>*/
/*             <input type="submit" value="Send" class="btn btn-lg btn-warning" />*/
/*         </div>*/
/* </div>*/
/*     */
/* */
/* */
/*     </form>*/
/* */
/* <div class="col-sm-2"></div>*/
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
/* {% endblock %}*/
/* {% block javascripts %}*/
/*  <script type="text/javascript">*/
/*   var correcte = '{{correcta.0.respuestaOk}}';*/
/*         $(document).ready(function(){*/
/*           $('#boton').change(function(){*/
/*               $('#divrojo').prop('visibility','hidden');*/
/*           })*/
/*         });*/
/*      */
/*  </script>*/
/* */
/* {% endblock %}*/
