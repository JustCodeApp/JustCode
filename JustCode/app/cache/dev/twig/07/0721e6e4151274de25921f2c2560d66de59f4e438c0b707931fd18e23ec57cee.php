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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9769b0d0bc4dfc1e116ba0a182a3ba964027a7a3c9c3242ba20547cc6b4eae8d = $this->env->getExtension("native_profiler");
        $__internal_9769b0d0bc4dfc1e116ba0a182a3ba964027a7a3c9c3242ba20547cc6b4eae8d->enter($__internal_9769b0d0bc4dfc1e116ba0a182a3ba964027a7a3c9c3242ba20547cc6b4eae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:verdaderofalso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9769b0d0bc4dfc1e116ba0a182a3ba964027a7a3c9c3242ba20547cc6b4eae8d->leave($__internal_9769b0d0bc4dfc1e116ba0a182a3ba964027a7a3c9c3242ba20547cc6b4eae8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a37c04b39e95cda2cd36d07f96fd17897c4fae37a6d6933c6c95789b285f7ddb = $this->env->getExtension("native_profiler");
        $__internal_a37c04b39e95cda2cd36d07f96fd17897c4fae37a6d6933c6c95789b285f7ddb->enter($__internal_a37c04b39e95cda2cd36d07f96fd17897c4fae37a6d6933c6c95789b285f7ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                  <label class=\"btn btn-info btn-circle btn-lg funkyradio active\"><input type=\"radio\" name=\"q2\" value=\"1\"><i class=\"glyphicon glyphicon-ok\" checked></i></label>
            </div>
            <div class=\"col-md-6\">
                  <label class=\"btn btn-danger funkyradio btn-circle btn-lg\"><input type=\"radio\" name=\"q2\" value=\"2\"><i class=\"glyphicon glyphicon-remove\"></i></label>
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
        
        $__internal_a37c04b39e95cda2cd36d07f96fd17897c4fae37a6d6933c6c95789b285f7ddb->leave($__internal_a37c04b39e95cda2cd36d07f96fd17897c4fae37a6d6933c6c95789b285f7ddb_prof);

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
        return array (  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
/*                   <label class="btn btn-info btn-circle btn-lg funkyradio active"><input type="radio" name="q2" value="1"><i class="glyphicon glyphicon-ok" checked></i></label>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                   <label class="btn btn-danger funkyradio btn-circle btn-lg"><input type="radio" name="q2" value="2"><i class="glyphicon glyphicon-remove"></i></label>*/
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
