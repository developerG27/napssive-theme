<?php 
	$ricerca = $_GET['s'];
	get_header(); 
?>

<section class="main-container">
  <aside class="aside">
    <?php 
      $categories = get_categories();
      
      foreach($categories as $category) {
        echo '<ul> <li> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> </li> </ul>'; 
      } 
    ?>  
  </aside>

	<div class="content">
		<div class="row">
			<div class="card card-md">
        <p>Questa pagina non esiste </p>
			</div>  
		</div>
	</div>
</section>

</body>
</html>