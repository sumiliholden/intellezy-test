


<article  class="flex flex-col items-start gap-6">
          <div class="relative w-full">
            <img  src="{{$post->image}}" alt="{{$post->title}}" class="aspect-[16/9] w-full rounded-xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[385/385] mb-[25px]" />
          </div>
          <div class="max-w-xl flex flex-col gap-[28px]">
            <a class=" block font-bold text-[25px] tracking-normal leading-[1.3em] text-grey hover:text-green hover:cursor-pointer">
                {{$post->title}}
            </a>
            <div class="flex uppercase text-ash-grey text-[15px] tracking-wider">
                <time class=" ">{{$post->created_at->format('M d, Y')}}</time>
                <span class="mx-2">•</span>
                <span class="hover:opacity-50 hover:cursor-pointer">{{$post->author}}</span>
            </div>
            <div class="group relative">
              <p class="line-clamp-3 text-sm leading-6 text-slate-grey">{{$post->content}}</p>
            </div>
            <div>
            <x-button class="font-bold">
                 Read More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pt-[1px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3">

                    </svg>
            </x-button>
            </div>
          </div>
        </article>



