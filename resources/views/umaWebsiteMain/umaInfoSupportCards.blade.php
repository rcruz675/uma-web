<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- this changes the background color of the container -->
                <div class="p-6 lg:p-8 bg-gray-800 text-white border-b border-gray-700">
    

    <h1 class="mt-8 text-2xl font-medium" style="text-align:left">
        Support Card List
    </h1>

    <p class="mt-6 text-gray-300 leading-relaxed">
        This is the homepage filler paragraph
    </p>

    <br>

    <div>
        <input
            id="card-search-bar"
            class="card-search-bar bg-white text-gray-900 rounded px-3 py-1 w-full"
            placeholder="Search support cards"
            value=""
        >
    </div>

    <br>

    <div>
        <select id="card-support-bar"
        class="card-sort-bar bg-white text-gray-900 rounded px-3 py-1 mr-2"
        >
            <option disabled="">— Sort by —</option>
            <option value="rarity">Rarity</option>
            <option value="name">Character name</option>
            <option value="type">Card type</option>
            <option value="implemented">Release date</option>
            <option value="id">Game ID number</option>
            <option disabled=""></option>

            <option disabled="">— Effects —</option>
            <option value="1">Friendship Bonus</option>
            <option value="2">Mood Effect</option>
            <option value="3">Speed Bonus</option>
            <option value="4">Stamina Bonus</option>
            <option value="5">Power Bonus</option>
            <option value="6">Guts Bonus</option>
            <option value="7">Wit Bonus</option>
            <option value="8">Training Effectiveness</option>
            <option value="9">Initial Speed</option>
            <option value="10">Initial Stamina</option>
            <option value="11">Initial Power</option>
            <option value="12">Initial Guts</option>
            <option value="13">Initial Wit</option>
            <option value="14">Initial Friendship Gauge</option>
            <option value="15">Race Bonus</option>
            <option value="16">Fan Bonus</option>
            <option value="17">Hint Levels</option>
            <option value="18">Hint Frequency</option>
            <option value="19">Specialty Priority</option>
            <option value="25">Event Recovery</option>
            <option value="26">Event Effectiveness</option>
            <option value="27">Failure Protection</option>
            <option value="28">Energy Cost Reduction</option>
            <option value="30">Skill Point Bonus</option>
            <option value="31">Wit Friendship Recovery</option>
            <option value="32">Initial Skill Points Up</option>
            <option value="33">Hint Quantity Bonus</option>
            <option value="41">All Stats Bonus</option>
            <option disabled=""></option>
        </select>
        <select
            id="ascend-descend"
            class="ascend-descend bg-white text-gray-900 rounded px-3 py-1"
            style="min-width: 10rem;"
        >
            <option value="asc">Ascending ↑</option>
            <option value="desc">Descending ↓</option>
        </select>
    </div>
    




    
</div>


            </div>
        </div>
    </div>
</x-app-layout>
