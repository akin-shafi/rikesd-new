<?php

  // is_blank('abcd')
  // * validate data presence
  // * uses trim() so empty spaces don't count
  // * uses === to avoid false positives
  // * better than empty() which considers "0" to be empty
  function is_blank($value) {
    return !isset($value) || trim($value) === '';
  }

  // has_presence('abcd')
  // * validate data presence
  // * reverse of is_blank()
  // * I prefer validation names with "has_"
  function has_presence($value) {
    return !is_blank($value);
  }

  // has_length_greater_than('abcd', 3)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length_greater_than($value, $min) {
    $length = strlen($value);
    return $length > $min;
  }

  // has_length_less_than('abcd', 5)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length_less_than($value, $max) {
    $length = strlen($value);
    return $length < $max;
  }

  // has_length_exactly('abcd', 4)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length_exactly($value, $exact) {
    $length = strlen($value);
    return $length == $exact;
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  // * validate string length
  // * combines functions_greater_than, _less_than, _exactly
  // * spaces count towards length
  // * use trim() if spaces should not count
  function has_length($value, $options) {
    if(isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
      return false;
    } elseif(isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
      return false;
    } elseif(isset($options['exact']) && !has_length_exactly($value, $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_inclusion_of( 5, [1,3,5,7,9] )
  // * validate inclusion in a set
  function has_inclusion_of($value, $set) {
  	return in_array($value, $set);
  }

  // has_exclusion_of( 5, [1,3,5,7,9] )
  // * validate exclusion from a set
  function has_exclusion_of($value, $set) {
    return !in_array($value, $set);
  }

  // has_string('nobody@nowhere.com', '.com')
  // * validate inclusion of character(s)
  // * strpos returns string start position or false
  // * uses !== to prevent position 0 from being considered false
  // * strpos is faster than preg_match()
  function has_string($value, $required_string) {
    return strpos($value, $required_string) !== false;
  }

  // has_valid_email_format('nobody@nowhere.com')
  // * validate correct format for email addresses
  // * format: [chars]@[chars].[2+ letters]
  // * preg_match is helpful, uses a regular expression
  //    returns 1 for a match, 0 for no match
  //    http://php.net/manual/en/function.preg-match.php
  function has_valid_email_format($value) {
    $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($email_regex, $value) === 1;
  }



  function has_unique_email_admin($client_email, $current_id="0") {

  $email = Admin::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }

  function has_unique_commission_no($commission_no, $current_id="0") {

  $query = Certificate::find_by_commission_no($commission_no);

    if($query === false || $query->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }

  
  function has_unique_applicant_email($client_email, $current_id="0") {

  $email = NewProject::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }
  function has_unique_trail_email($client_email, $current_id="0") {

    $email = FreeTrailSubscription::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }
  
  function has_unique_email_notary($client_email, $current_id="0") {

  $email = Notary::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }

  function has_unique_email_cert($client_email, $current_id="0") {

  $email = Certificate::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }
  function has_unique_email_newsletter($client_email, $current_id="0") {

  $email = Newsletter::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }
  function has_unique_email_business_user($client_email, $current_id="0") {

  $email = BusinessUser::find_by_email($client_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }
  function has_unique_recipient_email($rep_email, $current_id="0") {

  $email = Recipients::find_by_email($rep_email);

    if($email === false || $email->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

  }


function has_unique_item_name($item_name, $current_id="0") {

  $item_name = WarehouseItem::find_by_item_name($item_name);

    if($item_name === false || $item_name->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

}
function has_unique_user_id($user_id, $current_id="0", $table) {

  $user_id = $table::find_by_user_id($user_id);

    if($user_id === false || $user_id->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

}

function has_unique_product_code($code, $current_id="0") {

  $product_code = Product::find_by_code($code);

    if($product_code === false || $product_code->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

}
function has_unique_category($category, $current_id="0") {

  $category = Store::find_by_category($category);

    if($category === false || $category->id == $current_id) {
      // is unique
        return true;
      } else {
        // not unique
        return false;
      }

}
  

  // has_unique_username('johnqpublic')
  // * Validates uniqueness of admins.username
  // * For new records, provide only the username.
  // * For existing records, provide current ID as second argument
  //   has_unique_username('johnqpublic', 4)
  function has_unique_username($username, $current_id="0") {
    $admin = Admin::find_by_username($username);
    if($admin === false || $admin->id == $current_id) {
      // is unique
      return true;
    } else {
      // not unique
      return false;
    }
  }


  function has_unique_name($name, $current_id="0") {

    $roomName = Rooms::find_by_name($name);

      if($roomName === false || $roomName->id == $current_id) {
        // is unique
          return true;
        } else {
          // not unique
          return false;
        }

  }

  function has_unique_phone($phone, $current_id="0") {
    $client = Customer::find_by_phone($phone);
    if($client === false || $client->id == $current_id) {
      // is unique
      return true;
    } else {
      // not unique
      return false;
    }
  }


  function has_unique_branchname($branchname, $state, $current_id="0") {
    $trans = Branch::find_branch_by_name($branchname, $state);
    if($trans === false || $trans->id == $current_id) {
      // is unique
      return true;
    } else {
      // not unique
      return false;
    }
  }

  
  // function hostname(){
  //   $pc = gethostname();
  //   if ($page_title != 'Installation') {
  //       pre_r($install->hostname);
  //     // if ($install->hostname != $pc) {
  //     //   redirect_to(url_for('installation.php'));
  //     // }
  //   }
  // }
  // hostname();

?>
