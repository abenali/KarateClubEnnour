<?php

/* ::layout.html.twig */
class __TwigTemplate_dd2358600f91df23636b20bf72339562f56a4551489d637ea87ce27acc4f842f extends Twig_Template
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
        $__internal_b4f8e25c53243343a5ea454d080ead7e31aa398919e3a0eb26df6674a1270471 = $this->env->getExtension("native_profiler");
        $__internal_b4f8e25c53243343a5ea454d080ead7e31aa398919e3a0eb26df6674a1270471->enter($__internal_b4f8e25c53243343a5ea454d080ead7e31aa398919e3a0eb26df6674a1270471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_b4f8e25c53243343a5ea454d080ead7e31aa398919e3a0eb26df6674a1270471->leave($__internal_b4f8e25c53243343a5ea454d080ead7e31aa398919e3a0eb26df6674a1270471_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4855a638c932210eb369b7d1ff73a41bad6df2573c2cb9fceb0895bcd15e64ba = $this->env->getExtension("native_profiler");
        $__internal_4855a638c932210eb369b7d1ff73a41bad6df2573c2cb9fceb0895bcd15e64ba->enter($__internal_4855a638c932210eb369b7d1ff73a41bad6df2573c2cb9fceb0895bcd15e64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Karaté Club Ennour - ";
        
        $__internal_4855a638c932210eb369b7d1ff73a41bad6df2573c2cb9fceb0895bcd15e64ba->leave($__internal_4855a638c932210eb369b7d1ff73a41bad6df2573c2cb9fceb0895bcd15e64ba_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe9293fb43e29150bc05847501fbdeb7d282bf64db7a5c9e5a2f4b9a557e163c = $this->env->getExtension("native_profiler");
        $__internal_fe9293fb43e29150bc05847501fbdeb7d282bf64db7a5c9e5a2f4b9a557e163c->enter($__internal_fe9293fb43e29150bc05847501fbdeb7d282bf64db7a5c9e5a2f4b9a557e163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fe9293fb43e29150bc05847501fbdeb7d282bf64db7a5c9e5a2f4b9a557e163c->leave($__internal_fe9293fb43e29150bc05847501fbdeb7d282bf64db7a5c9e5a2f4b9a557e163c_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_273732c14f1a90e7269c5c3d225d3bd1c200840234f1e4d5ee9cf4a0a373eb7d = $this->env->getExtension("native_profiler");
        $__internal_273732c14f1a90e7269c5c3d225d3bd1c200840234f1e4d5ee9cf4a0a373eb7d->enter($__internal_273732c14f1a90e7269c5c3d225d3bd1c200840234f1e4d5ee9cf4a0a373eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_273732c14f1a90e7269c5c3d225d3bd1c200840234f1e4d5ee9cf4a0a373eb7d->leave($__internal_273732c14f1a90e7269c5c3d225d3bd1c200840234f1e4d5ee9cf4a0a373eb7d_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5d4f8eba3e381fca424e6a7dbb85ca75fa4d4927b43f91530b460615ab42139 = $this->env->getExtension("native_profiler");
        $__internal_d5d4f8eba3e381fca424e6a7dbb85ca75fa4d4927b43f91530b460615ab42139->enter($__internal_d5d4f8eba3e381fca424e6a7dbb85ca75fa4d4927b43f91530b460615ab42139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d5d4f8eba3e381fca424e6a7dbb85ca75fa4d4927b43f91530b460615ab42139->leave($__internal_d5d4f8eba3e381fca424e6a7dbb85ca75fa4d4927b43f91530b460615ab42139_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
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
