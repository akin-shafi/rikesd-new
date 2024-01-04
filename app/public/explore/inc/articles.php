<?php 
require_once('../../../../private/initialize.php'); 
  
	$id =  $_POST['id'];
  $featuredPost = Blog::find_featured_post(1);
  $UpdateFeaturedPost = Blog::find_by_id($id);
  if(!empty( $featuredPost)){
    $data =  [
        'featured' => 0,
    ];
    $featuredPost->merge_attributes($data);
    $result = $featuredPost->save();
    if($result){
      $args = [
          'featured' => 1,
      ];
      $UpdateFeaturedPost->merge_attributes($args);
      $result2 = $UpdateFeaturedPost->save();
      if ($result2 == true) {
        exit(json_encode(['success' => true, 'msg' => 'Update successful']));
      }else{
        exit(json_encode(['success' => false, 'msg' => display_errors($agent->errors)]));
      }
    }
  }else{
      $args = [
          'featured' => 1,
      ];
      $UpdateFeaturedPost->merge_attributes($args);
      $result2 = $UpdateFeaturedPost->save();
      if ($result2 == true) {
        exit(json_encode(['success' => true, 'msg' => 'Update successful']));
      }else{
        exit(json_encode(['success' => false, 'msg' => display_errors($agent->errors)]));
      }
  }

	


?>
