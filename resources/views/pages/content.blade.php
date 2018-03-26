@extends('layouts.welcome')
@section('content')
<!-- Content Container -->
<div class="container">
  <div class="row">
<div class="col-sm-2">

</div>

<div class="col-sm-8">
  <div class="pagetitle">
  <h3 class="rotate">Newest Properties</h3>
  </div>
  <!-- LEFT and RIGHT Container -->
 <div class="row">
  <div class="col-sm-6 left-side">
            <div class="row">
            <div class="col-sm-6 picturebox">
               <img class="imgfit hover-shadow" src="http://media.rightmove.co.uk/dir/79k/78283/33621261/78283_DEY140581_IMG_00_0000_max_656x437.JPG" onclick="casegallery(1);openModal(1);currentSlide(1)">
          </div>
            <div class="col-sm-6 textbox">
              <p>Spacious 3-bed detached house<br>Copnor Road<br>Portsmouth</p>
              <p>Price: <span class="price">650</span> ppm</p>
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
  <div class="col-sm-6 right-side">

    <div class="row">
    <div class="col-sm-6 picturebox">
       <img class="imgfit hover-shadow" src="https://futureshg.co.uk/wp-content/uploads/2016/10/Futures-66.jpg" onclick="casegallery(2);openModal(2);currentSlide(1)">
  </div>
    <div class="col-sm-6 textbox">
      <p>Shared 5-bed detached house<br>Winter Road<br>Manchester</p>
      <p>Price: <span class="price">900</span> ppm</p>
      <p><a href="/">Show on map</a></p>

      <!-- The Modal/Lightbox 2-->
      <div id="2" class="modal">
       <span class="close cursor" onclick="closeModal(2)">&times;</span>
       <div class="modal-content">

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
           <div class="row">
             <div class="col-sm-8">
               <p id="caption2"></p>
             </div>
             <div class="col-sm-4">
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

         <!-- Thumbnail image controls -->
         <div class="scroll">
           <div class="row pad">
             <div class="col-sm-3">
               <img class="imgthumb2 imgthumbsize" src="http://cdclifestyle.com/wp-content/uploads/2011/10/luxury-property-show-home-interior.jpg" onclick="currentSlide(1)" alt="Description under picture">
             </div>

             <div class="col-sm-3">
               <img class="imgthumb2 imgthumbsize" src="http://vault.starproperty.my.s3.amazonaws.com/wp-content/uploads/2015/08/nu_4.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
             </div>

           </div>
         </div>
       </div>
      </div>
      <!-- END MODAL BOX 2 -->
  </div>
</div>
  </div>
</div>

  <!-- END LEFT and RIGHT Container -->
  <!-- MIDDLE CONTENT TEXT -->
  <div class="row">
  <div class="middlecontent">
    <div class="pagetitle">
    <h3 class="rotate">What exactly is HM<i class="far fa-question-circle "></i></h3>
    </div>
      <div class="contpad">
        <p>A HMO is a house occupied by more than 2 qualifying persons, being persons who are not all members of the same family.
          A “qualifying person” is a person whose only or principal place of residence is the HMO. A student’s term time accommodation is regarded as the student’s only or principal place of residence while he/she is living there.
          You are considered to be a member of the same family if you are the spouse (or you live together as husband and wife), civil partner (or you live together as if you are civil partners), parent, grandparent, child, grandchild, brother/sister, uncle/aunt, nephew/niece of the other person.
          <br><br>
          The following categories are exempt from registration:
          <ul>
            <li>any HMO which is occupied by persons who comprise no more than two families</li>
            <li>any HMO which is occupied by no more than two persons in addition to the owner (or owners) and members of the family (or families) of owner(s).</li>
          </ul>
        </p>
      </div>
  </div>
</div>
<div class="row">
  <div class="middlecontent">
    <div class="pagetitle">
    <h3 class="rotate">Concept of investing</h3>
    </div>
    <div class="row contpad">
      <div class="col-sm-4">
      <img class="pic" src="/img/bulbprop.jpg" alt="bulbproperty">
    </div>
      <div class="col-sm-8">
        <p>Many HMO and multi-let investors make fantastic rental returns on their property, compared to a typical single-let rental income.
          The UK market often sees gross rental yields of <span class="price">12-15%</span> achieved, with some investors hitting <span class="price">20%-plus</span><br>

          HMO rental yields are as much as three times higher than more traditional buy-to-lets.</p>
        <p>HMOs offer a less risky option to investors for several reasons. Here are three of the best ones:<br>
          <ol>
          <li>Rooms are usually tenanted quickly due to
          high demand for affordable housing in the UK</li>

          <li>A tenant moving out doesn’t spell disaster as the landlord still generates
          income from the remaining tenants</li>

          <li>HMO units are smaller than apartments, meaning what would be 3 apartments could be a 4- or 5-bedroom HMO generating a
          higher monthly income</li>
        </ol>
        </p>
      </div>
      <div class="row padrl">
            <p><span class="price">Why Doncaster?</span><br>
            There are many reasons but to name just a few let me introduce you to the latest achievements & improvements of Doncaster City.<br><br>
            We have set out a series of capital projects which will be funded during 2017/18, bringing investment and improvement across a number of areas of Doncaster.

            The £18.1 million of investment includes a broad range of works:
            <ul>
              <li>External enhancements, including roof works, fascias and soffits</li>
              <li>Internal works, including new kitchens, bathrooms and electrical upgrades</li>
              <li>Environmental improvements, including fencing and car parking schemes</li>
              <li>Improvements to non-traditional properties</li>
              <li>Central heating upgrades</li>
              <li>Rectifying structural issues in older properties</li>
              <li>Estate improvements to paths and garage sites</li>
              <li>Improvements to local shops.</li>
            </ul>
          </p>
      </div>
    </div>
  </div>
</div>

  </div>
  <div class="col-sm-2">

  </div>
  <!-- END MIDDLE CONTENT TEXT -->
</div>
</div>

<!-- End Content Container -->
@endsection
