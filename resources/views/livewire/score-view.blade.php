<div>
    <div class="container">
        <h1 class="text"></h1>
        <div class="scoreboard">
            <div class="team-container">
                <h2 class="text">{{ $scoreboard->teamA }}</h2>
                <div class="one">
                    <p class="pts" id="home-pts">{{ $scoreboard->scoreA }}</p>
                    <p class="pts-shadow">000</p>
                </div>
                <div class="two">
                    <button id="one-pt" wire:click="incrementA(1)">+1</button>
                    <button id="one-pt" wire:click="incrementA(2)"">+2</button>
                    <button id="one-pt" wire:click="incrementA(3)"">+3</button>
                </div>
            </div>
            <div class="team-container">
                <h2 class="text">{{ $scoreboard->teamB }}</h2>
                <div class="one">
                    <p class="pts" id="home-pts">{{ $scoreboard->scoreB }}</p>
                    <p class="pts-shadow">000</p>
                </div>
                <div class="two">
                    <button id="one-pt" wire:click="incrementB(1)">+1</button>
                    <button id="one-pt" wire:click="incrementB(2)">+2</button>
                    <button id="one-pt" wire:click="incrementB(3)">+3</button>
                </div>
            </div>
        </div>
    </div>
</div>
