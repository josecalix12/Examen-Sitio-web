<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Tienda Online - JnCodes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 2em;
        }

        .container {
            padding: 20px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-details {
            padding: 15px;
        }

        .product-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.2em;
            color: #f00;
            margin-bottom: 10px;
        }

        .btn-buy {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-buy:hover {
            background-color: #cc0000;
        }

        @media (max-width: 576px) {
            .product-title {
                font-size: 1.2em;
            }

            .product-price {
                font-size: 1em;
            }

            .btn-buy {
                padding: 8px 16px;
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        Claves - JnCodes
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://n1g.cl/Home/4726-home_default/windows-10-home.jpg" alt="Producto 1" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 10 Home</div>
                        <div class="product-price">$29.99</div>
                        <button class="btn-buy" onclick="location.href='producto1.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://ibericavip.com/146242-thickbox_default/windows-10-pro-64-bits.jpg" alt="Producto 2" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 10 Pro</div>
                        <div class="product-price">$39.99</div>
                        <button class="btn-buy" onclick="location.href='producto2.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://cdnx.jumpseller.com/keyxpress-colombia/image/44245898/resize/610/610?1704869625" alt="Producto 3" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 10 Enderprise</div>
                        <div class="product-price">$49.99</div>
                        <button class="btn-buy" onclick="location.href='producto3.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWSCEi?ver=f762&q=90&m=6&h=270&w=270&b=%23FFFFFFFF&f=jpg&o=f&aim=true" alt="Producto 4" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 11 Home</div>
                        <div class="product-price">$59.99</div>
                        <button class="btn-buy" onclick="location.href='producto4.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://imagenes.deltron.com.pe/images/productos/on-line/items/large/ms/fq/msfqc10553.jpg" alt="Producto 5" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 11 Pro</div>
                        <div class="product-price">$69.99</div>
                        <button class="btn-buy" onclick="location.href='producto5.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZrWMhvAylD1AxLpTYqAfuYP0qvOaFy_TnmA&s" alt="Producto 6" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 11 Enderprise</div>
                        <div class="product-price">$79.99</div>
                        <button class="btn-buy" onclick="location.href='producto6.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://www.sealevel.com/wp-content/uploads/2018/06/sw-win7.jpg" alt="Producto 7" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Windows 7 Pro</div>
                        <div class="product-price">$20.99</div>
                        <button class="btn-buy" onclick="location.href='producto7.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
