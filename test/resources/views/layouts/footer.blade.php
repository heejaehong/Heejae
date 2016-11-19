<div class="container-fluid nopadding nomargin">
	<div class="footer">
		<div class="container">
			<div class="row nomargin">
				<div class="col-md-3 footer_top">
					<p>Follow us</p>
					<ul>
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
							<a href="#" class="googleplus">
								<img src="img/googleplus.png" alt="googleplus">
							</a>
						</li>						

						<li>
							<a href="#" class="pinterest">
								<img src="img/pinterest.png" alt="pinterest">
							</a>
						</li>						

						<li>
							<a href="#" class="facebook">
								<img src="img/facebook.png" alt="facebook">
							</a>
						</li>					
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 about">
					<h4 class="footer_title">ABOUT COMPANY</h4>
					<p>{{$head_info[0]->aboutDescription}}</p>
				</div>
				<div class="col-md-3 company">
					<h4 class="footer_title">COMPANY</h4>
					<div class="row">
	                    @foreach($info_menus as $info_menu)
	                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <li><a href="/{{$info_menu->href}}">{{$info_menu->navi}}</a></li>
                        </div>
                        @endforeach
						
					</div>

				</div>
				<div class="col-md-3 office">
					<h4 class="footer_title">CONSTRUCTION OFFICE</h4>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2">
							<li>
								<a>
									<img src="img/location.png" alt="location">
								</a>
							</li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-10">
							<li>
								<a>{{$head_info[0]->address}}
								</a>
							</li>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2">
							<li><a><img src="img/phone.png" alt="phone"></a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-10">
							<li><a>{{$head_info[0]->phone}}</a></li>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2">
							<li><a><img src="img/email.png" alt="email"></a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-10">
							<li><a>{{$head_info[0]->email}}</a></li>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2">
							<li>
								<a>
									<img src="img/fax.png" alt="fax">
								</a>
							</li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-10">
							<li><a>{{$head_info[0]->fax}}</a></li>
						</div>
					</div>

				</div>
				<div class="col-md-3 hours">
					<h4 class="footer_title">BUSINESS HOURS</h4>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<p>Our support available to help you 24 hours a day, seven days a week.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<li><a>Monday-Friday:</a></li>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6 text-right">
							<li><a>9am to 5pm</a></li>
						</div>
					</div>

					<div class="row Sat">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<li><a>Saturday:</a></li>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6 text-right">
							<li><a>10am to 2pm</a></li>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<li><a>Sunday:</a></li>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6 text-right">
							<li><a>Closed</a></li>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container-fluid nopadding nomargin">
	<div class="bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<p>Copyright © 2015 Construction Theme - Theme by WPCharming</p>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6">
					<ul>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Disclaimer</a></li>
						<li><a href="#">Privacy Policy</a></li>						
					</ul>
				</div>

			</div>

		</div>
	</div>
</div>