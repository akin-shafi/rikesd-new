<?php require_once('../../private/initialize.php'); 
	
    
 
    if(isset($_POST['checkEmail'])){
        $args = $_POST;
        $email =  $args['email'];

        $newProject = NewProject::find_by_email($email);

        if (!empty($newProject)) {
            exit(json_encode(['success' => true, 'msg' => 'We noticed that you have an account with this email already. Please login instead.']));
        }else{
            exit(json_encode(['success' => false, 'msg' => 'Email no found']));
        }
        // pre_r($_POST);
    }



    if(isset($_POST['description'])){
        $args = $_POST;
        $args['created_at'] = date('Y-m-d h:i:s');
        $project = New NewProject($args);
		$result = $project->save();
        if ($result == true) {
            exit(json_encode(['success' => true, 'msg' => 'Submitted successfully']));
        }else{
            exit(json_encode(['success' => false, 'msg' => 'Failed']));
        }
    }

?>

<?php if(isset($_GET['fetch_profession'])){

    $spe = $_GET['specialization'] ?? '';
    $pro = $_GET['profession'] ?? '';

    // Fetch professions
    $professions = Professions::find_by_undeleted(['order' => 'ASC']);

    // Fetch specialization based on selected profession
    $specialization = [];
    if (!empty($pro)) {
    $specialization = Specializations::find_by_category(['category' => $pro]);
    }

    // Prepare the response array
    $response = [
    'professions' => $professions,
    'specialization' => $specialization
    ];

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
