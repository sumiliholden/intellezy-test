
</div>
  <div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-24 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      @foreach($posts as $post)
    <x-post-card :post="$post" />
    @endforeach
      </div>
    </div>
  </div>

