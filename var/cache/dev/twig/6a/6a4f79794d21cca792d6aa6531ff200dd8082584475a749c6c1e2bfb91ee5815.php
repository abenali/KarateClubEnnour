<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7e6d7c0bb48f96ee75641faee5a588418f6c8d3ae36a8b38f8a8804d7da80b3d extends Twig_Template
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
        $__internal_e32a0c31b859c3b3c927d7d66a20078d4b5f31599e2247a74b4db2488131ebf1 = $this->env->getExtension("native_profiler");
        $__internal_e32a0c31b859c3b3c927d7d66a20078d4b5f31599e2247a74b4db2488131ebf1->enter($__internal_e32a0c31b859c3b3c927d7d66a20078d4b5f31599e2247a74b4db2488131ebf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e32a0c31b859c3b3c927d7d66a20078d4b5f31599e2247a74b4db2488131ebf1->leave($__internal_e32a0c31b859c3b3c927d7d66a20078d4b5f31599e2247a74b4db2488131ebf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
