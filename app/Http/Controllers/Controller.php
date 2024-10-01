<?php

namespace App\Http\Controllers;

use App\Models\Contact_content;
use App\Models\Formules;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    public function __construct()
    {
        $formules = Formules::all();
        View::share('formulesView', $formules);

        $contacts = Contact_content::all();
        View::share('contactsView', $contacts);
    }
    
}
