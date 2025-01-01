<?php
$title = "liked Articles";
ob_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 h-screen flex items-center justify-center flex-wrap">
  <?php for ($i = 0; $i < 6; $i++): // Generate cards dynamically ?>
    <div class="card relative w-[300px] h-[200px] bg-[#f2f2f2] rounded-lg flex items-center justify-center overflow-hidden hover:scale-105 hover:shadow-[0_8px_16px_rgba(255,255,255,0.2)] transition-all duration-600 shadow-[0_0_0_5px_rgba(255,255,255,0.5)] m-5" style="perspective: 1000px;">
      <svg class="w-12 fill-[#333] transition-all duration-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path>
      </svg>
      
      <div class="content absolute top-0 left-0 w-full h-full p-5 box-border bg-[#f2f2f2] transition-all duration-600" style="transform: rotateX(-90deg); transform-origin: bottom;">
        <h3 class="m-0 text-2xl text-[#333] font-bold">Card Title <?= $i + 1 ?></h3>
        <p class="mt-2.5 text-sm text-[#777] leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="edit-btn mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-all">
          Edit
        </button>
      </div>
    </div>
  <?php endfor; ?>
  
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

    // Add event listener to Edit buttons (optional)
    const editButtons = document.querySelectorAll('.edit-btn');
    editButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        alert('Edit button clicked!');
      });
    });
  </script>

</body>
</html>

<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");