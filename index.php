<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
</head>
<style>
    .div-1 {
        background-color: #d3302af5;
    }
    hr.new4 {
  border: 10px solid #ffa600;
}
</style>
<body style="background-color:rgb(241, 238, 202);">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">RECIPE</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Get all Recipes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                              
                              <div class="list-group">
                                <a href="Brunch.php" class="list-group-item list-group-item-action list-group-item-primary">Breakfast and Brunch recipe</a>
                                <a href="Dinner.php" class="list-group-item list-group-item-action list-group-item-success">Dinner recipe</a>
                                <a href="snack.php" class="list-group-item list-group-item-action list-group-item-danger">Snack recipe</a>
                              </div>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                          </li>
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="div-1">
                <div class="col" col-12 col-sm-6>
                 
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-photo/vegetables-set-left-black-slate_1220-685.jpg?size=626&ext=jpg&ga=GA1.2.507899289.1605708450" class="text-center" alt="Responsive image" style="height:fit;width:1200px;">
                      </div>
                      <div class="carousel-item">
                        <img src="https://blog.mindvalley.com/wp-content/uploads/rsz_shutterstock_1039586728-1200x600-c-default.jpg" class="text-center" alt="Responsive image" style="height:fit;width:1200px;">
                      </div>
                      <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/top-view-fast-food-mix-hamburger-doner-sandwich-chicken-nuggets-rice-vegetable-salad-chicken-sticks-caesar-salad-mushrooms-pizza-chicken-ragout-french-fries-mayo_141793-3997.jpg?size=626&ext=jpg" class="text-center" alt="Responsive image" style="height:fit;width:1200px;">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
                </div>
           </div>
           
        </div>
        <br>
        <div class="row">
            <hr class="new4">
            <figure class="text-center">
                <blockquote class="blockquote">
                  <p><h2><i>" A recipe has no soul.<br> 
                    You, as the cook,<br> 
                    must bring soul to the recipe.”</i></h2> </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Taste in india <cite title="Source Title">Source Title</cite>
                </figcaption>
              </figure>
    
        </div>
        <br><br>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F5355612.jpg&w=596&h=596&c=sc&poi=face&q=85" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Creamed Cabbage</h5>
                      <p class="card-text">This is yummy for St. Paddy's Day!, Its very healthy. Two min healthy idea</p>
                      <a href="CreamedCabage.html" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F8098649.jpg&q=85" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Spice Roasted Chicken Quarters</h5>
                      <p class="card-text">A simple yet flavourful chicken, with spice rub and a maple-mustard glaze. This pairs perfectly with herb roasted potatoes and corn.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F4478382.jpg&q=85" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Irish Tacos</h5>
                      <p class="card-text">We had these at an Irish Pub, they were to die for. A combination we thought wouldn't taste too good but all the patrons said it was the best thing on the menu, and they were right! Corned beef, coleslaw and sauce inside a flour tortilla.

                    </p>
                      <a href="IrishTacos.html" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>