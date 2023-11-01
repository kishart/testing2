
@extends('layouts.navbar')
@section('content')

<style>
    .container{
        display: grid;
        justify-content: center;
        
        grid-template-columns: repeat(3,1fr);
    }
    .card{
        margin: 10px;
        
        background-color: #CD825B;
    }
     h5, p{
        text-align: center;
        color: white;
    }

    


#firstsection .main{
    width: 100%;
    height: 100vh;
    /* padding: 0 50px; */
}
#firstsection .main::after{
    content: "";
    position: absolute;
    height: 100vh;
    width: 100%;
}

#firstsection .carousel-item{
    overflow: hidden;
}

#firstsection .carousel-item img{
    width: 100%;
    height: 100vh;
}


#firstsection .welcomeline{
    position: absolute; 
    display: flex;
    height: 100vh;
    width: 100%;
    justify-content: center;
    align-items: center;
    z-index: 100;
}

#firstsection .husnie{
    font-size: 10px;
    font-weight: bold;
    font-family: 'Cookie', cursive;
    letter-spacing: 2px;
    line-height: 100px;
    padding: 5px;
}

#firstsection .photog{
    font-size: 10px;
    font-weight: bold;
    font-family: 'Cookie', cursive;
    letter-spacing: 2px;
    line-height: 100px;
    padding: 5px;
}
#firstsection .capture{
    font-size: 10px;
    font-weight: bold;
    font-family: 'Cookie', cursive;
    letter-spacing: 2px;
    line-height: 100px;
    padding: 5px;
}
</style>

<section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
  <div class="main">
      <div class="carousel-item active">
          <img class="carousel-image" src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/334001690_1259853777935398_3974334594917839606_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=2Z_xneQ1CocAX-CW2FD&_nc_ht=scontent.fozc1-1.fna&oh=00_AfBfOcmazUSPnP4n-XeSwmccHJSf-rZ1Z4hebulKKMQZ2Q&oe=6546733D">
      </div>
  

      <div class="welcomeline">
        <h1 class="husnie">Husnie</h1><br>
        <h1 class="photog">Photography</h1><br>
        <h1 class="capture">Capture Grea</h1>
      </div>


  </div>
</section>
  

<div class="card" style="width: 18rem;">
  <img src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/354602444_695747049230736_5534527285588015698_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DOkToZd33fIAX8CeDlg&_nc_ht=scontent.fozc1-1.fna&oh=00_AfATM0iVMx8BehvQvsXpsfrKgj3q2d2Jgk7paxQTC7eLUQ&oe=6547C435" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-white">Birthday</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark ">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/354602444_695747049230736_5534527285588015698_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DOkToZd33fIAX8CeDlg&_nc_ht=scontent.fozc1-1.fna&oh=00_AfATM0iVMx8BehvQvsXpsfrKgj3q2d2Jgk7paxQTC7eLUQ&oe=6547C435" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-white">Debut</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/354602444_695747049230736_5534527285588015698_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DOkToZd33fIAX8CeDlg&_nc_ht=scontent.fozc1-1.fna&oh=00_AfATM0iVMx8BehvQvsXpsfrKgj3q2d2Jgk7paxQTC7eLUQ&oe=6547C435" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Acquintance Party</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-dark">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/354602444_695747049230736_5534527285588015698_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DOkToZd33fIAX8CeDlg&_nc_ht=scontent.fozc1-1.fna&oh=00_AfATM0iVMx8BehvQvsXpsfrKgj3q2d2Jgk7paxQTC7eLUQ&oe=6547C435" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Graduation</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-dark">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/354602444_695747049230736_5534527285588015698_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DOkToZd33fIAX8CeDlg&_nc_ht=scontent.fozc1-1.fna&oh=00_AfATM0iVMx8BehvQvsXpsfrKgj3q2d2Jgk7paxQTC7eLUQ&oe=6547C435" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">Wedding</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-dark">Go somewhere</a>
    </div>
  </div>

<div class="card" style="width: 18rem;">
  <img src="https://scontent.fozc1-1.fna.fbcdn.net/v/t39.30808-6/354602444_695747049230736_5534527285588015698_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DOkToZd33fIAX8CeDlg&_nc_ht=scontent.fozc1-1.fna&oh=00_AfATM0iVMx8BehvQvsXpsfrKgj3q2d2Jgk7paxQTC7eLUQ&oe=6547C435" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-white">Other</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection
