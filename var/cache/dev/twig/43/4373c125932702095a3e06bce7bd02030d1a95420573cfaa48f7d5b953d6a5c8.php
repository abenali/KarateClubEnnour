<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5076b53ab5333b5fa6898c194b5ac453357e88e850e481bd60a63e1f432d52f0 extends Twig_Template
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
        $__internal_6c7fc1511e3317f3e310be8535b512a8f6a9fe3d84093c036db5d90c5e693582 = $this->env->getExtension("native_profiler");
        $__internal_6c7fc1511e3317f3e310be8535b512a8f6a9fe3d84093c036db5d90c5e693582->enter($__internal_6c7fc1511e3317f3e310be8535b512a8f6a9fe3d84093c036db5d90c5e693582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6c7fc1511e3317f3e310be8535b512a8f6a9fe3d84093c036db5d90c5e693582->leave($__internal_6c7fc1511e3317f3e310be8535b512a8f6a9fe3d84093c036db5d90c5e693582_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
