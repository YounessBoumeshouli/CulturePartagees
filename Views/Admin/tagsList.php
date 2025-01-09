<?php
$title = "liked Articles";
ob_start();
?>
<div class="bg-gray-900 h-screen w-screen flex items-center justify-center flex-wrap">
    <div class="relative w-64 font-mono">
        <form action="index.php?action=addTag" method="post">
            <input type="text" name="tag" placeholder="TYPE HERE"
                class="w-full p-4 text-lg font-bold text-black bg-white border-4 border-black shadow-[5px_5px_0_#000,10px_10px_0_#4a90e2] outline-none transition-all duration-300 ease-in-out focus:animate-pulse focus:ring focus:ring-black focus:ring-offset-2 focus:ring-offset-white placeholder:text-gray-500 focus:placeholder:text-transparent" />
            <label
                class="absolute top-[-30px] left-[-3px] px-2 py-1 text-sm font-bold text-white bg-black rotate-[-1deg] transition-all duration-300 ease-in-out focus-within:rotate-0 focus-within:scale-105 focus-within:bg-[#4a90e2]">
                SMOOTH BRUTALIST
            </label>
            <input type="submit" class="hidden">
        </form>
    </div>


    <?php
  foreach ($result as $row) {
    # code...

  ?>
    <div class="w-full max-w-[290px] h-[70px] bg-gray-800 rounded-[20px] flex items-center justify-start backdrop-blur-md transition-transform duration-500 hover:scale-105 cursor-pointer">
  <div class="w-[50px] h-[50px] ml-2.5 rounded-[10px] bg-gradient-to-br from-gray-300 via-gray-400 to-indigo-400 hover:from-indigo-400 hover:to-red-700 transition duration-500"></div>
  <div class="ml-2.5 text-white font-sans w-[calc(100%-90px)]">
    <div class="flex items-center justify-between">
      <p class="text-lg font-bold">Clans of Clash</p>
      <span class="text-[10px]">12 min ago</span>
    </div>
    <p class="text-sm font-light">Xhattmahs is not attacking your base!</p>
  </div>
</div>


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


<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");