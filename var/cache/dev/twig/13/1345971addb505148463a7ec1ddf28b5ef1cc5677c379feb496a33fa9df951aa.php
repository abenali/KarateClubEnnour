<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a19fed5acf996d7198990aecc3eaf883ab6dd0ddc3a6596d38e107d256a8a093 extends Twig_Template
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
        $__internal_ea4d87c4aafe7dd129f84089adef0f66b4d44eaceb9dd77af38b5bb9afc17c13 = $this->env->getExtension("native_profiler");
        $__internal_ea4d87c4aafe7dd129f84089adef0f66b4d44eaceb9dd77af38b5bb9afc17c13->enter($__internal_ea4d87c4aafe7dd129f84089adef0f66b4d44eaceb9dd77af38b5bb9afc17c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ea4d87c4aafe7dd129f84089adef0f66b4d44eaceb9dd77af38b5bb9afc17c13->leave($__internal_ea4d87c4aafe7dd129f84089adef0f66b4d44eaceb9dd77af38b5bb9afc17c13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
