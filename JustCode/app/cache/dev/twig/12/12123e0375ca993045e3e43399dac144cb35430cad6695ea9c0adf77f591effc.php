<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7326ab2d591a0b1fa9893b0068f92480a57a2107b2a777d1424008c762ad1e18 extends Twig_Template
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
        $__internal_8dc7c403b6cc66ab1c5be10bdd07ce8b1d84f74cb355d990b2501248165fb963 = $this->env->getExtension("native_profiler");
        $__internal_8dc7c403b6cc66ab1c5be10bdd07ce8b1d84f74cb355d990b2501248165fb963->enter($__internal_8dc7c403b6cc66ab1c5be10bdd07ce8b1d84f74cb355d990b2501248165fb963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8dc7c403b6cc66ab1c5be10bdd07ce8b1d84f74cb355d990b2501248165fb963->leave($__internal_8dc7c403b6cc66ab1c5be10bdd07ce8b1d84f74cb355d990b2501248165fb963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
