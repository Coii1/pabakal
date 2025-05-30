<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="signUp-style.css">
</head>
<body>
  <main>
    <header>
        <nav id="logo"> 
            <img src="Img/Coffee-icon.png" alt="">
        </nav>
        
        <nav>
          <button class="open-button" id="openSignUp" onclick=openForm()>Sign up</button>          
        </nav>
    </header>
    
    <div class="signup-container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php"> <!--add onsubmit validate form-->
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="signin-container" id="signIn" style="display:none;">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>      
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <section class="LocationAPI">
        <h2>Where Should we deliver your Food?</h2>
        <p>Search your location to find nearby food options.</p>
        <div class="search-bar">
            <input type="text" placeholder="Search your location...">
            <button>Search</button>
        </div>
    </section>

    <section class="Restaurant-SignUp">
        <img src="Img/MiagaoChurch.jpg" alt="Miagao Church">
    </section>

    <section class="Food-Selection">
        <h2>Ano gusto mo kaonon?</h2>
        <div class="food-grid">
            <div class="food-card">
                <img src="Img/CoffeeCup.jpg" alt="Snacks">
                <p>Snacks</p>
            </div>
            <div class="food-card">
                <img src="Img/Chocolate.jpg" alt="Meals">
                <p><strong>Meals</strong><br><span>Kaon na ta!</span></p>
            </div>
            <div class="food-card">
                <img src="Img/Chocolate.jpg" alt="Dessert">
                <p>Dessert</p>
            </div>
        </div>
    </section>

    <section class="Shops">
        <h2>Diin mo gusto mag bakal?</h2>
        <div class="shop-grid">
          <div class="shop-item">
            <!-- ps. halin na sa fb ang Img src -->
            <img src="https://scontent.fcgy2-4.fna.fbcdn.net/v/t39.30808-6/302068729_456097433205339_1121063619204570159_n.jpg?_nc_cat=105&amp;ccb=1-7&amp;_nc_sid=6ee11a&amp;_nc_eui2=AeECkl9ZIuYSCbLhqrUjbu-DolM2jecTNQSiUzaN5xM1BHmbpFCUJTeCzB9Qn30ue6Kc24C_czMSzG7VtEF0MJFJ&amp;_nc_ohc=ZOVtAccaJAwQ7kNvwF1oGLk&amp;_nc_oc=AdnKyEMj3SvC_10qjT-E8cleCJBC8nY4H8Ad2hgAWrCOWZ_joPpCeNvm5Kyc0Zhsywg&amp;_nc_zt=23&amp;_nc_ht=scontent.fcgy2-4.fna&amp;_nc_gid=YXVC02lYGRKJbxVQlwPPCg&amp;oh=00_AfKNp4R78DesfiWiivJG38rZ9dymT1_4bq7cjFe8UDg0LA&amp;oe=68292D2A" alt="Kubo Resto">
            <p><strong>Kubo Resto</strong>is chuchuchu</p>
          </div>
          <div class="shop-item">
            <img src="https://scontent.fcgy2-2.fna.fbcdn.net/v/t39.30808-6/280529381_4526652207435039_8563210196956821114_n.jpg?_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=6ee11a&amp;_nc_eui2=AeFLqgW-PQ4wq-rhdgqX2L6de60L8DtWZiZ7rQvwO1ZmJiF5Z-gt2JCyKPMc4-W_mS_vYlWaWlhkOoQn13skhwjh&amp;_nc_ohc=bp70ZAeSZJsQ7kNvwHWXg4H&amp;_nc_oc=Admxy533Nn77UJLhDdl0iWRfFiyh8g0UvpxF-ScitBCQExdPlbY9oHtGq_7iH1iDCOU&amp;_nc_zt=23&amp;_nc_ht=scontent.fcgy2-2.fna&amp;_nc_gid=-rvlLfGRBcgt1BpYmlfU7g&amp;oh=00_AfJ_zXD9fJ85XQffBVp4UrlVPjvmdKrn73ycTyw_KqBoZQ&amp;oe=68294F4D" alt="Vinyard">
            <p><strong>Vinyard</strong> is a local restaurant in Miagao...</p>
          </div>
        </div>
      </section>

      <section class="Reviews">
        <h2>Reviews</h2>
        <div class="review-grid">
          <div class="review-card">
            <p>"Namit namit gidya"</p>
            <p>- Cedric</p>
          </div>
          <div class="review-card">
            <p>"Ugh kanamit"</p>
            <p>- Luis</p>
          </div>
          <div class="review-card">
            <p>"Shet isa pa"</p>
            <p>- Dale</p>
          </div>
        </div>
      </section>
      
      <section class="Footer-Section">
        <h2>Section heading</h2>
        <button>Button</button>
        <button class="secondary">Secondary button</button>
        <footer>
          <p>Site name</p>
          <div class="footer-links">
            <ul>
              <li>Ad</li>
              <li>Ad</li>
              <li>Ad</li>
            </ul>
            <ul>
              <li>Ad</li>
              <li>Ad</li>
              <li>Ad</li>
            </ul>
          </div>
        </footer>
      </section>
  </main>
  <script src="script.js"></script>
</body>
</html>
