<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b03046ff6b489165cab364eeb1665ceef9fb9322bf8d939a23985e51ccd0173b extends Twig_Template
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
        $__internal_4dbd9f24bcc63acb976cb7faa1d19c303954817be892cdd9deddc9ce942a8ecb = $this->env->getExtension("native_profiler");
        $__internal_4dbd9f24bcc63acb976cb7faa1d19c303954817be892cdd9deddc9ce942a8ecb->enter($__internal_4dbd9f24bcc63acb976cb7faa1d19c303954817be892cdd9deddc9ce942a8ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4dbd9f24bcc63acb976cb7faa1d19c303954817be892cdd9deddc9ce942a8ecb->leave($__internal_4dbd9f24bcc63acb976cb7faa1d19c303954817be892cdd9deddc9ce942a8ecb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
