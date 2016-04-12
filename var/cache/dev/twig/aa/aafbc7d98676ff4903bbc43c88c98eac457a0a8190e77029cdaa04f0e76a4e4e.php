<?php

/* base.html.twig */
class __TwigTemplate_b87ca951643aec82bfe4636826381be80c3a7523606cf915325eaf6dbbd39b63 extends Twig_Template
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
        $__internal_37150fa40f6d917939d95fb262ef06a411c34d6899480c299ff5022cef1eb546 = $this->env->getExtension("native_profiler");
        $__internal_37150fa40f6d917939d95fb262ef06a411c34d6899480c299ff5022cef1eb546->enter($__internal_37150fa40f6d917939d95fb262ef06a411c34d6899480c299ff5022cef1eb546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_37150fa40f6d917939d95fb262ef06a411c34d6899480c299ff5022cef1eb546->leave($__internal_37150fa40f6d917939d95fb262ef06a411c34d6899480c299ff5022cef1eb546_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_143e5eb03d1237af0226d479073875a6f666aa0080b6b78900db346a9fa02745 = $this->env->getExtension("native_profiler");
        $__internal_143e5eb03d1237af0226d479073875a6f666aa0080b6b78900db346a9fa02745->enter($__internal_143e5eb03d1237af0226d479073875a6f666aa0080b6b78900db346a9fa02745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_143e5eb03d1237af0226d479073875a6f666aa0080b6b78900db346a9fa02745->leave($__internal_143e5eb03d1237af0226d479073875a6f666aa0080b6b78900db346a9fa02745_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b66fa5165493dd451dbb03d21d2c1876d9a34a83f115ad4af42201533b4abdde = $this->env->getExtension("native_profiler");
        $__internal_b66fa5165493dd451dbb03d21d2c1876d9a34a83f115ad4af42201533b4abdde->enter($__internal_b66fa5165493dd451dbb03d21d2c1876d9a34a83f115ad4af42201533b4abdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b66fa5165493dd451dbb03d21d2c1876d9a34a83f115ad4af42201533b4abdde->leave($__internal_b66fa5165493dd451dbb03d21d2c1876d9a34a83f115ad4af42201533b4abdde_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6b7122aff78a807da54e99a0236bd75a0114a9ddb5f8bc5cc6f2e97d3b976f = $this->env->getExtension("native_profiler");
        $__internal_9c6b7122aff78a807da54e99a0236bd75a0114a9ddb5f8bc5cc6f2e97d3b976f->enter($__internal_9c6b7122aff78a807da54e99a0236bd75a0114a9ddb5f8bc5cc6f2e97d3b976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c6b7122aff78a807da54e99a0236bd75a0114a9ddb5f8bc5cc6f2e97d3b976f->leave($__internal_9c6b7122aff78a807da54e99a0236bd75a0114a9ddb5f8bc5cc6f2e97d3b976f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd428adfd3dae16d637f9e1ca727f7638de2730b1b6fbc6ce49b77646532f3f7 = $this->env->getExtension("native_profiler");
        $__internal_bd428adfd3dae16d637f9e1ca727f7638de2730b1b6fbc6ce49b77646532f3f7->enter($__internal_bd428adfd3dae16d637f9e1ca727f7638de2730b1b6fbc6ce49b77646532f3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd428adfd3dae16d637f9e1ca727f7638de2730b1b6fbc6ce49b77646532f3f7->leave($__internal_bd428adfd3dae16d637f9e1ca727f7638de2730b1b6fbc6ce49b77646532f3f7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
