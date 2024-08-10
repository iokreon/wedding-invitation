<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Form Buku Tamu</title>
    <script>
        function validateForm() {
            var name = document.forms["guestbookForm"]["name"].value;
            var comment = document.forms["guestbookForm"]["comment"].value;

       
            // List of allowed guest names
            var allowedGuests = ["Afi Nurul Hikam", "Annisa Firshilla Putri", "Aziz Alif Faturochman", "Dipha Wiguna", "Divara Anaba Fathsel", "Efrino Eko Wahyu Pambudi", "Feri Irawan", "Hafiz Rahman Hakim", "Intan Adilla", "Isna Jesika Parasinta", "Luqman Aldi Prawiratama", "Muhammad Dzulfikar Ash Shiddiqy", "Muhammad Farel Aryasatya", "Muhammad Rizky Faizullah Sudibyo", "Nabiha Kailang Wirakrama", "Nabila Ihza Sivana", "Nasywa Aliya Shabiha", "Riza Sukmawardani", "Tri Susanti", "Wahyu Hariyanto", "Zahrah Thalib", "Zuda Yudistira"];

            if (name === "" || comment === "") {
                document.getElementById("error").innerHTML = "Nama dan Komentar harus diisi";
                return false;
            } else if (!allowedGuests.includes(name)) {
                document.getElementById("error").innerHTML = "Maaf, nama anda tidak ada/sesuai dengan daftar tamu";
                return false;
            } else {
                document.getElementById("error").innerHTML = "";
                showReview();
                return false;
            }
        }

        function showReview() {
            var name = document.forms["guestbookForm"]["name"].value;
            var comment = document.forms["guestbookForm"]["comment"].value;

            // Display the review modal
            var modal = document.getElementById("reviewModal");
            var modalContent = document.getElementById("reviewContent");

            modal.style.display = "block";
            modalContent.innerHTML = "<p>Apakah anda yakin untuk melakukan submission?</p><strong>Name:</strong> " + name + "<br><strong>Comment:</strong> " + comment;

            // Set the hidden input values
            document.getElementById("reviewName").value = name;
            document.getElementById("reviewComment").value = comment;
        }

        function hideReview() {
            // Hide the review modal
            var modal = document.getElementById("reviewModal");
            modal.style.display = "none";
        }
    </script>
</head>
<body>

<div class="guestbook-form">
    <h1>Buku Tamu</h1>
    <form name="guestbookForm" method="post" action="process.php" onsubmit="return validateForm()">
        Nama Lengkap: <input type="text" name="name"><br><br>
        Komentar: <textarea name="comment" rows="5"></textarea><br><br>
        <input type="submit" value="Submit">
        <p id="error" class="error"></p>
    </form>
</div>

<div id="reviewModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hideReview()">&times;</span>
        <div id="reviewContent"></div>
        <br>
        <form method="post" action="process.php">
            <input type="hidden" id="reviewName" name="name" value="">
            <input type="hidden" id="reviewComment" name="comment" value="">
            <div class="modal-buttons">
                <input type="submit" name="submit" value="Ya">
                <input type="button" value="Edit" onclick="hideReview()">
            </div>
        </form>
    </div>
</div>

</body>
</html>
