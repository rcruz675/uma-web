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
                    <!-- repo test -->

    <h1 class="mt-8 text-2xl font-medium" style="text-align:left">
        Playable Character List
    </h1>

    <p class="mt-6 text-gray-300 leading-relaxed">
        This is the homepage filler paragraph
    </p>

    <br>

    <div>
        <input
            id="character-search-bar"
            class="character-search-bar bg-white text-gray-900 rounded px-3 py-1 w-full"
            placeholder="Search characters"
            value=""
        >
    </div>

    <br>

    <div>
        <select id="character-sort-bar" 
        class="character-sort-bar bg-white text-gray-900 rounded px-3 py-1 mr-2"
        >
            <option disabled="">— Sort by —</option>
            <option value="name">Name</option>
            <option value="rarity">Rarity</option>
            <option value="implemented">Release date</option>
            <option value="id">Game ID number</option>
            <option disabled=""></option>

            <option disabled="">— Aptitude —</option>
            <option value="turf">Turf aptitude</option>
            <option value="dirt">Dirt aptitude</option>
            <option value="sprint">Sprint aptitude</option>
            <option value="mile">Mile aptitude</option>
            <option value="middle">Medium aptitude</option>
            <option value="long">Long aptitude</option>
            <option value="runner">Front aptitude</option>
            <option value="leader">Pace aptitude</option>
            <option value="betweener">Late aptitude</option>
            <option value="chaser">End aptitude</option>
            <option disabled=""></option>

            <option disabled="">— Stat bonuses —</option>
            <option value="bonus_speed">Speed bonus</option>
            <option value="bonus_stamina">Stamina bonus</option>
            <option value="bonus_power">Power bonus</option>
            <option value="bonus_guts">Guts bonus</option>
            <option value="bonus_int">Wit bonus</option>
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

    <br>
    
    <div>
        <button
            id="add-character-button"
            class="ascend-descend bg-white text-gray-900 rounded px-3 py-1"
        >
            Add Character
        </button>
    </div>
    




    
</div>


            </div>
        </div>
    </div>
</x-app-layout>
