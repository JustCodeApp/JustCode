<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_66f1c915f7982e36d840a555f9b1986615ed8a1b4ec8824f9e455c1419b440be extends Twig_Template
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
        $__internal_8530ebd126504e1543cfed66340687dd2cebd9fb08e45f11a7867829c86dfbfe = $this->env->getExtension("native_profiler");
        $__internal_8530ebd126504e1543cfed66340687dd2cebd9fb08e45f11a7867829c86dfbfe->enter($__internal_8530ebd126504e1543cfed66340687dd2cebd9fb08e45f11a7867829c86dfbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8530ebd126504e1543cfed66340687dd2cebd9fb08e45f11a7867829c86dfbfe->leave($__internal_8530ebd126504e1543cfed66340687dd2cebd9fb08e45f11a7867829c86dfbfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
