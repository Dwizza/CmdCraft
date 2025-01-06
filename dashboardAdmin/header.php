<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 w-full font-sans leading-normal tracking-normal">

  <!-- Sidebar -->
  <div class="flex">
    <aside class="w-72 h-screen text-white" style="background: linear-gradient(80deg,rgb(209, 18, 18),rgb(171, 2, 5),rgb(48, 0, 0))">
      <div class="p-6">
        <h1 class="text-2xl font-bold">Dashboard</h1>
      </div>
      <nav>
        <ul>
            <a href="../dashboardAdmin/index.php"><li class="p-4 hover:bg-[#300000]">Home</li></a>
            <a href="../dashboardAdmin/clientData.php"><li class="p-4 hover:bg-[#300000]">Client</li></a>
            <a href="../dashboardAdmin/addProduct.php"><li class="p-4 hover:bg-[#300000]">Add New Product</li></a>
            <a href="../dashboardAdmin/productData.php"><li class="p-4 hover:bg-[#300000]">All Product</li></a>
        </ul>
      </nav>
    </aside>
    <div class='w-full'>
      <header class="bg-white shadow-md p-4 w-full h-fit">
        <h2 class="text-xl font-semibold">Admin, Welcome </h2>
      </header>
    
  


