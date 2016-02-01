<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9cb3a5795bb751a46735bf7e19393fe47f63b354999e910e71ad49adb6604ea1 extends Twig_Template
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
        $__internal_1f93402610dcddb3f6fbf301d5692acd45faa708d946732c7dd007c0a74b1287 = $this->env->getExtension("native_profiler");
        $__internal_1f93402610dcddb3f6fbf301d5692acd45faa708d946732c7dd007c0a74b1287->enter($__internal_1f93402610dcddb3f6fbf301d5692acd45faa708d946732c7dd007c0a74b1287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1f93402610dcddb3f6fbf301d5692acd45faa708d946732c7dd007c0a74b1287->leave($__internal_1f93402610dcddb3f6fbf301d5692acd45faa708d946732c7dd007c0a74b1287_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
