<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
  <link rel="stylesheet" href="Local/css/bootstrap.css" />
  <link rel="stylesheet" href="Local/css/Output.css" />
  <link rel="stylesheet" href="Local/css/style.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="img/Xcon" />
  <link rel="stylesheet" href="Local/css/DLAnggota.css">
  <title>Daftar List Anggota</title>
  <?php
  include 'connection.php';
  include 'ListAnggota.php';
  $variabel = GetListAnggota();
  // print_r($variabel);
  // exit();
  ?>
</head>

<body>
  <nav class="autohide navbar navbar-expand-lg navbar-light bg-white shadow-md" role="navigation" aria-labelledby="TopNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="w-20" src="img/LogoIsmi.png" alt="" />
      </a>
      <button class="navbar-toggler border-none shadow-none" onclick="OnOn()" id="ToggleButton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  
  <input type="text" id="myInput" placeholder="Lagi mau cari siapa ......" class="form-control"><br><br>

  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="flex flex-col pt-10">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full">
            <thead class="bg-white">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nomor Hp</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Lahir</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Perusahaan</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Produk</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Produk</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Web Perusahaan</th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>

            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php
              for ($i = 0; $i < count($variabel); $i++) {
              ?>
                <tr class="hover:bg-gray-300 group" id="listing">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div>
                        <div class="text-sm transform duration-300 font-medium font-Roboto group-hover:font-bold text-gray-900">
                          <?php
                          echo $variabel[$i]['Nama'];
                          ?>
                        </div>

                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div>
                      <div class="text-sm transform duration-300 text-gray-500 font-Roboto group-hover:font-bold">
                        <?php
                        echo $variabel[$i]['Email'];
                        ?>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm transform duration-300 text-gray-900 font-Roboto group-hover:font-bold">
                      <?php
                      echo $variabel[$i]['NoHp'];
                      ?>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm transform duration-300 text-gray-900 font-Roboto group-hover:font-bold">
                      <?php
                      echo $variabel[$i]['TglLahir'];
                      ?>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm transform duration-300 text-gray-900 font-Roboto group-hover:font-bold">
                      <?php
                      echo $variabel[$i]['Alamat'];
                      ?>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm transform duration-300 font-Roboto group-hover:font-bold">
                    <?php
                    echo $variabel[$i]['NamaPerusahaan'];
                    ?>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm transform duration-300 text-gray-900 font-Roboto group-hover:font-bold">
                      <?php
                      echo $variabel[$i]['NamaProduk'];
                      ?>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm transform duration-300 text-gray-900 font-Roboto group-hover:font-bold">
                      <?php
                      echo $variabel[$i]['JenisProduk'];
                      ?>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm transform duration-300 text-gray-900 font-Roboto group-hover:font-bold">
                      <a target="_blank" rel="noopener noreferrer" href=" <?php
                                                                          echo $variabel[$i]['WebPerusahaan'];
                                                                          ?>">
                        <?php
                        echo $variabel[$i]['WebPerusahaan'];
                        ?>
                      </a>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm transform duration-300 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900" type="button" data-modal-toggle="authentication-modal">Edit</a>
                  </td>
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
  <div id="authentication-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
            <div class="relative w-full max-w-lg h-full md:h-auto">
              <!-- Modal content -->
              <div class="relative bg-white md:rounded-lg shadow dark:bg-gray-700 top-2/4 -translate-y-2/4 mt-10 w-full xs:py-10 lg:py-0">
                <div class="flex justify-end p-2 xs:mt-20 md:mt-0">
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </div>
                <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-2 w-full" action="#">
                  <h3 class="text-xl font-medium text-gray-900 dark:text-white">Apa yang ingin anda Edit?</h3>
                  <div class="grid lg:grid-cols-2 gap-3 w-full xs:grid-cols-1">
                  <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                  </div>
                  <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                    <input type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                  </div>
                  </div>
                  <div class="grid lg:grid-cols-2 gap-3 w-full xs:grid-cols-1">
                  <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                  </div>
                  <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                    <input type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                  </div>
                  </div>
                  <div class="grid lg:grid-cols-2 gap-3 w-full xs:grid-cols-1">
                  <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                  </div>
                  <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                    <input type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                  </div>
                  </div>
                  <!-- <div class="flex justify-between">
                    <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                  </div> -->
                  <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                  <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
  <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <script src="Local/js/bootstrap.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="Local/js/DLAnggota.js"></script>
</body>

</html>