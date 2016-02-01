<?php

/* JustCodeactividadesBundle:Default:principal.html.twig */
class __TwigTemplate_a93071893a878f8302b42272977eba5e7dbca2bd197686b863bb4687b23ac569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JustCodeactividadesBundle:Default:principal.html.twig", 1);
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
        $__internal_dd15d629ee97efe43983c8bc20aa43e7527eed8b448d8fa1629c29f7b8113749 = $this->env->getExtension("native_profiler");
        $__internal_dd15d629ee97efe43983c8bc20aa43e7527eed8b448d8fa1629c29f7b8113749->enter($__internal_dd15d629ee97efe43983c8bc20aa43e7527eed8b448d8fa1629c29f7b8113749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustCodeactividadesBundle:Default:principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd15d629ee97efe43983c8bc20aa43e7527eed8b448d8fa1629c29f7b8113749->leave($__internal_dd15d629ee97efe43983c8bc20aa43e7527eed8b448d8fa1629c29f7b8113749_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96357a08322ae7e806d04d9d65f8e6c85fdf16ee2f739cd8a745c7be7bd6f1f3 = $this->env->getExtension("native_profiler");
        $__internal_96357a08322ae7e806d04d9d65f8e6c85fdf16ee2f739cd8a745c7be7bd6f1f3->enter($__internal_96357a08322ae7e806d04d9d65f8e6c85fdf16ee2f739cd8a745c7be7bd6f1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"fixed\">

\t\t\t<ul id=\"top-list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#s2\">About us</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#s3\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<section id=\"s1\">
\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logogrande(blanco).png"), "html", null, true);
        echo "\">
\t\t\t<form class=\"form-horizontal\" id=\"login\">
\t\t \t\t<div class=\"form-group\">
\t\t \t\t\t<label for=\"address\" class=\"control-label col-md-3 label-col\">User/Email</label>
\t\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"input-group\">
\t\t\t \t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t \t\t<span class=\"glyphicon glyphicon-user\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" name=\"user\" id=\"user\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
 \t\t
\t\t\t\t<div class=\"form-group\">
\t\t \t\t\t<label for=\"address\" class=\"control-label col-md-3 label-col\">Password</label>
\t\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"input-group\">
\t\t\t \t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t \t\t<span class=\"glyphicon glyphicon-asterisk\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" id=\"login-button\">PLAY</button>
\t\t\t\t<p id=\"keep-log\"><input type=\"checkbox\"> <span>Remember</span><a href=\"#\">SING UP</a></p>
\t\t\t</form>
\t\t</section>
\t\t<section id=\"s2\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\" style=\"margin-left:15px;margin-right:15px;\">
\t\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div id=\"about-container\">
\t\t\t\t\t\t\t<h3>ABOUT</h3>
\t\t\t\t\t\t\t<p class=\"about\">JustCode is a online aplication where the user learn a programming language with diferent levels of exercises. Start now and know a funny way to learn Java, JavaScript, PHP, HTML, CSS...</p>
\t\t\t\t\t\t\t<p class=\"about\" id=\"no-title\">Learn and play</p>
\t\t\t\t\t\t\t<p class=\"about\">JustCode is a online aplication where the user learn a programming language with diferent levels of exercises. Start now and know a funny way to learn Java, JavaScript, PHP, HTML, CSS...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section id=\"s3\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\" style=\"margin-left:15px;margin-right:15px;\">
\t\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4 class=\"contact\">Contact</h4>
\t\t\t\t\t\t<p class=\"contact\">Ask us anything, we'll answer your question as soon as we can</p>
\t\t\t\t\t\t<form class=\"form-horizontal\" id=\"login\">
\t\t\t\t\t \t\t<div class=\"form-group\">
\t\t\t\t\t\t \t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"user\" id=\"user\" class=\"form-control\" placeholder=\"Name\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t \t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"user\" id=\"user\" class=\"form-control\" placeholder=\"Email\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t \t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"10\" cols=\"40\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" id=\"login-button\">SEND</button>
\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t</div>
\t\t\t</div>
";
        
        $__internal_96357a08322ae7e806d04d9d65f8e6c85fdf16ee2f739cd8a745c7be7bd6f1f3->leave($__internal_96357a08322ae7e806d04d9d65f8e6c85fdf16ee2f739cd8a745c7be7bd6f1f3_prof);

    }

    public function getTemplateName()
    {
        return "JustCodeactividadesBundle:Default:principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="fixed">*/
/* */
/* 			<ul id="top-list">*/
/* 				<li>*/
/* 					<a href="#s2">About us</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="#s3">Contact</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		<section id="s1">*/
/* 			<img src="{{ asset('img/logogrande(blanco).png') }}">*/
/* 			<form class="form-horizontal" id="login">*/
/* 		 		<div class="form-group">*/
/* 		 			<label for="address" class="control-label col-md-3 label-col">User/Email</label>*/
/* 		 			<div class="col-md-6">*/
/* 			 			<div class="input-group">*/
/* 			 				<div class="input-group-addon">*/
/* 						 		<span class="glyphicon glyphicon-user"></span>*/
/* 							</div>*/
/* 							<input type="text" name="user" id="user" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*  		*/
/* 				<div class="form-group">*/
/* 		 			<label for="address" class="control-label col-md-3 label-col">Password</label>*/
/* 		 			<div class="col-md-6">*/
/* 			 			<div class="input-group">*/
/* 			 				<div class="input-group-addon">*/
/* 						 		<span class="glyphicon glyphicon-asterisk"></span>*/
/* 							</div>*/
/* 							<input type="password" name="password" id="password" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<button type="submit" id="login-button">PLAY</button>*/
/* 				<p id="keep-log"><input type="checkbox"> <span>Remember</span><a href="#">SING UP</a></p>*/
/* 			</form>*/
/* 		</section>*/
/* 		<section id="s2">*/
/* 			<div class="container">*/
/* 				<div class="row" style="margin-left:15px;margin-right:15px;">*/
/* 					<div class="col-md-2"></div>*/
/* 					<div class="col-md-5">*/
/* 						*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div id="about-container">*/
/* 							<h3>ABOUT</h3>*/
/* 							<p class="about">JustCode is a online aplication where the user learn a programming language with diferent levels of exercises. Start now and know a funny way to learn Java, JavaScript, PHP, HTML, CSS...</p>*/
/* 							<p class="about" id="no-title">Learn and play</p>*/
/* 							<p class="about">JustCode is a online aplication where the user learn a programming language with diferent levels of exercises. Start now and know a funny way to learn Java, JavaScript, PHP, HTML, CSS...</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-2"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</section>*/
/* 		<section id="s3">*/
/* 			<div class="container">*/
/* 				<div class="row" style="margin-left:15px;margin-right:15px;">*/
/* 					<div class="col-md-3"></div>*/
/* 					<div class="col-md-6">*/
/* 						<h4 class="contact">Contact</h4>*/
/* 						<p class="contact">Ask us anything, we'll answer your question as soon as we can</p>*/
/* 						<form class="form-horizontal" id="login">*/
/* 					 		<div class="form-group">*/
/* 						 			<div class="input-group">*/
/* 										<input type="text" name="user" id="user" class="form-control" placeholder="Name"/>*/
/* 									</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 						 			<div class="input-group">*/
/* 										<input type="text" name="user" id="user" class="form-control" placeholder="Email"/>*/
/* 									</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 						 			<div class="input-group">*/
/* 										<textarea class="form-control" rows="10" cols="40" placeholder="Message"></textarea>*/
/* 									</div>*/
/* 							</div>*/
/* 							<button type="submit" id="login-button">SEND</button>*/
/* 					</form>*/
/* 					</div>*/
/* 					<div class="col-md-3"></div>*/
/* 				</div>*/
/* 			</div>*/
/* {% endblock %}*/
