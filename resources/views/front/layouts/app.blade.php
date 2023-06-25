<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		@yield('title')
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    @yield('links')
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="@yield('wrapper-class', '')">

        <!-- Intro -->
        @yield('intro', '')
				<!-- Header -->
        <header id="header">
            <a href="{{ route('home') }}" class="logo">Massively</a>
        </header>

				<!-- Nav -->
        @props(['contactInfo' => $contactInfo])
				<x-nav :contactInfo="$contactInfo" />
                    
				<!-- Main -->
        <div id="main">
					@yield('content')
         <!-- Pagination -->

          @yield('pagination', '')
        </div>

        
        
				<!-- Footer -->
        @props(['contactInfo' => $contactInfo])
        <x-footer :contactInfo="$contactInfo" />

      
				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>
			</div>

		<!-- Scripts -->
			<x-scripts/>

	</body>
</html>