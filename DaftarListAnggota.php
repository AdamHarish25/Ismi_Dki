<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Local/css/Output.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link rel="stylesheet" href="Local/css/bootstrap.css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="Local/css/style.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="img/Xcon" />
  <link rel="stylesheet" href="Local/css/DLAnggota.css">
  <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Daftar List Anggota</title>
  <script src="Local/js/DLSearch.js"></script>
  <script src="Local/js/DLAnggota.js"></script>
  <?php
  include 'connection.php';
  include 'ListAnggota.php';
  $variabel = GetListAnggota();
  // print_r($variabel);
  // exit();
  ?>
  <style>
    input:focus {
      outline: none !important;
    }

    .improtant {
      padding-top: 0 !important;
    }

    .padding-right {
      padding-right: 30px;
    }
  </style>

</head>

<body class="improtant">
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-md sticky top-0 inset-x-0 z-40" role="navigation" aria-labelledby="TopNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="indexAdmin.html">
        <img class="w-20" src="img/LogoIsmi.png" alt="" />
      </a>
      <button class="navbar-toggler outline-none px-4 text-lg py-2 font-Poppins border-none shadow-none " onclick="OnOn()" id="ToggleButton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i id="targetted" class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav sm:mt-4 md:mt-0 me-auto mb-2 mb-lg-0 w-full">
          <li class="nav-item ml-2">
            <a class="nav-link activel border-b-2 border-transparent px-4 py-6 lg:hover:border-blue-600 md:hover:text-gray-700" aria-current="page" href="indexAdmin.html">Beranda</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link border-b-2 border-transparent px-4 py-6 transform duration-300 lg:hover:border-blue-600 md:hover:text-gray-700" href="StrukturAdmin.html">Struktur</a>
          </li>

          <li class="nav-item ml-2">
            <a class="nav-link border-b-2 border-transparent px-4 py-6 transform duration-300 lg:hover:border-blue-600 md:hover:text-gray-700" href="KegiatanUadmin.html">Kegiatan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="flex flex-col mt-10 md:px-5 ">
    <div class="overflow-x-auto shadow-md sm:rounded-xl">
      <div class="inline-block min-w-full align-middle dark:bg-gray-800">
        <div class="w-full h-fit grid grid-cols-2 justify-between">
          <div class="w-80 h-full">
            <div class="p-4">
              <label for="myInput" class="sr-only">Search</label>
              <div class="relative mt-1">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input type="text" id="myInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-center" placeholder="Search for items">
              </div>
            </div>
          </div>
          <div class="w-full h-full flex items-center justify-end padding-right">
            <a href="Export.php" name="export" class="px-10 py-2 bg-gray-300 text-gray-800 font-bold font-Rubik group focus:bg-gray-200 focus:ring-blue-300 focus:ring-4 rounded-lg hover:bg-gray-200">
              <i class="fa fa-download mr-2 group-focus-within::animate-bounce group-hover:animate-bounce"></i>
              Download
            </a>
          </div>
        </div>
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 mb-10">
            <thead class="bg-gray-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Nama</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Nomor Hp</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Tanggal Lahir</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Alamat</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Nama Perusahaan</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Nama Produk</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Jenis Produk</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Web Perusahaan</th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Delete</span>
                </th>
              </tr>

            </thead>
            <tbody id="myTable" class="bg-white divide-y divide-gray-200">
              <?php
              if (count($variabel) > 0) {
                for ($i = 0; $i < count($variabel); $i++) {
              ?>
                  <tr class="hover:bg-gray-200 active:bg-gray-200 group odd:bg-white odd:text-black even:bg-gray-200 even:text-gray-700" id="listing">
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div>
                          <div class="text-sm transform duration-300 font-medium font-Roboto group-hover:font-bold odd:text-black even:text-gray-700">
                            <?php
                            echo $variabel[$i]['Nama'];
                            ?>
                          </div>

                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div>
                        <div class="text-sm transform duration-300 odd:text-gray-500 even:text-gray-700 font-Roboto group-hover:font-bold">
                          <?php
                          echo $variabel[$i]['Email'];
                          ?>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm transform duration-300 odd:text-black even:text-gray-700 font-Roboto group-hover:font-bold">
                        <?php
                        echo $variabel[$i]['NoHp'];
                        ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm transform duration-300 odd:text-black even:text-gray-700 font-Roboto group-hover:font-bold">
                        <?php
                        echo $variabel[$i]['TglLahir'];
                        ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm transform duration-300 odd:text-black even:text-gray-700 font-Roboto group-hover:font-bold">
                        <?php
                        echo $variabel[$i]['Alamat'];
                        ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm transform duration-300 font-Roboto group-hover:font-bold odd:text-black even:text-gray-700">
                      <?php
                      echo $variabel[$i]['NamaPerusahaan'];
                      ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm transform duration-300 odd:text-black even:text-gray-700 font-Roboto group-hover:font-bold">
                        <?php
                        echo $variabel[$i]['NamaProduk'];
                        ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm transform duration-300 odd:text-black even:text-gray-700 font-Roboto group-hover:font-bold">
                        <?php
                        echo $variabel[$i]['JenisProduk'];
                        ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm transform duration-300 odd:text-black even:text-gray-700 font-Roboto group-hover:font-bold">
                        <a class="no-underline" target="_blank" rel="noopener noreferrer" href=" <?php
                                                                                                  echo $variabel[$i]['WebPerusahaan'];
                                                                                                  ?>">
                          <?php
                          echo $variabel[$i]['WebPerusahaan'];
                          ?>
                        </a>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm transform duration-300 font-medium">
                      <a href="EditContent.php?id=<?php
                                                  echo $variabel[$i]['ID'];
                                                  ?>" class="no-underline text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm transform duration-300 font-medium">
                      <a id="deleteButt1" class="delete_student no-underline text-red-500 hover:text-red-700" data-student-id="<?php echo $variabel[$i]['ID']; ?>" href='javascript:void(0)'>Delete</a>
                    </td>
                  </tr>
              <?php
                }
              }else{
                ?>
                  <tr class="hover:bg-gray-200 active:bg-gray-200 group odd:bg-white odd:text-black even:bg-gray-200 even:text-gray-700 flex justify-center items-center w-full h-full" id="listing">
                     <td class="h-full w-full text-center" colspan="7">Tidak ada anggota yg ditemukan....</td>
                  </tr>
                <?php
              }
              ?>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <script src="Local/js/bootstrap.js"></script>
  <script src="Js.js"></script>
</body>

</html>