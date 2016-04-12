<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9eccfa013cae78f45984a9626c919d5ec4e26822a57bac7d1ae684a38429177c extends Twig_Template
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
        $__internal_12482b7529a30054fdf71d66195c8c36f4750228510c85be2de0d8320bee8d4f = $this->env->getExtension("native_profiler");
        $__internal_12482b7529a30054fdf71d66195c8c36f4750228510c85be2de0d8320bee8d4f->enter($__internal_12482b7529a30054fdf71d66195c8c36f4750228510c85be2de0d8320bee8d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_12482b7529a30054fdf71d66195c8c36f4750228510c85be2de0d8320bee8d4f->leave($__internal_12482b7529a30054fdf71d66195c8c36f4750228510c85be2de0d8320bee8d4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
