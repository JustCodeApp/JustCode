<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_40f98941e390872532540f5241addd54c9ad5813b8eed51f41f21c3ed1dc5dc6 extends Twig_Template
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
        $__internal_9bc15b26d4a2a4b048de7878ae7c8f59b60fac7b496302c0784fea37dc9cbd19 = $this->env->getExtension("native_profiler");
        $__internal_9bc15b26d4a2a4b048de7878ae7c8f59b60fac7b496302c0784fea37dc9cbd19->enter($__internal_9bc15b26d4a2a4b048de7878ae7c8f59b60fac7b496302c0784fea37dc9cbd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9bc15b26d4a2a4b048de7878ae7c8f59b60fac7b496302c0784fea37dc9cbd19->leave($__internal_9bc15b26d4a2a4b048de7878ae7c8f59b60fac7b496302c0784fea37dc9cbd19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
