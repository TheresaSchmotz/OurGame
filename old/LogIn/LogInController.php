<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 * @author Sabrina Mitternöckler
 */
class LogInController extends Controller
{
    protected $viewFileName = "LogIn"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = "LogIn";
        //$this->view->username = $this->user->username;

        //$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);

        //TODO Anmeldung mit Highscore und Spiel verbinden
        //var_dump(WinnerModel::getWinners());

        //$this->view->winners = WinnerModel::getWinners();

    }

}