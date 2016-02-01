<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_639fb2a65219d4d50385a2f7688e99e83925b82f4979a8a84aeed4c882dfe17b extends Twig_Template
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
        $__internal_d63b6e3e38c5819ff5ae0321b21bd1965889b06d75bec34f910bb5c1feaa8e05 = $this->env->getExtension("native_profiler");
        $__internal_d63b6e3e38c5819ff5ae0321b21bd1965889b06d75bec34f910bb5c1feaa8e05->enter($__internal_d63b6e3e38c5819ff5ae0321b21bd1965889b06d75bec34f910bb5c1feaa8e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d63b6e3e38c5819ff5ae0321b21bd1965889b06d75bec34f910bb5c1feaa8e05->leave($__internal_d63b6e3e38c5819ff5ae0321b21bd1965889b06d75bec34f910bb5c1feaa8e05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
