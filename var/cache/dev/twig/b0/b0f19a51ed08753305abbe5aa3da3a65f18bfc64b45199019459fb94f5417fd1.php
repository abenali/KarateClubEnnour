<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d6d017b9d2df3db2c17041b9f81e010c09961982e18a8cb38081368d568eb884 extends Twig_Template
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
        $__internal_2b0fefb5845f7e5f368ffb93f337ac71d0da4d0d795ab5947d92d9bd2e3044b0 = $this->env->getExtension("native_profiler");
        $__internal_2b0fefb5845f7e5f368ffb93f337ac71d0da4d0d795ab5947d92d9bd2e3044b0->enter($__internal_2b0fefb5845f7e5f368ffb93f337ac71d0da4d0d795ab5947d92d9bd2e3044b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2b0fefb5845f7e5f368ffb93f337ac71d0da4d0d795ab5947d92d9bd2e3044b0->leave($__internal_2b0fefb5845f7e5f368ffb93f337ac71d0da4d0d795ab5947d92d9bd2e3044b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
