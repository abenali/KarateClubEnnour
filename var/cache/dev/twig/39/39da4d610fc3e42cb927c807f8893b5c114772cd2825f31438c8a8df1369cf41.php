<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d02c22df786ba85f2749d2205eb94bf96c760eab0cab40204eec1368faec83f4 extends Twig_Template
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
        $__internal_025502e72adf196e819c6c6f3fec6e804e7c428656e64ce4b425e087dd2a25cd = $this->env->getExtension("native_profiler");
        $__internal_025502e72adf196e819c6c6f3fec6e804e7c428656e64ce4b425e087dd2a25cd->enter($__internal_025502e72adf196e819c6c6f3fec6e804e7c428656e64ce4b425e087dd2a25cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_025502e72adf196e819c6c6f3fec6e804e7c428656e64ce4b425e087dd2a25cd->leave($__internal_025502e72adf196e819c6c6f3fec6e804e7c428656e64ce4b425e087dd2a25cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
