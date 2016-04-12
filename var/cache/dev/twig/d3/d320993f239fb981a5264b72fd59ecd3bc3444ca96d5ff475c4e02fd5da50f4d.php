<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9c0f00b0593699d2e3e7b793eda7989689e6df0976675c591d136e6f48d4377f extends Twig_Template
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
        $__internal_4f938a84d4974a11b56c3d891792ac3a3f15ebb8c730b0a66994954b3a835a26 = $this->env->getExtension("native_profiler");
        $__internal_4f938a84d4974a11b56c3d891792ac3a3f15ebb8c730b0a66994954b3a835a26->enter($__internal_4f938a84d4974a11b56c3d891792ac3a3f15ebb8c730b0a66994954b3a835a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4f938a84d4974a11b56c3d891792ac3a3f15ebb8c730b0a66994954b3a835a26->leave($__internal_4f938a84d4974a11b56c3d891792ac3a3f15ebb8c730b0a66994954b3a835a26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
