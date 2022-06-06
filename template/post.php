      <div class="col-md-12 p-0 text-center">
        <?php 
            print '<img class="img-fluid" width="100%" alt="'.$title.'" src="'.$cover.'"/>' ; 
         ?>
       </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2 p-3 p-md-5">
                <?php 
                    print '
                    <h1><a  class="php" href="'.$baseurl.'"> '.$title.' </a></h1> 
                    <h3> '.$description.' </h3>
                    <p> '.$content.' </p>
                    <p> '.$content1.' </p>
                    <p> '.$content2.' </p>
                ' ; ?>
        </div>