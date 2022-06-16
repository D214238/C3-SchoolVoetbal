<?php

namespace App\View\Components\main;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Navigation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    //variables
    public $logo;
    public $linkDasboard;
    public $linkTournaments;
    public $linkGames;
    public $linkTeams;
    public $linkUsers;

    protected function setVariables()
    {
        if(Auth::user()->is('admin')){
            $this->logo = asset('img/4S-Logo-Admin.svg');
            $this->linkDasboard = route('admin.dashboard.index');
            $this->linkTournaments = route('admin.tournaments.index');
            $this->linkGames = route('admin.games.index');
            $this->linkTeams = route('admin.teams.index');
            $this->linkUsers = route('admin.users.index');
        } else{
            $this->logo = asset('img/4S-Logo.svg');
            $this->linkDasboard = route('dashboard.index');
            $this->linkTournaments = route('tournaments.index');
            $this->linkGames = route('games.index');
            $this->linkTeams = route('teams.index');
        }
    }


    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->setVariables();
        return view('components.main.navigation', [
            'logo' => $this->logo,
            'linkDashboard' => $this->linkDasboard,
            'linkTournaments' => $this->linkTournaments,
            'linkGames' => $this->linkGames,
            'linkTeams' => $this->linkTeams,
            'linkUsers' => $this->linkUsers
        ]);
    }
}
