<?php
/*
  Created by: Wouter Polman
  Klas:   MD2A
  Date:   22-11-2013
  Project:  Project2 - KlaagIets
  File:   Inserting tweets into database
*/
require './api/facebook.php';
require './includes/config.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '666092600088101',
  'secret' => '53a9cd60cc4a36a10e2f19d5f0c2333d',
));

// Get User ID
$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');

  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

//  Get User ID
$user = $facebook->getUser();
if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
    $query = mysqli_query($con," INSERT INTO logins(`facebook_id`,
                                              `name`,
                                              `first_name`,
                                              `last_name`,
                                              `link`,
                                              `username`,
                                              `gender`,
                                              `language`,
                                              `login_date_time`
                                              `ip`) VALUES 
                                              ('" . $user_profile["id"] . "',
                                              '" . $user_profile["name"] . "',
                                              '" . $user_profile["first_name"] . "',
                                              '" . $user_profile["last_name"] . "',
                                              '" . $user_profile["link"] . "',
                                              '" . $user_profile["username"] . "',
                                              '" . $user_profile["gender"] . "',
                                              '" . $user_profile["locale"] . "',
                                              '" . $_SERVER['REMOTE_ADDR'] . "',
                                              NOW()
                                              )
                        ");
  if(!$query){
    echo mysql_error();
  }
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

?>
<!doctype html>
<?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
      <div>
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
    <?php endif ?>
    <?php if ($user): ?>
      <h3>You</h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

      <h3>User</h3>
      <pre><?php print_r($user_profile); ?></pre>
    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>