      <!-- E-commerce Products Starts -->

      <section id="ecommerce-products" class="list-view">
       

      </section>
      {{-- <div class="Page navigation example justify-content-center d-flex paginate-links">
        {!! $all_policies->links() !!}
    </div> --}}

      {{-- <script>
        url=@json($url);
        tariqa=@json($tariqa);
    </script> --}}
      <!-- E-commerce Products Ends -->

      <form id="sendData" target="_blank" method="POST" action="display_policy">
          @csrf
          <input type="hidden" name="sendOBJ">
      </form>
