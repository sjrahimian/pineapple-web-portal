<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class SearchController extends Controller{

  public function search(Request $req){
    $key = $req->get('q');

    if($key != ""){
      return $this->getSomeData($key);
    }
    else{
      return $this->getData();
    }

    //No critera
    $users = "Error";
    return view('index', ['results' => [],'$query' => $key]);

  }

  public function getData(){
    //custom defined sortable column, do: sortable(['column_name'])
    // else sort is based on how it returns from query
    // to set up a default sort regardless of query got to config/columnsortable.php and set 'default_first_column' to true
    $users = Record::all();
    return view('index', ['results' => $users, 'query' => '']);
  }

  public function getSomeData($key){
    $users = Record::where('name','LIKE',"%".$key."%")
        ->orwhere('inventor', 'LIKE',"%".$key."%")
        ->orwhere('notes', 'LIKE', "%".$key."%")->get();

    return view('index', ['results' => $users, 'query' => $key]);

  }

}
