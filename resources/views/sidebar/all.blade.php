@php
    use App\Models\Products;

    $products = Products::orderBy('id')->get();
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mySlides {
            display: none;
        }
    </style>
</head>

<body>
    <article id="main">
        <div class="col-6 col-12-narrower">
            <h2 class="w3-center">Manual Slideshow</h2>

            <div class="w3-content w3-display-container">
                @foreach ($products as $product)
                    <section>

                        <img class="mySlides" src="{{ 'storage/' . $product->image }}">
                @endforeach
                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
            <div class="col-6 col-12-narrower">
    </article>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>

</a>
