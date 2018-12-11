<?php
function gallery($tagName) {

    $whitelist = array(
        '127.0.0.1',
        '::1'
    );

    // Check if running on development server
    if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        echo "Development server. Boom!";
    } else {
        $db = mysqli_connect("mysql2269int.cp.blacknight.com","u1204067_scott","fUyp<a+Byh1D>(IK","db1204067_villageofthemonks");
        $sql = "SELECT * FROM  `uploads` LIMIT 0 , 90";
        $result = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_array($result)) {
            // Check if image is has been varifided
            if ($row['tag'] == $tagName) {
            echo '<li>';
                echo '<a>';
                echo '<img src="uploads/'.$row['image'].'" alt="'.$row['text'].'" user="'.$row['name'].'">';
                echo '</a>';
            echo '</li>';
            }
        }
    }
};

function imageUploadForm($formName){

echo '<div class="upload-form">

  <form action="" method="POST" enctype="multipart/form-data" class="w-full px-24 py-20 flex flex-wrap bg-white" >

    <span class="heading text-7xl md:text-8xl text-center m-auto text-grey-darkest">Upload image</span>
  
    <!-- Brandon -->
    <input type="hidden" name="tag" value="'.$formName.'">

    <div class="flex flex-wrap w-full my-5" >
        <div class="w-full lg:w-1/4" >
            <lable class="font-bold w-full" for="text" >Name</lable>
        </div>
        <div class="w-full lg:w-3/4" >
            <input class="bg-grey-lighter w-full appearance-none border-2 border-grey-lighter rounded px-4 py-4 text-grey-darker leading-tight focus:outline-none" type="text" name="name" placeholder="Your name">
        </div>
    </div>

    <div class="flex flex-wrap w-full mt-5" >
        <div class="w-full lg:w-1/4" >
            <lable class="font-bold w-full" for="text" >Description</lable>
        </div>
        <div class="w-full lg:w-3/4" >
            <textarea name="text" rows="4" placeholder="Some info about your image" class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-4 px-6 text-grey-darker leading-tight focus:outline-none" ></textarea>
        </div>
    </div>

    <div class="flex flex-wrap w-full my-4" >
        <div class="w-full lg:w-1/4" >
            <lable class="font-bold w-full" for="file" >Image</lable>
        </div>
        <div class="w-full lg:w-3/4" >
            <input type="file" id="image" name="image" class=" text-xl" accept="image/*" required/>
        </div>
    </div>
    
    <!-- Buttons -->
    <div class="flex w-full mt-16" >
    
        <button type="submit" name="upload" class="main-btn my-4 mr-4" >Upload photo</button>

        <button type="reset" id="cancel" name="upload" class="inline-block align-baseline my-4 px-5 rounded font-bold text-grey-darker hover:bg-red-lightest" >Cancel</button>
        
    </div>
  </form>

</div>';


};
?>
