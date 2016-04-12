<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1cf20d1b3e1cda75a7802c95d1dcf061a246a3f1339045e2a68aa3539cc60852 extends Twig_Template
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
        $__internal_beee7de141358e8686205f71b45e05faba093ebfb147583102f9b9508c29756f = $this->env->getExtension("native_profiler");
        $__internal_beee7de141358e8686205f71b45e05faba093ebfb147583102f9b9508c29756f->enter($__internal_beee7de141358e8686205f71b45e05faba093ebfb147583102f9b9508c29756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_beee7de141358e8686205f71b45e05faba093ebfb147583102f9b9508c29756f->leave($__internal_beee7de141358e8686205f71b45e05faba093ebfb147583102f9b9508c29756f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
