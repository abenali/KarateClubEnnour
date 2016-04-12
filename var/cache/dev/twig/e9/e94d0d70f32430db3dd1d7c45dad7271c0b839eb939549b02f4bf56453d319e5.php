<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6f2725c3c2fcf0e7666394f206bcf5cc1246c73be37103e477282c45efc3d0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0172a3a5f62dc3d884ed5f04be92cf1f5ae6548b6ad94b40616e1728a41a5753 = $this->env->getExtension("native_profiler");
        $__internal_0172a3a5f62dc3d884ed5f04be92cf1f5ae6548b6ad94b40616e1728a41a5753->enter($__internal_0172a3a5f62dc3d884ed5f04be92cf1f5ae6548b6ad94b40616e1728a41a5753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0172a3a5f62dc3d884ed5f04be92cf1f5ae6548b6ad94b40616e1728a41a5753->leave($__internal_0172a3a5f62dc3d884ed5f04be92cf1f5ae6548b6ad94b40616e1728a41a5753_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_980cbcd6f9dcc29190374b3d8dcbe6412bdc211eefce5144756eef00b32206c9 = $this->env->getExtension("native_profiler");
        $__internal_980cbcd6f9dcc29190374b3d8dcbe6412bdc211eefce5144756eef00b32206c9->enter($__internal_980cbcd6f9dcc29190374b3d8dcbe6412bdc211eefce5144756eef00b32206c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_980cbcd6f9dcc29190374b3d8dcbe6412bdc211eefce5144756eef00b32206c9->leave($__internal_980cbcd6f9dcc29190374b3d8dcbe6412bdc211eefce5144756eef00b32206c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9243c119d3684bbca8a7e532c60360c80d57f1e347a1d99a498c809822505765 = $this->env->getExtension("native_profiler");
        $__internal_9243c119d3684bbca8a7e532c60360c80d57f1e347a1d99a498c809822505765->enter($__internal_9243c119d3684bbca8a7e532c60360c80d57f1e347a1d99a498c809822505765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9243c119d3684bbca8a7e532c60360c80d57f1e347a1d99a498c809822505765->leave($__internal_9243c119d3684bbca8a7e532c60360c80d57f1e347a1d99a498c809822505765_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_362c09d0db5968675583c365a0378338ec31a32e5a2114a21727cf89bd695ba6 = $this->env->getExtension("native_profiler");
        $__internal_362c09d0db5968675583c365a0378338ec31a32e5a2114a21727cf89bd695ba6->enter($__internal_362c09d0db5968675583c365a0378338ec31a32e5a2114a21727cf89bd695ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_362c09d0db5968675583c365a0378338ec31a32e5a2114a21727cf89bd695ba6->leave($__internal_362c09d0db5968675583c365a0378338ec31a32e5a2114a21727cf89bd695ba6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
