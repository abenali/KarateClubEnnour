<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2e83fa71c9241278b5ecef80feef0b19f4bbda2ee9047189b502da4a6593e97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_06da660e41913c399c476a15e9d7adabedeaf81012646b404879c53c43415191 = $this->env->getExtension("native_profiler");
        $__internal_06da660e41913c399c476a15e9d7adabedeaf81012646b404879c53c43415191->enter($__internal_06da660e41913c399c476a15e9d7adabedeaf81012646b404879c53c43415191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06da660e41913c399c476a15e9d7adabedeaf81012646b404879c53c43415191->leave($__internal_06da660e41913c399c476a15e9d7adabedeaf81012646b404879c53c43415191_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8e233fc1037decf5ebf88cdf6dfa757804deebc44362e156b1803ed8c409352 = $this->env->getExtension("native_profiler");
        $__internal_c8e233fc1037decf5ebf88cdf6dfa757804deebc44362e156b1803ed8c409352->enter($__internal_c8e233fc1037decf5ebf88cdf6dfa757804deebc44362e156b1803ed8c409352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c8e233fc1037decf5ebf88cdf6dfa757804deebc44362e156b1803ed8c409352->leave($__internal_c8e233fc1037decf5ebf88cdf6dfa757804deebc44362e156b1803ed8c409352_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9703e10374d7cc444ca00275b54503cb4435a6aea5096f3951206876ef5bc988 = $this->env->getExtension("native_profiler");
        $__internal_9703e10374d7cc444ca00275b54503cb4435a6aea5096f3951206876ef5bc988->enter($__internal_9703e10374d7cc444ca00275b54503cb4435a6aea5096f3951206876ef5bc988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9703e10374d7cc444ca00275b54503cb4435a6aea5096f3951206876ef5bc988->leave($__internal_9703e10374d7cc444ca00275b54503cb4435a6aea5096f3951206876ef5bc988_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
