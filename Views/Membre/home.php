<?php

$title = "home";

ob_start();
?>

<body class="font-body antialiased">
<div
  class="w-96 px-4 py-5 bg-white flex flex-col gap-3 rounded-md shadow-[0px_0px_15px_rgba(0,0,0,0.09)]"
>
  <legend class="text-xl font-semibold mb-3 select-none">Choose Category</legend>
  <label
    for="html"
    name="status"
    class="font-medium h-14 relative hover:bg-zinc-100 flex items-center px-3 gap-3 rounded-lg has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none"
  >
    <div class="w-5 fill-blue-500">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        fill="currentColor"
        version="1.1"
        viewBox="0 0 512 512"
        xml:space="preserve"
      >
        <g id="c133de6af664cd4f011a55de6b0011b2">
          <path
            display="inline"
            d="M30.713,0.501L71.717,460.42l184.006,51.078l184.515-51.15L481.287,0.501H30.713z M395.754,109.646   l-2.567,28.596l-1.128,12.681h-0.187H256h-0.197h-79.599l5.155,57.761h74.444H256h115.723h15.201l-1.377,15.146l-13.255,148.506   l-0.849,9.523L256,413.854v0.012l-0.259,0.072l-115.547-32.078l-7.903-88.566h26.098h30.526l4.016,44.986l62.82,16.965l0.052-0.014   v-0.006l62.916-16.977l6.542-73.158H256h-0.197H129.771l-13.863-155.444l-1.351-15.131h141.247H256h141.104L395.754,109.646z"
          ></path>
        </g>
      </svg>
    </div>
    HTML
    <input
      checked=""
      type="radio"
      name="status"
      class="peer/html w-4 h-4 absolute accent-current right-3"
      id="html"
    />
  </label>
  <label
    for="css"
    class="font-medium h-14 relative hover:bg-zinc-100 flex items-center px-3 gap-3 rounded-lg has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none"
  >
    <div class="w-5">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="currentColor"
        viewBox="0 0 24 24"
        role="img"
      >
        <path
          d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"
        ></path>
      </svg>
    </div>
    CSS
    <input
      type="radio"
      name="status"
      class="w-4 h-4 absolute accent-current right-3"
      id="css"
    />
  </label>
  <label
    for="javascript"
    name="html"
    class="font-medium h-14 relative hover:bg-zinc-100 flex items-center px-3 gap-3 rounded-lg has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none"
  >
    <div class="w-5">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        fill="currentColor"
        version="1.1"
        viewBox="0 0 512 512"
        xml:space="preserve"
      >
        <g id="5151e0c8492e5103c096af88a51e75c7">
          <path
            display="inline"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M1.008,0.5C0.438,0.583,0.48,1.27,0.521,1.958   c0,169.668,0,339.31,0,508.974c169.364,1.135,340.808,0.162,510.979,0.486c0-170.309,0-340.61,0-510.918   C341.342,0.5,171.167,0.5,1.008,0.5z M259.893,452.167c-11.822,11.919-30.478,18.938-53.429,18.938   c-37.643,0-58.543-18.34-71.884-43.711c12.842-8.2,25.966-16.122,39.344-23.795c5.456,15.262,23.886,32.42,44.683,21.857   c13.183-6.699,11.661-27.01,11.661-49.054c0-45.773,0-98.578,0-139.872c-0.042-0.688-0.083-1.375,0.482-1.458   c15.707,0,31.413,0,47.116,0c0,36.788,0,78.402,0,117.529C277.866,395.199,280.91,430.988,259.893,452.167z M470.696,409.917   c-2.674,39.884-35.243,61.063-79.17,61.188c-43.062,0.124-70.624-19.013-87.433-48.567c12.085-8.317,25.778-15.017,38.375-22.822   c10.08,15.761,27.537,30.91,53.429,28.652c16.131-1.406,34.856-14.555,24.285-34.482c-5.127-9.66-17.516-14.567-28.656-19.425   c-35.352-15.424-76.828-29.571-72.861-84.992c1.327-18.514,9.852-31.525,20.889-40.796c11.311-9.5,26.46-15.867,46.629-16.511   c36.629-1.173,56.723,15.12,70.429,37.884c-11.664,8.891-24.514,16.608-37.401,24.281c-4.229-12.995-24.644-25.658-41.772-17.969   c-7.789,3.493-14.788,13.761-10.684,26.224c3.66,11.115,18.589,17.199,30.599,22.344   C433.706,340.486,474.331,355.693,470.696,409.917z"
          ></path>
        </g>
      </svg>
    </div>
    JavaScript
    <input
      type="radio"
      name="status"
      class="w-4 h-4 absolute accent-blue-500 right-3"
      id="javascript"
    />
  </label>
</div>

  <section>
    <div class="container mx-auto px-6 py-10">
      <div class="text-center">
        <h2 class="text-3xl font-semibold capitalize text-gray-800 lg:text-4xl dark:text-white">From the blog</h2>
        <p class="mx-auto mt-4 max-w-lg text-gray-500">
          Salami mustard spice tea fridge authentic Chinese food dish salt tasty liquor. Sweet savory foodtruck pie.
        </p>
      </div>
      <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
        <div>
          <div class="relative">
            <img
              class="h-64 w-full rounded object-cover object-center lg:h-80"
              src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=1470&amp;amp;q=80"
              alt=""
              loading="lazy"
              height=""
              width="" />
            <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
              <img
                class="h-10 w-10 rounded-full object-cover object-center"
                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=1470&amp;amp;q=80"
                alt=""
                loading="lazy"
                height=""
                width="" />
              <div class="mx-4">
                <h2 class="text-sm text-gray-700 dark:text-gray-200">Tom Hank</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
              </div>
            </div>
          </div>
          <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">What do you want to know about UI</h2>
          <hr class="text-primary-500 my-6 w-32" />
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium,
            alias nam? Tempore
          </p>
          <a class="text-primary-500 hover:text-primary-400 mt-4 inline-block underline" href="#" target="_self">
            Read more
          </a>
        </div>
        <div>
          <div class="relative">
            <img
              class="h-64 w-full rounded object-cover object-center lg:h-80"
              src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=1470&amp;amp;q=80"
              alt=""
              loading="lazy"
              height=""
              width="" />
            <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
              <img
                class="h-10 w-10 rounded-full object-cover object-center"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=880&amp;amp;q=80"
                alt=""
                loading="lazy"
                height=""
                width="" />
              <div class="mx-4">
                <h2 class="text-sm text-gray-700 dark:text-gray-200">arthur melo</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
              </div>
            </div>
          </div>
          <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">All the features you want to know</h2>
          <hr class="text-primary-500 my-6 w-32" />
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium,
            alias nam? Tempore
          </p>
          <a class="text-primary-500 hover:text-primary-400 mt-4 inline-block underline" href="#" target="_self">
            Read more
          </a>
        </div>
        <div>
          <div class="relative">
            <img
              class="h-64 w-full rounded object-cover object-center lg:h-80"
              src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=1374&amp;amp;q=80"
              alt=""
              loading="lazy"
              height=""
              width="" />
            <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
              <img
                class="h-10 w-10 rounded-full object-cover object-center"
                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=764&amp;amp;q=80"
                alt=""
                loading="lazy"
                height=""
                width="" />
              <div class="mx-4">
                <h2 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
              </div>
            </div>
          </div>
          <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
            Which services you get from Meraki UI
          </h2>
          <hr class="text-primary-500 my-6 w-32" />
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium,
            alias nam? Tempore
          </p>
          <a class="text-primary-500 hover:text-primary-400 mt-4 inline-block underline" href="#" target="_self">
            Read more
          </a>
        </div>
        <div>
          <div class="relative">
            <img
              class="h-64 w-full rounded object-cover object-center lg:h-80"
              src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=1374&amp;amp;q=80"
              alt=""
              loading="lazy"
              height=""
              width="" />
            <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
              <img
                class="h-10 w-10 rounded-full object-cover object-center"
                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&amp;amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=764&amp;amp;q=80"
                alt=""
                loading="lazy"
                height=""
                width="" />
              <div class="mx-4">
                <h2 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
              </div>
            </div>
          </div>
          <h2 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">
            Which services you get from Meraki UI
          </h2>
          <hr class="text-primary-500 my-6 w-32" />
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet dolores praesentium,
            alias nam? Tempore
          </p>
          <a class="text-primary-500 hover:text-primary-400 mt-4 inline-block underline" href="#" target="_self">
            Read more
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="flex justify-center">
    <a
      class="mx-1 flex cursor-not-allowed items-center rounded-md bg-white px-4 py-2 text-gray-500 dark:bg-gray-800 dark:text-gray-600"
      href="#"
      target="_self">
      previous
    </a>
    <a
      class="hover:bg-primary-600 dark:hover:bg-primary-500 mx-1 hidden transform items-center rounded-md bg-white px-4 py-2 text-gray-700 transition-colors duration-300 hover:text-white sm:flex dark:bg-gray-800 dark:text-gray-200 dark:hover:text-gray-200"
      href="#"
      target="_self">
      1
    </a>
    <a
      class="hover:bg-primary-600 dark:hover:bg-primary-500 mx-1 hidden transform items-center rounded-md bg-white px-4 py-2 text-gray-700 transition-colors duration-300 hover:text-white sm:flex dark:bg-gray-800 dark:text-gray-200 dark:hover:text-gray-200"
      href="#"
      target="_self">
      2
    </a>
    <a
      class="hover:bg-primary-600 dark:hover:bg-primary-500 mx-1 hidden transform items-center rounded-md bg-white px-4 py-2 text-gray-700 transition-colors duration-300 hover:text-white sm:flex dark:bg-gray-800 dark:text-gray-200 dark:hover:text-gray-200"
      href="#"
      target="_self">
      3
    </a>
    <a
      class="hover:bg-primary-600 dark:hover:bg-primary-500 mx-1 flex transform items-center rounded-md bg-white px-4 py-2 text-gray-700 transition-colors duration-300 hover:text-white dark:bg-gray-800 dark:text-gray-200 dark:hover:text-gray-200"
      href="#"
      target="_self">
      Next
    </a>
  </div>
  <footer>
    <div class="container mx-auto px-6 py-8">
      <div class="flex flex-col items-center text-center">
        <a href="#">
          <img
            class="h-7 w-auto"
            src="https://merakiui.com/images/full-logo.svg"
            alt=""
            loading="lazy"
            height=""
            width="" />
        </a>
        <div class="-mx-4 mt-6 flex flex-wrap justify-center">
          <a
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-4 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Reddit"
            href="#"
            target="_self">
            Home
          </a>
          <a
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-4 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Reddit"
            href="#"
            target="_self">
            About
          </a>
          <a
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-4 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Reddit"
            href="#"
            target="_self">
            Teams
          </a>
          <a
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-4 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Reddit"
            href="#"
            target="_self">
            Privacy
          </a>
          <a
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-4 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Reddit"
            href="#"
            target="_self">
            Cookies
          </a>
        </div>
      </div>
      <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700" />
      <div class="flex flex-col items-center sm:flex-row sm:justify-between">
        <p class="text-sm text-gray-500 dark:text-gray-300">© Copyright 2021. All Rights Reserved.</p>
        <div class="-mx-2 flex">
          <a
            href="#"
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Reddit">
            <span class="w-24px h-24px h-5 w-5 fill-current">
              <svg class="w-[inherit] h-[inherit]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z"></path>
              </svg>
            </span>
          </a>
          <a
            href="#"
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Facebook">
            <span class="w-24px h-24px h-5 w-5 fill-current">
              <svg class="w-[inherit] h-[inherit]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z"></path>
              </svg>
            </span>
          </a>
          <a
            href="#"
            class="hover:text-primary-500 dark:hover:text-primary-400 mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300"
            aria-label="Github">
            <span class="w-24px h-24px h-5 w-5 fill-current">
              <svg class="w-[inherit] h-[inherit]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>
<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");