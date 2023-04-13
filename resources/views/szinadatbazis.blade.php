<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Táblázat</title>
</head>
<body>
    <h1>Labda szín válogató adattáblázt</h1>

    @foreach ($labdaszin as $item)
    <table>
        <tr {{ $item->sz_id}}> 
            <td>     
                {{$item->szinek}}
            </td> 
        
            <td>
                {{$item->darab}}
            </td> 
       
            <td>
                {{$item->datum}}
            </td> 
        </tr>
    </table>
    @endforeach
    

</body>
</html>