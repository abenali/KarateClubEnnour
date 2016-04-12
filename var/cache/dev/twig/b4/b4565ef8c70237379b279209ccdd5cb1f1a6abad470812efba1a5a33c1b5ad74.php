<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7f08b981f04a864d8432d75556180276126d42aade83387961e00813cc3d5e3c extends Twig_Template
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
        $__internal_83b54507d4a1c35c6286074633fa20b5ce2e1fb38b1412a446844a17e4cc062f = $this->env->getExtension("native_profiler");
        $__internal_83b54507d4a1c35c6286074633fa20b5ce2e1fb38b1412a446844a17e4cc062f->enter($__internal_83b54507d4a1c35c6286074633fa20b5ce2e1fb38b1412a446844a17e4cc062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_83b54507d4a1c35c6286074633fa20b5ce2e1fb38b1412a446844a17e4cc062f->leave($__internal_83b54507d4a1c35c6286074633fa20b5ce2e1fb38b1412a446844a17e4cc062f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
