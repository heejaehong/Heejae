<div class="container nopadding">
	<div class="header_rap">
		<div class="row">
			<div class="col-md-12 header_top">
				<div class="row">
					<div class="col-md-offset-6 col-md-6 header_social">
						<span class="header_text">Toll Free</span>
						<span class="header_count">1.800.123.4567</span>
						<ul class="social">
							<li>
								<a href="#" class="instagram">
									<img src="img/instagram.png" alt="instagram">
								</a>
							</li>
							<li>
								<a href="#" class="linkedin">
									<img src="img/linkedin.png" alt="linkedin">
								</a>
							</li>
							<li>
								<a href="#" class="facebook">
									<img src="img/facebook.png" alt="facebook">
								</a>
							</li>
							<li>
								<a href="#" class="googleplus">
									<img src="img/googleplus.png" alt="googleplus">
								</a>
							</li>
							<li>
								<a href="#" class="pinterest">
									<img src="img/pinterest.png" alt="pinterest">
								</a>
							</li>
						</ul>								
					</div>
				</div>
			</div>
		</div>			
		<!-- navi start -->
		<div class="navi">
			<div class="navbar navbar-static-top">
				<div class="container">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="header_rap">
						<!-- logo start -->
						<div class="logo">
							<a href="#home">
								<img src="img/Logo.png"/>
							</a>
						</div>
						<!-- logo end -->		

						<div class="collapse navbar-collapse navHeaderCollapse">
							<ul class="nav navbar-nav navbar-right">
                                @foreach($menus as $menu)
                                    <li><a href="/{{$menu->href}}">{{$menu->navi}}</a></li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- navi end -->
	</div>
</div>