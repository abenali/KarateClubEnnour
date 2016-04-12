<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_80c468056ab88d450ea4ea66b600e24eaab0b138350da84e27d2185acfd92027 extends Twig_Template
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
        $__internal_a950be4bdd4576ea6a6662e8858a750e3e32d205acf7732fc216e43966e6e6b2 = $this->env->getExtension("native_profiler");
        $__internal_a950be4bdd4576ea6a6662e8858a750e3e32d205acf7732fc216e43966e6e6b2->enter($__internal_a950be4bdd4576ea6a6662e8858a750e3e32d205acf7732fc216e43966e6e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a950be4bdd4576ea6a6662e8858a750e3e32d205acf7732fc216e43966e6e6b2->leave($__internal_a950be4bdd4576ea6a6662e8858a750e3e32d205acf7732fc216e43966e6e6b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
