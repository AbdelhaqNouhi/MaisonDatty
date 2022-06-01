<?php
require_once 'loader.php';

$app = new Router();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: *");

// Users
$app->POST('/Login', function ($data) {
  $user = new User();
  $user->login($data);
});

$app->POST('/Register', function ($data) {
  $user = new User();
  $user->add($data);
});

$app->PUT('/UpdateUser', function ($data) {
  $user = new User();
  $user->update($data);
});

$app->DELETE('/DeleteUser', function ($data) {
  $user = new User();
  $user->delete($data);
});

// Prudact

$app->GET('/ThreProduct', function () {
  $product = new Product();
  $product->getThre();
});

$app->GET('/GetProduct', function () {
  $product = new Product();
  $product->getAll();
});

$app->POST('/AddProduct', function ($data) {
  $product = new Product();
  $product->Add($data);
});

$app->PUT('/UpdateProduct', function ($data) {
  $product = new Product();
  $product->Update($data);
});

$app->POST('/DeleteProduct', function ($data) {
  $product = new Product();
  $product->Delete($data);
});

// Commande
$app->GET('/GetCommande', function () {
  $commande = new Commande();
  $commande->all();
});

$app->POST('/AddCommande', function ($data) {
  $commande = new Commande();
  $commande->add($data);
});

$app->PUT('/UpdateCommande', function ($data) {
  $commande = new Commande();
  $commande->update($data);
});

$app->DELETE('/DeleteCommande', function ($data) {
  $commande = new Commande();
  $commande->delete($data);
});

// Basket
$app->GET('/GetBasket', function () {
  $basket = new Basket();
  $basket->all();
});

$app->POST('/AddBasket', function ($data) {
  $basket = new Basket();
  $basket->add($data);
});

$app->PUT('/UpdateBasket', function ($data) {
  $basket = new Basket();
  $basket->update($data);
});

$app->DELETE('/DeleteBasket', function ($data) {
  $basket = new Basket();
  $basket->delete($data);
});

$app->POST('/LoginAdmin', function ($data) {
  $admin = new Admin();
  $admin->login($data);
});

$app->POST('/AddAdmin', function ($data) {
  $admin = new Admin();
  $admin->add($data);
});
