<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_305961820cd56b75faa3bef947bae08b60d99866d1c253ede472b576e5d574b5 extends Twig_Template
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
        $__internal_97657a57275ed069866e819e3c123821ae975b55addc8145fa6b922939df6028 = $this->env->getExtension("native_profiler");
        $__internal_97657a57275ed069866e819e3c123821ae975b55addc8145fa6b922939df6028->enter($__internal_97657a57275ed069866e819e3c123821ae975b55addc8145fa6b922939df6028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_97657a57275ed069866e819e3c123821ae975b55addc8145fa6b922939df6028->leave($__internal_97657a57275ed069866e819e3c123821ae975b55addc8145fa6b922939df6028_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
