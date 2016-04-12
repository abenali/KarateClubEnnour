<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5c042bc9f7c71dbf5c4a3af155ab01b9207ba343e3ee6b3d027e8c33df65c34b extends Twig_Template
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
        $__internal_09643e9995de46b15f9b309b61cede3dcd4b080845488fa9a44c83ebbf954d75 = $this->env->getExtension("native_profiler");
        $__internal_09643e9995de46b15f9b309b61cede3dcd4b080845488fa9a44c83ebbf954d75->enter($__internal_09643e9995de46b15f9b309b61cede3dcd4b080845488fa9a44c83ebbf954d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_09643e9995de46b15f9b309b61cede3dcd4b080845488fa9a44c83ebbf954d75->leave($__internal_09643e9995de46b15f9b309b61cede3dcd4b080845488fa9a44c83ebbf954d75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
