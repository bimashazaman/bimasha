<main class="container mx-auto max-w-custom flex">

     <div class="w-175">
         <nav class="flex items-center justify-between text-xs">
             <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                 <li><a href="" class="border-b-4 pb-3 border-blue-600">Feed</a></li>
                 <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Following</a></li>
                 <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Friends</a></li>

             </ul>

             <ul class="flex uppercase font-semibold border-b-4 pb-3 pl-10 space-x-10">
                 <li><a href="#" class="border-b-4 pb-3 pl-10 border-blue-600"> Profile</a></li>
                 <li><a href="" class="text-gray-400 transition pl-10 duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Message</a></li>
             </ul>
         </nav>

         <div class="mt-8">
             {{ $slot }}
         </div>
     </div>

 </main>