<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1029964939086241c3ae35c60bf7a17fdc0724f8ff9c746c8ee0ec8c4c0c5173 extends Twig_Template
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
        $__internal_55433230c218be8b21aba862640d696e2bbde65f8547907bc9ac3fbae09b1a90 = $this->env->getExtension("native_profiler");
        $__internal_55433230c218be8b21aba862640d696e2bbde65f8547907bc9ac3fbae09b1a90->enter($__internal_55433230c218be8b21aba862640d696e2bbde65f8547907bc9ac3fbae09b1a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_55433230c218be8b21aba862640d696e2bbde65f8547907bc9ac3fbae09b1a90->leave($__internal_55433230c218be8b21aba862640d696e2bbde65f8547907bc9ac3fbae09b1a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
