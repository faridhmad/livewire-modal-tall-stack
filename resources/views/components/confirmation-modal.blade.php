
<div {{ $attributes }}
x-data="{show: @entangle($attributes->wire('model')) }"
 x-show="show">  

    {{-- <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show = false" > --}}
        <div class="fixed inset-0 bg-gray-900 opacity-90" wire:click="$set('showModal', false)" >
    </div>
    <div class="bg-white shadow-md p-4 max-w-sm h-40 m-auto rounded-md fixed inset-0" x-show="show" x-transition:enter.duration.500ms>
        <div class="flex flex-col h-full justify-between">
            <header>

                <h3 class="font-bold text-lg">
                    {{ $title }}
                </h3>

            </header>


            <main class="mb-4">
               {{ $body }}
            </main>  


            <footer>
                {{ $footer }}
                {{-- <button class="bg-blue-400 text-xs uppercase py-2 px-4 rounded-md text-white hover:bg blue-500 transition-all duration-200">Continue</button> --}}
            </footer>

        </div>
    </div>
</div>