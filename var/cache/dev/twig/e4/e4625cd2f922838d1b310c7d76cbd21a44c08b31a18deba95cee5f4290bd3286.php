<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9750b932097d09649768ea34b936bce7aea191b812077025c7e117849c53ad6f extends Twig_Template
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
        $__internal_5808f8b602f76144853639097580b923dee6582655d12bcdb8d5fba3f6dccea7 = $this->env->getExtension("native_profiler");
        $__internal_5808f8b602f76144853639097580b923dee6582655d12bcdb8d5fba3f6dccea7->enter($__internal_5808f8b602f76144853639097580b923dee6582655d12bcdb8d5fba3f6dccea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5808f8b602f76144853639097580b923dee6582655d12bcdb8d5fba3f6dccea7->leave($__internal_5808f8b602f76144853639097580b923dee6582655d12bcdb8d5fba3f6dccea7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
