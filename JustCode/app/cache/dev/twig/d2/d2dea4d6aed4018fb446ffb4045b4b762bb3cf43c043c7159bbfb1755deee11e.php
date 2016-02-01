<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f2a31f2b1fa2a6fde650da862c94d98ee3b8eedf2db93ce654872235d83320a1 extends Twig_Template
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
        $__internal_4ba42932f317165e836c14d740bc895f319df21947ee57fecb07dbac7c005cad = $this->env->getExtension("native_profiler");
        $__internal_4ba42932f317165e836c14d740bc895f319df21947ee57fecb07dbac7c005cad->enter($__internal_4ba42932f317165e836c14d740bc895f319df21947ee57fecb07dbac7c005cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4ba42932f317165e836c14d740bc895f319df21947ee57fecb07dbac7c005cad->leave($__internal_4ba42932f317165e836c14d740bc895f319df21947ee57fecb07dbac7c005cad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
