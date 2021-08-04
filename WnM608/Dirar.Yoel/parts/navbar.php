<script>
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
</script>


<!-- <header class="navbar">
      <div class="container display-flex">
    <div class="flex-none">
    <h1>Styleguide OPTIONS</h1>
  
      </div>
  <div class="flex-stretch"></div>
   
    <ul class="container display-flex" >
      <li><a href="#tableofcontents">Table of Contents</a></li>
    </ul>
  </nav>
</div>

  

  </header> -->

 <header class="navbar">
  <div class="container display-flex">
    <div class="flex-none">
      <h1>PlanetPlants</h1>
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

