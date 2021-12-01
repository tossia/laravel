<div x-data="{ show: false}" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>


    {{-- Links --}}
    <div x-show="show" 
         class="py-2 absolute w-full z-50 bg-gray-100 my-2 rounded-xl" 
         style="display: none">

        {{ $slot }}

    </div>
</div>