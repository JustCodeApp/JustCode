<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7df5835e0365410566e7d33f72f296bb6fac4d78ce4773a069465ed3bfcd17a extends Twig_Template
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
        $__internal_3abe44f534c244ad0d9706f67fa2224a5607e5146300425d4d37afd0ed08360f = $this->env->getExtension("native_profiler");
        $__internal_3abe44f534c244ad0d9706f67fa2224a5607e5146300425d4d37afd0ed08360f->enter($__internal_3abe44f534c244ad0d9706f67fa2224a5607e5146300425d4d37afd0ed08360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3abe44f534c244ad0d9706f67fa2224a5607e5146300425d4d37afd0ed08360f->leave($__internal_3abe44f534c244ad0d9706f67fa2224a5607e5146300425d4d37afd0ed08360f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
