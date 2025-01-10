<?php
$title = "add Articles";
ob_start();
?>

<section>
    <form method="post" action="index.php?action=ajouterArticle" enctype="multipart/form-data">
        <div class="container mx-auto px-6 py-10">
            <h2 class="text-3xl font-semibold capitalize text-gray-800 lg:text-4xl dark:text-white">From the blog</h2>
        </div>
        <div class="w-[300px] px-4 py-5 bg-white flex flex-col gap-3 rounded-md shadow-[0px_0px_15px_rgba(0,0,0,0.09)]">
            <legend class="text-xl font-semibold mb-3 select-none">Choose One</legend>
            <?php foreach ($categories as $categorie): ?>
                <label for="html" name="status" class="font-medium h-14 relative hover:bg-zinc-100 flex items-center px-3 gap-3 rounded-lg has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none">
                    <div class="w-5 fill-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                            <g id="c133de6af664cd4f011a55de6b0011b2">
                                <path display="inline" d="M30.713,0.501L71.717,460.42l184.006,51.078l184.515-51.15L481.287,0.501H30.713z M395.754,109.646   l-2.567,28.596l-1.128,12.681h-0.187H256h-0.197h-79.599l5.155,57.761h74.444H256h115.723h15.201l-1.377,15.146l-13.255,148.506   l-0.849,9.523L256,413.854v0.012l-0.259,0.072l-115.547-32.078l-7.903-88.566h26.098h30.526l4.016,44.986l62.82,16.965l0.052-0.014   v-0.006l62.916-16.977l6.542-73.158H256h-0.197H129.771l-13.863-155.444l-1.351-15.131h141.247H256h141.104L395.754,109.646z"></path>
                            </g>
                        </svg>
                    </div>
                    <?= $categorie["label"] ?>
                    <input checked="" type="radio" name="categorie" value="<?= $categorie["id_categorie"] ?>" class="peer/html w-4 h-4 absolute accent-current right-3" id="html" />
                </label>
            <?php endforeach; ?>
        </div>
        <div class=" w-screen flex items-center justify-center flex-wrap">
            <?php foreach ($tags as $tag): ?>
                <div class="tag-button w-full max-w-[150px] h-[70px] bg-gray-800 rounded-[20px] flex items-center justify-start backdrop-blur-md transition-transform duration-500 hover:scale-105 cursor-pointer ml-4" id="tag-<?= $tag['id_tag'] ?>" data-id="<?= $tag['id_tag'] ?>">
                    <div class="w-[50px] h-[50px] ml-2.5 rounded-[10px] bg-gradient-to-br from-gray-300 via-gray-400 to-indigo-400 hover:from-indigo-400 hover:to-red-700 transition duration-500"></div>
                    <div class="ml-2.5 text-white font-sans w-[calc(100%-90px)]">
                        <p class="text-lg font-bold"><?= $tag['label_tag'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <input type="hidden" name="selected_tags" id="selected-tags" value="">

        <!-- Image Upload Section -->
        <div class="relative my-6" id="imageContainer">
            <img id="articleImage" src="path/to/default/image.jpg" class="h-48 w-full object-cover rounded-lg" alt="Article Image">
            <div onclick="toggleEdit()" class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 cursor-pointer">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </div>
        </div>
        <div class="hidden relative" id="uploadContainer">
            <div class="border-2 border-dashed border-gray-300 rounded-lg h-48 w-full flex flex-col items-center justify-center">
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
            <div onclick="toggleEdit()" class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 cursor-pointer">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>

        <!-- Rest of your form elements -->
        <label for="chat" class="sr-only">Title of the article</label>
        <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
            <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                    <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                </svg>
                <span class="sr-only">Upload image</span>
            </button>
            <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title of the article..." name="title"></textarea>
        </div>

        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                <label for="editor" class="sr-only">Publish post</label>
                <textarea id="editor" name="content" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required></textarea>
            </div>
        </div>
        <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Publish post
        </button>
    </form>

    <script>
        const selectedTags = new Set();

        document.querySelectorAll('.tag-button').forEach(button => {
            button.addEventListener('click', () => {
                const tagId = button.dataset.id;

                // Toggle selection
                if (selectedTags.has(tagId)) {
                    selectedTags.delete(tagId);
                    button.classList.remove('bg-blue-500'); // Example visual feedback
                } else {
                    selectedTags.add(tagId);
                    button.classList.add('bg-blue-500'); // Example visual feedback
                }

                // Update the hidden input field
                document.getElementById('selected-tags').value = Array.from(selectedTags).join(',');
                console.log("Selected Tags:", document.getElementById('selected-tags').value);
            });
        });

        // Ensure the hidden input is updated before form submission
        document.querySelector('form').addEventListener('submit', function (event) {
            document.getElementById('selected-tags').value = Array.from(selectedTags).join(',');
            console.log("Form submitted with selected tags:", document.getElementById('selected-tags').value);
        });

        // Image Upload Script
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
                    document.getElementById('articleImage').src = e.target.result;
                    toggleEdit();
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</section>

<?php
$content = ob_get_clean();
require_once "Views/layoutMembre.php";