<?php

$title = "login page";
ob_start();

?>
<body class="font-body antialiased">
  <div class="flex overflow-x-auto overflow-y-hidden whitespace-nowrap border-b border-gray-200 dark:border-gray-700">
    <button
      class="text-primary-600 dark:text-primary-300 border-primary-500 dark:border-primary-400 -mb-px inline-flex h-10 items-center whitespace-nowrap border-b-2 bg-transparent px-4 text-center text-sm focus:outline-none sm:text-base"
      type="button">
      <span>Profile</span>
    </button>
    <button
      class="cursor-base -mb-px inline-flex h-10 items-center whitespace-nowrap border-b-2 border-transparent bg-transparent px-4 text-center text-sm text-gray-700 hover:border-gray-400 focus:outline-none sm:text-base dark:text-white"
      type="button">
      <span>Account</span>
    </button>
    <button
      class="cursor-base -mb-px inline-flex h-10 items-center whitespace-nowrap border-b-2 border-transparent bg-transparent px-4 text-center text-sm text-gray-700 hover:border-gray-400 focus:outline-none sm:text-base dark:text-white"
      type="button">
      <span>Notification</span>
    </button>
  </div>
  <div class="w-[100%] flex justify-center mt-10 md:w-[100%]">
    <div class="h-[400px] overflow-hidden rounded-lg bg-white shadow-md dark:bg-gray-800 md:h-[400px]">
      <div class="px-6 py-4">
        <div class="mx-auto flex justify-center">
          <img
            class="h-7 w-auto sm:h-8"
            src="https://merakiui.com/images/logo.svg"
            alt=""
            loading="lazy"
            height=""
            width="" />
        </div>
        <h2 class="mt-3 text-center text-xl font-medium text-gray-600 dark:text-gray-200">Welcome Back</h2>
        <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Login or create account</p>
        <form
          x-data="{}"
          x-on:submit.prevent="post"
          data-error="&lt;p&gt;Something went wrong. Please try again&lt;/p&gt;"
          data-success="&lt;p&gt;Thank you for your submission.&lt;/p&gt;"
          method="post"
          action="/api/form/submit">
          <div
            x-html=""
            :class="{'text-red-500': formStatus === 'ERROR', 'text-green-500': formStatus === 'SUCCESS'}"></div>
          <input name="formname" type="hidden" value="Form" />
          <div class="mt-4 w-full">
            <input
              id="qqjnCu"
              name="input"
              class="focus:border-primary-400 focus:ring-primary-300 dark:focus:border-primary-300 mt-2 block w-full rounded-lg border bg-white px-4 py-2 text-gray-700 placeholder-gray-500 focus:outline-none focus:ring focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400"
              aria-label="Email Address"
              type="email"
              placeholder="Email Address" />
          </div>
          <div class="mt-4 w-full">
            <input
              id="wogrrc"
              name="input"
              class="focus:border-primary-400 focus:ring-primary-300 dark:focus:border-primary-300 mt-2 block w-full rounded-lg border bg-white px-4 py-2 text-gray-700 placeholder-gray-500 focus:outline-none focus:ring focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400"
              aria-label="Password"
              type="password"
              placeholder="Password" />
          </div>
          <div class="mt-4 flex items-center justify-between">
            <a class="text-sm text-gray-600 hover:text-gray-500 dark:text-gray-200" href="#" target="_self">
              Forget Password?
            </a>
            <button
              class="bg-primary-500 hover:bg-primary-400 focus:ring-primary-300 transform rounded-lg px-6 py-2 text-sm font-medium capitalize tracking-wide text-white transition-colors duration-300 focus:outline-none focus:ring focus:ring-opacity-50"
              type="button">
              <span>Sign In</span>
            </button>
          </div>
        </form>
      </div>
      <div class="flex items-center justify-center bg-gray-50 py-4 text-center dark:bg-gray-700">
        <span class="text-sm text-gray-600 dark:text-gray-200">Don't have an account?</span>
        <a
          class="text-primary-500 dark:text-primary-400 mx-2 text-sm font-bold hover:underline"
          href="#"
          target="_self">
          Register
        </a>
      </div>
    </div>
  </div>
</body>
<?php
$content = ob_start();
require_once("Views/layoutAuthentification.php");