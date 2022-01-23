<!DOCTYPE html>
<html lang="en">
    <style>
        h1 {
            color: #000000;
            font-style: normal;
            font-weight: 500;
            letter-spacing: 4px;
            text-transform: uppercase;
        }
        p {
    /* font-family: "Lora", sans-serif; */
    font-size: 14px;
    line-height: 25px;
    font-weight: 300;
    font-style: italic;
    text-transform: none;
    color: #6d6d6d;
}
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WendieTDalberg</title>
    <!--CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body id="content">
    @include('Navbar')
      <div id="pic_container" class="container-fluid">
      <div class="mt-5 mb-2" style="text-align: center">
          <div>
            <img src="/images/johannes-plenio-RwHv7LgeC7s-unsplash.jpg" alt="image" height="25%" width="35%" style="border-radius: 2em;">
          </div>
      </div>
    </div>
    <div class="card-body mt-2" style="text-align: center">
        <h1 class="px-5">HELPING SMALL BUSINESSES ESTABLISH A BRAND IDENTITY</h1>
        <p class="px-5">We help you establish your brand and identity by creating beautiful, minimal and unique designs. Focusing on the small creative business owners, we create the perfect brand for you that will enhance your unique business. Working closely with you, knowing your story, we can help you grow and reach your target audience and make it stand out from the crowd.</p>
    </div>
</body>
<footer class="fixed-bottom text-center navbar-light text-lg-start" style="background: #d8c7a8;">
    <div class="text-center p-3">
      © 2022 Copyright
    </div>
  </footer>
</html>
