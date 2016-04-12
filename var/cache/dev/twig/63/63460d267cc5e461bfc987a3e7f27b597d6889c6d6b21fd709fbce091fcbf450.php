<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f608fef7a2bd34d8c491768f7bca3946e5f9a7aa3ddb14cc9750d2b6c835b342 extends Twig_Template
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
        $__internal_dcaefe41f4aab0687476149afb5da157c1eb0efbc5eed8dc2ee50985051aa4c7 = $this->env->getExtension("native_profiler");
        $__internal_dcaefe41f4aab0687476149afb5da157c1eb0efbc5eed8dc2ee50985051aa4c7->enter($__internal_dcaefe41f4aab0687476149afb5da157c1eb0efbc5eed8dc2ee50985051aa4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dcaefe41f4aab0687476149afb5da157c1eb0efbc5eed8dc2ee50985051aa4c7->leave($__internal_dcaefe41f4aab0687476149afb5da157c1eb0efbc5eed8dc2ee50985051aa4c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
