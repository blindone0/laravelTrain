<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ihor;

use App\Models\Categorie;

class IhorController extends Controller
{

    public $users;

    public $categories;

    public function getUsers()
    {
        $this->users = Ihor::all();
        $this->categories = Categorie::all();

        return view('users', [
            'users' => $this->users,
            'categories' => $this->categories
        ]);
    }

    public function addUser()
    {
        $user = new Ihor;

        $user->email = 'hello@icstudio.online';

        $user->save();

        return 'Done!';

    }

    public function updateUser($id)
    {
        $user = Ihor::whereId($id);

        $user->email = 'new@email.com';

        $user->save();
    }
}
