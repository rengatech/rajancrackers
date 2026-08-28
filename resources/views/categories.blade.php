<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Price List</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            margin: 0;
            padding: 10px;
        }

        .container {
            border: 3px solid #1a1a6e;
            padding: 5px;
        }

        .inner-container {
            border: 1px solid #1a1a6e;
            padding: 0;
            position: relative;
        }

        .header {
            text-align: center;
            padding: 15px 10px;
            position: relative;
        }

        .logo {
            height: 90px;
            margin-bottom: 5px;
        }

        .address-block {
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 4px;
        }

        .contact-links {
            color: #1a1a6e;
            font-weight: bold;
            font-size: 11px;
            margin-bottom: 4px;
        }

        .dealers {
            font-size: 11px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .cell-no {
            font-size: 15px;
            font-weight: bold;
            color: #cc0000;
            margin-bottom: 8px;
        }

        .price-list-title {
            font-size: 16px;
            font-weight: bold;
            color: #1a1a6e;
            margin-top: 10px;
            text-decoration: underline;
        }

        .validity-note {
            font-size: 10px;
            color: #cc0000;
            font-weight: bold;
            text-align: center;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-top: 2px solid #1a1a6e;
        }

        table,
        th,
        td {
            border: 1px solid #1a1a6e;
        }

        th,
        td {
            padding: 5px;
            font-size: 11px;
        }

        th {
            background-color: #1a1a6e;
            color: #ffffff;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        td {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .category-heading {
            font-weight: bold;
            text-align: center;
            background-color: #cc0000;
            color: #ffffff;
            font-size: 12px;
        }
        
        .date-block {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 10px;
            font-weight: bold;
            color: #1a1a6e;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inner-container">
            <div class="header">
                @php
                    $logoPath = public_path('assets/img/rajan.logo.jpg');
                    if (file_exists($logoPath)) {
                        $logoData = base64_encode(file_get_contents($logoPath));
                    } else {
                        $logoData = '';
                    }
                @endphp
                @if($logoData)
                    <img src="data:image/jpeg;base64,{{ $logoData }}" alt="Rajan Crackers Logo" class="logo">
                @endif
                
                <div class="date-block">Date : {{ date('d-m-Y') }}</div>
                
                <div class="address-block">
                    3/268/C, Sivakasi to Sattur Main Road, Chinnakamanpatti, Virudhunagar, TamilNadu-626189
                </div>
                
                <div class="contact-links">
                    rajancrackers.com // mjkkalirajan880@gmail.com
                </div>

                <div class="dealers">
                    Dealers In All Kinds Of Crackers, Sparklers, Fancy Varieties & Gift Boxes -- Wholesale & Retail Sales
                </div>

                <div class="cell-no">
                    CELL NO : 8925208343, 8807944578
                </div>

                <div class="price-list-title">
                    CUSTOMER PRICE LIST &mdash; {{ strtoupper(date('F Y')) }}
                </div>
            </div>

            <div class="validity-note">
                Note: This price list is valid only for 3 days from the date of generation.
            </div>

            <!-- Product Table -->
            <table>
                <thead>
                    <tr>
                        <th style="width: 8%;">S.NO</th>
                        <th style="width: 42%;">CRACKERS NAME</th>
                        <th style="width: 15%;">Box / Pkt</th>
                        <th style="width: 15%;">90% DisPrice</th>
                        <th style="width: 8%;">Qty</th>
                        <th style="width: 12%;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $slNo = 1;
                    @endphp

                    @foreach($categories as $category)
                    <tr>
                        <td colspan="6" class="category-heading">{{ strtoupper($category->category) }}</td>
                    </tr>

                    @foreach($category->products as $product)
                    <tr>
                        <td class="text-center">{{ $slNo++ }}</td>
                        <td>{{ $product->name }}</td>
                        <td class="text-center">{{ strip_tags($product->description) }}</td>
                        <td class="text-center">{{ number_format($product->price, 2) }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>