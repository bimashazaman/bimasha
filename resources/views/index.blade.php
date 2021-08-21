<x-app-layout>
   <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
               <option value="Category one">Category one</option>
               <option value="Category two">Category two</option>
               <option value="Category three">Category three</option>
               <option value="Category four">Category four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
               <option value="Category one">filter one</option>
               <option value="Category two">filter two</option>
               <option value="Category three">filter three</option>
               <option value="Category four">filter four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="rounded-xl border-none px-4 py-2 pl-8 bg-white w-full">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </div>
        </div>
   </div>
   <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-md cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-300 border border-gray-300 hover:border-gray-700 text-xs transition duration-150 ease-in uppercase rounded-xl px-4 py-3">Support</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://scontent.fdac99-1.fna.fbcdn.net/v/t1.6435-9/99156903_580774239507455_2492516263721435136_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=a4a2d7&_nc_eui2=AeGIPjWzfWHlcgOiniDhSMijjGahkOe1P5yMZqGQ57U_nIk9P6h0IH2LEMTgAwNAkzYAP2YuEU9xY-y8lLit0Vvn&_nc_ohc=OQEkaaLkzaAAX8XjB9F&_nc_ht=scontent.fdac99-1.fna&oh=4d96d7f27a58efd73282b519a906ab4d&oe=61449FA9" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Informations about laravel </a>
                    </h4>
                    <div class="text-gray-800 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, labore voluptas! Aspernatur consectetur a deserunt, debitis odio sequi cumque numquam eligendi laudantium dicta sunt natus dolores ipsam quidem magnam beatae officia accusantium voluptatem sint perspiciatis consequuntur. Molestias voluptas debitis omnis non explicabo nihil aliquid culpa ab, beatae harum? Beatae aliquam sed impedit quo corrupti nesciunt maiores deserunt iste quis. Incidunt hic vitae a inventore natus ipsa quis! Assumenda iste officia quae molestias id sed alias corporis harum minima, ullam odit quo debitis consequatur eaque cumque commodi modi laboriosam? Nisi deleniti perspiciatis excepturi repellat unde error autem sed recusandae sit nobis?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div><h1> | </h1></div>
                            <div>Category 1</div>
                            <div><h1> | </h1></div>
                            <div class="text-gray-500">3 comments</div>
                            <div><h1> | </h1></div>
                        </div>                   
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-300 text-sm font-semibold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">open</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                  </svg>
                            </button>
                        </div>
                    </div>
                <div class="flex relative pt-5 w-1/3">
                        <input type="text" placeholder="Add a comment" class="rounded-xl shadow-xl border-gray-300 px-4 py-2 pl-8 bg-white w-full">
                            <div class="absolute top-3 flex items-center h-full ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</x-app-layout>
