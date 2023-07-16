<?php require_once('../private/initialize.php'); 
$tab = $_GET['tab'] ?? 1;

$redirectUrls = [
  1 => '/services/start-project',
  2 => '/services/discover',
  3 => '/services/market-place',
  4 => '/services/fund-research',
  5 => '/services/rdi-infrastructure',
];

$notfound = '404';

if (isset($redirectUrls[$tab])) {
  redirect_to(url_for_root($redirectUrls[$tab]));
} else {
  redirect_to(url_for_root($notfound));
}
?>
