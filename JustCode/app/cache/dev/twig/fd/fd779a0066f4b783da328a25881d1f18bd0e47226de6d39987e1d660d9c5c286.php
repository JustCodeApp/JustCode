<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_96a4b41682429ff300f44f6d137b37c36d6e5d2ee65bef310234d798ac3dad2f extends Twig_Template
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
        $__internal_2eca40c81d5037bac1c60739a389e3d9fce0e8feccef7a06d0a969d1a9f3e28e = $this->env->getExtension("native_profiler");
        $__internal_2eca40c81d5037bac1c60739a389e3d9fce0e8feccef7a06d0a969d1a9f3e28e->enter($__internal_2eca40c81d5037bac1c60739a389e3d9fce0e8feccef7a06d0a969d1a9f3e28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2eca40c81d5037bac1c60739a389e3d9fce0e8feccef7a06d0a969d1a9f3e28e->leave($__internal_2eca40c81d5037bac1c60739a389e3d9fce0e8feccef7a06d0a969d1a9f3e28e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
