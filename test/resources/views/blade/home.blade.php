@extends('layouts.master2')


@section('body')

	    <div class="container-fluid home_contents_rap nopadding nomargin">
	        <section class="home_section_title">
	        	<div class="home_section_title_bg_img">
	        		<img src="{{$image_loc}}{{$header_image[0]->image_path}}">
	        	</div>
				<div class="container home_section_title_text">
	            	<div class="home_section_title_top">
	            		<h1>{{$header_image[0]->title}}</h1>
	            		<p>{{$header_image[0]->description}}</p>
	            		 <ul>
	            		 	<li>
						 		<button type="button" class="btn btn-default">{{$header_image[0]->button}}</button>
	            		 	</li>

	           		 		<li>
						 		<button type="button" class="btn btn-default">{{$header_image[0]->button2}}</button>
	            		 	</li>
	            		 </ul>
					</div>
			    </div>
			    <div class="container home_section_title_contents">
					<div class="row">
						@foreach($thumbnail_titles as $thumbnail_title)
	                   <div class="col-xs-12 col-sm-4 col-md-4 home_section_title_thumbnail">
				            <div class="thumbnail">
				                <img src="{{$image_loc}}{{$thumbnail_title->image_path}}">
				                <div class="caption">
				                    <h4>{{$thumbnail_title->title}}</h4>
				                    <p>{{$thumbnail_title->description}}</p>
				                    <a href="#">{{$thumbnail_title->button}}</a>
				                </div>
				            </div>     
	           			</div>
						@endforeach

			        </div>		    	
			    </div>

	        </section>
	            <section class="section_certified">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-12 certified_title nopadding nomargin">
	                            <h3>U.S. Certified Contractors</h3>
	                            <div class="underbar_title underbar_title_home">
	                            </div>
	                        </div>
	                        <div class="row certified_contents">
	                        	@foreach($thumbnail_certifieds as $thumbnail_certified)
	                            <div class="col-md-4 Government">
	                                <img src="{{$image_loc}}{{$thumbnail_certified->image_path}}" />
	                                <h4>{{$thumbnail_certified->title}}</h4>
				                    <p>{{$thumbnail_certified->description}}</p>
	                            </div>
	                            @endforeach
	                        </div>
	                    </div>
	                </div>
	        
	        </section>
	        <section class="section_workingwith">
				<div class="workingwith_section_title_bg_img">
	        		<img src="{{$image_loc}}{{$working_image[0]->image_path}}">
	        	</div>
				<div class="container workingwith_section_title_text">
	            	<div class="home_section_title_top">
	            		<h5>{{$working_image[0]->title}}</h5>
	            		<h1>{{$working_image[0]->description}}</h1>
	            		<br>
	            		 <ul>
	            		 	<li>
						 		<button type="button" class="btn btn-default">{{$working_image[0]->button2}}</button>
	            		 	</li>
	            		 </ul>
	            	</div>
	            </div> 


	        </section>
	        <section class="section_whatwedo">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 whatwedo_title nopadding nomargin">
	                        <h3>What We Do</h3>
	                        <div class="underbar_title underbar_title_home">
	                        </div>
	                        @foreach($thumbnail_whatwedos as $thumbnail_whatwedo)
	                        <div class="col-xs-12 col-sm-4 col-md-4 home_work_thumbnail">
	                            <div class="thumbnail">
	                                <img src="{{$image_loc}}{{$thumbnail_whatwedo->image_path}}">
	                                <div class="caption">
	                                    <h3>{{$thumbnail_whatwedo->title}}</h3>
	                                    <p>{{$thumbnail_whatwedo->description}}</p>
	                                    <a href="#">{{$thumbnail_whatwedo->button}}</a>
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
	                    </div>
	                    
	                </div>
	            </div>
	        </section>
	        <section class="section_featured">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-md-12 featured_title nopadding nomargin">
							<h3>Featured Works</h3>
	                        <div class="underbar_title_gray">
	                        </div>            		
	                    </div>

	                    <div class="row featured_contents">
	                        @foreach($thumbnail_featureds as $thumbnail_featured)
							<div class="col-xs-12 col-sm-6 col-md-4 projectList">
								<div class="image_rap">
									<img src="{{$image_loc}}{{$thumbnail_featured->image_path}}">
									<div class="empty">
										<h4>{{$thumbnail_featured->title}}</h4>
						  				<button type="button" class="btn btn-primary">
						  					{{$thumbnail_featured->button}}
						  				</button>			
						  			</div>
					  			</div>
							</div>
							@endforeach		
		                </div>
	            	</div>
	            </div>
	        </section>


	        <section class="section_recent">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-12 recent_title">
							<h3>Recent News</h3>
	                        <div class="underbar_title underbar_title_home">
	                        </div>        			
	                    </div>

	                    <div class="row">
	                    	@foreach($thumbnail_recents as $thumbnail_recent)
	                        <div class="col-xs-12 col-sm-4 col-md-4 home_work_thumbnail">
	                            <div class="thumbnail">
	                                <img src="{{$image_loc}}{{$thumbnail_recent->image_path}}">
	                                <div class="caption">
	                                    <h5>{{$thumbnail_recent->title}}</h5>
	                                    <div class="recent_border_box_top">
	                                    	
	                                    </div>
	                                    <div class="recent_detail nopadding nomargin">
		                                    <ul class="recent_ul nopadding nomargin">
		                                    	<li>
		                                    		<a href="#">
		                                    			<img src="img/calendar.png"/>
		                                    		</a>
		                                    	</li>
		                                    	<li>{{$thumbnail_recent->created_at}}</li>
		                                    	<li>
		                                    		<a href="#">
		                                    			<img src="img/chat.png"/>
			                                    	</a>
			                                    </li>
		                                    	<li>NO COMMENTS</li>
		                                    </ul>
	                                    </div>
	                                    <div class="recent_border_box_bottom">
	                                    	
	                                    </div>
	                                    <p>{{$thumbnail_recent->description}}</p>
										<a class="btn btn-default recent_btn" href="#" role="button">{{$thumbnail_recent->button}}</a>
									</div>
	                            </div>
	                        </div>
	                     @endforeach
	                    </div>

	        		</div>

	        	</div>

	        </section>
	        <section class="section_clients">
	        	<div class="container">
	        		<div class="row">
	   					<div class="col-md-6 client_title">
							<h3>Our Clients</h3>
	                        <div class="underbar_title underbar_title_home">   					
	                        </div>

	                        <div class="row client_contents_top">
	                        	@foreach($client_image as $client)
	                        	<div class="col-xs-4 col-sm-4 col-md-4 {{$client->beauty}}">
	                        		<img src="{{$image_loc}}{{$client->image_path}}" alt="">
	                        	</div>
	                        	@endforeach
	                        	       
	                       </div>

	                    </div>

	   					<div class="col-md-6 testimonials_title">
							<h3>Testimonials</h3>
	                        <div class="underbar_title underbar_title_home">   						
	   						</div>

	   						<div class="row">
	   							<div class="col-md-12">
	   								<div class="testimonials_box">
	   									<p> Dummy text is text that is used in the publishing industry or by web designers to<br>occupy the space which will later be filled with ‘real’ content. This is required when, for example,<br>the final text is not yet available.</p>
	   								</div>
	   							</div>
	   						</div>
								
							<div class="row">
								<div class="col-md-12 testimonials_person">
									<ul>
										<li>
											<a>
												<img src="img/spacey_2011_a_p.jpg" alt="person" class="img-circle">							
											</a>
										</li>
										<li>
											&nbsp;&nbsp; Howard K. Stern
										</li>
									</ul>
								</div>
							</div>

	   					</div>
	        		</div>
	        	</div>

	        </section>
	    </div>

@endsection