<?php require_once('../../private/initialize.php');

if (isset($_POST['academia'])) {
    $args = $_POST;
    $rand = date('ymd');
    $application = new AimAcademicApplicants($args);
    $result = $application->save();

    if ($result) {
        $new_id = $application->id;
        $application_no = "AIM-A-REF" . str_pad($new_id, 3, "0", STR_PAD_LEFT) . $rand;
        $lastrec = AimAcademicApplicants::find_by_id($new_id);
        $data = [
            'application_no' => $application_no,
        ];
        $lastrec->merge_attributes($data);
        $output = $lastrec->save();
        if ($output == true) {
            exit(json_encode(['success' => true, 'msg' => 'Your application has been successfully submitted. One of our team members will be in touch with you shortly.']));
        } else {
            exit(json_encode(['success' => false, 'msg' => $lastrec->errors]));
        }
    } else {
        exit(json_encode(['success' => false, 'msg' => $application->errors]));

    }

}


if (isset($_POST['industry'])) {
    $array = $_POST;
    $rand = date('ymd');
    $industry_application = new AimIndustryApplicants($array);
    $result = $industry_application->save();

    if ($result) {
        $new_id = $industry_application->id;
        $industry_application_no = "AIM-I-REF" . str_pad($new_id, 3, "0", STR_PAD_LEFT) . $rand;
        $lastrec = AimIndustryApplicants::find_by_id($new_id);
        $idata = [
            'application_no' => $industry_application_no,
        ];
        $lastrec->merge_attributes($idata);
        $output = $lastrec->save();
        if ($output == true) {
            exit(json_encode(['success' => true, 'msg' => 'Your application has been successfully submitted. One of our team members will be in touch with you shortly.']));
        } else {
            exit(json_encode(['success' => false, 'msg' => $lastrec->errors]));
        }
    } else {
        exit(json_encode(['success' => false, 'msg' => $industry_application->errors]));

    }

}

if (isset($_POST['institute'])) {
    $array = $_POST;
    $rand = date('ymd');
    $institute_application = new AimInstitution($array);
    $result = $institute_application->save();

    if ($result) {
        $new_id = $institute_application->id;
        $institute_application_no = "AIM-I-REF" . str_pad($new_id, 3, "0", STR_PAD_LEFT) . $rand;
        $lastrec = AimInstitution::find_by_id($new_id);
        $idata = [
            'application_no' => $institute_application_no,
        ];
        $lastrec->merge_attributes($idata);
        $output = $lastrec->save();
        if ($output == true) {
            exit(json_encode(['success' => true, 'msg' => 'Your application has been successfully submitted. One of our team members will be in touch with you shortly.']));
        } else {
            exit(json_encode(['success' => false, 'msg' => $lastrec->errors]));
        }
    } else {
        exit(json_encode(['success' => false, 'msg' => $institute_application->errors]));

    }

}
?>