<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f732aa7131d060adedaa6bd8770264c9e2be47f65edd0364b59f0cbbccbc7df0 extends Twig_Template
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
        $__internal_d2af7d4720372edef885cd3488d5859a7abba2f619c9fb6fa994490f3941519c = $this->env->getExtension("native_profiler");
        $__internal_d2af7d4720372edef885cd3488d5859a7abba2f619c9fb6fa994490f3941519c->enter($__internal_d2af7d4720372edef885cd3488d5859a7abba2f619c9fb6fa994490f3941519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d2af7d4720372edef885cd3488d5859a7abba2f619c9fb6fa994490f3941519c->leave($__internal_d2af7d4720372edef885cd3488d5859a7abba2f619c9fb6fa994490f3941519c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
