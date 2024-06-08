
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kitap Ekleme</title>
</head>
<body>
    @if (@session()->has('success'))
        <div class="alert alert-success" role="alert" style="border: 3px solid green ; background-color:green; width: 30% ; color: black">
         {{session('success')}}
        </div>
    @endif 
   
    <fieldset style="text-align: center; width: 30%">
        <legend>Yeni Kitap</legend>        
        <form action="{{route('kitapekle')}}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>
                        <label for="kitapismi">Kitap İsmi:</label>
                    </td>
                    <td style="width: 20px"></td>
                    <td>
                        <input type="text" name="kitapismi" id="kitapismi">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="sayfasayisi">Sayfa Sayısı:</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="number" name="sayfasayisi" id="sayfasayisi">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="kitapturu">Kitap Türü:</label>
                    </td>
                    <td></td>
                    <td>
                        <input type="text" name="kitapturu" id="kitapturu">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Kaydet</button>
                    </td>

                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>