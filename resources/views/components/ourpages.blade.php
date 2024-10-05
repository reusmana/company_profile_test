<section class="bg-white  px-10 py-24 w-full h-full justify-center flex flex-col">
    <h1 class=" lg:text-8xl text-5xl font-bold text-slate-700">Our Pages</h1>
    <div class="relative flex items-center  mx-auto md:px-5">
        <div class="flex w-full justify-between absolute z-[999]  px-5 lg:px-0">
            <button id="prevpages" class="w-10 h-10 rotate-180  text-white font-extrabold bg-blue-700 rounded-full p-2 lg:-ml-5">
                <x-heroicon-o-arrow-small-right />
            </button>
            <button id="nextpages" class="w-10 h-10 rotate-0  text-white font-extrabold bg-blue-700 rounded-full p-2 lg:mr-5">
                <x-heroicon-o-arrow-small-right />
            </button>
        </div>
        <div class="w-full mx-auto relative flex overflow-hidden px-5 carosels py-20 items-center">
            @foreach ($pages as $index => $page)
            <div class="w-full grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 min-w-full gap-5 carosel px-2 ">
                @foreach ($page as $item)
                    <div card class=" w-full rounded-md  border border-slate-300 overflow-hidden">
                        <div class="flex flex-col justify-between min-h-52 p-4">
                            <h1 class=" text-center text-2xl font-semibold">{{$item->title}}</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique rem facilis, autem voluptatem reiciendis assumenda inventore eveniet itaque qui voluptatibus.</p>
                            <a href="{{ route('show', $item->id) }}" class=" text-xl font-semibold text-blue-700 underline text-left">
                                Visit Page
                            </a>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            @endforeach
            
        </div>

    </div>

    <script>
        const nextpages = document.querySelector('#nextpages');
        const prevpages = document.querySelector('#prevpages');
        const carosel = document.querySelector('.carosels');
        const widthCarosel = document.querySelector('.carosel').offsetWidth;
        nextpages.addEventListener('click', () => {
            console.log(widthCarosel)
            console.log(document.querySelector('.carosel'))
            carosel.scrollLeft += widthCarosel
        })
        prevpages.addEventListener('click', () => {
            carosel.scrollLeft -= widthCarosel
        })
    </script>
</section>