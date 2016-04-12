<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1bb4cf6015750e31d1b1d1d8ca866356aa1fe622a526bd605a457819e1b4aaea extends Twig_Template
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
        $__internal_a46b6b0d55adbd00695d2571f9409ae7d3b2a52a50304dd52e7771d6ab574282 = $this->env->getExtension("native_profiler");
        $__internal_a46b6b0d55adbd00695d2571f9409ae7d3b2a52a50304dd52e7771d6ab574282->enter($__internal_a46b6b0d55adbd00695d2571f9409ae7d3b2a52a50304dd52e7771d6ab574282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a46b6b0d55adbd00695d2571f9409ae7d3b2a52a50304dd52e7771d6ab574282->leave($__internal_a46b6b0d55adbd00695d2571f9409ae7d3b2a52a50304dd52e7771d6ab574282_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e0d980dee0aee64136449b3b0f79c08b1caecbfc8c52ba0952093220b72e94e = $this->env->getExtension("native_profiler");
        $__internal_8e0d980dee0aee64136449b3b0f79c08b1caecbfc8c52ba0952093220b72e94e->enter($__internal_8e0d980dee0aee64136449b3b0f79c08b1caecbfc8c52ba0952093220b72e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8e0d980dee0aee64136449b3b0f79c08b1caecbfc8c52ba0952093220b72e94e->leave($__internal_8e0d980dee0aee64136449b3b0f79c08b1caecbfc8c52ba0952093220b72e94e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
