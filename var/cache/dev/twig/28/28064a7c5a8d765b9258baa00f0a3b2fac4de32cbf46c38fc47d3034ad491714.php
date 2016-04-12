<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9eae126473bc9e81a7aa132cb5e14f4eb31d3a2e99479d3f929252af795b3629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9bbd612651935b80f9503357e2bd0f3790a6d6a00561d6423288b2db30411b79 = $this->env->getExtension("native_profiler");
        $__internal_9bbd612651935b80f9503357e2bd0f3790a6d6a00561d6423288b2db30411b79->enter($__internal_9bbd612651935b80f9503357e2bd0f3790a6d6a00561d6423288b2db30411b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bbd612651935b80f9503357e2bd0f3790a6d6a00561d6423288b2db30411b79->leave($__internal_9bbd612651935b80f9503357e2bd0f3790a6d6a00561d6423288b2db30411b79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ff247067e99c6312aca6308947ac8dbb373db894d0a830681141db9cdd4951b = $this->env->getExtension("native_profiler");
        $__internal_7ff247067e99c6312aca6308947ac8dbb373db894d0a830681141db9cdd4951b->enter($__internal_7ff247067e99c6312aca6308947ac8dbb373db894d0a830681141db9cdd4951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7ff247067e99c6312aca6308947ac8dbb373db894d0a830681141db9cdd4951b->leave($__internal_7ff247067e99c6312aca6308947ac8dbb373db894d0a830681141db9cdd4951b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3ce5aaeed9927f6ac88feb27f64b40de1e9f4fe62d2811aa96215895159fce7 = $this->env->getExtension("native_profiler");
        $__internal_e3ce5aaeed9927f6ac88feb27f64b40de1e9f4fe62d2811aa96215895159fce7->enter($__internal_e3ce5aaeed9927f6ac88feb27f64b40de1e9f4fe62d2811aa96215895159fce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e3ce5aaeed9927f6ac88feb27f64b40de1e9f4fe62d2811aa96215895159fce7->leave($__internal_e3ce5aaeed9927f6ac88feb27f64b40de1e9f4fe62d2811aa96215895159fce7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
