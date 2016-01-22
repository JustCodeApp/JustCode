<?php

/* JustCodeactividadesBundle:Default:compilator.html.twig */
class __TwigTemplate_e486d80c9b2fd71535d4ac4390af91e1419fc7e89bef08bdfafde0296d95cc6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JustCodeactividadesBundle:Default:compilator.html.twig", 1);
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
        $__internal_7f09bdd45903c9627d0452bad3cf06d7efd40653922e21ff676194b6c99946b0 = $this->env->getExtension("native_profiler");
        $__internal_7f09bdd45903c9627d0452bad3cf06d7efd40653922e21ff676194b6c99946b0->enter($__internal_7f09bdd45903c9627d0452bad3cf06d7efd40653922e21ff676194b6c99946b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:compilator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f09bdd45903c9627d0452bad3cf06d7efd40653922e21ff676194b6c99946b0->leave($__internal_7f09bdd45903c9627d0452bad3cf06d7efd40653922e21ff676194b6c99946b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c0d9b16ed492b6d6fc6963c14a63b635039c8034685689c553586b3c8c35e41 = $this->env->getExtension("native_profiler");
        $__internal_9c0d9b16ed492b6d6fc6963c14a63b635039c8034685689c553586b3c8c35e41->enter($__internal_9c0d9b16ed492b6d6fc6963c14a63b635039c8034685689c553586b3c8c35e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"wrapper\">
<!-- Menú -->

    <div class=\"navbar navbar-inverse navbar-fixed-top\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <div class=\"logo\"><a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoblanco.png"), "html", null, true);
        echo "\" /></a></div>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\">My progress</a></li>
                     <li><a href=\"#\">Settings</a></li>
                    <li><a href=\"#\">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-- Aquí empieza la actividad Compilador -->
<div class=\"row\">
    <div class=\"col-sm-2\">
</div>
<div class=\"col-sm-8\">
    <h3 class=\"nivel\">JAVA Level 1</h3>
    <h1 class=\"actividad\">Activity 03</h1>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>

    <h3 class=\"elegir\">Code here</h3>
    <h2>¡Let's code!</h2>

    <form>

<br><br>
    
    <!-- Insertar aquí código de el compilador -->

    <textarea  rows=\"10\" cols=\"65\"></textarea>
    <button class=\"btn btn-sm btn-warning\" type=\"button\">See Result »</button>
    <textarea  rows=\"10\" cols=\"65\"></textarea>

    <!-- Se acaba el compilador -->
<br><br>
        
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
        
        $__internal_9c0d9b16ed492b6d6fc6963c14a63b635039c8034685689c553586b3c8c35e41->leave($__internal_9c0d9b16ed492b6d6fc6963c14a63b635039c8034685689c553586b3c8c35e41_prof);

    }

    public function getTemplateName()
    {
        return "JustCodeactividadesBundle:Default:compilator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="wrapper">*/
/* <!-- Menú -->*/
/* */
/*     <div class="navbar navbar-inverse navbar-fixed-top" >*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <div class="logo"><a class="navbar-brand" href="#"><img src="{{ asset('img/logoblanco.png') }}" /></a></div>*/
/*             </div>*/
/*             <div class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="#">My progress</a></li>*/
/*                      <li><a href="#">Settings</a></li>*/
/*                     <li><a href="#">Log Out</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* <!-- Aquí empieza la actividad Compilador -->*/
/* <div class="row">*/
/*     <div class="col-sm-2">*/
/* </div>*/
/* <div class="col-sm-8">*/
/*     <h3 class="nivel">JAVA Level 1</h3>*/
/*     <h1 class="actividad">Activity 03</h1>*/
/* */
/*     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>*/
/* */
/*     <h3 class="elegir">Code here</h3>*/
/*     <h2>¡Let's code!</h2>*/
/* */
/*     <form>*/
/* */
/* <br><br>*/
/*     */
/*     <!-- Insertar aquí código de el compilador -->*/
/* */
/*     <textarea  rows="10" cols="65"></textarea>*/
/*     <button class="btn btn-sm btn-warning" type="button">See Result »</button>*/
/*     <textarea  rows="10" cols="65"></textarea>*/
/* */
/*     <!-- Se acaba el compilador -->*/
/* <br><br>*/
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
