<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Form Buku Tamu</title>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var commentRows = document.querySelectorAll('.comment-row');

            commentRows.forEach(function (row) {
                row.addEventListener('click', function () {
                    var fullComment = this.querySelector('.full-comment');
                    if (fullComment) {
                        this.classList.toggle('open');
                        fullComment.classList.toggle('open');
                    }
                });
            });
        });
    </script>
</head>
<body>
    

<div class="comment-section">
    <h2>Daftar Tamu:</h2>
    <?php
    function createSubstringPreview($comment, $previewLength = 50)
    {
        $preview = substr($comment, 0, $previewLength);
        if (strlen($comment) > $previewLength) {
            $preview .= '...';
        }
        return $preview;
    }
    // Set the timezone to Jakarta
    date_default_timezone_set('Asia/Jakarta');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        if (!empty($name) && !empty($comment)) {
            $file = 'guestbook.txt';

            // Open the file to get existing content
            $current = file_get_contents($file);

            // Append a new comment with timestamp in Jakarta time
            $current .= "Name: $name\nComment: $comment\nTime: " . date("H:i:s") . "\n\n";

            // Write the contents back to the file
            file_put_contents($file, $current);
        }
    }

    if (file_exists('guestbook.txt')) {
        echo '<table>';
        echo '<tr><th>Nama</th><th>Komentar</th><th>Waktu Kedatangan</th></tr>';
        $lines = file('guestbook.txt');
        $isCommentRowOpen = false;
        foreach ($lines as $line) {
            if (strpos($line, 'Name: ') === 0) {
                $name = substr($line, 6);
                echo "<tr class='comment-row'><td>$name</td>";
                $isCommentRowOpen = true;
            } elseif (strpos($line, 'Comment: ') === 0) {
                $comment = substr($line, 9);
                $preview = createSubstringPreview($comment);
                echo "<td class='comment-preview'><span class='preview-text'>$preview</span><span class='full-comment'>$comment</span></td>";
            } elseif (strpos($line, 'Time: ') === 0) {
                $time = substr($line, 6);
                echo "<td class='time'>$time</td></tr>";
                $isCommentRowOpen = false;
            }
        }

        if ($isCommentRowOpen) {
            // Close the comment row if it's still open
            echo '</tr>';
        }

        echo '</table>';
    }
    ?>
    
    <div class="back-button">
        <a href="index.php">Kembali ke Form</a>
    </div>

</div>

</body>
</html>
