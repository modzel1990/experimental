@extends('layouts.welcome')
@section('content')
  <!-- Content Container -->
  <div class="container">
    <div class="row">
  <div class="col-sm-2">

  </div>

  <div class="col-sm-8">
    <div class="pagetitle">
      <h3 class="rotate">Properties</h3>
    </div>
    <div class="row">
      <div class="contenttitle">
        <div class="row">

              <p>Feel free to discover variety of our properties, we are proud to be <span class="price">Number ONE</span> on the market with a set of luxurious & refurbished properties
              which will fit any demand, from single rooms to huge detached houses. Have a wonderful journey through our catalogue.</p>

        </div>
          <div class="search-bar">
            <label for="search"><i class="fab fa-searchengin fa-2x"></i></label>
            <input type="search" name="filter" id="search" value="" placeholder="Search for city.." />
          </div>
      <p> Adding option of MAP SEARCH would be desired too, I myself found it more comfortable to look for my property with the map </p>
    </div>
  </div>
    <!-- LEFT and RIGHT Container -->
    <div class="row pad">
      <!-- Images used to open the lightbox -->
 <div class="filterek" data-filter="Portsmouth">
   <img class="imgfit hover-shadow" src="http://media.rightmove.co.uk/dir/79k/78283/33621261/78283_DEY140581_IMG_00_0000_max_656x437.JPG" onclick="casegallery(1);openModal(1);currentSlide(1);refreshthumb()">
 </div>
 <div class="filterek overflowhid" data-filter="Portsmouth">
   <p>Spacious 3-bed detached house<br>Copnor Road<br>Portsmouth</p>
   <p>Price: <span class="price">650</span> ppm</p>
   <p><a href="/">Show on map</a></p>
      <div class="floatl absolute">
        <!-- Enquiry -->

          <div onclick="formchoice(5)" class="contact">Contact</div>

          <div id="contactForm5">

            <h1>Interested?</h1>
            <small>Get in touch and I will respond as quick as possible!</small>

            <form class="centerform" action="#">
              <input placeholder="Name" type="text" required />
              <input placeholder="Email" type="email" required />
              <input placeholder="Subject" type="text" required />
              <textarea placeholder="Comment"></textarea>
              <input class="formBtn" type="submit" />
              <input class="formBtn" type="reset" />
            </form>
          </div>

      </div>
 </div>
 <div class="filterek" data-filter="Manchester">
    <img class="imgfit hover-shadow" src="https://futureshg.co.uk/wp-content/uploads/2016/10/Futures-66.jpg" onclick="casegallery(2);openModal(2);currentSlide(1);refreshthumb()">
 </div>
 <div class="filterek overflowhid" data-filter="Manchester">
   <p>Shared 5-bed detached house<br>Winter Road<br>Manchester</p>
   <p>Price: <span class="price">900</span> ppm</p>
   <p><a href="/">Show on map</a></p>
      <div class="floatl absolute">
        <!-- Enquiry -->


          <div onclick="formchoice(6)" class="contact">Contact</div>

           <div id="contactForm6">

             <h1>Interested?</h1>
             <small>Get in touch and I will respond as quick as possible!</small>

             <form class="centerform" action="#">
               <input placeholder="Name" type="text" required />
               <input placeholder="Email" type="email" required />
               <input placeholder="Subject" type="text" required />
               <textarea placeholder="Comment"></textarea>
               <input class="formBtn" type="submit" />
               <input class="formBtn" type="reset" />
             </form>
           </div>

       </div>
 </div>


  <div class="filterek" data-filter="Lincoln">
        <img class="imgfit hover-shadow" src="https://lid.zoocdn.com/645/430/ddb9e14642576836576e2f3a28ecf598912cf809.jpg" onclick="casegallery(3);openModal(3);currentSlide(1);refreshthumb()">
  </div>
  <div class="filterek overflowhid" data-filter="Lincoln">
    <p>Double bedroom in 4-bed semi-detached house<br>Address: Albert Lane, Lincoln</p>
    <p>Price: <span class="price">90</span> ppw</p>
    <p><a href="/">Show on map</a></p>
    <div class="floatl absolute">
      <!-- Enquiry -->

        <div onclick="formchoice(7)" class="contact">Contact</div>

        <div id="contactForm7">

          <h1>Interested?</h1>
          <small>Get in touch and I will respond as quick as possible!</small>

          <form class="centerform" action="#">
            <input placeholder="Name" type="text" required />
            <input placeholder="Email" type="email" required />
            <input placeholder="Subject" type="text" required />
            <textarea placeholder="Comment"></textarea>
            <input class="formBtn" type="submit" />
            <input class="formBtn" type="reset" />
          </form>
        </div>

    </div>


  </div>
  <div class="filterek" data-filter="Portsmouth">
    <img class="imgfit hover-shadow" src="http://media.rightmove.co.uk/dir/crop/10:9-16:9/177k/176501/63480685/176501_4_295_IMG_01_0000_max_476x317.jpg" onclick="casegallery(4);openModal(4);currentSlide(1);refreshthumb()">
  </div>
  <div class="filterek overflowhid" data-filter="Portsmouth">
    <p>2-bed detached house<br>University Street<br>Portsmouth</p>
    <p>Price: <span class="price">500</span> ppm</p>
    <p><a href="/">Show on map</a></p>
    <div class="floatl absolute">
      <!-- Enquiry -->

        <div onclick="formchoice(8)" class="contact">Contact</div>

        <div id="contactForm8">

          <h1>Interested?</h1>
          <small>Get in touch and I will respond as quick as possible!</small>

          <form class="centerform" action="#">
            <input placeholder="Name" type="text" required />
            <input placeholder="Email" type="email" required />
            <input placeholder="Subject" type="text" required />
            <textarea placeholder="Comment"></textarea>
            <input class="formBtn" type="submit" />
            <input class="formBtn" type="reset" />
          </form>
        </div>

    </div>


  </div>


<!-- The Modal/Lightbox 1-->
<div id="1" class="modal">
 <span class="close cursor" onclick="closeModal(1)">&times;</span>
 <div class="modal-content">
   <div class="row">
   <div class="col-md-12">
     <div class="row">
     <div class="col-md-8">
       <div class="mod1 fade" class="mySlides">
         <div class="numbertext">1 / 4</div>
         <img src="http://www.aptmags.com/wp-content/uploads/2014/01/2014-Modern-Apartment-Design-Living-Room-and-Kitchen-Set.jpg" style="width:100%; max-height: 60vh;"></br>
       </div>

       <div class="mod1 fade" class="mySlides">
         <div class="numbertext">2 / 4</div>
         <img src="https://i.pinimg.com/736x/1d/bd/32/1dbd321aa618d0276d0a5263dab713d1--oscar-terrace.jpg" style="width:100%; max-height: 60vh;"></br>
       </div>

       <div class="mod1 fade" class="mySlides">
         <div class="numbertext">3 / 4</div>
         <img src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" style="width:100%; max-height: 60vh;"></br>
       </div>

       <div class="mod1 fade" class="mySlides">
         <div class="numbertext">4 / 4</div>
         <img src="http://www.moko3d.com/files/Projects/Visualisation%20of%20sea%20view%20property%20in%20Brighton%20Arundel/Period%20details%20like%20ceiling%20mouldings%20in%20this%20visualisation.jpg" style="width:100%; max-height: 60vh;"></br>
       </div>
       <!-- Next/previous controls -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>

       <!-- Caption text -->
       <div class="caption-container">
         <div class="row nopad">
           <div class="col-md-8 nopad">
             <p id="caption1"></p>
           </div>
           <div class="col-md-4 nopad">
             <!-- Enquiry -->
             <div class="floatr">

               <div onclick="formchoice(1)" class="contact">Contact</div>

               <div id="contactForm1">

                 <h1>Interested?</h1>
                 <small>Get in touch and I will respond as quick as possible!</small>

                 <form class="centerform" action="#">
                   <input placeholder="Name" type="text" required />
                   <input placeholder="Email" type="email" required />
                   <input placeholder="Subject" type="text" required />
                   <textarea placeholder="Comment"></textarea>
                   <input class="formBtn" type="submit" />
                   <input class="formBtn" type="reset" />
                 </form>
               </div>

             </div>

            </div>
          </div>
        </div>

      </div>
     <div class="col-md-4 pad">
       <div class="desccont">
      <h3>Description of Property</h3>
       <p>3-bed detached house fully furnished with outstanding investment possibilities</p>
       <p><i class="fas fa-bed"></i>  3 bedrooms</p>
       <p><i class="fas fa-venus-mars"></i> 2 toilets</p>
       <p><i class="fas fa-bath"></i> 1 bathroom</p>
       <p><i class="fab fa-envira"></i> 1 enormous living room</p>
       <p><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
       <p><i class="fas fa-money-bill-alt"></i> Price: <span class="price">170 000</span></p>
       <p><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>
      </div>
     </div>
   </div>


   </div>

<div class="col-md-12">
   <!-- Thumbnail image controls -->
   <div class="responsive1">
       <div>
         <img class="imgthumb1 imgthumbsize" src="http://www.aptmags.com/wp-content/uploads/2014/01/2014-Modern-Apartment-Design-Living-Room-and-Kitchen-Set.jpg" onclick="currentSlide(1)" alt="Description under picture">
       </div>

       <div>
         <img class="imgthumb1 imgthumbsize" src="https://i.pinimg.com/736x/1d/bd/32/1dbd321aa618d0276d0a5263dab713d1--oscar-terrace.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
       </div>

       <div>
         <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(3)" alt="Description under picture;Description under picture;Description under picture">
       </div>

       <div>
         <img class="imgthumb1 imgthumbsize" src="http://www.moko3d.com/files/Projects/Visualisation%20of%20sea%20view%20property%20in%20Brighton%20Arundel/Period%20details%20like%20ceiling%20mouldings%20in%20this%20visualisation.jpg" onclick="currentSlide(4)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
       </div>
     <!-- More thumbnail pictures -->
      <div>
        <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(5)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
      </div>
      <div>
        <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(6)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
      </div>
      <div>
        <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(7)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
      </div>
      <div>
        <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(8)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
      </div>
    </div>
  <!-- END more thumbnail pictures -->
  </div>

</div>
</div>
</div>
</div>

<!-- The Modal/Lightbox 2-->
<div id="2" class="modal">
 <span class="close cursor" onclick="closeModal(2)">&times;</span>
 <div class="modal-content">
   <div class="row">
   <div class="col-md-12">
     <div class="row">
     <div class="col-md-8">
       <div class="mod2 fade" class="mySlides">
         <div class="numbertext">1 / 2</div>
         <img src="http://cdclifestyle.com/wp-content/uploads/2011/10/luxury-property-show-home-interior.jpg" style="width:100%; max-height: 60vh;">
       </div>

       <div class="mod2 fade" class="mySlides">
         <div class="numbertext">2 / 2</div>
         <img src="http://vault.starproperty.my.s3.amazonaws.com/wp-content/uploads/2015/08/nu_4.jpg" style="width:100%; max-height: 60vh;">
       </div>
       <!-- Next/previous controls -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>

       <!-- Caption text -->
       <div class="caption-container">
         <div class="row nopad">
           <div class="col-md-8 nopad">
             <p id="caption2"></p>
           </div>
           <div class="col-md-4 nopad">
             <!-- Enquiry -->
             <div class="floatr">

               <div onclick="formchoice(2)" class="contact">Contact</div>

               <div id="contactForm2">

                 <h1>Interested?</h1>
                 <small>Get in touch and I will respond as quick as possible!</small>

                 <form class="centerform" action="#">
                   <input placeholder="Name" type="text" required />
                   <input placeholder="Email" type="email" required />
                   <input placeholder="Subject" type="text" required />
                   <textarea placeholder="Comment"></textarea>
                   <input class="formBtn" type="submit" />
                   <input class="formBtn" type="reset" />
                 </form>
               </div>

             </div>

            </div>
          </div>
        </div>

      </div>
     <div class="col-md-4 pad">
       <div class="desccont">
      <h3>Description of Property</h3>
       <p>3-bed detached house fully furnished with outstanding investment possibilities</p>
       <p><i class="fas fa-bed"></i>  3 bedrooms</p>
       <p><i class="fas fa-venus-mars"></i> 2 toilets</p>
       <p><i class="fas fa-bath"></i> 1 bathroom</p>
       <p><i class="fab fa-envira"></i> 1 enormous living room</p>
       <p><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
       <p><i class="fas fa-money-bill-alt"></i> Price: <span class="price">170 000</span></p>
       <p><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>
     </div>
     </div>
   </div>


   </div>

<div class="col-md-12">
   <!-- Thumbnail image controls -->
   <div class="responsive2">
       <div>
         <img class="imgthumb2 imgthumbsize" src="http://cdclifestyle.com/wp-content/uploads/2011/10/luxury-property-show-home-interior.jpg" onclick="currentSlide(1)" alt="Description under picture">
       </div>

       <div>
         <img class="imgthumb2 imgthumbsize" src="http://vault.starproperty.my.s3.amazonaws.com/wp-content/uploads/2015/08/nu_4.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
       </div>
  </div>


</div>
</div>
</div>
</div>

<!-- The Modal/Lightbox 3-->
<div id="3" class="modal">
 <span class="close cursor" onclick="closeModal(3)">&times;</span>
 <div class="modal-content">
   <div class="row">
   <div class="col-md-12">
     <div class="row">
     <div class="col-md-8">
       <div class="mod3 fade" class="mySlides">
         <div class="numbertext">1 / 3</div>
         <img src="http://stoneintl.net/wp-content/uploads/2017/05/The-Best-Kitchen-Cabinets.jpg" style="width:100%; max-height: 60vh;">
       </div>

       <div class="mod3 fade" class="mySlides">
         <div class="numbertext">2 / 3</div>
         <img src="https://mr3.homeflow-assets.co.uk/files/site_asset/image/3475/6318/_x_/PUT170080_05.jpg" style="width:100%; max-height: 60vh;">
       </div>

       <div class="mod3 fade" class="mySlides">
         <div class="numbertext">3 / 3</div>
         <img src="https://i.pinimg.com/originals/47/22/a5/4722a5e8b1f1c10f7887e29a0f6b93eb.jpg" style="width:100%; max-height: 60vh;">
       </div>
       <!-- Next/previous controls -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>

       <!-- Caption text -->
       <div class="caption-container">
         <div class="row nopad">
           <div class="col-md-8 nopad">
             <p id="caption3"></p>
           </div>
           <div class="col-md-4 nopad">
             <!-- Enquiry -->
             <div class="floatr">

               <div onclick="formchoice(3)" class="contact">Contact</div>

               <div id="contactForm3">

                 <h1>Interested?</h1>
                 <small>Get in touch and I will respond as quick as possible!</small>

                 <form class="centerform" action="#">
                   <input placeholder="Name" type="text" required />
                   <input placeholder="Email" type="email" required />
                   <input placeholder="Subject" type="text" required />
                   <textarea placeholder="Comment"></textarea>
                   <input class="formBtn" type="submit" />
                   <input class="formBtn" type="reset" />
                 </form>
               </div>

             </div>

            </div>
          </div>
        </div>

      </div>
     <div class="col-md-4 pad">
       <div class="desccont">
      <h3>Description of Property</h3>
       <p>3-bed detached house fully furnished with outstanding investment possibilities</p>
       <p><i class="fas fa-bed"></i>  3 bedrooms</p>
       <p><i class="fas fa-venus-mars"></i> 2 toilets</p>
       <p><i class="fas fa-bath"></i> 1 bathroom</p>
       <p><i class="fab fa-envira"></i> 1 enormous living room</p>
       <p><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
       <p><i class="fas fa-money-bill-alt"></i> Price: <span class="price">170 000</span></p>
       <p><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>
     </div>
     </div>
   </div>


   </div>

<div class="col-md-12">
   <!-- Thumbnail image controls -->
   <div class="responsive3">
       <div>
         <img class="imgthumb3 imgthumbsize" src="http://stoneintl.net/wp-content/uploads/2017/05/The-Best-Kitchen-Cabinets.jpg" onclick="currentSlide(1)" alt="Description under picture">
       </div>

       <div>
         <img class="imgthumb3 imgthumbsize" src="https://mr3.homeflow-assets.co.uk/files/site_asset/image/3475/6318/_x_/PUT170080_05.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
       </div>

       <div>
         <img class="imgthumb3 imgthumbsize" src="https://i.pinimg.com/originals/47/22/a5/4722a5e8b1f1c10f7887e29a0f6b93eb.jpg" onclick="currentSlide(3)" alt="Description under picture;Description under picture">
       </div>
  </div>


</div>
</div>
</div>
</div>

<!-- The Modal/Lightbox 4-->
<div id="4" class="modal">
 <span class="close cursor" onclick="closeModal(4)">&times;</span>
 <div class="modal-content">
   <div class="row">
   <div class="col-md-12">
     <div class="row">
     <div class="col-md-8">
       <div class="mod4 fade" class="mySlides">
         <div class="numbertext">1 / 2</div>
         <img src="http://www.suncityvillas.com/server13-cdn/2015/10/09/bathroom-ceiling-design-room-ceiling-design-99c38376887f449b.jpg" style="width:100%; max-height: 60vh;">
       </div>

       <div class="mod4 fade" class="mySlides">
         <div class="numbertext">2 / 2</div>
         <img src="https://content.makaan.com/16/3715550/274/9812848.jpeg?width=665&height=415" style="width:100%; max-height: 60vh;">
       </div>
       <!-- Next/previous controls -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>

       <!-- Caption text -->
       <div class="caption-container">
         <div class="row nopad">
           <div class="col-md-8 nopad">
             <p id="caption4"></p>
           </div>
           <div class="col-md-4 nopad">
             <!-- Enquiry -->
             <div class="floatr">

               <div onclick="formchoice(4)" class="contact">Contact</div>

               <div id="contactForm4">

                 <h1>Interested?</h1>
                 <small>Get in touch and I will respond as quick as possible!</small>

                 <form class="centerform" action="#">
                   <input placeholder="Name" type="text" required />
                   <input placeholder="Email" type="email" required />
                   <input placeholder="Subject" type="text" required />
                   <textarea placeholder="Comment"></textarea>
                   <input class="formBtn" type="submit" />
                   <input class="formBtn" type="reset" />
                 </form>
               </div>

             </div>

            </div>
          </div>
        </div>

      </div>
     <div class="col-md-4 pad">
       <div class="desccont">
      <h3>Description of Property</h3>
       <p>3-bed detached house fully furnished with outstanding investment possibilities</p>
       <p><i class="fas fa-bed"></i>  3 bedrooms</p>
       <p><i class="fas fa-venus-mars"></i> 2 toilets</p>
       <p><i class="fas fa-bath"></i> 1 bathroom</p>
       <p><i class="fab fa-envira"></i> 1 enormous living room</p>
       <p><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
       <p><i class="fas fa-money-bill-alt"></i> Price: <span class="price">170 000</span></p>
       <p><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>
     </div>
     </div>
   </div>


   </div>

<div class="col-md-12">
   <!-- Thumbnail image controls -->
   <div class="responsive4">
       <div>
         <img class="imgthumb4 imgthumbsize" src="http://www.suncityvillas.com/server13-cdn/2015/10/09/bathroom-ceiling-design-room-ceiling-design-99c38376887f449b.jpg" onclick="currentSlide(1)" alt="Beautiful and full of space living room.">
       </div>

       <div>
         <img class="imgthumb4 imgthumbsize" src="https://content.makaan.com/16/3715550/274/9812848.jpeg?width=665&height=415" onclick="currentSlide(2)" alt="Fully supplied with white goods, large kitchen with entrance to the garden.">
       </div>
  </div>


</div>
</div>
</div>
</div>
</div>
<!-- END OF MODAL GALLERIES -->

    </div>
    <div class="col-sm-2">

    </div>
    <!-- END MIDDLE CONTENT TEXT -->
  </div>
  <div class="row">
         <div class="col-sm-12 parallex">
           <a href="http://www.google.co.uk"><img src=" " alt="?????">Click-able image (link), simple image or parallex</a>
         </div>
  </div>
  </div>
  <!-- End Content Container -->
@endsection
