<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_24f2a976e8080ea62e8e77a93d9432892b32fd8b0a15bdf0f46430fb8237010e extends Twig_Template
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
        $__internal_94a7f9bf4dce717ab771ac5eb32c8e2431bfbb80c32cc55cfc0bebd1115ba45f = $this->env->getExtension("native_profiler");
        $__internal_94a7f9bf4dce717ab771ac5eb32c8e2431bfbb80c32cc55cfc0bebd1115ba45f->enter($__internal_94a7f9bf4dce717ab771ac5eb32c8e2431bfbb80c32cc55cfc0bebd1115ba45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_94a7f9bf4dce717ab771ac5eb32c8e2431bfbb80c32cc55cfc0bebd1115ba45f->leave($__internal_94a7f9bf4dce717ab771ac5eb32c8e2431bfbb80c32cc55cfc0bebd1115ba45f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
