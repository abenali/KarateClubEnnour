<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_08d09ef4da42ddd8aec053d4e7b65e87be723357a81e225ba8bc6043530a3027 extends Twig_Template
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
        $__internal_ce6de2ae57e0addcec1b659a7aa53314e2d0f355df751b94553c320d3880392d = $this->env->getExtension("native_profiler");
        $__internal_ce6de2ae57e0addcec1b659a7aa53314e2d0f355df751b94553c320d3880392d->enter($__internal_ce6de2ae57e0addcec1b659a7aa53314e2d0f355df751b94553c320d3880392d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_ce6de2ae57e0addcec1b659a7aa53314e2d0f355df751b94553c320d3880392d->leave($__internal_ce6de2ae57e0addcec1b659a7aa53314e2d0f355df751b94553c320d3880392d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
