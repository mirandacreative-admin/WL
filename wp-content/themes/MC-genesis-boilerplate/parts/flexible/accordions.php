<?php   
		
		if( have_rows('accordion') ):
		
			$count = 0;
			$uid = 3; 
	 		echo '<div class="row padfix">';

	 	// loop through the rows of data
	    while ( have_rows('accordion') ) : the_row();
	    	$count++;
	    	$uid++;
	    	$amtofcols = get_sub_field('columns');
	    	$aonetitle = get_sub_field('accordion_one_title');
	    	$atwotitle = get_sub_field('accordion_two_title');	    	
	    	$aonecontent = get_sub_field('accordion_one_content');	 
	    	$atwocontent = get_sub_field('accordion_two_content');	
	    	$fullwidth = get_sub_field('full_width');

		if ($amtofcols == 1){
			if($fullwidth = 1 ){$colwidth = '12';}else{$colwidth = '6';}
	      echo '<div class="col-sm-'.$colwidth.'">
		    			<div id="accordionfull-'.$uid.'" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div class="card-header" role="tab" id="headingOne">
								      <h5 class="mb-0">
								        <a data-toggle="collapse" data-parent="#accordionfull-'.$uid.'" href="#collapseOnefull-'.$uid.'" aria-expanded="true" aria-controls="collapseOnefull-'.$uid.'">
								          '.$aonetitle.'
								        </a>
								      </h5>
								    </div>

								    <div id="collapseOnefull-'.$uid.'" class="collapse show" role="tabpanel" aria-labelledby="headingOne-'.$uid.'">
								      <div class="card-block">
								      '.$aonecontent.'
								      </div>
								</div>
							</div>
						</div>
				</div>';				
			};

if ($amtofcols == 2){
	      echo '<div class="col-sm-6">
		    			<div id="accordionhalfy-'.$uid.'" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div class="card-header" role="tab" id="headingOne">
								      <h5 class="mb-0">
								        <a data-toggle="collapse" data-parent="#accordionhalfy-'.$uid.'" href="#collapsehalfy-'.$uid.'" aria-expanded="true" aria-controls="collapsehalfy-'.$uid.'">
								          '.$aonetitle.'
								        </a>
								      </h5>
								    </div>

								    <div id="collapsehalfy-'.$uid.'" class="collapse show" role="tabpanel" aria-labelledby="headingOne-'.$uid.'">
								      <div class="card-block">
								      <h1>'.$fullwidth.'</h1>
								      '.$aonecontent.'
								      </div>
								</div>
							</div>
						</div>
				</div>';								
				      echo '<div class="col-sm-6">
					    			<div id="accordiontwo-'.$uid.'" role="tablist" aria-multiselectable="true">
										<div class="card">
											<div class="card-header" role="tab" id="headingOne">
											      <h5 class="mb-0">
											        <a data-toggle="collapse" data-parent="#accordiontwo-'.$uid.'" href="#collapsetwo-'.$uid.'" aria-expanded="true" aria-controls="collapsetwo-'.$uid.'">
											          '.$atwotitle.'
											        </a>
											      </h5>
											    </div>

											    <div id="collapsetwo-'.$uid.'" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
											      <div class="card-block">
											      '.$atwocontent.'
											      </div>
											</div>
										</div>
									</div>
							</div>';
					echo '<div class="w-100"></div>';	
			}
	


		endwhile;

		echo '</div>';

		endif; ?>