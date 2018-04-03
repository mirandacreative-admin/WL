
<?php
/*
Right Sidebar
 */
?>  

<?php if (have_rows('color_links', 'options')): ?>
  <?php while (have_rows('color_links', 'options')): the_row(); ?>
  	<?php $isitpdf = get_sub_field('isitpdf');
  	      $pdffile = get_sub_field('pdf_upload'); 
  		  $pagelink = get_sub_field('button_link');
  		  
  		  // if($pdffile)
  		  // { 
  		  // 	$finalink = $pdffile;
  		  // 	$target = 'download'; 
  		  // } else { 
  		  // 	$finalink = $pagelink; 
  		  // 	$target = ''; 
  		  // }

  		  $finalink = ($pdffile) ? $pdffile : $pagelink;
  		  $target = ($pdffile) ? 'download' : '';  

  	?>
    <a class="button" style="background-color: <?php the_sub_field('button_color'); ?>;" href="<?php echo $finalink; ?>" target="_blank" <?= $target; ?> >
    <?php the_sub_field('button_text'); ?>
    </a>
  <?php endwhile; ?>
<?php endif; ?>
