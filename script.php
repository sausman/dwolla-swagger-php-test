<?
require('./vendor/autoload.php');

DwollaSwagger\Configuration::$access_token = getenv("DWOLLA_TOKEN");
$apiClient = new DwollaSwagger\ApiClient(
  getenv("DWOLLA_ENV") == "production"
  ? "https://api.dwolla.com/"
  : "https://api-sandbox.dwolla.com/"
);
$customersApi = new DwollaSwagger\CustomersApi($apiClient);

$location = $customersApi->create([
  'firstName' => 'Jennifer',
  'lastName' => 'Smith',
  'email' => uniqid() . '@gmail.com',
  'phone' => '7188675309'
]);
var_dump($location);
