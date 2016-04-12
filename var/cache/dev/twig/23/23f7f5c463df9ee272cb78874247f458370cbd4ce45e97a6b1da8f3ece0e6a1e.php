<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5d8ce156891e5094eb13e1553d4b8d5a080c7c6d47a44af44d144ae0c91582f4 extends Twig_Template
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
        $__internal_a63b03e3ed54f5ff84d41e2976657ab695bc34389178bc995bd1e943a0d08ac8 = $this->env->getExtension("native_profiler");
        $__internal_a63b03e3ed54f5ff84d41e2976657ab695bc34389178bc995bd1e943a0d08ac8->enter($__internal_a63b03e3ed54f5ff84d41e2976657ab695bc34389178bc995bd1e943a0d08ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a63b03e3ed54f5ff84d41e2976657ab695bc34389178bc995bd1e943a0d08ac8->leave($__internal_a63b03e3ed54f5ff84d41e2976657ab695bc34389178bc995bd1e943a0d08ac8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
