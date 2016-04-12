<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_02effccfe132c9023d373fb073dbb90062367c5faaa30a1d7418b30d76c19f04 extends Twig_Template
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
        $__internal_e05bb793bc58cbd46cde61a241eed7556078388888b14204340dc92e16d73c98 = $this->env->getExtension("native_profiler");
        $__internal_e05bb793bc58cbd46cde61a241eed7556078388888b14204340dc92e16d73c98->enter($__internal_e05bb793bc58cbd46cde61a241eed7556078388888b14204340dc92e16d73c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e05bb793bc58cbd46cde61a241eed7556078388888b14204340dc92e16d73c98->leave($__internal_e05bb793bc58cbd46cde61a241eed7556078388888b14204340dc92e16d73c98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
