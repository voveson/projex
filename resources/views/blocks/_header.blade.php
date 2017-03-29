<header class="header" role="banner">
	<nav class="nav nav-main" role="navigation">
    <div class="nav-wrapper">
      <div class="nav-toggle-wrapper">
        <a href="" class="nav-toggle" title="Show dashboard menu" data-nav-collapse=".toggle-main-nav">
          <span class="nav-toggle__menu">Menu</span>
        </a>
      </div>
      <div class="nav-collapse toggle-main-nav">
        <ul class="nav-section nav-wide">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Magicspace Entertainment <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="divider"></li>
					<li><a href="todos-empty.php">- Internal Projects -</a></li>
					<li><a href="todos.php">112º Degrees</a></li>
					<li><a href="todos.php">Adamski Peek</a></li>
					<li><a href="todos.php">AlmegaPL</a></li>
					<li><a href="todos.php">AppleActive</a></li>
					<li><a href="todos.php">Bergstrom</a></li>
					<li><a href="todos.php">BrandHive</a></li>
					<li><a href="todos.php">Carnosyn</a></li>
					<li><a href="todos.php">Cerule</a></li>
					<li><a href="todos.php">Cyactiv</a></li>
					<li><a href="todos.php">GOED</a></li>
					<li><a href="todos.php">Intern Projects</a></li>
					<li><a href="todos.php">Kyowa-Hakko</a></li>
					<li><a href="todos.php">LEFA</a></li>
					<li><a href="todos.php">Lifespan Fitness</a></li>
					<li><a href="todos.php">Mills Publishing</a></li>
					<li><a href="todos.php">Misc.</a></li>
					<li><a href="todos.php">Misc. Clients</a></li>
					<li><a href="todos.php">Nimbus</a></li>
					<li><a href="todos.php">OmniActive</a></li>
					<li><a href="todos.php">Protellier</a></li>
					<li><a href="todos.php">Sassy Steals</a></li>
					<li><a href="todos.php">ShootDotEdit 2.0</a></li>
					<li><a href="todos.php">Sustamine</a></li>
					<li><a href="todos.php">Teacrine</a></li>
					<li><a href="todos.php">York Howell</a></li>
					<li><a href="todos.php">Zane Benefits</a></li>
					<li><a href="todos.php">Daily Bread</a></li>
					<li><a href="todos.php">King Fisher</a></li>
					<li><a href="todos.php">Hires Big H</a></li>
					<li><a href="todos.php">Supplemental Health Care</a></li>
					<li role="separator" class="divider"></li>
		  <li class="dropdown-button">
						<a href="todos.php" data-toggle="modal" data-target="#new-project">New Project</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="nav-section" style="text-align: right">
			<!-- Authentication Links -->
			@if (Auth::guest())
				<li><a href="{{ url('/login') }}">Login</a></li>
				<li><a href="{{ url('/register') }}">Register</a></li>
			@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ url('/logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
			@endif
		</ul>
      </div>
    </div>
  </nav>
</header>
