
<?php
$p_id=$_GET['p_id'];
$con=mysqli_connect("localhost","root","","shop");
$query="select * from product where p_id='$p_id'";
$data=mysqli_query($con,$query);

$result= mysqli_fetch_assoc($data);


//===============add to cart===============
if(isset($_GET['add_to_cart']))
{
    
$cp_id=$_GET['cp_id'];
$cp_price = $_GET['cp_price'];
$cu_id = $_GET['cu_id'];
$qty = $_GET['qty'];
print_r($_GET);


$query="INSERT INTO temp_cart(qty,cp_price,cu_id,cp_product_id)values('$qty','$cp_price','$cu_id','$cp_id')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}



?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                    <img src="./admin/pic/<?php echo $result["p_img"];?>" class="card-img-top" alt="...">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "images/fro_pid_3504029_z.jpg"></div>
                        <div><img src = "images/fru_pid_2210539_z.jpg"></div>
                        <div><img src = "images/pdc_pid_2493290_z.jpg"></div>
                        <div><img src = "images/dai_pid_2005422_z.jpg"></div>
                        <div><img src = "images/win_pid_5004019_z.jpg"></div>
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name">Grillo's Pickles
                        Pickle Spears, Classic Dill</span>
                    <span class = "product-price">$ 50.25</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae animi ad minima veritatis dolore. Architecto facere dignissimos voluptate fugit ratione molestias quis quidem exercitationem voluptas.</p>
                    <form action="" method="get">
                    <input type="hidden" name="p_id" value="<?php echo $result['p_id'];?>">
                  QTY  <input type="number" name="qty">
                    P id <input type="text" name="cp_id" value="<?php echo $result['p_id'];?>">
                  price  <input type="text" name="cp_price" value="<?php echo $result['p_price'];?>">
                ip    <input type="text" name="cu_id"  value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                    

                    <input type="submit" name="add_to_cart" class = "add-cart-btn" value="add to cart">  
                        <div class = "btn-groups">
                        <button type = "submit" name="add_to_cart" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart </button>
               </form>
                
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="ta">
            <!-- Tab links -->
        <div class="tab">
            
            <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>
        
        <!-- Tab content -->
        <div id="Description" class="tabcontent">
            <h2>Description</h2>
            <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration words some form by injectedor randomized which don’t even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        </div>
        
        <div id="Reviews" class="tabcontent">
            <h2>Reviews</h2>
            <p>this  is the good of product.</p>
        </div>
        
        

    </div>

    <script src = "script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>