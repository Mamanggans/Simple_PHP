<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
    public function homePage () {
// for add data
        // $insert=new User;
        // $insert->name="iqbal";
        // $insert->email="iqbal@gmail.com";
        // $insert->password=hash::make('11231233');
        // $insert->age=15;
        // $insert->phone=1756788;
        // $insert->save();

        // $insert=new User;
        // $insert->name="bintang";
        // $insert->email="bintang@gmail.com";
        // $insert->password=hash::make('89033');
        // $insert->age=45;
        // $insert->phone=231212;
        // $insert->save();

// for read all the data 
    $read = User::all();
    foreach($read as $r){
        echo "<center>";
        echo "<h1> $r->name Profile</h1>";
        echo "<p>my name is  $r->name </P></br>";
        echo "<p>my email is $r->email </p></br>";
        echo "<p> my number phone is $r->phone</p></br>";
        echo "<p> my age is $r->age</p></br>";
        echo "<button> update </button>&nbsp<button> delete </button>&nbsp<button> create </button>&nbsp";
        echo "</center>";
    }

    echo "
        <style>
        table, thead, tbody, th, td {
            border:1px solid black;
            
        }
        table {
            width: 100%;
        }
        button {
            margin-left=50%;
        }
        </style>
        <h1> Profile</h1>
        <table>
        <thead>
        <tr>
          <th>Name</th>
          <th>phone</th>
          <th>age</th>
          <th>button</th>
        </tr>";
    $read = User::all();
    foreach($read as $r){
        echo"
        <tbody>
        <tr>
        <td>$r->name</td>
          <td>$r->phone</td>
          <td>$r->age</td>
          <td><center><button> update </button>&nbsp<button> delete </button>&nbsp<center></td>
        </tr>
        </tbody>";
    }
    echo"
    </table>
    <div>
    </br>
    <center><button> create </button></center>
    <div>";
// for read 1 data 
    // $model=User::where("id",3)->first();
    // echo $model->name;

    // update 1 data 

    // $update=User::where("id",1)->first(); // call php upadat cari user dengan id 1 yang pertama di ketemukan
    // $update->name="andrew"; //
    // $update->age=50;
    // $update->save();


    // delete 
    // $delete=User::where("name","naufal")->delete();

    die();
    return view("welcome");
    }

    

}


