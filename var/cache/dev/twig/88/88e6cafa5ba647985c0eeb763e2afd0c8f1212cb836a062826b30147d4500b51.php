<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_972a8a552dd01eb2c325fab136aca422e1a7a3a6c9aed8976e5d61bc879f77bc extends Twig_Template
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
        $__internal_4cd8ebd6628f10cfac0124c6c20d1dc1abf473dff5c8e46dde1721404269c8c8 = $this->env->getExtension("native_profiler");
        $__internal_4cd8ebd6628f10cfac0124c6c20d1dc1abf473dff5c8e46dde1721404269c8c8->enter($__internal_4cd8ebd6628f10cfac0124c6c20d1dc1abf473dff5c8e46dde1721404269c8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4cd8ebd6628f10cfac0124c6c20d1dc1abf473dff5c8e46dde1721404269c8c8->leave($__internal_4cd8ebd6628f10cfac0124c6c20d1dc1abf473dff5c8e46dde1721404269c8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
