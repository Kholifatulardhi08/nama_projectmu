<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class halamanutamaController extends Controller
{
    public function index(){
    	return "Halo ini adalah method index, dalam controller halamanutama.";
    }

    public function about(){
        return "<h1> A. Kholifatul Ardli <h1> \n NIM 2041723003 <h1> \n Kelas TI2A.";
    }

    public function article(){
        return view('welcome');
    }
}
?>