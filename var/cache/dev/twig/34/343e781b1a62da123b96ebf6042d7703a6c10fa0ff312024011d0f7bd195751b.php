<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b1fe3779200da585c5898b6c80a79599a060e857e3d0c5d65ff63ba90931f62b extends Twig_Template
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
        $__internal_9f95fd1e8e4d3fd68b4c23e3a32aa09d28117024480182a352e3ec69bdbd2cf6 = $this->env->getExtension("native_profiler");
        $__internal_9f95fd1e8e4d3fd68b4c23e3a32aa09d28117024480182a352e3ec69bdbd2cf6->enter($__internal_9f95fd1e8e4d3fd68b4c23e3a32aa09d28117024480182a352e3ec69bdbd2cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9f95fd1e8e4d3fd68b4c23e3a32aa09d28117024480182a352e3ec69bdbd2cf6->leave($__internal_9f95fd1e8e4d3fd68b4c23e3a32aa09d28117024480182a352e3ec69bdbd2cf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
