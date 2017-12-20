
<div class="single">
 		<?php
		$publication_id=$_GET['id'];
		$publication = WPRI_Database::get_entity("publication",$publication_id);

		echo "<h2 class='col-xs-12 list-item'>".$publication['title']."</h2><br>";
		echo "<div class='col-xs-2'>". "publication picture" ."</div>";
		echo "<div class='col-xs-10  row  list-item'>";
			echo "<div class='col-xs-12'><h3 class='list-item'>".__("Authors","wpri")." :".$publication['authors']."</h3> </div>";

			echo "<div class='col-xs-12'><h3 class='list-item'> ".__("DOI number","wpri").": ".$publication['doi']."</h3> </div>";
			echo "<div class='col-xs-12'><h3 class='list-item'> ".__("Publication type","wpri").": ". $publication["pubtype"]."</h3> </div>";
			echo "<div class='col-xs-12'><h3 class='list-item'> Bibtex: ". $publication['bibtex']."</h3> </div>";

		echo "</div>";
		?>

	<h2 class="outfont"><?php _e("Authors","wpri") ?></h2>
    <ul class="list-group">
	<?php
		foreach ($publication['member'] as $member_id) {
      $member = WPRI_Database::get_member_full($member_id) ;
			echo "<a class='list-group-item' href='".site_url()."/member?id=".$member_id."'>".$member["name"]."</a>";
		}?>
    </ul>

	<h2 class="outfont"><?php _e("Projects","wpri") ?> </h2>
    <ul class="list-group">
		<?php
		foreach ($publication['project'] as $project_id) {
			$project = WPRI_Database::get_record("project",$project_id) ;
			echo "<a class='list-group-item' href='".site_url()."/project?id=".$project_id."'>".WPRI_Database::get_localized_element("project","title",$project_id)."</a>";
		}?>
    </ul>


</div><!-- #publication -->
