<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{ config(['app.name' => 'PAS Library']) }}
        <title>{{ config('app.name') }}</title>

        <!-- Fonts & Icons -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


    </head>
    <body>
      <div class="flex-center full-height" role="form">

        <div class="title">
          <strong>&#x1F34D; PAS Library</strong><br />Pineapple Futurives
        </div>

        <form class="container" action="/search" method="get">
          <!-- @csrf -->
          <div class="col-75">
            <input type="text" name="q" placeholder="S E A R C H . . .">
          </div>

          <div class = "col-25">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>

      </div>
      <div class="intro">
        <div class="flexing">
        <div class="col1">
          <h3>&#127821;About Pineapple Library?</h3>
          <p>&emsp;&emsp;Sometime in the future (we can't tell you when) the world will be peacefully conquered by the what is currently known as Bora Bora, ushuring in ages upon ages of world of peace. Due to the years of peaceful warfar as Bora Bora expanded and conquered, scinentific research pushed the boundries of the primitive science that you call "contemporary science" and developed the power and magnitude of pineapples as more than just foodstuff. The <i>Pineapple Agrarian Science (PAS) Library</i> was established shortly after</p>
          <p>&emsp;&emsp;We store any information that is related to pineapples amassed throughout the ages.</p>

          <h3>&#127821;What have Pineapples done?</h3>
          <p>&emsp;&emsp;They provide 90% of the worlds supply of fuel, terriestrial and in outerspace. Technology is built on pineapple hardware and software, with latter being developed using pineapple design systems.</p>
        </div>
        <div class="col2">
          <h3>&#x1F34D;About Pineapple Futurives</h3>
          <p>&emsp;&emsp;This speical purpose archive stores all the future information of pineapples on Pinearth (you currently call it "Earth"). It has been sent back to you, the people of the past, to prepare you for the oncoming peace instigated by pineapples and Bora Bora.</p>

          <h3>&#x1F34D;What is "Futurives"?</h3>
          <p>&emsp;&emsp;Futurives are future archives. Ya tomato? (It's offenseive, as tangerines have been scientifically proven to be the stupdist of all fruit, and why it's only put into a salad).</p>


        </div>
        </div>
      </div>


      <!-- Footer -->
      @include('layouts.footer')
    </body>
</html>
