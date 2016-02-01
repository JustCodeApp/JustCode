<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_592e2d075cb92bce6a683aea47b5bdd64718c081945c71f42dc1ce36526ced81 extends Twig_Template
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
        $__internal_f91a99904aa9c613b911b4857aec6c95e2d712ac3a28436ca6f244f9eae5eb85 = $this->env->getExtension("native_profiler");
        $__internal_f91a99904aa9c613b911b4857aec6c95e2d712ac3a28436ca6f244f9eae5eb85->enter($__internal_f91a99904aa9c613b911b4857aec6c95e2d712ac3a28436ca6f244f9eae5eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f91a99904aa9c613b911b4857aec6c95e2d712ac3a28436ca6f244f9eae5eb85->leave($__internal_f91a99904aa9c613b911b4857aec6c95e2d712ac3a28436ca6f244f9eae5eb85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
