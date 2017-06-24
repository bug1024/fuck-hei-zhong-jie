<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\AgentBase;

class BlackListController extends Controller {

    public function index() {
        $agents = AgentBase::where('status', 1)->orderBy('add_time', 'desc')->take(10)->get();
        $json = (string) $agents;
        echo $agents;
    }

}
