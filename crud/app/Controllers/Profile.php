<?php
namespace App\Controllers;

use App\Models\ProfileModel;
use CodeIgniter\Controller;

class Profile extends Controller
{
    public function index()
    {
        $ProfileModel = new ProfileModel();
        $data['profiles'] = $ProfileModel->orderBy('id','DESC')->findAll();
        return view('profile_view', $data);
    }

    public function create()
    {
        return view('add_profile');
    }
}

?>
