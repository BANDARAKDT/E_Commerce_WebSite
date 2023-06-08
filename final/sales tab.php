<!DOCTYPE html>
<html>
<head>
<!--counter style-->
<!--sale counter-->

<title>Counter - Easy Tutorials</title>
    <link rel="stylesheet" href="sales tab.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>
<body>
<!--counter part-->
  <div class="hero">
        <div class="title">
            <h1>ABOUT STORE SALES</h1>
            <p>one of Sri Lanka's leading fashion and lifestyle chains with a network of 14 retail outlets located island-wide. With roots dating back to our establishment in 1994 in the hill town of Bandarawela, we have strengthened our presence across the local fashion retail landscape, rapidly expanding to provide lifestyle experiences with a fast-progressing, high demand retail market.</p>
        </div>

        <div class="row">
            <div class="col">
                <div class="counter-box">
                <i class="fa fa-gift" ></i>

                    <h2 class="counter">215,000</h2>
                    <h4>HOT SALES</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                <i class="fa fa-users"></i>

                    <h2 class="counter">1010</h2><span>k</span>
                    <h4>HAPPY CUSTOMERS</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                <i class="fa fa-book" ></i>

                    <h2 class="counter">25</h2>
                    <h4>BRANDS</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-globe"></i>
                    <h2 class="counter">10</h2>
                    <h4>OUTLETS</h4>
                </div>
            </div>
        </div>

    </div>

    <!--counter js part-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="jquery.counterup.min.js"></script>

  <script>
      jQuery(document).ready(function($) {
          $('.counter').counterUp({
              delay: 10,
              time: 1000
          });
      });

  </script>
</body>

</html>