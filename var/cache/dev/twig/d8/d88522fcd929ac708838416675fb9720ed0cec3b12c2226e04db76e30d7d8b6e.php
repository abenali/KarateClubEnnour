<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4dd3070ef73effc8a1b1f13525a522ded3d2a2a1e554b603ec437c129bf00c03 extends Twig_Template
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
        $__internal_b1fff97896cc2897c58d95a1ec247d2f337b64f7c59c8f750e6cca621ca05d4e = $this->env->getExtension("native_profiler");
        $__internal_b1fff97896cc2897c58d95a1ec247d2f337b64f7c59c8f750e6cca621ca05d4e->enter($__internal_b1fff97896cc2897c58d95a1ec247d2f337b64f7c59c8f750e6cca621ca05d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b1fff97896cc2897c58d95a1ec247d2f337b64f7c59c8f750e6cca621ca05d4e->leave($__internal_b1fff97896cc2897c58d95a1ec247d2f337b64f7c59c8f750e6cca621ca05d4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
