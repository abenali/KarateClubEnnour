<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8ff44caf37d96f5ca2a6afb24a0a7bde79f9f2f22ba8f36c3e21fbf7d8d425d7 extends Twig_Template
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
        $__internal_9c5830e0a072fdaa9476918c59a4e65a40e3ea7f71365b1465b859586b6ba65d = $this->env->getExtension("native_profiler");
        $__internal_9c5830e0a072fdaa9476918c59a4e65a40e3ea7f71365b1465b859586b6ba65d->enter($__internal_9c5830e0a072fdaa9476918c59a4e65a40e3ea7f71365b1465b859586b6ba65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9c5830e0a072fdaa9476918c59a4e65a40e3ea7f71365b1465b859586b6ba65d->leave($__internal_9c5830e0a072fdaa9476918c59a4e65a40e3ea7f71365b1465b859586b6ba65d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
