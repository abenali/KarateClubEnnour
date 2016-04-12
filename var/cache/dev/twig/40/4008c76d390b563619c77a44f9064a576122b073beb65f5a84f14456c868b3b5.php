<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_86874169066fa8cb7392fe15bdd26d32569dbc1cdc4832a068fb04a297191eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7054b55eac94cd81a7b0b553368432f8ead50009390eccf18aefe22e6b71c37d = $this->env->getExtension("native_profiler");
        $__internal_7054b55eac94cd81a7b0b553368432f8ead50009390eccf18aefe22e6b71c37d->enter($__internal_7054b55eac94cd81a7b0b553368432f8ead50009390eccf18aefe22e6b71c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7054b55eac94cd81a7b0b553368432f8ead50009390eccf18aefe22e6b71c37d->leave($__internal_7054b55eac94cd81a7b0b553368432f8ead50009390eccf18aefe22e6b71c37d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1986509f6298acd275eda86052fe00bacf11df7530e072f5a6bf927118827152 = $this->env->getExtension("native_profiler");
        $__internal_1986509f6298acd275eda86052fe00bacf11df7530e072f5a6bf927118827152->enter($__internal_1986509f6298acd275eda86052fe00bacf11df7530e072f5a6bf927118827152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1986509f6298acd275eda86052fe00bacf11df7530e072f5a6bf927118827152->leave($__internal_1986509f6298acd275eda86052fe00bacf11df7530e072f5a6bf927118827152_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_878390a8482befa1bdc92b5fb1ceffe55c4754a5d03cb1c615cd85a3955ce64a = $this->env->getExtension("native_profiler");
        $__internal_878390a8482befa1bdc92b5fb1ceffe55c4754a5d03cb1c615cd85a3955ce64a->enter($__internal_878390a8482befa1bdc92b5fb1ceffe55c4754a5d03cb1c615cd85a3955ce64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_878390a8482befa1bdc92b5fb1ceffe55c4754a5d03cb1c615cd85a3955ce64a->leave($__internal_878390a8482befa1bdc92b5fb1ceffe55c4754a5d03cb1c615cd85a3955ce64a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d722651ae8c33d7dab3eab43cad1d63d2dbce8d65da587318b1a4da0acc86adc = $this->env->getExtension("native_profiler");
        $__internal_d722651ae8c33d7dab3eab43cad1d63d2dbce8d65da587318b1a4da0acc86adc->enter($__internal_d722651ae8c33d7dab3eab43cad1d63d2dbce8d65da587318b1a4da0acc86adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d722651ae8c33d7dab3eab43cad1d63d2dbce8d65da587318b1a4da0acc86adc->leave($__internal_d722651ae8c33d7dab3eab43cad1d63d2dbce8d65da587318b1a4da0acc86adc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
