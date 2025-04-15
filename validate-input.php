<?php
$response = array(
  'valid' => false,
  'message' => 'Post argument "user" is missing.'
);

if( isset($_POST['user']) ) {
  $userRepo = new UserRepository( DataStorage::instance() );
  $user = $userRepo->loadUser( $_POST['user'] );

  if( $user ) {
    // User name is registered on another account
    $response = array('valid' => false, 'message' => 'This user name is already registered.');
  } else {
    // User name is available
    $response = array('valid' => true);
  }
}
echo json_encode($response);
?>