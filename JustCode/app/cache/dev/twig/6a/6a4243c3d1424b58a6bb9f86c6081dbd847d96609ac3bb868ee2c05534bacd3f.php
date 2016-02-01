<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ad750ec883a4897b42d654ceb982df7ee6d32be3d8146865d0a0f0e9eeaff874 extends Twig_Template
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
        $__internal_2ecef24ba04bdfd7aa1c2e41693009d78385d28e36cc59cf001e104065a13ed4 = $this->env->getExtension("native_profiler");
        $__internal_2ecef24ba04bdfd7aa1c2e41693009d78385d28e36cc59cf001e104065a13ed4->enter($__internal_2ecef24ba04bdfd7aa1c2e41693009d78385d28e36cc59cf001e104065a13ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2ecef24ba04bdfd7aa1c2e41693009d78385d28e36cc59cf001e104065a13ed4->leave($__internal_2ecef24ba04bdfd7aa1c2e41693009d78385d28e36cc59cf001e104065a13ed4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
