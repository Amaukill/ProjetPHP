<?php
include "Controller.php";

class UserController extends Controller
{

    function listUser()
    {
        $u = User::all();
        $this->View("UserView", $u);

    }

    function FindUser($id)
    {
        $a = User::FindId($id);
        $this->View("ShowUser", $a);
    }

    function ModifyUser($id)
    {
        User::Save($id);
        $this->FindUser($id);
    }

    function DeleteUser($id)
    {
        User::Delete($id);
        $this->listUser();
    }
}

?>