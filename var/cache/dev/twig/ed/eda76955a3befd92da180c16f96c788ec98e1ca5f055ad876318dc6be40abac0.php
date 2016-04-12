<?php

/* ::base.html.twig */
class __TwigTemplate_ff1ac2eea2ddd034e8c3405cd886dc34e4a744b095482143848193764b34e146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c429ce33bff830558246d045dfcbd37e4ec1de022344d9318a98fa71160aa45 = $this->env->getExtension("native_profiler");
        $__internal_5c429ce33bff830558246d045dfcbd37e4ec1de022344d9318a98fa71160aa45->enter($__internal_5c429ce33bff830558246d045dfcbd37e4ec1de022344d9318a98fa71160aa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5c429ce33bff830558246d045dfcbd37e4ec1de022344d9318a98fa71160aa45->leave($__internal_5c429ce33bff830558246d045dfcbd37e4ec1de022344d9318a98fa71160aa45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af3fc972257ee4d1e86d9d5bb9068decc2a18e53b6cff1f1387ec8fd1d697193 = $this->env->getExtension("native_profiler");
        $__internal_af3fc972257ee4d1e86d9d5bb9068decc2a18e53b6cff1f1387ec8fd1d697193->enter($__internal_af3fc972257ee4d1e86d9d5bb9068decc2a18e53b6cff1f1387ec8fd1d697193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af3fc972257ee4d1e86d9d5bb9068decc2a18e53b6cff1f1387ec8fd1d697193->leave($__internal_af3fc972257ee4d1e86d9d5bb9068decc2a18e53b6cff1f1387ec8fd1d697193_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f3a834b0d5c0468cf5f2ef7f97646979aacea5ecdf4001fe5ab728218678016 = $this->env->getExtension("native_profiler");
        $__internal_1f3a834b0d5c0468cf5f2ef7f97646979aacea5ecdf4001fe5ab728218678016->enter($__internal_1f3a834b0d5c0468cf5f2ef7f97646979aacea5ecdf4001fe5ab728218678016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f3a834b0d5c0468cf5f2ef7f97646979aacea5ecdf4001fe5ab728218678016->leave($__internal_1f3a834b0d5c0468cf5f2ef7f97646979aacea5ecdf4001fe5ab728218678016_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbe9205ccd7b800442dc481d6c447349b6de8adccc5908d5768f9e25102c7718 = $this->env->getExtension("native_profiler");
        $__internal_bbe9205ccd7b800442dc481d6c447349b6de8adccc5908d5768f9e25102c7718->enter($__internal_bbe9205ccd7b800442dc481d6c447349b6de8adccc5908d5768f9e25102c7718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bbe9205ccd7b800442dc481d6c447349b6de8adccc5908d5768f9e25102c7718->leave($__internal_bbe9205ccd7b800442dc481d6c447349b6de8adccc5908d5768f9e25102c7718_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cb3951bad88d0f8b8beec7efa7b4220944b10633421a382105674cc93d5372b = $this->env->getExtension("native_profiler");
        $__internal_4cb3951bad88d0f8b8beec7efa7b4220944b10633421a382105674cc93d5372b->enter($__internal_4cb3951bad88d0f8b8beec7efa7b4220944b10633421a382105674cc93d5372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4cb3951bad88d0f8b8beec7efa7b4220944b10633421a382105674cc93d5372b->leave($__internal_4cb3951bad88d0f8b8beec7efa7b4220944b10633421a382105674cc93d5372b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
