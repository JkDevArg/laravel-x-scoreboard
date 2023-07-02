<?php

namespace App\Http\Livewire;

use App\Models\Scoreboard;
use Livewire\Component;

class ScoreView extends Component
{
    public Scoreboard $scoreboard;

    public function mount($scoreboard){
        $this->scoreboard = $scoreboard;
    }

    public function render()
    {
        return view('livewire.score-view');
    }

    public function incrementA($qty){
        $this->scoreboard->scoreA = $this->scoreboard->scoreA + $qty;
        $this->scoreboard->save();
    }
    public function incrementB($qty){
        $this->scoreboard->scoreB = $this->scoreboard->scoreB + $qty;
        $this->scoreboard->save();
    }
}
