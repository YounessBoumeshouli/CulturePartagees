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
<div class="relative w-64 font-mono">
  <input
    type="text"
    placeholder="TYPE HERE"
    class="w-full p-4 text-lg font-bold text-black bg-white border-4 border-black shadow-[5px_5px_0_#000,10px_10px_0_#4a90e2] outline-none transition-all duration-300 ease-in-out focus:animate-pulse focus:ring focus:ring-black focus:ring-offset-2 focus:ring-offset-white placeholder:text-gray-500 focus:placeholder:text-transparent"
  />
  <label
    class="absolute top-[-30px] left-[-3px] px-2 py-1 text-sm font-bold text-white bg-black rotate-[-1deg] transition-all duration-300 ease-in-out focus-within:rotate-0 focus-within:scale-105 focus-within:bg-[#4a90e2]"
  >
    SMOOTH BRUTALIST
  </label>
</div>


  <article class="w-64 transition-all m-6 ease-in-out duration-150 border-4 border-transparent rounded-lg p-2 cursor-pointer bg-white hover:shadow-[10px_10px_0_#4e84ff,20px_20px_0_#4444bd] hover:-translate-x-5 hover:-translate-y-5 hover:border-[#0578c5] active:shadow-none active:translate-x-0 active:translate-y-0">
  <div class="rounded-lg bg-gray-400 h-44 w-full"></div>
  <div class="flex flex-col gap-5 p-2 pt-5">
    <div class="flex justify-between items-center">
      <h2 class="text-2xl font-semibold text-black truncate m-0">Project</h2>
      <div class="w-12 h-12 rounded-full p-2 transition-transform ease-in-out duration-300 bg-white hover:bg-[#a6c2f0] hover:-rotate-45">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </div>
    </div>
    <div class="flex gap-2">
      <span class="px-3 py-1 text-xs font-bold rounded-full bg-[rgba(165,96,247,0.43)] text-[rgb(85,27,177)]">• Delete</span>
      <span class="px-3 py-1 text-xs font-bold rounded-full bg-[#b2b2fd] text-[#1a41cd]">• Articles</span>
    </div>
  </div>
</article>
 
  

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