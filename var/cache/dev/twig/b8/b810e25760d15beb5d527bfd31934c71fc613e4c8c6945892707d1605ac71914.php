<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f193b8f2ea9e3a6710ba6799be8d0400f90f3e3d59951d58981d8c1d4e48d617 extends Twig_Template
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
        $__internal_a19bcee1b77faba96feb3c889cbaf30347c3be286b844fd577fdab127686ca16 = $this->env->getExtension("native_profiler");
        $__internal_a19bcee1b77faba96feb3c889cbaf30347c3be286b844fd577fdab127686ca16->enter($__internal_a19bcee1b77faba96feb3c889cbaf30347c3be286b844fd577fdab127686ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a19bcee1b77faba96feb3c889cbaf30347c3be286b844fd577fdab127686ca16->leave($__internal_a19bcee1b77faba96feb3c889cbaf30347c3be286b844fd577fdab127686ca16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
