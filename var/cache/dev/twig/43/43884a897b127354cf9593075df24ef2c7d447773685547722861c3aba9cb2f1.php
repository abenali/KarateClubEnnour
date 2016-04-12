<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7fd956ee88e655f22c53b1e8f26f1904d298f1aedde30775e808753227ef7dbc extends Twig_Template
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
        $__internal_fca77d440a93c885268496e4d73b64b00d5ae408510b835a06c163ba3189934c = $this->env->getExtension("native_profiler");
        $__internal_fca77d440a93c885268496e4d73b64b00d5ae408510b835a06c163ba3189934c->enter($__internal_fca77d440a93c885268496e4d73b64b00d5ae408510b835a06c163ba3189934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fca77d440a93c885268496e4d73b64b00d5ae408510b835a06c163ba3189934c->leave($__internal_fca77d440a93c885268496e4d73b64b00d5ae408510b835a06c163ba3189934c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
