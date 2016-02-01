<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6f1c9f2f2a13cd1d354f681adcdbd9125cba81398047573aa35d8746a5609a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81eb45bedf56a5773a90ade01ddbae29e4b9f567c0969649c14c85e2cfaee6dd = $this->env->getExtension("native_profiler");
        $__internal_81eb45bedf56a5773a90ade01ddbae29e4b9f567c0969649c14c85e2cfaee6dd->enter($__internal_81eb45bedf56a5773a90ade01ddbae29e4b9f567c0969649c14c85e2cfaee6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_81eb45bedf56a5773a90ade01ddbae29e4b9f567c0969649c14c85e2cfaee6dd->leave($__internal_81eb45bedf56a5773a90ade01ddbae29e4b9f567c0969649c14c85e2cfaee6dd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7488f5cc83e3552f1a76901b50e9b525d8bac72d9217c04ac2115e08bb2163c8 = $this->env->getExtension("native_profiler");
        $__internal_7488f5cc83e3552f1a76901b50e9b525d8bac72d9217c04ac2115e08bb2163c8->enter($__internal_7488f5cc83e3552f1a76901b50e9b525d8bac72d9217c04ac2115e08bb2163c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7488f5cc83e3552f1a76901b50e9b525d8bac72d9217c04ac2115e08bb2163c8->leave($__internal_7488f5cc83e3552f1a76901b50e9b525d8bac72d9217c04ac2115e08bb2163c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
