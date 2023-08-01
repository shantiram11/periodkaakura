<section class="px-32 p-12">
  <div class='w-full'>
    <div class="flex flex-row justify-between p-2">
      <div class='flex flex-col'>
        <h3 class="font-black">Suggested Podcasts</h3>
        <p class="font-thin">Browse all</p>
      </div>
      <input type="text" placeholder="Enter something..." class='w-full rounded-md border-black' />
      <div>
        <ul>
          <li>filter</li>
        </ul>
      </div>
    </div>

    <div class="w-full flex flex-col justify-center bg-black text-white p-2 rounded-md">

      <div class="flex flex-row justify-between gap-10 text-white p-2 hover:text-gray-500">
        <div class="flex flex-row justify-center items-center gap-4">
          <img src={head} alt="headphone" />
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
      <div class="flex flex-row justify-between gap-10 text-white p-2 hover:text-gray-500">
        <div class="flex flex-row justify-center items-center gap-4">
          <img src={head} alt="headphone" />
          <div class="flex flex-col justify-start items-start">
            <h3 class="hover:text-red-600 font-black ">Episode 1</h3>
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

</section>