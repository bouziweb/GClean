<template>
  <div id="navbar">
      <header>
          <div class="contianer-fluid">
              <div class="row">
                  <div class=" col-sm-12 col-md-3">
                    <div class="head">
                        <img src="storage/logo/logo.png" alt="">
                        <span> </span>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-3 col-lg-3 d-none d-sm-none d-md-block d-lg-block">
                     <div class="head">
                         <i class="fas fa-map-marker-alt"></i> <span>5604 Willow Crossing Ct,
                      Clifton, VA, 20124</span>
                     </div>

                  </div>
                  <div class="col-sm-4 col-md-3 col-lg-3 d-none d-sm-none d-md-block d-lg-block">
                    <div class="head">
                          <i class="far fa-comments"></i><span><strong>NEED SUPPORT?</strong>
                    Support@yoursite.com</span>
                    </div>
                
                  </div>
                  <div class="col-sm-4 col-md-3 col-lg-3 d-none d-sm-none d-md-block d-lg-block">
                      <div class="head">
                        <span>  <strong> CALL US ON:</strong><br>
                           <span class="num">800-123-4567</span></span>
                      </div>
                     
                  </div>
              </div>
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                </ul>
                <span class="navbar-text">
                   <a class="nav-link" href="#"><button class="btn btn-outline-primary  my-2 my-sm-0">GET AN ESTIMATE</button></a>

                </span>
            </div>
            </nav>
          </div>
       
      </header>
       
  </div>
</template>
      <script src="https://use.fontawesome.com/92845346ed.js"></script>

<script>
export default {
    
}
</script>

<style lang="scss">
$iconColor:#C33C54;
$textColor:#AEF3E7;



#navbar{


header{

    top: 0;
    z-index:9999;
    width: 100%;
    min-height:160px;

    position: fixed;
    background-color: #254E70;
    
    
   .head{
       display: inline-flex;
         i{
            color:$iconColor;
            font-size: 35px;
            padding:0 10px;

        }
    
        span{
            font-weight: bold;
            color: $textColor;
            .num{
                font-size: 30px;
                color: $iconColor;
            }
        
        }
   }

   nav{
  
    margin-top:3em;
    height: 50px;
    min-width: 100%;
    bottom:0;
    margin-bottom: 0;
    z-index: 9999 !important;
    background-color: rgb(255, 255, 255) !important;
    ul{
        text-align: center;
        padding: 0px 10%;
        li{
            margin: 3px 25px;
            a{
                color: rgb(3, 3, 3) !important;
                
                padding: 0;
                font-size: 16px;
                line-height: 20px;
                font-weight: 700;
                font-family: 'Fira Sans', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
                font-weight: bold;
                font-style: normal;
                text-transform: uppercase;
                .navlink{padding:0;}
                .btn-outline-primary{
                    color: $textColor;
                    outline-color: $textColor;
                    border-color: $textColor;
                    padding-top: -9px;
                    
                }
            }
        }
    }
}

}


}



</style>