<?php
$title = "liked Articles";
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 h-screen flex items-center justify-center flex-wrap">
<?php
var_dump($result);
foreach ($result as $row) {
  # code...
?>
  <article class="w-64 transition-all m-6 ease-in-out duration-150 border-4 border-transparent rounded-lg p-2 cursor-pointer bg-white hover:shadow-[10px_10px_0_#4e84ff,20px_20px_0_#4444bd] hover:-translate-x-5 hover:-translate-y-5 hover:border-[#0578c5] active:shadow-none active:translate-x-0 active:translate-y-0">
  <div class="rounded-lg bg-gray-400 h-44 w-full">
  <span class="px-3 py-1 text-xs font-bold rounded-full bg-[#b2b2fd] text-[#1a41cd]"><a href="index.php?action=reffuseArticle&idArticle=<?=$row["id_article"]?>">
      <div class="w-12 h-12 rounded-full p-2 transition-transform ease-in-out duration-300 bg-white hover:bg-[#a6c2f0] hover:-rotate-45">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>
    </a>
  </span>

  </div>
  <div class="flex flex-col gap-5 p-2 pt-5">
    <div class="flex justify-between items-center">
      <h2 class="text-2xl font-semibold text-black truncate m-0"><?=$row["title"]?></h2>
      <a href="index.php?action=acceptArticle&idArticle=<?=$row["id_article"]?>">
      <div class="w-12 h-12 rounded-full p-2 transition-transform ease-in-out duration-300 bg-white hover:bg-[#a6c2f0] hover:-rotate-45">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>
    </a>
    </div>
    <div class="flex gap-2">
      <span class="px-3 py-1 text-xs font-bold rounded-full bg-[rgba(165,96,247,0.43)] text-[rgb(85,27,177)]"><?=$row["status"]?></span>
      

      <span class="px-3 py-1 text-xs font-bold rounded-full bg-[#b2b2fd] text-[#1a41cd]">• Reffuse Article</span>
      
    </div>
    
  </div>
</article>
<?php

}
?>
  <script>
  // Select all cards
  const cards = document.querySelectorAll('.card');

  // Loop through each card and attach event listeners
  cards.forEach(card => {
    const content = card.querySelector('.content');
    const svg = card.querySelector('svg');

    card.addEventListener('mouseenter', () => {
      content.style.transform = 'rotateX(0deg)';
      svg.style.transform = 'scale(0)';
    });

    card.addEventListener('mouseleave', () => {
      content.style.transform = 'rotateX(-90deg)';
      svg.style.transform = 'scale(1)';
    });
  });
</script>

</body>
</html>
<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");