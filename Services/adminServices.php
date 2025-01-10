<?php

require_once 'C:/laragon/www/CulturePartagees/Classes/Admin.php';
require_once 'C:/laragon/www/CulturePartagees/Classes/Avis.php';

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
        $action = $_POST['action'];
        if ($action === 'deleteComment' && isset($_POST['id_comment'])) {
            $admin = new Admin(null, null, null, null, null, null, null, Database::getConnection());

            $id_comment = $_POST['id_comment'];

            $success = $admin->DeleteComment($id_comment);

            if ($success) {
                echo json_encode([
                    'success' => true,
                    'message' => 'Comment deleted successfully!',
                    'showAlert' => true
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Failed to delete the comment.',
                    'showAlert' => true
                ]);
            }
        } elseif ($action === 'loadComments') {
            $avis = new Avis(Database::getConnection());

            $comments = $avis->afficherAllComment();

            ob_start();
            foreach ($comments as $comment): ?>
                <div class="comment-container" data-comment-id="<?= $comment['id_comment'] ?>">
                    <div class="flex flex-col items-center justify-between pt-9 px-6 pb-6 relative comment-content">
                        <h5 class="text-sm font-semibold mb-2 text-left mr-auto text-zinc-700">
                            <?= $comment["nom"] ?>
                        </h5>
                        <p class="w-full mb-4 text-sm text-justify">
                            <?= $comment["comment"] ?>
                        </p>
                        <p>
                            <?= $comment["email"] ?>
                            <a class="mb-2 text-sm cursor-pointer font-semibold transition-colors hover:text-[#634647] underline underline-offset-2">
                                <?= $comment["status"] ?>
                            </a>
                        </p>
                        <button 
                            onclick="deleteComment(<?= $comment['id_comment'] ?>)"
                            class="mb-2 text-sm mr-auto text-zinc-600 cursor-pointer font-semibold transition-colors hover:text-[#634647] hover:underline underline-offset-2"
                        >
                            Delete Comment
                        </button>
                    </div>
                </div>
            <?php endforeach;
            $html = ob_get_clean();
            echo json_encode([
                'success' => true,
                'html' => $html
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid request.'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid request method.'
        ]);
    }
} catch (Exception $e) {
    error_log("Error in AdminServices.php: " . $e->getMessage());

    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage(),
        'showAlert' => true
    ]);
}
?>