<?php
        include 'koneksi.php';
        $query = "SELECT * FROM developer";
        $query_sql = mysqli_query($conn, $query);
        $tampil = mysqli_fetch_array($query_sql);
    ?> 

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <script>
        tailwind.config = {
          theme: {
            container: {
              center: true,
              padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
              },
            },
            extend: {
              colors: {
                clifford: "#da373d",
                primary: "#ad49e1",
              },
            },
          },
        };
      </script>
</head>
<body class="overflow-x-hidden">
<nav class="navbar fixed top-0 w-full bg-black p-2 flex justify-between items-center z-10" >
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-bold">
            <a href="#"><img src="assets/<?= $tampil['logo'] ?>" alt="Logo" class="h-10"></a>
        </div>
        <ul class="flex space-x-9" >
            <li><a href="#Home" class="text-white hover:text-gray-200 text-xl active:text-[#ff5753] focus:border-blue-400" >Home</a></li>
            <li><a href="#About" class="text-white hover:text-gray-200 text-xl active:text-[#ff5753]" >About</a></li>
            <li><a href="#Project" class="text-white hover:text-gray-200 text-xl active:text-[#ff5753]" >projects</a></li>
            <li><a href="#Service" class="text-white hover:text-gray-200 text-xl active:text-[#ff5753]" >Service</a></li>
            <li><a href="#Contact"  class="text-white hover:text-gray-200 text-xl active:text-[#ff5753]" >Contact</a></li>
        </ul>
    </div>
</nav>
<!-- home -->
 <section class="h-screen bg-black flex items-center " id="Home">
 <?php
        include 'koneksi.php';
        $query_profile = "SELECT * FROM profile";
        $query_sql = mysqli_query($conn, $query_profile);
        $tampilprofile = mysqli_fetch_array($query_sql);
    ?> 

  <div class="container flex space-y-4 ">
    <!-- image -->
    <div class="w-1/3">
      <div class="w-72 h-[25rem] bg-white overflow-hidden ">
        <img src="assets/<?= $tampilprofile['img_profil1'] ?>" alt="home" class="mt-20 object-cover" >
      </div>
  </div>
  <div class="w-1/2">
    <h1 class="text-5xl font-bold text-gray-300 " > <div class="h-5" id="Hi"></div> <br> <?= $tampilprofile['name_title'] ?></h1>
    <p class="text-base text-gray-300 mt-4 mb-4">designers create user-centric experiences through elegant design solutions, combining form and function for seamless interactions.</p>
    <a href="#Contact" class="bg-[#d6cdc6] text-slate-950 py-2 px-4 rounded-md ">Contact me</a>
  </div>
  </div>
 </section>
 <!-- about -->
  <section class="h-screen flex flex-col bg-[#dbdbd9]" id="About">
    <div class="w-full flex justify-center mt-3">
      <h1 class="text-5xl font-bold text-gray-950 underline mb-20 ">About me</h1>
    </div>
      <div class="container flex">
        <div class="w-1/2 space-y-4">
          <h1 class="text-4xl font-bold text-gray-950" >Want to know me?</h1>
          <p class="text-base text-gray-950"><?= $tampilprofile['bio'] ?></p>
          <!-- card -->
           <div class="w-full h-44 bg-[#8a8683]">
              <p class="ml-3 text-base font-bold text-gray-300">name:</p>
              <p class="ml-3 text-base font-bold mb-3 text-gray-200"><?= $tampilprofile['name'] ?></p>
              <p class="ml-3 text-base font-bold text-gray-300">email:</p>
              <p class="ml-3 text-base font-bold mb-3 text-gray-200"><?= $tampilprofile['email'] ?></p>
              <p class="ml-3 text-base font-bold text-gray-300">phone:</p>
              <p class="ml-3 text-base font-bold text-gray-200"><?= $tampilprofile['no_telephone'] ?></p>
           </div>
           <!-- cta -->
            <div class="flex">
                <p class="font-bold text-xl text-gray-950 mt-4 mr-5">interested in me?</p>
                <a href="#Contact" class="bg-[#8a8683] text-slate-950 py-2 px-4 rounded-md hover mt-4">Contact me</a>
            </div> 
        </div>
        <div class="w-1/2 pl-20" data-aos="fade-up" data-aos-delay="90">
          <div class="w-80 h-[26rem] overflow-hidden border-2 border-black" >
            <img src="assets/<?= $tampilprofile['img_profil2'] ?>" alt="home" class=" object-cover" >
          </div>
        </div>
      </div>
  </section>
  <!-- project -->
   <section class="h-screen flex flex-col bg-black" id="Project">
      <div class="flex flex-col justify-center items-center">
        <h1 class="font-bold text-gray-50 text-3xl">my project</h1>
        <hr class="border-gray-50 w-80 mt-2">
        <p class="text-center text-gray-50 text-xl mt-3 ">i show only show a few projects <br> that i have made </p>
      </div>
      <div class="container ">
        <div class="grid grid-cols-3">
                <?php
                include 'koneksi.php';
                $query_project = "SELECT * FROM project";
                $query_sql = mysqli_query($conn, $query_project);
                $tampilproject = mysqli_fetch_all($query_sql,MYSQLI_ASSOC);
            ?> 
        <?php
            foreach($tampilproject as $tampilprojects):
        ?>
            <div class=" p-4">
                <img src="assets/<?= $tampilprojects['img_project'] ?>" alt="Project 1" class="w-full h-48 object-cover" data-aos="zoom-in-right">
                <h2 class="text-center text-xl font-bold mt-2 text-gray-50 " data-aos="zoom-in-right"><?= $tampilprojects['title_project'] ?></h2>
            </div>
        <?php endforeach;?>
        </div>
      </div>
   </section>
   <!-- service -->
    <section class="h-screen  bg-[#dbdbd9]" id="Service">
      <div class="flex flex-col justify-center items-center px-36">
        <h1 class="font-bold text-slate-950 text-3xl">Service</h1>
        <hr class="border-slate-950 w-80 mt-2">
        <p class="text-center text-slate-950 text-xl mt-3 ">With experience in creating presentation designs that are visually stunning and easy to understand, I am ready to help you convey your message in a more effective way. I make sure each of your slides is not only visually appealing, but also easy to understand.</p>
      </div>
        <div class="container px-60 " data-aos="fade-up">
          <div class="grid grid-cols-3">
          <?php
                include 'koneksi.php';
                $query_service = "SELECT * FROM service";
                $query_sql = mysqli_query($conn, $query_service);
                $tampilservice = mysqli_fetch_all($query_sql,MYSQLI_ASSOC);
            ?> 
         <?php
            foreach ($tampilservice as $tampilservices):
         ?>   
          <div class="p-4">
              <div class="bg-[#8a8683] h-[25rem] p-6 rounded-[30px] text-center" >
                  <img src="assets/<?= $tampilservices['img_service'] ?>" alt="Service 1" class="w-20 h-20 mx-auto">
                  <h2 class="text-xl font-bold mt-2 text-gray-50"><?= $tampilservices['name_service'] ?></h2>
                  <p class="text-gray-50 mt-1"><?= $tampilservices['service_description'] ?></p>
              </div>
          </div>
        <?php endforeach;?>
          </div>
    </section>
    <!-- contact -->
     <section class="h-screen bg-black" id="Contact">
        <?php
                    include 'koneksi.php';
                    $query_contact = "SELECT * FROM contact";
                    $query_sql = mysqli_query($conn, $query_contact);
                    $tampilcontact = mysqli_fetch_assoc($query_sql);
        ?> 
      <div class="flex flex-col justify-center items-center">
        <h1 class="font-bold text-gray-50 text-3xl">Contact</h1>
        <hr class="border-gray-50 w-80 mt-2">
      </div>
      <div class="container flex">
        <!-- form -->
         <div class="w-1/2 mt-20 space-y-9 pr-20">
            <p class="text-gray-50 text-xl font-bold"><?= $tampilcontact['description_contact'] ?></p>
            <form class="space-y-4" action="proses.php" method="post">
              <input name="name" type="text" placeholder="Name:" class="w-full p-2 rounded bg-[#dbf3ff] text-black placeholder-black">
              <input name="email" type="email" placeholder="Email:" class="w-full p-2 rounded bg-[#dbf3ff] text-black border-b-4 placeholder-black">
              <textarea name="message" placeholder="Message:" class="w-full p-2 rounded bg-[#dbf3ff] text-black h-32 placeholder-black"></textarea>
              <button name="submit" type="submit" class="bg-[#8a8683] text-slate-950 font-bold px-4 py-2 ">Send message</button>
          </form>
         </div>
         <!-- contact icon -->
         <div class="w-1/2 flex flex-col justify-center space-y-5 ">
            <div class="flex items-center">
              <img src="assets/location.png" alt="Location" class="mr-2">
              <span class="text-gray-50 font-bold"><?= $tampilcontact['address_contact'] ?></span>
            </div>
            <div class="flex items-center">
              <img src="assets/phone.png" alt="Phone" class="mr-2">
              <span class="text-gray-50 font-bold">phone: <?= $tampilcontact['telephone_contact'] ?></span>
            </div>
            <div class="flex items-center">
              <img src="assets/email.png" alt="Email" class="mr-2">
              <span class="text-gray-50 font-bold">Email: <?= $tampilcontact['email_contact'] ?></span>
            </div>
            <!-- icon sosmed -->
            <div class="flex gap-4 relative top-64 left-[30rem]">
              <a href="https://wa.me/+6285601539354" target="_blank" class="bg-gray-50 w-10 h-10 rounded-full flex items-center justify-center">
                  <img src="assets/whatsapp.png" alt="Logo 1" class=" ">
              </a>
              <a href="https://www.instagram.com/roklmm/profilecard/?igsh=MW01NDZpeHVraDZk" target="_blank" class="bg-gray-50 w-10 h-10 rounded-full flex items-center justify-center">
                  <img src="assets/instagram.png" alt="Logo 2" class=" ">
              </a>
              <a href="https://www.facebook.com/profile.php?id=100074024834456&mibextid=ZbWKwL" target="_blank" class="bg-gray-50 w-10 h-10 rounded-full flex items-center justify-center">
                  <img src="assets/facebook.png" alt="Logo 3" class=" ">
              </a>
            </div>
     </section>
     <!-- footer -->
<!-- footer -->
<footer class="bg-black text-gray-50 py-4 border-t-2 border-gray-50">
    <div class="container text-center">
        <p>&copy; 2023 Nama Perusahaan. Semua hak dilindungi.</p>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  <script src="script.js"></script>
</body>
</html>