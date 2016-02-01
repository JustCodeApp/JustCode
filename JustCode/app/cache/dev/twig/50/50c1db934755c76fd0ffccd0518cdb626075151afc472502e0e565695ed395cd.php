<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_17d06b031f71ed00629cbe51a5a7505c03356020088b81b77aeb94a3beb6fb63 extends Twig_Template
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
        $__internal_6f0820d376f2d81d9d7e86a61d7a9e4d24a5d3db58237ed063a3f8f942eed7aa = $this->env->getExtension("native_profiler");
        $__internal_6f0820d376f2d81d9d7e86a61d7a9e4d24a5d3db58237ed063a3f8f942eed7aa->enter($__internal_6f0820d376f2d81d9d7e86a61d7a9e4d24a5d3db58237ed063a3f8f942eed7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f0820d376f2d81d9d7e86a61d7a9e4d24a5d3db58237ed063a3f8f942eed7aa->leave($__internal_6f0820d376f2d81d9d7e86a61d7a9e4d24a5d3db58237ed063a3f8f942eed7aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
