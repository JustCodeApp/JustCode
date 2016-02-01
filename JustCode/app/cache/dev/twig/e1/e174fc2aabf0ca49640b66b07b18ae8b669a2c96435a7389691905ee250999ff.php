<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_be5c2805775c089a7c96a08add7aa76b5c0be8b89b139415051cbfcc2ef5657b extends Twig_Template
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
        $__internal_391641dd657c69a6456357ce1ab777f85a52f1252e9bac35185f087e6ff3d1c9 = $this->env->getExtension("native_profiler");
        $__internal_391641dd657c69a6456357ce1ab777f85a52f1252e9bac35185f087e6ff3d1c9->enter($__internal_391641dd657c69a6456357ce1ab777f85a52f1252e9bac35185f087e6ff3d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_391641dd657c69a6456357ce1ab777f85a52f1252e9bac35185f087e6ff3d1c9->leave($__internal_391641dd657c69a6456357ce1ab777f85a52f1252e9bac35185f087e6ff3d1c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
