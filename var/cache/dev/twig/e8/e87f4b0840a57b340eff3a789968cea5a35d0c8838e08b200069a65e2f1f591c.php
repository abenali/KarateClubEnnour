<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0f8b499ca9259a4629513dfc510dfc89b10d32d62aa663217bea9a1104d9972d extends Twig_Template
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
        $__internal_2a7ac3cabf4441e2507dc1b2c7e4f2a348d55f44e0a16c10840985624dca6982 = $this->env->getExtension("native_profiler");
        $__internal_2a7ac3cabf4441e2507dc1b2c7e4f2a348d55f44e0a16c10840985624dca6982->enter($__internal_2a7ac3cabf4441e2507dc1b2c7e4f2a348d55f44e0a16c10840985624dca6982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2a7ac3cabf4441e2507dc1b2c7e4f2a348d55f44e0a16c10840985624dca6982->leave($__internal_2a7ac3cabf4441e2507dc1b2c7e4f2a348d55f44e0a16c10840985624dca6982_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
