<?php
$title = "article";
ob_start();
?>
<body class="font-body antialiased">
  <div class="flex justify-center" >
    <div class="max-w-2xl  rounded-lg bg-white px-8 py-4 shadow-md dark:bg-gray-800" id="card">
      <div class="flex items-center justify-between">
        <span class="text-sm font-light text-gray-600 dark:text-gray-400"><?=$result["creationdate"]?></span>
        <a
          class="transform cursor-pointer rounded bg-gray-600 px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 hover:bg-gray-500"
          href="#"
          target="_self">
          <?=$result["label"]?>
        </a>
      </div>
      <div class="mt-2">
        <div
          class="text-2xl font-bold text-gray-700 hover:text-gray-600 hover:underline dark:text-white dark:hover:text-gray-200"
          
          target="_self">
          <?=$result["title"]?>
      </div>
        <p class="mt-2 text-gray-600 dark:text-gray-300">
        <?=$result["description"]?>
        </p>
      </div>
      <div class="mt-4 flex items-center justify-between">
        <div class='hidden' id="content">
        <?=$result["content"]?>
        </div>
        
        
      
    </div>
    <div class="flex items-center">
          <img
            class="mx-4 hidden h-10 w-10 rounded-full object-cover sm:block"
            src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=40&amp;amp;q=80"
            alt="avatar"
            loading="lazy"
            height=""
            width="" />
          <div class="cursor-pointer font-bold text-gray-700 dark:text-gray-200" href="#" target="_self"><?php
          echo$result["nom"]."".$result["prénom"]?></div>
        </div>
        <button id="readmore"  class="text-primary-600 dark:text-primary-400 "  >Read more</a>
      </div>
  </div>
  <div class="flex justify-center mx-60 mt-6 mb-12 ">
  <div class="bg-white border border-slate-200 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm">
    <form method ="post" action="index.php?action=addComment&id_article=<?=$result["id_article"]?>">
    <h1 class="text-center text-slate-200 text-xl font-bold col-span-6">Send Feedback</h1>
    <textarea placeholder="Your feedback..." name="comment" class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"></textarea>
    <div id="like"  class="fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200">
<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
<path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
</svg>
</div>
    <div id="deslike" class="fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
<path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path></svg>
</div>
    <span class="col-span-2"></span>
    <button type="submit"  class="bg-slate-100 stroke-slate-600 border border-slate-200 col-span-2 flex justify-center rounded-lg p-2 duration-300 hover:border-slate-600 hover:text-white focus:stroke-blue-200 focus:bg-blue-400">
            send
        </button>
        <input type="hidden" name="reaction" id="reaction">
</form>
</div>
  </div>
  <div class="rounded-lg bg-gray-100 p-8 dark:bg-gray-800">
    <button class="flex w-full items-center justify-between" type="button">
      <h2 class="font-semibold text-gray-700 dark:text-white">comment section</h2>
      <span class="bg-primary-500 rounded-full text-white w-9 h-9  bg-blue-500">
        <span class="w-24px h-24px h-6 w-6">
          <svg
            class="w-[inherit] h-[inherit]"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
          </svg>
        </span>
      </span>
    </button>
  </div>
  <div>
    <div class="rounded-lg bg-gray-100 p-8 dark:bg-gray-800">
      <?php
      foreach($Avis as $avis){

      

      ?>
      <div class="flex w-full items-center justify-between mb-8" >
        <h2 class="font-semibold text-gray-700 dark:text-white"><?=$avis["comment"]?></h2>
      </div>
      <div class="flex items-center">
        <img
          class="mx-4 hidden h-10 w-10 rounded-full object-cover sm:block"
          src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=40&amp;amp;q=80"
          alt="avatar"
          loading="lazy"
          height=""
          width="" />
        <a class="cursor-pointer font-bold text-gray-700 dark:text-gray-200" href="#" target="_self"><?php
        echo $avis["prénom"]." ".$avis["nom"]
        ?></a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
  <script>
    readmore = document.getElementById("readmore");
    content = document.getElementById("content");
    like = document.getElementById("like");
    deslike = document.getElementById("deslike");
    reaction = document.getElementById("reaction");
    card = document.getElementById("card");
    readmore.addEventListener("click",function(){
      card.classList.toggle('h-[600px]');
      content.classList.toggle('hidden');

    })
    like.addEventListener("click",function(){
      reaction.value = "like";
      console.log("like")
    })
    deslike.addEventListener("click",function(){
      reaction.value = "deslike";
      console.log(reaction.value);

    })
  </script>
</body>
<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");