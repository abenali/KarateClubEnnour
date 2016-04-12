<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_68330d73a48078097f80b10d571c69878451a9b1ec129d066cd0d441dabf8a3f extends Twig_Template
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
        $__internal_b8a533c348ef03e7f9856f8c955ba89ef9a748169d76b38c11365adcb831d3d3 = $this->env->getExtension("native_profiler");
        $__internal_b8a533c348ef03e7f9856f8c955ba89ef9a748169d76b38c11365adcb831d3d3->enter($__internal_b8a533c348ef03e7f9856f8c955ba89ef9a748169d76b38c11365adcb831d3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b8a533c348ef03e7f9856f8c955ba89ef9a748169d76b38c11365adcb831d3d3->leave($__internal_b8a533c348ef03e7f9856f8c955ba89ef9a748169d76b38c11365adcb831d3d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
