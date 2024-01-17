 @php
     $button_classes = 'cta-button py-2 px-5 text-center border border-black text-black hover:bg-black hover:text-white transition';
     $button_text = get_field('button_text');
 @endphp

 <section class="cta flex w-full justify-center py-12">

     <div class="cta-container flex w-4/5 max-w-screen-lg flex-col items-center">
         <img class="w-1/2 sm:w-1/4"
             src="{{ get_field('image') }}"
             alt="cta image">
         <div class="cta-content w-full text-center text-lg text-gray-800">
             {!! get_field('content') !!}
         </div>


         <div class="cta-button flex justify-center pt-2">
             <a href="{{ get_field('button_link') }}"
                 class="{{ $button_classes }}">{{ $button_text }} ➤</a>
         </div>


     </div>

 </section>
