<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./Local/./css/./EditContent.css">
  <link rel="stylesheet" href="Local/css/Output.css" />
  <link rel="stylesheet" href="Local/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" />
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <title>Edit Kontak</title>

  <?php
  include 'connection.php';
  include 'ListAnggota.php';
  $id = $_GET['id'];
  $variabel = getIDlist($id);
  $tgl = date("m/d/Y", strtotime($variabel['TglLahir']));
  // print_r($variabel);
  // exit();
  ?>

  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type="number"] {
      -moz-appearance: textfield;
    }
  </style>
  <link rel="shortcut icon" href="img/favicon.ico" type="img/Xcon" />
  <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <script type="text/javascript" src="./Local/js/multi-form.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script src="Local/js/EditContent.js"></script>
</head>

<body>
  <nav class="navbar navbar-light bg-white  fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="indexAdmin.html">
        <img src="img/LogoIsmi.png" class="w-16" alt="" />
      </a>
      <button class="shadow-none text-gray-900 border-none hover:bg-gray-400 hover:text-gray-50 py-4 px-4 rounded-md hover:shadow-xl transform duration-200" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title font-bold text-lg font-Roboto" id="offcanvasNavbarLabel">
            Menu
          </h5>
          <button type="button" class="hover:bg-gray-300 active:bg-gray-300 px-2.5 py-1.5 rounded-full hover:text-gray-400 active:text-gray-400 transform duration-200 text-lg" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa-solid fa-circle-xmark"></i>
          </button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item py-3">
              <button onclick="directWarning2();" class="block font-Roboto w-full text-center py-3 rounded-md bg-gray-200 text-gray-900 hover:bg-gray-500 hover:text-gray-50 active:bg-gray-500 active:text-gray-50" aria-current="page" href="indexAdmin.html">Beranda</button>
            </li>
            <li class="nav-item py-3">
              <button onclick="directWarning();" class="block font-Roboto w-full text-center py-3 rounded-md bg-gray-200 text-gray-900 hover:bg-gray-500 hover:text-gray-50 active:bg-gray-500 active:text-gray-50">List Anggota</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="w-screen h-screen py-32">
      <div class="mb-4 border-gray-200 dark:border-gray-700 w-full h-fit">
        <ul class="flex justify-center flex-row -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
          <li class="mr-2" role="presentation">
            <button class="nav1 inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 active" id="Step1" data-tabs-target="#Step-1" type="button" role="tab" aria-controls="Step-1">
              Step 1
            </button>
          </li>
          <li class="mr-2" role="presentation">
            <button class="nav2 inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300" id="Step2" data-tabs-target="#Step-2" type="button" role="tab" aria-controls="Step-2">
              Step 2
            </button>
          </li>
        </ul>
      </div>
      <br />
      <br />
      <div id="myTabContent" class="pb-20 w-full h-fit lg:h-full flex justify-center items-start">

        <!-- <h1>Registration Form</h1> -->
        <!-- One "tab" for each step in the form: -->
        <form id="myForm" action="ProsesEdit.php?id=<?php
                                                echo $id;
                                                ?>" method="POST">
        <div id="Step-1" role="tabpanel" aria-labelledby="Step1" class="tab tab1 p-4 w-96 md:w-100 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700 space-y-10">
          <h5 class="text-xl text-gray-900 dark:text-white text-center font-Roboto font-medium">
            Step 1
          </h5>
          <br />
          <div class="grid lg:grid-cols-2 gap-3 w-full xs:grid-cols-1">
            <div>
              <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah nama</label>
              <input placeholder="John jon" name="fname" type="text" value="<?php echo $variabel['Nama'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah email</label>
              <input placeholder="nama@perusahaan.com" value="<?php echo $variabel['Email'];?>
              " name="email" type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
          </div>
          <div class="grid lg:grid-cols-2 gap-3 w-full xs:grid-cols-1">
            <div>
              <label for="NoHp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah NoHp</label>
              <input type="number" name="phone" id="NoHp" value="<?php echo $variabel['NoHp'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="cth: +6281234567" required />
            </div>
            <div>
              <label for="TglLahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah Tanggal Lahir</label>
              <input type="text" name="tanggal" value="<?php echo $tgl;?>" 
              id="TglLahir" placeholder="yyyy-mm-dd" class="date bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required />
            </div>
          </div>
          <button class="next w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-lg transform duration-200 group"
          name="nextt"
          type="button"
          >
            Selanjutnya
            <i class="fa-solid fa-angles-right group-hover:animate-bounceX ml-7"></i>
          </button>
          <div class="w-full h-32 my-10 inline-flex justify-center">
            <div class="h-full flex items-center">
              <img src="img/LogoIsmi.png" class="w-12" alt="" />
            </div>
            <div class="text-xs font-bold h-full flex items-center font-Roboto cursor-default">
              &copy; Ismi Dki
            </div>
          </div>
        </div>
        <div id="Step-2" role="tabpanel" aria-labelledby="Step2" class="tab tab2 p-4 w-96 md:w-100 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700 space-y-10">
          <h5 class="text-xl text-gray-900 dark:text-white text-center font-Roboto font-medium">
            Step 2
          </h5>
          <div class="w-full">
            <label for="Alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah Alamat</label>
            <input type="text" value="<?php echo $variabel['Alamat'];?>" name="Alamat" id="Alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Alamat anda....">
          </div>
          <div class="grid lg:grid-cols-2 gap-3 w-full xs:grid-cols-1">
            <div class="w-full">
              <label for="NamaPerusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah nama Perusahaan</label>
              <input type="text" name="Company" value="<?php echo $variabel['NamaPerusahaan'];?>" id="NamaPerusahaan" placeholder="cth: Google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
            <div>
              <label for="NamaProduk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah Nama Produk</label>
              <input type="text" name="ProductName" value="<?php echo $variabel['NamaProduk'];?>" id="NamaProduk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="cth: Softworn" required />
            </div>
          </div>
          <div class="grid gap-3 w-full grid-cols-1 lg:grid-cols-2">
            <div>
              <label for="JenisProduk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah Jenis Produk</label>
              <input type="text" name="ProductType" value="<?php echo $variabel['JenisProduk'];?>" id="JenisProduk" placeholder="Software" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required />
            </div>
          </div>
          <div>
            <label for="Web" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ubah Website perusahaan anda</label>
            <input type="text" name="Website" id="Web" value="<?php echo $variabel['WebPerusahaan'];?>" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autocomplete="off" required />
          </div>
          <button type="submit" name="submitt" class="submit w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:text-lg transform duration-200 group">
            Simpan
            <i class="fa-solid fa-floppy-disk group-hover:animate-bounce ml-3"></i>
          </button>

          <div class="w-full h-32 my-10 inline-flex justify-center">
            <div class="h-full flex items-center">
              <img src="img/LogoIsmi.png" class="w-12" alt="" />
            </div>
            <div class="text-xs font-bold h-full flex items-center font-Roboto cursor-default">
              &copy; Ismi Dki
            </div>
          </div>
        </div>
        </form>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./node_modules/flowbite/dist/flowbite.js"></script>
</body>

</html>