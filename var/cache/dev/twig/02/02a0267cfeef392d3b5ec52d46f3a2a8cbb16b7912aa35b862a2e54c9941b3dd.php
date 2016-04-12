<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f36e79eb0b9098db215016d10b39448140f08680ec9df13d8cc4c8100c375eff extends Twig_Template
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
        $__internal_3c619a663bc5a4acec1dddb42da29d76203b096b0365ecfa4087df966018e2dd = $this->env->getExtension("native_profiler");
        $__internal_3c619a663bc5a4acec1dddb42da29d76203b096b0365ecfa4087df966018e2dd->enter($__internal_3c619a663bc5a4acec1dddb42da29d76203b096b0365ecfa4087df966018e2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3c619a663bc5a4acec1dddb42da29d76203b096b0365ecfa4087df966018e2dd->leave($__internal_3c619a663bc5a4acec1dddb42da29d76203b096b0365ecfa4087df966018e2dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
