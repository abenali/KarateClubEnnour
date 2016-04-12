<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0fe1a5ee8edaea8cd252a68dcb484e2f379798ea9d213601aa2d8d1326de399e extends Twig_Template
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
        $__internal_c8a723b07d59aaa2273be1071b4225e5390d88b2e19a1b0696802642c8b886e7 = $this->env->getExtension("native_profiler");
        $__internal_c8a723b07d59aaa2273be1071b4225e5390d88b2e19a1b0696802642c8b886e7->enter($__internal_c8a723b07d59aaa2273be1071b4225e5390d88b2e19a1b0696802642c8b886e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c8a723b07d59aaa2273be1071b4225e5390d88b2e19a1b0696802642c8b886e7->leave($__internal_c8a723b07d59aaa2273be1071b4225e5390d88b2e19a1b0696802642c8b886e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
