<?php
session_start();
defined('LOCALHOST') ? null : define('LOCALHOST', 'localhost');
defined('USERNAME') ? null : define('USERNAME', 'root');
defined('PASSWORD') ? null : define('PASSWORD', '');
defined('DBNAME') ? null : define('DBNAME', 'job');
$conn = mysqli_connect(LOCALHOST, USERNAME, PASSWORD, DBNAME) or die("Connection to DB failed");
global $conn;




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["insert"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $dec_short = mysqli_real_escape_string($conn, $_POST["dec_short"]);
    $dec_long = mysqli_real_escape_string($conn, $_POST["dec_long"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $link = mysqli_real_escape_string($conn, $_POST["link"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);

    // Upload image and store its path
    $image_path = "img/" . mysqli_real_escape_string($conn, basename($_FILES["image"]["name"]));
    move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);

    $image_path2 = "img2/" . mysqli_real_escape_string($conn, basename($_FILES["small_img"]["name"]));
    move_uploaded_file($_FILES["small_img"]["tmp_name"], $image_path2);

    // Call the insertJobInfo function to insert data
    $result = insertJobInfo($title, $dec_short, $dec_long, $image_path, $image_path2, $date, $name, $link, $category, $conn);

    if ($result === true) {
        echo "Data inserted successfully!";
    } else {
        echo $result; // Display any error message
    }
}

function insertJobInfo($title, $dec_short, $dec_long, $image, $small_img, $date, $name, $link, $category, $conn)
{
    // Prepare and execute the SQL query to insert data
    $sql = "INSERT INTO jobinfo (title, dec_short, dec_long, image, small_img , date, name,link,category) VALUES (?, ?,?, ?,? ,?, ?, ? ,?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssss", $title, $dec_short, $dec_long, $image, $small_img, $date, $name, $link, $category);

        if ($stmt->execute()) {
            return true; // Successful insertion
        } else {
            return "Error inserting data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        return "Error preparing statement: " . $conn->error;
    }
}



function retrieveAndDisplayData1()
{
    global $conn;


    
    // Query to retrieve data from the database
    $sql = "SELECT ID,title, dec_short, dec_long, image,small_img, date, name FROM jobinfo Where category=1";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Initialize a variable to store the output
        $output = "";

        // Fetch and build the output
        while ($row = $result->fetch_assoc()) {
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div>
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp"style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary" 
                                data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']} ...........</p>
                               
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 60px; height: 58px; margin:5px;">
                                    <div class="ps-4">
                                        <h6>  {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
        }
        echo $output;
        // Return the built output

    } else {
        return "No";
    }
}

function retrieveAndDisplayData2()
{
    global $conn;

    // Query to retrieve data from the database
    $sql = "SELECT ID,title, dec_short, dec_long, image,small_img, date, name FROM jobinfo Where category=2";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Initialize a variable to store the output
        $output = "";

        // Fetch and build the output
        while ($row = $result->fetch_assoc()) {
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div>
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp"style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary" 
                                data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']} ...........</p>
                               
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                    <div class="ps-4">
                                        <h6>  {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
        }
        echo $output;
        // Return the built output

    } else {
        return "No";
    }
}
function retrieveAndDisplayData3()
{
    global $conn;

    // Query to retrieve data from the database
    $sql = "SELECT ID,title, dec_short, dec_long, image,small_img, date, name FROM jobinfo Where category=3";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Initialize a variable to store the output
        $output = "";

        // Fetch and build the output
        while ($row = $result->fetch_assoc()) {
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div>
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp"style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary" 
                                data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']} ...........</p>
                               
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                    <div class="ps-4">
                                        <h6>  {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
        }
        echo $output;
        // Return the built output

    } else {
        return "No";
    }
}
function retrieveAndDisplayData4()
{
    global $conn;

    // Query to retrieve data from the database
    $sql = "SELECT ID,title, dec_short, dec_long, image,small_img, date, name FROM jobinfo Where category=4";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Initialize a variable to store the output
        $output = "";

        // Fetch and build the output
        while ($row = $result->fetch_assoc()) {
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div>
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp"style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary" 
                                data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']} ...........</p>
                               
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                    <div class="ps-4">
                                        <h6>  {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
        }
        echo $output;
        // Return the built output

    } else {
        return "No";
    }
}

function retrieveAndDisplayData5()
{
    global $conn;

    // Query to retrieve data from the database
    $sql = "SELECT ID,title, dec_short, dec_long, image,small_img, date, name FROM jobinfo Where category=5";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Initialize a variable to store the output
        $output = "";

        // Fetch and build the output
        while ($row = $result->fetch_assoc()) {
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div>
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp"style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary" 
                                data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']} ...........</p>
                               
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                    <div class="ps-4">
                                        <h6>  {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
        }
        echo $output;
        // Return the built output

    } else {
        return "No";
    }
}
function retrieveAndDisplayData6()
{
    global $conn;

    // Query to retrieve data from the database
    $sql = "SELECT ID,title, dec_short, dec_long, image,small_img, date, name FROM jobinfo Where category=6";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Initialize a variable to store the output
        $output = "";

        // Fetch and build the output
        while ($row = $result->fetch_assoc()) {
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div>
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp"style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary" 
                                data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']} ...........</p>
                               
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                    <div class="ps-4">
                                        <h6>  {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
        }
        echo $output;
        // Return the built output

    } else {
        return "No";
    }
}

function retrieveAndDisplayData()
{
    global $conn;
    if (isset($_GET['job_id'])) {
        $job_id = $_GET['job_id'];

        // Now you have $job_id, and you can use it in your SQL query
        $sql = "SELECT ID, title, dec_short, dec_long, image, small_img, date, name ,link FROM jobinfo WHERE ID = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind the ID parameter
            $stmt->bind_param("i", $job_id);

            // Execute the query
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                // Check if there is a matching row
                if ($result->num_rows > 0) {
                    // Initialize a variable to store the output
                    $output = "";

                    // Fetch and display the data here
                    while ($row = $result->fetch_assoc()) {
                        $output .= <<<DELIMITER
                    <div class="container-fluid py-5">
                        <div class="container">

                            <div class="row g-5">
                                <div class="col-sm-3 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="img-border ">
                                        <img class="img-fluid" src="{$row['image']}" alt="">
                                </div>
                                 </div>
                                <div dir="rtl" class=" col-sm-9 col-md-6 col-lg-8 wow fadeInUp" style="font-family: 'Readex Pro', sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0 " data-wow-delay="0.5s ">
                                <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                <h1 class="display-6 mb-4 text-primary">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']}</p>
                               </div>
                                <div dir="rtl" class="  wow fadeInUp" style="font-family: 'Readex Pro', sans-serif; padding-left: 30px; text-align: justify; line-height: 2.5" data-wow-delay="0.5s">
                                    <div class="h-100">
                                        <p class="mb-4">{$row['dec_long']}</p>
                                        <div class="d-flex align-items-left mb-6 pb-2">
                                            <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;">
                                            <div class="ps-4">
                                                <h6> {$row['name']}</h6>
                                                <small>{$row['date']}</small>
                                            </div>
                                        </div>
                                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{$row['link']} target="_blank"">قدم الان</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    DELIMITER;


                        // Your code to display the data
                    }
                    echo $output;
                } else {
                    echo "No data found for the specified ID.";
                }
            } else {
                echo "Error executing the query: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "No job ID specified in the URL.";
    }
}



function displayRandomJobsWithCarousel($conn)
{
    // Generate a random list of 10 distinct IDs from your database
    $randomIDs = [];
    $sql = "SELECT ID FROM jobinfo ORDER BY RAND() LIMIT 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $randomIDs[] = $row['ID'];
        }
    }

    // Initialize the output
    $output = '';

    // Start the Owl Carousel structure
    $output .= <<<DELIMITER
    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="font-family: 'Readex Pro', sans-serif;font-size: small; max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">الوظائف الشائعة</h6>
                <h1 class="display-6 mb-4">مجموعة من أكثر طلبات الوظائف شيوعًا</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
DELIMITER;

    // Retrieve job data and add it to the Carousel
    $dotIndex = 0; // Initialize dot index
    foreach ($randomIDs as $jobID) {
        // Retrieve the job data based on the random ID
        $sql = "SELECT * FROM jobinfo WHERE ID = $jobID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dotIndex++;
                $isActive = ($dotIndex === 1) ? ' active' : ''; // Add 'active' class to the first item

                $output .= <<<DELIMITER
                <div class="project-item border rounded h-100 p-4$isActive" data-dot="{$dotIndex}">
                    <div class="position-relative mb-4" style="font-family: 'Readex Pro', sans-serif;font-size: small;">
                        <img class="img-fluid rounded" src="{$row['image']}" alt="">
                        <a href="job_info.php?job_id={$row['ID']}  data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <span>{$row['title']}</span>
                </div>
DELIMITER;
            }
        }
    }

    // Close the Owl Carousel structure
    $output .= <<<DELIMITER
            </div>
        </div>
    </div>
    <script style=   "display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;">
        
     
    </script>
DELIMITER;

    echo $output;
}


function retrieveLastDataInEachCategory()
{
    global $conn;

    // Initialize an array to store the last data in each category
    $lastDataInCategories = [];

    // Define an array of category IDs (adjust as per your actual category IDs)
    $categoryIDs = [1, 2, 3, 4, 5, 6];

    foreach ($categoryIDs as $categoryID) {
        // Initialize $output for each category
        $output = '';

        // Query to retrieve the last data in each category
        $sql = "SELECT ID, title, dec_short, dec_long, image, small_img, date, name FROM jobinfo WHERE category = $categoryID ORDER BY date DESC LIMIT 1";
        $result = $conn->query($sql);

        // Check if there are results
        if ($result->num_rows > 0) {
            // Fetch the last data in the category
            $row = $result->fetch_assoc();

            // Build the HTML structure
            $output .= <<<DELIMITER
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="img-border">
                                <img class="img-fluid" src="{$row['image']}" alt="">
                            </div> 
                        </div>
                        <div dir="rtl" class="col-lg-6 wow fadeInUp" style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h6 class="section-title bg-white text-start text-primary pe-3">جديد</h6>
                                <h1 class="display-6 mb-4 text-primary" style="font-size:x-large ">{$row['title']}<span class="text-primary"></span></h1>
                                <p>{$row['dec_short']}..........</p>
                                <div class="d-flex align-items-left mb-6 pb-2">
                                    <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                    <div class="ps-4">
                                        <h6> {$row['name']}</h6>
                                        <small>{$row['date']}</small>
                                    </div>
                                </div>
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            DELIMITER;
            echo $output;

            // Store the HTML structure in the result array
            $lastDataInCategories[$categoryID] = $output;
        }
    }

    // Return the array of last data in each category
}



// Function to search for similar words in the database and return IDs
function searchDatabase($searchQuery, $conn)
{
    // Sanitize the search query
    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);

    // Perform a search query on your database
    $sql = "SELECT ID FROM jobinfo WHERE title LIKE '%$searchQuery%' OR dec_short LIKE '%$searchQuery%' OR dec_long LIKE '%$searchQuery%'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return "Error in the database query: " . mysqli_error($conn);
    }

    // Create an array to store the search results
    $searchResults = array();

    // Fetch and store the results in the array
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row;
    }

    // Return the search results along with the ID
    return $searchResults;
}


function retrieveAndDisplayData22($searchQuery, $conn)

{
    global $conn;

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
        $searchQuery = mysqli_real_escape_string($conn, $_POST["searchQuery"]);
        retrieveAndDisplayData22($searchQuery, $conn);
    }
    $searchQuery = ""; // Define the variable here


    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);
    $sql = "SELECT ID FROM jobinfo WHERE title LIKE '%$searchQuery%' OR dec_short LIKE '%$searchQuery%' OR dec_long LIKE '%$searchQuery%'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        return "Error in the database query: " . mysqli_error($conn);
    }

    // Create an array to store the search results
    $searchResults = array();

    // Fetch and store the results in the array
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row['ID'];
    }

    // Initialize a variable to store the output
    $output = "";

    // Loop through the search results and retrieve data
    foreach ($searchResults as $searchResult) {
        $sql = "SELECT ID, title, dec_short, dec_long, image, small_img, date, name FROM jobinfo WHERE ID = $searchResult";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $output .= <<<DELIMITER
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="img-border">
                                    <img class="img-fluid" src="{$row['image']}" alt="">
                                </div>
                            </div>
                            <div dir="rtl" class="col-lg-6 wow fadeInUp" style="font-family:'Readex Pro',sans-serif; padding-left: 30px; text-align: justify; line-height: 3.0;">
                                <div class="h-100">
                                    <h6 class="section-title bg-white text-start text-primary pe-3">الاعلان</h6>
                                    <h1 class="display-6 mb-4 text-primary" data-wow-delay="0.5s">{$row['title']}<span class="text-primary"></span></h1>
                                    <p>{$row['dec_short']} ...........</p>
                                    <div class="d-flex align-items-left mb-6 pb-2">
                                        <img class="flex-shrink-0 rounded-circle" src="{$row['small_img']}" alt="" style="width: 50px; height: 50px;  margin:5px;">
                                        <div class="ps-4">
                                            <h6>{$row['name']}</h6>
                                            <small>{$row['date']}</small>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary rounded-pill py-3 px-5" href="job_info.php?job_id={$row['ID']}">أقرا المزيد </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                DELIMITER;
            }
        }
    }

    // Output the built content
    echo $output;
}

