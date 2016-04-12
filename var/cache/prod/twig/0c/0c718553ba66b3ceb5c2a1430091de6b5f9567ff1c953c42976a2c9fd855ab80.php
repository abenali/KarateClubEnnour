<?php

/* lucky/number.html.twig */
class __TwigTemplate_ba08ba2b6b90ce06e01d99714a9d71e039ed15cbbdf2deded17a8f61e9fd5d1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('kint')->twig_kint($this->env, $context, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : null));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('kint')->twig_kint($this->env, $context, "Hello World....");
        echo "
";
    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{kint(luckyNumberList)}}*/
/*     {{kint('Hello World....')}}*/
/* {% endblock %}*/
