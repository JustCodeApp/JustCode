<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f4b96b555e36b90a05025f3e65ef78ea50ed6422d0779eee9ad73e48a2f3d3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3331dafaf14846caa06da92adc6d647e4ba47a8f3baf943810c57004f180f7f = $this->env->getExtension("native_profiler");
        $__internal_d3331dafaf14846caa06da92adc6d647e4ba47a8f3baf943810c57004f180f7f->enter($__internal_d3331dafaf14846caa06da92adc6d647e4ba47a8f3baf943810c57004f180f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d3331dafaf14846caa06da92adc6d647e4ba47a8f3baf943810c57004f180f7f->leave($__internal_d3331dafaf14846caa06da92adc6d647e4ba47a8f3baf943810c57004f180f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
