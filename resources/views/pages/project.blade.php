@include('layouts.header')

@include('layouts.nav')

<section class="inner">

  @include('_messages')

 <div class="inner__title">
   <p class="inner-title">{{ $project->title }}</p>
   @if ($project->status == "Ongoing")
       <p class="inner-sub-margin inner-title inner-title-sub">(Ongoing)</p>
   @elseif ($project->status == "Completed")
       <p class="inner-sub-margin inner-title inner-title-sub">(completed)</p>
   @endif

   @if ($project->status == "Ongoing")
       <img src="{{ asset('img/Ongoing.svg') }}" alt="icon" class="inner__icon"/>
   @elseif ($project->status == "Completed")
       <img src="{{ asset('img/Completed.svg') }}" alt="icon" class="inner__icon"/>
   @endif
 </div>

 @if (empty($project->image1))
   <img srcset="/img/Banner2.jpg" alt="Project Image" class="inner__image">
 @else
   <img srcset="/img/projects/images/{{$project->image1}}" alt="Project Image" class="inner__image">
 @endif



 <div class="inner__info">
   <p class="inner-font inner-font-title">Beneficiary School</p>
   <p class="inner-font">{{ $project->beneficiary_school }}</p>
 </div>
 <div class="inner__info">
   <p class="inner-font inner-font-title">Location</p>
   <p class="inner-font">{{ $project->address }}, {{ $project->city }} {{ $project->state }}.</p>
 </div>
 <div class="inner__info">
   <p class="inner-font inner-font-title">Project Description</p>
   <p class="inner-font">
    {{ $project->description }}
   </p>
 </div>
 <div class="inner__info">
   <p class="inner-font inner-font-title">Amount Donated</p>
   <p class="inner-font">{{ $project->amount_raised }}</p>
 </div>

 <div class="center-text">
   <p class="gallery-margin gallery-title">Gallery</p>
 </div>

 <div class="inner__gallery">
   <div class="inner__gallery__box">
     <img src="{{ asset('img/grey-color.jpg') }}" alt="Gallery Image" class="inner__gallery__image">
   </div>
   <div class="inner__gallery__box">
     <img src="{{ asset('img/grey-color.jpg') }}" alt="Gallery Image" class="inner__gallery__image">
   </div>
   <div class="inner__gallery__box">
     <img src="{{ asset('img/grey-color.jpg') }}" alt="Gallery Image" class="inner__gallery__image">
   </div>
   <div class="inner__gallery__box">
     <img src="{{ asset('img/grey-color.jpg') }}" alt="Gallery Image" class="inner__gallery__image">
   </div>
 </div>

 <div class="inner__buttons">

       <a href="/projects/all" id="back-button" class="btn btn__gallery"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp; Back</a>

       @if($project->status == "Ongoing" )

          <a href="/project/funding/{{ $project->id }}" id="sub-button" class="btn btn__gallery"><i class="fas fa-credit-card"></i>&nbsp;&nbsp; Pay</a>

       @endif


 </div>

</section>

@include('layouts.footer')
