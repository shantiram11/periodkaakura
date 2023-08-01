<div class='flex flex-col justify-center items-center gap-12  max-sm:px-0 py-12'>
    <div class="flex flex-row justify-center items-center  gap-24 bg-black text-white p-8 rounded-lg max-sm:flex-col max-md:flex-col" ">
  <img src="" alt=" album" />
    <div class="flex flex-col justify-start gap-4 w-full">
        <h1 class="text-6xl">Episode 1</h1>
        <p>Episode Name Here</p>
        <p>Guest: Episode Name Here</p>
        <div class="flex flex-row justify-center text-white items-center gap-8 py-8">
            <i class="fa-solid fa-backward-step"></i>
            <i class="fa-solid fa-circle-pause"></i>
            <i class="fa-solid fa-forward-step"></i>
        </div>
        <div class="flex flex-col w-full">
            <!-- Add your audio player here -->
            <audio class="w-full" controls>
                <source src="horse.ogg" type="audio/ogg" />
                <source src="horse.mp3" type="audio/mpeg" />
                Your browser does not support the audio element.
            </audio>
        </div>
        <div class="flex flex-row justify-center text-white items-center gap-8 py-8">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-volume-low"></i>
            <i class="fa-solid fa-share-nodes"></i>
        </div>
    </div>
</div>

<div class='flex flex-row justify-center items-center gap-4 max-sm:flex-col max-md:flex-col'>
    <div className="flex flex-col w-full">
        <form>
            <label for="chat" class="sr-only">Your message</label>
            <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
                <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Upload image</span>
                </button>
                <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Add emoji</span>
                </button>
                <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                    <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                    </svg>
                    <span class="sr-only">Send message</span>
                </button>
            </div>
        </form>
        <div className='flex flex-row'>
            <img src="" alt="profile" />
            <div class="flex-col">
                <div class="flex justify-between">
                    <h2 class="font-black">Shantiram Tiwari</h2>
                    <span>8hour ago</span>
                </div>
                <p>A space for menstruators to speak on the silenced subject period"</p>
            </div>
        </div>

    </div>
    <div class="w-full flex flex-col justify-center bg-gray-50">
        <div class="flex flex-col justify-start items-start">
            <h2 class="font-black">Suggested Podcasts</h2>
            <p class="font-thin">Browse all</p>
        </div>

        <div class="flex flex-row justify-between hover:bg-black hover:text-white py-4 hover:rounded-md gap-10 ">
            <div class="flex flex-row justify-center items-center gap-4">
                <img src="{head}" alt="" />
                <div class="flex flex-col justify-start items-start">
                    <h3 class="hover:text-red-600 font-black">Episode 1</h3>
                    <p class="hover:text-red-600 font-thin">Episode name here</p>
                </div>
            </div>

            <div class="flex flex-row justify-center items-center">
                <span class="hover:text-red-600">22:37</span>
                <span>Minutes</span>
            </div>
        </div>

        <div class="flex flex-row justify-between rounded-md hover:bg-black hover:text-white py-4 hover:rounded-md gap-10 ">
            <div class="flex flex-row justify-center items-center gap-4">
                <img src="{head}" alt="" />
                <div class="flex flex-col justify-start items-start">
                    <h3 class="hover:text-red-600 font-black">Episode 1</h3>
                    <p class="hover:text-red-600 font-thin">Episode name here</p>
                </div>
            </div>

            <div class="flex flex-row justify-center items-center">
                <span class="hover:text-red-600">22:37</span>
                <span>Minutes</span>
            </div>
        </div>

        <div class="flex flex-row justify-center items-center gap-12 bottom-0 left-0">
            <span><i class="fa-solid fa-backward-step"></i>Previous</span>
            <span>Next&nbsp;<i class="fa-solid fa-forward-step"></i></span>
        </div>
    </div>


</div>
</div>