<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="{{ asset('script.js') }}"></script>
        <title>Laravel</title>
    </head>
    <body class="antialiased">
      <div class="content">
        <div class="columns">
          <div class="column">
            <input class="input" type="text" placeholder="Name" name="name">
          </div>
          <div class="column">
            <input class="input" type="text" placeholder="price from" name="price_from">
          </div>
          <div class="column">
            <input class="input" type="text" placeholder="price to" name="price_to">
          </div>
          <div class="column">
            <input class="input" type="text" placeholder="Bedrooms" name="bedrooms">
          </div>
          <div class="column">
            <input class="input" type="text" placeholder="Bathrooms" name="bathrooms">
          </div>
          <div class="column">
            <input class="input" type="text" placeholder="Storeys" name="storeys">
          </div>
          <div class="column">
            <input class="input" type="text" placeholder="Garages" name="garages">
          </div>
          <div class="column">
            <button class="button is-primary search">Search</button>
          </div>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th><abbr title="Name">Name</abbr></th>
              <th><abbr title="Price">Price</abbr></th>
              <th><abbr title="Bedrooms">Bedrooms</abbr></th>
              <th><abbr title="Bathrooms">Bathrooms</abbr></th>
              <th><abbr title="Storeys">Storeys</abbr></th>
              <th><abbr title="Garages">Garages</abbr></th>
            </tr>
          </thead>
          <tbody class="advs">
            <img class="loading" src="https://img.pikbest.com/png-images/20190918/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700"/>
          </tbody>
        </table>
      </div>
    </body>
</html>
