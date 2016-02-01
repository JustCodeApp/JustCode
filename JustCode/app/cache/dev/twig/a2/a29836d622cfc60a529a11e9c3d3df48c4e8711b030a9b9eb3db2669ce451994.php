<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b2392ce7d1bf6c4efcbe9c4ff50d2d99cb4cfacc0a6267db360257e2e21b6aec extends Twig_Template
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
        $__internal_61fa8db82d6feb47dff7bb6d29a2cbb71b51426953b1e8218dc388046176fad7 = $this->env->getExtension("native_profiler");
        $__internal_61fa8db82d6feb47dff7bb6d29a2cbb71b51426953b1e8218dc388046176fad7->enter($__internal_61fa8db82d6feb47dff7bb6d29a2cbb71b51426953b1e8218dc388046176fad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_61fa8db82d6feb47dff7bb6d29a2cbb71b51426953b1e8218dc388046176fad7->leave($__internal_61fa8db82d6feb47dff7bb6d29a2cbb71b51426953b1e8218dc388046176fad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
