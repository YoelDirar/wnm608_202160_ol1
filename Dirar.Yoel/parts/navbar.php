<!-- <script>
  const makeNav = (classes='') =>{
const links =['<a href="index.php">Home</a>', '<a href="product_list.php">Plants</a>', '<a href="learn.php">Learn</a>','<a href="product_checkout.php">Cart</a>' ]
let ran =Math.floor(Math.random()*links.length);
document.write(`
    <div>
    <nav class="${classes}">
        <ul>
        ${links.reduce((r,o,i)=>{
          return r+`<li class="${ran==i?'active':''}"><a href="product_list.php">${o}</a></li>`;
        },'')}
          
        </ul>
  
  </nav>

    </div>


  `);
  }                                                                                                             
</script> -->
<script>
  const makeNav = (classes='') =>{
const links =['<a href="index.php">Home</a>', '<a href="product_list.php">Plants</a>', '<a href="learn.php">Learn</a>','<a href="product_checkout.php">Cart</a>' ]
let ran =Math.floor(Math.random()*links.length);
document.write(`
    <div>
    <nav class="${classes}">
        <ul>
        ${links.reduce((r,o,i)=>{
          return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
        },'')}
          
        </ul>
  
  </nav>

    </div>


  `);
  }                                                                                                             
</script>

  </header> 

 <header class="navbar">
  <div class="container display-flex">
    <div class="flex-none">
     <a href="index.php"> PlanetPlants  </a>
    
    </div>
    <div class="flex-stretch"></div>
    <nav class=" nav nav-flex flex-none">
  
        <script>makeNav('nav nav-material')</script>

   

        </nav>
  </div>



</header> 

<script>
  $("#navigations a").on("click",function(e){
    e.preventDefault();
    $(this).closest("li").addClass("active")
    .siblings().removeClass("active")
  })
</script>

