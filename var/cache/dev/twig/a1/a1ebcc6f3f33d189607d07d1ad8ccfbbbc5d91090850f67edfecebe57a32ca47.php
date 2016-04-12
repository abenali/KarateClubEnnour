<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_71a2e7f30abfa703288b3ee5946957c250e1076fd9c4380d801fde7fdd41dbb9 extends Twig_Template
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
        $__internal_177c0f87cfd23cda2ff4ed01d1e64e53c809121122888cc145dd2cf7e407380b = $this->env->getExtension("native_profiler");
        $__internal_177c0f87cfd23cda2ff4ed01d1e64e53c809121122888cc145dd2cf7e407380b->enter($__internal_177c0f87cfd23cda2ff4ed01d1e64e53c809121122888cc145dd2cf7e407380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_177c0f87cfd23cda2ff4ed01d1e64e53c809121122888cc145dd2cf7e407380b->leave($__internal_177c0f87cfd23cda2ff4ed01d1e64e53c809121122888cc145dd2cf7e407380b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
