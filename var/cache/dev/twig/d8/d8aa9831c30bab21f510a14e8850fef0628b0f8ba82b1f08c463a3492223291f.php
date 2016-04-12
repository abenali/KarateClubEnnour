<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fa0f398af88f025fc8cb20737254d40bb2e652582053a669720b33813555b9e1 extends Twig_Template
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
        $__internal_7dc58aabe3ecb91de629eaf3a2d1d1b0cc62c5bf4fe590ea7eb8568944952398 = $this->env->getExtension("native_profiler");
        $__internal_7dc58aabe3ecb91de629eaf3a2d1d1b0cc62c5bf4fe590ea7eb8568944952398->enter($__internal_7dc58aabe3ecb91de629eaf3a2d1d1b0cc62c5bf4fe590ea7eb8568944952398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7dc58aabe3ecb91de629eaf3a2d1d1b0cc62c5bf4fe590ea7eb8568944952398->leave($__internal_7dc58aabe3ecb91de629eaf3a2d1d1b0cc62c5bf4fe590ea7eb8568944952398_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
