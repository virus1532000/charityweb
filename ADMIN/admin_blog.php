<?php
include 'admin_header.php'
?>
<style>
    input[type="text"] {
        background-color: transparent;
        border: none;
        border: 2px solid #eb1616;
        border-radius: 0px;
        font-weight: bold;
        font-size: 14px;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 10px;
        color: #ecf0f5 !important;
    }

    input[type="file"] {
        background-color: transparent;
        border: none;
        border: 2px solid #eb1616;
        border-radius: 0px;
        font-weight: bold;
        font-size: 14px;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 10px;
        color: #6c7293 !important;
    }

    input[type="checkbox"] {
        appearance: none;
        width: 20px;
        height: 20px;
        margin-left: 20px;
        background-color: transparent;
        border: 2px #eb1616 solid;
        cursor: pointer;
        position: relative;
        transition: background-color 0.3s ease-in-out;

    }

    .check_data {
        text-transform: uppercase;
        display: inline-block;
        color: #fff;
        margin-top: 10px;
        text-align: space-evenly;
        padding: 5px 10px;
        transition: background-color 0.3s ease-in-out;
        border-radius: 5px;

    }

    input[type="checkbox"]:checked::before {
        content: "\2713";
        /* Unicode character for a checkmark */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        color: #eb1616;
    }

    textarea[type="text"] {
        background-color: transparent;
        border: 2px #eb1616;
        border: 2px solid #eb1616;
        border-radius: 0px;
        font-weight: bold;
        font-size: 14px;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 10px;
        color: #ecf0f5 !important;
    }

    .blog-input {
        background: var(--secondary);
    }

    label {
        color: #fff;
    }

    form {
        background-color: #191c24;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 30px;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    h3 {
        text-align: center;
    }

    h3::before {
        content: "";
        border-radius: 30px;
        position: absolute;
        left: 465;
        bottom: 940;
        height: 4.5px;
        width: 275px;
        background: #eb1616;
    }

    #addblogform input::file-selector-button {
        font-weight: bold;
        color: #6c7293;
        padding: 0.5em;
        border-radius: 3px;
        background: transparent;
    }

    #addblogform input:focus {
        background: transparent;
        border: solid #eb1616 2px;
    }

    #addblogform textarea:focus {
        background: transparent;
        border: solid #eb1616 2px;
    }

    .form-control {
        color: #6c7293 !important;
    }
</style>
<div class="container pt-4 px-4" >
    <div id="editor"></div>
</div>
<?php
if (isset($_POST['save'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description1 = mysqli_real_escape_string($con, $_POST['description1']);
    $description2 = mysqli_real_escape_string($con, $_POST['description2']);
    $description3 = mysqli_real_escape_string($con, $_POST['description3']);
    $categories =  $_POST['categories'];
    $allcategories = "";
    for ($i = 0; $i < count($categories); $i++) {
        $allcategories = $categories[$i] . "," . $allcategories;
    }
    if ($_FILES['image']['name'] == "") {
        $image = "";
        $image_error = "Please select an image";
    } else {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $location =
            "../uploads/" . $_FILES['image']['name'];
        move_uploaded_file($image_tmp, $location);
    }
    $q = "insert into blog(title,description1,description2,description3,category,image,postby,postdate)values('$title','$description1','$description2','$description3','$allcategories','$image','" . $_SESSION['username'] . "',now())";
    if (mysqli_query($con, $q)) {
        echo "<script>alert('Blog added successful')</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

<div class="container-fluid row">
    <div class="container col-12 ">
        <div class="card rounded-0 mt-4 ms-3 blog-input">
            <!-- <div class="card-header ">


            </div> -->
            <div class="card-body">
                <h3 class="card-title mb-4 text-red">Add New Blog Post</h3>
                <form id="addblogform" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>Title:</label>
                        <input type="text" class="form-control" placeholder="Enter your Title here" name="title" required>
                    </div>
                    <div class="form-group">
                        <label>Description 1:</label>
                        <textarea type="text" class="form-control" name="description1" placeholder="What is your blog about ?" rows="7" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description 2:</label>
                        <textarea type="text" class="form-control" name="description2" placeholder="Explain more about your blog" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description 3:</label>
                        <textarea type="text" class="form-control" name="description3" placeholder="Give conclusion for your blog" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group text-">
                        <label>Choose blog categories:</label>
                        <div class="checkbox-group">
                            <input type="checkbox" name="categories[]" value="Social"><span class="check_data"> Social</span>
                            <input type="checkbox" name="categories[]" value="Travel"> <span class="check_data">Travel</span>
                            <input type="checkbox" name="categories[]" value="Fantasy"><span class="check_data"> Fantasy</span>
                            <input type="checkbox" name="categories[]" value="Tech"><span class="check_data"> Tech</span>
                            <input type="checkbox" name="categories[]" value="Science"><span class="check_data"> Science</span>
                            <input type="checkbox" name="categories[]" value="Health"> <span class="check_data">Health</span>
                            <br />
                            <input type="checkbox" name="categories[]" value="Sports"> <span class="check_data">Sports</span>
                            <input type="checkbox" name="categories[]" value="Education"> <span class="check_data">Education</span>
                            <input type="checkbox" name="categories[]" value="Business"> <span class="check_data">Business</span>
                            <input type="checkbox" name="categories[]" value="Politics"> <span class="check_data">Politics</span>
                            <input type="checkbox" name="categories[]" value="Music"> <span class="check_data">Music</span>
                        </div>
                    </div>
            </div>

        </div>
        <div class="my-4 text-end">

            <button type="submit" name="save">SAVE</button>


        </div>
        </form>
    </div>
</div>

<script>
    // Get all the buttons
    const Button = document.querySelectorAll('.on-off-button');

    // Add event listeners to each button
    Button.forEach(Button => {
        Button.addEventListener('click', () => {
            // Toggle the button's state
            Button.classList.toggle('on');
            Button.classList.toggle('off');

            // Get the button's ID
            const ButtonId = Button.id;

            // Do something based on the button's state and ID
            if (Button.classList.contains('off')) {
                console.log(`Button ${ButtonId} is ON`);
            } else {
                console.log(`Button ${ButtonId} is OFF`);
            }
        });
    });
</script>






<?php
include 'admin_footer.php'
?>