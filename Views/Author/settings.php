<?php
$title = "settings";
ob_start();
$imageType = isset($result['mime_type']) ? $result['mime_type'] : 'image/jpeg'; 
$imageData = isset($result['profile_image']) ? $result['profile_image'] : null;
if (empty($imageData)) {
    echo "No image data found!";
}
if ($imageData) {
    if (is_resource($imageData)) {
        $imageData = stream_get_contents($imageData);
    }
    
    $imageDataEncoded = base64_encode($imageData);
    $imageSrc = 'data:' . $imageType . ';base64,' . $imageDataEncoded; 
} else {
    
    $imageSrc = 'path/to/default/image.jpg';
}
?>
?>
<form action="index.php?action=updateProfile" method="post" enctype="multipart/form-data">
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
    <span class="mx-2 w-72 truncate text-gray-700" id="nameDisplay"><?=$result["nom"]?></span>
    <input type="text" name="nom" id="nameInput" class="mx-2 w-72 hidden rounded border px-2" value="<?=$result["nom"]?>">
    <div onclick="toggleEditForm('name')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </div>
  </div>
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="prenomDisplay"><?=$result["prénom"]?></span>
    <input type="text" name="prenom" id="prenomInput" class="mx-2 w-72 hidden rounded border px-2" value="<?=$result["prénom"]?>">
    <div onclick="toggleEditForm('prenom')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </div>
  </div>
  

  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="phoneDisplay"><?=$result['phone']?></span>
    <input type="tel" name="phone" id="phoneInput" class="mx-2 w-72 hidden rounded border px-2" value="<?=$result['phone']?>">
    <div onclick="toggleEditForm('phone')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </div>
  </div>
  <!-- Email -->
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="emailDisplay"><?=$result['email']?></span>
    <input type="email" name="email" id="emailInput" class="mx-2 w-72 hidden rounded border px-2" value="<?=$result['email']?>">
    <div onclick="toggleEditForm('email')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </div>
  </div>
  <div class="relative -mx-2 flex items-start">
    <span class="mx-2 h-6 w-6 text-primary-500">
      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </span>
    <span class="mx-2 w-72 truncate text-gray-700" id="passwordDisplay">Password</span>
    <input type="password" name="password" id="passwordInput" class="mx-2 w-72 hidden rounded border px-2" value="<?=$result['password']?>" >
    <div onclick="toggleEditForm('password')" class="absolute right-0 bg-white p-1 rounded-full shadow-lg hover:bg-gray-100">
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
      </svg>
    </div>
  </div>
  <!-- Phone -->

</div>




        </div>

        <div class="relative" id="imageContainer">
          
 
  <img id="profileImage" 
    src="<?=$imageSrc?>" 
    class="h-96 w-96 rounded-full object-cover" 
    alt="Profile">
  <div onclick="toggleEdit()" 
    class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
    </svg>
  </div>
</div>
<div class="hidden relative" id="uploadContainer">
  <div class="border-2 border-dashed border-gray-300 rounded-full h-96 w-96 flex flex-col items-center justify-center">
    <input type="file" id="fileInput" class="hidden" name="image" accept="image/*" onchange="handleFileChange(this)">
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
  
  <div onclick="toggleEdit()" 
    class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </div>
</div>


      </div>
    </div>
    <button
    class="bg-primary-500 hover:bg-primary-400 focus:ring-primary-300 w-full transform rounded-md px-6 text-sm font-medium capitalize tracking-wide  transition-colors duration-300 focus:outline-none focus:ring focus:ring-opacity-50 py-3"
    type="submit">
    <span >Save Changes</span>
  </button>
  </section>
 
</form>
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
  const displayElement = document.getElementById(`${field}Display`);
  const inputElement = document.getElementById(`${field}Input`);
  
  if (displayElement.classList.contains("hidden")) {
    displayElement.classList.remove("hidden");
    inputElement.classList.add("hidden");
    // Save updated value to display (optional logic)
    displayElement.textContent = inputElement.value;
  } else {
    displayElement.classList.add("hidden");
    inputElement.classList.remove("hidden");
    inputElement.focus();
  }
}

</script>


<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");