<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3f3def22c423457938f98478c5df95080a028f1b5c6df8b5b70e656a39e4aba0 extends Twig_Template
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
        $__internal_ae7a344a7b31e25cb9e91230c516c041ec9f42905d9d651729ca57b2d781e7f0 = $this->env->getExtension("native_profiler");
        $__internal_ae7a344a7b31e25cb9e91230c516c041ec9f42905d9d651729ca57b2d781e7f0->enter($__internal_ae7a344a7b31e25cb9e91230c516c041ec9f42905d9d651729ca57b2d781e7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ae7a344a7b31e25cb9e91230c516c041ec9f42905d9d651729ca57b2d781e7f0->leave($__internal_ae7a344a7b31e25cb9e91230c516c041ec9f42905d9d651729ca57b2d781e7f0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c360dbcb6f67c6fb35f22a09cc0f261ee1f3b6a430e418ac006e8b4c91a04f25 = $this->env->getExtension("native_profiler");
        $__internal_c360dbcb6f67c6fb35f22a09cc0f261ee1f3b6a430e418ac006e8b4c91a04f25->enter($__internal_c360dbcb6f67c6fb35f22a09cc0f261ee1f3b6a430e418ac006e8b4c91a04f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c360dbcb6f67c6fb35f22a09cc0f261ee1f3b6a430e418ac006e8b4c91a04f25->leave($__internal_c360dbcb6f67c6fb35f22a09cc0f261ee1f3b6a430e418ac006e8b4c91a04f25_prof);

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
