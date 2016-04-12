<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_871635b427af72909e09d15ab6f8889284e21e7a861a326e2ae9dcc4808b74d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_47453b16c5a403dbab87f2602a30b2e5e3fcd81982f0e4f533faf249eb7942f1 = $this->env->getExtension("native_profiler");
        $__internal_47453b16c5a403dbab87f2602a30b2e5e3fcd81982f0e4f533faf249eb7942f1->enter($__internal_47453b16c5a403dbab87f2602a30b2e5e3fcd81982f0e4f533faf249eb7942f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47453b16c5a403dbab87f2602a30b2e5e3fcd81982f0e4f533faf249eb7942f1->leave($__internal_47453b16c5a403dbab87f2602a30b2e5e3fcd81982f0e4f533faf249eb7942f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3f456cb6bf01f29b89970699858feded4eca237e39faa2409f847823f94118f = $this->env->getExtension("native_profiler");
        $__internal_a3f456cb6bf01f29b89970699858feded4eca237e39faa2409f847823f94118f->enter($__internal_a3f456cb6bf01f29b89970699858feded4eca237e39faa2409f847823f94118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3f456cb6bf01f29b89970699858feded4eca237e39faa2409f847823f94118f->leave($__internal_a3f456cb6bf01f29b89970699858feded4eca237e39faa2409f847823f94118f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71dd312a43abdbfe8ea9ff0fc32514790a3d5f7e25b2d2abf450341db41aad33 = $this->env->getExtension("native_profiler");
        $__internal_71dd312a43abdbfe8ea9ff0fc32514790a3d5f7e25b2d2abf450341db41aad33->enter($__internal_71dd312a43abdbfe8ea9ff0fc32514790a3d5f7e25b2d2abf450341db41aad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71dd312a43abdbfe8ea9ff0fc32514790a3d5f7e25b2d2abf450341db41aad33->leave($__internal_71dd312a43abdbfe8ea9ff0fc32514790a3d5f7e25b2d2abf450341db41aad33_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c1516a68bbac22f32212ea074b3c5935a6040c3da497297fd29db7b8f6a759d = $this->env->getExtension("native_profiler");
        $__internal_6c1516a68bbac22f32212ea074b3c5935a6040c3da497297fd29db7b8f6a759d->enter($__internal_6c1516a68bbac22f32212ea074b3c5935a6040c3da497297fd29db7b8f6a759d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c1516a68bbac22f32212ea074b3c5935a6040c3da497297fd29db7b8f6a759d->leave($__internal_6c1516a68bbac22f32212ea074b3c5935a6040c3da497297fd29db7b8f6a759d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
