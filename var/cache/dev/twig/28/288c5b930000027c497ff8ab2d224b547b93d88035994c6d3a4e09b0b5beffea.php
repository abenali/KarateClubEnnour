<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c05fbd1eeff69d9fb62f878261efe51f0b855dfc71c3fef0df6d18515e64580f extends Twig_Template
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
        $__internal_8aba5105664dd148b0261c01f34a0a0cde950aaf4b40d198dadbc172465831f0 = $this->env->getExtension("native_profiler");
        $__internal_8aba5105664dd148b0261c01f34a0a0cde950aaf4b40d198dadbc172465831f0->enter($__internal_8aba5105664dd148b0261c01f34a0a0cde950aaf4b40d198dadbc172465831f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8aba5105664dd148b0261c01f34a0a0cde950aaf4b40d198dadbc172465831f0->leave($__internal_8aba5105664dd148b0261c01f34a0a0cde950aaf4b40d198dadbc172465831f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
