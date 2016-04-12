<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_755bb05b57d1c289ffbe8cdf43de4405d575730ee7f2bb1f51ce56318f64d3ab extends Twig_Template
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
        $__internal_9ae553477b02ff5d364658229d9791a5b7bdc3fc3cf9d4f83b809bd76b24b4cf = $this->env->getExtension("native_profiler");
        $__internal_9ae553477b02ff5d364658229d9791a5b7bdc3fc3cf9d4f83b809bd76b24b4cf->enter($__internal_9ae553477b02ff5d364658229d9791a5b7bdc3fc3cf9d4f83b809bd76b24b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9ae553477b02ff5d364658229d9791a5b7bdc3fc3cf9d4f83b809bd76b24b4cf->leave($__internal_9ae553477b02ff5d364658229d9791a5b7bdc3fc3cf9d4f83b809bd76b24b4cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
