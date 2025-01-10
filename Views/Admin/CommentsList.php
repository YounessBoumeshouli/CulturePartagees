<?php
$title = "liked Articles";
ob_start();
var_dump($id = $_SESSION["user"]);
?>
<div class="bg-gray-900  w-screen flex items-center justify-center flex-wrap comments-section">

 
</div>

 
</div>
  <script>
function deleteComment(id) {
    if (confirm("Are you sure you want to delete this comment?")) {
        $.ajax({
            url: 'Services/adminServices.php',
            type: 'POST',
            data: {
                action: 'deleteComment',
                id_comment: id
            },
            dataType: 'json',
            success: function(response) {
                if (response.showAlert) {
                    alert(response.message); // Display the alert
                }
                if (response.success) {
                    // Reload the comments section
                    loadComments();
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log the error for debugging
                showNotification('error', 'An error occurred while deleting the comment.');
            }
        });
    }
}
$(document).ready(function() {
    loadComments();
});
function loadComments() {
    $.ajax({
        url: 'Services/adminServices.php',
        type: 'POST',
        data: {
            action: 'loadComments'
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // Replace the comments section with the updated content
                $('.comments-section').html(response.html);
            } else {
                showNotification('error', response.message || 'Failed to load comments.');
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Log the error for debugging
            showNotification('error', 'An error occurred while loading comments.');
        }
    });
}
function showNotification(type, message) {
    // Create notification element if it doesn't exist
    if (!document.querySelector('.notification-container')) {
        const container = document.createElement('div');
        container.className = 'notification-container fixed top-4 right-4 z-50';
        document.body.appendChild(container);
    }

    const notification = document.createElement('div');
    // Using your color scheme
    notification.className = `transform transition-all duration-300 ease-out p-4 mb-4 rounded-lg shadow-lg ${
        type === 'success' 
            ? 'bg-[#634647] text-[#ddad81]' 
            : 'bg-red-500 text-white'
    }`;
    notification.innerHTML = message;

    document.querySelector('.notification-container').appendChild(notification);

    // Add opacity classes for animation
    setTimeout(() => {
        notification.classList.add('opacity-0');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}


if (typeof jQuery === 'undefined') {
    console.error('jQuery is required for the comment deletion functionality');
}
</script>


<?php
$content = ob_get_clean();
require_once("Views/layoutMembre.php");