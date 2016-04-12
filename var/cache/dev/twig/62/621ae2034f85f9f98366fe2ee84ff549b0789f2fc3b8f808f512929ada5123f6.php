<?php

/* layout.html.twig */
class __TwigTemplate_8c122925b15da35cabbf89f1d7df1af19859c1687ae82b0cf387c9e573ccb7ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e7ad7780cba6f3fad676ce01b77aff8045e8f8675e776159157e0fc9c3163d = $this->env->getExtension("native_profiler");
        $__internal_a1e7ad7780cba6f3fad676ce01b77aff8045e8f8675e776159157e0fc9c3163d->enter($__internal_a1e7ad7780cba6f3fad676ce01b77aff8045e8f8675e776159157e0fc9c3163d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t</head>
\t<body class=\"homepage\">

\t\t<!-- Header -->
\t\t<div id=\"header\">
\t\t\t<div class=\"container\"> 
\t\t\t\t
\t\t\t\t<!-- Logo -->
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<h1><a href=\"#\">Iridium</a></h1>
\t\t\t\t\t<span>Design by TEMPLATED</span>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Nav -->
\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"active\"><a href=\"index.html\">Homepage</a></li>
\t\t\t\t\t\t<li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
\t\t\t\t\t\t<li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
\t\t\t\t\t\t<li><a href=\"no-sidebar.html\">No Sidebar</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t<!-- Main -->
\t\t<div id=\"main\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\"> 
                ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "                </div>
\t\t\t</div>
\t\t</div>
        
\t\t<!-- Footer -->
\t\t<div id=\"featured\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t<h2>Aenean elementum facilisis</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"image full\"><img src=\"images/pic01.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
\t\t\t\t\t\t<p><a href=\"#\" class=\"button\">More Details</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t<h2>Fusce ultrices fringilla</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"image full\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
\t\t\t\t\t\t<p><a href=\"#\" class=\"button\">More Details</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t<h2>Etiam rhoncus volutpat erat</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"image full\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
\t\t\t\t\t\t<p><a href=\"#\" class=\"button\">More Details</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Footer -->
\t\t<div id=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Latest Posts</h2>
\t\t\t\t\t\t\t<ul class=\"default\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pellentesque lectus gravida blandit</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum consectetuer adipiscing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Phasellus nibh pellentesque congue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Cras vitae metus aliquam pharetra</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas vitae orci feugiat eleifend</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Ultrices fringilla</h2>
\t\t\t\t\t\t\t<ul class=\"default\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pellentesque lectus gravida blandit</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum consectetuer adipiscing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Phasellus nibh pellentesque congue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Cras vitae metus aliquam pharetra</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas vitae orci feugiat eleifend</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Aenean elementum</h2>
\t\t\t\t\t\t\t<ul class=\"default\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pellentesque lectus gravida blandit</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum consectetuer adipiscing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Phasellus nibh pellentesque congue</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Cras vitae metus aliquam pharetra</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas vitae orci feugiat eleifend</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Copyright -->
\t\t<div id=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\tDesign: <a href=\"http://templated.co\">TEMPLATED</a> Images: <a href=\"http://unsplash.com\">Unsplash</a> (<a href=\"http://unsplash.com/cc0\">CC0</a>)
\t\t\t</div>
\t\t</div>
\t\t
        ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "\t</body>
</html>";
        
        $__internal_a1e7ad7780cba6f3fad676ce01b77aff8045e8f8675e776159157e0fc9c3163d->leave($__internal_a1e7ad7780cba6f3fad676ce01b77aff8045e8f8675e776159157e0fc9c3163d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3265700c2f84881d6d6c63f169db93d540a43520d2939466c18dab1ab518e63 = $this->env->getExtension("native_profiler");
        $__internal_c3265700c2f84881d6d6c63f169db93d540a43520d2939466c18dab1ab518e63->enter($__internal_c3265700c2f84881d6d6c63f169db93d540a43520d2939466c18dab1ab518e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Karaté Club Ennour - ";
        
        $__internal_c3265700c2f84881d6d6c63f169db93d540a43520d2939466c18dab1ab518e63->leave($__internal_c3265700c2f84881d6d6c63f169db93d540a43520d2939466c18dab1ab518e63_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98c66a8b7519ef6e41c5ae7f74c5cbe6bf292000eb1e0412ed5e0be4e6a1d4c8 = $this->env->getExtension("native_profiler");
        $__internal_98c66a8b7519ef6e41c5ae7f74c5cbe6bf292000eb1e0412ed5e0be4e6a1d4c8->enter($__internal_98c66a8b7519ef6e41c5ae7f74c5cbe6bf292000eb1e0412ed5e0be4e6a1d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/css/skel-noscript.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/css/style-desktop.css"), "html", null, true);
        echo "\" />
            <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/css/ie/v8.css"), "html", null, true);
        echo "\" /><![endif]-->
            <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/css/ie/v9.css"), "html", null, true);
        echo "\" /><![endif]-->
        ";
        
        $__internal_98c66a8b7519ef6e41c5ae7f74c5cbe6bf292000eb1e0412ed5e0be4e6a1d4c8->leave($__internal_98c66a8b7519ef6e41c5ae7f74c5cbe6bf292000eb1e0412ed5e0be4e6a1d4c8_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_92bd1cf9ae1840e006043037ee755180bf91e4905e7fb3faacb2bee4327e1af0 = $this->env->getExtension("native_profiler");
        $__internal_92bd1cf9ae1840e006043037ee755180bf91e4905e7fb3faacb2bee4327e1af0->enter($__internal_92bd1cf9ae1840e006043037ee755180bf91e4905e7fb3faacb2bee4327e1af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92bd1cf9ae1840e006043037ee755180bf91e4905e7fb3faacb2bee4327e1af0->leave($__internal_92bd1cf9ae1840e006043037ee755180bf91e4905e7fb3faacb2bee4327e1af0_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_703c9bca9c3a4ee182f40e280541b195fdbde0deb4cd43a7ced584170ef34b93 = $this->env->getExtension("native_profiler");
        $__internal_703c9bca9c3a4ee182f40e280541b195fdbde0deb4cd43a7ced584170ef34b93->enter($__internal_703c9bca9c3a4ee182f40e280541b195fdbde0deb4cd43a7ced584170ef34b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "        <!--[if lte IE 8]><script src=\"js/html5shiv.js\"></script><![endif]-->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/js/skel-panels.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/website/js/init.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_703c9bca9c3a4ee182f40e280541b195fdbde0deb4cd43a7ced584170ef34b93->leave($__internal_703c9bca9c3a4ee182f40e280541b195fdbde0deb4cd43a7ced584170ef34b93_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 134,  239 => 133,  235 => 132,  231 => 130,  225 => 129,  214 => 46,  205 => 15,  201 => 14,  197 => 13,  193 => 12,  189 => 11,  186 => 10,  180 => 9,  168 => 4,  160 => 136,  158 => 129,  74 => 47,  72 => 46,  41 => 17,  39 => 9,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<title>{% block title %}Karaté Club Ennour - {% endblock %}</title>*/
/* 		<meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/* 		<meta name="description" content="" />*/
/* 		<meta name="keywords" content="" />*/
/*         */
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>*/
/*             <link rel="stylesheet" href="{{ asset('bundles/website/css/skel-noscript.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/website/css/style.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/website/css/style-desktop.css') }}" />*/
/*             <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('bundles/website/css/ie/v8.css') }}" /><![endif]-->*/
/*             <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('bundles/website/css/ie/v9.css') }}" /><![endif]-->*/
/*         {% endblock %}*/
/* 	</head>*/
/* 	<body class="homepage">*/
/* */
/* 		<!-- Header -->*/
/* 		<div id="header">*/
/* 			<div class="container"> */
/* 				*/
/* 				<!-- Logo -->*/
/* 				<div id="logo">*/
/* 					<h1><a href="#">Iridium</a></h1>*/
/* 					<span>Design by TEMPLATED</span>*/
/* 				</div>*/
/* 				*/
/* 				<!-- Nav -->*/
/* 				<nav id="nav">*/
/* 					<ul>*/
/* 						<li class="active"><a href="index.html">Homepage</a></li>*/
/* 						<li><a href="left-sidebar.html">Left Sidebar</a></li>*/
/* 						<li><a href="right-sidebar.html">Right Sidebar</a></li>*/
/* 						<li><a href="no-sidebar.html">No Sidebar</a></li>*/
/* 					</ul>*/
/* 				</nav>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- Main -->*/
/* 		<div id="main">*/
/* 			<div class="container">*/
/* 				<div class="row"> */
/*                 {% block body %}{% endblock %}*/
/*                 </div>*/
/* 			</div>*/
/* 		</div>*/
/*         */
/* 		<!-- Footer -->*/
/* 		<div id="featured">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="4u">*/
/* 						<h2>Aenean elementum facilisis</h2>*/
/* 						<a href="#" class="image full"><img src="images/pic01.jpg" alt="" /></a>*/
/* 						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>*/
/* 						<p><a href="#" class="button">More Details</a></p>*/
/* 					</div>*/
/* 					<div class="4u">*/
/* 						<h2>Fusce ultrices fringilla</h2>*/
/* 						<a href="#" class="image full"><img src="images/pic02.jpg" alt="" /></a>*/
/* 						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>*/
/* 						<p><a href="#" class="button">More Details</a></p>*/
/* 					</div>*/
/* 					<div class="4u">*/
/* 						<h2>Etiam rhoncus volutpat erat</h2>*/
/* 						<a href="#" class="image full"><img src="images/pic03.jpg" alt="" /></a>*/
/* 						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>*/
/* 						<p><a href="#" class="button">More Details</a></p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* */
/* 		<!-- Footer -->*/
/* 		<div id="footer">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="4u">*/
/* 						<section>*/
/* 							<h2>Latest Posts</h2>*/
/* 							<ul class="default">*/
/* 								<li><a href="#">Pellentesque lectus gravida blandit</a></li>*/
/* 								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>*/
/* 								<li><a href="#">Phasellus nibh pellentesque congue</a></li>*/
/* 								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>*/
/* 								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>*/
/* 							</ul>*/
/* 						</section>*/
/* 					</div>*/
/* 					<div class="4u">*/
/* 						<section>*/
/* 							<h2>Ultrices fringilla</h2>*/
/* 							<ul class="default">*/
/* 								<li><a href="#">Pellentesque lectus gravida blandit</a></li>*/
/* 								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>*/
/* 								<li><a href="#">Phasellus nibh pellentesque congue</a></li>*/
/* 								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>*/
/* 								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>*/
/* 							</ul>*/
/* 						</section>*/
/* 					</div>*/
/* 					<div class="4u">*/
/* 						<section>*/
/* 							<h2>Aenean elementum</h2>*/
/* 							<ul class="default">*/
/* 								<li><a href="#">Pellentesque lectus gravida blandit</a></li>*/
/* 								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>*/
/* 								<li><a href="#">Phasellus nibh pellentesque congue</a></li>*/
/* 								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>*/
/* 								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>*/
/* 							</ul>*/
/* 						</section>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- Copyright -->*/
/* 		<div id="copyright">*/
/* 			<div class="container">*/
/* 				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/*         {% block javascripts %}*/
/*         <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->*/
/*             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*             <script src="{{ asset('bundles/website/js/skel.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/website/js/skel-panels.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/website/js/init.js') }}"></script>*/
/*         {% endblock %}*/
/* 	</body>*/
/* </html>*/
