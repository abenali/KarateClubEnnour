<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ec45339c089f3d4b46cde67de4862e6b9846ae9d7cc92ac037aa21c210676ae9 extends Twig_Template
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
        $__internal_02c0c4f52c4bf34620effb3c0467516c07da759a8cc8ca7e02592b94d2f91166 = $this->env->getExtension("native_profiler");
        $__internal_02c0c4f52c4bf34620effb3c0467516c07da759a8cc8ca7e02592b94d2f91166->enter($__internal_02c0c4f52c4bf34620effb3c0467516c07da759a8cc8ca7e02592b94d2f91166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_02c0c4f52c4bf34620effb3c0467516c07da759a8cc8ca7e02592b94d2f91166->leave($__internal_02c0c4f52c4bf34620effb3c0467516c07da759a8cc8ca7e02592b94d2f91166_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
