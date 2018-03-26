@extends('layouts.welcome')
@section('content')
  <!-- Content Container -->
  <div class="container">
    <div class="row">
  <div class="col-sm-2">

  </div>

  <div class="col-sm-8">
    <div class="pagetitle">
    <h3 class="rotate">Blog</h3>
    </div>

    <!-- LEFT and RIGHT Container -->
    <div class="row contenttitle">
      <h5>Let us introduce a brand new property for sale!</h5>
    </div>
      <div class="row">
        <div class="col-sm-4 left-side">

             <img class="imgfit hover-shadow" src="https://prolet.co.uk/wp-content/uploads/2015/08/2407195_xl.jpg" alt="brand-new-house" onclick="casegallery(1);openModal(1);currentSlide(1)">

        </div>
        <div class="col-sm-8 blog">
            <p>This Spacious 3-bed detached house is situated in Portsmouth. Great views, close to seafront, every component of the house is brand new, including interior. We came in possesion
              of this property thanks to our investor NAME.</p>
            <p>Open for viewing: 14th of March 2018<br>Hours: 8:00-20:00</p>
            <p>Portsmouth<br>Copnor Road</p>
            <p><a href="/">Show on map</a></p>

            <!-- The Modal/Lightbox 1-->
            <div id="1" class="modal">
             <span class="close cursor" onclick="closeModal(1)">&times;</span>
             <div class="modal-content">

               <div class="mod1 fade" class="mySlides">
                 <div class="numbertext">1 / 4</div>
                 <img src="http://www.aptmags.com/wp-content/uploads/2014/01/2014-Modern-Apartment-Design-Living-Room-and-Kitchen-Set.jpg" style="width:100%; max-height: 60vh;">
               </div>

               <div class="mod1 fade" class="mySlides">
                 <div class="numbertext">2 / 4</div>
                 <img src="https://i.pinimg.com/736x/1d/bd/32/1dbd321aa618d0276d0a5263dab713d1--oscar-terrace.jpg" style="width:100%; max-height: 60vh;">
               </div>

               <div class="mod1 fade" class="mySlides">
                 <div class="numbertext">3 / 4</div>
                 <img src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" style="width:100%; max-height: 60vh;">
               </div>

               <div class="mod1 fade" class="mySlides">
                 <div class="numbertext">4 / 4</div>
                 <img src="http://www.moko3d.com/files/Projects/Visualisation%20of%20sea%20view%20property%20in%20Brighton%20Arundel/Period%20details%20like%20ceiling%20mouldings%20in%20this%20visualisation.jpg" style="width:100%; max-height: 60vh;">
               </div>

               <!-- Next/previous controls -->
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>

               <!-- Caption text -->
               <div class="caption-container">
                 <div class="row">
                   <div class="col-sm-8">
                     <p id="caption1"></p>
                   </div>
                   <div class="col-sm-4">
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

               <!-- Thumbnail image controls -->
               <div class="scroll">
                 <div class="row pad">
                   <div class="col-sm-3">
                     <img class="imgthumb1 imgthumbsize" src="http://www.aptmags.com/wp-content/uploads/2014/01/2014-Modern-Apartment-Design-Living-Room-and-Kitchen-Set.jpg" onclick="currentSlide(1)" alt="Description under picture">
                   </div>

                   <div class="col-sm-3">
                     <img class="imgthumb1 imgthumbsize" src="https://i.pinimg.com/736x/1d/bd/32/1dbd321aa618d0276d0a5263dab713d1--oscar-terrace.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
                   </div>

                   <div class="col-sm-3">
                     <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(3)" alt="Description under picture;Description under picture;Description under picture">
                   </div>

                   <div class="col-sm-3">
                     <img class="imgthumb1 imgthumbsize" src="http://www.moko3d.com/files/Projects/Visualisation%20of%20sea%20view%20property%20in%20Brighton%20Arundel/Period%20details%20like%20ceiling%20mouldings%20in%20this%20visualisation.jpg" onclick="currentSlide(4)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                   </div>
                 </div>
                 <!-- More thumbnail pictures
                 <div class="row pad">
                  <div class="col-sm-3">
                    <img class="imgthumb1 imgthumbsize" src="" onclick="currentSlide(5)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                  </div>
                  <div class="col-sm-3">
                    <img class="imgthumb1 imgthumbsize" src="" onclick="currentSlide(6)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                  </div>
                  <div class="col-sm-3">
                    <img class="imgthumb1 imgthumbsize" src="" onclick="currentSlide(7)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                  </div>
                  <div class="col-sm-3">
                    <img class="imgthumb1 imgthumbsize" src="" onclick="currentSlide(8)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                  </div>
                </div>
               END more thumbnail pictures -->
              </div>
            </div>
            </div>
            <!-- END MODAL BOX 1 -->
          </div>
        </div>
      </div>
      <!-- LEFT and RIGHT Container -->
      <div class="row contenttitle">
        <h5>Subject of the NEWS</h5>
      </div>
        <div class="row">
          <div class="col-sm-4 left-side">

               <p>ICONS OR PICTURES</p>

          </div>
          <div class="col-sm-8 blog">

              <p>SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS;
              SOME RANDOM NEWS; SOME RANDOM NEWS ;SOME RANDOM NEWS SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS; SOME RANDOM NEWS;</p>

          </div>
        </div>
    </div>
    <div class="col-sm-2">

    </div>
    <!-- END MIDDLE CONTENT TEXT -->
  </div>
  <div class="row">
         <div class="col-sm-12 parallex">
           <a href="http://www.google.co.uk"><img src="/wp-content/uploads/flamingo.jpg" alt="?????">Click-able image (link), simple image or parallex</a>
         </div>
  </div>
  </div>

  <!-- End Content Container -->
@endsection
