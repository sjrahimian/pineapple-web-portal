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
          <img src="thumbnail.jpg">
          <strong>
            PAS Library
          </strong><br />Pineapple Archives
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
        <div class="col1"><h3>About Pineapple Futurives</h3>
          <p>
          &emsp;&emsp;This speical purpose archive stores all the future information of pineapples on Pineappolis (you currently call it "Earth"). It has been sent back to you, the people of the past, to prepare you for the oncoming peace instigated by pineapples and Bora Bora. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar, justo tincidunt interdum consectetur, metus ipsum condimentum lorem, sed elementum neque ex at risus. Proin posuere condimentum venenatis. Aliquam metus risus, pharetra nec massa vel, vehicula malesuada tortor.
          <br /><br />&emsp;&emsp;Fusce sollicitudin ligula vel ullamcorper posuere. Vestibulum porttitor, ligula euismod ornare dignissim, velit felis fermentum lectus, sit amet pretium nisi felis ac dui. Nulla fringilla risus in enim elementum, ut posuere est tristique.
        </p>
        </div>
        <div class="col2"><h3>About Pineapple Library?</h3>
          <p>
          &emsp;&emsp;Sometime in the future (we can't tell you when) the world will be peacefully conquered by the what is currently known as Bora Bora, ushuring in ages upon ages of world of peace. Due to the years of peace, we come to realize the power and magnitude of pineapples as more than just foodstuff. The <i>Pineapple Agrarian Science (PAS) Library</i> was established shortly after, stores any information regarding to pineapples amassed throughout the ages.
          <br /><br />Sed et posuere sem, eget sollicitudin libero. Praesent eget enim ligula. Etiam mi urna, hendrerit vel ullamcorper ultricies, egestas vitae leo. Vivamus justo purus, fringilla ut dapibus ac, rhoncus eu dolor. Nullam sagittis sem metus, sit amet aliquet neque viverra ac. Donec rhoncus odio vitae hendrerit blandit. Sed scelerisque ligula et accumsan tincidunt.
          </p>

        </div>
      </div>
      <div>

        <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                    </table>


                    <script>
                      $(document).ready(function() {
                        $('#example').DataTable();
                      } );
                    </script>
      </div>

      <!-- Footer -->
      @include('layouts.footer')
    </body>
</html>
