<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cd74cb6e24631f3061d9604866c29667073f6304ee2a65902db84afc987d5dcc extends Twig_Template
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
        $__internal_814d7a0909c66bddb5a8dba5ce4a87ef4092e76032de3de2a7120b7d000e4939 = $this->env->getExtension("native_profiler");
        $__internal_814d7a0909c66bddb5a8dba5ce4a87ef4092e76032de3de2a7120b7d000e4939->enter($__internal_814d7a0909c66bddb5a8dba5ce4a87ef4092e76032de3de2a7120b7d000e4939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_814d7a0909c66bddb5a8dba5ce4a87ef4092e76032de3de2a7120b7d000e4939->leave($__internal_814d7a0909c66bddb5a8dba5ce4a87ef4092e76032de3de2a7120b7d000e4939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
