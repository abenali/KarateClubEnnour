<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4f641fa845cf26cc2b45b41f02cb110965a3c3126912c490670cb5f49731eec6 extends Twig_Template
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
        $__internal_942988c988468e970770e9657fce054369e0bee59eabf13744f97eb628a15f65 = $this->env->getExtension("native_profiler");
        $__internal_942988c988468e970770e9657fce054369e0bee59eabf13744f97eb628a15f65->enter($__internal_942988c988468e970770e9657fce054369e0bee59eabf13744f97eb628a15f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_942988c988468e970770e9657fce054369e0bee59eabf13744f97eb628a15f65->leave($__internal_942988c988468e970770e9657fce054369e0bee59eabf13744f97eb628a15f65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
