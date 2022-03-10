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
            <a class="nav-link activel border-b-2 border-transparent px-4 py-6 lg:hover:border-blue-600 md:hover:text-gray-700" aria-current="page" href="index.html">Beranda</a>
          </li>
          <li class="nav-item ml-2">
            <a class="nav-link border-b-2 border-transparent px-4 py-6 transform duration-300 lg:hover:border-blue-600 md:hover:text-gray-700" href="Struktur.html">Struktur</a>
          </li>
         
          <li class="nav-item ml-2">
            <a class="nav-link border-b-2 border-transparent px-4 py-6 transform duration-300 lg:hover:border-blue-600 md:hover:text-gray-700" href="Kegiatan.html">Kegiatan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
                      <!-- <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </div> -->
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
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
  <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="Local/js/DLAnggota.js"></script>
</body>

</html>