<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e1f6b5f964770ff904807cb948bebc96eed31c81fee866a64ec4a28346721cf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04e53573990eddb69249ddc28f12d133a5125bdb7f1aac1ee31b190574d66fd1 = $this->env->getExtension("native_profiler");
        $__internal_04e53573990eddb69249ddc28f12d133a5125bdb7f1aac1ee31b190574d66fd1->enter($__internal_04e53573990eddb69249ddc28f12d133a5125bdb7f1aac1ee31b190574d66fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e53573990eddb69249ddc28f12d133a5125bdb7f1aac1ee31b190574d66fd1->leave($__internal_04e53573990eddb69249ddc28f12d133a5125bdb7f1aac1ee31b190574d66fd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33102fbb85cff2d344593c634ce6ef167fe725b45704d9421d0a5ee75701039f = $this->env->getExtension("native_profiler");
        $__internal_33102fbb85cff2d344593c634ce6ef167fe725b45704d9421d0a5ee75701039f->enter($__internal_33102fbb85cff2d344593c634ce6ef167fe725b45704d9421d0a5ee75701039f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33102fbb85cff2d344593c634ce6ef167fe725b45704d9421d0a5ee75701039f->leave($__internal_33102fbb85cff2d344593c634ce6ef167fe725b45704d9421d0a5ee75701039f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50d1a021269a94ca1151afd44c60f1665999bbcc90be99753f1efadcfe1716d5 = $this->env->getExtension("native_profiler");
        $__internal_50d1a021269a94ca1151afd44c60f1665999bbcc90be99753f1efadcfe1716d5->enter($__internal_50d1a021269a94ca1151afd44c60f1665999bbcc90be99753f1efadcfe1716d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50d1a021269a94ca1151afd44c60f1665999bbcc90be99753f1efadcfe1716d5->leave($__internal_50d1a021269a94ca1151afd44c60f1665999bbcc90be99753f1efadcfe1716d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ade8f1141d3a3d3a8e6e92b4e63cc2f6a7a06dafededdec348a530afb581363 = $this->env->getExtension("native_profiler");
        $__internal_8ade8f1141d3a3d3a8e6e92b4e63cc2f6a7a06dafededdec348a530afb581363->enter($__internal_8ade8f1141d3a3d3a8e6e92b4e63cc2f6a7a06dafededdec348a530afb581363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8ade8f1141d3a3d3a8e6e92b4e63cc2f6a7a06dafededdec348a530afb581363->leave($__internal_8ade8f1141d3a3d3a8e6e92b4e63cc2f6a7a06dafededdec348a530afb581363_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
