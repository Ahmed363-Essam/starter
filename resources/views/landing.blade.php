
@extends('layout.master')


@section('content')
         <div class="nav-bullet">
            
             <div class="bullet" data-section="about-us">
                <div class="tooltop">
                    about us
                 </div>
               
             </div>
             <div class="bullet" data-section="Our-Skills">
                <div class="tooltop">
                    skill
                 </div>
               
             </div>
             <div class="bullet" data-section="gallery">
                <div class="tooltop">
                    gallary
                 </div>
                
             </div>
             <div class="bullet" data-section="timline">
                <div class="tooltop">
                    timeline
                 </div>
                
             </div>
             <div class="bullet" >
                <div class="tooltop">
                    feature
                 </div>
               
             </div>
             <div class="bullet">
                <div class="tooltop">
                    testimonial
                 </div>
                </div>
                 <div class="bullet">
                <div class="tooltop">
                    contact us
                 </div>
                </div>
             
         </div>
 
     <!-- end setting box -->

    <div class="header">
        <div class="overlay">
      
           <nav>
            <div class="container">
               <div class="content">
               <h2> Special Design</h2>
               <ul class="links">
                   <li ><a href="#" class="active" >home</a></li>
                   <li><a href="#"  data-section="about-us">about us </a></li>
                   <li><a href="#" data-section="Our-Skills">skill </a></li>
                   <li><a href="#" data-section="gallery">gallary</a></li>
                   <li><a href="#" data-section="timline">timeline</a></li>
                   <li><a href="#">feature</a></li>
                   <li><a href="#">testimonial</a></li>
                   <li><a href="#">contact us</a></li>
               </ul>
            </div>
           </nav>
           <div class="info">
               <h1>we are<span> creative </span>  agency</h1>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti recusandae veniam repellat omnis.</p>
           </div>
        </div>
    </div>
</div>
<!-- start about us -->
<div class="about-us">
<div class="container">
    <div class="content">
    <div class="info">
<h2 class="heading">ABOUT US</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae iusto, unde soluta cum nobis inventore non ducimus quaerat voluptas? Culpa, excepturi nostrum? Pariatur, obcaecati itaque nihil nisi incidunt doloribus?</p>

    </div>
    <div class="images">
        
             <img src="imag/work_03.png">
         
    </div>
</div>
</div>
</div>
<!-- start our skill -->
   <div class="Our-Skills">
       <div class="container">
           <div class="skills">
        <h2 class="heading">Our-Skills</h2>
           <div class="skill-box">
               <div class="skill-name">Html</div>
               <div class="skill-progress">
                   <span data-progress="90%"></span>
               </div>
           </div>


        <div class="skill-box">
            <div class="skill-name">css</div>
            <div class="skill-progress">
                <span data-progress="70%"></span>
            </div>
        </div>

        <div class="skill-box">
            <div class="skill-name">java script</div>
            <div class="skill-progress">
                <span data-progress="60%"></span>
            </div>
        </div>

        <div class="skill-box">
            <div class="skill-name">php</div>
            <div class="skill-progress">
                <span data-progress="90%"></span>
            </div>
        </div>
       </div>
   </div>
</div>
  <!-- start gallary  -->
    <div class="gallery">
        <div class="container">
          <h2 class="heading">our-gallery</h2>
          <div class="images-box">
              <div class="row">
              <img src="imag/images (1).jpg" alt="Image-One">
              <img src="imag/images (2).jpg"  alt="Image-two">
              <img src="imag/images(3).jpg"  alt="Image-three">
              <img src="imag/images(4).jpg"  alt="Image-four">
            </div>
            <div class="row">
              <img src="imag/images(5).jpg"  alt="Image-five">
              <img src="imag/images(6).jpg"  alt="Image-seix">
              <img src="imag/images(7).png"  alt="Image-seven">
              <img src="imag/images(8).png"  alt="Image-eight">
            </div>
            <div class="row">
              <img src="imag/images(9).png"  alt="Image-nine">
              <img src="imag/images(10).jpg"  alt="Image-ten">
              <img src="imag/images(11).jpg"  alt="Image-twelve">
              <img src="imag/images(12).jpg"  alt="Image-eleven">
            </div>

          </div>
        </div>
        <div class="popup">
            <div class="popup-box">
            <div id="caption" class="caption"></div>
            <div class="img-box">
            <img id="img" src="">
        </div>
                <span id="closed" class="closed">&times;</span>
 <div class="next"> > </div>
<div class="prev"> < </div>
        
        </div>
    </div>
    </div>
    <!-- start timeline -->
    <div class="timline">
        <div class="container">
            <div class="timeline-content">
                <div class="year">2018</div>
                <div class="left">
                    <div class="content-box">
                    <h3>testing Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit architecto, impedit aut numquam voluptates ab illum! Facilis, nemo molestiae quae a recusandae natus sequi omnis quia exercitationem! Optio, nihil!</p>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="right">
                    <div class="content-box">
                    <h3>testing Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit architecto, impedit aut numquam voluptates ab illum! Facilis, nemo molestiae quae a recusandae natus sequi omnis quia exercitationem! Optio, nihil!</p>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="year">2019</div>
                  
                <div class="left">
                    <div class="content-box">
                    <h3>testing Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit architecto, impedit aut numquam voluptates ab illum! Facilis, nemo molestiae quae a recusandae natus sequi omnis quia exercitationem! Optio, nihil!</p>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="left">
                    <div class="content-box">
                    <h3>testing Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit architecto, impedit aut numquam voluptates ab illum! Facilis, nemo molestiae quae a recusandae natus sequi omnis quia exercitationem! Optio, nihil!</p>
                </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- start testominals -->
    <div class="testimonial">
<div class="container">
    <div class="test-box">  
    <div class="img-box">
    <img class="active" src="imag/testy-1.jpg">
    <img src="imag/testy-2.jpg">
    <img src="imag/testy-3.jpg">
    <img src="imag/testy-4.jpg">
</div>
<h4> Hamada Mohamed</h4>
    <span>ceo At tamer</span>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, suscipit sapiente aliquid aspernatur, accusamus eaque quo tenetur amet libero omnis et perferendis harum fuga deleniti aliquam vero minus reiciendis! Iure.</p>
    

    <div class="next"> > </div>
    <div class="prev">  <</div>

</div>
</div>
    </div>

@stop