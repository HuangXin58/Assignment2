<?php
 namespace App\Controllers;
 class Home extends BaseController
 {
 public function index()
 {
 $chefs = new \App\Models\Chefs();
         // retrieve all the records
         $records = $chefs->findAll();
         
         //get a template parser
         $parser = \Config\Services::parser();
         //tell it about the substitions
//         return $parser->setData(['records' => $records])
//                 // and have it render the template with those
//                 ->render('chefslist');
         
         $table = new \CodeIgniter\View\Table();

         $headings = $chefs->fields;
         $displayHeadings = [$headings[1],$headings[3]];
         $table->setHeading(array_map('ucfirst', $displayHeadings));
         
         foreach ($records as $record) {
             $nameLink = anchor("chefs/showme/$record->id",$record->name);
             $table->addRow($nameLink,"<img src=\"/image/".$record->image."\"/>");
         }
         
         $template = [
             'table_open' => '<table cellpadding="10px">',
             'cell_start' => '<td style="border: 5px solid black;">',
             'row_alt_start' => '<tr style="background-color:yellow">',
             ];
         $table->setTemplate($template);
         
         $fields = [
             'title' => 'Chefs',
             'heading' => 'Chefs',
             'footer' => 'huang xin'
             ];
          return $parser->setData($fields)
                         ->render('templates\top') .
                  $table->generate() .
                  $parser->setData($fields)
                         ->render('templates\bottom');

         return $table->generate(); 

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