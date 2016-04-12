<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7cc45e1e3abd32f057a39b689e58c6db3a5e370837bb8c1e41ec65ed880c1fb8 extends Twig_Template
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
        $__internal_ed3ccf20b9749bb0dea894987c5cbfdb37404b17eb4d867c0c93366a31621e5e = $this->env->getExtension("native_profiler");
        $__internal_ed3ccf20b9749bb0dea894987c5cbfdb37404b17eb4d867c0c93366a31621e5e->enter($__internal_ed3ccf20b9749bb0dea894987c5cbfdb37404b17eb4d867c0c93366a31621e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed3ccf20b9749bb0dea894987c5cbfdb37404b17eb4d867c0c93366a31621e5e->leave($__internal_ed3ccf20b9749bb0dea894987c5cbfdb37404b17eb4d867c0c93366a31621e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
