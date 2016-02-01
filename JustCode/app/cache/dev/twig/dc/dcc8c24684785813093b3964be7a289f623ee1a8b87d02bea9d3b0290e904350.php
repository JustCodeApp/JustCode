<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b557d7b98a0d81771ec340bb6b0b6333397d8cd700ee3775a8d7c990121a8145 extends Twig_Template
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
        $__internal_f205e878916c9900033235425ae8efbeb80596f180488c1c3cce962c51cc2145 = $this->env->getExtension("native_profiler");
        $__internal_f205e878916c9900033235425ae8efbeb80596f180488c1c3cce962c51cc2145->enter($__internal_f205e878916c9900033235425ae8efbeb80596f180488c1c3cce962c51cc2145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f205e878916c9900033235425ae8efbeb80596f180488c1c3cce962c51cc2145->leave($__internal_f205e878916c9900033235425ae8efbeb80596f180488c1c3cce962c51cc2145_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
