<?php
 namespace App\Controllers;
 class Home extends BaseController
 {
 public function index()
 {
     // connect to the model
 $chefs = new \App\Models\Chefs();
 // retrieve all the records
 $records = $chefs->findAll();
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
 return $parser->setData(['records' => $records])
 // and have it render the template with those
 ->render('chefslist');

 }
 public function showme($id)
 {
      // connect to the model
 $chefs = new \App\Models\Chefs();
 // retrieve all the records
 $record = $chefs->find($id);
     // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
 return $parser->setData($record)
 // and have it render the template with those
 ->render('onechef');
 }
 }