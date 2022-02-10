<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>test</title>
</head>

<body>
    <h1>array from controller</h1>

    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">key</th>
                <th scope="col">value</th> -->
                <th scope="col">name</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($array3 as $product)
            <tr>
                <!-- <td>{{--$key--}}</td>
                <td>{{--$value--}}</td> -->
                <td>{{$product->name;}}</td>
                <td>{{$product->description;}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>