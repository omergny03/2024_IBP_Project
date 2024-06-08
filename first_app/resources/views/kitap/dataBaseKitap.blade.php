<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Kitap Tablosu</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                   
                    <th>ID</th>
                    <th>Kitap İsmi</th>
                    <th>Sayfa Sayısı</th>
                    <th>Kitap Türü</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($veri as $item)
                <tr>
                    
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kitap_ismi }}</td>
                    <td>{{ $item->sayfa_sayisi }}</td>
                    <td>{{ $item->kitap_turu }}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>