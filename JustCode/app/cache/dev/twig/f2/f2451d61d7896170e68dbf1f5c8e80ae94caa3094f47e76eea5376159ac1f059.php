<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c331fda850cbea1c98c7fa5a0c3190cca8bccfc06afb5a6ed1ddcf8d331c0c54 extends Twig_Template
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
        $__internal_319ba61950a6147db98184bb4771b5f225623b5c4cb63ba8c1fbf7ff9a22bc01 = $this->env->getExtension("native_profiler");
        $__internal_319ba61950a6147db98184bb4771b5f225623b5c4cb63ba8c1fbf7ff9a22bc01->enter($__internal_319ba61950a6147db98184bb4771b5f225623b5c4cb63ba8c1fbf7ff9a22bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_319ba61950a6147db98184bb4771b5f225623b5c4cb63ba8c1fbf7ff9a22bc01->leave($__internal_319ba61950a6147db98184bb4771b5f225623b5c4cb63ba8c1fbf7ff9a22bc01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
