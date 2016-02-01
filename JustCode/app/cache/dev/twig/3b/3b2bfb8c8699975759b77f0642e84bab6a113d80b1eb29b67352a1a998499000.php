<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc71b5556731a8c846068a6e15194bec1dde46e2c4699b869b4d9de065090d41 extends Twig_Template
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
        $__internal_991c3304512707837bee6b1e8ab4e24bd57d21a4da364623570274d5898f1f1a = $this->env->getExtension("native_profiler");
        $__internal_991c3304512707837bee6b1e8ab4e24bd57d21a4da364623570274d5898f1f1a->enter($__internal_991c3304512707837bee6b1e8ab4e24bd57d21a4da364623570274d5898f1f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_991c3304512707837bee6b1e8ab4e24bd57d21a4da364623570274d5898f1f1a->leave($__internal_991c3304512707837bee6b1e8ab4e24bd57d21a4da364623570274d5898f1f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
