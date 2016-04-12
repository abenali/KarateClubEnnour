<?php

/* @WebSite/index.html.twig */
class __TwigTemplate_a9c6ca245804722f1b28989f382a5dbd43b6b4db6fc5eb41056d0a47b1ada83f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@WebSite/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ddceb91a210d51a48da4b6a007338f0bc178564a5c7723eaebc1996826f0447 = $this->env->getExtension("native_profiler");
        $__internal_3ddceb91a210d51a48da4b6a007338f0bc178564a5c7723eaebc1996826f0447->enter($__internal_3ddceb91a210d51a48da4b6a007338f0bc178564a5c7723eaebc1996826f0447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebSite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ddceb91a210d51a48da4b6a007338f0bc178564a5c7723eaebc1996826f0447->leave($__internal_3ddceb91a210d51a48da4b6a007338f0bc178564a5c7723eaebc1996826f0447_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71de758ae75090f232db41f35082d805089dff9ad1593c536648224fe4717fe1 = $this->env->getExtension("native_profiler");
        $__internal_71de758ae75090f232db41f35082d805089dff9ad1593c536648224fe4717fe1->enter($__internal_71de758ae75090f232db41f35082d805089dff9ad1593c536648224fe4717fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil";
        
        $__internal_71de758ae75090f232db41f35082d805089dff9ad1593c536648224fe4717fe1->leave($__internal_71de758ae75090f232db41f35082d805089dff9ad1593c536648224fe4717fe1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d86791f7cff956385cb9c61f33a7e6f148456af3591a28344e53b81f81bd124 = $this->env->getExtension("native_profiler");
        $__internal_9d86791f7cff956385cb9c61f33a7e6f148456af3591a28344e53b81f81bd124->enter($__internal_9d86791f7cff956385cb9c61f33a7e6f148456af3591a28344e53b81f81bd124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Content -->
    <div id=\"content\" class=\"8u skel-cell-important\">
        <section>
            <header>
                <h2>Welcome to Iridium!</h2>
                <span class=\"byline\">Integer sit amet pede vel arcu aliquet pretium</span>
            </header>
            <a href=\"#\" class=\"image full\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/images/pic07.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
            <p>This is <strong>Iridium</strong>, a responsive HTML5 site template freebie by <a href=\"http://templated.co\">TEMPLATED</a>. Released for free under the <a href=\"http://templated.co/license\">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href=\"http://templated.co\">our site</a> or follow us on <a href=\"http://twitter.com/templatedco\">Twitter</a>.</p>
            <p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor.</p>
        </section>
    </div>
    
    <!-- Sidebar -->
    <div id=\"sidebar\" class=\"4u\">
        <section>
            <header>
                <h2>Pellentesque vulputate</h2>
            </header>
            <ul class=\"style\">
                <li>
                    <p class=\"posted\">August 11, 2002  |  (10 )  Comments</p>
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/images/pic04.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <p class=\"text\">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                </li>
                <li>
                    <p class=\"posted\">August 11, 2002  |  (10 )  Comments</p>
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/images/pic05.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <p class=\"text\">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                </li>
                <li>
                    <p class=\"posted\">August 11, 2002  |  (10 )  Comments</p>
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/images/pic06.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <p class=\"text\">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
                </li>
            </ul>
        </section>
    </div>
";
        
        $__internal_9d86791f7cff956385cb9c61f33a7e6f148456af3591a28344e53b81f81bd124->leave($__internal_9d86791f7cff956385cb9c61f33a7e6f148456af3591a28344e53b81f81bd124_prof);

    }

    public function getTemplateName()
    {
        return "@WebSite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  90 => 33,  82 => 28,  64 => 13,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} {{ parent() }} Accueil{% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- Content -->*/
/*     <div id="content" class="8u skel-cell-important">*/
/*         <section>*/
/*             <header>*/
/*                 <h2>Welcome to Iridium!</h2>*/
/*                 <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>*/
/*             </header>*/
/*             <a href="#" class="image full"><img src="{{ asset('bundles/website/images/pic07.jpg') }}" alt="" /></a>*/
/*             <p>This is <strong>Iridium</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>*/
/*             <p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor.</p>*/
/*         </section>*/
/*     </div>*/
/*     */
/*     <!-- Sidebar -->*/
/*     <div id="sidebar" class="4u">*/
/*         <section>*/
/*             <header>*/
/*                 <h2>Pellentesque vulputate</h2>*/
/*             </header>*/
/*             <ul class="style">*/
/*                 <li>*/
/*                     <p class="posted">August 11, 2002  |  (10 )  Comments</p>*/
/*                     <img src="{{ asset('bundles/website/images/pic04.jpg') }}" alt="" />*/
/*                     <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p class="posted">August 11, 2002  |  (10 )  Comments</p>*/
/*                     <img src="{{ asset('bundles/website/images/pic05.jpg') }}" alt="" />*/
/*                     <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>*/
/*                 </li>*/
/*                 <li>*/
/*                     <p class="posted">August 11, 2002  |  (10 )  Comments</p>*/
/*                     <img src="{{ asset('bundles/website/images/pic06.jpg') }}" alt="" />*/
/*                     <p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>*/
/*                 </li>*/
/*             </ul>*/
/*         </section>*/
/*     </div>*/
/* {% endblock %}*/
