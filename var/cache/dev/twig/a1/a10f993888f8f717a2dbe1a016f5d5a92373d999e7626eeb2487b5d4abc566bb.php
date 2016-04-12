<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2c911b89553f2c5b00333a24cd72f851c020ef6ea62b9a482e6f0fd364f8764f extends Twig_Template
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
        $__internal_ee4e4a6db0f4941cc1ff7c8add577c863f62664cb204c9c5f6c4df8155a181c6 = $this->env->getExtension("native_profiler");
        $__internal_ee4e4a6db0f4941cc1ff7c8add577c863f62664cb204c9c5f6c4df8155a181c6->enter($__internal_ee4e4a6db0f4941cc1ff7c8add577c863f62664cb204c9c5f6c4df8155a181c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ee4e4a6db0f4941cc1ff7c8add577c863f62664cb204c9c5f6c4df8155a181c6->leave($__internal_ee4e4a6db0f4941cc1ff7c8add577c863f62664cb204c9c5f6c4df8155a181c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
