<?php
$title = "settings";
ob_start();
?>
<body class="font-body antialiased">
  <div class="flex items-center overflow-x-auto whitespace-nowrap py-4 ml-8">
    <a href="index.php?action=home" class="text-gray-600 dark:text-gray-200">
      <span class="w-24px h-24px h-5 w-5">
        <svg class="w-[inherit] h-[inherit]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path
            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
        </svg>
      </span>
    </a>
    <span class="mx-5 text-gray-500 rtl:-scale-x-100 dark:text-gray-300">
      <span class="w-24px h-24px h-5 w-5">
        <svg class="w-[inherit] h-[inherit]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </span>
    </span>
    <a href="#" class="-px-2 flex items-center text-gray-600 hover:underline dark:text-gray-200">
      <span class="w-24px h-24px mx-2 h-6 w-6">
        <svg
          class="w-[inherit] h-[inherit]"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
        </svg>
      </span>
      <span class="mx-2">Dashboard</span>
    </a>
    <span class="mx-5 text-gray-500 rtl:-scale-x-100 dark:text-gray-300">
      <span class="w-24px h-24px h-5 w-5">
        <svg class="w-[inherit] h-[inherit]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </span>
    </span>
    <a href="#" class="-px-2 flex items-center text-gray-600 hover:underline dark:text-gray-200">
      <span class="w-24px h-24px mx-2 h-6 w-6">
        <svg
          class="w-[inherit] h-[inherit]"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
        </svg>
      </span>
      <span class="mx-2">Profile</span>
    </a>
    <span class="mx-5 text-gray-500 rtl:-scale-x-100 dark:text-gray-300">
      <span class="w-24px h-24px h-5 w-5">
        <svg class="w-[inherit] h-[inherit]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </span>
    </span>
    <a href="#" class="text-primary-600 -px-2 dark:text-primary-400 flex items-center hover:underline">
      <span class="w-24px h-24px mx-2 h-6 w-6">
        <svg
          class="w-[inherit] h-[inherit]"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
      </span>
      <span class="mx-2">Settings</span>
    </a>
  </div>
  <section class="min-h-screen bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6">
      <div class="lg:-mx-10 lg:flex lg:items-center">
        <div class="lg:mx-10 lg:w-1/2">
        <div class="mt-6 space-y-8 md:mt-8">
  <!-- Name -->
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="nameDisplay">John Doe</span>
    <input type="text" id="nameInput" class="mx-2 w-72 hidden rounded border px-2" value="John Doe">
    <button onclick="toggleEditForm('name')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </button>
  </div>
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="phoneDisplay">(257) 563-7401</span>
    <input type="tel" id="phoneInput" class="mx-2 w-72 hidden rounded border px-2" value="(257) 563-7401">
    <button onclick="toggleEditForm('phone')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </button>
  </div>
  <!-- Email -->
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="emailDisplay">john@example.com</span>
    <input type="email" id="emailInput" class="mx-2 w-72 hidden rounded border px-2" value="john@example.com">
    <button onclick="toggleEditForm('email')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </button>
  </div>
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="passwordDisplay">Password</span>
    <input type="password" id="passwordInput" class="mx-2 w-72 hidden rounded border px-2" >
    <button onclick="toggleEditForm('password')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </button>
  </div>
  <!-- Phone -->

</div>



        </div>
        <div class="relative" id="imageContainer">
  <img id="profileImage" 
    src="https://images.unsplash.com/photo-1598257006458-087169a1f08d" 
    class="h-96 w-96 rounded-full object-cover" 
    alt="Profile">
    
  <button onclick="toggleEdit()" 
    class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
    </svg>
  </button>
</div>

<div class="hidden relative" id="uploadContainer">
  <div class="border-2 border-dashed border-gray-300 rounded-full h-96 w-96 flex flex-col items-center justify-center">
    <input type="file" id="fileInput" class="hidden" accept="image/*" onchange="handleFileChange(this)">
    <label for="fileInput" class="cursor-pointer">
      <div class="text-center">
        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" 
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="mt-1 text-sm text-gray-600">Click to upload image</p>
      </div>
    </label>
  </div>
  
  <button onclick="toggleEdit()" 
    class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>
</div>


      </div>
    </div>
  </section>
  <button
    class="bg-primary-500 hover:bg-primary-400 focus:ring-primary-300 w-full transform rounded-md px-6 text-sm font-medium capitalize tracking-wide text-white transition-colors duration-300 focus:outline-none focus:ring focus:ring-opacity-50 py-3"
    type="button">
    <span>get in touch</span>
  </button>
  <script>
function toggleEdit() {
  const imageContainer = document.getElementById('imageContainer');
  const uploadContainer = document.getElementById('uploadContainer');
  
  imageContainer.classList.toggle('hidden');
  uploadContainer.classList.toggle('hidden');
}

function handleFileChange(input) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    
    reader.onload = function(e) {
      document.getElementById('profileImage').src = e.target.result;
      toggleEdit();
    };
    
    reader.readAsDataURL(input.files[0]);
  }
}
function toggleEditForm(field) {
  const display = document.getElementById(`${field}Display`);
  const input = document.getElementById(`${field}Input`);
  
  if (display.classList.contains('hidden')) {
    // Save changes
    display.textContent = input.value;
    display.classList.remove('hidden');
    input.classList.add('hidden');
  } else {
    // Show input
    display.classList.add('hidden');
    input.classList.remove('hidden');
    input.focus();
  }
}
</script>
</body>

<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");