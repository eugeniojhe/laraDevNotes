<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note; 

class NoteController extends Controller
{
    private $response  = ['error' =>'',
                        'result' =>[]];
    public function index()
    {
        $notes  = Note::all(); 
        foreach($notes  as $note){
            $this->response['result'][] = [
                'id' => $note->id,
                'title' => $note->title
            ];
        }
        return $this->response;  
    }

    public function list($id)
    {
         
    }

    public function new()
    {
        echo "Inside new"; 
    }

    public function update()
    {
        echo "Inside update"; 
    }

    public function delete()
    {
        echo "Inside delete"; 
    }
}
